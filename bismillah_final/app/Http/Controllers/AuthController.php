<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auths.login');
    }

    public function postlogin(Request $request)
    {
        // dd($request->all());
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/dashboard');
        }

        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();

       return redirect('/login');
    }
    
}
