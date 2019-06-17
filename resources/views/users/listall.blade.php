@extends('layouts.mainlayout')

@section('content')
	<div class="slim-mainpanel">
		<div class="container">
			<div class="slim-pageheader">
				<ol class="breadcrumb slim-breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">UserAccounts</li>
				</ol>
				<h6 class="slim-pagetitle">User Accounts</h6>
			</div><!-- slim-pageheader -->

			<div class="section-wrapper">
				<label class="section-title">User Accounts</label>
				<p class="mg-b-20 mg-sm-b-40">List of User Accounts.</p>

				<div class="table-responsive">
					<table class="table table-striped table-hover mg-b-0">
						<thead>
						<tr>
							<th>ID Number</th>
							<th>Name</th>
							<th>Email</th>
{{--							<th>Account</th>--}}
							<th>Active Period</th>
							<th style="width: 120px;">Action</th>
						</tr>
						</thead>
						<tbody>
						@foreach ($users as $user)
							<tr>
								<td scope="row">{{ $user->id_number }}</td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
{{--								<td>{{ $user->account_type }}</td>--}}
								<td>{{ $user->start_date }} <i>to</i> {{ $user->end_date }}</td>
								<td>
									<a class="btn btn-outline-primary btn-icon rounded-circle" href="{{ url('user/'.$user->id.'/edit') }}">
										<div>
											<i class="icon ion-edit tx-24"></i>
										</div>
									</a>
									&nbsp;&nbsp;
									<a class="btn btn-outline-primary btn-icon rounded-circle" href="{{ url('user/'.$user->id) }}">
										<div>
											<i class="icon ion-eye tx-24"></i>
										</div>
									</a>
								</td>
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
