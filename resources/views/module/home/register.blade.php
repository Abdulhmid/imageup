@extends('main')

@section('style')

@stop
@section('content')
		<div class="container">
			<div class="row">

				<div class="span12">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Forms Pendaftaran</h3>
								<!-- <h3 class="pull-right">Back</h3> -->
								<!-- <button type="submit" class="btn btn-primary pull-right">Daftar</button> -->
							</div>
							<div class="module-body">
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
									<br />
									<form class="form-horizontal row-fluid" action="{{ url('/register') }}" method="post" role="form" style="display: block;">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<div class="control-group">
											<label class="control-label" for="basicinput">Username</label>
											<div class="controls">
												<input type="text" id="username" name="username" placeholder="Type something here..." class="span8">
												<span class="help-inline">Minimum 5 Characters</span>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Email</label>
											<div class="controls">
												<input type="text" id="email" name="email" placeholder="You type something here..." class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Nama Lengkap</label>
											<div class="controls">
												<input data-title="A tooltip for the input" id="fullname" name="fullname" type="text" placeholder="You type something here" data-original-title="" class="span8 tip">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Jenis Kelamin</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." id="gender" name="gender" class="span8">
													<option value="female">Perempuan</option>
													<option value="male">Laki - Laki</option>
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">No Hp</label>
											<div class="controls">
														<input data-title="A tooltip for the input" id="phone" name="phone" type="text" placeholder="You type something here" data-original-title="" class="span8 tip">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Password</label>
											<div class="controls">
														<input data-title="A tooltip for the input" id="password" name="password" type="password" placeholder="You type something here" data-original-title="" class="span8 tip">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Konfirmasi Password</label>
											<div class="controls">
														<input data-title="A tooltip for the input" id="password_confirmation" name="password_confirmation" type="password" placeholder="You type something here" data-original-title="" class="span8 tip">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Alamat</label>
											<div class="controls">
												<textarea class="span8" id="address" name="address" rows="5"></textarea>
											</div>
										</div>
										<hr/>
										<div class="control-group">
											<div class="controls clearfix">
												<button type="submit" class="btn btn-primary pull-right">Daftar</button>
											</div>
										</div>
									</form>
							</div>
						</div>

					</div><!--/.content-->
				</div><!--/.span9-->

			</div>
		</div>
@stop

@section('script')

@stop
