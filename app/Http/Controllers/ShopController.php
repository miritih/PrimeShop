<?php namespace PrimeShop\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Contracts\View\Factory;
use PrimeShop\Http\Requests;
use PrimeShop\Http\Controllers\Controller;

use Illuminate\Http\Request;
use PrimeShop\Product;
use PrimeShop\ProductCategory;
use PrimeShop\subCategory;

class ShopController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
    	{
            $count=0;
            $product=  Product::all()->take(3);
           return View('shop.home')->with('data',$product)->with('count',$count);
    }
    public function shop()
    	{
      $product=  Product::all()->take(6);
           return View('shop.shop')->with('data',$product);

        }

    public function checkout()
   	{
        return View('shop.checkout');
    }



	/**
	 * Show Products by category. AJAX driven
	 *
	 * @return Response
	 */
	public function products($id,$name)
	{
     $data=DB::table('products')->where('subcategoryID', '=', $id)->get();
        $msg='Sorry!! Products under this sub category <strong>'.$name.'</strong> are out of stock. keep checking for updates';
        return View('shop.product')->with('data',$data)->with('name',$name)->with('msg',$msg);

	}
    public function search($name)
	{
     $records=DB::table('products')->where('productName', 'like', '%'.$name.'%')->get();
        $message='Unfortunately there was no match found for « <strong>'.$name.'</strong> », Please try again';
        $name='search results';
        return View('shop.product')->with('data',$records)->with('name',$name)->with('msg',$message);

	}
    /**
	 * Show Product details
	 *
	 * @return Response
	 */
	public function details($id)
	{
     $count=Product::find($id);
        $ct=0;
     $Similar=Product::all()->take(3);
        return View('shop.details')->with('details',$count)->with('similar',$Similar)->with('count',$ct);;
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
