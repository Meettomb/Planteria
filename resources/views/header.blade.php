<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruitkha - Slider Version</title>

	<link rel="icon" type="image/x-icon" href="{{asset('img/logo4.png')}}">

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


</head>
<body>

@php

    $logname="";
    $loglinks="";

    if(session('user')){
        $logname = 'Logout'; 
    }
    else{
        $logname = 'login / Sign up';
    }

	$user_first = '';
	if(session('user')){
		$user_first = "user_name";
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
								<!-- <li class="current-list-item"><a href="/">Home</a> -->
								
								<li><a href="/blog">Blog</a></li>
								<li><a href="/gardening_service">Service</a></li>
								</li>
								<!-- <li><a href="/about">About</a></li> -->
								<li><a href="#">Category </a>
									<ul class="sub-menu">
										<ul>
											<li class="nav_list_heading">Plants</li>
											<li><a href="/outdoor">Outdoor</a></li>
											<li><a href="/indore">Indoor</a></li>
											<li><a href="/fruit">Fruit Plant</a></li>
											<li><a href="/vegetable">vegetable Plant</a></li>
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


								<li><a href="/contact">Contact</a></li>

								<li><a href="/shop">Shop</a></li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="/cart"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
										
										<div class="profile_div">
									@if(session('user'))
										<a href="/Setting"><span class="login"><span class="{{$user_first}}">{{ substr(session('user'), 0, 1) }}</span></span></a>
										<div class="profile_drop">
											<!-- <a class="mange_profile" href="#" id="manageProfileLink">Manage Profile</a> -->
											<a class="mange_profile" href="/Setting">Setting</a><br>
											<a class="mange_profile" href="/show_orders">Show Orders</a><br>
											<a class="logout_link" href="/logout">Logout</a>
										</div>
									@else
										<span class="login"><a href="/log_new"><span class="{{$user_first}}">{{ substr(session('user'), 0, 1) }}</span> {{$logname}}</a></span>
									@endif
								</li>
								</div>

								
										
									</div>

									



								</li>
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

	<!-- search area -->
	<div class="search-area">


		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span id="close_button" class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
						<form class="form" id="form" action="/category" autocomplete="off" method="get">
							<h3>Search For:</h3>
							<input type="search" name="query" id="search" placeholder="Keywords">
							<button type="submit">Search</button>
						</form>
						

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->

	<script>
    // Get the modal
    var modal = document.getElementById("profilePopup");

    // Get the link that opens the modal
    var link = document.getElementById("manageProfileLink");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close_popup")[0];

    // When the user clicks the link, open the modal 
    link.onclick = function(event) {
        event.preventDefault();
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>