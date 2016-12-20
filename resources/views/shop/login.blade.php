<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 8/27/15
 * Time: 8:43 PM
 */
?>
@extends('layout.shop')
@section('main')
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li> <a href="{{route('shop',[])}}">Home</a></li>
                    <li class="active">Register</li>
                </ol>
            </div>

    <section id="form"><!--form-->
        <div>
            <h3><i class="fa fa-users"></i> Create Account</h3>
            <hr>
        </div>
        <div>
            <p>If you already have an account, <a href="" data-toggle="modal" data-target="#login_modal">login here</a></p>
            <br>
        </div>
   			<div class="row">
                <div class="col-sm-1"></div>
   				<div class="col-sm-10 well" >
   					<div class="signup-form" id="success-msg"><!--sign up form-->
   						<h2>Create Account!</h2>
                        <div id="create-msg"></div>
                        {!! Form::open(array('url'=>'create_user','method'=>'POST','class'=>'form-validate form-horizontal','id'=>'register_form')) !!}
                            <div class="form-group">
                                <label class="sr-only" for="firstName">first name</label>
                                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="first Name"/>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="lastNameName">last name</label>
                                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="last Name"/>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="phone">phone</label>
                                <input class="form-control"name="phone" id="phone" placeholder="Phone"/>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="address">address</label>
                                <input type="text"class="form-control" name="address" id="address" placeholder="adress"/>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="email">email</label>
                                <input type="email"class="form-control" name="email" id="email" placeholder="Email Address"/>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="password">password</label>
                                <input type="password"class="form-control" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="confirm_password">confirm password</label>
                                <input type="password"class="form-control"name="confirm_password" id="confirm_password" placeholder="confirm Password"/>
   							</div>
                                <button type="submit" class="btn btn-default">Signup</button>
   						{!! Form::close() !!}
   					</div><!--/sign up form-->
   				</div>
                <div class="col-sm-1"></div>

   			</div>
   	</section><!--/form-->
        </div>
@stop