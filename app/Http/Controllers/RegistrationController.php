<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('auth_page/registration');
    }

    public function store(Request $request)
    {
        $user = User::create([
            'email'=> $request->email,
            'name'=> $request->name,
            'password'=> Hash::make($request->password),
        ]);

        if (!$user){
            Session::flash('error','gagal');
            
        }

        Session::flash('message','sukses');
        return redirect()-> route('login.index');


    }
    
}
