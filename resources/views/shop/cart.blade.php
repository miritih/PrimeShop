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
    		<div class="container">
    			<div class="breadcrumbs">
    				<ol class="breadcrumb">
    				  <li> <a href="{{route('shop',[])}}">Home</a></li>
    				  <li class="active">Shopping Cart</li>
    				</ol>
    			</div>
                <div class="features_items"><!--features_items-->
    			<div class="cart_info">
                    <div class="pull-right">
                        <a href="#" class="btn btn-primary">Continue Shopping</a>
                        <a class="btn btn-success">Checkout</a>
                    </div>
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
                        @foreach(Cart::contents() as $item)
    						<tr>
    							<td class="cart_product">
    								<a href=""><img src="{{asset('assets/images/WP_20150806_003.jpg')}}" height="80" width="110" alt=""></a>
    							</td>
    							<td class="cart_description">
                                    {!!$item->description!!}
    							</td>
    							<td class="cart_price">
    								<p>$ {{$item->price}}</p>
    							</td>
    							<td class="cart_quantity">
    								<div class="cart_quantity_button">
    									<a class="cart_quantity_up" href="#"> + </a>
    									<input class="cart_quantity_input" type="text" name="quantity" value="{{$item->quantity}}" autocomplete="off" size="2">
    									<a class="cart_quantity_down" href=""> - </a>
    								</div>
    							</td>
    							<td class="cart_total">
    								<p class="cart_total_price">$ {{($item->quantity)*$item->price}}</p>
    							</td>
    							<td class="cart_delete">
    								<a class="cart_quantity_delete" data-toggle="tooltip" data-placement="bottom" title="Remove item" href=""><i class="fa fa-times"></i></a>
    							</td>
    						</tr>
                            @endforeach
                            <tr>
    							<td colspan="3">&nbsp;</td>
    							<td colspan="2">
    								<table class="table table-responsive table-condensed total-result">
    									<tr>
    										<td>Cart Sub Total</td>
    										<td>$ {{Cart::total(false)}}</td>
    									</tr>
    									<tr>
    										<td>Total VAT</td>
    										<td>${{Cart::total(true)-Cart::total(false)}} </td>
    									</tr>
    									<tr class="shipping-cost">
    										<td>Shipping Cost</td>
    										<td class="text-success">Free</td>
    									</tr>
    									<tr>
    										<td>Total</td>
    										<td><span>$ {{Cart::total()}}</span></td>
    									</tr>
    								</table>
    							</td>
                                <td>&nbsp;</td>
    						</tr>
    					</tbody>
    				</table>
                    <div class="pull-right">
                        <a class="btn btn-primary">Continue Shopping</a>
                        <a class="btn btn-success">Checkout</a>
                    </div>
    			</div>
    			</div>
    		</div>

    	</section> <!--/#cart_items-->

 @stop
