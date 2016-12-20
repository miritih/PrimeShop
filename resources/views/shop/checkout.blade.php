<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 9/4/15
 * Time: 10:10 AM
 */?>
 @extends('layout.shop')
 @section('main')
     <section id="cart_items">
 		<div class="container cov">
 			<div class="breadcrumbs">
 				<ol class="breadcrumb">
 				  <li><a href="#">Home</a></li>
 				  <li class="active">Check out</li>
 				</ol>
 			</div><!--/breadcrums-->

            {{--checkout tabs--}}
            <div class="category-tab">
                <div class="col-sm-12">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#login-tab" data-toggle="tab">Login</a></li>
                        <li><a href="#register-tab" data-toggle="tab">Register Account</a></li>
                        <li><a href="#guest-tab" data-toggle="tab">Guest checkout</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="login-tab" >
                        <div class="col-sm-3"></div>
                        <div align="center" class=" col-md-6 well">
                            <div class="login-form"><!--login form-->
                                <h2>Login to your account</h2>
                                <form action="#" class="form-validate" id="login_form">
                                    <div class="form-group">
                                        <label class="sr-only" for="login_username">Username</label>
                                        <input type="text" class="form-control" name="login_username" id="login_username" placeholder="username/email" />
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="login_password">password</label>
                                        <input type="password" class="form-control" name="login_password" id="login_password" placeholder="password" />
                                    </div>
                                    <span>
                                        <input type="checkbox" class="checkbox">
                                        Keep me signed in
                                    </span>
                                    <button type="submit" class="btn btn-default">Login</button>
                                </form>
                            </div><!--/login form-->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="register-tab" >
                 {{--  register--}}
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6 well">
                            <div class="signup-form"><!--sign up form-->
                                <h2>Create Account!</h2>
                                <form action="#" class="form-validate" id="register_form">
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
                                        <input type="number" class="form-control"name="phone" id="phone" placeholder="Phone"/>
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
                                </form>
                            </div><!--/sign up form-->
                        </div>
                 {{--  /register--}}
                    </div>
                    <div class="tab-pane fade" id="guest-tab" >
                        <div class="shopper-informations">
                            <div class="row">
                                <div class="col-sm-5 clearfix">
                                    <div class="bill-to">
                                        <p>Bill To</p>
                                        <div class="form-one">
                                            <form>
                                                <input type="text" placeholder="Company Name">
                                                <input type="text" placeholder="Email*">
                                                <input type="text" placeholder="Title">
                                                <input type="text" placeholder="First Name *">
                                                <input type="text" placeholder="Middle Name">
                                                <input type="text" placeholder="Last Name *">
                                                <input type="text" placeholder="Address 1 *">
                                                <input type="text" placeholder="Address 2">
                                            </form>
                                        </div>
                                        <div class="form-two">
                                            <form>
                                                <input type="text" placeholder="Zip / Postal Code *">
                                                <select>
                                                    <option>-- Country --</option>
                                                    <option>United States</option>
                                                    <option>Bangladesh</option>
                                                    <option>UK</option>
                                                    <option>India</option>
                                                    <option>Pakistan</option>
                                                    <option>Ucrane</option>
                                                    <option>Canada</option>
                                                    <option>Dubai</option>
                                                </select>
                                                <select>
                                                    <option>-- State / Province / Region --</option>
                                                    <option>United States</option>
                                                    <option>Bangladesh</option>
                                                    <option>UK</option>
                                                    <option>India</option>
                                                    <option>Pakistan</option>
                                                    <option>Ucrane</option>
                                                    <option>Canada</option>
                                                    <option>Dubai</option>
                                                </select>
                                                <input type="password" placeholder="Confirm password">
                                                <input type="text" placeholder="Phone *">
                                                <input type="text" placeholder="Mobile Phone">
                                                <input type="text" placeholder="Fax">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="order-message">
                                        <p>Shipping Order</p>
                                        <textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
                                        <label><input type="checkbox"> Shipping to bill address</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           				{{-- /checkout-tab--}}
 			<div class="register-req">
 				<p>Please use Review your order below before checkout</p>
 			</div><!--/register-req-->
            <div class="cart_info">
                				<table class="table table-responsive table-condensed">
                					<thead>
                						<tr class="cart_menu">
                							<th>Item</th>
                							<th>Description</th>
                							<th>Price</th>
                							<th>Quantity</th>
                							<th>Total</th>
                							<th></th>
                						</tr>
                					</thead>
                					<tbody>
                						<tr>
                							<td class="cart_product">
                								<a href=""><img src="{{asset('assets/images/WP_20150806_003.jpg')}}" height="80" width="110" alt=""></a>
                							</td>
                							<td class="cart_description">
                								<h4><a href="">Dam liners <span>2.0 mm</span></a></h4>
                								<p>Web ID: 1089772</p>
                							</td>
                							<td class="cart_price">
                								<p>Ksh 1000</p>
                							</td>
                							<td class="cart_quantity">
                								<div class="cart_quantity_button">
                									<a class="cart_quantity_up" href="#"> + </a>
                									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                									<a class="cart_quantity_down" href=""> - </a>
                								</div>
                							</td>
                							<td class="cart_total">
                								<p class="cart_total_price">ksh 1000</p>
                							</td>
                							<td class="cart_delete">
                								<a class="cart_quantity_delete" data-toggle="tooltip" data-placement="bottom" title="Remove item" href=""><i class="fa fa-times"></i></a>
                							</td>
                						</tr>
                                        <tr>
                							<td colspan="3">&nbsp;</td>
                							<td colspan="2">
                								<table class="table table-responsive table-condensed total-result">
                									<tr>
                										<td>Cart Sub Total</td>
                										<td>ksh 100.00</td>
                									</tr>
                									<tr>
                										<td>Tax</td>
                										<td>ksh 0.00</td>
                									</tr>
                									<tr class="shipping-cost">
                										<td>Shipping Cost</td>
                										<td>Free</td>
                									</tr>
                									<tr>
                										<td>Total</td>
                										<td><span>Ksh. 1000.00</span></td>
                									</tr>
                								</table>
                							</td>
                                            <td>&nbsp;</td>
                						</tr>
                					</tbody>
                				</table>
                                <div class="pull-right">
                                    <a class="btn btn-primary">CheckOut</a>
                                </div>
                			</div>
 		{{--	<div class="payment-options">
 					<span>
 						<label><input type="checkbox"> Direct Bank Transfer</label>
 					</span>
 					<span>
 						<label><input type="checkbox"> Check Payment</label>
 					</span>
 					<span>
 						<label><input type="checkbox"> Paypal</label>
 					</span>
 				</div>--}}
 		</div>
 	</section> <!--/#cart_items-->
 @stop
