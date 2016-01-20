@extends('home')

@section('style')
	<!-- <link rel="stylesheet" type="text/css" href="https://mobirise.com/bootstrap-gallery/assets/mobirise/css/style.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="https://mobirise.com/bootstrap-gallery/assets/mobirise-gallery/style.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="https://mobirise.com/bootstrap-gallery/assets/mobirise-slider/style.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="https://mobirise.com/bootstrap-gallery/assets/mobirise/css/mbr-additional.css"> -->
	<link rel="stylesheet" href="{!! url('plugins/bootstrap/css') !!}/bootstrap.css">

    <style type="text/css">
    	.mbr-gallery-item{
    	}
		.mbr-item {
		    height: 70px;
		    text-align: center;
		    padding-top: 25px;
		}

		.first {
		    background-color: #FFFDC7;
		}
		.second {
		    background-color: #CFDACE;
		}
		.sa {
		    background-color: #CFDACE;
		}
		.si {
		    background-color: #CFDACE;
		}
		.su {
		    background-color: #CFDACE;
		}
		.se {
		    background-color: #CFDACE;
		}
		.sp {
		    background-color: #CFDACE;
		}
		.col-md-2 {
		    border-radius: 0 0px 0px 0;
		}
		.border{
		    border-radius: 11px 11px 11px 11px;
		    margin-top: 12px;
		    border: 1px solid #9C8C8C;
		    background-color: rgb(255, 255, 255);
		}
		.row > div.mbr-item {
		    outline:1px solid rgba(16, 15, 15, 0.16);;
		    outline-offset: -0px;
		    -moz-outline-radius: 0px;
		    -webkit-outline-radius: 0px;
		 }
		.content {
			font-size: 12px;
			font-family: 'Times New Roman', Arial, sans-serif;
		}
		a { text-decoration : none; color : #000; }
		.portfolio-view {
		    display: none;
		    position: absolute;
		    top: 0;
		    height: 100%;
		    background: rgba(112, 35, 64, 0.9);
		    width: 100%;
		    text-align: center;
		}
		.portfolio-view .nav-pills {
		  padding: 0;
		  display: inline-block;
		  margin-top: -26px;
		  top: 50%;
		  position: relative;
		}

		.portfolio-view .nav-pills li {
		  display: inline-block;
		  margin: 0 5px;
		}

		.portfolio-view .nav-pills li a {
		  color: #fff;
		  border: 1px solid #fff;
		  width: 40px;
		  height: 40px;
		  line-height: 38px;
		  text-align: center;
		  padding: 0;
		  border-radius: 40px;
		  -webkit-animation: scaleIn 400ms linear 100ms both;
		  animation: scaleIn 400ms linear 100ms both;
		  -webkit-transition: all 0.9s ease;
		  transition: all 0.9s ease;
		}

		.portfolio-view .nav-pills li a:hover {
		  color: #702340;
		  border-color: #702340;
		  -webkit-transition: all 0.9s ease;
		  transition: all 0.9s ease;
		}
		.portfolio-single{
			position: relative;
		}
		.portfolio-single:hover .portfolio-view {
		    display: block;
		    -webkit-animation: fadeInUp 400ms;
		    animation: fadeInUp 400ms;
		}


/*		.portfolio-single:hover .portfolio-view {
		    display: block;
		    -webkit-animation: fadeInUp 400ms;
		    animation: fadeInUp 400ms;
		}*/

		.portfolio-info {
		  overflow: hidden;
		  margin-bottom: 37px;
		  border-radius: 11px 11px 11px 11px;
		  border: 1px solid #9C8C8C;
		  background-color: rgb(255, 255, 255);
		}

		.portfolio-info h2 {
		  font-size: 18px;
		  margin: 7px 0 0;
		}

		/* News */
		.ehover4 .overlay {
		    /*background-color: rgba(75,75,75,.7);*/
		    width: 23px;
		    transition: all .4s ease-in-out;
		}
		.ehover4 .overlay, .ehover4 h2 {
		    -webkit-transition: all .4s ease-in-out;
		}
		.hover .overlay {
			position: absolute;
		    top: 127px;
		    padding-left: -3px;
		    border: 1px solid #9C8C8C;
		    background-color: rgb(255, 255, 255);
		    border-radius: 11px 11px 11px 11px;
		    height: 19px;
		}
		.hover, .hover .overlay {
		    /*width: 100%;*/
		    /*height: 100%;*/
		    width: 100%;
		    overflow: hidden;
		}
		.overlay-add{
			width: 85% !important;
			right:40%;
			left:8%;
		}

    </style>
@stop

@section('content')
<div class="content" style="padding-left:18px;padding-right:18px;">
	<div class="row">
		@for ($i = 0; $i < 18; $i++)
		    <div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item {!! $i % 2 == 0 ? 'first' : ($i == 5 ? '3s' : ($i == 8 ? '6s' : ($i == 16 ? '4s' : '5s' ) ) ) !!}" style="height:173px;{!! ($i == 2 || $i == 15 ? 'padding: 0px;' : '' ) !!} ;<!-- margin-bottom: 47px; -->">
		    	@if($i == 2 || $i == 15)
                    <div class="portfolio-single hover ehover4">
						<img class="img-responsive" src="{!! url('theme/ungkap') !!}/img/member2.jpg" width="224px" style="margin:0 auto;max-height:173px;" alt="member-2">
						<div class="portfolio-view" >
	                        <ul class="nav nav-pills">
	                            <li><a href="http://localhost:9988/me-detail-campaign"><i class="fa fa-link"></i></a></li>
	                            <li><a href="images/portfolio/1.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
	                        </ul>
	                    </div>	
	                    <center>
						<div class="overlay overlay-add">
			    			<span><i class="fa fa-comment"> 8989</i></span>
				    		<span><i class="fa fa-eye"></i> 9090</span>
						</div>
						</center>
				    </div>
		    	@else
                    <div class="portfolio-single">
				    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						<div class="portfolio-view">
	                        <ul class="nav nav-pills">
	                            <li><a href="http://localhost:9988/me-detail-campaign"><i class="fa fa-link"></i></a></li>
	                            <li><a href="images/portfolio/1.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
	                        </ul>
	                    </div>
		                <div class="portfolio-info ">
				    		<span><i class="fa fa-comment"> 8989</i></span>
				    		<span><i class="fa fa-eye"></i> 9090</span>
		                </div>
                    </div>
		    	@endif
		    </div>
	    @endfor
	</div>
</div> 
@stop

@section('script')

@stop
