<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
	<link rel="icon" type="image/x-icon" href="{{asset('img/logo4.png')}}">
	<!-- title -->
	<title>Orders</title>

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
						<p>Fresh and Organic</p>
						<h1>Orders</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	@if($data->count() > 0)
		@foreach($data as $in)
			<div class="order_container">
				<div class="order_data_div">
					<div class="order_header">
						<div class="order_header_details1">
							<span>Order Placed <br> <section>{{$in->created_at}}</section></span>
							<span>Price <br><section>₹ {{$in->dis_price}}</section></span>
							<span>Ship To <br><section>{{$in->uname}}</section></span>
						</div>
						<div class="order_header_details2">
							<span>Order id: <b>{{$in->order_id}}</b></span>
						</div>
					</div>

					<div class="oreer_data">
						<div class="oredr_data_child">
							<div class="order_image">
								<img src="{{ asset('images/'.$in->p_image) }} " alt="">
							</div>

							<div class="order_name">
								<p>
									<b>{{$in->product_name}}</b>
								</p>
								<p><i class="fas fa-sync"></i>10 days replacement</p>
								<p><i class="fas fa-shipping-fast"></i>Free dilevary</p>
								<p>Quantity: <b>{{$in->quantity}}</b></p>
								<!-- <a href="#"><button>view product</button></a> -->
							</div>

							<div class="order_statur_or_actons">
								<button>Status : {{$in->status}} </button>
								<a onclick="confirmation(event)" title="Cancel Order" href="/show_orders/{{$in->id}}"><button>cancel order </button></a>
								<!-- <a href=""><button>cancel order </button></a> -->
							</div>
									
						</div>
					</div>
				</div>
			</div>
		@endforeach
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
<!-- 	 -->
	


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