@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Flot Charts</li>
          </ol>
          <h6 class="slim-pagetitle">Flot Charts</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Bar Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below is the basic bar chart example.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-20"><div id="flotBar1" class="ht-200 ht-sm-300"></div></div>
            </div><!-- col-6 -->
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-20"><div id="flotBar2" class="ht-200 ht-sm-300"></div></div>
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Line Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below is the basic line chart example.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-20"><div id="flotLine1" class="ht-200 ht-sm-300"></div></div>
            </div><!-- col-6 -->
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-20"><div id="flotLine2" class="ht-200 ht-sm-300"></div></div>
            </div><!-- col-6 -->
          </div><!-- row -->

          <div class="row mg-t-20">
            <div class="col-xl-6">
              <div class="bd pd-20"><div id="flotLine3" class="ht-200 ht-sm-300"></div></div>
            </div><!-- col-6 -->
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-20"><div id="flotLine4" class="ht-200 ht-sm-300"></div></div>
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Area Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below is the basic area chart example.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-20"><div id="flotArea1" class="ht-200 ht-sm-300"></div></div>
            </div><!-- col-6 -->
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-20"><div id="flotArea2" class="ht-200 ht-sm-300"></div></div>
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Real Time Updates</label>
          <p class="mg-b-20 mg-sm-b-40">You can update a chart periodically to get a real-time effect by using a timer to insert the new data in the plot and redraw it.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-20"><div id="flotRealtime1" class="ht-200 ht-sm-300"></div></div>
            </div><!-- col-6 -->
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-20"><div id="flotRealtime2" class="ht-200 ht-sm-300"></div></div>
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Pie Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Labels can be hidden if the slice is less than a given percentage of the pie.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-20"><div id="flotPie1" class="ht-200 ht-sm-300"></div></div>
            </div><!-- col-6 -->
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-20"><div id="flotPie2" class="ht-200 ht-sm-300"></div></div>
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('assets/lib/Flot/js/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/lib/Flot/js/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('assets/lib/Flot/js/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('assets/lib/flot-spline/js/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('assets/js/chart.flot.js')}}"></script>
@endsection
