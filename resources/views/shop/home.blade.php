<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 9/19/15
 * Time: 12:06 PM
 */
?>
@extends('layout.shop')
@section('main')
<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-5">
                                <h3>PRIME VARIABLE<span>-SHOP</span></h3>
                                <h2>Shopping made easy</h2>
                                <p>You can now shop from anywhere anytime. </p>
                                <a href="{{route('shop')}}" class="btn btn-primary get">SHOP NOW</a>
                            </div>
                            <div class="col-sm-6 ">
                                <img src="assets/images/home/WP_20150806_004.jpg" class="img img-responsive img-thumbnail img-circle" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-5">
                                <h3>PRIME VARIABLE<span>-SHOP</span></h3>
                                <h2>Shopping made easy</h2>
                                <p>You can now shop from anywhere anytime. </p>
                                <a href="{{route('shop')}}" class="btn btn-primary get">SHOP NOW</a>
                            </div>
                            <div class="col-sm-6 ">
                                <img src="assets/images/home/WP_20150806_004.jpg" class="img img-responsive img-thumbnail img-circle" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-5">
                                <h3>PRIME VARIABLE<span>-SHOP</span></h3>
                                <h2>Shopping made easy</h2>
                                <p>You can now shop from anywhere anytime. </p>
                                <a href="{{route('shop')}}" class="btn btn-primary get">SHOP NOW</a>
                            </div>
                            <div class="col-sm-6 ">
                                <img src="assets/images/home/WP_20150806_004.jpg" class="img img-responsive img-thumbnail img-circle" alt="" />
                            </div>
                        </div>
                    </div>
                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section><!--/slider-->
<!--sho body-->
<section id="shop">
    <div class="container">
        <div id="tutorial" class="alert alert-info">
            <button type="button" style="color: red;" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="fa fa-times-circle-o"></i></span><span class="sr-only">Close</span></button>
            <h3 class="text-uppercase" style="color: #FE980F;" align="center">Shop in three easy steps</h3>
            <div class="row">
                <div class="col-sm-4 ">
                    <div class="panel panel-success">
                    <div class="panel-heading">
                        <h5 align="center">STEP 1</h5>
                    </div>
                    <div class="panel-body">

                       <p>Navigate through our shop and select an item to shop</p>
                                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h5 align="center">STEP 2</h5>
                        </div>
                        <div class="panel-body">

                             <p>Add it to your shopping cart.</p>
                             <p>Click on check out and fill in your shipping details</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-success">
                    <div class="panel-heading">
                        <h5 align="center">STEP 3</h5>
                    </div>
                    <div class="panel-body">
                        You will receive a call to confirm the order. pay on delivery
                    </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="row">
			<div class="col-sm-3">
				<div class="left-sidebar">
					<h2>Shop Now</h2>
                    <a href="{{route('shop')}}" class="btn btn-block btn-success">View all shop items and categories</a>
				</div>
                <div class="shipping text-center"><!--shipping-->
                    <img src="assets/images/home/shipping.png" alt="" />
                </div><!--/shipping-->
			</div>
			<div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items--></div>
               {{--recommended_items--}}
                <div class="recommended_items">
					<h2 class="title text-center">Recommended Items</h2>
                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
                            @if(count($data)>0)
                                @foreach($data as $product)
                                 <div class="count">{{$count=$count+1}}</div>
                                    @if($count==1)
                                    <div class="item active">
                                    @elseif($count%3==0)
                                        <div class="item active">
                                    @endif
                                   <div class="col-sm-4">
                                       <div class="product-image-wrapper">
                                           <div class="single-products">
                                               <div class="productinfo text-center">
                                                   <img src="assets/images/shop/{{$product->productImage}}" alt="" />
                                                   <h2></h2>
                                                   <p>{{$product->productName}}</p>
                                                   <a href="{{route('product_detail',[$product,$product->productName])}}" class="btn btn-default add-to-cart">View Details</a>
                                               </div>
                                           </div>
                                           <div class="choose">
                                               <ul class="nav nav-pills nav-justified">
                                                   <li><a><i class="fa fa-money"></i> Ksh {{$product->productPrice}}</a></li>
                                                   <li><a class="add_to_cart" productId="{{$product->id}}" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a></li>
                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                                    @if($count%3==0)
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <div class="alert alert-info">Sorry!! Products under this sub category <strong>{{$name}}</strong> are out of stock. keep checking for updates</div>
                            @endif
						</div>
						 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						  </a>
						  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
							<i class="fa fa-angle-right"></i>
						  </a>
					</div>
				</div>
                    <a href="{{route('shop')}}" class="btn btn-block btn-success">SHOP NOW</a>
			</div>
		</div>
	</div>
</section>
<!--eof shop-->
@stop