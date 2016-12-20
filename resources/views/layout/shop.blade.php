<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 8/27/15
 * Time: 8:46 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
<title>PRIME VARIABLE COVERS LIMITED-SHOP</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript">
    addEventListener("load", function()
    { setTimeout(hideURLbar, 0);
    }, false);
		function hideURLbar(){
            window.scrollTo(0,1);
        }
</script>
<!-- //for-mobile-apps -->

<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('assets/css/css/main.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/css/css/jquery.webui-popover.css')}}" />

<!-- menu -->
<!-- //menu -->
</head>

<body class="cbp-spmenu-push">
<!-- header -->
	<div class="header-top">
		<div class="container">
			<div class="header-top-left">
				<p>PRIME VARIABLE COVERS SHOP</p>
			</div>
			<div style="color: #73c65f;" class="header-top-rigt">
				<p>020 2410 818</p>
			</div>
			<div class="header-top-right">
				<p>Contact Us</p>
			</div>
			<div class="clearfix"> </div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="header">
        <nav class="navbar navbar-default" role="navigation">
		<div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.html"></a>
                </div>
                <div class="collapse navbar-collapse navbar-left">
                    <ul class="nav navbar-nav">
                        	<li><a href=" {{route('shop', [])}}" class="fa fa-home"> Home</a></li>
                        	<li>
                            </li>
                    </ul>
                    <form class="navbar-form navbar-left searchform" role="search">
                        <div class="form-group">
                            <div class="input-group">
                                <input id="search_input" type="text" placeholder="search for products">
                                <div id="search_frm" class="input-group-addon button"><i class="fa fa-search"></i></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="collapse navbar-collapse navbar-right">
                   <ul class="nav navbar-nav navbar-right">
                        {{--<li><a href="#"><i class="fa fa-user"></i> Account</a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>--}}
                       {{--<li><a href=" {{route('checkout', [])}}" class="fa fa-crosshairs"> Checkout</a></li>--}}

                       @if ($user = Sentinel::check())
                           <li id="cart-pop" ><a href=" {{route('cart', [])}}" class="fa fa-shopping-cart"> Cart <sup class="badge">{!!Cart::totalItems()!!}</sup></a></li>
                       @else
                           {{--User is not logged in--}}
                       @endif
                       @if ($user = Sentinel::check())
                           <li><a href="#">Welcome:{{$user->first_name}}</a></li>
                       @else
                           <li id="login_li"><a href="#" class="fa fa-user"> Login</a></li>
                       @endif
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
			<div class="clearfix"> </div>
		</div>
<!-- //header -->
<!-- main section -->
@yield('main')
<!--eof main-->
<!-- mail -->
<div class="footer-widget">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="single-widget">
						<h2>Help</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#">How To Shop</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Order Status</a></li>
							<li><a href="#">FAQ’s</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="single-widget">
						<h2>Contact Us</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a><i class="fa fa-phone fa-2x"></i> 020 2410 818 | 020-2511461</a></li>
							<li><a><i class="fa fa-mobile fa-2x"></i> +254722-826 336 </a></li>
							<li ><a ><i class="fa fa-envelope "></i> info@primevaraibles.com</a></li>
							<li ><a><i class="fa fa-location-arrow fa-2x"></i> Popo Road, Matubato Building Grd Floor. Gikomba Opposite Barclays Bank Gikomba</a></li>
						</ul>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="single-widget">
						<h2>About Shopper</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#">Company Information</a></li>
							<li><a href="#">Store Location</a></li>
							<li><a href="#">Copyright</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="single-widget">
						<h2>Subscribe Newsletter</h2>
                        <p><i class="fa fa-envelope-o fa-2x"></i> To get the most attractive offers from shop, Subscribe to our news letter<br><br></p>
						<form action="#" class="searchform">
                            <div class="input-group">
                                <input type="text" placeholder="Your email address" />
                                <div class="input-group-addon button"><i class="fa fa-arrow-circle-right"></i></div>
                            </div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //mail -->
<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright &copy; 2015 <span><a href="#">Prime variables Shop</a></span>. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.caricwebtech.com">Caric Web Technologies</a></span></p>
				</div>
			</div>
		</div>

<div class="modal bs-example-modal-sm" id="gifloader" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <i class="fa fa-spinner"></i> Loading,please wait...
    </div>
  </div>
</div>
{{--login modal--}}
<div id="login_modal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <p class="text-uppercase">Sign In<p>
  </div>
  <div class="modal-body">
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div id="login-loader"><span class="text-uppercase">Registered Customers</span></div>
                </div>
                <div class="panel-body">
            <div class="login-form"><!--login form-->
                <h2></h2>
                {!! Form::open(array('url'=>'login','method'=>'POST','class'=>'form-validate', 'id'=>'login_form', 'files'=>false)) !!}
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
                    <p class="forgot" align="right"><a href="#">forgot your password?</a></p>
               {!! Form::close()!!}
            </div><!--/login form-->
                </div>
            </div>
        </div>
        {{--sign in--}}
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div id="reg-loader"><span class="text-uppercase">I Am a new costumer</span></div>
                </div>
                <div class="panel-body">
            <div class="signup-form"><!--sign up form-->
                <div id="login-loader"></div>
                <div class="login-form"><!--login form-->
                   <p>By Creating an account you will be able to:</p>
                    <ul class="acc">
                        <li>Shop Faster</li>
                        <li>Be up to date on an order's status</li>
                        <li>Keep track of previous orders</li>
                    </ul>
                    <br>
                    <br>
                    <br>
                    <div align="center">
                        <a href="{{route('register',[])}}" class="btn btn-primary">Create Account</a>
                    </div>
            </div>
    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>{{--/modal content--}}
  </div>{{--/modal-dialog--}}
</div>{{--/modal--}}

{{--eof--}}
<!-- for bootstrap working -->
<!-- js -->
<script src="{{asset('assets/js/jquery-1.11.1.min.js')}}"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
		<script src="{{asset('assets/js/bootstrap.js')}}"> </script>
        <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/js/app.js')}}"></script>
        <script src="{{asset('assets/js/cart.js')}}"></script>
        <script src="{{asset('assets/js/products.js')}}"></script>
 <!-- custom form validation script for this page-->
 <script src="{{asset('assets/js/form-validation-script.js')}}"></script>
<script src="{{asset('assets/js/jquery.webui-popover.js')}}" ></script>
</body>
</html>