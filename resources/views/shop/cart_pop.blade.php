<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 11/14/15
 * Time: 2:30 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('assets/css/css/main.css')}}" rel="stylesheet">
</head>
<body>

<table class="table table-condensed">
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
            <td>
                <a href=""><img src="{{asset('assets/images/WP_20150806_003.jpg')}}" height="80" width="110" alt=""></a>
            </td>
            <td>
                {!!$item->description!!}
            </td>
            <td class="cart_price">
                <p>$ {{$item->price}}</p>
            </td>
            <td>
                <div class="cart_quantity_button">
                    <a class="cart_quantity_up" href="#"> + </a>
                    <input class="cart_quantity_input" type="text" name="quantity" value="{{$item->quantity}}" autocomplete="off" size="2">
                    <a class="cart_quantity_down" href=""> - </a>
                </div>
            </td>
            <td>
                <p class="cart_total_price">$ {{($item->quantity)*$item->price}}</p>
            </td>
            <td>
                <a class="cart_quantity_delete" data-toggle="tooltip" data-placement="bottom" title="Remove item" href=""><i class="fa fa-times"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>