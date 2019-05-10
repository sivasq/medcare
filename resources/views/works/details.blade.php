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
					<li class="breadcrumb-item active" aria-current="page">Edit</li>
				</ol>
				<h6 class="slim-pagetitle">Edit Account</h6>
			</div><!-- slim-pageheader -->

			<div class="section-wrapper">
				<label class="section-title">User Account Details</label>
				<p class="mg-b-20 mg-sm-b-40">Support Executive Details</p>
					{{Response::json($user, 200, array(), JSON_PRETTY_PRINT)}}
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
