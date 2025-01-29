<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function uploadfile(Request $req)
    {
        $path = $req->file('file')->store('public');
        return ['result' => $path];
    }
}
