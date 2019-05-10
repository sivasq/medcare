@extends('layouts.mainlayout')

@section('content')
	<div class="signin-wrapper">
		<div class="signin-box">
			<h2 class="slim-logo"><a href="{{url('db')}}">MedCare<span>.</span></a></h2>
			{{--<h2 class="signin-title-primary">Welcome back!</h2>--}}
			{{--<h3 class="signin-title-secondary">Sign in to continue.</h3>--}}

			<form method="POST" action="{{ route('login') }}">
				@csrf

				<div class="form-group">
					<label for="email" class="form-control-label">{{ __('UserName') }} <span class="tx-danger">*</span></label>
					<input class="form-control @error('email') is-invalid @enderror" type="email" id="email"
					       name="email" value="{{ old('email') }}"  autocomplete="email" autofocus
					       placeholder="Enter Username">
					@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div><!-- form-group -->

				<div class="form-group">
					<label for="password" class="form-control-label">{{ __('Password') }} <span
								class="tx-danger">*</span></label>
					<input class="form-control @error('password') is-invalid @enderror" type="password" id="password"
					       name="password" value="{{ old('password') }}"  autocomplete="password" autofocus
					       placeholder="Enter Password">
					@error('password')
					<span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
					@enderror
				</div><!-- form-group -->

				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="remember"
						       id="remember" {{ old('remember') ? 'checked' : '' }}>
						<label class="form-check-label" for="remember">
							{{ __('Remember Me') }}
						</label>
					</div>
				</div>

				<button type="submit" class="btn btn-primary btn-block btn-signin">
					{{ __('Sign In') }}
				</button>
				@if (Route::has('password.request'))
					<a class="btn-link mg-b-0" href="{{ route('password.request') }}">
						{{ __('Forgot Your Password?') }}
					</a>
				@endif
			</form>
		</div><!-- signin-box -->

	</div><!-- signin-wrapper -->
@endsection