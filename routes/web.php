<?php

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

 Route::get('/', function() {
	 Session::put('user_id',Auth::user()->admin);
    if (Auth::user()->admin == 0) {
      return view('/home');
    } elseif(Auth::user()->admin == 1) {
      $users['users'] = \App\User::all();
      //return view('/Adminhome', $users);
	  //return view('/admin.adminmaster', $users);
	  
	       // Session::put('customer_name',$request->customer_name);
	  return view('/admin.include.menu', $users);
    }
	else {
      $users['users'] = \App\User::all();
      //return view('/Adminhome', $users);
	  //return view('/admin.adminmaster', $users);
	  return view('/admin.include.menu', $users);
    }

});

//Route::get('/client', 'ClientController@show');
Route::get('/show-client', 'ClientController@show');

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
Route::post('product/update', 'ProductController@updateProduct');
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
Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@update_profile');

});
