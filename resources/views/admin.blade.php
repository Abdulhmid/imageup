<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> {!! isset($title) ? $title : "Pusat Parkir" !!} | Pusat Parkir</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="icon"  href="{!! asset('photo/logo-square.png') !!}"/>
	<!-- Bootstrap 3.3.2 -->
	<link href="{!! asset('plugins/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
	<!-- FontAwesome 4.3.0 -->
	<link href="{!! asset('plugins/icon/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css" />
	<!-- Ionicons 2.0.0 -->
	<link href="{!! asset('plugins/icon/ionicons/css/ionicons.min.css') !!}" rel="stylesheet" type="text/css" />
	<!-- Theme style -->
	<link href="{!! asset('plugins/css/AdminLTE/AdminLTE.min.css') !!}" rel="stylesheet" type="text/css" />
	<link href="{!! asset('plugins/css/additional.css') !!}" rel="stylesheet" type="text/css" />
	    <!-- AdminLTE Skins. Choose a skin from the css/skins
	    folder instead of downloading all of them to reduce the load. -->
	    <link href="{!! asset('plugins/css/AdminLTE/skins/_all-skins.min.css') !!}" rel="stylesheet" type="text/css" />

	    @yield('style')

	</head>
	<body class="fixed sidebar-collapse skin-red">
		<div class="wrapper">

			@include('includes.header')
			<!-- Left side column. contains the logo and sidebar -->
			@include('includes.sidebar')
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper" style="min-height:648px">
				<section class="content-header">
					<h1>
						{!! $title !!}
					</h1>
					<ol class="breadcrumb">
						<li>
							<a href="{!! URL::to('/dashboard')!!}">
							<i class="fa fa-dashboard"></i> <b>Home</b>
							</a>
						</li>
						{!! GLobalHelpers::breadcrumb() !!}
					</ol>
				</section>

					@yield('content')

			</div>
			{{-- <footer class="main-footer">
				<div class="pull-right hidden-xs">
					<b>Version</b> 2.0
				</div>
				<strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
			</footer> --}}
		</div><!-- ./wrapper -->

		@yield('modal')

		<!-- jQuery 2.1.3 -->
		<script src="{!! asset('plugins/jQuery/jQuery-2.1.3.min.js') !!}" type="text/javascript"></script>
		<!-- jQuery UI 1.11.2 -->
		  <script src="{!! asset('plugins/jQueryUI/jquery-ui.min.js') !!}" type="text/javascript"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
			$.widget.bridge('uibutton', $.ui.button);
		</script>
		<!-- Bootstrap 3.3.2 JS -->
		<script src="{!! asset('plugins/bootstrap/js/bootstrap.min.js') !!} " type="text/javascript"></script>
		<!-- AdminLTE App -->
	       	<script src="{!! asset('js/app.min.js') !!}" type="text/javascript"></script>

		@yield('script')
		<script type="text/javascript">
			$('.autohide').delay(5000).fadeOut('slow');
		</script>


	</body>
	</html>
