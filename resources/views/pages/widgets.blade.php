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
					<li class="breadcrumb-item active" aria-current="page">Widgets</li>
				</ol>
				<h6 class="slim-pagetitle">Widgets</h6>
			</div><!-- slim-pageheader -->

			<div class="row row-sm">
				<div class="col-lg-4">
					<div class="card card-sales">
						<h6 class="slim-card-title tx-primary">Sales Report</h6>
						<div class="row">
							<div class="col">
								<label class="tx-12">Today</label>
								<p>1,898</p>
							</div><!-- col -->
							<div class="col">
								<label class="tx-12">This Week</label>
								<p>32,112</p>
							</div><!-- col -->
							<div class="col">
								<label class="tx-12">This Month</label>
								<p>72,067</p>
							</div><!-- col -->
						</div><!-- row -->

						<div class="progress mg-b-5">
							<div class="progress-bar bg-primary wd-50p" role="progressbar" aria-valuenow="50"
							     aria-valuemin="0" aria-valuemax="100">50%
							</div>
						</div>
						<p class="tx-12 mg-b-0">Maecenas tempus, tellus eget conditum rhon.</p>
					</div><!-- card -->
				</div><!-- col-4 -->
				<div class="col-lg-4 mg-t-20 mg-lg-t-0">
					<div class="card card-sales">
						<h6 class="slim-card-title tx-success">Sales Report</h6>
						<div class="row">
							<div class="col">
								<label class="tx-12">Today</label>
								<p>1,263</p>
							</div><!-- col -->
							<div class="col">
								<label class="tx-12">This Week</label>
								<p>28,767</p>
							</div><!-- col -->
							<div class="col">
								<label class="tx-12">This Month</label>
								<p>68,324</p>
							</div><!-- col -->
						</div><!-- row -->

						<div class="progress mg-b-5">
							<div class="progress-bar bg-success wd-75p" role="progressbar" aria-valuenow="75"
							     aria-valuemin="0" aria-valuemax="100">75%
							</div>
						</div>
						<p class="tx-12 mg-b-0">Maecenas tempus, tellus eget conditum rhon.</p>
					</div><!-- card -->
				</div><!-- col-4 -->
				<div class="col-lg-4 mg-t-20 mg-lg-t-0">
					<div class="card card-sales">
						<h6 class="slim-card-title tx-danger">Sales Report</h6>
						<div class="row">
							<div class="col">
								<label class="tx-12">Today</label>
								<p>1,263</p>
							</div><!-- col -->
							<div class="col">
								<label class="tx-12">This Week</label>
								<p>28,767</p>
							</div><!-- col -->
							<div class="col">
								<label class="tx-12">This Month</label>
								<p>68,324</p>
							</div><!-- col -->
						</div><!-- row -->

						<div class="progress mg-b-5">
							<div class="progress-bar bg-danger wd-35p" role="progressbar" aria-valuenow="35"
							     aria-valuemin="0" aria-valuemax="100">35%
							</div>
						</div>
						<p class="tx-12 mg-b-0">Maecenas tempus, tellus eget conditum rhon.</p>
					</div><!-- card -->
				</div><!-- col-4 -->
			</div><!-- row -->

			<div class="row row-sm mg-t-20">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body pd-b-0">
							<h6 class="slim-card-title tx-purple">Page Impressions</h6>
							<h2 class="tx-lato tx-inverse">323,360</h2>
							<p class="tx-12"><span class="tx-purple">2.5%</span> change from yesterday</p>
						</div><!-- card-body -->
						<div id="rs1" class="ht-50 ht-sm-70 mg-r--1"></div>
					</div><!-- card -->
				</div><!-- col-4 -->
				<div class="col-lg-4 mg-t-20 mg-lg-t-0">
					<div class="card">
						<div class="card-body pd-b-0">
							<h6 class="slim-card-title tx-info">Page Impressions</h6>
							<h2 class="tx-lato tx-inverse">598,486</h2>
							<p class="tx-12"><span class="tx-info">2.5%</span> change from yesterday</p>
						</div><!-- card-body -->
						<div id="rs2" class="ht-50 ht-sm-70 mg-r--1"></div>
					</div><!-- card -->
				</div><!-- col-4 -->
				<div class="col-lg-4 mg-t-20 mg-lg-t-0">
					<div class="card">
						<div class="card-body pd-b-0">
							<h6 class="slim-card-title tx-primary">Page Impressions</h6>
							<h2 class="tx-lato tx-inverse">323,360</h2>
							<p class="tx-12"><span class="tx-primary">2.5%</span> change from yesterday</p>
						</div><!-- card-body -->
						<div id="rs3" class="ht-50 ht-sm-70 mg-r--1"></div>
					</div><!-- card -->
				</div><!-- col-4 -->
			</div><!-- row -->

			<div class="card-deck card-deck-sm mg-t-20 mg-x-0">
				<div class="card tx-center">
					<div class="card-body pd-40">
						<div class="d-flex justify-content-center mg-b-30">
							<img src="{{asset('assets/img/icon1.svg')}}" class="wd-100" alt="">
						</div>
						<h6 class="tx-md-20 tx-inverse mg-b-20">Document Management</h6>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Even
							the all-powerful Pointing has no control about the blind texts.</p>
						<a href="" class="btn btn-primary btn-block">Getting Started</a>
					</div><!-- card -->
				</div><!-- card -->
				<div class="card tx-center">
					<div class="card-body pd-40">
						<div class="d-flex justify-content-center mg-b-30">
							<img src="{{asset('assets/img/icon2.svg')}}" class="wd-100" alt="">
						</div>
						<h6 class="tx-md-20 tx-inverse mg-b-20">Time Management</h6>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Even
							the all-powerful Pointing has no control about the blind texts.</p>
						<a href="" class="btn btn-primary btn-block">Take a Tour</a>
					</div><!-- card-body -->
				</div><!-- card -->
				<div class="card card-recent-messages">
					<div class="card-header">
						<span>Recent Messages</span>
						<a href=""><i class="icon ion-more"></i></a>
					</div><!-- card-header -->
					<div class="list-group list-group-flush">
						<div class="list-group-item">
							<div class="media">
								<img src="http://via.placeholder.com/500x500" alt="">
								<div class="media-body">
									<h6>Katherine Lumaad</h6>
									<p>an hour ago</p>
								</div><!-- media-body -->
							</div><!-- media -->
							<p class="msg">The European languages are members of the same family. Their separate
								existence is a myth...</p>
						</div><!-- list-group-item -->
						<div class="list-group-item">
							<div class="media">
								<img src="http://via.placeholder.com/500x500" alt="">
								<div class="media-body">
									<h6>Mary Grace Ceballos</h6>
									<p>2 hours ago</p>
								</div><!-- media-body -->
							</div><!-- media -->
							<p class="msg">The European languages are members of the same family. Their separate
								existence is a myth...</p>
						</div><!-- list-group-item -->
						<div class="list-group-item">
							<div class="media">
								<img src="http://via.placeholder.com/500x500" alt="">
								<div class="media-body">
									<h6>Rowella Sombrio</h6>
									<p>3 hours ago</p>
								</div><!-- media-body -->
							</div><!-- media -->
							<p class="msg">The European languages are members of the same family. Their separate
								existence is a myth...</p>
						</div><!-- list-group-item -->
					</div><!-- list-group -->
					<div class="card-footer">
						<a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show all messages</a>
					</div><!-- card-footer -->
				</div><!-- card -->
			</div><!-- card-deck -->

			<div class="card-columns mg-t-20">
				<div class="card card-map-widget">
					<div id="map1"></div>
					<div class="card-body">
						<h6>ThemePixels, Inc.</h6>
						<p>4975 Cambridge Road Miami Gardens, FL 33056B</p>
						<p><abbr title="Phone">P:</abbr> (123) 456-7890</p>

						<div class="btn-wrapper">
							<a href="" class="btn btn-primary"><i class="fa fa-phone mg-r-5"></i>Call</a>
							<a href="" class="btn btn-primary mg-l-1"><i class="fa fa-envelope mg-r-5"></i>Email</a>
							<a href="" class="btn btn-success mg-l-auto"><i class="fa fa-star"></i>4.3</a>
						</div><!-- btn-wrapper -->
					</div><!-- card-body -->
				</div><!-- card -->

				<div class="card card-body pd-25">
					<h6 class="slim-card-title">Get Connected</h6>
					<p>Just select any of your available social account to get started.</p>
					<div class="tx-20">
						<a href="" class="tx-primary mg-r-5"><i class="fa fa-facebook"></i></a>
						<a href="" class="tx-info mg-r-5"><i class="fa fa-twitter"></i></a>
						<a href="" class="tx-danger mg-r-5"><i class="fa fa-google-plus"></i></a>
						<a href="" class="tx-danger mg-r-5"><i class="fa fa-pinterest"></i></a>
						<a href="" class="tx-inverse mg-r-5"><i class="fa fa-github"></i></a>
						<a href="" class="tx-pink mg-r-5"><i class="fa fa-instagram"></i></a>
					</div>
				</div><!-- card -->

				<div class="card card-body pd-25">
					<h6 class="slim-card-title mg-b-20">Quick Contact Form</h6>
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Enter your name">
					</div><!-- form-group -->
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Enter your email">
					</div><!-- form-group -->
					<div class="form-group">
						<textarea name="name" class="form-control" rows="2" placeholder="Enter your message"></textarea>
					</div><!-- form-group -->
					<button class="btn btn-primary btn-block">Send Message</button>
				</div><!-- card -->

				<div class="card card-people-list">
					<div class="slim-card-title">People also viewed</div>
					<div class="media-list">
						<div class="media">
							<img src="http://via.placeholder.com/500x500" alt="">
							<div class="media-body">
								<a href="">Adrian Monino</a>
								<p>Software Engineer</p>
							</div><!-- media-body -->
						</div><!-- media -->
						<div class="media">
							<img src="http://via.placeholder.com/500x500" alt="">
							<div class="media-body">
								<a href="">Rolando Paloso</a>
								<p>Architect</p>
							</div><!-- media-body -->
						</div><!-- media -->
						<div class="media">
							<img src="http://via.placeholder.com/500x500" alt="">
							<div class="media-body">
								<a href="">Joyce Chua</a>
								<p>Sales Representative</p>
							</div><!-- media-body -->
						</div><!-- media -->
						<div class="media">
							<img src="http://via.placeholder.com/500x500" alt="">
							<div class="media-body">
								<a href="">Annalyn Mercado</a>
								<p>Sales Representative</p>
							</div><!-- media-body -->
						</div><!-- media -->
						<div class="media">
							<img src="http://via.placeholder.com/500x500" alt="">
							<div class="media-body">
								<a href="">Maricel Pasilbas</a>
								<p>Sales Representative</p>
							</div><!-- media-body -->
						</div><!-- media -->
					</div><!-- media-list -->
				</div><!-- card -->

				<div class="card card-profile">
					<div class="card-body">
						<a href=""><img src="http://via.placeholder.com/500x500" alt=""></a>
						<h4 class="profile-name">Owen Bongcaras</h4>
						<p class="mg-b-20">Software Engineer</p>
						<p class="mg-b-20">Believer, Happiness Seeker, I hate it when I'm about to hug someone really
							sexy, but my face hits the mirror. </p>
						<p class="profile-links">
							<a href="" class="tx-primary"><i class="fa fa-facebook-official"></i></a>
							<a href="" class="tx-info"><i class="fa fa-twitter"></i></a>
							<a href="" class="tx-danger"><i class="fa fa-pinterest"></i></a>
						</p>
						<a href="" class="btn btn-primary btn-block">Follow</a>
					</div><!-- card-body -->
				</div><!-- card -->

				<div class="card card-recommendation">
					<div class="card-body pd-25">
						<div class="slim-card-title">Recommendations</div>
						<div class="media align-items-center mg-y-25">
							<img src="http://via.placeholder.com/500x500" class="wd-40 rounded-circle" alt="">
							<div class="media-body mg-l-15">
								<h6 class="tx-14 mg-b-2"><a href="">Rolando Paloso</a></h6>
								<p class="mg-b-0">Head Architect</p>
							</div><!-- media-body -->
						</div><!-- media -->

						<p class="tx-13">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
							eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
							nascetur ridiculus mus.</p>
						<p class="tx-13 mg-b-0">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
							Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate
							eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
					</div><!-- card-body -->
				</div><!-- card -->

				<div class="card card-people-list">
					<div class="slim-card-title">People you may know</div>
					<div class="media-list">
						<div class="media">
							<img src="http://via.placeholder.com/500x500" alt="">
							<div class="media-body">
								<a href="">Amber Heard</a>
								<p>Software Engineer</p>
							</div><!-- media-body -->
							<a href=""><i class="icon ion-person-add tx-20"></i></a>
						</div><!-- media -->
						<div class="media">
							<img src="http://via.placeholder.com/500x500" alt="">
							<div class="media-body">
								<a href="">Richard Salomon</a>
								<p>Architect</p>
							</div><!-- media-body -->
							<a href=""><i class="icon ion-person-add tx-20"></i></a>
						</div><!-- media -->
						<div class="media">
							<img src="http://via.placeholder.com/500x500" alt="">
							<div class="media-body">
								<a href="">Warren Vito</a>
								<p>Sales Representative</p>
							</div><!-- media-body -->
							<a href=""><i class="icon ion-person-add tx-20"></i></a>
						</div><!-- media -->
						<div class="media">
							<img src="http://via.placeholder.com/500x500" alt="">
							<div class="media-body">
								<a href="">Charlene Plateros</a>
								<p>Sales Representative</p>
							</div><!-- media-body -->
							<a href=""><i class="icon ion-person-add tx-20"></i></a>
						</div><!-- media -->
						<div class="media">
							<img src="http://via.placeholder.com/500x500" alt="">
							<div class="media-body">
								<a href="">Allan Palban</a>
								<p>Sales Representative</p>
							</div><!-- media-body -->
							<a href=""><i class="icon ion-person-add tx-20"></i></a>
						</div><!-- media -->
					</div><!-- media-list -->
				</div><!-- card -->

				<div class="card card-body pd-25">
					<h6 class="slim-card-title mg-b-20">Most Visited</h6>
					<div class="mg-b-25">
						<span class="peity-donut"
						      data-peity='{ "fill": ["#663090","#EC1778","#5B93D3"], "height": 200, "width": 300 }'>10,5,4</span>
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

				<div class="card card-carousel">
					<div id="carousel2" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel2" data-slide-to="0" class="active"></li>
							<li data-target="#carousel2" data-slide-to="1"></li>
							<li data-target="#carousel2" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<div class="carousel-item-wrapper bg-primary">
									<div class="carousel-item-option">
										<a href=""><i class="icon ion-edit tx-16"></i></a>
										<a href=""><i class="icon ion-stats-bars tx-20"></i></a>
										<a href=""><i class="icon ion-gear-a tx-20"></i></a>
										<a href=""><i class="icon ion-more tx-20"></i></a>
									</div>
									<div>
										<p class="carousel-item-label">Recent Article</p>
										<h5 class="carousel-item-title">20 Best Travel Tips After 5 Years Of Traveling
											The World</h5>
										<nav class="nav flex-row">
											<a href="">12K+ Views</a>
											<a href="">234 Shares</a>
											<a href="">43 Comments</a>
										</nav>
									</div>
								</div><!-- carousel-item-wrapper -->
							</div>
							<div class="carousel-item">
								<div class="carousel-item-wrapper bg-danger">
									<div class="carousel-item-option">
										<a href=""><i class="icon ion-edit tx-16"></i></a>
										<a href=""><i class="icon ion-stats-bars tx-20"></i></a>
										<a href=""><i class="icon ion-gear-a tx-20"></i></a>
										<a href=""><i class="icon ion-more tx-20"></i></a>
									</div>
									<div>
										<p class="carousel-item-label">Recent Article</p>
										<h5 class="carousel-item-title">How I Flew Around the World in Business Class
											for $1,340</h5>
										<nav class="nav flex-row">
											<a href="">Edit</a>
											<a href="">Unpublish</a>
											<a href="">Delete</a>
										</nav>
									</div>
								</div><!-- d-flex -->
							</div>
							<div class="carousel-item">
								<div class="carousel-item-wrapper bg-purple">
									<div class="carousel-item-option">
										<a href=""><i class="icon ion-edit tx-16"></i></a>
										<a href=""><i class="icon ion-stats-bars tx-20"></i></a>
										<a href=""><i class="icon ion-gear-a tx-20"></i></a>
										<a href=""><i class="icon ion-more tx-20"></i></a>
									</div>
									<div>
										<p class="carousel-item-label">Recent Article</p>
										<h5 class="carousel-item-title">10 Reasons Why Travel Makes You a Happier
											Person</h5>
										<nav class="nav flex-row">
											<a href="">Edit</a>
											<a href="">Unpublish</a>
											<a href="">Delete</a>
										</nav>
									</div>
								</div><!-- d-flex -->
							</div>
						</div><!-- carousel-inner -->
					</div><!-- carousel -->
				</div><!-- card -->

				<div class="card card-blog">
					<figure class="card-item-img bg-mantle">
						<img class="img-fluid" src="http://via.placeholder.com/1000x667" alt="Image">
					</figure>
					<div class="card-body">
						<p class="blog-category">Finance</p>
						<h5 class="blog-title"><a href="">Your Finances Don't Have to Be Perfect to Work</a></h5>
						<p class="blog-text">It is a long established fact that a reader will be distracted by the
							readable content of a page when looking at its layout.</p>
						<p class="blog-links">
							<a href="">12 Likes</a>
							<a href="">23 Comments</a>
							<a href=""><i class="icon ion-more"></i></a>
						</p>
					</div><!-- card-body -->
				</div><!-- card -->

				<div class="card-contact mg-b-20">
					<div class="tx-center">
						<a href=""><img src="http://via.placeholder.com/500x500" class="card-img" alt=""></a>
						<h5 class="mg-t-10 mg-b-5"><a href="" class="contact-name">Maricel Villalon</a></h5>
						<p>Product Director</p>
						<p class="contact-social">
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-google"></i></a>
						</p>
					</div><!-- tx-center -->

					<p class="contact-item">
						<span>Phone:</span>
						<span>+1 012 3456 789</span>
					</p><!-- contact-item -->
					<p class="contact-item">
						<span>Email:</span>
						<a href="">person1@domain.com</a>
					</p><!-- contact-item -->
					<p class="contact-item">
						<span>URL:</span>
						<a href="">http://thmpxls.me</a>
					</p><!-- contact-item -->
				</div><!-- card -->

				<div class="card card-activities">
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

				<div class="card card-todo">
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
					</div><!-- todo-list -->
				</div><!-- card -->


				<div class="card card-body pd-25 tx-center">
					<div class="card-icon-wrapper success">
						<i class="icon ion-ios-paper-outline"></i>
					</div><!-- icon-wrapper -->
					<h4 class="tx-gray-800 mg-b-25">Knowledge Base</h4>
					<p class="mg-b-25">Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus
						viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
					<a href="" class="btn btn-success btn-block">Browse Articles</a>
				</div><!-- card -->

				<div class="card card-quick-post">
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

			</div><!-- card-columns -->

			<div class="card-columns column-count-2">
				<div class="card card-table">
					<div class="card-header">
						<h6 class="slim-card-title">User Transaction History</h6>
					</div><!-- card-header -->
					<div class="table-responsive">
						<table class="table mg-b-0 tx-12">
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
									<span class="square-8 bg-warning mg-r-5 rounded-circle"></span> Pending verification
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
									<span class="square-8 bg-success mg-r-5 rounded-circle"></span> Purchased success
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
				<div class="card card-table">
					<div class="card-header">
						<h6 class="slim-card-title">Product Purchases</h6>
					</div><!-- card-header -->
					<div class="table-responsive">
						<table class="table mg-b-0 tx-12">
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
												class="icon ion-android-arrow-down mg-r-5"></i>21.20%</span> from last
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
												class="icon ion-android-arrow-down mg-r-5"></i>18.18%</span> from last
									week
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

				<div class="card card-blog-split">
					<div class="row no-gutters flex-row-reverse">
						<div class="col-md-5 col-lg-6 col-xl-5">
							<figure>
								<img src="http://via.placeholder.com/500x334" class="img-fit-cover" alt="">
							</figure>
						</div><!-- col-md-5 -->
						<div class="col-md-7 col-lg-6 col-xl-7">
							<p class="blog-category tx-success">Science</p>
							<h5 class="blog-title"><a href="">Five Actual Facts About the Science of Dreams</a></h5>
							<p class="blog-text">It is a long established fact that a reader will be distracted by the
								readable content of a page when looking at its layout. Nascetur ridiculus mus. Donec
								quam felis, ultricies nec...</p>
							<span class="blog-date">Mar 11, 2017, 2:30pm</span>
						</div><!-- col-md-7 -->
					</div><!-- row -->
				</div><!-- card -->

				<div class="card card-blog-split">
					<div class="row no-gutters">
						<div class="col-md-5 col-lg-6 col-xl-5">
							<figure>
								<img src="http://via.placeholder.com/1000x667" class="img-fit-cover" alt="">
							</figure>
						</div><!-- col-4 -->
						<div class="col-md-7 col-lg-6 col-xl-7">
							<p class="blog-category tx-danger">History</p>
							<h5 class="blog-title"><a href="">17 Brilliant Short Novels You Can Read in a Sitting</a>
							</h5>
							<p class="blog-text">It is a long established fact that a reader will be distracted by the
								readable content of a page when looking at its layout. Nascetur ridiculus mus. Donec
								quam felis, ultricies nec...</p>
							<span class="blog-date">Mar 11, 2017, 11:30am</span>
						</div><!-- col-8 -->
					</div><!-- row -->
				</div><!-- card -->

				<div class="card card-blog-overlay">
					<img class="img-fit-cover" src="http://via.placeholder.com/1000x667" alt="Image">
					<div class="blog-content-wrapper">
						<div class="blog-content">
							<p class="blog-category tx-primary">Travel</p>
							<h3 class="blog-title"><a href="">The Difference Between Streets, Boulevards, Avenues, and
									Other Roads</a></h3>
						</div><!-- blog-content -->
					</div><!-- blog-content -->

					<div class="card-footer">
						<span class="mg-r-5">Mar 25, 2017</span>
						<a href="" class="mg-r-10"><i class="fa fa-heart-o mg-r-5"></i> 23 Likes</a>
						<a href=""><i class="fa fa-comment-o mg-r-5"></i> 4 Comments</a>
						<span>By: <a href="" class="tx-white-8 hover-white">Katherine Pechon</a></span>
					</div><!-- pos-absolute-bottom -->
				</div><!-- card -->

				<div class="card">
					<div class="card-body pd-30">
						<h6 class="slim-card-title">Payment Information</h6>
						<div class="form-group mg-t-20">
							<label class="form-control-label mg-r-10">Pay using your:</label>
							<label class="rdiobox d-inline-block">
								<input name="radio" type="radio" checked>
								<span>Credit/Debit Card</span>
							</label>
							<label class="rdiobox d-inline-block mg-xs-l-20">
								<input name="radio" type="radio">
								<span>Paypal</span>
							</label>
						</div><!-- form-group -->

						<p class="tx-32">
							<i class="fa fa-cc-visa mg-r-5"></i>
							<i class="fa fa-cc-mastercard mg-r-5"></i>
							<i class="fa fa-cc-discover"></i>
						</p>

						<div class="form-group">
							<label class="form-control-label">Card Number</label>
							<input type="text" name="cardno" class="form-control">
						</div><!-- form-group -->

						<div class="form-group">
							<label class="form-control-label">Name on Card</label>
							<input type="text" name="cardname" class="form-control">
						</div><!-- form-group -->

						<div class="row">
							<div class="col-sm-5">
								<div class="form-group">
									<label class="form-control-label">Card Expiry</label>
									<div class="row">
										<div class="col">
											<input type="text" name="cardmonth" placeholder="MM" class="form-control">
										</div>
										<div class="col">
											<input type="text" name="cardyear" placeholder="YY" class="form-control">
										</div>
									</div>
								</div><!-- form-group -->
							</div><!-- col-5 -->
							<div class="col-sm-4">
								<div class="form-group">
									<label class="form-control-label">CVV </label>
									<input type="text" name="cardno" class="form-control">
								</div><!-- form-group -->
							</div><!-- col-4 -->
						</div><!-- row -->

						<p class="mg-t-25">
							<label class="ckbox">
								<input type="checkbox" checked>
								<span>I have read and accept the terms of use on this website.</span>
							</label>
						</p>

						<div class="mg-t-30">
							<button class="btn btn-primary pd-x-20">Submit</button>
							<button class="btn btn-secondary pd-x-20">Cancel</button>
						</div>
					</div><!-- card-body -->
				</div><!-- card -->

				<div class="card">
					<div class="card-body pd-30">
						<h6 class="slim-card-title">Shipping Information</h6>
						<p class="mg-b-40">Returning customer? <a href="">Login</a></p>

						<div class="form-group">
							<div class="row row-sm">
								<div class="col-sm">
									<input type="text" name="lastname" class="form-control" placeholder="First Name">
								</div><!-- col -->
								<div class="col-sm mg-t-20 mg-sm-t-0">
									<input type="text" name="lastname" class="form-control" placeholder="Last Name">
								</div><!-- col -->
							</div><!-- row -->
						</div><!-- form-group -->
						<div class="form-group">
							<textarea class="form-control" rows="3"
							          placeholder="Enter address (Apartment name, Suite no. Street name)"></textarea>
						</div><!-- form-group -->
						<div class="form-group">
							<div class="row row-sm">
								<div class="col-sm">
									<input type="text" name="town" class="form-control" placeholder="Town/City">
								</div><!-- col -->
								<div class="col-sm mg-t-20 mg-sm-t-0">
									<input type="text" name="state" class="form-control" placeholder="State/Province">
								</div><!-- col -->
							</div><!-- row -->
						</div><!-- form-group -->
						<div class="form-group">
							<div class="row row-sm">
								<div class="col-sm">
									<input type="text" name="zip" class="form-control" placeholder="Enter zip code">
								</div><!-- col -->
								<div class="col-sm mg-t-20 mg-sm-t-0">
									<input type="text" name="country" class="form-control" placeholder="Enter Country">
								</div><!-- col -->
							</div><!-- row -->
						</div><!-- form-group -->
						<div class="form-group">
							<div class="row row-sm">
								<div class="col-sm">
									<input type="text" name="phone" class="form-control" placeholder="Phone number">
								</div><!-- col -->
								<div class="col-sm mg-t-20 mg-sm-t-0">
									<input type="text" name="email" class="form-control" placeholder="Email address">
								</div><!-- col -->
							</div><!-- row -->
						</div><!-- form-group -->
						<div class="form-group mg-t-30 mg-b-25">
							<label class="ckbox">
								<input type="checkbox" checked>
								<span class="tx-13">Billing address is the same with the shipping address</span>
							</label>
						</div><!-- form-group -->

						<button class="btn btn-primary pd-x-20">Submit</button>
						<button class="btn btn-secondary pd-x-20">Cancel</button>
					</div><!-- card-body -->
				</div><!-- card -->

			</div><!-- card-columns -->

		</div><!-- container -->
	</div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
	<script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
	<script src="{{asset('assets/lib/moment/js/moment.js')}}"></script>
	<script src="{{asset('assets/lib/d3/js/d3.js')}}"></script>
	<script src="{{asset('assets/lib/rickshaw/js/rickshaw.min.js')}}"></script>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyAEt_DBLTknLexNbTVwbXyq2HSf2UbRBU8"></script>
	<script src="{{asset('assets/lib/gmaps/js/gmaps.js')}}"></script>
	<script src="{{asset('assets/lib/peity/js/jquery.peity.js')}}"></script>
	<script src="{{asset('assets/js/ResizeSensor.js')}}"></script>
	<script src="{{asset('assets/js/widgets.js')}}"></script>
@endsection
