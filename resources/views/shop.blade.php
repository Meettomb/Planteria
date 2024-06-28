<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
	<link rel="icon" type="image/x-icon" href="{{asset('img/logo4.png')}}">
	<!-- title -->
	<title>Shop</title>

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
<body>
	
	<!--PreLoader-->
    <!-- <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div> -->
    <!--PreLoader Ends-->
	
	<!-- header -->
	@includeIf('header')
	
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
				@if(session('error'))
				<div class="alert alert-danger alert-dismissible fade show" style="z-index: 1000;"role="alert">
					{{ session('error') }}
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			@endif
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Plants </p>
						<h1>Shop</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
	@if(session()->has('message'))
	<div class="alert alert-success alert-dismissible fade show z-3" role="alert">
		{{session()->get('message')}}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	@endif

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row product-lists">

            @foreach($info as $in)
				<div class="col-lg-4 col-md-6 text-center plant">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single_product/{{$in['id']}}"><img src="{{asset('images/'.$in->p_image)}}" alt="" loading="lazy"></a>
						</div>
						<h4>{{$in->p_name}}</h4>
						<h6>{{$in->ps_category}}</h6>
						<span class="main-price">₹{{$in->main_price}} </span>
						<span class="dis-price">₹{{$in->dis_price}}</span>
						@if($in->quantity>0)
							<p style="color:green; font-size:19px; font-weight:1000;">In stock</p>
						@else
							<p style="color:red; font-size:19px; font-weight:1000;">out of stock</p>
						@endif
						<!-- <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a> -->
						@if($in->quantity > 0)
						<form action="{{ url('cart/'.$in->id) }}" class="form" method="post">
							@csrf
							
							<input type="hidden" name="quantity" id="quantity" value="1" />
							<i class="fas fa-shopping-cart"></i><input class="cart-btn" type="submit" value="Add to Cart">
						</form>


						@else
							<form class="form" method="post">
								@csrf
								
								<i class="fas fa-shopping-cart"></i><input class="cart-btn" type="button" value="Add to Cart" data-toggle="modal" data-target="#exampleModalCenter">
								<!-- <i class="fas fa-shopping-cart"></i><input class="cart_btn" id="add_cart" type="button" value="Add to Cart" data-toggle="modal" data-target="#exampleModalCenter"> -->
							</form>
						@endif
						<a class="buy" href="single_product/{{$in['id']}}"><button>View Product</button></a>
						
					</div>
				</div>
			@endforeach

			</div>
		</div>
	</div>
	<!-- end products -->


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

</body>
</html>