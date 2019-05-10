@extends('layouts.mainlayout')

@section('headerscripts')
	@parent
	<link href="{{asset('assets/lib/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection

@section('content')
	<div class="slim-mainpanel">
		<div class="container">
			<div class="slim-pageheader">
				<ol class="breadcrumb slim-breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">UserAccounts</a></li>
					<li class="breadcrumb-item active" aria-current="page">Create</li>
				</ol>
				<h6 class="slim-pagetitle">Create Account</h6>
			</div><!-- slim-pageheader -->

			<div class="section-wrapper">
				<label class="section-title">Create New Account</label>
				<p class="mg-b-20 mg-sm-b-40">Create New Support Executive</p>

				<div class="form-layout">
					<form method="post" action="{{ route('user.store') }}">
						@csrf
						<div class="row mg-b-25">
							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-control-label">Firstname: <span
												class="tx-danger">*</span></label>
									<input class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}"
									       type="text" name="first_name" value="John Paul"
									       placeholder="Enter firstname">
									@if ($errors->has('first_name'))
										<span class="help-block has-error">
                                        {{ $errors->first('first_name') }}
                                    </span>
									@endif
								</div>
							</div><!-- col-6 -->

							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
									<input class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}"
									       type="text" name="last_name" value="McDoe" placeholder="Enter lastname">
									@if ($errors->has('last_name'))
										<span class="help-block has-error">
                                        {{ $errors->first('last_name') }}
                                    </span>
									@endif
								</div>
							</div><!-- col-6 -->

							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-control-label">Script ID: <span
												class="tx-danger">*</span></label>
									<input class="form-control {{ $errors->has('script_id') ? ' is-invalid' : '' }}"
									       type="text" name="script_id" value="ID123456798"
									       placeholder="Enter script id">
									@if ($errors->has('script_id'))
										<span class="help-block has-error">
                                        {{ $errors->first('script_id') }}
                                    </span>
									@endif
								</div>
							</div><!-- col-6 -->

							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-control-label">Email address: <span
												class="tx-danger">*</span></label>
									<input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
									       type="text" name="email" value="johnpaul@yourdomain.com"
									       placeholder="Enter email address">
									@if ($errors->has('email'))
										<span class="help-block has-error">
                                        {{ $errors->first('email') }}
                                    </span>
									@endif
								</div>
							</div><!-- col-6 -->

							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-control-label">Password: <span
												class="tx-danger">*</span></label>
									<input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
									       type="password" name="password" value=""
									       placeholder="Enter password">
									@if ($errors->has('password'))
										<span class="help-block has-error">
                                        {{ $errors->first('password') }}
                                    </span>
									@endif
								</div>
							</div><!-- col-6 -->

							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-control-label">Confirm Password: <span
												class="tx-danger">*</span></label>
									<input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
									       type="password" name="password_confirmation" value=""
									       placeholder="Enter Confirm password" autocomplete="new-password">
									@if ($errors->has('password'))
										<span class="help-block has-error">
                                        {{ $errors->first('password') }}
                                    </span>
									@endif
								</div>
							</div><!-- col-6 -->

						<div class="form-layout-footer">
							<button type="submit" class="btn btn-primary bd-0">Submit</button>
							<button class="btn btn-secondary bd-0">Cancel</button>
						</div><!-- form-layout-footer -->
					</form><!--Form End -->
				</div><!-- form-layout -->
			</div><!-- section-wrapper -->

		</div><!-- container -->
	</div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
	<script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
	<script src="{{asset('assets/lib/select2/js/select2.min.js')}}"></script>

	<script src="{{asset('assets/lib/moment/js/moment.js')}}"></script>
	<script src="{{asset('assets/lib/jquery-ui/js/jquery-ui.js')}}"></script>

	<script>
		$(function () {
			'use strict'

			// Datepicker
			$('.fc-datepicker').datepicker({
				showOtherMonths: true,
				selectOtherMonths: true
			});

			// $('.form-layout .form-control').on('focusin', function(){
			// 	$(this).closest('.form-group').addClass('form-group-active');
			// });
			//
			// $('.form-layout .form-control').on('focusout', function(){
			// 	$(this).closest('.form-group').removeClass('form-group-active');
			// });

			// Select2
			$('.select2').select2({
				minimumResultsForSearch: Infinity
			});
		});
	</script>
@endsection
