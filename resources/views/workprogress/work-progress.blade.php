@extends('layouts.mainlayout')

@section('headerscripts')
	@parent
	<!-- CSRF Token -->
	<meta name="_token" content="{{csrf_token()}}"/>
	<meta name="base-url" content="{{ url('/') }}">
	
	<link href="{{asset('assets/lib/jquery-toggles/css/toggles-full.css')}}" rel="stylesheet">
	<link href="{{asset('assets/lib/summernote/summernote-bs4.css')}}" rel="stylesheet">
	
	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('content')
	<div class="slim-mainpanel">
		<div class="container">
			<div class="slim-pageheader">
				<ol class="breadcrumb slim-breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Work Process</li>
				</ol>
				<h6 class="slim-pagetitle">Work Process</h6>
			</div><!-- slim-pageheader -->
			
			<div class="section-wrapper" style="background-color: inherit;border: inherit;padding: 0;">
				<div class="row">
					{{--<div class="col">--}}
					{{--<div class="card card-profile">--}}
					{{--<div class="card-body">--}}
					{{--<a href=""><img src="http://via.placeholder.com/500x500" alt=""></a>--}}
					{{--<h4 class="profile-name">Selina Kyle</h4>--}}
					{{--<p class="mg-b-20">Female, 57</p>--}}
					{{--<div class="dropdown mg-sm-l-10 mg-t-10 mg-sm-t-0">--}}
					{{--<button class="btn btn-outline-primary dropdown-toggle" type="button"--}}
					{{--id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"--}}
					{{--aria-expanded="false">--}}
					{{--Completed--}}
					{{--</button>--}}
					{{--<div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">--}}
					{{--<a class="dropdown-item" href="#">Processing</a>--}}
					{{--<a class="dropdown-item" href="#">Waiting</a>--}}
					{{--</div><!-- dropdown-menu -->--}}
					{{--</div><!-- dropdown -->--}}
					{{--</div><!-- card-body -->--}}
					{{--</div>--}}
					{{--</div>--}}
					
					<div class="col"><!-- col-9 -->
						<div class="carda card-profile">
							<div class="card-body d-flex flex-row pd-l-0-force pd-r-0-force">
								<div class="media align-items-center">
									<img class="wd-75-force" src="http://via.placeholder.com/100x100" alt="">
									<div class="media-body mg-l-20-force">
										<h3 class="card-profile-name">{{$work_details->clientDetail->name}}</h3>
										<p class="card-profile-position">{{$work_details->clientDetail->gender}}
											, {{$work_details->clientDetail->age}}</p>
									</div><!-- media-body -->
								</div><!-- media -->
								
								<div style="margin-left: auto; display: flex; align-items: center;">Review Status
									<div class="dropdown mg-sm-l-10 mg-t-10 mg-sm-t-0">
										<button class="btn btn-outline-primary dropdown-toggle" type="button"
										        id="reviewStatus" data-toggle="dropdown" aria-haspopup="true"
										        aria-expanded="false">
											Completed
										</button>
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="reviewStatus">
											<a class="dropdown-item" href="#">Processing</a>
											<a class="dropdown-item" href="#">Waiting</a>
										</div><!-- dropdown-menu -->
									</div><!-- dropdown -->
								</div>
							</div><!-- card-body -->
						</div><!-- card profile-->
						
						<!-- E-Scripts -->
						<div class="section-wrapper pd-l-20-force pd-r-20-force">
							<label class="section-title">E-Scripts</label>
							<div class="card card-table">
								{{--<div class="card-header">--}}
								{{--<h6 class="slim-card-title">E-Scripts</h6>--}}
								{{--</div><!-- card-header -->--}}
								<div class="table-responsive">
									<table class="table mg-b-0 tx-12">
										<thead>
										<tr class="tx-10">
											<th class="wd-10p pd-y-5">Drug</th>
											<th class="pd-y-5">Dose</th>
											<th class="pd-y-5">Sig</th>
											<th class="pd-y-5">Refills Remaining</th>
											<th class="pd-y-5">Pharmacy</th>
											<th class="pd-y-5">Prescribing Phys.</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td class="pd-l-20">
												<a href="" class="tx-inverse tx-14 tx-medium d-block">Lisinopril</a>
											</td>
											<td>
												20-12.5 mg
											</td>
											<td class="tx-12">
												1 tablet by mouth
											</td>
											<td>
												1 of 3
											</td>
											<td>
												Mom and Pop's
											</td>
											<td>
												<a href="" class="tx-inverse tx-14 tx-medium d-block">Stephen
													Strange,
													MD</a>
											</td>
										</tr>
										<tr>
											<td class="pd-l-20">
												<a href="" class="tx-inverse tx-14 tx-medium d-block">Lisinopril</a>
											</td>
											<td>
												20-12.5 mg
											</td>
											<td class="tx-12">
												1 tablet by mouth
											</td>
											<td>
												1 of 3
											</td>
											<td>
												Mom and Pop's
											</td>
											<td>
												<a href="" class="tx-inverse tx-14 tx-medium d-block">Stephen
													Strange,
													MD</a>
											</td>
										</tr>
										<tr>
											<td class="pd-l-20">
												<a href="" class="tx-inverse tx-14 tx-medium d-block">Lisinopril</a>
											</td>
											<td>
												20-12.5 mg
											</td>
											<td class="tx-12">
												1 tablet by mouth
											</td>
											<td>
												1 of 3
											</td>
											<td>
												Mom and Pop's
											</td>
											<td>
												<a href="" class="tx-inverse tx-14 tx-medium d-block">Stephen
													Strange,
													MD</a>
											</td>
										</tr>
										<tr>
											<td class="pd-l-20">
												<a href="" class="tx-inverse tx-14 tx-medium d-block">Lisinopril</a>
											</td>
											<td>
												20-12.5 mg
											</td>
											<td class="tx-12">
												1 tablet by mouth
											</td>
											<td>
												1 of 3
											</td>
											<td>
												Mom and Pop's
											</td>
											<td>
												<a href="" class="tx-inverse tx-14 tx-medium d-block">Stephen
													Strange,
													MD</a>
											</td>
										</tr>
										<tr>
											<td class="pd-l-20">
												<a href="" class="tx-inverse tx-14 tx-medium d-block">Lisinopril</a>
											</td>
											<td>
												20-12.5 mg
											</td>
											<td class="tx-12">
												1 tablet by mouth
											</td>
											<td>
												1 of 3
											</td>
											<td>
												Mom and Pop's
											</td>
											<td>
												<a href="" class="tx-inverse tx-14 tx-medium d-block">Stephen
													Strange,
													MD</a>
											</td>
										</tr>
										</tbody>
									</table>
								</div><!-- table-responsive -->
							</div>
						</div>
						
						<!-- Chats -->
						<div id="chat-app" class="section-wrapper pd-l-20-force pd-r-20-force mg-t-10-force">
							<label class="section-title">Chats</label>
							<div class="card" style="position: inherit;">
								<div class="message-header" style="position: inherit;">
									<div class="media">
										<img src="http://via.placeholder.com/500x500" alt="">
										<div class="media-body">
											<h6>{{$work_details->clientDetail->name}}</h6>
											{{--<p>Last seen: 2 hours ago</p>--}}
										</div><!-- media-body -->
									</div><!-- media -->
								</div><!-- message-header -->
								
								<div class="message-body ht-300" style="position: inherit;">
									<chat-messages :messages="messages" :work="{{$work_details->id}}"
									               :auth="{{auth()->user()}}"></chat-messages>
								</div>
								
								<div class="message-footer" style="position: inherit;">
									<chat-form v-on:messagesent="addMessage" :work="{{$work_details->id}}"></chat-form>
								</div><!-- message-footer -->
							</div>
						</div>
						
						<!-- Summary Reports -->
						<div class="section-wrapper pd-l-20-force pd-r-20-force mg-t-10-force pos-relative">
							<label class="section-title">Summary Report</label>
							
							<div class="toggle-wrapper pos-absolute wd-100 t-40 r-20 tx-spacing-2">
								<div class="summary-toggle toggle-modern custom"></div>
							</div>
							
							<div class="mg-t-25 pos-relative" id="provider_summary">
								<h6 class="slim-card-title">Note to Provider / Prescriber</h6>
								<div class="tx-center">
									@if(is_null($work_details->summary_reports))
										<button onclick="edit_provider_summary()"
										        class="btn btn-sm btn-outline-primary btn-signin1 mg-t-25 mg-b-10 edit-btn">
											{{ __('Create Summary') }}
										</button>
									@endif
									
									@if(!is_null($work_details->summary_reports))
										@if($work_details->summary_reports->provider_report)
											<button onclick="edit_provider_summary()"
											        class="btn btn-sm btn-outline-primary btn-signin1 mg-t-25 mg-b-10 edit-btn">
												{{ __('Edit Summary') }}
											</button>
										@else
											<button onclick="edit_provider_summary()"
											        class="btn btn-sm btn-outline-primary btn-signin1 mg-t-25 mg-b-10 edit-btn">
												{{ __('Create Summary') }}
											</button>
										@endif
									@endif
									
									<button onclick="cancel_edit_provider_summary()"
									        class="btn btn-sm btn-outline-danger btn-signin1 mg-t-25 mg-b-10 save-btn">
										{{ __('Cancel') }}
									</button>
									
									<button onclick="save_provider_summary()"
									        class="btn btn-sm btn-outline-success btn-signin1 mg-t-25 mg-b-10 save-btn">
										{{ __('Save Summary') }}
									</button>
									
									<div class="alert-danger print-error-msg" style="display:block">
										<ul></ul>
									</div>
								</div>
								
								<div id="provider_note">
									@if(!is_null($work_details->summary_reports))
										{!! $work_details->summary_reports->provider_report !!}
									@endif
								</div>
							</div>
							
							<div class="mg-t-25 pos-relative" id="patient_summary">
								<h6 class="slim-card-title">Note to Patient</h6>
								<div class="tx-center">
									@if(is_null($work_details->summary_reports))
										<button onclick="edit_patient_summary()"
										        class="btn btn-sm btn-outline-primary btn-signin1 mg-t-25 mg-b-10 edit-btn">
											{{ __('Create Summary') }}
										</button>
									@endif
									
									@if(!is_null($work_details->summary_reports))
										@if($work_details->summary_reports->patient_report)
											<button onclick="edit_patient_summary()"
											        class="btn btn-sm btn-outline-primary btn-signin1 mg-t-25 mg-b-10 edit-btn">
												{{ __('Edit Summary') }}
											</button>
										@else
											<button onclick="edit_patient_summary()"
											        class="btn btn-sm btn-outline-primary btn-signin1 mg-t-25 mg-b-10 edit-btn">
												{{ __('Create Summary') }}
											</button>
										@endif
									@endif
									
									<button onclick="cancel_edit_patient_summary()"
									        class="btn btn-sm btn-outline-danger mg-t-25 mg-b-10 save-btn">
										{{ __('Cancel') }}
									</button>
									
									<button onclick="save_patient_summary()"
									        class="btn btn-sm btn-outline-success mg-t-25 mg-b-10 save-btn">
										{{ __('Save Summary') }}
									</button>
									
									<div class="alert-danger print-error-msg" style="display:block">
										<ul></ul>
									</div>
								</div>
								
								<div id="patient_note">
									@if(!is_null($work_details->summary_reports))
										{!! $work_details->summary_reports->patient_report !!}
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</div><!-- container -->
	</div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>
	<script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
	<script src="{{asset('assets/lib/jquery-toggles/js/toggles.min.js')}}"></script>
	<script src="{{asset('assets/lib/summernote/summernote-bs4.min.js')}}"></script>
	
	<script>
		var temp_patient_markup;
		var temp_provider_markup;

		$(function () {
			'use strict';

			$('#patient_summary').hide();

			$('#provider_summary .save-btn').hide();
			$('#provider_summary .edit-btn').show();

			// Toggles Summary
			jQuery('.summary-toggle').toggles({
				on: true,
				height: 26,
				text: {
					on: 'Provider', // text for the ON position
					off: 'Patient' // and off
				},
				width: 100
			});

			// Getting notified of Summary changes, and the new state:
			$('.summary-toggle').on('toggle', function (e, active) {
				if (active) {
					$('#patient_summary').hide();
					$('#provider_summary').show();

					// if ($('#provider_note').summernote('isEmpty')) {
					// 	edit_provider_summary();
					// } else {
					$('#provider_note').summernote('destroy');
					$('#provider_summary .save-btn').hide();
					$('#provider_summary .edit-btn').show();
					// }
				} else {
					$('#patient_summary').show();
					$('#provider_summary').hide();

					// if ($('#patient_note').summernote('isEmpty')) {
					// 	edit_patient_summary();
					// } else {
					$('#patient_note').summernote('destroy');
					$('#patient_summary .save-btn').hide();
					$('#patient_summary .edit-btn').show();
					// }
				}
			});
		});

		// Patient
		var save_patient_summary = function () {
			var markup = $.trim($('#patient_note').summernote('code'));

			if (markup == '<p><br></p>') {
				return false;
			}

			jQuery.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
				}
			});

			jQuery.ajax({
				url: "{{ route('work.store_patient_summary', ['workid' => $work_details->id]) }}",
				method: 'post',
				data: {work_queue_id: "{{$work_details->id}}", patient_report: markup},
				success: function (data) {
					if ('errors' in data) {
						jQuery.each(data.errors, function (key, value) {
							jQuery('#patient_summary .alert-danger').show();
							jQuery('#patient_summary .alert-danger').append('<p>' + value + '</p>');
						});
					}

					if ('success' in data) {
						$('#patient_note').summernote('destroy');
						$('#patient_summary .save-btn').hide();
						$('#patient_summary .edit-btn').show();
					}
				}
			});
		};

		var cancel_edit_patient_summary = function () {
			$('#patient_note').summernote('destroy');
			$('#patient_note').html(temp_patient_markup);
			$('#patient_summary .save-btn').hide();
			$('#patient_summary .edit-btn').show();
		};

		var edit_patient_summary = function () {
			temp_patient_markup = $('#patient_note').summernote('code');
			$('#patient_note').summernote({
				placeholder: 'Summary Report for Patients',
				tabsize: 2,
				// height: 100,
				minHeight: 200,
				focus: true,
				toolbar: [
					// [groupName, [list of button]]
					['style', ['style']],
					['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript']],
					['insert', ['video', 'picture', 'link', 'hr']],
					['fontsize', ['fontsize']],
					['color', ['color']],
					['table', ['table']],
					['para', ['ul', 'ol', 'paragraph']],
					['action', ['undo', 'redo']],
					['view', ['fullscreen', 'help']],
					['codeview', ['codeview']]
				]
			});
			$('#patient_summary .save-btn').show();
			$('#patient_summary .edit-btn').hide();
		};

		//Provider
		var save_provider_summary = function () {
			var markup = $.trim($('#provider_note').summernote('code'));

			if (markup == '<p><br></p>') {
				return false;
			}

			jQuery.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
				}
			});

			jQuery.ajax({
				url: "{{ route('work.store_provider_summary', ['workid' => $work_details->id]) }}",
				method: 'post',
				data: {work_queue_id: "{{$work_details->id}}", provider_report: markup},
				success: function (data) {
					if ('errors' in data) {
						jQuery.each(data.errors, function (key, value) {
							jQuery('#provider_summary .alert-danger').show();
							jQuery('#provider_summary .alert-danger').append('<p>' + value + '</p>');
						});
					}

					if ('success' in data) {
						$('#provider_note').summernote('destroy');
						$('#provider_summary .save-btn').hide();
						$('#provider_summary .edit-btn').show();
					}
				}
			});
		};

		var cancel_edit_provider_summary = function () {
			$('#provider_note').summernote('destroy');
			$('#provider_note').html(temp_provider_markup);
			$('#provider_summary .save-btn').hide();
			$('#provider_summary .edit-btn').show();
		};

		var edit_provider_summary = function () {
			temp_provider_markup = $('#provider_note').html();
			$('#provider_note').summernote({
				placeholder: 'Summary Report for Patients',
				tabsize: 2,
				// height: 100,
				minHeight: 200,
				focus: true,
				toolbar: [
					// [groupName, [list of button]]
					['style', ['style']],
					['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript']],
					['insert', ['video', 'picture', 'link', 'hr']],
					['fontsize', ['fontsize']],
					['color', ['color']],
					['table', ['table']],
					['para', ['ul', 'ol', 'paragraph']],
					['action', ['undo', 'redo']],
					['view', ['fullscreen', 'help']],
					['codeview', ['codeview']]
				]
			});
			$('#provider_summary .save-btn').show();
			$('#provider_summary .edit-btn').hide();
		};
	
	
	</script>

@endsection