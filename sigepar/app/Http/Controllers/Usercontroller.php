<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index(){
        $users = \App\Models\User::where('role', '!=', 'admin')->get();
        return view('Users.data_users.index', ['users' => $users] );
    }
}
