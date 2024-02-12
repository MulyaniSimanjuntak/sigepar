<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class RegisterController extends Controller
{

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'password' => bcrypt($request->password),
            'confirmPassword' => bcrypt($request->confirmPassword),
        ]);

        return redirect('/register')->with('success', 'Akun berhasil dibuat!');
    }

    public function index()
    {
        return view('register', []);
    }
}
