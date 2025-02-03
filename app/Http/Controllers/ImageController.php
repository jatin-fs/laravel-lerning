<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    function uploadimg(Request $req)
    {

        $fullPath = $req->file('image')->store('uploads', 'public');
        $pathArray = explode('/', $fullPath);
        $path = $pathArray[1];
        $img = new Image();
        $img->path = $path;
        if ($img->save()) {
            return   redirect('/listfile');
        } else {
            return "Failed to upload";
        }
    }

    function listfile()
    {
        $images = Image::all();
        return view('displayimage', ['images' => $images]);
    }
}
