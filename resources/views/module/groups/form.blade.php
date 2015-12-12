@extends('admin')

@section('style')
	<link href="{!! asset('plugins/tag-it/jquery.tagit.css') !!} "rel="stylesheet" type="text/css"/>
	<link href="{!! asset('plugins/tag-it/tagit.ui-zendesk.css') !!} "rel="stylesheet" type="text/css"/>
	<link href="{!! asset('plugins/sweet-alert/sweet-alert.css') !!} "rel="stylesheet" type="text/css"/>
@stop

@section('content')
<section class="content">
<div class="row">
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-primary ">
			<div class="box-header">
				<div class="row">
					<div class="col-xs-6">
						<h3 class="box-title">{!! str_contains(Request::segment(2), 'create') ? 'Tambah' : 'Ubah' !!} {!! $title !!}</h3>
					</div>
					<div class="col-xs-6">
						<div class="pull-right">
							<a href="{!! URL::to(GLobalHelpers::indexUrl())!!}" class="btn btn-default">
								<i class="fa fa-arrow-left"></i> Back
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="box-body">
				@if(Session::has('message'))
				{!! GLobalHelpers::messages(Session::get('message')) !!}
				@endif

				{{-- Form --}}
				{!! form_start($form) !!}

				{!! form_rest($form) !!}
			</div>
					<div class="clearfix"></div>
					@include('includes.form_button')
				{!! form_end($form) !!}

				{{-- End Form --}}
		</div>

	</div>
</div>
</section>
@stop

@section('script')
	<script src="{!! asset('plugins/tag-it/tag-it.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('plugins/sweet-alert/sweet-alert.js') !!} " type="text/javascript"></script>
	<script src="{!! asset('js/alert.js') !!} " type="text/javascript"></script>
@stop
