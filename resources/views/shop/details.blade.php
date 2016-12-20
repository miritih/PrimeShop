<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 9/20/15
 * Time: 5:26 PM
 */
 ?>
@extends('layout.shop')
@section('main')
    <section>
   		<div class="container">
            <div class="container">
                    <div class="breadcrumbs">
                        <ol class="breadcrumb">
                            <li> <a href="{{route('shop',[])}}">Home</a></li>
                            <li><a>Product</a></li>
                            <li class="active">{{$details->productName}}</li>
                        </ol>
                    </div>
                <br>
                <br>
                </div>
   			<div class="row">
                <div class="col-sm-3">
       				<div class="left-sidebar">
       					<h2>Products Category</h2>
       					<div class="panel-group category-products" id="accordian"><!--category-products-->
                               @foreach($cat as $category)
                                   <div class="panel panel-success">
                                       <div class="panel-heading">
                                           <h4 class="panel-title">
                                               <a data-toggle="collapse" data-parent="#accordian" href="#category_{{$category->id}}">
                                                   <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                   {{$category->categoryName}}
                                               </a>
                                           </h4>
                                       </div>
                                       <div id="category_{{$category->id}}" class="panel-collapse collapse">
                                           <div class="panel-body">
                                               <ul>
                                                   @foreach($category->subCategory as $sub)
                                                   <li class="subcategory" category="{{$sub->optionName}}" value="{{$sub->id}}"><a href="{{route('getproduct',$sub)}}">{{$sub->optionName}}</a></li>
                                                       @endforeach
                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                               @endforeach
       					</div>
       					<div class="shipping text-center"><!--shipping-->
       						<img src="{{asset('assets/images/home/shipping.png')}}" alt="" />
       					</div><!--/shipping-->

       				</div>
       			</div>
                <div class="col-sm-9 padding-right">
   					<div class="features_items"><!--product-details-->
   						<div class="col-sm-5">
   							<div class="view-product">
   								<img src="{{asset('assets/images/shop/'.$details->productImage)}}" alt="" />
   								{{--<h3>ZOOM</h3>--}}
   							</div>
                            <br>
                          <button type="button" class="btn btn-fefault add-to-cart add_to_cart" productId="{{$details->id}}">
                                <i class="fa fa-shopping-cart"></i>
                                Add to cart
                            </button>
                        </div>
   						<div class="col-sm-7">
   							<div class="product-information"><!--/product-information-->
   								<img src="{{asset('assets/images/product-details/new.jpg')}}" class="newarrival" alt="" />
   								<h2>{{$details->productName}}</h2>
                                <p>Product ID: PVS{{$details->id}}</p>
   								<img src="{{asset('assets/images/product-details/rating.png')}}" alt="" />
                                <br>
   								<span>
   									<span>Ksh {{$details->productPrice}}.00</span>
                                    <button type="button" class="btn btn-fefault  add-to-cart add_to_cart" productId="{{$details->id}}">
   										<i class="fa fa-shopping-cart"></i>
   										Add to cart
   									</button>
   								</span>
   								<p><b>Availability:</b>Available <i style="color:green" class="fa fa-check"></i></p>
   								<p><b>Remaining:</b>{{$details->productStock}}</p>
   								<p><b>Condition:</b> New</p>
   								<p><b>Brand:</b>{{$details->brand}}</p>
   								<a href=""><img src="{{asset('assets/images/product-details/share.png')}}" class="share img-responsive"  alt="" /></a>
   							</div><!--/product-information-->
   						</div>
                    </div>{{--product details--}}
                    <br><br>
   					<div class="recommended_items"><!--recommended_items-->
   						<h2 class="title text-center">Similar items</h2>
   						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @if(count($similar)>0)
                                    @foreach($similar as $product)
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
                                                                        <img src="{{asset('assets/images/shop/'.$product->productImage)}}" alt="" />
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
   							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
   								<i class="fa fa-angle-left"></i>
   							  </a>
   							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
   								<i class="fa fa-angle-right"></i>
   							  </a>
   						</div>
   					</div><!--/recommended_items-->
   				</div>
   			</div>
   		</div>
   	</section>
@stop