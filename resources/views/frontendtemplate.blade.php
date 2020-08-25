<!DOCTYPE html>

<html>
<head>
	<title></title>
	<link rel="icon"  href="images/logo1.png">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/fontawesome/fontawesome/css/all.min.css')}}">
	<scipt rel="stylesheet" type="text/css" href="{{asset('frontend/fontawesome/js/all.min.js')}}"></scipt>
</head>
<body class="linerarg">
	<!-- Navagitation -->
	<nav class="navbar navbar-expand-lg navcolor sticky-top">
		<a class="navbar-brand" href="index.html">
			<img src="images/logo1.png" width="50" height="50">

<html lang="en">
<head>
	<title>Sakura Cinema</title>

	<link rel="icon"  href="{{asset('frontend/images/logo1.png')}}">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	{{-- <meta name="description" content="">
	<meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}"> --}}

	
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/fontawesome/css/all.min.css')}}">
	
</head>
<body class="linerarg">
	
	<!-- Navagitation -->
	<nav class="navbar navbar-expand-lg navcolor sticky-top">
		<a class="navbar-brand" href="{{route('homepage')}}">
<<<<<<< HEAD
			{{-- <img src="{{asset('frontend/images/logo1.png')}}" width="60" height="60"> --}}
      <img class="logo" src="{{asset('frontend/images/logo1.png')}}" width="50" height="50">
      <div class="snow">
        <div class="flake1"></div>
        <div class="flake2"></div>
        <div class="flake3"></div>
        <div class="flake4"></div>
        <div class="flake5"></div>
        <div class="flake6"></div>
        <div class="flake7"></div>
        <div class="flake8"></div>
      </div>
=======
			<img src="{{asset('frontend/images/logo1.png')}}" width="50" height="50">

>>>>>>> 04134e3b56a222e047283323ce16a746bf177735
		</a>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
<<<<<<< HEAD
					<a class="nav-link txtcolor" id="animate" href="{{route('homepage')}}"><b>Home</b></a>
=======

					<a class="nav-link txtcolor" href="index.html"><b>Home</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link txtcolor" href="#"><b>Seat</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link txtcolor" href="booking.html"><b>Booking</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link txtcolor" href=""><b>About</b></a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<a class="nav-link txtcolor" href="#">

					<a class="nav-link txtcolor" href="{{route('homepage')}}"><b>Home</b></a>
>>>>>>> 04134e3b56a222e047283323ce16a746bf177735
				</li>
				<li class="nav-item">
					<a class="nav-link txtcolor" id="animate" href="{{route('seatpage')}}"><b>Seat</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link txtcolor" id="animate" href="{{route('bookingpage')}}"><b>Booking</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link txtcolor" id="animate" href="{{route('aboutpage')}}"><b>About</b></a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
<<<<<<< HEAD
				<a class="nav-link txtcolor" id="animate" href="{{route('paymentpage')}}">
=======
				<a class="nav-link txtcolor" href="{{route('paymentpage')}}">

>>>>>>> 04134e3b56a222e047283323ce16a746bf177735
					<i class="fab fa-amazon-pay fa-2x"></i>
				</a>
				
        <a href="#" class=" btn btn-primary  sign_in"><span>Sign in</span></a>  
			</form>
		</div>
	</nav>


	<!-- Footer -->
	@yield('content')

<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4 foot_color">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold foot_text">Company name</h6>
        <p class="foot_text"> Sakura Cinema is a UK-based DVD-by-mail company which specialises in world and arthouse cinema but also caters for mainstream tastes as well with over 80,000 titles films and 5000+ Blu-ray high definition titles available.</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold foot_text">Products</h6>
        <p>
          <a href="#!" class="foot_text">Tech Shop</a>
        </p>
        <p>
          <a href="#!" class="foot_text">E-commerce</a>
        </p>
        <p>
          <a href="#!" class="foot_text">Moblie Shop</a>
        </p>
        <p>
          <a href="#!" class="foot_text">New Website</a>
        </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold foot_text">Useful links</h6>
        <p>
          <a href="#!" class="foot_text">Your Account</a>
        </p>
        <p>
          <a href="#!" class="foot_text">Become an Affiliate</a>
        </p>
        <p>
          <a href="#!" class="foot_text">Shipping Rates</a>
        </p>
        <p>
          <a href="#!" class="foot_text">Help</a>
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold foot_text">Contact</h6>
        <p class="foot_text">
          <i class="fas fa-home mr-3 "></i> Mandalay, Myanmar 8/184</p>
        <p class="foot_text">
          <i class="fas fa-envelope mr-3 "></i> sakuracinema@gmail.com</p>
        <p class="foot_text">
          <i class="fas fa-phone mr-3 "></i> + 09 440 665 233</p>
        <p class="foot_text">
          <i class="fas fa-print mr-3 "></i> + 09 661 070 984</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-center foot_text">© Design by:
          <a href="https://mdbootstrap.com/">
            <strong>Sakura</strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right foot_text">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->

	<script type="text/javascript" src="{{asset('frontend/bootstrap/js/jquery.min.js')}}">
	</script>
	<script type="text/javascript" src="{{asset('frontend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>	
  	{{-- <script type="text/javascript" src="js/seat.js"></script> --}}
  <scipt rel="stylesheet" type="text/css" href="{{asset('frontend/fontawesome/js/all.min.js')}}"></scipt>
  <script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
  @yield('script')	

</body>
</html>