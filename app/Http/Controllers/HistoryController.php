<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\History;
use Illuminate\Http\Request;


class HistoryController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('history.create', [
            'categories' => $categories
        ]);
    }

    public function index()
    {
        return view('admin.dashboard.histories.index');
    }


    // show
    public function show($id)
    {
        $history = History::find($id);
        return view('history.show', [
            'history' => $history
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|max:255',
            'city' => 'required',
            'country' => 'required',
            'time' => 'required',
            'description' => 'required|max:1024',
            'longitude' => 'required',
            'latitude' => 'required',
            'categories' => 'required',
            'categories.*' => 'exists:category,id',
            'jugement' => 'max:1024',
            'url' => 'url',
        ]);

        $history = new History();
        $history->user_id = $request->input('user_id');
        $history->titre = $validate['title'];
        $history->ville = $validate['city'];
        $history->pays = $validate['country'];
        $history->date = $validate['time'];
        $history->description = $validate['description'];
        $history->longitude = $validate['longitude'];
        $history->latitude = $validate['latitude'];
        $history->jugement = $validate['jugement'];
        $history->url = $validate['url'];
        $history->save();
        $history->Category()->attach($validate['categories']);

        return redirect()->route('home')->with('status', '  History added  ');

    }

    public function edit($id)
    {
        $history = History::with('Category')->find($id);
        $categories = Category::all();
        $categoriesHistory = collect($history->Category->toArray())->map(function ($category) {
            return $category['id'];
        })->toArray();
        return view('history.edit', [
            'history' => $history,
            'categories' => $categories,
            'categoriesHistory' => $categoriesHistory
        ]);


    }

    public function update (Request $request, $id)
    {
        $validate = $request->validate([
            'title' => 'required|max:255',
            'city' => 'required',
            'country' => 'required',
            'time' => 'required',
            'description' => 'required|max:1024',
            'longitude' => 'required',
            'latitude' => 'required',
            'categories' => 'required',
            'categories.*' => 'exists:category,id',
            'jugement' => 'max:1024',
            'url' => 'url',
        ]);

        $history = History::find($id);
        $history->user_id = $request->input('user_id');
        $history->titre = $validate['title'];
        $history->ville = $validate['city'];
        $history->pays = $validate['country'];
        $history->date = $validate['time'];
        $history->description = $validate['description'];
        $history->longitude = $validate['longitude'];
        $history->latitude = $validate['latitude'];
        $history->jugement = $validate['jugement'];
        $history->url = $validate['url'];
        $history->save();
        $history->Category()->sync($validate['categories']);

        return redirect()->route('home')->with('status', '  History updated  ');

    }

    // fonction delete  softdelete
    public function delete($id)
    {
        $history = History::find($id);
        $history->delete();
        return redirect()->route('home')->with('status', '  History deleted  ');
    }

}

