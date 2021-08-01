<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset('boot/css.css') }}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
    <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>
	<title>ADMIN DASHBORD</title>
</head>
<body>
	<div class="container">
		<div><a href="{{ url("/") }}">Visit Site</a></div>
		<div class="row" style="color:black;">
			<!-- navigator start-->
			<div class="col-md-3 col-sm-12 bg-primary">

				<a href="{{ url('/admin/dashbord') }}"><div class=" btn w-100 text-center mt-2 @if(Request::path() == 'admin/dashbord') bg-success @else btn-primary @endif">
					Dashbord
				</div></a>
				<hr>
				<a href="{{ url('/admin/categorie') }}"><div class="btn w-100 text-center @if(Request::path() == 'admin/categorie' || Request::path() ==  'admin/categorie/main-categorie' || Request::path() ==  'admin/categorie/sub-categorie') bg-success @else btn-primary @endif">
					Categorie
				</div></a>
				<hr>
				<a href="{{ url('/admin/product') }}"><div class="btn w-100 text-center @if(Request::path() == 'admin/product' ) bg-success @else btn-primary @endif">
					Product
				</div></a>
				<hr>
				<a href="{{ url('/admin/order') }}"><div class="btn w-100 text-center @if(Request::path() == 'admin/order' ) bg-success @else btn-primary @endif">
					Order
				</div></a>
				<hr>
				<a href="{{ url('/admin/offer') }}"><div class="btn w-100 text-center @if(Request::path() == 'admin/offer') bg-success @else btn-primary @endif">
					Add Offer
				</div></a>
				<hr>
				<div class=" text-center">
					<form action="{{ route('logout') }}" method="post">
						@csrf
						<input class="btn btn-primary w-100" type="submit" value="Logout" name="">
					</form>
				</div>
				<hr>
			</div>
			<div style="background-image: url({{ asset('bg.jpg') }});background-size: cover;"  class=" ms-3 col-md-9 col-sm-12 ">

				<h1 class="text-center">Wellcome</h1>
				<h4 class="text-center">{{ Auth::user()->name }}</h4>
@yield('content')

			</div>
		</div>
		<div class="w-100  text-center">Marazzo &#169; 2021</div>
	</div>
	<!-- body stop -->
<script src="{{ asset('boot/js.js') }}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>




<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
@if(Session::has('icon'))
Swal.fire({
	position: 'top-end',
 	title: '{{ Session::get('title') }}',
 	text: '{{ Session::get('data') }}',
 	icon: '{{ Session::get('icon') }}',
 	showConfirmButton: false,
 	timer: 3500,
 	timerProgressBar: true
 	});
@endif

			


</script>
</body>
</html>