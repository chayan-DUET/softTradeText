<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;
class ProjectController extends Controller
{
    public function show_project(){
		//$products=  Product::all();
		//$product1=  Product::all();
		$products = DB::table('products')
                ->join('users', 'products.user_id', '=', 'users.id')
                
               ->select('Products.*', 'users.*')
			   ->get();
			  // dd($products);
		return view('admin.project.project_list',['products'=>$products]);
	}
}
