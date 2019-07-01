<?php

namespace App\Http\Controllers;

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
		$product=  Product::all();
		$product1=  Product::all();
		//return view('product.Show',['products'=>$product]);
		//return view('product.Show');
		return view('admin.product.product_list',['products'=>$product,'product1'=>$product1]);
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
	    $image = $request->file('image');
//        echo '<pre>';
//        print_r($image);
        $name = $image->getClientOriginalName();
        //echo $imageName;
        $uploadPathImage = 'public/productImage/';
        $image->move($uploadPathImage, $name);
        //
        $imageUrl = $uploadPathImage . $name;
        $this->saveProductInfo($request, $imageUrl);
		  // return redirect('/admin/product/product_list')->with('message', 'product update successfully');
		  // return redirect('/home')->with('message', 'product info save successfully');
		    
		   return redirect('/show-product')->with('message', 'product info save successfully');
    }
		 protected function saveProductInfo($request, $imageUrl) {
        $product = new Product();
        $product->bday_tfd = $request->bday_tfd;
        $product->category = $request->category;
        $product->style = $request->style;
        $product->description = $request->description;
        $product->fabric = $request->fabric;
	
        
        $product->image = $imageUrl;
        $product->color = $request->color;
		$product->quantity = $request->quantity;
		$product->remark = $request->remark;
		$product->factory_name = $request->factory_name;
		 $product->company_name = $request->company_name;
		//$product->company_name = $request->company_name;
		$product->steps = implode(",", $request->steps);
		$product->bday_dd = $request->bday_dd;
        //$product->save();
		  if($product->save()){
            $user = User::all();
            Notification::send($user , new AddProduct($product));
            //$data = 'We Have New Post ' .$post->title ." <br> Added By " . auth()->user()->name;
            //StreamLabFacades::pushMessage('test' , 'AddPost' , $data);
        }
		
	}
	public function editProduct($id){
		 $productById= Product::where('id',$id)->first();
		 $steps=explode(",", $productById->steps);
		 
          return view('admin.product.edit_Product',['productById'=>$productById,'steps'=>$steps]);          
		 //return view('product.editProduct',['productById'=>$productById,'steps'=>$steps]);
		//return view('product.editProduct');
	}
	

	 public function updateProduct(Request $request) {
       $imageUrl= $this->imageExitStatus($request);
        
		$product= Product::find($request->productId);
		//$product = new Product();
        $product->bday_tfd = $request->bday_tfd;
        $product->category = $request->category;
        $product->style = $request->style;
        $product->description = $request->description;
        $product->fabric = $request->fabric;
	
        //$product->email = $request->email;
       // $client->productLongDiscription = $request->productLongDiscription;
        // $product->productImage=$this->imageUrl;
        $product->image = $imageUrl;
        $product->color = $request->color;
		$product->quantity = $request->quantity;
		$product->remark = $request->remark;
		$product->factory_name = $request->factory_name;
		$product->company_name = $request->company_name;
		$product->steps = implode(",", $request->steps);
		$product->bday_dd = $request->bday_dd;
        $product->save();
		//return redirect('/admin/product/product_list')->with('message', 'product update successfully');
		return redirect('/show-product')->with('message', 'product update successfully');
        //echo '<pre>';
//         print_r($productImage);
       // echo $imageUrl;
        // exit();
    }

    public function imageExitStatus($request) {
        $productById = Product::where('id', $request->productId)->first();
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

        return $imageUrl;
    }
		
	
	
		public function deleteProduct($id){
        $product= Product::find($id);
        $product->delete();
		//return view('product.Show',['products'=>$product]);
        return redirect('/show-product')->with('message', 'manufacture info delete successfully');
    
	}
	public function add_pro(){
		       $posts = Product::with('user')->orderBy('id','desc')->get();
       return response()->json([
           'posts'=>$posts
       ],200);

	}
}
