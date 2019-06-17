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
				<label class="section-title">Create Account</label>
				<p class="mg-b-20 mg-sm-b-40">Create New Consultant Account</p>
				
				<div class="form-layout">
					<form method="post" action="{{ route('user.store') }}">
						@csrf
						<div class="row mg-b-25">
							<div class="col-lg-6">
								<div class="form-group mg-b-10-force">
									<label class="form-control-label">Type of Account <span
												class="tx-danger">*</span></label>
									<select style="width: 100%!important;"
									        class="form-control select2 {{ $errors->has('account_type') ? ' is-invalid' : '' }}"
									        name="account_type" data-placeholder="Select an Option">
										<option label="Choose Account Type"></option>
										<option value="consultant" {{ ( "consultant" == old('account_type')) ? 'selected' : '' }}>
											Consultant
										</option>
									</select>
									@if ($errors->has('account_type'))
										<span class="help-block has-error">
                                        {{ $errors->first('account_type') }}
                                    </span>
									@endif
								</div>
							</div><!-- col-6 -->
							
							<div class="col-lg-6">
							</div><!-- col-6 -->
							
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
									<label class="form-control-label">ID Number: <span
												class="tx-danger">*</span></label>
									<input class="form-control {{ $errors->has('id_number') ? ' is-invalid' : '' }}"
									       type="text" name="id_number" value="ID123456798"
									       placeholder="Enter email address">
									@if ($errors->has('id_number'))
										<span class="help-block has-error">
                                        {{ $errors->first('id_number') }}
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
								<div class="form-group mg-b-10-force">
									<label class="form-control-label">Start Date <span
												class="tx-danger">*</span></label>
									<input class="form-control fc-datepicker {{ $errors->has('start_date') ? ' is-invalid' : '' }}"
									       type="text" name="start_date" value="" placeholder="Start Date">
									@if ($errors->has('start_date'))
										<span class="help-block has-error">
                                        {{ $errors->first('start_date') }}
                                    </span>
									@endif
								</div>
							</div><!-- col-6 -->
							
							<div class="col-lg-6">
								<div class="form-group mg-b-10-force">
									<label class="form-control-label">End Date <span class="tx-danger">*</span></label>
									<input class="form-control fc-datepicker {{ $errors->has('end_date') ? ' is-invalid' : '' }}"
									       type="text" name="end_date" value="" placeholder="End Date">
									@if ($errors->has('end_date'))
										<span class="help-block has-error">
                                        {{ $errors->first('end_date') }}
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
						</div><!-- row -->
						
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
