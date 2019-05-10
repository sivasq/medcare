@extends('layouts.mainlayout')

@section('content')
	<div class="slim-mainpanel">
		<div class="container">
			<div class="slim-pageheader">
				<ol class="breadcrumb slim-breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Clients</li>
				</ol>
				<h6 class="slim-pagetitle">Clients</h6>
			</div><!-- slim-pageheader -->

			<div class="section-wrapper">
				<label class="section-title">Clients</label>
				<p class="mg-b-20 mg-sm-b-40">List of Clients.</p>

				<div class="table-responsive">
					<table class="table table-striped table-hover mg-b-0">
						<thead>
						<tr>
							<th>Script ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Gender</th>
							<th>DOB</th>
							{{--<th>Action</th>--}}
						</tr>
						</thead>
						<tbody>
						@foreach ($clients as $client)
							<tr>
								<th scope="row">{{ $client->script_id }}</th>
								<td>{{ $client->first_name }}</td>
								<td>{{ $client->email }}</td>
								<td>{{ $client->gender }}</td>
								<td>{{ $client->dob }} </td>
								{{--<td>--}}
									{{--<a class="btn btn-outline-primary btn-icon rounded-circle" href="{{ url('user/'.$client->id.'/edit') }}">--}}
										{{--<div>--}}
											{{--<i class="icon ion-edit tx-24"></i>--}}
										{{--</div>--}}
									{{--</a>--}}
									{{--&nbsp;&nbsp;--}}
									{{--<a class="btn btn-outline-primary btn-icon rounded-circle" href="{{ url('user/'.$client->id) }}">--}}
										{{--<div>--}}
											{{--<i class="icon ion-eye tx-18"></i>--}}
										{{--</div>--}}
									{{--</a>--}}
								{{--</td>--}}
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
