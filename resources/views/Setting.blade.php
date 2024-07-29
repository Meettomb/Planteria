<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>

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
	<link rel="stylesheet" href="{{asset('css/Setting.css')}}">

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
                    <nav class="main-menu">
                        <ul>
                            <li>
                                <div class="header-icons">
                                    <a href="/Setting">Manage Profile</a>
                                    <a href="#">Reset password</a>
                                    <a href="#">Privacy & Policy</a>
                                    <a class="shopping-cart" href="/cart"><i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </li>
                        </ul>
                    </nav>		
                </div>
            </div>
        </div>
    </div>
</div>

<div class="manage_profile_container">
    <section class="container">
        <h1>Change Details</h1>
        @isset($data)
        <form action="/userUpdate" method="post" class="form">
            @csrf
            <div class="row">
                <div class="input-box">
                    <label for="first_name">First name : </label>
                    <input type="text" id="first_name" name="first_name" value="{{$data->first_name}}">
                </div>

                <div class="input-box">
                    <label for="last_name">Last name : </label>
                    <input type="text" id="last_name" name="last_name" value="{{$data->last_name}}">
                </div>
            </div>
            
            <div class="row">
                <div class="input-box">
                    <label for="address">Address : </label>
                    <input type="text" name="address" id="address" value="{{$data->address}}">
                </div>
                <div class="input-box">
                    <label for="pincode">Pincode : </label>
                    <input type="text" name="pincode" id="pincode" value="{{$data->pincode}}">
                </div>
            </div>

            <div class="row">
                <div class="input-box">
                    <label for="phone">Phone No. : </label>
                    <input type="text" name="phone" id="phone" value="{{$data->phone}}">
                </div>
                <div class="input-box">
                    <label for="dob">DOB :</label>
                    <input type="text" name="dob" id="dob" value="{{$data->dob}}">
                </div>
            </div>
                    
            <!-- user id as hidden-->
            <input type="hidden" name="id" value="{{$data->id}}">

            <input type="submit" value="Submit">
        </form>
        @endisset
    </section>    

    <!-- Error handing  -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

</div>

</body>
</html>