<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public Function show()
    {

        return view('admin.backoffice');

    }
}
