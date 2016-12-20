<?php namespace PrimeShop\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use PrimeShop\Product;
use PrimeShop\ProductCategory;
use PrimeShop\subCategory;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
           $array=[];
           $category=ProductCategory::all();
          foreach($category as $cat){
              $id=$cat->id;
              $sub=ProductCategory::find($id)->subCategory;
              $cat= array_add($cat,'subCategory',$sub);
              array_push($array,$cat);
          }
             view()->share('cat', $array);
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'PrimeShop\Services\Registrar'
		);
	}

}
