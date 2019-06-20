@extends('layouts.mainlayout')

@section('headerscripts')
	@parent
	<link href="{{asset('assets/lib/jquery-toggles/css/toggles-full.css')}}" rel="stylesheet">
	<link href="{{asset('assets/lib/summernote/summernote-bs4.css')}}" rel="stylesheet">
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
										<h3 class="card-profile-name">Selina Kyle</h3>
										<p class="card-profile-position">Female, 57</p>
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
						</div><!-- section-wrapper -->
						
						<div class="section-wrapper pd-l-20-force pd-r-20-force mg-t-10-force">
							<label class="section-title">Chats</label>
							<div class="card" style="position: inherit;">
								<div class="message-header" style="position: inherit;">
									<a href="" class="message-back"><i class="fa fa-angle-left"></i></a>
									<div class="media">
										<img src="http://via.placeholder.com/500x500" alt="">
										<div class="media-body">
											<h6>Joyce Chua</h6>
											<p>Last seen: 2 hours ago</p>
										</div><!-- media-body -->
									</div><!-- media -->
									<div class="message-option">
										<div class="d-none d-sm-flex">
											<a href=""><i class="icon ion-ios-telephone-outline"></i></a>
											<a href=""><i class="icon ion-ios-videocam-outline"></i></a>
											<a href=""><i class="icon ion-ios-gear-outline"></i></a>
											<a href=""><i class="icon ion-ios-information-outline"></i></a>
										</div>
										<div class="d-sm-none">
											<a href=""><i class="icon ion-more"></i></a>
										</div>
									</div>
								</div><!-- message-header -->
								<div class="message-body ht-300" style="position: inherit;">
									<div class="media-list">
										<div class="media">
											<img src="http://via.placeholder.com/500x500" alt="">
											<div class="media-body">
												<div class="msg">
													<p>Hi, there?</p>
												</div>
												<div class="msg">
													<p>Are you ready for our party tonight?</p>
												</div>
											</div><!-- media-body -->
										</div><!-- media -->
										<div class="media">
											<div class="media-body reverse">
												<div class="msg">
													<p>So this is where you plan to do it?</p>
												</div>
											</div><!-- media-body -->
											<img src="http://via.placeholder.com/500x500"
											     class="wd-50 rounded-circle" alt="">
										</div><!-- media -->
										<div class="media">
											<img src="http://via.placeholder.com/500x500" alt="">
											<div class="media-body">
												<div class="msg">
													<p>As good a place as any.</p>
												</div>
											</div><!-- media-body -->
										</div><!-- media -->
										<div class="media">
											<div class="media-body reverse">
												<div class="msg">
													<p>At least have the balls to call this what it is: murder. You
														really believe if
														you walk back onto that farm alone, no me, no
														Randall... </p>
												</div>
												<div class="msg">
													<p>You really believe they're gonna buy whatever bullshit story
														you cook up?</p>
												</div>
											</div><!-- media-body -->
											<img src="http://via.placeholder.com/500x500"
											     class="wd-50 rounded-circle" alt="">
										</div><!-- media -->
										<div class="media">
											<img src="http://via.placeholder.com/500x500" alt="">
											<div class="media-body">
												<div class="msg">
													<p>That's just it, it ain't no story. I saw that prisoner shoot
														you down. I ran
														after him, I snapped his neck. It ain't gonna be easy, but
														Lori and Carl,
														they'll get over you. They done it before. They just gonna
														have to.</p>
												</div>
											</div><!-- media-body -->
										</div><!-- media -->
									</div><!-- media-list -->
								</div><!-- message-body -->
								<div class="message-footer" style="position: inherit;">
									<div class="row row-sm">
										<div class="col-9 col-sm-8 col-xl-9">
											<input type="text" class="form-control"
											       placeholder="Type something here...">
										</div><!-- col-8 -->
										<div class="col-3 col-sm-4 col-xl-3 tx-right">
											<div class="d-none d-sm-block">
												<a href=""><i class="icon ion-happy-outline"></i></a>
												<a href=""><i
															class="icon ion-ios-game-controller-b-outline"></i></a>
												<a href=""><i class="icon ion-ios-camera-outline"></i></a>
												<a href=""><i class="icon ion-ios-mic-outline"></i></a>
											</div>
											<div class="d-sm-none">
												<a href=""><i class="icon ion-more"></i></a>
											</div>
										</div><!-- col-4 -->
									</div><!-- row -->
								</div><!-- message-footer -->
							</div>
						</div>
						
						<div class="section-wrapper pd-l-20-force pd-r-20-force mg-t-10-force pos-relative">
							<label class="section-title">Summary Report</label>
							
							<div class="toggle-wrapper pos-absolute wd-100 t-40 r-20 tx-spacing-2">
								<div class="toggle toggle-modern custom"></div>
							</div>
							<div class="mg-t-25" id="provider_view">
								<h6 class="slim-card-title">Note to Provider / Prescriber</h6>
								
								<p>Dr. Strange, pls review the following recommendations and provide your response to
									the recommendations fax to 800 555-5555</p>
								
								<h6 class="slim-card-title">Recommendation 1</h6>
								<div class="row mg-b-20-force">
									<div class="col-lg-3 mg-t-20 mg-lg-t-0">
										<label class="ckbox">
											<input type="checkbox" checked disabled><span>Renal Dose Adjustment</span>
										</label>
									</div><!-- col-3 -->
									<div class="col-lg-3 mg-t-20 mg-lg-t-0">
										<label class="ckbox">
											<input type="checkbox" checked disabled><span>Medication Duplication</span>
										</label>
									</div><!-- col-3 -->
								</div>
								
								<h6 class="slim-card-title">Medication</h6>
								<p>Venlafaxine 75mg XR, Take 1 tab by mouth before brekfast venlafaxine 225mg, take 1
									tab by mouth before breakfast.</p>
								
								<h6 class="slim-card-title">Assessment</h6>
								<p>Patient is taking total dose of 300mg/dy, but maximum daily dose is 225 mg. This
									medication also requires renal adjusment for CrCI 10-70 (Patient estimated Cr
									CI(Cockcroft-Gault):50.5 mL/min) requires a reduction of total daily doe by
									25-50%.</p>
								
								<h6 class="slim-card-title">Plan</h6>
								<p>Please consider reducing daily dose and renal adjusting this medicine.</p>
								
								<h6 class="slim-card-title">References</h6>
								<p>Lexicomp</p>
								
								<h6 class="slim-card-title">Provider Response</h6>
								<p>Provide Initials and (Yes/No) or explanation</p>
							</div>
							
							<div class="mg-t-25" id="patient_view">
								<div id="patient_note"></div>
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
	<script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
	<script src="{{asset('assets/lib/jquery-toggles/js/toggles.min.js')}}"></script>
	<script src="{{asset('assets/lib/summernote/summernote-bs4.min.js')}}"></script>
	
	<script>
		$(function () {
			'use strict'

			// Toggles
			$('.toggle').toggles({
				on: true,
				height: 26,
				text: {
					on: 'Provider', // text for the ON position
					off: 'Patient' // and off
				},
				width: 100
			});

			// Getting notified of changes, and the new state:
			$('.toggle').on('toggle', function (e, active) {
				if (active) {
					console.log('Toggle is now ON!');
				} else {
					console.log('Toggle is now OFF!');
				}
			});

			// Summernote editor
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

			// var HTMLstring = '<div><p>Hello, world</p><p>Summernote can insert HTML string</p></div>';
			// $('#summernote').summernote('pasteHTML', HTMLstring);
		});
	</script>
@endsection