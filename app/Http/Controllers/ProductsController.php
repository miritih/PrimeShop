<?php namespace PrimeShop\Http\Controllers;

use Illuminate\Support\Facades\DB;
use PrimeShop\Http\Requests;
use PrimeShop\Http\Controllers\Controller;

use PrimeShop\Product;
use PrimeShop\ProductCategory;
use PrimeShop\Products;
use PrimeShop\subCategory;
use PrimeShop\User;
use Illuminate\Http\Request;

class ProductsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

    public function index()
	{
       /* $array=[];
        $category=ProductCategory::all();
        foreach($category as $cat){
            $id=$cat->id;
            $sub=ProductCategory::find($id)->subCategory;
            $cat= array_add($cat,'subCategory',$sub);
            array_push($array,$cat);
        }*/

//        return  Product::all;
        $count=Product::find(1);

              return $count;

	}

    /**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

    public function create()
	{
		//
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
