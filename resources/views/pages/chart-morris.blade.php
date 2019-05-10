@extends('layouts.mainlayout')

@section('headerscripts')
	@parent
    <link href="{{asset('assets/lib/morris.js/css/morris.css')}}" rel="stylesheet">
 @endsection

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Morris Charts</li>
          </ol>
          <h6 class="slim-pagetitle">Morris Charts</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Bar Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below is the basic bar chart example.</p>

          <div class="row">
            <div class="col-xl-6">
              <div id="morrisBar1" class="ht-200 ht-sm-300 bd"></div>
            </div><!-- col-6 -->
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div id="morrisBar2" class="ht-200 ht-sm-300 bd"></div>
            </div><!-- col-6 -->
          </div><!-- row -->

          <p class="section-label mg-t-40">For stacked bar, just add</p>
          <code>stacked: true</code>

          <div class="row mg-t-50">
            <div class="col-xl-6">
              <div id="morrisBar3" class="ht-200 ht-sm-300 bd"></div>
            </div><!-- col-6 -->
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div id="morrisBar4" class="ht-200 ht-sm-300 bd"></div>
            </div><!-- col-6 -->
          </div><!-- row -->

        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Line Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below is the basic line chart example.</p>

          <div class="row">
            <div class="col-xl-6">
              <div id="morrisLine1" class="ht-200 ht-sm-300 bd"></div>
            </div><!-- col-6 -->
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div id="morrisLine2" class="ht-200 ht-sm-300 bd"></div>
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- secton-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Area Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below is the basic area chart example.</p>

          <div class="row">
            <div class="col-xl-6">
              <div id="morrisArea1" class="ht-200 ht-sm-300 bd"></div>
            </div><!-- col-6 -->
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div id="morrisArea2" class="ht-200 ht-sm-300 bd"></div>
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- secton-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Donut Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below is the basic donut chart example.</p>

          <div class="row tx-center">
            <div class="col-lg-6">
              <div class="pd-y-20 bd"><div id="morrisDonut1" class="ht-200 ht-sm-250"></div></div>
            </div><!-- col-6 -->
            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
              <div class="pd-y-20 bd"><div id="morrisDonut2" class="ht-200 ht-sm-250"></div></div>
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- secton-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('assets/lib/raphael/js/raphael.min.js')}}"></script>
    <script src="{{asset('assets/lib/morris.js/js/morris.js')}}"></script>
    <script src="{{asset('assets/js/chart.morris.js')}}"></script>
@endsection
