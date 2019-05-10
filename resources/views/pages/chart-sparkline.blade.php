@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sparkline Charts</li>
          </ol>
          <h6 class="slim-pagetitle">Sparkline Charts</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Line Chart</label>
          <p class="mg-b-20 mg-sm-b-40">An example of a simple line chart with one series.</p>

          <div class="d-md-flex">
            <div class="bd pd-20"><span id="sparkline1">1,4,4,7,5,9,10,1,4,4,7,5,9,10</span></div>
            <div class="bd pd-20 mg-md-l-30 mg-t-20 mg-md-t-0"><span id="sparkline2">1,4,4,7,5,9,10,1,4,4,7,5,9,10</span></div>
          </div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Area Chart</label>
          <p class="mg-b-20 mg-sm-b-40">An example of a simple line chart with one series.</p>

          <div class="d-md-flex">
            <div class="bd pd-20"><span id="sparkline3">1,4,4,7,5,9,10,1,4,4,7,5,9,10</span></div>
            <div class="bd pd-20 mg-md-l-30 mg-t-20 mg-md-t-0"><span id="sparkline4">1,4,4,7,5,9,10,1,4,4,7,5,9,10</span></div>
          </div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Bar Chart</label>
          <p class="mg-b-20 mg-sm-b-40">An example of a simple bar chart with one series.</p>

          <div class="d-md-flex">
            <div class="bd pd-20"><span id="sparkline5">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span></div>
            <div class="bd pd-20 mg-md-l-30 mg-t-20 mg-md-t-0"><span id="sparkline6">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span></div>
          </div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Stacked Bar Chart</label>
          <p class="mg-b-20 mg-sm-b-40">An example of a stacked bar chart with two series.</p>

          <div class="d-md-flex">
            <div class="bd pd-20"><span id="sparkline7">7,8,10,7,5,9,10,6,9,4,7,5,9,10,8</span></div>
            <div class="bd pd-20 mg-md-l-30 mg-t-20 mg-md-t-0"><span id="sparkline8">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8</span></div>
          </div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Pie Chart</label>
          <p class="mg-b-20 mg-sm-b-40">An example of a pie chart with two series.</p>

          <div class="d-flex">
            <div class="bd pd-20"><span id="sparkline9">7,8,10</span></div>
            <div class="bd pd-20 mg-l-30"><span id="sparkline10">3,4,4,7,5,9,10,6</span></div>
          </div>
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('assets/lib/jquery.sparkline.bower/js/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets/js/chart.sparkline.js')}}"></script>
@endsection
