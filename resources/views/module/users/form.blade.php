@extends('admin')

@section('style')
<link href="{!! asset('plugins/datepicker/datepicker3.css') !!} "rel="stylesheet" type="text/css"/>
<link href="{!! asset('plugins/iCheck/all.css') !!} "rel="stylesheet" type="text/css"/>
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

					<div class="col-md-8">
                        {!! form_row($form->username, ['default_value' => isset($row) ? $row->username: '']) !!}
                        {!! form_row($form->fullname, ['default_value' => isset($row) ? $row->fullname: '']) !!}
                        {!! form_row($form->email, ['default_value' => isset($row) ? $row->email: '']) !!}
                        {!! form_row($form->password,['default_value' => '']) !!}
                        {!! form_row($form->password_confirmation) !!}
                        {!! form_row($form->active) !!}
					</div>
					<div class="col-md-4">
						{!! form_label($form->photo) !!}
						{!! form_widget($form->photo, ['attr' => ['style' => 'display:none']]) !!}
						<div class="text-danger">{!! $errors->first('photo') !!}</div>

						{!! form_row($form->upload) !!}
						<br>
						<p class="text-center">
							<img id="preview_img" class="img img-thumbnail" style="margin-top: 25px; max-height:200px" src="{{ isset($row) && !empty($row->photo) ? asset(GLobalHelpers::checkImage($row->photo)) : '' }}"  />
						</p>
					</div>

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
<script type="text/javascript" src="{!! asset('plugins/iCheck/icheck.min.js') !!}"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('input[type="radio"]').iCheck({
			checkboxClass: 'icheckbox_square-green',
			radioClass: 'iradio_square-green'
		});
		$("#password").val("");
		@if(GLobalHelpers::actionUrl() == "edit")
			@if(isset($row) && $row->active == 1)
				$("#active_1").iCheck('check');
			@else
				$("#active_2").iCheck('check');
			@endif
		@endif
	});

	function readUrl(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#preview_img').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	function chooseFile()
	{
		$('#file').click();
	}
</script>
@stop
