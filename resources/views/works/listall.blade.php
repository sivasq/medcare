@extends('layouts.mainlayout')

@section('content')
	<div class="slim-mainpanel">
		<div class="container">
			<div class="slim-pageheader">
				<ol class="breadcrumb slim-breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Work Queues</li>
				</ol>
				<h6 class="slim-pagetitle">Work Queues</h6>
			</div><!-- slim-pageheader -->
			
			<div class="section-wrapper">
				<label class="section-title">Work Queues</label>
				<p class="mg-b-20 mg-sm-b-40">List of Work Queues.</p>
				
				@if (session('success'))
					<div class="alert  alert-success alert-dismissible fade show" id="flashMessage" role="alert">
						{{ session('success') }}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif
				
				@if (session('error'))
					<div class="alert alert-danger alert-dismissible fade show" id="flashMessage" role="alert">
						{{ session('error') }}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif
				
				<div class="table-responsive">
					<table class="table table-striped table-hover mg-b-0">
						<thead>
						<tr>
							<th>Name</th>
							<th>Age</th>
							<th>Gender</th>
							@if(Auth::user()->user_role == 1)
								<th>Reviewer</th>
							@endif
							<th>Status</th>
							<th>Summary Report</th>
							<th>E-Scripts</th>
							<th>Chat Status</th>
							{{--<th>Action</th>--}}
						</tr>
						</thead>
						<tbody>
						@foreach ($works as $work)
							<tr>
								<th scope="row"><a href="{{route('work.progress', ['workid'=>$work->id])}}">{{ $work->clientDetail->name }}</a>
								</th>
								<th scope="row">{{ $work->clientDetail->age }}</th>
								<th scope="row">{{ $work->clientDetail->gender }}</th>
								@if(Auth::user()->user_role == 1)
									<td>
										@if (empty($work->reviewer_id))
											<a href="javascript:void(0);" id="dropdownMenuButton{{$work->id}}"
											   data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												Assign Reviewer
											</a>
											<div class="dropdown-menu pd-20"
											     aria-labelledby="dropdownMenuButton{{$work->id}}"
											     onclick="event.stopPropagation();">
												<h6 class="tx-gray-800 tx-uppercase dropdown-header">Assign To</h6>
												<hr class="mg-t-5-force mg-b-5-force">
												@foreach ($reviewers as $reviewer)
													<a href="{{route('work.assign',['workid'=>$work->id,'userid'=>$reviewer->id])}}"
													   class="row justify-content-between pd-b-5-force pd-t-5-force">
														<div class="col-8">
															{{ucfirst($reviewer->name)}}
														</div>
														<div class="col text-center">
															@if ($reviewer->work_live_status === 'assigned')
																<i class="fa fa-check-circle"
																   style="color: #ff0000;"></i>
															@elseif ($reviewer->work_live_status === 'in_progress')
																<i class="fa fa-check-circle"
																   style="color: #ffff00;"></i>
															@elseif ($reviewer->work_live_status === 'completed')
																<i class="fa fa-check-circle"
																   style="color: #1a8e06;"></i>
															@elseif ($reviewer->work_live_status === 'not_assigned')
																<i class="fa fa-circle" style="color: #800080;"></i>
															@endif
														</div>
													</a>
												@endforeach
											</div><!-- dropdown-menu -->
										@else
											{{ ucfirst($work->reviewerDetail->name) }}
										@endif
									</td>
								@endif
								<td>
									<span class="square-8 bg-success mg-r-5 rounded-circle"></span>{{ ucfirst($work->status) }}
								</td>
								<td>{{ ucfirst($work->summary_report) }}</td>
								<td><a href="{{route('work.progress', ['workid'=>$work->id])}}">View Scripts</a></td>
								<td>{{ ucfirst($work->chat_status) }}</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div><!-- table-responsive -->
			</div><!-- section-wrapper -->
		</div><!-- container -->
	</div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
	<script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
@endsection
