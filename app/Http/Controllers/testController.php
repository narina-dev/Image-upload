<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\image;

class testController extends Controller
{
    public function upload(Request $request){

        if($request->hasFile('img')){
            $image_array = $request->file('img');

            $array_len = count($image_array);

            for($i=0; $i<$array_len;$i++){
                $image_size = $image_array[$i]->getClientSize();
                $image_ext = $image_array[$i]->getClientOriginalExtension();

                $new_image_name = rand(123456,999999).".".$image_ext;

                $destination_path = public_path('/images');

                $image_array[$i]->move($destination_path,$new_image_name);

                $image = new image;
                $image->image_size = $image_size;
                $image->image_name = $new_image_name; 
                $image->product_name = $request->input('product_name');
                $image->product_price = $request->input('product_price');
                $image->product_description = $request->input('product_description');
                

                $image->save();
            }
            return redirect('/DisplayImages');
            // return redirect()->back()->with('msg','upload succesfull!!');
        
        }
        else{
            return back() ->with('msg','Please choose any image file');
        }
    }
    
    public function displayImages(){
        $images = image::all();
        return view('display',compact('images'));
        
    }
    
}
