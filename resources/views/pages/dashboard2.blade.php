@extends('layouts.mainlayout')

@section('headerscripts')
@parent
<link href="{{asset('assets/lib/rickshaw/css/rickshaw.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="slim-mainpanel">
	<div class="container">
		<div class="slim-pageheader">
			<ol class="breadcrumb slim-breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
			</ol>
			<h6 class="slim-pagetitle">Dashboard 02</h6>
		</div><!-- slim-pageheader -->

		<div class="row row-xs">
			<div class="col-md-6 col-lg-3 order-lg-1">
				<div class="card">
					<div class="card-body pd-b-0">
						<h6 class="slim-card-title">Page Impressions</h6>
						<h1 class="tx-lato tx-primary">323,360</h1>
						<p class="tx-12"><span class="tx-primary">2.5%</span> change from yesterday</p>
					</div><!-- card-body -->
					<div id="rs3" class="ht-50 ht-sm-70 mg-r--1"></div>
				</div><!-- card -->

				<div class="card card-activities pd-20 mg-t-10">
					<h6 class="slim-card-title">Recent Activities</h6>
					<p>Last activity was 1 hour ago</p>

					<div class="media-list">
						<div class="media">
							<div class="activity-icon bg-primary">
								<i class="icon ion-stats-bars"></i>
							</div><!-- activity-icon -->
							<div class="media-body">
								<h6>Report has been updated</h6>
								<p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor.</p>
								<span>2 hours ago</span>
							</div><!-- media-body -->
						</div><!-- media -->
						<div class="media">
							<div class="activity-icon bg-success">
								<i class="icon ion-trophy"></i>
							</div><!-- activity-icon -->
							<div class="media-body">
								<h6>Achievement Unlocked</h6>
								<p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor.</p>
								<span>2 hours ago</span>
							</div><!-- media-body -->
						</div><!-- media -->
						<div class="media">
							<div class="activity-icon bg-purple">
								<i class="icon ion-image"></i>
							</div><!-- activity-icon -->
							<div class="media-body">
								<h6>Added new images</h6>
								<p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor.</p>
								<span>2 hours ago</span>
							</div><!-- media-body -->
						</div><!-- media -->
					</div><!-- media-list -->
				</div><!-- card -->

				<div class="card card-todo mg-t-10">
					<h6 class="slim-card-title">Todo Item List</h6>
					<div class="todo-list">
						<div class="todo-item">
							<label class="ckbox">
								<input type="checkbox" checked><span>Do something</span>
							</label>
						</div><!-- todo-item -->
						<div class="todo-item">
							<label class="ckbox">
								<input type="checkbox" checked><span>Do more stuff</span>
							</label>
						</div><!-- todo-item -->
						<div class="todo-item">
							<label class="ckbox">
								<input type="checkbox"><span>Do something else</span>
							</label>
						</div><!-- todo-item -->
						<div class="todo-item">
							<label class="ckbox">
								<input type="checkbox"><span>Do something again</span>
							</label>
						</div><!-- todo-item -->
						<div class="todo-item">
							<label class="ckbox">
								<input type="checkbox"><span>Do something more</span>
							</label>
						</div><!-- todo-item -->
						<div class="todo-item">
							<label class="ckbox">
								<input type="checkbox"><span>Do even more</span>
							</label>
						</div><!-- todo-item -->
						<div class="todo-item">
							<label class="ckbox">
								<input type="checkbox"><span>Do something more</span>
							</label>
						</div><!-- todo-item -->
						<div class="todo-item">
							<label class="ckbox">
								<input type="checkbox"><span>Finish something</span>
							</label>
						</div><!-- todo-item -->
						<div class="todo-item">
							<label class="ckbox">
								<input type="checkbox"><span>Finish something more</span>
							</label>
						</div><!-- todo-item -->
					</div><!-- todo-list -->
				</div><!-- card -->
			</div><!-- col-3 -->
			<div class="col-md-6 col-lg-3 mg-t-10 mg-md-t-0 order-lg-3">
				<div class="card">
					<div class="card-body">
						<h6 class="slim-card-title mg-b-20">Sale Progress</h6>

						<label class="mg-b-5">24,224 sales</label>
						<div class="progress mg-b-15">
							<div class="progress-bar bg-warning progress-bar-xs wd-50p" role="progressbar"
							     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div><!-- progress -->

						<label class="mg-b-5">43,765 sales</label>
						<div class="progress mg-b-15">
							<div class="progress-bar bg-primary progress-bar-xs wd-70p" role="progressbar"
							     aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
						</div><!-- progress -->

						<label class="mg-b-5">14,220 sales</label>
						<div class="progress mg-b-15">
							<div class="progress-bar bg-danger progress-bar-xs wd-30p" role="progressbar"
							     aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
						</div><!-- progress -->

						<label class="mg-b-5">20,220 sales</label>
						<div class="progress mg-b-15">
							<div class="progress-bar bg-success progress-bar-xs wd-85p" role="progressbar"
							     aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
						</div><!-- progress -->
					</div><!-- card-body -->
				</div><!-- card -->

				<div class="card card-body pd-20 mg-t-10">
					<h6 class="slim-card-title mg-b-20">Most Visited</h6>
					<div class="mg-b-25">
						<span class="peity-donut"
						      data-peity='{ "fill": ["#663090","#EC1778","#5B93D3"], "height": 200, "width": "100%" }'>10,5,4</span>
					</div>
					<div class="d-flex align-items-center">
						<span class="square-10 bg-purple rounded-circle"></span>
						<span class="mg-l-10">San Francisco</span>
						<span class="mg-l-auto tx-lato tx-right">9,212</span>
					</div>
					<div class="d-flex align-items-center mg-t-5">
						<span class="square-10 bg-pink rounded-circle"></span>
						<span class="mg-l-10">Los Angeles</span>
						<span class="mg-l-auto tx-lato tx-right">8,768</span>
					</div>
					<div class="d-flex align-items-center mg-t-5">
						<span class="square-10 bg-info rounded-circle"></span>
						<span class="mg-l-10">San Diego</span>
						<span class="mg-l-auto tx-lato tx-right">8,355</span>
					</div>
				</div><!-- card -->

				<div class="card card-body pd-20 mg-t-10">
					<h6 class="slim-card-title mg-b-20">Quick Contact Form</h6>
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Enter your name">
					</div><!-- form-group -->
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Enter your email">
					</div><!-- form-group -->
					<div class="form-group">
						<textarea name="name" class="form-control" rows="3" placeholder="Enter your message"></textarea>
					</div><!-- form-group -->
					<button class="btn btn-primary btn-block">Send Message</button>
				</div><!-- card -->
			</div><!-- col-3 -->
			<div class="col-lg-6 mg-t-10 mg-lg-t-0 order-lg-2">
				<div class="card card-customer-overview">
					<div class="card-header">
						<h6 class="slim-card-title">Customer Overview</h6>
						<nav class="nav">
							<a href="" class="nav-link active">Day</a>
							<a href="" class="nav-link">Week</a>
							<a href="" class="nav-link">Month</a>
						</nav>
					</div><!-- card-header -->
					<div class="card-body">
						<div id="flotArea1" class="ht-200 ht-sm-300"></div>
					</div><!-- card-body -->
				</div><!-- card -->

				<div class="card card-customer-overview mg-t-10">
					<div class="card-header">
						<h6 class="slim-card-title">Sales Overview</h6>
						<nav class="nav">
							<a href="" class="nav-link active">Day</a>
							<a href="" class="nav-link">Week</a>
							<a href="" class="nav-link">Month</a>
						</nav>
					</div><!-- card-header -->
					<div class="card-body">
						<div id="flotBar1" class="ht-200 ht-sm-300"></div>
					</div><!-- card-body -->
				</div><!-- card -->

				<div class="card card-quick-post mg-t-10">
					<h6 class="slim-card-title">Share Your Thoughts</h6>
					<div class="form-group">
						<textarea class="form-control" rows="3" placeholder="What's on your mind?"></textarea>
					</div><!-- form-group -->
					<div class="card-footer">
						<button class="btn btn-purple">Share Post</button>
						<nav>
							<a href=""><i class="icon ion-images"></i></a>
							<a href=""><i class="icon ion-aperture"></i></a>
							<a href=""><i class="icon ion-calendar"></i></a>
						</nav>
					</div><!-- card-footer -->
				</div><!-- card -->
			</div><!-- col-6 -->
		</div><!-- row -->
	</div><!-- container -->
