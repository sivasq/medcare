@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">E-Charts Charts</li>
          </ol>
          <h6 class="slim-pagetitle">E-Charts Charts</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Bar Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below is the basic bar chart example.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-l-20 pd-y-30 pd-r-30">
                <div id="chartBar1" class="ht-200 ht-sm-300"></div>
              </div>
            </div>
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-l-20 pd-y-30 pd-r-30">
                <div id="chartBar2" class="ht-200 ht-sm-300"></div>
              </div>
            </div>
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Horizontal Bar Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below is the basic horizontal bar chart example.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-l-20 pd-y-30 pd-r-30">
                <div id="chartBar3" class="ht-200 ht-sm-300"></div>
              </div>
            </div>
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-l-20 pd-y-30 pd-r-30">
                <div id="chartBar4" class="ht-200 ht-sm-300"></div>
              </div>
            </div>
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Stacked Bar Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below are stacked bar chart example for both horizontal and vertical bar.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-l-20 pd-y-30 pd-r-30">
                <div id="chartBar5" class="ht-200 ht-sm-300"></div>
              </div>
            </div>
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-l-20 pd-y-30 pd-r-30">
                <div id="chartBar6" class="ht-200 ht-sm-300"></div>
              </div>
            </div>
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Line Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below are line chart examples.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-l-20 pd-y-30 pd-r-30">
                <div id="chartLine1" class="ht-200 ht-sm-300"></div>
              </div>
            </div>
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-l-20 pd-y-30 pd-r-30">
                <div id="chartLine2" class="ht-200 ht-sm-300"></div>
              </div>
            </div>
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Area Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below are area chart examples.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-l-15 pd-y-30 pd-r-20">
                <div id="chartArea1" class="ht-200 ht-sm-300"></div>
              </div>
            </div>
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-l-15 pd-y-30 pd-r-20">
                <div id="chartArea2" class="ht-200 ht-sm-300"></div>
              </div>
            </div>
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Pie Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below are an example of donut charts.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-b-30">
                <div id="chartPie" class="ht-200 ht-sm-300"></div>
              </div>
            </div>
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-b-30">
                <div id="chartDonut" class="ht-200 ht-sm-300"></div>
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
    <script src="{{asset('assets/lib/echarts/js/echarts.min.js')}}"></script>
    <script src="{{asset('assets/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('assets/js/chart.echarts.js')}}"></script>
@endsection
