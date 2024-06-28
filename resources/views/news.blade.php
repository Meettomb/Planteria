<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<link rel="icon" type="image/x-icon" href="{{asset('img/logo4.png')}}">
	<!-- title -->
	<title>News</title>

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
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	@include('header')
	
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
						<p>Plants Information</p>
						<h1>News Article</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">
			<div class="row">
			<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news"><div class="latest-news-bg news-bg-1"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news">Indian scientists have discovered a new plant species in India's Andamans archipelago.</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 Jan, 2024</span>
							</p>
							<p class="excerpt">Biologists found a marine green algae during a trip to the island in 2019.
								Identification is laborious, and it took the scientists nearly two years to confirm that the species had been discovered for the first time.
								Scientists say this the first discovery of a species of algae in the islands in nearly four decades.</p>
							<!-- <a href="single-news" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a> -->
						</div>
					</div>
				</div>
<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news"><div class="latest-news-bg news-bg-2"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news">SMART researchers engineer a plant-based sensor to monitor arsenic levels in soil</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2023</span>
							</p>
							<p class="excerpt">Scientists from the Disruptive and Sustainable Technologies for Agricultural Precision (DiSTAP) research group at the Singapore-MIT Alliance for Research and Technology (SMART), MIT’s research enterprise in Singapore</p>
							<!-- <a href="single-news" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a> -->
						</div>
					</div>
				</div>
<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-latest-news">
						<a href="single-news"><div class="latest-news-bg news-bg-3"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news">Good thoughts bear good fresh juicy fruit.</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 Feb, 2024</span>
							</p>
							<p class="excerpt">We are continuously exposed to harmful substances and contaminants in our surroundings. Whether it’s the pollution from vehicles, industrial facilities or the presence of chemicals in common household items, it’s no surprise that the quality of indoor air has also worsened.</p>
							<!-- <a href="single-news" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a> -->
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news"><div class="latest-news-bg news-bg-4"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news">Inside or Outside: Which to Choose When Starting Plants From Seed</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 7 September, 2021</span>
							</p>
							<p class="excerpt">n lesson seven I reviewed the pros and cons of starting your garden from seeds or starts. If you’re feeling ambitious and want to start all (or at least a few) of your plants from seed, the question is: should you start them indoors or outdoors?</p>
							<!-- <a href="single-news" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a> -->
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news"><div class="latest-news-bg news-bg-5"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news">Amazing Newspaper That Becomes a Plant is Coming From Japan</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 20 April, 2023</span>
							</p>
							<p class="excerpt"> Japan once more demonstrates to be an advanced country. Its latest invention consists in a newspaper made of recycled and vegetable paper that you can plant after you’ve read it. It is called “Green Newspaper” and was invented by the publisher of the famous Japanese daily, The Mainichi Shimbunsha.</p>
							<!-- <a href="single-news" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a> -->
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news"><div class="latest-news-bg news-bg-6"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news">Coated seeds may enable agriculture on marginal lands</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 2 May, 2022</span>
							</p>
							<p class="excerpt">Providing seeds with a protective coating that also supplies essential nutrients to the germinating plant could make it possible to grow crops in otherwise unproductive soils, according to new research at MIT.</p>
							<!-- <a href="single-news" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

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