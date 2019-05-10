@extends('layouts.mainlayout')

@section('headerscripts')
	@parent
    <link href="{{asset('assets/lib/SpinKit/css/spinkit.css')}}" rel="stylesheet">
 @endsection

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Spinner</li>
          </ol>
          <h6 class="slim-pagetitle">Spinner</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <div class="row">
            <div class="col-md-6 col-xl-4">
              <div class="d-flex bg-gray-200 ht-300 pos-relative align-items-center">
                <div class="sk-rotating-plane bg-gray-800"></div>
              </div><!-- d-flex -->
            </div><!-- col-4 -->
            <div class="col-md-6 col-xl-4 mg-t-30 mg-sm-t-0">
              <div class="d-flex bg-gray-200 ht-300 pos-relative align-items-center">
                <div class="sk-double-bounce">
                  <div class="sk-child sk-double-bounce1 bg-gray-800"></div>
                  <div class="sk-child sk-double-bounce2 bg-gray-800"></div>
                </div>
              </div><!-- d-flex -->
            </div><!-- col-4 -->
            <div class="col-md-6 col-xl-4 mg-t-30 mg-xl-t-0">
              <div class="d-flex bg-gray-200 ht-300 pos-relative align-items-center">
                <div class="sk-wave">
                  <div class="sk-rect sk-rect1 bg-gray-800"></div>
                  <div class="sk-rect sk-rect2 bg-gray-800"></div>
                  <div class="sk-rect sk-rect3 bg-gray-800"></div>
                  <div class="sk-rect sk-rect4 bg-gray-800"></div>
                  <div class="sk-rect sk-rect5 bg-gray-800"></div>
                </div>
              </div><!-- d-flex -->
            </div><!-- col-4 -->
            <div class="col-md-6 col-xl-4 mg-t-30">
              <div class="d-flex bg-gray-200 ht-300 pos-relative align-items-center">
                <div class="sk-spinner sk-spinner-pulse bg-gray-800"></div>
              </div><!-- d-flex -->
            </div><!-- col-4 -->
            <div class="col-md-6 col-xl-4 mg-t-30">
              <div class="d-flex bg-gray-200 ht-300 pos-relative align-items-center">
                <div class="sk-chasing-dots">
                  <div class="sk-child sk-dot1 bg-gray-800"></div>
                  <div class="sk-child sk-dot2 bg-gray-800"></div>
                </div>
              </div><!-- d-flex -->
            </div><!-- col-4 -->
            <div class="col-md-6 col-xl-4 mg-t-30">
              <div class="d-flex bg-gray-200 ht-300 pos-relative align-items-center">
                <div class="sk-circle">
                  <div class="sk-circle1 sk-child"></div>
                  <div class="sk-circle2 sk-child"></div>
                  <div class="sk-circle3 sk-child"></div>
                  <div class="sk-circle4 sk-child"></div>
                  <div class="sk-circle5 sk-child"></div>
                  <div class="sk-circle6 sk-child"></div>
                  <div class="sk-circle7 sk-child"></div>
                  <div class="sk-circle8 sk-child"></div>
                  <div class="sk-circle9 sk-child"></div>
                  <div class="sk-circle10 sk-child"></div>
                  <div class="sk-circle11 sk-child"></div>
                  <div class="sk-circle12 sk-child"></div>
                </div>
              </div><!-- d-flex -->
            </div><!-- col-4 -->
            <div class="col-md-6 col-xl-4 mg-t-30">
              <div class="d-flex bg-gray-200 ht-300 pos-relative align-items-center">
                <div class="sk-three-bounce">
                  <div class="sk-child sk-bounce1 bg-gray-800"></div>
                  <div class="sk-child sk-bounce2 bg-gray-800"></div>
                  <div class="sk-child sk-bounce3 bg-gray-800"></div>
                </div>
              </div><!-- d-flex -->
            </div><!-- col-4 -->
            <div class="col-md-6 col-xl-4 mg-t-30">
              <div class="d-flex bg-gray-200 ht-300 pos-relative align-items-center">
                <div class="sk-cube-grid">
                  <div class="sk-cube sk-cube1"></div>
                  <div class="sk-cube sk-cube2"></div>
                  <div class="sk-cube sk-cube3"></div>
                  <div class="sk-cube sk-cube4"></div>
                  <div class="sk-cube sk-cube5"></div>
                  <div class="sk-cube sk-cube6"></div>
                  <div class="sk-cube sk-cube7"></div>
                  <div class="sk-cube sk-cube8"></div>
                  <div class="sk-cube sk-cube9"></div>
                </div>
              </div><!-- d-flex -->
            </div><!-- col-4 -->
            <div class="col-md-6 col-xl-4 mg-t-30">
              <div class="d-flex bg-gray-200 ht-300 pos-relative align-items-center">
                <div class="sk-folding-cube">
                  <div class="sk-cube1 sk-cube"></div>
                  <div class="sk-cube2 sk-cube"></div>
                  <div class="sk-cube4 sk-cube"></div>
                  <div class="sk-cube3 sk-cube"></div>
                </div>
              </div><!-- d-flex -->
            </div><!-- col-4 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->


      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
@endsection
