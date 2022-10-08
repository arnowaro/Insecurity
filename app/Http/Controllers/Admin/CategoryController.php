<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.dashboard.categories.index', [
        'categories' => $categories

    ]);


    }

    public function create()
    {
        return view('admin.dashboard.categories.create');
    }



    public function store(Request $request)
    {
        if ($request->method() == 'POST') {
            $rules = [
                'label' => 'required|max:255',
                'description' => 'required|max:1024',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ];
            $validated = $request->validate($rules);
            $category = new Category();
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('\images\category', 'public');
                $category->image = $path;
            }

            $category->label  = $validated['label'];
            $category->description = $validated['description'];
            $category->save();
            return redirect()->route('category.index')->with('status', '  category added  ');
        }
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.dashboard.categories.edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, $id)
    {
        if ($request->method() == 'POST') {
            $rules = [
                'label' => 'required|max:255',
                'description' => 'required|max:1024',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ];
            $validated = $request->validate($rules);
            $category = Category::find($id);
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('\images\category', 'public');
                $category->image = $path;
            }

            $category->label  = $validated['label'];
            $category->description = $validated['description'];
            $category->save();
            return redirect()->route('category.index')->with('status', '  category updated  ');
        }
    }

    // public function delete(Request $request)
    // {
    //     $categorydelete = Category::find($request->input('ids'));
    //     if (isset($categorydelete)) {
    //         $categorydelete->delete();
    //         return redirect()->route('admin.category')->with('status', "La catégorie a bien été supprimé!");
    //     } else {
    //         return redirect()->route('admin.category')->with('error', 'opération annulée');
    //     }
    // }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index')->with('status', '  category deleted  ');
    }
}
