@extends('layouts.mainlayout')

@section('content')
	<div class="signin-wrapper">

		<div class="signin-box">
			@if (session('status'))
				<div class="alert alert-success"  id="flashMessage" role="alert">
					{{ session('status') }}
				</div>
			@endif
			<h2 class="slim-logo"><a href="{{url('login')}}">MedCare<span>.</span></a></h2>
			{{--<h2 class="signin-title-primary">Welcome back!</h2>--}}
			{{--<h3 class="signin-title-secondary">Sign in to continue.</h3>--}}

			<form method="POST" action="{{ route('password.email') }}">
				@csrf

				<div class="form-group">
					<label for="email" class="form-control-label">{{ __('Email') }} <span
								class="tx-danger">*</span></label>
					<input class="form-control @error('email') is-invalid @enderror" type="email" id="email"
					       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
					       placeholder="Enter Email">
					@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div><!-- form-group -->

				<button class="btn btn-primary btn-block btn-signin">{{ __('Send Password Reset Link') }}</button>
				@if (Route::has('login'))
					<a class="btn-link mg-b-0" href="{{ route('login') }}">
						{{ __('Go Back to Login') }}
					</a>
				@endif
			</form>
		</div><!-- signin-box -->

	</div><!-- signin-wrapper -->
@endsection