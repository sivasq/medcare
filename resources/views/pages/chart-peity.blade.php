@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Peity Charts</li>
          </ol>
          <h6 class="slim-pagetitle">Peity Charts</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Line Chart</label>
          <p class="mg-b-20 mg-sm-b-40">An example of a simple line chart with one series.</p>

          <div class="d-md-flex">
            <div class="bd pd-20">
              <span class="peity-line" data-peity='{ "fill": false, "stroke": "#55C5D1", "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
            </div>
            <div class="bd pd-20 mg-md-l-30 mg-t-20 mg-md-t-0">
              <span class="peity-line" data-peity='{ "fill": false, "stroke": "#C19AC7", "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
            </div>
          </div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Area Chart</label>
          <p class="mg-b-20 mg-sm-b-40">An example of a simple line chart with one series.</p>

          <div class="d-md-flex">
            <div class="bd pd-20">
              <span class="peity-line" data-peity='{ "fill": "#55C5D1", "stroke": "#55C5D1", "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
            </div>
            <div class="bd pd-20 mg-md-l-30 mg-t-20 mg-md-t-0">
              <span class="peity-line" data-peity='{ "fill": "#C19AC7", "stroke": "#C19AC7", "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
            </div>
          </div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Bar Chart</label>
          <p class="mg-b-20 mg-sm-b-40">An example of a simple bar chart with one series.</p>

          <div class="d-md-flex">
            <div class="bd pd-20">
              <span class="peity-bar" data-peity='{ "fill": ["#663090"], "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
            </div>
            <div class="bd pd-20 mg-md-l-30 mg-t-20 mg-md-t-0">
              <span class="peity-bar" data-peity='{ "fill": ["#EC1778"], "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
            </div>
          </div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Pie Chart</label>
          <p class="mg-b-20 mg-sm-b-40">An example of a pie chart with two series.</p>

          <div class="d-md-flex">
            <div class="bd pd-20">
              <span class="peity-pie" data-peity='{ "fill": ["#663090","#EC1778","#25B1DE"], "height": 70, "width": 200 }'>10,4,4</span>
            </div>
            <div class="bd pd-20 mg-md-l-30 mg-t-20 mg-md-t-0">
              <span class="peity-pie" data-peity='{ "fill": ["#EC1778","#00B6E8","#F68028","#425E73"], "height": 70, "width": 200 }'>10,4,4,8</span>
            </div>
          </div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Donut Chart</label>
          <p class="mg-b-20 mg-sm-b-40">An example of a simple donut chart with one series.</p>

          <div class="d-md-flex">
            <div class="bd pd-20">
              <span class="peity-donut" data-peity='{ "fill": ["#663090","#EC1778","#25B1DE"], "height": 70, "width": 200 }'>10,4,4</span>
            </div>
            <div class="bd pd-20 mg-md-l-30 mg-t-20 mg-md-t-0">
              <span class="peity-donut" data-peity='{ "fill": ["#EC1778","#00B6E8","#F68028","#425E73"], "height": 70, "width": 200 }'>10,4,4, 8</span>
            </div>
          </div>
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('assets/lib/peity/js/jquery.peity.js')}}"></script>
    <script src="{{asset('assets/js/chart.peity.js')}}"></script>
@endsection
