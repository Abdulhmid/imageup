@extends('home')

@section('style')
	<link rel="stylesheet" href="{!! url('plugins/bootstrap/css') !!}/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="{!! url('css/additional_index.css') !!}">

    <style type="text/css">


    </style>
@stop

@section('content')
<div class="content" style="padding-left:18px;padding-right:18px;">
	<div class="row">
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item second" style="height:173px;">
            <div class="portfolio-single">
		    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				<div class="portfolio-view">
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>
                <div class="portfolio-info ">
		    		<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
                </div>
            </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item first" style="height:173px; padding: 0px;">
            <div class="portfolio-single hover ehover4">
				<img class="img-responsive" src="{!! url('theme/ungkap') !!}/img/member2.jpg" width="224px" style="margin:0 auto;max-height:173px;" alt="member-2">
				<div class="portfolio-view" >
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>	
				<div class="overlay overlay-add">
	    			<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
				</div>
		    </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item second" style="height:173px;">
            <div class="portfolio-single">
		    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				<div class="portfolio-view">
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>
                <div class="portfolio-info ">
		    		<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
                </div>
            </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item si" style="height:173px;">
            <div class="portfolio-single">
		    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				<div class="portfolio-view">
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>
                <div class="portfolio-info ">
		    		<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
                </div>
            </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item su" style="height:173px;">
            <div class="portfolio-single">
		    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				<div class="portfolio-view">
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>
                <div class="portfolio-info ">
		    		<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
                </div>
            </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item first" style="height:173px; padding: 0px; <!-- margin-bottom: 47px; -->">
            <div class="portfolio-single hover ehover4">
				<img class="img-responsive" src="{!! url('theme/ungkap') !!}/img/member2.jpg" width="224px" style="margin:0 auto;max-height:173px;" alt="member-2">
				<div class="portfolio-view" >
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>	
                <center>
				<div class="overlay overlay-add">
	    			<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
				</div>
				</center>
		    </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item se" style="height:173px;">
            <div class="portfolio-single">
		    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				<div class="portfolio-view">
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>
                <div class="portfolio-info ">
		    		<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
                </div>
            </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item second" style="height:173px;">
            <div class="portfolio-single">
		    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				<div class="portfolio-view">
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>
                <div class="portfolio-info ">
		    		<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
                </div>
            </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item sd" style="height:173px;">
            <div class="portfolio-single">
		    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				<div class="portfolio-view">
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>
                <div class="portfolio-info ">
		    		<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
                </div>
            </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item sa" style="height:173px; padding: 0px; <!-- margin-bottom: 47px; -->">
            <div class="portfolio-single hover ehover4">
				<img class="img-responsive" src="{!! url('theme/ungkap') !!}/img/member2.jpg" width="224px" style="margin:0 auto;max-height:173px;" alt="member-2">
				<div class="portfolio-view" >
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>	
                <center>
				<div class="overlay overlay-add">
	    			<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
				</div>
				</center>
		    </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item si" style="height:173px; padding: 0px; <!-- margin-bottom: 47px; -->">
            <div class="portfolio-single hover ehover4">
				<img class="img-responsive" src="{!! url('theme/ungkap') !!}/img/member2.jpg" width="224px" style="margin:0 auto;max-height:173px;" alt="member-2">
				<div class="portfolio-view" >
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>	
                <center>
				<div class="overlay overlay-add">
	    			<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
				</div>
				</center>
		    </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item su" style="height:173px; padding: 0px; <!-- margin-bottom: 47px; -->">
            <div class="portfolio-single hover ehover4">
				<img class="img-responsive" src="{!! url('theme/ungkap') !!}/img/member2.jpg" width="224px" style="margin:0 auto;max-height:173px;" alt="member-2">
				<div class="portfolio-view" >
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>	
                <center>
				<div class="overlay overlay-add">
	    			<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
				</div>
				</center>
		    </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item second" style="height:173px;">
            <div class="portfolio-single">
		    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				<div class="portfolio-view">
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>
                <div class="portfolio-info ">
		    		<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
                </div>
            </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item se" style="height:173px;">
            <div class="portfolio-single">
		    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				<div class="portfolio-view">
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>
                <div class="portfolio-info ">
		    		<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
                </div>
            </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item first" style="height:173px; padding: 0px; <!-- margin-bottom: 47px; -->">
            <div class="portfolio-single hover ehover4">
				<img class="img-responsive" src="{!! url('theme/ungkap') !!}/img/member2.jpg" width="224px" style="margin:0 auto;max-height:173px;" alt="member-2">
				<div class="portfolio-view" >
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>	
                <center>
				<div class="overlay overlay-add">
	    			<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
				</div>
				</center>
		    </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item second" style="height:173px;">
            <div class="portfolio-single">
		    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				<div class="portfolio-view">
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>
                <div class="portfolio-info ">
		    		<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
                </div>
            </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item sp" style="height:173px;">
            <div class="portfolio-single">
		    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				<div class="portfolio-view">
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>
                <div class="portfolio-info ">
		    		<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
                </div>
            </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item first" style="height:173px; padding: 0px; <!-- margin-bottom: 47px; -->">
            <div class="portfolio-single hover ehover4">
				<img class="img-responsive" src="{!! url('theme/ungkap') !!}/img/member2.jpg" width="224px" style="margin:0 auto;max-height:173px;" alt="member-2">
				<div class="portfolio-view" >
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>	
                <center>
				<div class="overlay overlay-add">
	    			<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
				</div>
				</center>
		    </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item second" style="height:173px;">
            <div class="portfolio-single">
		    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				<div class="portfolio-view">
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>
                <div class="portfolio-info ">
		    		<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
                </div>
            </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item first" style="height:173px; padding: 0px; <!-- margin-bottom: 47px; -->">
            <div class="portfolio-single hover ehover4">
				<img class="img-responsive" src="{!! url('theme/ungkap') !!}/img/member2.jpg" width="224px" style="margin:0 auto;max-height:173px;" alt="member-2">
				<div class="portfolio-view" >
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>	
                <center>
				<div class="overlay overlay-add">
	    			<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
				</div>
				</center>
		    </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item second" style="height:173px;">
            <div class="portfolio-single">
		    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				<div class="portfolio-view">
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>
                <div class="portfolio-info ">
		    		<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
                </div>
            </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item si" style="height:173px;">
            <div class="portfolio-single">
		    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				<div class="portfolio-view">
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>
                <div class="portfolio-info ">
		    		<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
                </div>
            </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item su" style="height:173px;">
            <div class="portfolio-single">
		    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				<div class="portfolio-view">
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>
                <div class="portfolio-info ">
		    		<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
                </div>
            </div>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12 mbr-gallery-item mbr-item first" style="height:173px; padding: 0px; ">
            <div class="portfolio-single hover ehover4">
				<img class="img-responsive" src="{!! url('theme/ungkap') !!}/img/member2.jpg" width="224px" style="margin:0 auto;max-height:173px;" alt="member-2">
				<div class="portfolio-view" >
                    <ul class="nav nav-pills">
                        <li><a data-toggle="modal" data-target="#ungkapinDetail" ><i class="fa fa-link"></i></a></li>
                    </ul><br/><br/>
                    <ul class="nav nav-pills">
                    	<li><a  data-lightbox="example-set">Naik</a></li>
                    	<li><a  data-lightbox="example-set">Hapus</a></li>
                    </ul>
                </div>	
                <center>
				<div class="overlay overlay-add">
	    			<span><i class="fa fa-comment"> 8989</i></span>
		    		<span><i class="fa fa-eye"></i> 9090</span>
				</div>
				</center>
		    </div>
		</div>

	</div>
