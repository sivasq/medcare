@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Google Maps</li>
          </ol>
          <h6 class="slim-pagetitle">Google Maps</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Basic Map</label>
          <p class="mg-b-20 mg-sm-b-40">A default map style by Google Maps.</p>
          <div id="map1" class="ht-300 ht-sm-400"></div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Map Style: Shift Worker</label>
          <p class="mg-b-20 mg-sm-b-40">Based on <a href="https://snazzymaps.com/style/27/shift-worker" target="_blank">Shift Worker</a> style. Almost grey scale, uses subdued tones to display streets.</p>
          <div id="mapShiftWorker" class="ht-300 ht-sm-400"></div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Map Style: Blue Water</label>
          <p class="mg-b-20 mg-sm-b-40">Based on <a href="https://snazzymaps.com/style/25/blue-water" target="_blank">Blue Water</a>. A simple map with blue water and roads/landscape in grayscale.</p>
          <div id="mapBlueWater" class="ht-300 ht-sm-400"></div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Map Style: Shades of Gray</label>
          <p class="mg-b-20 mg-sm-b-40">Based on <a href="https://snazzymaps.com/style/38/shades-of-grey" target="_blank">Shades of Grey</a>. A map with various shades of grey. Great for dark theme.</p>
          <div id="mapShadesOfGrey" class="ht-300 ht-sm-400"></div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Map Style: Apple Like</label>
          <p class="mg-b-20 mg-sm-b-40">Based on <a href="https://snazzymaps.com/style/42/apple-maps-esque" target="_blank">Apple Maps-esque</a>. A theme that largely resembles the Apple Maps theme.</p>
          <div id="mapApple" class="ht-300 ht-sm-400"></div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Map Style: MapBox Like</label>
          <p class="mg-b-20 mg-sm-b-40">Based on <a href="https://snazzymaps.com/style/44/mapbox" target="_blank">MapBox</a>. Light blue and grey color inspired by MapBox's default map color.</p>
          <div id="mapMapBox" class="ht-300 ht-sm-400"></div>
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCuWEQWfVkWfcUoSIZeGw5JioT9LVCwYkE"></script>
    <script src="{{asset('assets/lib/gmaps/js/gmaps.js')}}"></script>

    <script src="{{asset('assets/js/map.shiftworker.js')}}"></script>
    <script src="{{asset('assets/js/map.bluewater.js')}}"></script>
    <script src="{{asset('assets/js/map.shadesofgray.js')}}"></script>
    <script src="{{asset('assets/js/map.apple.js')}}"></script>
    <script src="{{asset('assets/js/map.mapbox.js')}}"></script>

    <script>
      $(function(){
        'use strict';

        var map = new GMaps({
          el: '#map1',
          lat: -12.043333,
          lng: -77.028333
        });

      });
    </script>
@endsection
