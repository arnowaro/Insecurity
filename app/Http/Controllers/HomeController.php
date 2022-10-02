<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\History;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        // history
        $histories = History::all();
        $categories = Category::all();
        return view('home', [
        'categories' => $categories,
        'histories' => $histories,
        ]);


    }

    public function homecategory($id)
    {


        $category = Category::with('history')->find($id);
        $categories = Category::all();
        return view('history.homecategory', [
            'categories' => $categories,
            'histories' => $category->histories,
            'category' => $category,
        ]);


}

    }
