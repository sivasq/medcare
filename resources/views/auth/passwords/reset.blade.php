@extends('layouts.mainlayout')

@section('content')
	<div class="signin-wrapper">
		<div class="signin-box">
			<h2 class="slim-logo"><a href="{{url('login')}}">MedCare<span>.</span></a></h2>
			{{--<h2 class="signin-title-primary">Welcome back!</h2>--}}
			<h3 class="signin-title-secondary">{{ __('Reset Password') }}</h3>

			<form method="POST" action="{{ route('password.update') }}">
				@csrf
				<input type="hidden" name="token" value="{{ $token }}">
				<div class="form-group">
					<label for="email" class="form-control-label">{{ __('E-Mail Address') }} <span
								class="tx-danger">*</span></label>
					<input id="email" type="email"
					       class="form-control @error('email') is-invalid @enderror" name="email"
					       value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

					@error('email')
					<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
					@enderror
				</div><!-- form-group -->


				<div class="form-group">
					<label for="password" class="form-control-label">{{ __('Password') }} <span
								class="tx-danger">*</span></label>
					<input id="password" type="password"
					       class="form-control @error('password') is-invalid @enderror" name="password"
					       required autocomplete="new-password">

					@error('password')
					<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
					@enderror
				</div><!-- form-group -->

				<div class="form-group mg-b-50">
					<label for="password" class="form-control-label">{{ __('Confirm Password') }} <span
								class="tx-danger">*</span></label>
					<input id="password-confirm" type="password" class="form-control"
					       name="password_confirmation" required autocomplete="new-password">
				</div><!-- form-group -->

				<button class="btn btn-primary btn-block btn-signin">{{ __('Reset Password') }}</button>
			</form>
		</div><!-- signin-box -->

	</div><!-- signin-wrapper -->
@endsection