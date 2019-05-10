@extends('layouts.mainlayout')

@section('content')
	<div class="slim-mainpanel">
		<div class="container">
			<div class="slim-pageheader">
				<ol class="breadcrumb slim-breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">UI Elements</a></li>
					<li class="breadcrumb-item active" aria-current="page">Modal</li>
				</ol>
				<h6 class="slim-pagetitle">Modal</h6>
			</div><!-- slim-pageheader -->


			<div class="section-wrapper">
				<label class="section-title">Basic Modal</label>
				<p class="mg-b-20 mg-sm-b-40">Below is the static example of the basic modal.</p>

				<div class="modal-wrapper-demo">
					<!-- this modal is static modal for presentation purpose. -->
					<!-- class .d-block annd .pos-relative in .modal is for demo only -->
					<div class="modal d-block pos-static">
						<div class="modal-dialog" role="document">
							<div class="modal-content bd-0">
								<div class="modal-header pd-y-20 pd-x-25">
									<h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body pd-25">
									<h5 class="lh-4 mg-b-20 tx-inverse">Why We Use Electoral College, Not Popular
										Vote</h5>
									<p class="mg-b-5">It is a long established fact that a reader will be distracted by
										the readable content of a page when looking at its layout. The point of using
										Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
										opposed to using 'Content here, content here', making it look like readable
										English. </p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary">Save changes</button>
									<button type="button" class="btn btn-secondary">Close</button>
								</div>
							</div>
						</div><!-- modal-dialog -->
					</div><!-- modal -->
				</div><!-- pd-y-50 -->
				<div class="modal-footer-demo">
					<a href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldemo1">View Live Demo</a>
				</div><!-- pd-y-30 -->
			</div><!-- section-wrapper -->

			<div class="section-wrapper mg-t-20">
				<label class="section-title">Small Modal</label>
				<p class="mg-b-20 mg-sm-b-40">Below is the static example of small modal.</p>

				<div class="modal-wrapper-demo">
					<div class="modal d-block pos-static">
						<div class="modal-dialog modal-sm" role="document">
							<div class="modal-content bd-0">
								<div class="modal-header pd-x-20">
									<h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Notice</h6>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body pd-20">
									<p class="mg-b-5">It is a long established fact that a reader will be distracted by
										the readable content of a page when looking at its layout. </p>
								</div>
								<div class="modal-footer justify-content-center">
									<button type="button" class="btn btn-primary">Save changes</button>
									<button type="button" class="btn btn-secondary">Close</button>
								</div>
							</div>
						</div><!-- modal-dialog -->
					</div><!-- modal -->
				</div><!-- modal-wrapper-demo -->
				<div class="modal-footer-demo">
					<a href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldemo2">View Live Demo</a>
				</div><!-- pd-y-30 -->
			</div><!-- section-wrapper -->

			<div class="section-wrapper mg-t-20">
				<label class="section-title">Large Modal</label>
				<p class="mg-b-20 mg-sm-b-40">Below is the static example of large modal.</p>

				<div class="modal-wrapper-demo">
					<!-- this modal is static modal for presentation purpose. -->
					<!-- class .d-block annd .pos-relative in .modal is for demo only -->
					<div class="modal d-block pos-static">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header pd-y-20 pd-x-25">
									<h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body pd-25">
									<h5 class="lh-3 mg-b-20"><a href="" class="tx-inverse hover-primary">Why We Use
											Electoral College, Not Popular Vote</a></h5>
									<p class="mg-b-5">It is a long established fact that a reader will be distracted by
										the readable content of a page when looking at its layout. The point of using
										Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
										opposed to using 'Content here, content here', making it look like readable
										English. </p>
								</div><!-- modal-body -->
								<div class="modal-footer">
									<button type="button" class="btn btn-primary">Save changes</button>
									<button type="button" class="btn btn-secondary">Close</button>
								</div>
							</div>
						</div><!-- modal-dialog -->
					</div><!-- modal -->
				</div><!-- modal-wrapper-demo -->
				<div class="modal-footer-demo">
					<a href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldemo3">View Live Demo</a>
				</div><!-- pd-y-30 -->
			</div><!-- section-wrapper -->

			<div class="section-wrapper mg-t-20">
				<label class="section-title">Modal Alert Messages</label>
				<p class="mg-b-20 mg-sm-b-40">Below is the static example of modal alert messages.</p>

				<div class="modal-wrapper-demo">
					<div class="modal d-block pos-static">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body tx-center pd-y-20 pd-x-20">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<i class="icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
									<h4 class="tx-success mg-b-20">Congratulations!</h4>
									<p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum
										available, but the majority have suffered alteration.</p>
									<button type="button" class="btn btn-success pd-x-25">Continue</button>
								</div><!-- modal-body -->
							</div><!-- modal-content -->
						</div><!-- modal-dialog -->
					</div><!-- modal -->
				</div><!-- modal-wrapper-demo -->
				<div class="modal-footer-demo">
					<a href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldemo4">View Live Demo</a>
				</div><!-- modal-footer-demo -->

				<div class="modal-wrapper-demo mg-t-30">
					<div class="modal d-block pos-static">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body tx-center pd-y-20 pd-x-20">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<i class="icon icon ion-ios-close-outline tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
									<h4 class="tx-danger mg-b-20">Error: Cannot process your entry!</h4>
									<p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum
										available, but the majority have suffered alteration.</p>
									<button type="button" class="btn btn-danger pd-x-25" aria-label="Close">Continue
									</button>
								</div><!-- modal-body -->
							</div><!-- modal-content -->
						</div><!-- modal-dialog -->
					</div><!-- modal -->
				</div><!-- modal-wrapper-demo -->
				<div class="modal-footer-demo">
					<a href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldemo5">View Live Demo</a>
				</div><!-- modal-footer-demo -->
			</div><!-- section-wrapper -->

			<div class="section-wrapper mg-t-20">
				<label class="section-title">Using Grid Modal</label>
				<p class="mg-b-20 mg-sm-b-40">Below is the static example of modal that uses grid.</p>

				<div class="modal-wrapper-demo">
					<div class="modal d-block pos-static">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
								<div class="modal-body pd-0">
									<div class="row no-gutters">
										<div class="col-lg-6 bg-primary">
											<div class="pd-40">
												<h1 class="tx-white mg-b-20">slim</h1>
												<p class="tx-white op-7 mg-b-30">We work with clients big and small
													across a range of sectors and we utilise all forms of media to get
													your name out there in a way that’s right for you. We believe that
													analysis of your company and your customers is key in responding
													effectively to your promotional needs and we will work with you to
													fully understand your business to achieve the greatest amount of
													publicity possible so that you can see a return from the
													advertising.</p>
												<p class="tx-white">
													<span class="tx-uppercase tx-medium d-block mg-b-15">Our Address:</span>
													<span class="op-7">Ayala Center, Cebu Business Park, Cebu City, Cebu, Philippines 6000</span>
												</p>
											</div>
										</div><!-- col-6 -->
										<div class="col-lg-6 bg-white">
											<div class="pd-y-30 pd-xl-x-30">
												<button type="button" class="close" data-dismiss="modal"
												        aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
												<div class="pd-x-30 pd-y-10">
													<h3 class="tx-gray-800 tx-normal mg-b-5">Welcome back!</h3>
													<p>Sign in to your account to continue</p>
													<br>
													<div class="form-group">
														<input type="email" name="email" class="form-control pd-y-12"
														       placeholder="Enter your email">
													</div><!-- form-group -->
													<div class="form-group mg-b-20">
														<input type="email" name="password" class="form-control pd-y-12"
														       placeholder="Enter your password">
														<a href="" class="tx-12 d-block mg-t-10">Forgot password?</a>
													</div><!-- form-group -->

													<button class="btn btn-primary pd-y-12 btn-block">Sign In</button>

													<div class="mg-t-30 mg-b-20">Don't have an account yet? <a href="">Sign
															Up</a></div>
												</div>
											</div><!-- pd-20 -->
										</div><!-- col-6 -->
									</div><!-- row -->
								</div><!-- modal-body -->
							</div><!-- modal-content -->
						</div><!-- modal-dialog -->
					</div><!-- modal -->
				</div><!-- modal-wrapper-demo -->
				<div class="modal-footer-demo">
					<a href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldemo6">View Live Demo</a>
				</div><!-- modal-footer-demo -->
			</div><!-- section-wrapper -->

			<div class="section-wrapper mg-t-20">
				<label class="section-title">Modal Animation Effects</label>
				<p class="mg-b-20 mg-sm-b-40">Below are different kind of effects to choose from.</p>

				<div class="row">
					<div class="col-sm-6 col-md-4 col-xl-3">
						<a href="#modaldemo8" class="modal-effect btn btn-primary btn-block" data-toggle="modal"
						   data-effect="effect-scale">Scale</a>
					</div><!-- col-3 -->
					<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20 mg-sm-t-0">
						<a href="#modaldemo8" class="modal-effect btn btn-primary btn-block" data-toggle="modal"
						   data-effect="effect-slide-in-right">Slide In Right</a>
					</div><!-- col-3 -->
					<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20 mg-md-t-0">
						<a href="#modaldemo8" class="modal-effect btn btn-primary btn-block" data-toggle="modal"
						   data-effect="effect-slide-in-bottom">Slide In Bottom</a>
					</div><!-- col-3 -->
					<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20 mg-xl-t-0">
						<a href="#modaldemo8" class="modal-effect btn btn-primary btn-block" data-toggle="modal"
						   data-effect="effect-newspaper">Newspaper</a>
					</div><!-- col-3 -->
					<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
						<a href="#modaldemo8" class="modal-effect btn btn-primary btn-block" data-toggle="modal"
						   data-effect="effect-fall">Fall</a>
					</div><!-- col-3 -->
					<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
						<a href="#modaldemo8" class="modal-effect btn btn-primary btn-block" data-toggle="modal"
						   data-effect="effect-flip-horizontal">Flip Horizontal</a>
					</div><!-- col-3 -->
					<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
						<a href="#modaldemo8" class="modal-effect btn btn-primary btn-block" data-toggle="modal"
						   data-effect="effect-flip-vertical">Flip Vertical</a>
					</div><!-- col-3 -->
					<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
						<a href="#modaldemo8" class="modal-effect btn btn-primary btn-block" data-toggle="modal"
						   data-effect="effect-super-scaled">Super Scaled</a>
					</div><!-- col-3 -->
					<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
						<a href="#modaldemo8" class="modal-effect btn btn-primary btn-block" data-toggle="modal"
						   data-effect="effect-sign">Sign</a>
					</div><!-- col-3 -->
					<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
						<a href="#modaldemo8" class="modal-effect btn btn-primary btn-block" data-toggle="modal"
						   data-effect="effect-rotate-bottom">Rotate Bottom</a>
					</div><!-- col-3 -->
					<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
						<a href="#modaldemo8" class="modal-effect btn btn-primary btn-block" data-toggle="modal"
						   data-effect="effect-rotate-left">Rotate Left</a>
					</div><!-- col-3 -->
					<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
						<a href="#modaldemo8" class="modal-effect btn btn-primary btn-block" data-toggle="modal"
						   data-effect="effect-just-me">Just Me</a>
					</div><!-- col-3 -->
				</div><!-- row -->

				<p class="section-label mg-t-20 mg-sm-t-40">Class Reference</p>
				<table class="table table-reference">
					<thead>
					<tr>
						<th class="wd-40p">Class</th>
						<th class="wd-60p">Value</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td><code class="pd-0 bg-transparent">class="modal fade effect-[value]"</code></td>
						<td>scale | slide-in-right | slide-in-bottom | newspaper | fall | flip-horizontal |
							flip-vertical | super-scaled | sign | rotate-bottom | rotate-left | just-me
						</td>
					</tr>
					</tbody>
				</table>
			</div><!-- section-wrapper -->

		</div><!-- container -->
	</div><!-- slim-mainpanel -->

	<!-- BASIC MODAL -->
	<div id="modaldemo1" class="modal fade">
		<div class="modal-dialog modal-dialog-vertical-center" role="document">
			<div class="modal-content bd-0 tx-14">
				<div class="modal-header">
					<h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body pd-25">
					<h5 class="lh-3 mg-b-20"><a href="" class="tx-inverse hover-primary">Why We Use Electoral College,
							Not Popular Vote</a></h5>
					<p class="mg-b-5">It is a long established fact that a reader will be distracted by the readable
						content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
						more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
						making it look like readable English. </p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Save changes</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div><!-- modal-dialog -->
	</div><!-- modal -->

	<!-- SMALL MODAL -->
	<div id="modaldemo2" class="modal fade">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content bd-0 tx-14">
				<div class="modal-header pd-x-20">
					<h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Notice</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body pd-20">
					<p class="mg-b-5">It is a long established fact that a reader will be distracted by the readable
						content of a page when looking at its layout. </p>
				</div>
				<div class="modal-footer justify-content-center">
					<button type="button" class="btn btn-primary">Save changes</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div><!-- modal-dialog -->
	</div><!-- modal -->

	<!-- LARGE MODAL -->
	<div id="modaldemo3" class="modal fade">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content tx-size-sm">
				<div class="modal-header pd-x-20">
					<h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body pd-20">
					<h5 class=" lh-3 mg-b-20"><a href="" class="tx-inverse hover-primary">Why We Use Electoral College,
							Not Popular Vote</a></h5>
					<p class="mg-b-5">It is a long established fact that a reader will be distracted by the readable
						content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
						more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
						making it look like readable English. </p>
				</div><!-- modal-body -->
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Save changes</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div><!-- modal-dialog -->
	</div><!-- modal -->

	<!-- MODAL ALERT MESSAGE -->
	<div id="modaldemo4" class="modal fade">
		<div class="modal-dialog" role="document">
			<div class="modal-content tx-size-sm">
				<div class="modal-body tx-center pd-y-20 pd-x-20">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<i class="icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
					<h4 class="tx-success tx-semibold mg-b-20">Congratulations!</h4>
					<p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the
						majority have suffered alteration.</p>
					<button type="button" class="btn btn-success pd-x-25" data-dismiss="modal" aria-label="Close">
						Continue
					</button>
				</div><!-- modal-body -->
			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->

	<div id="modaldemo5" class="modal fade">
		<div class="modal-dialog" role="document">
			<div class="modal-content tx-size-sm">
				<div class="modal-body tx-center pd-y-20 pd-x-20">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<i class="icon icon ion-ios-close-outline tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
					<h4 class="tx-danger mg-b-20">Error: Cannot process your entry!</h4>
					<p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the
						majority have suffered alteration.</p>
					<button type="button" class="btn btn-danger pd-x-25" data-dismiss="modal" aria-label="Close">
						Continue
					</button>
				</div><!-- modal-body -->
			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->

	<!-- MODAL GRID -->
	<div id="modaldemo6" class="modal fade">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
				<div class="modal-body pd-0">
					<div class="row no-gutters">
						<div class="col-lg-6 bg-primary">
							<div class="pd-40">
								<h1 class="tx-white mg-b-20">slim</h1>
								<p class="tx-white op-7 mg-b-30">We work with clients big and small across a range of
									sectors and we utilise all forms of media to get your name out there in a way that’s
									right for you. We believe that analysis of your company and your customers is key in
									responding effectively to your promotional needs and we will work with you to fully
									understand your business to achieve the greatest amount of publicity possible so
									that you can see a return from the advertising.</p>
								<p class="tx-white">
									<span class="tx-uppercase tx-medium d-block mg-b-15">Our Address:</span>
									<span class="op-7">Ayala Center, Cebu Business Park, Cebu City, Cebu, Philippines 6000</span>
								</p>
							</div>
						</div><!-- col-6 -->
						<div class="col-lg-6 bg-white">
							<div class="pd-y-30 pd-xl-x-30">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<div class="pd-x-30 pd-y-10">
									<h3 class="tx-gray-800 tx-normal mg-b-5">Welcome back!</h3>
									<p>Sign in to your account to continue</p>
									<br>
									<div class="form-group">
										<input type="email" name="email" class="form-control pd-y-12"
										       placeholder="Enter your email">
									</div><!-- form-group -->
									<div class="form-group mg-b-20">
										<input type="email" name="password" class="form-control pd-y-12"
										       placeholder="Enter your password">
										<a href="" class="tx-12 d-block mg-t-10">Forgot password?</a>
									</div><!-- form-group -->

									<button class="btn btn-primary pd-y-12 btn-block">Sign In</button>

									<div class="mg-t-30 mg-b-20">Don't have an account yet? <a href="">Sign Up</a></div>
								</div>
							</div><!-- pd-20 -->
						</div><!-- col-6 -->
					</div><!-- row -->
				</div><!-- modal-body -->
			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->

	<!-- MODAL EFFECTS -->
	<div id="modaldemo8" class="modal fade">
		<div class="modal-dialog modal-dialog-vertical-center" role="document">
			<div class="modal-content bd-0 tx-14">
				<div class="modal-header pd-y-20 pd-x-25">
					<h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body pd-25">
					<h5 class="lh-3 mg-b-20 tx-inverse">Why We Use Electoral College, Not Popular Vote</h5>
					<p class="mg-b-5">It is a long established fact that a reader will be distracted by the readable
						content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
						more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
						making it look like readable English. </p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Save changes</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div><!-- modal-dialog -->
	</div><!-- modal -->

@endsection

@section('footerscripts')
	@parent
	<script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>

	<script>
		$(function () {

			// showing modal with effect
			$('.modal-effect').on('click', function (e) {
				e.preventDefault();
				var effect = $(this).attr('data-effect');
				$('#modaldemo8').addClass(effect);
			});

			// hide modal with effect
			$('#modaldemo8').on('hidden.bs.modal', function (e) {
				$(this).removeClass(function (index, className) {
					return (className.match(/(^|\s)effect-\S+/g) || []).join(' ');
				});
			});
		});
	</script>

@endsection
