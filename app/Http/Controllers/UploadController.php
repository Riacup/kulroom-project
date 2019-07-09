<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Photo;

class UploadController extends Controller
{
    public function upload()
    {
        $photo = Photo::get();
        return view('upload', [ 'photo'=>$photo ]);
    }

    
}
