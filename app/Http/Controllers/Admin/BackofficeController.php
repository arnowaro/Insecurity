<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\User;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public Function show()
    {

        return view('admin.backoffice');

    }


    public function indexUsers()
    {
        $users = User::all();
        return view('admin.dashboard.users.index', [
            'users' => $users
        ]);


    }


    //delete user
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