</div> 

<!-- Show Choose -->
<div class="modal fade" id="ungkapinChoose" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content modal-transparancy">
                <div class="modal-body">
                	<div class="row">
                		<div class="col-md-12" style="text-align:center;padding-bottom: 24px;">
                		</div><br/>
                		<div class="col-md-5" style="text-align:center">
                			<div class="form-group" style="text-align:center">
								<button type="button" data-toggle="modal" data-target="#ungkapinImage" class="btn btn-warning btn-circle btn-xl">Gambar</button>
                			</div>
                		</div>
                		<div class="col-md-2">
                			<<hr/>
                		</div>
                		<div class="col-md-5" style="text-align:center">
                			<div class="form-group" style="text-align:center">	
								<button type="button" data-toggle="modal" data-target="#ungkapinTulisan"  class="btn btn-warning btn-circle btn-xl">Tulisan</button>
                			</div>
                		</div>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Ungkapin -->
<div class="modal fade" id="ungkapinImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content" style="width:956px;height : 323px">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

                    </button>
                     <h4 class="modal-title" id="myModalLabel">Ungkap.In Disini</h4>

                </div>
                <div class="modal-body">
                	<div class="row">
                		<div class="col-md-4">
                			<div class="form-group">
                				<label>Gambar</label>
                				<p>Pilih Gambar Yang Kamu Ungkapin</p><br/>
                				<input type="file" class="form-control" value="" style="display:none">
                				<button class="form-control btn btn-default btn-ungkap-upload" type="button" onclick="chooseFile()"><i class="fa fa-upload"></i> Pilih Gambar</button>
                			</div>
                		</div>
                		<div class="col-md-4">
                			<div class="form-group">
                				<label>Hastag</label>
                				<p>Berikan hastag yang sesuai. <br/> Maksimal 10 hastag</p>
                				<textarea class="form-control" name="hastag" cols="33" rows="3"  placeholder="#positif#negatif#cinta#agama#sehat#lifestyle"></textarea>
                			</div>
                		</div>
                		<div class="col-md-4">
                			<div class="form-group">
                				<label>Link</label>
                				<p>Masukkan link sebagai bukti penguat. <br/> Kamu boleh tidak memberikan link.</p>
                				<textarea class="form-control" name="link" cols="33" rows="3" placeholder="Ketik atau paste link disini"></textarea>
                			</div>
                		</div>
                	</div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-toggle="modal" data-target="#ungkapinSucces" class="btn btn-default btn-ungkap-success" data-dismiss="modal">Ayo Ungkapin !</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ungkapin Tulisan -->

