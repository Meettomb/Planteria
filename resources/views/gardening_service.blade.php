<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
	<link rel="icon" type="image/x-icon" href="{{asset('img/logo4.png')}}">
	<!-- title -->
	<title>Garderning Service</title>

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
    @include('header')
  
	<div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
	@if(session('error'))
	<div class="alert alert-danger alert-dismissible fade show" style="z-index: 1000;"role="alert">
		{{ session('error') }}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
@endif
    	<!-- home page slider -->
	<div class="homepage-slider">
		<!-- single home slider -->
		<div class="single-homepage-slider gardening-bg-1">
			
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Expert Gardeners</p>
								<h1>We'll care about your garden, b'coz we care about you</h1>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider gardening-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Experienced Gardeners</p>
								<h1>Your garden will blossom and so will you</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider gardening-bg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-right">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Efficiency and Ease</p>
								<h1>Don't have time to take care of your garden, No Need</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> Expert Gardeners</h3>						
					</div>
				</div>
			</div>

			<div class="row imag_div">
				<div class="img d-flex flex-column  align-items-center gardener-face">
					<img src="{{asset('img\g-face-1.jpg')}}" alt="">
                    <p>Alexander Miller</p>
				</div>
				<div class="img d-flex flex-column align-items-center gardener-face">
					<img src="{{asset('img\g-face-2.jpg')}}" alt="">
                    <p>Christopher Lee</p>
				</div>
				<div class="img d-flex flex-column align-items-center gardener-face">
					<img src="{{asset('img\g-face-3.jpg')}}" alt="">
                    <p>Ethan Jones</p>
				</div>
				<div class="img d-flex flex-column align-items-center gardener-face">
					<img src="{{asset('img\g-face-4.jpg')}}" alt="">
                    <p>Amelia Brown</p>
				</div>
			</div>
			<div class="row imag_div">
				<div class="img d-flex flex-column align-items-center gardener-face">
					<img src="{{asset('img\g-face-5.jpg')}}" alt="">
                    <p>Isabella Davis</p>
				</div>
				<div class="img d-flex flex-column align-items-center gardener-face">
					<img src="{{asset('img\g-face-6.jpg')}}" alt="">
                    <p>Daniel Robinson</p>
				</div>
				<div class="img d-flex flex-column align-items-center gardener-face">
					<img src="{{asset('img\g-face-7.jpg')}}" alt="">
                    <p>Jacob Thompson</p>
				</div>
				<div class="img d-flex flex-column align-items-center gardener-face">
					<img src="{{asset('img\g-face-8.jpg')}}" alt="">
                    <p>John Snow</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->

    <div class="container gardening-start">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title" id="gardening-title">	
						<h3><span class="orange-text">Gardening</span> Service</h3>
                        <p>With Our Detailed Landscaping Services, You can Transform Your Outdoor Space!</p>
					</div>      
				</div>
			</div>
            <div class="row">
                <div class="col-lg gardening-moto text-center">
                    <p class="text-break text-center" >Our professional gardening services includes everything from lawn mowing and pruning to planting and fertilizing. Let us help you create a beautiful and healthy garden that you can enjoy all season long.Imagine stepping out into your backyard and being greeted by a flourishing garden that reflects your unique style and personality. Our professional gardening services help you achieve that vision. We go beyond just maintenance, creating a beautiful and peaceful outdoor space for you to relax, entertain, and connect with nature.</p>
                </div>            
            </div>
            <div class="container gardening-contact pb-4">
                <div class="row d-flex text-center justify-content-center">
                    <div class="col">
                        <b>Contact us:</b> +00 111 222 3333 
                    </div>
                    <div class="col">
                        <b>Email ID :</b> support@Planteria.com
                    </div>
                    
                </div>
            </div>
           
    </div>



    @include('footer')
	
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