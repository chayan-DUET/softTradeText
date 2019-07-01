<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
class UserController extends Controller
{
    public function profile(){
		return view('admin.user.add_profile',array('user'=>Auth::user()));
	}
	public function update_profile(Request $request){
		
		  $image = $request->file('image');
//        echo '<pre>';
//        print_r($image);
        $name = $image->getClientOriginalName();
        //echo $imageName;
        $uploadPathImage = 'public/productImage/';
        $image->move($uploadPathImage, $name);
        //
        $imageUrl = $uploadPathImage . $name;
		$user = Auth::user();
		 $user->image = $imageUrl;
		 $user->save();
    	}
    	//return view('admin.user.add_profile', array('user' => Auth::user()) );
    
	}

