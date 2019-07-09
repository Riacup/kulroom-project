<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Photo;

class UploadController extends Controller
{
    public function upload()
    {
        $photos = Photo::get();
        return view('upload', [ 'photo'=>$photos ]);
    }

    public function proses_upload(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        // menyimpan data file yang diupload ke variable $file
        $file = $request->file('file');

        $nama_file = time()."_".$file->getClientOriginalName();

        // diisi dengan nama folder tempat kemana file akan diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);

        Photo::create([
            'file' => $nama_file,
        ]);

        return redirect()->back();
    }

}
