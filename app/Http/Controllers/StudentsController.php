<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    function show($name)
    {
        return $name;
    }
    function login()
    {
        return 'student login';
    }
    function signup()
    {
        return 'student signup';
    }
    function add()
    {
        return 'student add';
    }
    function delete()
    {
        return 'student delete';
    }
    function studentsList()
    {
        $students = \App\Models\Student::all();
        return view('studentslist', ['students' => $students]);
    }
}