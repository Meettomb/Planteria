<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login list</title>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Data Edit</title>
    <link rel="icon" type="image/x-icon" href="{{asset('img/logo4.png')}}">
    <link rel="stylesheet" href="{{ asset('css/plant_insert.css')}}">
    <script src="{{asset('javascript\jQuery.js')}}"></script> 
    <script src="{{asset('js\script.js')}}"></script>  
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1\css\all.min.css')}}">


    <link rel="icon" type="image/x-icon" href="{{asset('img/logo4.png')}}">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

     <!-- icons -->
	<link rel="stylesheet" href="{{asset('css/all.min.css')}}">
 
</head>
<body>
@php

$logname="";
$loglinks="";

if(session('admin')){
    $logname = 'Logout';
    $loglinks = 'logout';  
}
else{
    $logname = 'login / Sign up';
    $loglinks = 'log_new';  
}

$user_first = '';
if(session('admin')){
    $user_first = "user_name";
}
@endphp



<div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="/admin_index" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><img class="me-2 w-25" src="{{asset('img/logo4.png')}}" alt="">Planteria</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{session('admin')}}</h6>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="admin_index" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                    <a href="plant_insert" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Product insert</a>
                    <a href="/bloge_insert" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Blog insert</a>
                    <a href="/all_product" class="nav-item nav-link"><i class="fa fa-solid fa-list"></i>All Product</a>
                    <a href="/all_blog" class="nav-item nav-link"><i class="fa fa-solid fa-list"></i>All Blog</a>
                    <a href="/all_login_list" class="nav-item nav-link"><i class="fa fa-solid fa-list"></i>Login List</a>
                    <a href="/all_order" class="nav-item nav-link"><i class="fa fa-solid fa-list"></i>Order list</a>
                    <a href="/all_feedback_list" class="nav-item nav-link active"><i class="fa fa-solid fa-comments"></i>Feedback</a>
                    <a href="/set_discount" class="nav-item nav-link"><i class="fa fa-percent me-2"></i>Set Discount</a>
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4" style="background: transparent;">
                    <input class="form-control border-0" id="myInput" onkeyup="search()" name="search" type="search" placeholder="Search" autocomplete="off">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <!-- <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;"> -->
                            <span class="d-none d-lg-inline-flex">{{substr(session('admin'), 0, 1) }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <span>{{session('admin')}}</span><br>
                            <a href="/{{$loglinks}}">{{$logname}}</a>
										
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">User Detail</h6>
                    <div class="table-responsive">
                        <table class="table">
                           
                            <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <td>{{ $data->name }}</td>
                                    </tr>

                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $data->email }}</td>
                                    </tr>

                                    <tr>
                                        <th>Message</th>
                                        <td>
                                             <textarea cols="60" rows="6">{{$data->message}}</textarea>
                                        </td>
                                    </tr>

                            </tbody>
                            
                        </table>

                        <p style="color: darkcyan; cursor:pointer; font-size: 18px;" onclick="goBack()">back to list</p>
                    </div>
                </div>
            </div>


</div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('jsjava/main.js')}}"></script>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    
    <script>
    $(document).ready(function(){
        $("#myInput").on("keyup",function(){    //This Id Is Search Field Id
            var value = $(this).val().toLowerCase();
            $(".tr2").filter(function(){        //This Class Is My Tag Where Search Data
                $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1);                      
            });
        });
    });
</script>
</body>
</html>