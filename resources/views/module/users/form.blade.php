@extends('admin')

@section('style')
<link href="{!! asset('plugins/datepicker/datepicker3.css') !!} "rel="stylesheet" type="text/css"/>
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
						<h3 class="box-title">{!! ucfirst(GLobalHelpers::actionUrl()) !!} {!! $title !!}</h3>
					</div>
					<div class="col-xs-6">
						<div class="pull-right">
							<a href="{!! url(GLobalHelpers::indexUrl()) !!}" class="btn btn-default">
								<i class="fa fa-arrow-left"></i> Kembali
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
				@include('includes.form_button')

				{!! form_end($form) !!}

				{{-- End Form --}}
		</div>

	</div>
</div>
</section>
@stop

@section('script')
<script type="text/javascript" src="{!! asset('plugins/datepicker/bootstrap-datepicker.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/datepicker-format.js') !!}"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.datepicker').datepicker({
			orientation : 'top auto',
			format: "dd MM yyyy",
			startDate : "01-01-2015"
		});
		format();
	});

</script>
@stop