</div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
@parent
<script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
<script src="{{asset('assets/lib/d3/js/d3.js')}}"></script>
<script src="{{asset('assets/lib/rickshaw/js/rickshaw.min.js')}}"></script>
<script src="{{asset('assets/lib/Flot/js/jquery.flot.js')}}"></script>
<script src="{{asset('assets/lib/Flot/js/jquery.flot.resize.js')}}"></script>
<script src="{{asset('assets/lib/peity/js/jquery.peity.js')}}"></script>
<script src="{{asset('assets/js/ResizeSensor.js')}}"></script>

<script>
	$(function () {
		'use strict'

		var rs3 = new Rickshaw.Graph({
			element: document.querySelector('#rs3'),
			renderer: 'line',
			series: [{
				data: [
					{x: 0, y: 5},
					{x: 1, y: 7},
					{x: 2, y: 10},
					{x: 3, y: 11},
					{x: 4, y: 12},
					{x: 5, y: 10},
					{x: 6, y: 9},
					{x: 7, y: 7},
					{x: 8, y: 6},
					{x: 9, y: 8},
					{x: 10, y: 9},
					{x: 11, y: 10},
					{x: 12, y: 7},
					{x: 13, y: 10}
				],
				color: '#1B84E7',
			}]
		});
		rs3.render();

		// Responsive Mode
		new ResizeSensor($('.slim-mainpanel'), function () {
			rs3.configure({
				width: $('#rs3').width(),
				height: $('#rs3').height()
			});
			rs3.render();
		});


		var newCust = [[0, 2], [1, 3], [2, 6], [3, 5], [4, 7], [5, 8], [6, 10]];
		var retCust = [[0, 1], [1, 2], [2, 5], [3, 3], [4, 5], [5, 6], [6, 9]];

		var plot = $.plot($('#flotArea1'), [
				{
					data: newCust,
					label: 'New Customer',
					color: '#1B84E7'
				},
				{
					data: retCust,
					label: 'Returning Customer',
					color: '#4E6577'
				}],
			{
				series: {
					lines: {
						show: true,
						lineWidth: 0,
						fill: 0.8
					},
					shadowSize: 0
				},
				points: {
					show: false,
				},
				legend: {
					noColumns: 1,
					position: 'nw'
				},
				grid: {
					hoverable: true,
					clickable: true,
					borderColor: '#ddd',
					borderWidth: 0,
					labelMargin: 5,
					backgroundColor: '#fff'
				},
				yaxis: {
					min: 0,
					max: 15,
					color: '#eee',
					font: {
						size: 10,
						color: '#999'
					}
				},
				xaxis: {
					color: '#eee',
					font: {
						size: 10,
						color: '#999'
					}
				}
			});

		$.plot("#flotBar1", [{
			data: [[0, 3], [2, 8], [4, 5], [6, 13], [8, 5], [10, 7], [12, 4], [14, 6]]
		}], {
			series: {
				bars: {
					show: true,
					lineWidth: 0,
					fillColor: '#4E6577'
				}
			},
			grid: {
				borderWidth: 1,
				borderColor: '#D9D9D9'
			},
			yaxis: {
				tickColor: '#d9d9d9',
				font: {
					color: '#666',
					size: 10
				}
			},
			xaxis: {
				tickColor: '#d9d9d9',
				font: {
					color: '#666',
					size: 10
				}
			}
		});

		// Donut chart
		$('.peity-donut').peity('donut');

	});
</script>
@endsection
