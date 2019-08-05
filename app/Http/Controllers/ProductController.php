<?php

namespace App\Http\Controllers;

use App\Notifications\EditProduct;
use App\Notifications\Editqty;
use App\Notifications\Editddate;
use App\Notifications\AddProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Product;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use Session;
use Carbon\Carbon;
use StreamLab\StreamLabProvider\Facades\StreamLabFacades;

class ProductController extends Controller
{
    public function add_product(){
		$users = Auth::User()->where('status', 1)->get();
		return view('admin.product.add_Product',['users'=>$users]);
		//return view('product.Product'); add_product
	}
	
	public function show_product(){
		//$products=  Product::all();
		$product1=  Product::all();
		 $products= DB::table('Products')
		->join('users', 'Products.user_id','=','users.id')
		 ->select('users.*', 'Products.*')
            ->get(); 
		//return view('product.Show',['products'=>$product]);
		//return view('product.Show');
		return view('admin.product.product_list',['products'=>$products,'product1'=>$product1]);
	}
	
	public function create_product(Request $request){
		                  //dd($request->all());
		$this->validate($request, [
            'bday_tfd' => 'required',
            'category' => 'required',
            'image' => 'required',
            'factory_name' => 'required',
			'company_name' => 'required',
        ]);
	   //
/* 	    $image = $request->file('image');
//        echo '<pre>';
//        print_r($image);
        $name = $image->getClientOriginalName();
        //echo $imageName;
        $uploadPathImage = 'public/productImage/';
        $image->move($uploadPathImage, $name);
        //
        $imageUrl = $uploadPathImage . $name; */
        $this->saveProductInfo($request);
		  // return redirect('/admin/product/product_list')->with('message', 'product update successfully');
		  // return redirect('/home')->with('message', 'product info save successfully');
		    
		   return redirect('/show-product')->with('message', 'order info save successfully');
    }
		 protected function saveProductInfo($request) {
        $product = new Product();
        $product->bday_tfd = $request->bday_tfd;
        $product->category = $request->category;
		 $product->comp_sname = $request->comp_sname;
		  $product->season = $request->season;
        $product->style = $request->style;
        $product->description = $request->description;
        $product->fabric = $request->fabric;
	
        if($request->hasfile('image')){
			$file=$request->file('image');
			$extension = $file->getClientOriginalExtension();
			$filename=time().'.'.$extension;
			$file->move('public/productImage/',$filename);
			$product->image = $filename;
		}
        //$product->image = $imageUrl;
        $product->color = $request->color;
		$product->company_no = $request->company_no;
		$product->quantity = $request->quantity;
		$product->remark = $request->remark;
		$product->factory_name = $request->factory_name;
		 $product->user_id = $request->company_name;
		//$product->company_name = $request->company_name;
/* 		 $steps = $request->input('steps');
  if (!empty($steps)) {
     $product->steps = implode(',', $steps);
  } else {
     $product->steps = '';
  } */
		$product->steps = implode(",", $request->steps);
		 //$product->running_steps = $request->running_steps;
		 //$running_steps = $request->input('running_steps');
         $product->running_steps = implode(",", $request->running_steps);
		$product->bday_dd = $request->bday_dd;
		$product->will_send_date = $request->will_send_date;
		$product->will_send_date_strike = $request->will_send_date_strike;
		$product->will_send_date_size = $request->will_send_date_size;
		$product->will_send_date_pp = $request->will_send_date_pp;
		$product->will_send_date_ps = $request->will_send_date_ps;
		$product->Sent_date = $request->Sent_date;
		$product->Sent_date_strike = $request->Sent_date_strike;
		$product->Sent_date_size = $request->Sent_date_size;
		$product->Sent_date_pp = $request->Sent_date_pp;
		$product->Sent_date_ps = $request->Sent_date_ps;
		$product->will_comment = $request->will_comment;
		$product->will_comment_strike = $request->will_comment_strike;
		$product->will_comment_size = $request->will_comment_size;
		$product->will_comment_pp = $request->will_comment_pp;
		$product->will_comment_ps = $request->will_comment_ps;
		$product->revised_date = $request->revised_date;
		$product->revised_date_strike = $request->revised_date_strike;
		$product->revised_date_size = $request->revised_date_size;
		$product->revised_date_pp = $request->revised_date_pp;
		$product->revised_date_ps = $request->revised_date_ps;
		
		$product->revised_sent_date = $request->revised_sent_date;
		$product->revised_sent_date_strike = $request->revised_sent_date_strike;
		$product->revised_sent_date_size = $request->revised_sent_date_size;
		$product->revised_sent_date_pp = $request->revised_sent_date_pp;
		$product->revised_sent_date_ps = $request->revised_sent_date_ps;
		$product->revised_comment = $request->revised_comment;
		$product->revised_comment_strike = $request->revised_comment_strike;
		$product->revised_comment_size = $request->revised_comment_size;
		$product->revised_comment_pp = $request->revised_comment_pp;
		$product->revised_comment_ps = $request->revised_comment_ps;
		//dd($product);
        //$product->save();
		  if($product->save()){
            $user = User::all();
            Notification::send($user , new AddProduct($product));
            //$data = 'We Have New Post ' .$post->title ." <br> Added By " . auth()->user()->name;
            //StreamLabFacades::pushMessage('test' , 'AddPost' , $data);
        }
		
	}
	public function editProduct($id){
		 $users = Auth::User()->where('status', 1)->get();
		 $productById= Product::where('id',$id)->first();
		Session::put('productById',$productById->quantity);
		Session::put('productBydd',$productById->bday_dd);
		//dd(session()->get('productById'));
		 $steps=explode(",", $productById->steps);
		 
          return view('admin.product.edit_product',['productById'=>$productById,'steps'=>$steps,'users'=>$users]);          
		 //return view('product.editProduct',['productById'=>$productById,'steps'=>$steps]);
		//return view('product.editProduct');
	}
	

