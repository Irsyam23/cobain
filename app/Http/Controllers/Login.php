<?php

namespace App\Http\Controllers;

use App\Models\LoginModel;
use Illuminate\Http\Request;

class Login extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function loginproses(Request $request)
    {
        $logon = new LoginModel();
        $username = Request('username');
        $password = Request('password');
        // dd($username);
        $use = $logon->where('username', $username)->first();
        // $pass = $logon->where('password', $password)->first();
        // dd($ambil->username);


        if ($username == $use->username && $password == $use->password) {
            dd('ada');
            session(['login' => true]);
            return redirect()->route('dashboard');
        } else {
            dd('tidak ada');
            return redirect()->route('login')->with('error', 'Username atau Password Salah');
        }
    }
}
