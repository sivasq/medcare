@extends('layouts.mainlayout')

@section('headerscripts')
	@parent
    <link href="{{asset('assets/lib/medium-editor/css/medium-editor.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/medium-editor/css/default.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/summernote/css/summernote-bs4.css')}}" rel="stylesheet">
 @endsection

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">WYSIWYG Editor</li>
          </ol>
          <h6 class="slim-pagetitle">WYSIWYG Editor</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Medium Editor</label>
          <p class="mg-b-20 mg-sm-b-40">Below is an example of a basic inline editing using medium-editor.</p>

          <p>Try highlighting some of the text below.</p>
          <div class="editable tx-16 bd pd-30 tx-inverse">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Summernote</label>
          <p class="mg-b-20 mg-sm-b-40">A super simple WYSIWYG editor on Bootstrap.</p>

          <div id="summernote">Hello, universe!</div>
        </div><!-- section-wrapper -->


      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('assets/lib/summernote/js/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('assets/lib/medium-editor/js/medium-editor.js')}}"></script>
    <script>
      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote').summernote({
          height: 150,
          tooltip: false
        })
      });
    </script>
@endsection
