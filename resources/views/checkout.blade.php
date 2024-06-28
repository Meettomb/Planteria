<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
	<link rel="icon" type="image/x-icon" href="{{asset('img/logo4.png')}}">
	<!-- title -->
	<title>Checkoout Form</title>

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
	
	<!-- header -->
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
						<h1>Check Out Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						         Contact Info
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        	<form method='post' action="/orders">
										@csrf
										<!-- <p><input type="hidden" id="randomNumberInput" name="order_id"></p> -->
						        		<p><input name="email" type="email" placeholder="Email" value='{{$uinfo[0]->email}}' required></p>							        		
										<p class='d-flex '><input name="first_name" type="text" value='{{$uinfo[0]->first_name}}' class="w-50 mr-1"  placeholder="First Name" required> 
										<input name="last_name" type="text" class="w-50" placeholder="Last Name" value='{{$uinfo[0]->last_name}}'></p>
										<p><input name="address" type="text" placeholder="Address" value='{{$uinfo[0]->address}}' required></p>
										<p><input name="city" type="text" placeholder="City" required></p>
										<p><input name="state" type="text" placeholder="State" required></p>
										<p><input name="pincode" type="number" value='{{$uinfo[0]->pincode}}' placeholder="pincode" required></p>	
										<p><input name="phone" type="text" maxlength="10" minlength="10" placeholder="Phone" value='{{$uinfo[0]->phone}}' required></p>		
										<div class="card-header">
											<h5 class="mb-3 mt-3">
												<button class="btn btn-link" type="button">
													Payment Method
												</button>
											</h5>
										</div>
										
										<div class="d-flex justify-content-around">
											<label for="credit_card" style='font-size: 1.3rem;'>
												<input type="radio" id="credit_card" name="payment_method" onclick="card();" value="Credit Card" style="width: 20px; height: 17px; font-size: 1.3rem" required> Credit Card
											</label>
											<label for="upi" style='font-size: 1.3rem;'>
												<input type="radio" id="upi" name="payment_method" onclick="upi_d();" value="UPI" style="width: 20px; height: 17px; font-size: 1.3rem" required> UPI
											</label>
											<label for="cash_on_delivery" style='font-size: 1.3rem;'>
												<input type="radio" id="cash_on_delivery" name="payment_method" onclick="cash();" value="COD" style="width: 20px; height: 17px; font-size: 1.3rem" required> Cash On Delivery
											</label>
										</div>
										<!-- Card Details -->
										<div class="m-5" id="card_detail">
											<p><input name="" type="text" placeholder="Card holder Name" value=''></p>							        		
											<p><input name="" type="number" placeholder="Card number"></p>							        		
											<p class='d-flex'>
												<input name="" type="number" class="w-50 mr-1"  placeholder="CVV"> 
												<input style="height:100%;" class="" name="" type="month" class="w-50" placeholder="">
											</p>
										</div>
										
										<!-- UPI Details -->
										<div class="m-5" id="upi_detail">
											<p><input name="" type="text" placeholder="UPI id" value=''></p>							        		
										</div>
													
									</div>
									
								</div>
						    </div>
						</div>
						
						</div>
						
					</div>
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>												
							
								<tr>
									<th>Product Image</th>
									<th>Product Name</th>
									<th>Quantity</th>
									<th>Price</th>
									<th>Total Price</th>
								</tr>

								
							</thead>

							<tbody class="order-details-bod">
								@php
									$gtotal = 0;								
								@endphp

								@foreach($data as $data)

								@php
									$total = $data->quantity * $data->dis_price;
									$gtotal += $total;
								@endphp
								<tr>				
									<td class="product-image"><img src="{{asset('images/'.$data->p_image) }}"></td>	
														
									<td>{{$data->product_name}}</td>
									<td>{{$data->quantity}}</td>
									<td>₹{{$data->dis_price}}</td>
									<td>₹{{$total}}</td>
									
								</tr>
								@endforeach		
						
							</tbody>
							<tbody class="checkout-details">
								<tr>
                                    <th></th>
									<th>Total</th>
									<th></th>
									<th>₹{{$gtotal}}</th>
								
								</tr>
							</tbody>
						</table>
						<!-- <a href="#" class="boxed-btn">Place Order</a> -->
							<input type="hidden" name="price" value='{{$gtotal}}'>					
							<input type="submit" class="mt-5 w-50" value="Place Order">
						
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

	<!-- logo carousel -->
	
	<!-- end logo carousel -->

	<!-- footer -->
	@include('footer')
	<!-- end copyright -->

	<script>
		function card(){
			document.getElementById('card_detail').style.display='block';
			document.getElementById('upi_detail').style.display='none';
		}
		function upi_d(){
			document.getElementById('upi_detail').style.display='block';
			document.getElementById('card_detail').style.display='none';
		}
		function cash(){
			document.getElementById('upi_detail').style.display='none';
			document.getElementById('card_detail').style.display='none';
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

	<script>
		let randomNumber = Math.floor(100000 + Math.random() * 900000);
		document.getElementById('randomNumberInput').value  = randomNumber;
		console.log(randomNumber);
	</script>
</body>
</html>