	 public function updateProduct(Request $request,$id) {
       //$imageUrl= $this->imageExitStatus($request);
        $product= Product::find($id);
		//$product= Product::find($request->productId);
		//$product = new Product();
        $product->bday_tfd = $request->bday_tfd;
        $product->category = $request->category;
        $product->style = $request->style;
        $product->description = $request->description;
        $product->fabric = $request->fabric;
	
        //$product->email = $request->email;
       // $client->productLongDiscription = $request->productLongDiscription;
        // $product->productImage=$this->imageUrl;
        //$product->image = $imageUrl;
		if($request->hasfile('image')){
			$file=$request->file('image');
			$extension = $file->getClientOriginalExtension();
			$filename=time().'.'.$extension;
			$file->move('public/productImage/',$filename);
			$product->image = $filename;
		}
		
		
		

        $product->color = $request->color;
		$product->running_steps = $request->running_steps;
		$product->quantity = $request->quantity;
		$product->remark = $request->remark;
		$product->factory_name = $request->factory_name;
		$product->user_id = $request->company_name;
		$product->update_order = $request->update_order;
		$product->steps = implode(",", $request->steps);
		$product->bday_dd = $request->bday_dd;
			Session::put('product',$request->quantity);
		//dd(session()->get('product'));
        //$product->save();
		//////
		if((Session::get('productById') == $request->quantity) && (Session::get('productBydd') == $request->bday_dd)){
		 if($product->save()){
            $user = User::all();
            Notification::send($user , new EditProduct($product));
		//return redirect('/admin/product/product_list')->with('message', 'product update successfully');
		return redirect('/show-product')->with('message', 'ordere update successfully');
        //echo '<pre>';
//         print_r($productImage);
       // echo $imageUrl;
		 }  // exit();
	 }
	 elseif(Session::get('productById')!=$request->quantity){
		  if($product->save()){
            $user = User::all();
            Notification::send($user , new Editqty($product));
		//return redirect('/admin/product/product_list')->with('message', 'product update successfully');
		return redirect('/show-product')->with('message', 'ordere update successfully');
        //echo '<pre>';
//         print_r($productImage);
       // echo $imageUrl;
		 } 
	 }
	  elseif(Session::get('productBydd')!=$request->bday_dd){
		  if($product->save()){
            $user = User::all();
            Notification::send($user , new Editddate($product));
		//return redirect('/admin/product/product_list')->with('message', 'product update successfully');
		return redirect('/show-product')->with('message', 'ordere update successfully');
        //echo '<pre>';
//         print_r($productImage);
       // echo $imageUrl;
		 } 
	 }
	 }

    public function imageExitStatus($request) {
        /* $productById = Product::where('id', $request->productId)->first();
        $productImage=$request->file('image');
        if ($productImage) {
            unlink($productById->image);
            $name = $productImage->getClientOriginalName();
            $uploadPathImage = 'public/productImage/';
            $productImage->move($uploadPathImage, $name);
            $imageUrl = $uploadPathImage . $name;
        } else {
            
            $imageUrl = $productById->productImage;
        }

        return $imageUrl; */
		if($request->hasfile('image')){
			$file=$request->file('image');
			$extension = $file->getClientOriginalExtension();
			$filename=time().'.'.$extension;
			$file->move('public/productImage/',$filename);
			$employees->image = $filename;
		}
    }
		
	
	
		public function deleteProduct($id){
        $product= Product::find($id);
        $product->delete();
		//return view('product.Show',['products'=>$product]);
        return redirect('/show-product')->with('message', 'order info delete successfully');
    
	}
	public function add_pro(){
		       $posts = Product::with('user')->orderBy('id','desc')->get();
       return response()->json([
           'posts'=>$posts
       ],200);

	}
}
