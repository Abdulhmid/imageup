<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>DOCTOR - Responsive HTML &amp; Bootstrap Template</title>
	<link rel="stylesheet" href="{!! url('theme/ungkap') !!}/css/font-awesome.min.css">
	<link rel="stylesheet" href="{!! url('theme/ungkap') !!}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{!! url('theme/ungkap') !!}/css/style_modified.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="{!! url('theme/ungkap') !!}/js/modernizr.js"></script>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    @yield('style')
    <style type="text/css">
		body {
		  max-height: 2000px;
		  padding-top: 53px;
		}
		a.btn.btn-default.active{
		    color: rgb(230, 138, 0);
		    font-weight: bold;
		}
		.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
		    border-top-right-radius: 0;
		    border-bottom-right-radius: 0;
		    background-color: rgba(255, 255, 255, 0.99);
		}
		.navbar > .container .navbar-brand, .navbar > .container-fluid .bold{
			font-weight: bold;
			color: rgb(1, 1, 1);
		}

		.img-responsive2 {
		    display: inline-block;
		    max-width: 20%;
		    height: auto;
		}
    </style>

</head>
<body>
	<div class="row">
		@include('includes.header_front')
	</div>
	<!-- Header -->
	<header id="head">
		@yield('content')
	</header>
	<!-- /Header -->
    @include('includes.footer_front')
	<!-- script tags
	============================================================= -->
	<script src="{!! url('theme/ungkap') !!}/js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="{!! url('theme/ungkap') !!}/js/gmaps.js"></script>
	<script src="{!! url('theme/ungkap') !!}/js/smoothscroll.js"></script>
	<script src="{!! url('theme/ungkap') !!}/js/bootstrap.min.js"></script>
	<script src="{!! url('theme/ungkap') !!}/js/custom.js"></script>
	@yield('script')
</body>
</html>