@extends('layouts.app')

@section('content')
	<div class="signin-wrapper">
		<div class="signin-box">
			<div class="tx-center">
				<h2 class="slim-logo"><a href="{{url('login')}}">MedCare<span>.</span></a></h2>
				{{--<h2 class="signin-title-primary">Welcome back!</h2>--}}
				<h3 class="signin-title-secondary mg-b-0">{{ __('Verify Your Email Address') }}</h3>

				<div class="card-body">
					@if (session('resent'))
						<div class="alert alert-success" id="flashMessage" role="alert">
							{{ __('A fresh verification link has been sent to your email address.') }}
						</div>
					@endif

					{{ __('Before proceeding, please check your email for a verification link.') }}
					{{ __('If you did not receive the email') }}, <a
							href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
				</div>
			</div>
		</div><!-- signin-wrapper -->
@endsection
