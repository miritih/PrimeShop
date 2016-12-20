<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
    {
    	return View::make('index');
});
Route::get('/ajaxProduct/{id}/{name}',['as'=>'getproduct','uses'=>'ShopController@products']);/*filter products*/

Route::get('/searchProduct/{name}',['as'=>'getproduct','uses'=>'ShopController@search']);/*search products*/

Route::get('/PrimeShop',['as'=>'home','uses'=>'ShopController@index']);/*home or start page*/

Route::get('/shop',['as'=>'shop','uses'=>'ShopController@shop']);/*main shop*/

Route::get('/register',['as'=>'register','uses'=>'UserController@register']);/*load register user page*/

Route::post('/login',['as'=>'login','uses'=>'UserController@login']);/*load login page*/

Route::post('/create_user',['as'=>'create_user','uses'=>'UserController@create']);/*load login page*/


Route::get('/checkout',['as'=>'checkout','uses'=>'ShopController@checkout']);/*checkout page*/

Route::get('/cart',['as'=>'cart','uses'=>'CartController@index']);/*cart page*/

Route::get('/cartpop', function () {
    return View::make('shop.cart_pop');
});/*cart popup*/

Route::get('/insertCart/','CartController@addItems');

Route::get('/cartDisplay/', function () {
    return Cart::contents(true);
});

Route::get('/cartDestroy/', function () {
    return Cart::destroy();
});

Route::get('/product/{id}/{name}',['as'=>'product_detail','uses'=>'ShopController@details']);
