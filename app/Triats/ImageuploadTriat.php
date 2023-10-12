<?php

namespace App\Triats;

use Intervention\Image\Facades\Image as Image;


trait ImageuploadTriat
{

   public function uploadImg($request)
{
    if ($request->has('img')) {
        $image = $request->file('img');

        // Add debugging statements
        if (!$image) {
            dd('No image received in the request');
        }

        $fileName = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path('uploads/' . $fileName));
        $file_path = '/uploads/' . $fileName;
        return $file_path;
    } else {
        dd('No "img" field in the request');
    }
}


    public function uploadReportAttachment($request){

        if ($request->has('attachment')) {
            $image = $request->file('attachment');

            $fileName = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('reports/' . $fileName));
            $file_path = '/reports/' . $fileName;
            return $file_path;
        }
    }
    
}