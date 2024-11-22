<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller


{   
    
    
    
    public function store(Request $request){
        foreach($request->file('image') as $file){
           
            $imageName =$file->getClientOriginalName();  

            $file->move(public_path('Galerie'), $imageName);

            $image = new Image();
            $image->name = $imageName;
            $image->save();

        }
    return redirect('/fr/ajoutimage');
    }


public function DeleteImage($slug,$id)
            { if(Auth::check()){

    Image::findOrFail($id)->delete();
    return redirect('/fr/ajoutimage');}
else { return view('admin/Login');}
}


                                                     

    public function getImages(Request $request) {  
        $start = $request->input('start');
        error_log($start);
        $images= DB::select("SELECT name FROM images ORDER BY id DESC LIMIT ?, 6", [$start]);
        return $images;
    }


}