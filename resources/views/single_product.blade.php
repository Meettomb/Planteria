<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
	<link rel="icon" type="image/x-icon" href="{{asset('img/logo4.png')}}">
	<!-- title -->
	<title>{{$in->p_name}}</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{asset('css/all.min.css')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
	<!-- main style -->
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset('css/responsive.css')}}">

	<link rel="stylesheet" href="{{asset('css/index.css')}}">

</head>
<style>
	form {
	/* width: 300px; */
	/* margin: 0 auto; */
	/* text-align: center; */
	/* padding-top: 50px; */
	}

	.value-button {
	display: inline-block;
	border: 1px solid #ddd;
	width: 40px;
	height: 40px;
	text-align: center;	
	vertical-align: middle;
	padding: 11px 0;
	background: #eee;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	}

	.value-button:hover {
	cursor: pointer;
	}

	form #decrease {
	margin-right: -4px;
	border-radius: 8px 0 0 8px;
	}

	form #increase {
	margin-left: -4px;
	border-radius: 0 8px 8px 0;
	}

	form #input-wrap {
	margin: 0px;
	padding: 0px;
	}

	input#number {
	text-align: center;
	border: none;
	border-top: 1px solid #ddd;
	border-bottom: 1px solid #ddd;
	margin: 0px;
	width: 40px;
	height: 40px;
	}

	input[type=number]::-webkit-inner-spin-button,
	input[type=number]::-webkit-outer-spin-button {
	-webkit-appearance: none;
	margin: 0;
	}
</style>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	@include('header')

	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>See more Details</p>
						<h1>{{$in->p_name}}</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	@if(session()->has('message'))
	<div class="alert alert-success alert-dismissible fade show z-3" role="alert">
		{{session()->get('message')}}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	@endif

	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
						<img src="{{asset('images/'.$in->p_image)}}" alt="" loading="lazy">		
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h1 class="p_name">{{$in->p_name}}</h1>
						<span class="ps_cate">{{$in->ps_category}}</span>
						<p class="single-product-pricing"><del>₹{{$in->main_price}}</del>₹{{$in->dis_price}}</p>
						
						<div class="single-product-form">
							<!-- <form action="/cart/{{$in->id}}" method="post">
								@csrf
								<input type="number" name="quantity" max="10" min="1" value=1>
								<input class="cart_btn" id="add_cart" type="submit" value="Add to Cart">
							</form> -->
							@if($in->quantity > 0)
								<form action="/cart/{{$in->id}}" method="post">
									<div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
									<input class="value" type="number" name="quantity" id="number" value="1" readonly/>
									<div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
									@csrf
									<input class="cart_btn" id="add_cart" type="submit" value="Add to Cart">
								</form>
									@if(session()->has('error'))
										<p class="m-2 text-danger">{{session()->get('error')}}</p>
									@endif
								<input type="checkbox" name="" id=""/> <span>You want to gift some one</span>
								<section class="stock">In stock</section>

								
								@if(session('user'))
								<a class="buy" href="/pay/{{$in->id}}"><button>Buy</button></a>
								@else
								<a class="buy" href="/log_new"><button>Buy</button></a>
								@endif
							@else
								<form>
									<div class="value-button" id="decrease" value="Decrease Value">-</div>
									<input type="number" name="quantity" id="number" value="1" disabled/>
									<div class="value-button" id="increase" value="Increase Value">+</div>

									<input class="cart_btn" id="add_cart" type="button" value="Add to Cart" data-toggle="modal" data-target="#exampleModalCenter">
								</form>
								
								<input type="checkbox" name="" id=""/> <span>You want to gift some one</span>
								<section class="stock_invalid">out of stock</section>
								<a class="buy" data-toggle="modal" data-target="#exampleModalCenter"><button>Buy</button></a>
							@endif
								
						


							<!-- <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a> -->
							<p class="all_type"><strong>Categories: </strong>{{$in->pm_category}}, {{$in->ps_category}}</p>
						</div>
					
					</div>
				</div>
			</div>

			<div class="service">
				<div class="service_child">
					<i class="fas fa-shipping-fast"></i>
					Free Shipping
				</div>
				<div class="service_child">
					<i class="fas fa-phone-volume"></i>24/7 Support
				</div>
				<div class="service_child">
					<i class="fas fa-sync"></i>Refund
				</div> 
			</div>
			
			<div class="discription">
				@if($in->description)
					<h2>Description</h2>
					<p>{{$in->description}}</p>
				@endif

				@if($in->p_benefits >0)
					<h2>Benefits</h2>
					<p>{{$in->p_benefits}}</p>
				@endif
			</div>

			<div class="share">
				<h4>Follow on:</h4>
				<ul class="product-share">
					<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
					<li><a href=""><i class="fab fa-twitter"></i></a></li>
					<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
					<li><a href=""><i class="fab fa-linkedin"></i></a></li>
				</ul>
			</div>
		</div>
	</div>


	<!-- Button trigger modal -->


<!-- Modal -->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content " >
				<div class="modal-header alert-danger">
					<h5 class="modal-title" id="exampleModalLongTitle" style="color:red;">Out Of Stock</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				</div>
			</div>
		</div>
	<!-- Model -->


	<!-- footer -->
	@include('footer')

	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- count down -->
	<script src="{{asset('js/jquery.countdown.js')}}"></script>
	<!-- isotope -->
	<script src="{{asset('js/jquery.isotope-3.0.6.min.js')}}"></script>
	<!-- waypoints -->
	<script src="{{asset('js/waypoints.js')}}"></script>
	<!-- owl carousel -->
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<!-- magnific popup -->
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
	<!-- mean menu -->
	<script src="{{asset('js/jquery.meanmenu.min.js')}}"></script>
	<!-- sticker js -->
	<script src="{{asset('js/sticker.js')}}"></script>
	<!-- main js -->
	<script src="{{asset('js/main.js')}}"></script>

	<script>
		function increaseValue() {
			var value = parseInt(document.getElementById('number').value, 10);
			value = isNaN(value) ? 0 : value;
			value++;
			if(value === 11){
				value = 1;
			}
			document.getElementById('number').value = value;
		}

		function decreaseValue() {
			var value = parseInt(document.getElementById('number').value);
			value = isNaN(value) ? 1 : value;
			value < 1 ? value : 1;
			value--;
			if(value <= 0) {
				value = 1;
			}
			document.getElementById('number').value = value;
		}
	</script>

</body>
</html>