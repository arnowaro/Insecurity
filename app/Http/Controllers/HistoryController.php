<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HistoryController extends Controller
{




    public function create()
    {
        return view('history.create');
    }
}

