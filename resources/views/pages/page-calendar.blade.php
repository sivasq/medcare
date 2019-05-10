@extends('layouts.mainlayout')

@section('headerscripts')
	@parent
    <link href="{{asset('assets/lib/fullcalendar/css/fullcalendar.css')}}" rel="stylesheet">
 @endsection

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Calendar</li>
          </ol>
          <h6 class="slim-pagetitle">Calendar</h6>
        </div><!-- slim-pageheader -->

        <div class="card pd-25">
          <div id="fullCalendar"></div>
        </div><!-- card -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('assets/lib/moment/js/moment.js')}}"></script>
    <script src="{{asset('assets/lib/fullcalendar/js/fullcalendar.js')}}"></script>

    <script>
      $(function() {
        'use strict';

        $('#fullCalendar').fullCalendar({
          header: {
            left:   'prev',
            center: 'title',
            right:  'today next'
          }
        });
      });
    </script>
@endsection
