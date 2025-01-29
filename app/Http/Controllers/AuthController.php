<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function signin()
    {
        return view('signin');
    }

    function signup()
    {
        return view('signup');
    }

    function profile()
    {
        return view('profile');
    }

    function registerUser(Request $request)
    {
        $request->validate([
            'username' => 'required | min:3 | max:15',
            'email' => 'required | email',
            'password' => 'required',
        ]);

        return ($request);
    }

    function authenticateUser(Request $request)
    {
        $request->validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);

        $request->session()->put('user', $request->email);
        return redirect('/profile');
    }

    function logout(Request $request)
    {
        $request->session()->pull('user');
        return redirect('/profile');
    }
}
