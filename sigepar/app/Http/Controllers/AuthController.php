<?php

namespace App\Http\Controllers;

use App\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Traits\Timestamp;
use DateTime;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function postlogin(Request $request)
    { 
 

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        $userRole = DB::table('users')
                    ->where('username', $request['username'])
                    ->first();

   
 
        if (Auth::attempt($credentials)) {
            
           
            switch ($userRole->role) {
                case 'admin':
                    return redirect('/Dashboard_admin');
                case 'jemaat' :
                    return redirect('/Dashboard_jemaat');
                case 'pengurus':
                    return redirect('Dashboard_pengurus');
                default:
                    return redirect('/');
            }
 
        }


        return redirect('/')->with('failure', 'Username atau Password Anda salah Silahkan Login Kembali');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function register()
    {
        return view('Users.Register');
    }


    public function loginUsers(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required', 'min:6'],
        ]);

        $userRole = DB::table('users')
                    ->where('username', $request['username'])
                    ->first();

   
 
        if (Auth::attempt($credentials)) {
            
           
            switch ($userRole->role) {
                case 'admin':
                    return redirect('/Dashboard_admin');
                case 'jemaat' :
                    return redirect('/Dashboard_jemaat');
                case 'pengurus':
                    return redirect('Dashboard_pengurus');
                default:
                    return redirect('/');
            }
 
        }

        return redirect('/login')->with('failure', 'Username atau Password Anda salah Silahkan Login Kembali');
    }

    public function registerUser(Request $request)
    {

        $result = $request->validate([
            'nama' => ['required'],
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if($result){
             \App\Models\User::create([
                'nama' => $request->nama,
                'username' => $request->username,
                'password' =>  Hash::make($request->password),
                'role' => 'jemaat',
                'tgl_bergabung' => date('Y-m-d H:i:s')
             ]);
        }
      
        return redirect('/login')->with('succes', 'Berhasil registrasi');
    }

    public function login()
    {
        return view('Users.Login');
    }

    public function updateUserByID(Request $request)
    {
         $id = Auth::user()->id;
         $this->validate($request, [
            'nama' => 'required| min:5',
            'jenis_kelamin' => 'required',
            'keluarga' => 'required',
            'no_hp' => 'nullable|numeric',
            'tgl_lahir' => 'required',
            'tgl_bergabung' => 'required',
            'status' => 'required',
            'avatar' => 'mimes:jpg,png',
        ]);
        $jemaat = \App\Models\User::find($id);
        $jemaat->update($request->all());
        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('fileweb/', $request->file('avatar')->getClientOriginalName());
            $jemaat->avatar = $request->file('avatar')->getClientOriginalName();
            $jemaat->save();
        }
        
        return redirect('/Dashboard_profile')->with('succes', 'Data Jemaat ' .  $jemaat->nama  .  'Berhasil Diubah');
    }
}
