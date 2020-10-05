<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imagecropcontroller extends Controller
{
	public function index()
    {
        return view('slider');
    }

    public function upload(Request $request)
    {
        $folderPath = public_path('uploads/');

        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file = $folderPath . uniqid() . '.png';

        file_put_contents($file, $image_base64);

        return response()->json(['success'=>'success']);
    }
}
