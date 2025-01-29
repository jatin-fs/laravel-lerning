<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UploadController;

// to access controllers or view 
Route::get('/', function () {
    return view('welcome');
});

// for accessing view directly
// Route::view('/home', 'home');
// http://127.0.0.1:8000/home?countrycode=in&age=25
Route::view('/home', 'home')->middleware('countryandage');

Route::get('/about/{name}', function ($name) {
    return view('about', ['name' => $name]);
});

Route::redirect('/test', '/');

Route::get('/userlist', [UserController::class, 'getUser']);
Route::get('/welcome/{name}', [UserController::class, 'welcomeUser']);
Route::get('/admin/login', [AdminController::class, 'adminLogin']);
Route::get('/register', [AdminController::class, 'adminRegister']);
Route::post('/adduser', [AdminController::class, 'registerUser']);

Route::post('/update-profile', [AdminController::class, 'updateProfile']);
Route::get('/update-profile', function () {
    return view('admin.profileform');
});

Route::prefix('/user')->group(function () {
    // Route::get('/{name}', [UserController::class, 'welcomeUser']);
    Route::get('/login', [UserController::class, 'userLogin']);
    Route::get('/register', [UserController::class, 'userRegister']);
    Route::get('/dashboard', [UserController::class, 'userDashboard']);
});


Route::controller(StudentsController::class)->group(function () { //Controller route group appliction
    Route::prefix('/students')->group(function () { // prefix route group appliction
        Route::get('/list', 'studentsList');
        Route::middleware('countryandage')->group(function () { // middleware route group appliction
            Route::get('/show/{name}', 'show');
            Route::get('/add', 'add');
            Route::get('/delete', 'delete');
            Route::get('/login', 'login');
            Route::get('/signup', 'signup');
        });
    });
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/signin', 'signin');
    Route::get('/signup', 'signup');
    Route::get('/logout', 'logout');
    Route::get('/profile', 'profile');
    Route::post('/signup', 'registerUser');
    Route::post('/signin', 'authenticateUser');
});


Route::post('/uploadfile', [UploadController::class, 'uploadfile']);
Route::get('/upload', function () {
    return view('upload');
});
