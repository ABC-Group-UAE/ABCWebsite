<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\Image;

class Imagecontroller extends Controller
{
    //
    public function create(){
        return view('imageUploadingPage');
    }

    public function store(Request $request){
        $path = $request->file('image')->store('images', 's3');
        Storage::disk('s3')->setVisibility($path , 'public');
        $image = Image::create([
            'filename' => basename($path),
            'url' => Storage::disk('s3')->url($path)
        ]);

        // return redirect()->route('image.show', $image);
        //    redirect show( $image);
       return $image;
    }

    public function show(Image $image){
        // return $imagefilename;
        return Storage::disk('s3')->response('images/'.$image->filename);
        // return Storage::disk('s3')->response($imagefilename);
    }
}
