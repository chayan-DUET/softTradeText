<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\SampleChart;
use Charts;
use Auth;
use App\Product;
use App\User;
use DB;
use Session;
session_start();

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
		//return view('admin.adminmaster');
		 //return view('admin.include.menu');
		 	 Session::put('user_id',Auth::user()->admin);
    if (Auth::user()->admin == 0) {
      return view('/home');
    } elseif(Auth::user()->admin == 1) {
      $users['users'] = \App\User::all();
      //return view('/Adminhome', $users);
	  //return view('/admin.adminmaster', $users);

	   $products= DB::table('products')
		->join('users', 'products.user_id','=','users.id')
		 ->select('users.*', 'products.*')
            ->get(); 
			 $product = Product::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();
         $chart = Charts::database($product, 'Area', 'highcharts')
                     ->title('Product Details')
                     ->elementLabel('Total product')
                     ->dimensions(1000, 500)
                     ->colors(['red', 'green', 'blue', 'yellow', 'orange', 'cyan', 'magenta'])
                     ->groupByMonth(date('Y'), true);
					 $nextId = DB::table('users')->max('id') + 1;
        //return view('charts', ['chart' => $chart]);
	       // Session::put('customer_name',$request->customer_name);
	  return view('/admin.include.menu', ['products'=>$products,'users'=>$users,'chart'=>$chart,'nextId'=>$nextId]);
    }
	else {
      $users['users'] = \App\User::all();
      //return view('/Adminhome', $users);
	  //return view('/admin.adminmaster', $users);
	   $products= DB::table('products')
		->join('users', 'products.user_id','=','users.id')
		 ->select('users.*', 'products.*')
            ->get(); 
			 $product = Product::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();
         $chart = Charts::database($product, 'Area', 'highcharts')
                     ->title('Product Details')
                     ->elementLabel('Total product')
                     ->dimensions(1000, 500)
                     ->colors(['red', 'green', 'blue', 'yellow', 'orange', 'cyan', 'magenta'])
                     ->groupByMonth(date('Y'), true);
					 $nextId = DB::table('users')->max('id') + 1;
	  return view('/admin.include.menu',  ['products'=>$products,'users'=>$users,'chart'=>$chart,'nextId'=>$nextId]);
    }
    }
	
	public function addClient(){
		 return view('admin.add_client');
	}
	// manage admin
	public function approve_admin(){
		$user=  User::all();
	//$user=  DB::table('User')->get();
        return view('admin.approve.approve_admin',['user'=>$user]);
}
//editManageAdmin
public function editManageAdmin($id){
		 $adminById= User::where('id',$id)->first();
		 //$steps=explode(",", $productById->steps);
          return view('admin.approve.edit_manage_admin',['adminById'=>$adminById]);          
		 //return view('product.editProduct',['productById'=>$productById,'steps'=>$steps]);
		//return view('product.editProduct');
	}
	//updateManageAdmin
	 public function updateManageAdmin(Request $request) {
       //$imageUrl= $this->imageExitStatus($request);
        
		$user= User::find($request->adminById);
		//$product = new Product();
        $user->company_name = $request->company_name;
        $user->email = $request->email;
        $user->admin = $request->admin;
        $user->type = $request->type;
        $user->status = $request->status;
        $user->save();
		//Session::put('user_id',$user_id);
	       // Session::put('customer_name',$request->customer_name);
		return redirect('/approve-admin')->with('message', 'update successfully');
        //echo '<pre>';
//         print_r($productImage);
       // echo $imageUrl;
        // exit();
    }
	// view dashboard
	
	
}