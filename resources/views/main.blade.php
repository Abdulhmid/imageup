<!DOCTYPE html>
<html lang="en">
<head>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
	<link type="text/css" href="{{ url('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link type="text/css" href="{{ url('bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
	<link type="text/css" href="{{ url('css/theme.css') }}" rel="stylesheet">
	<link type="text/css" href="{{ url('images/icons/css/font-awesome.css') }}" rel="stylesheet">
	<!-- <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'> -->
	@yield('style')
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="{{ url('/') }}">
			  		Images || Up
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav pull-right">
						<li class="nav-user dropdown" style="display:none"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="images/user.png" class="nav-avatar" />
								<b class="caret"></b></a>
								<ul class="dropdown-menu">
										<li><a href="#">Your Profile</a></li>
										<li><a href="#">Edit Profile</a></li>
										<li><a href="#">Account Settings</a></li>
										<li class="divider"></li>
										<li><a href="#">Logout</a></li>
								</ul>
						</li>
						<li><a href="{{ url('register') }}">
							Daftar
						</a></li>

						<li><a href="{{ url('login') }}">
							Masuk
						</a></li>
					</ul>

				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
				<!-- Row Or Main Content  -->
				@yield('content')
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">


			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
		</div>
	</div>

	<script src="{{ url('scripts/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
	<script src="{{ url('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ url('scripts/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>
	@yield('script')
</body>
