<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        return "Fxis.ai";
    }
    function welcomeUser($name){
        // return "Welcome to Fxis.ai ".$name;
        return view('welcomeuser',['name'=>$name]);
    }

}