<div class="modal fade" id="ungkapinTulisan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content" style="width:956px;height : 323px">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

                    </button>
                     <h4 class="modal-title" id="myModalLabel">Ungkap.In Disini</h4>

                </div>
                <div class="modal-body">
                	<div class="row">
                		<div class="col-md-4">
                			<div class="form-group">
                				<label>Tulisan</label>
                				<p>Masukkan tulisanmu dengan maksimal. <br/> 160 karakter.</p>
                				<textarea class="form-control" name="hastag" cols="33" rows="3"  placeholder="#positif#negatif#cinta#agama#sehat#lifestyle"></textarea>
                			</div>
                		</div>
                		<div class="col-md-4">
                			<div class="form-group">
                				<label>Hastag</label>
                				<p>Berikan hastag yang sesuai. <br/> Maksimal 10 hastag</p>
                				<textarea class="form-control" name="hastag" cols="33" rows="3"  placeholder="#positif#negatif#cinta#agama#sehat#lifestyle"></textarea>
                			</div>
                		</div>
                		<div class="col-md-4">
                			<div class="form-group">
                				<label>Link</label>
                				<p>Masukkan link sebagai bukti penguat. <br/> Kamu boleh tidak memberikan link.</p>
                				<textarea class="form-control" name="link" cols="33" rows="3" placeholder="Ketik atau paste link disini"></textarea>
                			</div>
                		</div>
                	</div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-toggle="modal" data-target="#ungkapinSucces" class="btn btn-default btn-ungkap-success" data-dismiss="modal">Ayo Ungkapin !</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Success -->
<!-- Modal Ungkapin -->
<div class="modal fade" id="ungkapinSucces" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content" style="">
                <div class="modal-body">
                	<div class="row">
                		<div class="col-md-12" style="text-align:center;padding-bottom: 24px;">
							<h3 class="modal-title" id="myModalLabel">Berhasil</h3>
							<h5 class="modal-title" id="myModalLabel">Terimakasih sudah ungkapin isi hatimu!</h5>
                		</div><br/>
                		<div class="col-md-4">
                			<div class="form-group" style="text-align:center">
                				<button class="btn btn-default btn-ungkap">Lihat</button>
                			</div>
                		</div>
                		<div class="col-md-4">
                			<div class="form-group" style="text-align:center">
                				<button class="btn btn-default btn-ungkap">Halaman Utama</button>
                			</div>
                		</div>
                		<div class="col-md-4">
                			<div class="form-group" style="text-align:center">
                				<button class="btn btn-default btn-ungkap">Ungkapin Lagi</button>
                			</div>
                		</div>
                	</div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail -->
