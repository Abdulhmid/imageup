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
		    background-color: #e3e3e3;
		}
		.second {
		    background-color: #D286B7;
		}
		.col-md-2 {
		    border-radius: 0 0px 0px 0;
		}
		.border{
		    border-radius: 5px 5px 5px 5px;
		    margin-top: 12px;
		    background-color: rgba(241, 251, 235, 0.72);
		}
		.row > div.mbr-item {
		    outline:1px solid rgba(16, 15, 15, 0.16);;
		    outline-offset: -0px;
		    -moz-outline-radius: 0px;
		    -webkit-outline-radius: 0px;
		 }
    </style>
@stop

@section('content')
<div class="" style="padding-left:18px;padding-right:18px;">
	<div class="row">
		@for ($i = 0; $i < 20; $i++)
		    <div class="col-md-2 col-sm-6 col-xs-12 mbr-item {!! $i % 2 == 0 ? 'first' : 'second' !!}" style="height:173px;{!! ($i == 2 ? 'padding: 0px;' : '' ) !!}">
		    	@if($i == 2)
					<img class="img-responsive" src="{!! url('theme/ungkap') !!}/img/member2.jpg" width="224px" style="margin:0 auto;" height="173px" alt="member-2">
					<!-- <div class="border" >
			    		<span><i class="fa fa-comment"></i></span>
			    		<span><i class="fa fa-users"></i></span>
			    	</div> -->
		    	@else
			    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			    	<div class="border">
			    		<span><i class="fa fa-comment"> 8989</i></span>
			    		<span><i class="fa fa-eye"></i> 9090</span>
			    	</div>
		    	@endif
		    </div>
	    @endfor
	</div>
</div>
@stop

@section('script')

@stop
