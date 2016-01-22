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
	<link rel="stylesheet" type="text/css" href="{!! url('css/additional_global.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! url('css/pnotify.custom.min.css') !!}">
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    @yield('style')
    <style type="text/css">

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
	<script src="{!! url('theme/ungkap') !!}/js/modernizr.js"></script>
	<!-- Notif -->
    <script type="text/javascript" src="{!! url('plugins/notifications/pnotify.min.js') !!}"></script>
    <script type="text/javascript" src="{!! url('plugins/components_notifications_pnotify.js') !!}"></script>
    <script type="text/javascript" src="{!! url('js/custom_alert.js') !!}"></script>
    <script type="text/javascript" src="{!! url('js/pnotify.custom.min.js') !!}"></script>

    <script type="text/javascript" src="{!! url('plugins/jQuery/jQuery-2.1.3.min.js') !!}"></script>

	@yield('script')
    <script type="text/javascript">
        $(document).ready(function(){
            @if(Session::has('error'))
                notif_error("{!! Session::get('error') !!}");
            @endif
            @if(Session::has('message'))
                notif_success("{!! Session::get('message') !!}");
            @endif
            @if(Session::has('info'))
                notif_info("{!! Session::get('info') !!}");
            @endif
            @if(Session::has('warning'))
                notif_warning("{!! Session::get('warning') !!}");
            @endif
        });
    </script>
</body>
</html>