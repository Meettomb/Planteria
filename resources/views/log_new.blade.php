<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
	<link rel="icon" type="image/x-icon" href="{{asset('img/logo4.png')}}">
	<!-- title -->  
  <title>Login Form </title>
	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
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

  <link rel="stylesheet" href="{{asset('css/login-styles.css')}}">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>


@php

    $logname="";
    $loglinks="";

    if(session('user')){
        $logname = 'Logout';
        $loglinks = 'logout';  
    }
    else{
        $logname = 'login / Sign up';
        $loglinks = 'log_new';  
    }

@endphp
    <!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="/">
								<img src="{{asset('img/logo4.png')}}" alt=""><span>Planteria</span>
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="/">Home</a>
								</li>
								<!-- <li><a href="/about">About</a></li> -->
								<li><a href="#">Category </a>
									<ul class="sub-menu">
										<ul>
											<li class="nav_list_heading">Plants</li>
											<li><a href="/outdoor">Outdoor</a></li>
											<li><a href="/indore">Indoor</a></li>
											<li><a href="/fruit">Fruit Plant</a></li>
											<li><a href="/vegetable">Vegetable Plant</a></li>
											<li><a href="/air">Air Plant</a></li>
											<li><a href="/flower">Flower Plant</a></li>
											<li><a href="/hanging">Hanging Plant</a></li>
										</ul>
										<ul>
											<li class="nav_list_heading">Seed</li>
											<li><a href="/fruit_seed">Fruits</a></li>
											<li><a href="/vegetable_seed">Vegetable</a></li>
										</ul>
										<ul>
											<li class="nav_list_heading">Pots</li>
											<li><a href="/plastic_pots">Plastc pots</a></li>
											<li><a href="/Wooden_pots">Wooden pots</a></li>
											<li><a href="/ceramic_pots">Ceramic pots</a></li>
										</ul>
										<ul>
											<li class="nav_list_heading">Equipments</li>
											<li><a href="/Fertilizer">Fertilizer</a></li>
											<li><a href="/Garden_tools">Garden Tools</a></li>
											<li><a href="/Pets_control">Pets Control</a></li>
										</ul>
										<ul>
											<li class="nav_list_heading">Packages</li>
											<li><a href="/Plants_packages">Plants Packages</a></li>
											<li><a href="/seed_packages">Seed Packages</a></li>
											<li><a href="/Equipments_Packages">Equipments Packages</a></li>
										</ul>
										
									</ul>
								</li>

								<li><a href="/news">News</a></li>
								<li><a href="/gardening_service">Service</a></li>
								<li><a href="/blog">Blog</a></li>

								<li><a href="/contact">Contact</a></li>

								<li><a href="/shop">Shop</a></li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->


<div class="container">
  <div class="row d-flex flex-column">

    <div class="wrapper">
      <form action="/log_new" method="post">
        @csrf
        <h1>Login</h1>
        <div class="input-box">
          <input type="email" name="email" id="email" placeholder="Enter Your Email" autocomplete="off" required> 
          <i class='bx bxs-user'></i>
        </div>
		@if(session()->has('email_error'))
			<div class="alert alert-danger alert-dismissible fade show z-3 m-2" role="alert">
				{{session()->get('email_error')}}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		@endif
        <div class="input-box">
          <input type="password" name="password" id="password" placeholder="Enter Your Password" autocomplete="off" required>
          <i class='bx bxs-lock-alt'></i>
        </div>
		@if(session()->has('pass_error'))
			<div class="alert alert-danger alert-dismissible fade show z-3 m-4" role="alert">
				{{session()->get('pass_error')}}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		@endif
		
        <div class="remember-forgot">
          <label><input onclick="password_show();" type="checkbox">Show Password</label>
          <a href="#">Forgot Password</a>
        </div>
        <input class="button btn" type="submit" value="Login">
        <div class="register-link">
          <p>Dont have an account? <a href="/regi"> Register</a></p>
        </div>
      </form>
    </div>
  </div>
</div>
	
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
		function password_show() {
			var x = document.getElementById("password");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
	</script>
</body>
</html>