@extends('home')

@section('style')
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
		    background-color: rgba(176, 225, 187, 0.5);
		}
		.sa {
		    background-color: #CFDACE;
		}
		.si {
		    background-color: rgba(103, 174, 195, 0.62);
		}
		.su {
		    background-color: #CFDACE;
		}
		.se {
		    background-color: #E1F8F5;
		}
		.sp {
		    background-color: rgba(244, 203, 241, 0.77);
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
		  /*top: 50%;*/
		  top: 34%;
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

		/*
		** Transpaancy Modal
		*/
		.vertical-alignment-helper {
		    display:table;
		    height: 100%;
		    width: 100%;
		    pointer-events:none; /* This makes sure that we can still click outside of the modal to close it */
		}
		.vertical-align-center {
		    /* To center vertically */
		    display: table-cell;
		    vertical-align: middle;
		    pointer-events:none;
		}
		.modal-content {
		    /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
		    width:inherit;
		    height:inherit;
		    /* To center horizontally */
		    margin: 0 auto;
		    pointer-events: all;
		}

		/* Komentar */
			@import url(//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css);

			.detailBox {
				margin-left: -113px;
				margin-top: -27px;
			    /*width:320px;*/
			    /*border:1px solid #bbb;*/
			    /*margin:50px;*/
			}
			.titleBox {
			    background-color:#fdfdfd;
			    padding:10px;
			}
			.titleBox label{
			  color:#444;
			  margin:0;
			  display:inline-block;
			}

			.commentBox {
			    padding:10px;
			    border-top:1px dotted #bbb;
			}
			.commentBox .form-group:first-child, .actionBox .form-group:first-child {
			    width:80%;
			}
			.commentBox .form-group:nth-child(2), .actionBox .form-group:nth-child(2) {
			    width:18%;
			}
			.actionBox .form-group * {
			    width:100%;
			}
			.taskDescription {
			    margin-top:10px 0;
			}
			.commentList {
			    padding:0;
			    list-style:none;
			    max-height:200px;
			    overflow:auto;
			}
			.commentList li {
			    margin:0;
			    margin-top:10px;
			}
			.commentList li > div {
			    display:table-cell;
			}
			.commenterImage {
			    width:30px;
			    margin-right:5px;
			    height:100%;
			    float:left;
			}
			.commenterImage img {
			    width:100%;
			    border-radius:50%;
			}
			.commentText p {
			    margin:0;
			}
			.sub-text {
			    color:#aaa;
			    font-family:verdana;
			    font-size:11px;
			}
			.actionBox {
			    border-top:1px dotted #bbb;
			    padding:10px;
			}

			/*
			** Circle Button
			*/
			.round-button {
				/*width:25%;*/
				width: 60%;
			}
			.round-button-circle {
			    width: 100%;
			    height: 0;
			    padding-bottom: 108%;
			    border-radius: 53%;
			    border: -8px solid #cfdcec;
			    overflow: hidden;
			    background: #4679BD;
			    box-shadow: 0 0 3px gray;
			}
			.round-button-circle:hover {
				/*background:#30588e;*/
				background:#ECAA10;
			}
			.round-button a {
				display: block;
				    float: left;
				    width: 103%;
				    height: 39px;
				    padding-top: 56%;
				    padding-bottom: 55%;
				    line-height: 1em;
				    margin-top: -0.5em;
				    text-align: center;
				    color: #e2eaf3;
				    font-family: Verdana;
				    font-size: 1.2em;
				    font-weight: bold;
				    text-decoration: none;
				    background-color: #DB9310;
			}

			.btn-circle {
			  width: 30px;
			  height: 30px;
			  text-align: center;
			  padding: 6px 0;
			  font-size: 12px;
			  line-height: 1.428571429;
			  border-radius: 15px;
			}
			.btn-circle.btn-lg {
			  width: 50px;
			  height: 50px;
			  padding: 10px 16px;
			  font-size: 18px;
			  line-height: 1.33;
			  border-radius: 25px;
			}
			.btn-circle.btn-xl {
			width: 136px;
			    height: 137px;
			    padding: 13px 16px;
			    font-size: 24px;
			    line-height: 1.33;
			    border-radius: 67px;
			}

			hr {
			    transform:rotate(90deg);
			    -o-transform:rotate(90deg);
			    -moz-transform:rotate(90deg);
			    -webkit-transform:rotate(90deg);
			    margin-top: 52px;
			    width: 120px;
			    margin-left: -24px;
			    border-top: 3px solid #eee;
			    /* margin-right: 50%; */
			}

.verticalLine {
    border-left: thick solid #ff0000;
}

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

	</div>
</div> 

<!-- Show Choose -->
<div class="modal fade" id="ungkapinChoose" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content" style="background-color:rgba(0, 0, 0, 0.45);">
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
                				<button class="form-control btn btn-default" style="border-color: #FF930E;background-color: rgba(255, 255, 255, 0.78);" type="button" onclick="chooseFile()"><i class="fa fa-upload"></i> Pilih Gambar</button>
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
                    <button type="button" data-toggle="modal" data-target="#ungkapinSucces" class="btn btn-default" style="color: rgba(231, 146, 19, 0.87);border-color: #E79B0F;" data-dismiss="modal">Ayo Ungkapin !</button>
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
                    <button type="button" data-toggle="modal" data-target="#ungkapinSucces" class="btn btn-default" style="color: rgba(231, 146, 19, 0.87);border-color: #E79B0F;" data-dismiss="modal">Ayo Ungkapin !</button>
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
                				<button class="btn btn-default" style="width:153px;color: rgba(231, 146, 19, 0.87); border-color: #E79B0F;">Lihat</button>
                			</div>
                		</div>
                		<div class="col-md-4">
                			<div class="form-group" style="text-align:center">
                				<button class="btn btn-default" style="width:153px;color: rgba(231, 146, 19, 0.87);border-color: #E79B0F;">Halaman Utama</button>
                			</div>
                		</div>
                		<div class="col-md-4">
                			<div class="form-group" style="text-align:center">
                				<button class="btn btn-default" style="width:153px;color: rgba(231, 146, 19, 0.87);border-color: #E79B0F;">Ungkapin Lagi</button>
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

@stop
