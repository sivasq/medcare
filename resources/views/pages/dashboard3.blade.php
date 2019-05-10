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
				<h6 class="slim-pagetitle">Welcome back, Katherine</h6>
			</div><!-- slim-pageheader -->

			<div class="row row-xs">
				<div class="col-sm-6 col-lg-3">
					<div class="card card-status">
						<div class="media">
							<i class="icon ion-ios-cloud-download-outline tx-purple"></i>
							<div class="media-body">
								<h1>32,604</h1>
								<p>Total downloads</p>
							</div><!-- media-body -->
						</div><!-- media -->
					</div><!-- card -->
				</div><!-- col-3 -->
				<div class="col-sm-6 col-lg-3 mg-t-10 mg-sm-t-0">
					<div class="card card-status">
						<div class="media">
							<i class="icon ion-ios-bookmarks-outline tx-teal"></i>
							<div class="media-body">
								<h1>17,583</h1>
								<p>Total bookmarks</p>
							</div><!-- media-body -->
						</div><!-- media -->
					</div><!-- card -->
				</div><!-- col-3 -->
				<div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
					<div class="card card-status">
						<div class="media">
							<i class="icon ion-ios-cloud-upload-outline tx-primary"></i>
							<div class="media-body">
								<h1>61,119</h1>
								<p>Total uploads</p>
							</div><!-- media-body -->
						</div><!-- media -->
					</div><!-- card -->
				</div><!-- col-3 -->
				<div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
					<div class="card card-status">
						<div class="media">
							<i class="icon ion-ios-analytics-outline tx-pink"></i>
							<div class="media-body">
								<h1>2,942</h1>
								<p>Total analytics</p>
							</div><!-- media-body -->
						</div><!-- media -->
					</div><!-- card -->
				</div><!-- col-3 -->
			</div><!-- row -->

			<div class="row row-xs mg-t-10">
				<div class="col-lg-8 col-xl-9">
					<div class="row row-xs">
						<div class="col-md-5 col-lg-6 col-xl-5">
							<div class="card card-activities pd-20">
								<h6 class="slim-card-title">Recent Activities</h6>
								<p>Last activity was 1 hour ago</p>

								<div class="media-list">
									<div class="media">
										<div class="activity-icon bg-primary">
											<i class="icon ion-stats-bars"></i>
										</div><!-- activity-icon -->
										<div class="media-body">
											<h6>Report has been updated</h6>
											<p>Aenean vulputate eleifend tellus. A nean leo ligula, porttitor.</p>
											<span>2 hours ago</span>
										</div><!-- media-body -->
									</div><!-- media -->
									<div class="media">
										<div class="activity-icon bg-success">
											<i class="icon ion-trophy"></i>
										</div><!-- activity-icon -->
										<div class="media-body">
											<h6>Achievement Unlocked</h6>
											<p>Aenean vulputate eleifend tellus. A nean leo ligula, porttitor.</p>
											<span>2 hours ago</span>
										</div><!-- media-body -->
									</div><!-- media -->
									<div class="media">
										<div class="activity-icon bg-purple">
											<i class="icon ion-image"></i>
										</div><!-- activity-icon -->
										<div class="media-body">
											<h6>Added new images</h6>
											<p>Aenean vulputate eleifend tellus. A nean leo ligula, porttitor.</p>
											<span>2 hours ago</span>
										</div><!-- media-body -->
									</div><!-- media -->
								</div><!-- media-list -->
							</div><!-- card -->
						</div><!-- col-5 -->
						<div class="col-md-7 col-lg-6 col-xl-7 mg-t-10 mg-md-t-0">
							<div class="dash-headline-item-one">
								<div id="chartMultiBar1" class="chart-rickshaw"></div>
								<div class="dash-item-overlay">
									<h1>$3,350</h1>
									<p class="earning-label">Today's Earnings</p>
									<p class="earning-desc">Etiam ultricies nisi vel augue. Curabitur ullamcorper
										ultricies
										nisi. Nam eget dui. Etiam rhoncus...</p>
									<a href="#" class="statement-link">View Statements <i
												class="fa fa-angle-right mg-l-5"></i></a>
								</div>
							</div><!-- dash-headline-item-one -->
						</div><!-- col-7 -->
					</div><!-- row -->
				</div><!-- col-9 -->
				<div class="col-lg-4 col-xl-3 mg-t-10 mg-lg-t-0">
					<div class="card card-people-list pd-20">
						<div class="slim-card-title">People you may know</div>
						<div class="media-list">
							<div class="media">
								<img src="http://via.placeholder.com/500x500" alt="">
								<div class="media-body">
									<a href="">Amber Heard</a>
									<p class="tx-12">Software Engineer</p>
								</div><!-- media-body -->
								<a href=""><i class="icon ion-person-add tx-20"></i></a>
							</div><!-- media -->
							<div class="media">
								<img src="http://via.placeholder.com/500x500" alt="">
								<div class="media-body">
									<a href="">Richard Salomon</a>
									<p class="tx-12">Architect</p>
								</div><!-- media-body -->
								<a href=""><i class="icon ion-person-add tx-20"></i></a>
							</div><!-- media -->
							<div class="media">
								<img src="http://via.placeholder.com/500x500" alt="">
								<div class="media-body">
									<a href="">Warren Vito</a>
									<p class="tx-12">Sales Representative</p>
								</div><!-- media-body -->
								<a href=""><i class="icon ion-person-add tx-20"></i></a>
							</div><!-- media -->
							<div class="media">
								<img src="http://via.placeholder.com/500x500" alt="">
								<div class="media-body">
									<a href="">Charlene Plateros</a>
									<p class="tx-12">Sales Representative</p>
								</div><!-- media-body -->
								<a href=""><i class="icon ion-person-add tx-20"></i></a>
							</div><!-- media -->
							<div class="media">
								<img src="http://via.placeholder.com/500x500" alt="">
								<div class="media-body">
									<a href="">Allan Palban</a>
									<p class="tx-12">Sales Representative</p>
								</div><!-- media-body -->
								<a href=""><i class="icon ion-person-add tx-20"></i></a>
							</div><!-- media -->
						</div><!-- media-list -->
					</div><!-- card -->
				</div><!-- col-3 -->
			</div><!-- row -->

			<div class="row row-xs mg-t-10">
				<div class="col-lg-6">
					<div class="card card-table">
						<div class="card-header">
							<h6 class="slim-card-title">User Transaction History</h6>
						</div><!-- card-header -->
						<div class="table-responsive">
							<table class="table mg-b-0 tx-13">
								<thead>
								<tr class="tx-10">
									<th class="wd-10p pd-y-5">&nbsp;</th>
									<th class="pd-y-5">User</th>
									<th class="pd-y-5">Type</th>
									<th class="pd-y-5">Date</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td class="pd-l-20">
										<img src="http://via.placeholder.com/500x500" class="wd-36 rounded-circle"
										     alt="Image">
									</td>
									<td>
										<a href="" class="tx-inverse tx-14 tx-medium d-block">Mark K. Peters</a>
										<span class="tx-11 d-block">TRANSID: 1234567890</span>
									</td>
									<td class="tx-12">
										<span class="square-8 bg-success mg-r-5 rounded-circle"></span> Email verified
									</td>
									<td>Just Now</td>
								</tr>
								<tr>
									<td class="pd-l-20">
										<img src="http://via.placeholder.com/500x500" class="wd-36 rounded-circle"
										     alt="Image">
									</td>
									<td>
										<a href="" class="tx-inverse tx-14 tx-medium d-block">Karmen F. Brown</a>
										<span class="tx-11 d-block">TRANSID: 1234567890</span>
									</td>
									<td class="tx-12">
										<span class="square-8 bg-warning mg-r-5 rounded-circle"></span> Pending
										verification
									</td>
									<td>Apr 21, 2017 8:34am</td>
								</tr>
								<tr>
									<td class="pd-l-20">
										<img src="http://via.placeholder.com/500x500" class="wd-36 rounded-circle"
										     alt="Image">
									</td>
									<td>
										<a href="" class="tx-inverse tx-14 tx-medium d-block">Gorgonio Magalpok</a>
										<span class="tx-11 d-block">TRANSID: 1234567890</span>
									</td>
									<td class="tx-12">
										<span class="square-8 bg-success mg-r-5 rounded-circle"></span> Purchased
										success
									</td>
									<td>Apr 10, 2017 4:40pm</td>
								</tr>
								<tr>
									<td class="pd-l-20">
										<img src="http://via.placeholder.com/500x500" class="wd-36 rounded-circle"
										     alt="Image">
									</td>
									<td>
										<a href="" class="tx-inverse tx-14 tx-medium d-block">Ariel T. Hall</a>
										<span class="tx-11 d-block">TRANSID: 1234567890</span>
									</td>
									<td class="tx-12">
										<span class="square-8 bg-warning mg-r-5 rounded-circle"></span> Payment on hold
									</td>
									<td>Apr 02, 2017 6:45pm</td>
								</tr>
								<tr>
									<td class="pd-l-20">
										<img src="http://via.placeholder.com/500x500" class="wd-36 rounded-circle"
										     alt="Image">
									</td>
									<td>
										<a href="" class="tx-inverse tx-14 tx-medium d-block">John L. Goulette</a>
										<span class="tx-11 d-block">TRANSID: 1234567890</span>
									</td>
									<td class="tx-12">
										<span class="square-8 bg-pink mg-r-5 rounded-circle"></span> Account deactivated
									</td>
									<td>Mar 30, 2017 10:30am</td>
								</tr>
								</tbody>
							</table>
						</div><!-- table-responsive -->
						<div class="card-footer tx-12 pd-y-15 bg-transparent">
							<a href=""><i class="fa fa-angle-down mg-r-5"></i>View All Transaction History</a>
						</div><!-- card-footer -->
					</div><!-- card -->
				</div><!-- col-6 -->
				<div class="col-lg-6 mg-t-10 mg-lg-t-0">
					<div class="card card-table">
						<div class="card-header">
							<h6 class="slim-card-title">Product Purchases</h6>
						</div><!-- card-header -->
						<div class="table-responsive">
							<table class="table mg-b-0 tx-13">
								<thead>
								<tr class="tx-10">
									<th class="wd-10p pd-y-5">&nbsp;</th>
									<th class="pd-y-5">Item Details</th>
									<th class="pd-y-5 tx-right">Sold</th>
									<th class="pd-y-5">Gain</th>
									<th class="pd-y-5 tx-center">Actions</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td class="pd-l-20">
										<img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
									</td>
									<td>
										<a href="" class="tx-inverse tx-14 tx-medium d-block">The Dothraki Shoes</a>
										<span class="tx-11 d-block"><span
													class="square-8 bg-danger mg-r-5 rounded-circle"></span> 20 remaining</span>
									</td>
									<td class="valign-middle tx-right">3,345</td>
									<td class="valign-middle"><span class="tx-success"><i
													class="icon ion-android-arrow-up mg-r-5"></i>33.34%</span> from last
										week
									</td>
									<td class="valign-middle tx-center">
										<a href="" class="tx-gray-600 tx-24"><i
													class="icon ion-android-more-horizontal"></i></a>
									</td>
								</tr>
								<tr>
									<td class="pd-l-20">
										<img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
									</td>
									<td>
										<a href="" class="tx-inverse tx-14 tx-medium d-block">Westeros Sneaker</a>
										<span class="tx-11 d-block"><span
													class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
									</td>
									<td class="valign-middle tx-right">720</td>
									<td class="valign-middle"><span class="tx-danger"><i
													class="icon ion-android-arrow-down mg-r-5"></i>21.20%</span> from
										last week
									</td>
									<td class="valign-middle tx-center">
										<a href="" class="tx-gray-600 tx-24"><i
													class="icon ion-android-more-horizontal"></i></a>
									</td>
								</tr>
								<tr>
									<td class="pd-l-20">
										<img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
									</td>
									<td>
										<a href="" class="tx-inverse tx-14 tx-medium d-block">Selonian Hand Bag</a>
										<span class="tx-11 d-block"><span
													class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
									</td>
									<td class="valign-middle tx-right">1,445</td>
									<td class="valign-middle"><span class="tx-success"><i
													class="icon ion-android-arrow-up mg-r-5"></i>23.34%</span> from last
										week
									</td>
									<td class="valign-middle tx-center">
										<a href="" class="tx-gray-600 tx-24"><i
													class="icon ion-android-more-horizontal"></i></a>
									</td>
								</tr>
								<tr>
									<td class="pd-l-20">
										<img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
									</td>
									<td>
										<a href="" class="tx-inverse tx-14 tx-medium d-block">Kel Dor Sunglass</a>
										<span class="tx-11 d-block"><span
													class="square-8 bg-warning mg-r-5 rounded-circle"></span> 45 remaining</span>
									</td>
									<td class="valign-middle tx-right">2,500</td>
									<td class="valign-middle"><span class="tx-success"><i
													class="icon ion-android-arrow-up mg-r-5"></i>28.78%</span> from last
										week
									</td>
									<td class="valign-middle tx-center">
										<a href="" class="tx-gray-600 tx-24"><i
													class="icon ion-android-more-horizontal"></i></a>
									</td>
								</tr>
								<tr>
									<td class="pd-l-20">
										<img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
									</td>
									<td>
										<a href="" class="tx-inverse tx-14 tx-medium d-block">Kubaz Sunglass</a>
										<span class="tx-11 d-block"><span
													class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
									</td>
									<td class="valign-middle tx-14 tx-right">223</td>
									<td class="valign-middle"><span class="tx-danger"><i
													class="icon ion-android-arrow-down mg-r-5"></i>18.18%</span> from
										last week
									</td>
									<td class="valign-middle tx-center">
										<a href="" class="tx-gray-600 tx-24"><i
													class="icon ion-android-more-horizontal"></i></a>
									</td>
								</tr>
								</tbody>
							</table>
						</div><!-- table-responsive -->
						<div class="card-footer tx-12 pd-y-15 bg-transparent">
							<a href=""><i class="fa fa-angle-down mg-r-5"></i>View All Products</a>
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

			var multibar = new Rickshaw.Graph({
				element: document.querySelector('#chartMultiBar1'),
				renderer: 'bar',
				stack: false,
				max: 60,
				series: [{
					data: [
						{x: 0, y: 20},
						{x: 1, y: 25},
						{x: 2, y: 10},
						{x: 3, y: 15},
						{x: 4, y: 20},
						{x: 5, y: 40},
						{x: 6, y: 15},
						{x: 7, y: 40},
						{x: 8, y: 25}
					],
					color: '#065381'
				},
					{
						data: [
							{x: 0, y: 10},
							{x: 1, y: 30},
							{x: 2, y: 45},
							{x: 3, y: 30},
							{x: 4, y: 42},
							{x: 5, y: 20},
							{x: 6, y: 30},
							{x: 7, y: 15},
							{x: 8, y: 20}
						],
						color: '#34B2E4'
					}]
			});

			multibar.render();

			// Responsive Mode
			new ResizeSensor($('.slim-mainpanel'), function () {
				multibar.configure({
					width: $('#chartMultiBar1').width(),
					height: $('#chartMultiBar1').height()
				});
				multibar.render();
			});

		});
	</script>
@endsection
