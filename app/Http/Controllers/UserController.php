<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function getUser()
    {
        $users = DB::select('select*from users');
        return view('user.userlist', ['users' => $users]);
    }
    function welcomeUser($name)
    {
        // return "Welcome to Fxis.ai ".$name;
        return view('user.welcomeuser', ['name' => $name]);
    }
    function userLogin()
    {
        // return "Welcome to Fxis.ai ".$name;
        return view('user.login');
    }
    function userRegister()
    {
        // return "Welcome to Fxis.ai ".$name;
        return view('user.register');
    }
    function userDashboard()
    {
        // return "Welcome to Fxis.ai ".$name;
        return view('user.dashboard');
    }
}
