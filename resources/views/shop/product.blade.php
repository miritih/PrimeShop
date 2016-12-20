<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 9/19/15
 * Time: 10:57 AM
 */?>
<h2 class="title text-center">{!!$name!!}</h2>
@if(count($data)>0)
@foreach($data as $product)
<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">
                <img src="{!!asset('assets/images/shop/'.$product->productImage)!!}" alt="" />
                <h2></h2>
                <p>{!!$product->productName!!}</p>
                <a href="http://localhost/prime/product/{!!$product->id!!}/{!!$product->productName!!}" class="btn btn-default add-to-cart">View Details</a>
            </div>
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                <li><a><i class="fa fa-money"></i> Ksh {!!$product->productPrice!!}</a></li>
                <li><a class="add_to_cart" productId="{{$product->id}}" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a></li>
            </ul>
        </div>
    </div>
</div>
@endforeach
@else
    <div class="alert alert-info">{!!$msg!!}</div>
@endif