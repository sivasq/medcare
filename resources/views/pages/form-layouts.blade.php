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
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
          </ol>
          <h6 class="slim-pagetitle">Form Layouts</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Top Label Layout</label>
          <p class="mg-b-20 mg-sm-b-40">A form with a label on top of each form control.</p>

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="firstname" value="John Paul" placeholder="Enter firstname">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="lastname" value="McDoe" placeholder="Enter lastname">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="email" value="johnpaul@yourdomain.com" placeholder="Enter email address">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-8">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Mail Address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="address" value="Market St. San Francisco" placeholder="Enter address">
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Country: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country">
                    <option label="Choose country"></option>
                    <option value="USA">United States of America</option>
                    <option value="UK">United Kingdom</option>
                    <option value="China">China</option>
                    <option value="Japan">Japan</option>
                  </select>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-primary bd-0">Submit Form</button>
              <button class="btn btn-secondary bd-0">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Bordered Form Group Wrapper</label>
          <p class="mg-b-20 mg-sm-b-40">A bordered form group wrapper with a label on top of each form control.</p>

          <div class="form-layout form-layout-2">
            <div class="row no-gutters">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="firstname" value="John Paul" placeholder="Enter firstname">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-4 mg-t--1 mg-md-t-0">
                <div class="form-group mg-md-l--1">
                  <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="lastname" value="McDoe" placeholder="Enter lastname">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-4 mg-t--1 mg-md-t-0">
                <div class="form-group mg-md-l--1">
                  <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="email" value="johnpaul@yourdomain.com" placeholder="Enter email address">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-8">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">Mail address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="address" value="Market St., San Francisco" placeholder="Enter address">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label mg-b-0-force">Country: <span class="tx-danger">*</span></label>
                  <select id="select2-a" class="form-control" data-placeholder="Choose country">
                    <option label="Choose country"></option>
                    <option value="USA" selected>United States of America</option>
                    <option value="UK">United Kingdom</option>
                    <option value="China">China</option>
                    <option value="Japan">Japan</option>
                  </select>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->
            <div class="form-layout-footer bd pd-20 bd-t-0">
              <button class="btn btn-primary bd-0">Submit Form</button>
              <button class="btn btn-secondary bd-0">Cancel</button>
            </div><!-- form-group -->
          </div><!-- form-layout -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Placeholder as Label</label>
          <p class="mg-b-20 mg-sm-b-40">A bordered form group wrapper but the label is in field of the form control.</p>

          <div class="form-layout form-layout-3">
            <div class="row no-gutters">
              <div class="col-md-4">
                <div class="form-group">
                  <input class="form-control" type="text" name="firstname" placeholder="Enter firstname (required)">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-4 mg-t--1 mg-md-t-0">
                <div class="form-group mg-md-l--1">
                  <input class="form-control" type="text" name="lastname" placeholder="Enter lastname (required)">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-4 mg-t--1 mg-md-t-0">
                <div class="form-group mg-md-l--1">
                  <input class="form-control" type="text" name="email" placeholder="Enter email address">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-8">
                <div class="form-group bd-t-0-force">
                  <input class="form-control" type="text" name="address" placeholder="Enter address">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <select id="select2-b" class="form-control" data-placeholder="Choose country">
                    <option label="Choose country"></option>
                    <option value="USA">United States of America</option>
                    <option value="UK">United Kingdom</option>
                    <option value="China">China</option>
                    <option value="Japan">Japan</option>
                  </select>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->
            <div class="form-layout-footer bd pd-20 bd-t-0">
              <button class="btn btn-primary bd-0">Submit Form</button>
              <button class="btn btn-secondary bd-0">Cancel</button>
            </div><!-- form-group -->
          </div><!-- form-layout -->
        </div><!-- section-wrapper -->

        <div class="row row-sm mg-t-20">
          <div class="col-lg-6">
            <div class="section-wrapper">
              <label class="section-title">Left Label Alignment</label>
              <p class="mg-b-20 mg-sm-b-40">A basic form where labels are aligned in left.</p>

              <div class="form-layout form-layout-4">
                <div class="row">
                  <label class="col-sm-4 form-control-label">Firstname: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Enter firstname">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Lastname: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Enter lastname">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Email: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Enter email address">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Address: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <textarea rows="2" class="form-control" placeholder="Enter your address"></textarea>
                  </div>
                </div>
                <div class="form-layout-footer mg-t-30">
                  <button class="btn btn-primary bd-0">Submit Form</button>
                  <button class="btn btn-secondary bd-0">Cancel</button>
                </div><!-- form-layout-footer -->
              </div><!-- form-layout -->
            </div><!-- section-wrapper -->
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <div class="section-wrapper">
              <label class="section-title">Right Label Alignment</label>
              <p class="mg-b-20 mg-sm-b-40">A basic form where labels are aligned in right.</p>
              <div class="form-layout form-layout-5">
                <div class="row">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Firstname:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Enter firstname">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Lastname:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Enter lastname">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Email:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Enter email address">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Address:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <textarea rows="2" class="form-control" placeholder="Enter your address"></textarea>
                  </div>
                </div><!-- row -->
                <div class="row mg-t-30">
                  <div class="col-sm-8 mg-l-auto">
                    <div class="form-layout-footer">
                      <button class="btn btn-primary bd-0">Submit Form</button>
                      <button class="btn btn-secondary bd-0">Cancel</button>
                    </div><!-- form-layout-footer -->
                  </div><!-- col-8 -->
                </div>
              </div><!-- form-layout -->
            </div><!-- section-wrapper -->
          </div><!-- col-6 -->
        </div><!-- row -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Bordered Left Label Alignment</label>
          <p class="mg-b-20 mg-sm-b-40">A basic form where labels are aligned in left with bordered wrapper.</p>

          <div class="form-layout form-layout-6">
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                Firstname:
              </div><!-- col-4 -->
              <div class="col-7 col-sm-8">
                <input class="form-control" type="text" name="fullname" placeholder="Enter your fullname">
              </div><!-- col-8 -->
            </div><!-- row -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                Email Address:
              </div><!-- col-4 -->
              <div class="col-7 col-sm-8">
                <input class="form-control" type="text" name="firstname" placeholder="Enter your email address">
              </div><!-- col-8 -->
            </div><!-- row -->
          </div><!-- form-layout -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Bordered Right Label Alignment</label>
          <p class="mg-b-20 mg-sm-b-40">A basic form where labels are aligned in right with bordered wrapper.</p>

          <div class="form-layout form-layout-7">
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                Firstname:
              </div><!-- col-4 -->
              <div class="col-7 col-sm-8">
                <input class="form-control" type="text" name="fullname" placeholder="Enter your fullname">
              </div><!-- col-8 -->
            </div><!-- row -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                Email Address:
              </div><!-- col-4 -->
              <div class="col-7 col-sm-8">
                <input class="form-control" type="text" name="firstname" placeholder="Enter your email address">
              </div><!-- col-8 -->
            </div><!-- row -->
          </div><!-- form-layout -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Center &amp; Right Form Alignment</label>
          <p class="mg-b-20 mg-sm-b-40">An inline form that is centered align and right aligned.</p>

          <div class="d-flex align-items-center justify-content-center bg-gray-100 ht-md-80 bd pd-x-20">
            <div class="d-md-flex pd-y-20 pd-md-y-0">
              <input type="text" class="form-control" placeholder="Email address">
              <input type="password" class="form-control mg-md-l-10 mg-t-10 mg-md-t-0" placeholder="Password">
              <button class="btn btn-primary pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0">Sign In</button>
            </div>
          </div><!-- d-flex -->

          <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
            <div class="d-md-flex pd-y-20 pd-md-y-0">
              <input type="text" class="form-control" placeholder="Email address">
              <input type="password" class="form-control mg-md-l-10 mg-t-10 mg-md-t-0" placeholder="Password">
              <button class="btn btn-primary pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0">Sign In</button>
            </div>
          </div><!-- d-flex -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Form Inside Card</label>
          <p class="mg-b-20 mg-sm-b-40">A form that is inside the card.</p>

          <div class="form-card-wrapper">
            <div class="card wd-350 shadow-base">
              <div class="card-body pd-x-20 pd-xs-40">
                <h5 class="tx-xs-24 tx-normal tx-gray-900 mg-b-15">Sign in to continue</h5>
                <p class="mg-b-30 tx-14">Don't have an account? <a href="">Create an account</a>, it only takes less than a minute.</p>

                <div class="form-group">
                  <input class="form-control" type="text" name="email" placeholder="Enter email address">
                </div><!-- form-group -->
                <div class="form-group">
                  <input class="form-control" type="text" name="email" placeholder="Enter password">
                </div><!-- form-group -->
                <button class="btn btn-primary btn-block">Sign In</button>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- form-card-wrapper -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Form In Dropdown</label>
          <p class="mg-b-20 mg-sm-b-40">A form that is inside the dropdown menu.</p>

          <div class="dropdown dropdown-demo show">
            <a href="#" class="tx-gray-800 d-inline-block">
              <div class="ht-45 pd-x-20 bd d-flex align-items-center justify-content-center">
                <span class="mg-r-5 tx-13 tx-medium">Sign In</span>
                <i class="fa fa-angle-down"></i>
              </div>
            </a>
            <div class="dropdown-menu bg-white pd-20 pd-xs-40 wd-xs-350 pos-static ft-none shadow-base show">
              <h6 class="tx-gray-800 tx-uppercase tx-bold">Sign In</h6>
              <p class="tx-gray-600 mg-b-30">Signin using your account credentials.</p>

              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email">
              </div><!-- form-group -->

              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password">
              </div><!-- form-group -->

              <div class="form-group"><a href="" class="tx-12">Forgot password?</a></div>

              <button class="btn btn-primary btn-block mg-b-30">Sign In</button>

              <p class="tx-11 tx-uppercase tx-spacing-2">Or Sign In With</p>
              <a href="#" class="btn btn-primary btn-icon">
                <div><i class="fa fa-facebook"></i></div>
              </a>
              <a href="#" class="btn btn-info btn-icon mg-l-5">
                <div><i class="fa fa-twitter"></i></div>
              </a>
              <a href="#" class="btn btn-danger btn-icon mg-l-5">
                <div><i class="fa fa-google-plus"></i></div>
              </a>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Form In Modal</label>
          <p class="mg-b-20 mg-sm-b-40">A form that is inside the modal box.</p>

          <div class="pd-y-50 bg-gray-700 mg-t-20">
            <div class="modal d-block pos-static">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content bd-0 rounded-0 wd-xs-350 wd-xl-auto mg-xl-x-25">
                  <div class="modal-body pd-0">
                    <div class="row flex-row-reverse no-gutters">
                      <div class="col-xl-6">
                        <div class="pd-30">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <div class="pd-xs-x-30 pd-y-10">
                            <h5 class="tx-xs-28 tx-inverse mg-b-5">Welcome back!</h5>
                            <p>Sign in to your account to continue</p>
                            <br>
                            <div class="form-group">
                              <input type="email" name="email" class="form-control" placeholder="Enter your email">
                            </div><!-- form-group -->
                            <div class="form-group mg-b-20">
                              <input type="email" name="password" class="form-control" placeholder="Enter your password">
                              <a href="" class="tx-12 d-block mg-t-10">Forgot password?</a>
                            </div><!-- form-group -->

                            <button class="btn btn-primary btn-block">Sign In</button>

                            <div class="mg-t-30 mg-b-20 tx-12">Don't have an account yet? <a href="">Sign Up</a></div>
                          </div>
                        </div><!-- pd-20 -->
                      </div><!-- col-6 -->
                      <div class="col-xl-6 bg-primary">
                        <div class="pd-40">
                          <h1 class="tx-white mg-b-20">slim</h1>
                          <p class="tx-white op-7 mg-b-30 tx-13">We work with clients big and small across a range of sectors and we utilise all forms of media to get your name out there in a way that’s right for you. We believe that analysis of your company and your customers is key in responding effectively to your promotional needs and we will work with you to fully understand your business to achieve the greatest amount of publicity possible so that you can see a return from the advertising.</p>
                          <p class="tx-white">
                            <span class="tx-uppercase tx-medium d-block mg-b-15">Our Address:</span>
                            <span class="op-7 tx-13">Ayala Center, Cebu Business Park, Cebu City, Cebu, Philippines 6000</span>
                          </p>
                        </div>
                      </div><!-- col-6 -->
                    </div><!-- row -->
                  </div><!-- modal-body -->
                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
            </div><!-- modal -->
          </div><!-- pd-y-50 -->
          <div class="pd-y-30 tx-center bg-dark">
            <a href="" class="btn btn-primary pd-x-25" data-toggle="modal" data-target="#modaldemo">View Live Demo</a>
          </div><!-- pd-y-30 -->
        </div><!-- section-wrapper -->


      </div><!-- container -->
    </div><!-- slim-mainpanel -->

    <!-- MODAL GRID -->
    <div id="modaldemo" class="modal fade">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
          <div class="modal-body pd-0">
            <div class="row no-gutters">
              <div class="col-lg-6 bg-primary">
                <div class="pd-40">
                  <h1 class="tx-white mg-b-20">slim</h1>
                  <p class="tx-white op-7 mg-b-30">We work with clients big and small across a range of sectors and we utilise all forms of media to get your name out there in a way that’s right for you. We believe that analysis of your company and your customers is key in responding effectively to your promotional needs and we will work with you to fully understand your business to achieve the greatest amount of publicity possible so that you can see a return from the advertising.</p>
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
                      <input type="email" name="email" class="form-control" placeholder="Enter your email">
                    </div><!-- form-group -->
                    <div class="form-group mg-b-20">
                      <input type="email" name="password" class="form-control" placeholder="Enter your password">
                      <a href="" class="tx-12 d-block mg-t-10">Forgot password?</a>
                    </div><!-- form-group -->

                    <button class="btn btn-primary btn-block">Sign In</button>

                    <div class="mg-t-30 mg-b-20">Don't have an account yet? <a href="">Sign Up</a></div>
                  </div>
                </div><!-- pd-20 -->
              </div><!-- col-6 -->
            </div><!-- row -->
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('assets/lib/select2/js/select2.min.js')}}"></script>

    <script>
      $(function(){
        'use strict'

        $('.form-layout .form-control').on('focusin', function(){
          $(this).closest('.form-group').addClass('form-group-active');
        });

        $('.form-layout .form-control').on('focusout', function(){
          $(this).closest('.form-group').removeClass('form-group-active');
        });

        // Select2
        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });

        $('#select2-a, #select2-b').select2({
          minimumResultsForSearch: Infinity
        });

        $('#select2-a').on('select2:opening', function (e) {
          $(this).closest('.form-group').addClass('form-group-active');
        });

        $('#select2-a').on('select2:closing', function (e) {
          $(this).closest('.form-group').removeClass('form-group-active');
        });

      });
    </script>
@endsection
