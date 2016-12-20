<?php namespace PrimeShop\Http\Controllers;

use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use PrimeShop\Http\Requests;
use PrimeShop\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function register()
	{
		return View('shop.login');
	}

	public function login()
	{
    if(Session::token() !==Input::get('_token')){
            $response=array(
                'status'=>'fail',
                'message'=>'unauthorized access'
            );
        }
        try{
            $user=Sentinel::authenticate(Input::all());
               if ($user) {
                   $response=array(
                       'status'=>'success',
                       'message'=>'login successful'
                   );
               }
             else{
                   $response=array(
                                  'status'=>'fail',
                                  'message'=>'Wrong email or password'
                              );
               }

             }
           catch(NotActivatedException $e){
               $response=array(
                   'status'=>'fail',
                   'message'=> 'account not activated, check email to activate'
               );
           }
           catch(ThrottlingException $e){
               $response=array(
                   'status'=>'fail',
                   'message'=> 'Sorry!! You have exceeded your Login trial times. Try again later'
               );
           }


        return Response::json($response);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        if(Session::token() !==Input::get('_token')){
            $response=array(
                'status'=>'fail',
                'message'=>'unauthorized access'
            );
        }
        $exist=Sentinel::findUserByCredentials(Input::all());
        if (!$exist) {
            $user = Sentinel::registerAndActivate(Input::all());
            $response=array(
                'status'=>'success',
                'message'=>'account created successfully'
            );
        }else{
            $response=array(
                'status'=>'fail',
                'message'=>'Sorry!!.account with email (<b>'.Input::get('email').'</b>) already exist'
            );
        }

        return Response::json($response);
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
