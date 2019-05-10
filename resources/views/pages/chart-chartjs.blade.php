@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">ChartJS Charts</li>
          </ol>
          <h6 class="slim-pagetitle">ChartJS Charts</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Bar Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below is the basic bar chart example.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="chartBar1" height="200"></canvas></div>
            </div><!-- col-6 -->
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="chartBar2" height="200"></canvas></div>
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Horizontal Bar Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below is the horizontal bar chart type example.</p>
          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="chartBar3" height="200"></canvas></div>
            </div><!-- col-6 -->
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="chartBar4" height="200"></canvas></div>
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Stacked Bar Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below are the vertical and horizontal bar chart example.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="chartStacked1" height="200"></canvas></div>
            </div><!-- col-6 -->
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="chartStacked2" height="200"></canvas></div>
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Line Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below is the basic line chart example.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="chartLine1" height="200"></canvas></div>
            </div><!-- col-6 -->
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="chartLine2" height="200"></canvas></div>
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Area Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below is the basic an area chart example.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="chartArea1" height="200"></canvas></div>
            </div><!-- col-6 -->
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="chartArea2" height="200"></canvas></div>
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Specific Grid Line Color</label>
          <p class="mg-b-20 mg-sm-b-40">Below are an example of specific grid line coloring.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="chartArea3" height="200"></canvas></div>
            </div><!-- col-6 -->
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="chartArea4" height="200"></canvas></div>
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Pie &amp; Donut Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Below are an example of data in a pie and donut chart.</p>

          <div class="row">
            <div class="col-md-6">
              <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="chartPie" height="200"></canvas></div>
            </div><!-- col-6 -->
            <div class="col-md-6 mg-t-20 mg-md-t-0">
              <div class="bd pd-t-30 pd-b-20 pd-x-20"><canvas id="chartDonut" height="200"></canvas></div>
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('assets/lib/chart.js/js/Chart.js')}}"></script>
    <script src="{{asset('assets/js/chart.chartjs.js')}}"></script>
@endsection
