@extends('layouts.mainlayout')
@section('content')
    <link href="{{asset('assets/lib/chartist/css/chartist.css')}}" rel="stylesheet">
 @endsection

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chartist Charts</li>
          </ol>
          <h6 class="slim-pagetitle">Chartist Charts</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Simple Line Chart</label>
          <p class="mg-b-20 mg-sm-b-40">An example of a simple line chart with three series.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-20">
                <div id="chartLine1" class="slim-chartist ht-200 ht-sm-300"></div>
              </div>
            </div>
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-20">
                <div id="chartLine2" class="slim-chartist ht-200 ht-sm-300"></div>
              </div>
            </div>
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Line Area Chart</label>
          <p class="mg-b-20 mg-sm-b-40">This chart uses the showArea option to draw line, dots but also an area shape. Use the low option to specify a fixed lower bound that will make the area expand. You can also use the areaBase property to specify a data value that will be used to determine the area shape base position (this is 0 by default).</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-20">
                <div id="chartArea1" class="slim-chartist ht-200 ht-sm-300"></div>
              </div>
            </div>
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-20">
                <div id="chartArea2" class="slim-chartist ht-200 ht-sm-300"></div>
              </div>
            </div>
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Bar Chart</label>
          <p class="mg-b-20 mg-sm-b-40">A bi-polar bar chart with a range limit set with low and high. There is also an interpolation function used to skip every odd grid line / label.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-20">
                <div id="chartBar1" class="slim-chartist ht-200 ht-sm-300"></div>
              </div>
            </div>
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-20">
                <div id="chartBar2" class="slim-chartist ht-200 ht-sm-300"></div>
              </div>
            </div>
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Horizontal Bar Chart</label>
          <p class="mg-b-20 mg-sm-b-40">Guess what! Creating horizontal bar charts is as simple as it can get. There's no new chart type you need to learn, just passing an additional option is enough.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-20">
                <div id="chartBar3" class="slim-chartist ht-200 ht-sm-300"></div>
              </div>
            </div>
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-20">
                <div id="chartBar4" class="slim-chartist ht-200 ht-sm-300"></div>
              </div>
            </div>
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Stacked Bar Chart</label>
          <p class="mg-b-20 mg-sm-b-40">You can also set your bar chart to stack the series bars on top of each other easily by using the stackBars property in your configuration.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-20">
                <div id="chartBar5" class="slim-chartist ht-200 ht-sm-300"></div>
              </div>
            </div>
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-20">
                <div id="chartBar6" class="slim-chartist ht-200 ht-sm-300"></div>
              </div>
            </div>
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Pie Chart</label>
          <p class="mg-b-20 mg-sm-b-40">A very simple pie chart with label interpolation to show percentage instead of the actual data series value.</p>

          <div class="row">
            <div class="col-xl-6">
              <div class="bd pd-20">
                <div id="chartPie1" class="slim-chartist ht-200 ht-sm-300"></div>
              </div>
            </div>
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="bd pd-20">
                <div id="chartPie2" class="slim-chartist ht-200 ht-sm-300"></div>
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
    <script src="{{asset('assets/lib/chartist/js/chartist.js')}}"></script>
    <script src="{{asset('assets/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('assets/js/chart.chartist.js')}}"></script>
@endsection
