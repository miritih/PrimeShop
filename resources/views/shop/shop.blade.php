<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 8/27/15
 * Time: 8:20 PM
 */
?>
@extends('layout.shop')
@section('main')
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li> <a href="{{route('shop',[])}}">Home</a></li>
                <li class="active">Shop</li>
            </ol>
        </div>
    </div>
    <section id="advertisement">
    		<div class="container">

    			<img src="assets/images/shop/advertisement.png" alt="advertisement" />
    		</div>
    	</section>
<!--sho body-->
<section id="shop">
	<div class="container">
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
						<img src="assets/images/home/shipping.png" alt="" />
					</div><!--/shipping-->

				</div>
			</div>
			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--features_items-->
					<h2 class="title text-center">Recommended Products</h2>
                    @if(count($data)>0)
                    @foreach($data as $product)
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
                                    <li><a><i class="fa fa-money"></i>$ {{$product->productPrice}}</a></li>
                                    <li><a class="add_to_cart" productId="{{$product->id}}" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                        <div class="alert alert-info">Sorry!! Products under this sub category <strong>{{$name}}</strong> are out of stock. keep checking for updates</div>
                    @endif
				</div>
			</div>
		</div>
	</div>
</section>
<!--eof shop-->
@stop