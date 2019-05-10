@extends('layouts.mainlayout')

@section('headerscripts')
	@parent
    <link href="{{asset('assets/lib/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
 @endsection

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Vector Maps</li>
          </ol>
          <h6 class="slim-pagetitle">Vector Maps</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Vector World Map</label>
          <p class="mg-b-20 mg-sm-b-40">Below is an example of displaying the world map.</p>
          <div id="vmap" class="ht-250 ht-sm-350 ht-md-450 bg-gray-300"></div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Vector Map: USA</label>
          <p class="mg-b-20 mg-sm-b-40">Below is an example of displaying the usa map.</p>
          <div id="vmap2" class="ht-250 ht-sm-350 ht-md-450 bg-gray-300"></div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Vector Map: Canada</label>
          <p class="mg-b-20 mg-sm-b-40">Below is an example of displaying the world map.</p>
          <div id="vmap3" class="ht-250 ht-sm-350 ht-md-450 bg-gray-300"></div>
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('assets/lib/jqvmap/js/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('assets/lib/jqvmap/js/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('assets/lib/jqvmap/js/jquery.vmap.usa.js')}}"></script>
    <script src="{{asset('assets/lib/jqvmap/js/jquery.vmap.canada.js')}}"></script>
    <script src="{{asset('assets/js/jquery.vmap.sampledata.js')}}"></script>

    <script>
      $(function(){
        'use strict';

        $('#vmap').vectorMap({
          map: 'world_en',
          backgroundColor: '#E9ECEF',
          color: '#ffffff',
          hoverOpacity: 0.7,
          selectedColor: '#666666',
          enableZoom: true,
          showTooltip: true,
          scaleColors: ['#17A2B8', '#006491'],
          values: sample_data,
          normalizeFunction: 'polynomial'
        });

        $('#vmap2').vectorMap({
          map: 'usa_en',
          showTooltip: true,
          backgroundColor: '#17A2B9',
          hoverColor: '#DC3545'
        });

        $('#vmap3').vectorMap({
          map: 'canada_en',
          color: '#37465b',
          borderColor: '#fff',
          backgroundColor: '#1D2939',
          hoverColor: '#17A2B9',
          showLabels: true
        });

      });
    </script>
@endsection
