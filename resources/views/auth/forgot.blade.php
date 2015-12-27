@extends('main')

@section('content')
		<div class="container">
			<div class="row">
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

		        @if(Session::has('message'))
		        {!! GLobalHelpers::messages(Session::get('message')) !!}
		        @endif
		        
				<div class="module module-login span4 offset4">
					<form class="form-vertical" action="{{ url('/forgot-password') }}" method="post" role="form" style="display: block;">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="module-head">
							<h3>Forgot Password</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="email" name="email" placeholder="Username">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Reset Password</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
@stop

@section('script')

@stop
