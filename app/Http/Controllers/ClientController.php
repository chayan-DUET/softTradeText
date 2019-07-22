<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Client;
use DB;
use Session;

class ClientController extends Controller
{
    public function show(){
		  //return view('/registerclient');
		  	$client=  User::all();
		
		return view('admin.client.client_list',['client'=>$client]);
		 // return view('admin.client.client_list');
	}
	  public function admin(){
		  //return view('/adminregister');
		  return view('admin.client.add_client');
	}
	public function addclient(Request $request) {
		//dd($request->all());
		$this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            //'image' => 'required',
            'company_name' => 'required',
        ]);
	   //
/* 	    $image = $request->file('image');
//        echo '<pre>';
//        print_r($image);
        $name = $image->getClientOriginalName();
        //echo $imageName;
        $uploadPathImage = 'public/clientImage/';
        $image->move($uploadPathImage, $name);
        //
        $imageUrl = $uploadPathImage . $name; */
        $this->saveClientInfo($request);
		   return redirect('/client-list')->with('message', 'product info save successfully');
    }
		 protected function saveClientInfo($request) {
			 // $client = new Client();
        $client = new User();
        $client->fast_name = $request->first_name;
        $client->last_name = $request->last_name;
        $client->name = $request->full_name;
        $client->address = $request->address;
        $client->phone = $request->phone;
        $client->email = $request->email;
       // $client->productLongDiscription = $request->productLongDiscription;
        // $product->productImage=$this->imageUrl;
        //$client->image = $imageUrl;
		if($request->hasfile('image')){
			$file=$request->file('image');
			$extension = $file->getClientOriginalExtension();
			$filename=time().'.'.$extension;
			$file->move('public/productImage/',$filename);
			$client->image = $filename;
		}
        $client->company_name = $request->company_name;
		//$client->quantity = $request->quantity;
		$client->description = $request->description;
		$client->status = $request->status;
		$client->password = $request->password;
        $client->save();
    }
	   //
	  /* { $data=array();
	   $data['first_name']=$request->first_name;
	   $data['last_name']=$request->last_name;
	   $data['email']=$request->email;
	   $data['email']=$request->email;
	   $data['mobil_number']=$request->mobil_number;
	   $data['password']=$request->password;
	   
	   $customer_id=DB::table('Customers')
	                     ->insertGetId($data);
						  Session::put('id',$customer_id);
						  Session::put('customer_name',$request->customer_name);
						  return Redirect('/checkout');
   } */
   
   	public function editClient($id){
		 $clientById= User::where('id',$id)->first();
          return view('admin.client.edit_client',['clientById'=>$clientById]);          

	}
	
	 public function updateClient(Request $request) {
      // $imageUrl= $this->imageExitStatus($request);
        
		$client= User::find($request->ClientId);
		//$product = new Product();
        $client->fast_name = $request->first_name;
         $client->last_name = $request->last_name;
        $client->name = $request->full_name;
		$client->company_name = $request->company_name;
        $client->address = $request->address;
        $client->phone = $request->phone;
        $client->email = $request->email;
       // $client->image = $imageUrl;
	   if($request->hasfile('image')){
			$file=$request->file('image');
			$extension = $file->getClientOriginalExtension();
			$filename=time().'.'.$extension;
			$file->move('public/productImage/',$filename);
			$client->image = $filename;
		}
		
		$client->description = $request->description;
		
        $client->save();
		//return redirect('/admin/product/product_list')->with('message', 'product update successfully');
		return redirect('/client-list')->with('message', 'product update successfully');
        //echo '<pre>';
//         print_r($productImage);
       // echo $imageUrl;
        // exit();
    }
	
	  public function imageExitStatus($request) {
        $clientById = Client::where('id', $request->ClientId)->first();
        $clientImage=$request->file('image');
        if ($clientImage) {
            unlink($clientById->image);
            $name = $clientImage->getClientOriginalName();
            $uploadPathImage = 'public/clientImage/';
            $clientImage->move($uploadPathImage, $name);
            $imageUrl = $uploadPathImage . $name;
        } else {
            
            $imageUrl = $clientById->clientImage;
        }

        return $imageUrl;
    }
		public function deleteClient($id){
        $client= Client::find($id);
        $client->delete();
        return redirect('/show-client')->with('message', 'manufacture info delete successfully');
    
	}
   
    public function client_login(Request $request){
	                    $email=$request->email;
						 $password=$request->password;
						 $result_login=DB::table('Clients')
						              ->where('email',$email)
									  ->where('password',$password)
									  ->first();
									  
									  // echo "<pre>";
									   //print_r($result_login);
									   //echo "</pre>";
						if($result_login){
							Session::put('id',$result_login->id);
							return Redirect('/home');
						}
						else{
							return Redirect('/');
						}
}
public function loginclient(){
	return view('clientlogin');
}
}
