<?php

use App\Charts\SampleChart;

use App\User;
use App\Product;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add-client', 'HomeController@addClient');


Route::group(['middleware' => ['web','auth']], function () {
    //Route::get('/', function () {
    //return view('welcome');
	//return view('/home');
	//return view('/admin.include.menu');
//});

/*  Route::get('/', function() {
	 Session::put('user_id',Auth::user()->admin);
    if (Auth::user()->admin == 0) {
      return view('/home');
    } elseif(Auth::user()->admin == 1) {
      $users['users'] = \App\User::all();
      //return view('/Adminhome', $users);
	  //return view('/admin.adminmaster', $users);

	   $products= DB::table('Products')
		->join('users', 'Products.user_id','=','users.id')
		 ->select('users.*', 'Products.*')
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
	  return view('/admin.include.menu', $users);
    }

}); */
Route::get('/', 'HomeController@index');
//Route::get('/client', 'ClientController@show');
Route::get('/client-list', 'ClientController@show');

//Route::get('/admin', 'ClientController@admin');
Route::get('/add-client', 'ClientController@admin');
Route::post('/admin_registration', 'ClientController@adminregister');
//Route::post('/register_client', 'ClientController@addclient');
Route::post('/add-client', 'ClientController@addclient');
Route::get('client/edit/{id}', 'ClientController@editClient');
Route::post('client/update', 'ClientController@updateClient');
Route::get('client/delete/{id}', 'ClientController@deleteClient');
Route::get('/login-client', 'ClientController@loginclient');
Route::post('/client-login', 'ClientController@client_login');

//product 
//Route::get('/add-pro', 'ProductController@add_pro');
Route::get('/add-product', 'ProductController@add_product');
//Route::get('/product', 'ProductController@add_product');
Route::get('/show-product', 'ProductController@show_product');
//Route::get('/show-product', 'ProductController@show_product');
Route::post('/add-product', 'ProductController@create_product');
Route::get('product/edit/{id}', 'ProductController@editProduct');
Route::post('product/update{id}', 'ProductController@updateProduct');
Route::get('product/delete/{id}', 'ProductController@deleteProduct');

//approve-admin hcon manage-admin
Route::get('/approve-admin', 'HomeController@approve_admin');
Route::post('/approve-admin', 'HomeController@approve_admin');
Route::get('manage-admin/edit/{id}', 'HomeController@editManageAdmin');
Route::post('manage-admin/update', 'HomeController@updateManageAdmin');
Route::get('manage-admin/delete/{id}', 'HomeController@deleteManageAdmin');

//projevt control for client  /project-view
Route::get('/project-view', 'ProjectController@show_project');
Route::get('/add-product', 'ProductController@add_product');
//Route::get('/product', 'ProductController@add_product');
Route::get('/show-product', 'ProductController@show_product');
//Route::get('/show-product', 'ProductController@show_product');
Route::post('/add-product', 'ProductController@create_product');
Route::get('product/edit/{id}', 'ProductController@editProduct');
Route::post('product/update', 'ProductController@updateProduct');
Route::get('product/delete/{id}', 'ProductController@deleteProduct');

//user controller /profile
Route::get('/softTrade/profile', 'UserController@profile');
Route::post('/softTrade/profile', 'UserController@update_profile');

});
