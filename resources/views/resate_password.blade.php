<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resate Password</title>

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

    <style>
        .alert_div{
            width: 100%;
            position: absolute;
            z-index: 999;
        }
        .footer{
            margin-top: 210px;
        }
    </style>
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
                                    <a href="/resate_password">Reset password</a>
                                    <a href="/Privacy_and_Policy_page">Privacy & Policy</a>
                                    <a class="logout_link" href="/logout">Logout</a>
                                    <a class="shopping-cart" href="/cart"><i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </li>
                        </ul>
                    </nav>		
                </div>
            </div>
        </div>
    </div>
    
    <div class="alert_div">
        
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show z-3" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
        @endif

        @if ($errors->any())
            <div class="alert alert-success alert-dismissible fade show z-3">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        
        </div>
</div>


<div class="manage_profile_container">
<section class="container">
    <h2>Resate your password</h2>
    @isset($data)

    <form action="/reset_password" method="post" class="form">
    @csrf
    <input type="hidden" name="id" value="{{ $data->id }}">
    <td><input type="hidden" id="email" name="email" value="{{ $data->email }}" readonly></td>
    <table>
        
    <tr>
            <div class="input-box">
                <th><label for="Password">Password</label></th>
                <td><input style="width: 100%;" type="password" id="Password" name="Password" required></td>
            </div>
        </tr>
        <tr>
            <div class="input-box">
                <th><label for="Confirme_Password">Confirm Password</label></th>
                <td><input style="width: 100%;" type="password" id="Confirme_Password" name="Confirme_Password" required></td>
            </div>
        </tr>
        <tr>
            <div class="input-box">
                <th></th>
                <td>
                    <label><input style="width: 30px;" onclick="togglePasswordVisibility();" type="checkbox"></label> Show Passwords
                </td>
            </div>
        </tr>
        <tr>
        
        <tr>
            <th></th>
            <td>
                <input type="submit" value="Save">
            </td>
        </tr>
    </table>
</form>


    @endisset
</section>


 
</div>

<div class="footer">

    @include('footer')
</div>


    <script>
		function togglePasswordVisibility() {
    var passwordField = document.getElementById('Password');
    var confirmPasswordField = document.getElementById('Confirme_Password');
    var type = passwordField.type === 'password' ? 'text' : 'password';
    passwordField.type = type;
    confirmPasswordField.type = type;
}
	</script>

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