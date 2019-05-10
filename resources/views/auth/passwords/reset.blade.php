@extends('layouts.mainlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('content')
    <div class="signin-wrapper">
        <div class="signin-box">
            <h2 class="slim-logo"><a href="{{url('db')}}">MedCare<span>.</span></a></h2>
            {{--<h2 class="signin-title-primary">Welcome back!</h2>--}}
            {{--<h3 class="signin-title-secondary">Sign in to continue.</h3>--}}

            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group">
                    <label for="email" class="form-control-label">{{ __('UserName') }} <span class="tx-danger">*</span></label>
                    <input class="form-control @error('email') is-invalid @enderror" type="email" id="password-confirm"
                           name="password_confirmation" value="{{ old('email') }}" required autocomplete="email" autofocus
                           placeholder="Enter Username">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div><!-- form-group -->


                <div class="form-group mg-b-50">
                    <label for="password" class="form-control-label">{{ __('Password') }} <span
                                class="tx-danger">*</span></label>
                    <input class="form-control @error('password') is-invalid @enderror" type="password" id="password"
                           name="password" value="{{ old('password') }}" required autocomplete="password" autofocus
                           placeholder="Enter Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><!-- form-group -->

                <button class="btn btn-primary btn-block btn-signin">{{ __('Sign In') }}</button>
                @if (Route::has('password.request'))
                    <a class="btn-link mg-b-0" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </form>
        </div><!-- signin-box -->

    </div><!-- signin-wrapper -->
@endsection
