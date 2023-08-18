<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth_page/login');
    }

    public function login(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password'=>$request->input('password'),

        ];

        if (Auth::Attempt($data)){
            return view('main_page/home');
        }else{
            Session::flash('error','password atau email salah');
            return redirect()->route('login.index');

        }
    
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
        
}
