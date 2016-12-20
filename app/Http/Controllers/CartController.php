<?php namespace PrimeShop\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Moltin\Cart\Cart;
use Moltin\Cart\Storage\Session;
use Moltin\Cart\Identifier\Cookie;
use PrimeShop\Http\Requests;
use PrimeShop\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CartController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View('shop.cart');
	}

	/**
	 * insert new item in the cart.
	 *
	 * @return Response
	 */
	public function addItems()
	{
        $cart = new Cart(new Session, new Cookie);
        $cart->insert(array(
            'id'       => 'foo',
            'name'     => 'bar',
            'price'    => 100,
            'quantity' => 1
        ));
        return Cart::totalItems();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
