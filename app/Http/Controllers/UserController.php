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
		$user = Auth::user();
		if($request->hasfile('image')){
			$file=$request->file('image');
			$extension = $file->getClientOriginalExtension();
			$filename=time().'.'.$extension;
			$file->move('public/productImage/',$filename);
			$user->image = $filename;
			//dd($user);
			$user->update();
		}
		return redirect('/profile');
/* 		  $image = $request->file('image');
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
		 return redirect('admin.user.add_profile', array('user' => Auth::user()) ); */
    	}
    	//return view('admin.user.add_profile', array('user' => Auth::user()) );
    
	}