<div class="modal fade" id="ungkapinDetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content" style="width:956px;height : 523px">
                <div class="modal-body">
                	<div class="row">
                		<div class="col-md-8" style="">
                			<img src="{!! url('theme/ungkap') !!}/img/member2.jpg" style="width: 505px;">
                		</div><br/>
                		<div class="col-md-4">
							<div class="detailBox">
							    <div class="titleBox">
							      <label>Comment Box</label>
							        <button type="button" class="close" aria-hidden="true">&times;</button>
							    </div>
							    <div class="commentBox">
							        <p class="taskDescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							        <span><i class="fa fa-comment"> 8989</i></span>
							        <span><i class="fa fa-eye"> 8989</i></span>
							        <span><i class="fa fa-calendar"> 11 Nov 2015</i></span>

							        <span style="margin-left:12px"><i class="fa fa-facebook-square">Share</i></span>
							        <span><i class="fa fa-twitter-square">Tweet</i></span>
							    </div>
							    <div class="actionBox">
							        <ul class="commentList">
							            <li>
							                <div class="commenterImage">
							                  <img src="http://lorempixel.com/50/50/people/6" />
							                </div>
							                <div class="commentText">
							                    <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>

							                </div>
							            </li>
							            <li>
							                <div class="commenterImage">
							                  <img src="http://lorempixel.com/50/50/people/7" />
							                </div>
							                <div class="commentText">
							                    <p class="">Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p> <span class="date sub-text">on March 5th, 2014</span>

							                </div>
							            </li>
							            <li>
							                <div class="commenterImage">
							                  <img src="http://lorempixel.com/50/50/people/9" />
							                </div>
							                <div class="commentText">
							                    <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
							                    <img src="{!! url('theme/ungkap') !!}/img/member2.jpg" >
							                </div>
							            </li>
							        </ul>
							        <form class="form-inline" role="form">
							            <div class="form-group">
							                <input class="form-control" type="text" placeholder="Your comments" />
							            </div>
							            <div class="form-group">
							                <button class="btn btn-default">Add</button>
							            </div>
							        </form>
							        <div class="row"><br/>
							        	<div style="border-top:1px solid black;"><br/>
								        	<div class="col-md-6" style="text-align:center;"><button class="btn btn-default">Naik</button></div>
								        	<div class="col-md-6" style="text-align:center;"><button class="btn btn-default">Hapus</button></div>
							        	</div>
							        </div>
							    </div>
							</div>
                		</div>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Login -->
<div class="modal fade" id="ungkapinLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content" style="width:453px;heigth:545px;">
                <div class="modal-body">
                	<div class="row">
                		<div class="col-md-12" style="text-align:center;padding-bottom: 24px;">
							<h3 class="modal-title" id="myModalLabel">Admin Login</h3>
							<h5 class="modal-title" id="myModalLabel">Halaman Ini khusus untuk Admin Sistem.</h5>
                		</div><br/>
                		<div class="col-md-12">
                			<div class="form-group" style="text-align:center">
                				<input type="text" name="username" class="form-control" value="" placeholder="Username">
                			</div>
                		</div>
                		<div class="col-md-12">
                  			<div class="form-group" style="text-align:center">
                				<input type="text" name="password" class="form-control" value="" placeholder="Password">
                			</div>
                		</div>
                		<div class="col-md-12">
                			<div class="form-group" style="text-align:center">
                				<button class="btn btn-warning">Halaman Utama</button>
                			</div>
                		</div>
                	</div>
                </div>
                <div class="modal-footer">
                	<p class="pull-left">Ungkapin 2015</p>
                	<p class="pull-right">Kontak Kami</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Demo -->
@stop

@section('script')
    <script type="text/javascript">
    $(document).ready(function(){
        $('#ungkapinTulisan').on('shown.bs.modal', function () {
           $('#').modal('hide');
        });
    });
    </script>
@stop
