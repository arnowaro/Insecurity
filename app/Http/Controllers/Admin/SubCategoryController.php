<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.subcategories.index');
    }

    public function create()
    {
        return view('admin.dashboard.subcategories.create');
    }

    public function store(Request $request)
    {
        if ($request->method() == 'POST') {
            $rules = [
                'label' => 'required|max:255',
                'categories' => 'required',
                'categories.*' => 'numeric|exists:category_action,id',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ];

            $validated = $request->validate($rules);
            $subCategory = new SubCategory();

            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('\images\subcategory', 'public');
                $subCategory->image = $path;
            }

            $subCategory->label = $validated['label'];
            $subCategory->save();
            $subCategory->Categories()->attach($validated['categories']);
            return redirect()->route('action.subcategory.create')->with('status', '  SubCategory added  ');
        }
    }
}
