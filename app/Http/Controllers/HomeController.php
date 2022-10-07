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
        // $histories = History::all();
        // order by desc created at
        $histories = History::orderBy('created_at', 'desc')->get();

        $categories = Category::all();
        return view('home', [
        'categories' => $categories,
        'histories' => $histories,
        // take only 3 categories of each histories


    ]);



    }

    public function homecategory($id)
    {




        $category = Category::with('history')->orderBy('created_at', 'desc')->find($id);
        $categories = Category::all();
        return view('history.homecategory', [
            'categories' => $categories,
           // trier par les plus récent
            'histories' => $category->history,

            'category' => $category,
        ]);

}

    }
