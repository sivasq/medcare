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
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Rickshaw Charts</li>
          </ol>
          <h6 class="slim-pagetitle">Rickshaw Charts</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Bar Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below is the basic bar chart example.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bg-gray-200 pd-20">
                <div id="chartBar1" class="wd-100p ht-200 ht-sm-300"></div>
              </div>
            </div>
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bg-gray-200 pd-20 pos-relative">
                <div id="chartBar2" class="ht-200 ht-sm-300"></div>
              </div>
            </div>
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Stacked Bar Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below is the stacked bar chart example.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="pd-20 bg-gray-200">
                <div id="chartStackedBar1" class="wd-100p ht-200 ht-sm-300"></div>
              </div>
            </div>
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="pd-20 bg-gray-200">
                <div id="chartStackedBar2" class="ht-200 ht-sm-300"></div>
              </div>
            </div>
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Multiple Bar Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below are multiple bar chart example.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="pd-20 bg-gray-200">
                <div id="chartMultiBar1" class="wd-100p ht-200 ht-sm-300"></div>
              </div>
            </div>
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="pd-20 bg-gray-200">
                <div id="chartMultiBar2" class="ht-200 ht-sm-300"></div>
              </div>
            </div>
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Line Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below is the line chart example.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="pd-20 bg-gray-200">
                <div id="chartLine1" class="wd-100p ht-200 ht-sm-300"></div>
              </div>
            </div>
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="pd-20 bg-gray-200">
                <div id="chartLine2" class="ht-200 ht-sm-300"></div>
              </div>
            </div>
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Area Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below is the area chart example.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bg-gray-200">
                <div id="chartArea1" class="wd-100p ht-200 ht-sm-300"></div>
              </div>
            </div>
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bg-gray-200">
                <div id="chartArea2" class="ht-200 ht-sm-300"></div>
              </div>
            </div>
          </div><!-- row -->
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('assets/lib/d3/js/d3.js')}}"></script>
    <script src="{{asset('assets/lib/rickshaw/js/rickshaw.min.js')}}"></script>
    <script src="{{asset('assets/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('assets/js/chart.rickshaw.js')}}"></script>
@endsection
