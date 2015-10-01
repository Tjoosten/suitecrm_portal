@extends('welcome')

@section('content')
<div class="container">
<div class='loginColumns block block-size-login highlight-color-purple'>
<div class='block-content-outer'>
<div class='block-content-inner'>
 <div class="row">
      <div class="col-md-12">
       <img src="{{ url('img/logo.png') }}" class="logo-name">
         <div class="clearfix">&nbsp;</div>
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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label for="name" class="col-md-5 control-label">Name</label>
							<div class="col-md-7">
								<input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="col-md-5 control-label">E-Mail Address</label>
							<div class="col-md-7">
								<input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="col-md-5 control-label">Password</label>
							<div class="col-md-7">
								<input type="password" class="form-control" id="password" name="password">
							</div>
						</div>

						<div class="form-group">
							<label for="confirm_pass" class="col-md-5 control-label">Confirm Password</label>
							<div class="col-md-7">
								<input type="password" class="form-control" id="confirm_pass" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-custom">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
