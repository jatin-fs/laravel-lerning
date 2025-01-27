<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

// to access controllers or view 
Route::get('/', function () {
    return view('welcome');
});

// for accessing view directly
Route::view('/home', 'home');

Route::get('/about/{name}', function ($name) {
    return view('about', ['name' => $name]);
});

Route::redirect('/test', '/');

Route::get('/user', [UserController::class, 'getUser']);
Route::get('/welcome/{name}', [UserController::class, 'welcomeUser']);
Route::get('/admin/login', [AdminController::class, 'adminLogin']);
Route::get('/register', [AdminController::class, 'adminRegister']);
Route::post('/adduser', [AdminController::class, 'registerUser']);

Route::post('/update-profile', [AdminController::class, 'updateProfile']);
Route::get('/update-profile', function () {
    return view('admin.profileform');
});