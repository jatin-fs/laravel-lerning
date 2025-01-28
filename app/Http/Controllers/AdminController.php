<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    function adminLogin()
    {
        return view('admin.login');
    }

    function adminRegister()
    {

        if (View::exists('admin.register')) {
            return view('admin.register');
        } else {
            echo "Page Not Found";
        }
    }

    function registerUser(Request $request)
    {

        $request->validate([
            'username' => 'required | min:3 | max:15 | uppercase',
            'email' => 'required | email',
            'password' => 'required',
        ]);

        return ($request);
    }

    function updateProfile(Request $request)
    {
        echo $request->gender;
        echo '<br/>';
        print_r($request->skills);
        echo '<br/>';
        echo $request->city;
        echo '<br/>';
        echo $request->contact;
        echo '<br/>';
        echo $request->age;
        echo '<br/>';
        echo $request->ratting;
        echo '<br/>';
    }
}