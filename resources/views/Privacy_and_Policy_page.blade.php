<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy & Policy - Planteria</title>

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
 

        .polisy_container {
            max-width: 800px;
            margin: 0 auto;
            margin-top: 130px;
            background: #fff;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h3, h4 {
            color: #333;
        }

        h3 {
            font-size: 2em;
            margin-bottom: 20px;
            padding: 10px 0 20px 0;
        }

        h4 {
            font-size: 1.5em;
            margin-top: 20px;
        }

        p {
            margin: 10px 0;
            color: #555;
        }

        strong {
            color: #000;
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



    <div class="polisy_container">
        <h3>Privacy & Policy</h3>

        <h4>1. Introduction</h4>
        <p>Welcome to Planteria. We are committed to protecting your privacy and ensuring your personal information is handled in a safe and responsible manner. This Privacy & Policy explains how we collect, use, disclose, and protect your personal information.</p>

        <h4>2. Information We Collect</h4>
        <p><strong>Personal Information:</strong> When you register on our site, place an order, subscribe to our newsletter, or interact with our services, we may collect personal information such as your name, email address, phone number, billing and shipping addresses, payment information, and other details necessary to process your orders and provide customer support.</p>
        <p><strong>Non-Personal Information:</strong> We may collect non-personal information such as browser type, operating system, and browsing behavior on our site. This information is used to improve our website and services.</p>

        <h4>3. How We Use Your Information</h4>
        <p><strong>Order Processing:</strong> We use your personal information to process and fulfill your orders, including sending order confirmations, invoices, and delivery information.</p>
        <p><strong>Customer Service:</strong> Your information helps us respond to your customer service requests and support needs.</p>
        <p><strong>Marketing & Promotions:</strong> With your consent, we may use your information to send promotional emails, newsletters, and special offers. You can opt out of these communications at any time.</p>
        <p><strong>Website Improvement:</strong> We use non-personal information to enhance our website's functionality, understand user preferences, and improve our services.</p>

        <h4>4. Information Sharing and Disclosure</h4>
        <p>We do not sell, trade, or otherwise transfer your personal information to outside parties except as described below:</p>
        <p><strong>Third-Party Service Providers:</strong> We may share your information with trusted third-party service providers who assist us in operating our website, conducting our business, or servicing you. These parties are obligated to keep your information confidential.</p>
        <p><strong>Legal Compliance:</strong> We may disclose your information if required by law, to protect our rights, or to comply with a judicial proceeding, court order, or legal process.</p>

        <h4>5. Security</h4>
        <p>We implement a variety of security measures to maintain the safety of your personal information. However, no method of transmission over the Internet or electronic storage is 100% secure. While we strive to protect your information, we cannot guarantee its absolute security.</p>

        <h4>6. Cookies</h4>
        <p>Planteria uses cookies to enhance your browsing experience. Cookies are small files stored on your device that enable us to recognize your browser and capture certain information. You can disable cookies through your browser settings, but doing so may affect your experience on our site.</p>

        <h4>7. Third-Party Links</h4>
        <p>Our website may contain links to third-party websites. These sites have separate and independent privacy policies. We have no responsibility or liability for the content and activities of these linked sites.</p>

        <h4>8. Your Rights</h4>
        <p>You have the right to access, correct, update, or delete your personal information. You can manage your preferences by logging into your account or contacting us directly.</p>

        <h4>9. Changes to This Policy</h4>
        <p>We may update this Privacy & Policy from time to time. Any changes will be posted on this page with the updated effective date.</p>

        <h4>10. Contact Us</h4>
        <p>If you have any questions or concerns about this Privacy & Policy, please contact us at:</p>
        <p>
            <strong>Planteria</strong><br>
            Email: [ourplanteria@gmail.com]<br>
            Phone: [+91 972 525 4775]<br>
            Address: [34/8, East Bopal
                    Guajrat, Ahmedabad.
                    India]
        </p>
    </div>


    @include('footer')

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
