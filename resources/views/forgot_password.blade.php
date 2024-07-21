<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>

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

</head>

<body>

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
						
					</div>
				</div>
			</div>
		</div>
	</div>


 
<div class="container">
  <div class="row d-flex flex-column">

    <div class="wrapper">
    <form action="{{ route('update_password') }}" method="POST">
    @csrf
    <h1>Reset Password</h1>
        <div class="input-box">
            <input type="hidden" name="email" value="{{ $email }}">
            <input type="password" name="password" placeholder="Enter new password" required>
        
        </div>
		
    
        <input class="button btn" type="submit" value="Update Password">
    </form>
   
    </div>
  </div>
</div>


</body>
</html>
