<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
	<link rel="icon" type="image/x-icon" href="{{asset('img/logo4.png')}}">
	<!-- title -->
	<title>Cart</title>

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

	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



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
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
	
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->


	@if(session('error'))
	<div class="alert alert-danger alert-dismissible fade show" style="z-index: 1000;"role="alert">
		{{ session('error') }}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
@endif
	<!-- cart -->
	@if(isset($data))
	

<div class="cart-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="cart-table-wrap">
                    <table class="cart-table">
                        <thead class="cart-table-head">
                            <tr class="table-head-row">
                                <th class="product-remove">#</th>
                                <th class="product-image">Product Image</th>
                                <th class="product-name">Name</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total">Total</th>
                                <th class="product-total">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $gtotal = 0;
                            @endphp

                            @foreach($data as $item)
                                @php
                                    $quan = $item->quantity;
                                    $price = $item->dis_price;
                                    $total = $quan * $price;
                                    $gtotal += $total;
                                @endphp

                                <tr class="table-body-row">
                                    <td class="product-serial">{{ $loop->iteration }}</td>
                                    <td class="product-image"><img src="{{ asset('images/'.$item->p_image) }}" alt=""></td>
                                    <td class="product-name">{{ $item->product_name }}</td>
                                    <td class="product-price">₹{{ $item->dis_price }}</td>
                                    <td class="product-quantity">{{ $item->quantity }}</td>
                                    <td class="product-total">₹{{ $total }}</td>
                                    <td class="product-remove"><a onclick="confirmation(event)" href="/cart/{{ $item->id }}"><i class="far fa-window-close text-danger" style="font-size: 1.5rem;"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="total-section">
                    <table class="total-table">
                        <thead class="total-table-head">
                            <tr class="table-total-row">
                                <th>Grand Total</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="total-data">
                                <td><strong>Total: </strong></td>
                                <td>₹{{ $gtotal }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cart-buttons">
                        <a href="/shop" class="boxed-btn ml-4 bg-success white">Shop More</a>
                        <a href="/checkout/{{$item->uid}}" class="boxed-btn black">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

	@else
	<div class="empty-cart">
		<div class="container p-4">
			<div class="row ">
				<div class="col-4">
					<img src="{{asset('img/empty-cart.jpg')}}" alt="">
				</div>
				<div class="col-8 p-4 ">
					<p class="display-3 mb-0 font-weight-bold">Garden is Empty</p>
					<p class="display-5 pl-4 ">Shop some plants to bring life into your home</p>
					<a href="/shop"> <button type="button" class="btn rounded-pill">Explore Planteria +</button></a>
				</div>
			</div>
		</div>
	</div>
	@endif
	


	<!-- footer -->
	@include('footer')
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="{{asset('/js/jquery-1.11.3.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- count down -->
	<script src="{{asset('/js/jquery.countdown.js')}}"></script>
	<!-- isotope -->
	<script src="{{asset('/js/jquery.isotope-3.0.6.min.js')}}"></script>
	<!-- waypoints -->
	<script src="{{asset('/js/waypoints.js')}}"></script>
	<!-- owl carousel -->
	<script src="{{asset('/js/owl.carousel.min.js')}}"></script>
	<!-- magnific popup -->
	<script src="{{asset('/js/jquery.magnific-popup.min.js')}}"></script>
	<!-- mean menu -->
	<script src="{{asset('/js/jquery.meanmenu.min.js')}}"></script>
	<!-- sticker js -->
	<script src="{{asset('/js/sticker.js')}}"></script>
	<!-- main js -->
	<script src="{{asset('/js/main.js')}}"></script>

<script>
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);
            new swal({
                    title: "Are you sure to delete this Data?",
                    text: "You will not be able to revert this!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willCancel) => {
                    if (willCancel) {
                        $.ajaxSetup({
                            headers: {
                                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                            },
                        });
                        $.ajax({
                            Method: "DELETE",
                            url: urlToRedirect,
                            data: {
                                dataType: 'json',
                                contentType: 'application/json',
                            },
                            success: function(data) {
                                location.href = location.href;
                            },
                        });
                    }
                });
        }
</script>

</body>
</html>