<?php

namespace App\Providers;
use View;
use DB;
use App\Product;
use App\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
		
		View::composer('admin.include.sidebar',function($view){
			 $products= DB::table('Products')
		->join('users', 'Products.user_id','=','users.id')
		 ->select('users.*', 'Products.*')
            ->get(); 
			$publishproducts = User::where('status', 1)->get();
			$view->with(['publishproducts'=>$publishproducts,'products'=>$products]);
		});
    }
}
