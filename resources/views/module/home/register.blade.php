@extends('main')

@section('style')

@stop
@section('content')
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical">
						<div class="module-head">
							<h3>Halaman Pendaftaran</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="inputEmail" placeholder="Username">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="inputPassword" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Daftar</button>
									<button type="submit" class="btn btn-primary pull-left">Cancel</button>
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
