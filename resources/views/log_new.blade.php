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
      <form action="{{ route('log_new') }}" method="post">
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
          <a href="/Send_email">Forgot Password</a>
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