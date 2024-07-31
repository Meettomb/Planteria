<!DOCTYPE html>
<html lang="en">
<head>
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

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
                <a href="admin_index" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><img class="me-2 w-25" src="{{asset('img/logo4.png')}}" alt="">Planteria</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{session('admin')}}</h6>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="admin_index" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                    <a href="plant_insert" class="nav-item nav-link active"><i class="fa fa-th me-2"></i>Product insert</a>
                    <a href="/bloge_insert" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Blog insert</a>
                    <a href="/all_product" class="nav-item nav-link"><i class="fa fa-solid fa-list"></i>All Product</a>
                    <a href="/all_blog" class="nav-item nav-link"><i class="fa fa-solid fa-list"></i>All Blog</a>
                    <a href="/all_login_list" class="nav-item nav-link"><i class="fa fa-solid fa-list"></i>Login List</a>
                    <a href="/all_order" class="nav-item nav-link"><i class="fa fa-solid fa-list"></i>Order list</a>
                    <a href="/all_feedback_list" class="nav-item nav-link"><i class="fa fa-solid fa-comments"></i>Feedback</a>
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


    <div class="formbold-main-wrapper">
  <div class="formbold-form-wrapper">
    <form action="/plant_insert" method="post" enctype="multipart/form-data">
      @csrf
      
      <div class="formbold-form-title">
        <h2 class="">Plant Details Insert</h2>
      </div>

        <label class="image_lable" for="">Image</label>
        <input type="file" name="img1" accept="image/*" onchange="displayImage1()" id="imageInput1" required>
        <img class="chose_img" id="selectedImage1" style="max-width: 100%; max-height: 300px; margin-top: 20px; display: none;" alt=""><br><br>
        
        <div>
          <label for="email" class="formbold-form-label">Product Name</label>
          <input class="formbold-form-input" type="text" name="p_name" autocomplete="off" required>
        </div>

        

        <div>
         <label for="category" class="formbold-form-label">Category</label>
            <select class="formbold-form-input" name="pm_category" id="category">
                <option selected="selected">Select item</option>
                <option value="Plants">Plants</option>
                <option value="Pots">Pots</option>
                <option value="Seeds">Seeds</option>
                <option value="Equipments">Equipments</option>
                <option value="Package">Package</option>
            </select>
        </div>

        <div>
            <label for="subcategory" class="formbold-form-label">Sub Category</label>
            <select class="formbold-form-input" name="ps_category" id="subcategory">
                <!-- Subcategory options will be dynamically populated by JavaScript -->
            </select>
        </div>





        <div>
          <label for="email" class="formbold-form-label">Main Price</label>
          <input class="formbold-form-input" type="text" name="main_price" autocomplete="off" required>
        </div>

        <div>
          <label for="email" class="formbold-form-label">Discount</label>
          <input class="formbold-form-input" type="text" name="percentage" autocomplete="off" required>
        </div>

        <div>
          <label for="" class="formbold-form-label">Product Quantity</label>
          <input class="formbold-form-input" type="number" name="quantity" autocomplete="off" required>
        </div>
        
        <div>
          <label for="email" class="formbold-form-label">Description</label>
          <textarea class="formbold-form-input" name="description" cols="30" rows="10"></textarea>
        </div>

        <div>
          <label for="email" class="formbold-form-label">Benefits</label>
          <textarea class="formbold-form-input" name="p_benefits" cols="30" rows="10"></textarea>
        </div>

      <button onclick="myFunction()" type="submit" name="Insert" class="formbold-btn">Insert Data</button>
      
    </form>
  </div>
</div>

</div>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="jsjava/main.js"></script>

<script>
        // Create a dropdown menu with related options
    function createDropdown() {
    // Array of categories and their related subcategories
        const categories = {
            "Plants": ["Indoor Plants", "Outdoor Plants", "Fruit Plants", "Vegetable Plants", "Air Plants", "Flower Plants", "Hanging Plants"],
            "Pots": ["Plastic Pots", "Wooden Pots", "Ceramic Pots"],
            "Seeds": ["Fruit Seed", "Vegetable Seed"],
            "Equipments": ["Fertilizer", "Garden Tools", "Pets Control"],
            "Package": ["Plants Packages", "Seed Packages", "Equipments Packages"]
        };

        // Get the category and subcategory select elements
        const categorySelect = document.getElementById("category");
        const subcategorySelect = document.getElementById("subcategory");

        // Event listener for changes in the category dropdown
        categorySelect.addEventListener("change", function() {
            // Clear previous options in the subcategory dropdown
            subcategorySelect.innerHTML = "";

            // Get the selected category
            const selectedCategory = categorySelect.value;

            // Populate the subcategory dropdown based on the selected category
            categories[selectedCategory].forEach(function(subcategory) {
                let option = document.createElement("option");
                option.text = subcategory;
                option.value = subcategory;
                subcategorySelect.add(option);
            });
        });
    }

// Call the function to create the dropdown menu
    createDropdown();
</script>

</body>
</html>
</html>