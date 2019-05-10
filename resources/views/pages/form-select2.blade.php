@extends('layouts.mainlayout')

@section('headerscripts')
	@parent
    <link href="{{asset('assets/lib/select2/css/select2.min.css')}}" rel="stylesheet">
 @endsection

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Select2</li>
          </ol>
          <h6 class="slim-pagetitle">Select2</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Basic Select Box</label>
          <p class="mg-b-20 mg-sm-b-40">Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options.</p>

          <div class="row">
            <div class="col-lg-4">
              <select class="form-control select2" data-placeholder="Choose one">
                <option label="Choose one"></option>
                <option value="Firefox">Firefox</option>
                <option value="Chrome">Chrome</option>
                <option value="Safari">Safari</option>
                <option value="Opera">Opera</option>
                <option value="Internet Explorer">Internet Explorer</option>
              </select>
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <select class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)">
                <option label="Choose one"></option>
                <option value="Firefox">Firefox</option>
                <option value="Chrome">Chrome</option>
                <option value="Safari">Safari</option>
                <option value="Opera">Opera</option>
                <option value="Internet Explorer">Internet Explorer</option>
              </select>
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <select class="form-control select2" data-placeholder="Choose one (disabled)" disabled>
                <option label="Choose one"></option>
                <option value="Firefox">Firefox</option>
                <option value="Chrome">Chrome</option>
                <option value="Safari">Safari</option>
                <option value="Opera">Opera</option>
                <option value="Internet Explorer">Internet Explorer</option>
              </select>
            </div><!-- col-4 -->
          </div><!-- row -->

          <div class="row mg-t-20">
            <div class="col-lg-4">
              <select class="form-control select2" data-placeholder="Choose one (with optgroup)">
                <option label="Choose one"></option>
                <optgroup label="Pacific Time Zone">
                  <option value="CA">California</option>
                  <option value="NV">Nevada</option>
                  <option value="OR">Oregon</option>
                  <option value="WA">Washington</option>
                </optgroup>
                <optgroup label="Mountain Time Zone">
                  <option value="AR">Arizona</option>
                  <option value="CO">Colorado</option>
                  <option value="ID">Idaho</option>
                  <option value="MO">Montana</option>
                </optgroup>
                <optgroup label="Central Time Zone">
                  <option value="AL">Alabama</option>
                  <option value="KA">Kansas</option>
                  <option value="KE">Kentucky</option>
                  <option value="OK">Oklahoma</option>
                </optgroup>
              </select>
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <select class="form-control select2" data-placeholder="Choose Browser" multiple>
                <option value="Firefox">Firefox</option>
                <option value="Chrome selected">Chrome</option>
                <option value="Safari">Safari</option>
                <option value="Opera" selected>Opera</option>
                <option value="Internet Explorer">Internet Explorer</option>
              </select>
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <select class="form-control select2" data-placeholder="Choose Browser" multiple disabled>
                <option value="Firefox">Firefox</option>
                <option value="Chrome selected">Chrome</option>
                <option value="Safari">Safari</option>
                <option value="Opera" selected>Opera</option>
                <option value="Internet Explorer">Internet Explorer</option>
              </select>
            </div><!-- col-sm-4 -->
          </div><!-- row -->

          <div class="row pd-t-20">
            <div class="col-lg-4">
              <div class="form-group has-success mg-b-0">
                <select class="form-control select2" data-placeholder="Choose Browser">
                  <option value="Firefox">Firefox</option>
                  <option value="Chrome">Chrome</option>
                  <option value="Safari">Safari</option>
                  <option value="Opera">Opera</option>
                  <option value="Internet Explorer">Internet Explorer</option>
                </select>
              </div><!-- form-group -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <div class="form-group has-warning mg-b-0">
                <select class="form-control select2" data-placeholder="Choose Browser">
                  <option value="Firefox">Firefox</option>
                  <option value="Chrome">Chrome</option>
                  <option value="Safari">Safari</option>
                  <option value="Opera">Opera</option>
                  <option value="Internet Explorer">Internet Explorer</option>
                </select>
              </div><!-- form-group -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <div class="form-group has-danger mg-b-0">
                <select class="form-control select2" data-placeholder="Choose Browser">
                  <option value="Firefox">Firefox</option>
                  <option value="Chrome">Chrome</option>
                  <option value="Safari">Safari</option>
                  <option value="Opera">Opera</option>
                  <option value="Internet Explorer">Internet Explorer</option>
                </select>
              </div><!-- form-group -->
            </div><!-- col-4 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Selected Hover Color Variant</label>
          <p class="mg-b-20 mg-sm-b-40">A select box with custom color for highlighting or selecting a selection.</p>

          <div class="row no-gutters ht-200">
            <div class="col bg-gray-100 d-flex align-items-center justify-content-center">
              <div class="wd-250">
                <select id="select2" class="form-control" data-placeholder="Choose one">
                  <option label="Choose one"></option>
                  <option value="Firefox">Firefox</option>
                  <option value="Chrome">Chrome</option>
                  <option value="Safari">Safari</option>
                  <option value="Opera">Opera</option>
                  <option value="Internet Explorer">Internet Explorer</option>
                </select>
              </div><!-- wd-250 -->
            </div><!-- col-->
            <div class="col bg-gray-200 d-flex align-items-center justify-content-center">
              <div class="wd-250">
                <select id="select3" class="form-control" data-placeholder="Choose one">
                  <option label="Choose one"></option>
                  <option value="Firefox">Firefox</option>
                  <option value="Chrome">Chrome</option>
                  <option value="Safari">Safari</option>
                  <option value="Opera">Opera</option>
                  <option value="Internet Explorer">Internet Explorer</option>
                </select>
              </div><!-- select2-wrapper -->
            </div><!-- col-->
          </div><!-- row -->

          <p class="section-label mg-t-25">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">dropdownCssClass: 'hover-[value]'</code></td>
                <td>success | warning | danger | info | teal | indigo | purple | pink | orange | dark</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Outline Color Variant</label>
          <p class="mg-b-20 mg-sm-b-40">A select box with colored border and optional colored border and hover for dropdown.</p>

          <div class="row no-gutters ht-200">
            <div class="col bg-gray-100 d-flex align-items-center justify-content-center">
              <div class="wd-250">
                <select id="select4" class="form-control" data-placeholder="Choose one">
                  <option label="Choose one"></option>
                  <option value="Firefox">Firefox</option>
                  <option value="Chrome">Chrome</option>
                  <option value="Safari">Safari</option>
                  <option value="Opera">Opera</option>
                  <option value="Internet Explorer">Internet Explorer</option>
                </select>
              </div><!-- wd-250 -->
            </div><!-- col-->
            <div class="col bg-gray-200 d-flex align-items-center justify-content-center">
              <div class="wd-250">
                <select id="select5" class="form-control" data-placeholder="Choose one">
                  <option label="Choose one"></option>
                  <option value="Firefox">Firefox</option>
                  <option value="Chrome">Chrome</option>
                  <option value="Safari">Safari</option>
                  <option value="Opera">Opera</option>
                  <option value="Internet Explorer">Internet Explorer</option>
                </select>
              </div><!-- select2-wrapper -->
            </div><!-- col-->
          </div><!-- row -->

          <p class="section-label mg-t-25">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <code class="pd-0 bg-transparent">containerCssClass: 'select2-outline-success'</code>
                  <code class="pd-0 bg-transparent">dropdownCssClass: 'bd-success hover-success'</code>
                </td>
                <td>primary | success | warning | danger | info | teal | indigo | purple | pink | orange | white</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Full Colored Variant</label>
          <p class="mg-b-20 mg-sm-b-40">A select box with full colored variants to choose from.</p>

          <div class="row no-gutters ht-200">
            <div class="col bg-gray-100 d-flex align-items-center justify-content-center">
              <div class="wd-250">
                <select id="select6" class="form-control" data-placeholder="Choose one">
                  <option label="Choose one"></option>
                  <option value="Firefox">Firefox</option>
                  <option value="Chrome">Chrome</option>
                  <option value="Safari">Safari</option>
                  <option value="Opera">Opera</option>
                  <option value="Internet Explorer">Internet Explorer</option>
                </select>
              </div><!-- wd-250 -->
            </div><!-- col-->
            <div class="col bg-gray-200 d-flex align-items-center justify-content-center">
              <div class="wd-250">
                <select id="select7" class="form-control" data-placeholder="Choose one">
                  <option label="Choose one"></option>
                  <option value="Firefox">Firefox</option>
                  <option value="Chrome">Chrome</option>
                  <option value="Safari">Safari</option>
                  <option value="Opera">Opera</option>
                  <option value="Internet Explorer">Internet Explorer</option>
                </select>
              </div><!-- select2-wrapper -->
            </div><!-- col-->
          </div><!-- row -->

          <p class="section-label mg-t-25">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <code class="pd-0 bg-transparent">containerCssClass: 'select2-full-color select2-[value]'</code>
                </td>
                <td>primary | success | warning | danger | info | teal | indigo | purple | pink | orange | dark</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Full Colored Dropdown Variant</label>
          <p class="mg-b-20 mg-sm-b-40">A select box with full colored dropdown variants to choose from.</p>

          <div class="row no-gutters ht-200">
            <div class="col bg-gray-100 d-flex align-items-center justify-content-center">
              <div class="wd-250">
                <select id="select8" class="form-control" data-placeholder="Choose one">
                  <option label="Choose one"></option>
                  <option value="Firefox">Firefox</option>
                  <option value="Chrome">Chrome</option>
                  <option value="Safari">Safari</option>
                  <option value="Opera">Opera</option>
                  <option value="Internet Explorer">Internet Explorer</option>
                </select>
              </div><!-- wd-250 -->
            </div><!-- col-->
            <div class="col bg-gray-200 d-flex align-items-center justify-content-center">
              <div class="wd-250">
                <select id="select9" class="form-control" data-placeholder="Choose one">
                  <option label="Choose one"></option>
                  <option value="Firefox">Firefox</option>
                  <option value="Chrome">Chrome</option>
                  <option value="Safari">Safari</option>
                  <option value="Opera">Opera</option>
                  <option value="Internet Explorer">Internet Explorer</option>
                </select>
              </div><!-- select2-wrapper -->
            </div><!-- col-->
          </div><!-- row -->

          <p class="section-label mg-t-25">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <code class="pd-0 bg-transparent">dropdownCssClass: 'select2-drop-color select2-drop-[value]'</code>
                </td>
                <td>primary | success | warning | danger | info | teal | indigo | purple | pink | orange | dark</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Full Colored Box and Dropdown Combination</label>
          <p class="mg-b-20 mg-sm-b-40">A select box with full colored dropdown variants to choose from.</p>

          <div class="row no-gutters ht-200">
            <div class="col bg-gray-100 d-flex align-items-center justify-content-center">
              <div class="wd-250">
                <select id="select10" class="form-control" data-placeholder="Choose one">
                  <option label="Choose one"></option>
                  <option value="Firefox">Firefox</option>
                  <option value="Chrome">Chrome</option>
                  <option value="Safari">Safari</option>
                  <option value="Opera">Opera</option>
                  <option value="Internet Explorer">Internet Explorer</option>
                </select>
              </div><!-- wd-250 -->
            </div><!-- col-->
            <div class="col bg-gray-200 d-flex align-items-center justify-content-center">
              <div class="wd-250">
                <select id="select11" class="form-control" data-placeholder="Choose one">
                  <option label="Choose one"></option>
                  <option value="Firefox">Firefox</option>
                  <option value="Chrome">Chrome</option>
                  <option value="Safari">Safari</option>
                  <option value="Opera">Opera</option>
                  <option value="Internet Explorer">Internet Explorer</option>
                </select>
              </div><!-- select2-wrapper -->
            </div><!-- col-->
          </div><!-- row -->
        </div><!-- section-wrapper -->


      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent

    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('assets/lib/select2/js/select2.full.min.js')}}"></script>

    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });

        // Select2 by showing the search
        $('.select2-show-search').select2({
          minimumResultsForSearch: ''
        });

        // Colored Hover
        $('#select2').select2({
          dropdownCssClass: 'hover-success',
          minimumResultsForSearch: Infinity // disabling search
        });

        $('#select3').select2({
          dropdownCssClass: 'hover-danger',
          minimumResultsForSearch: Infinity // disabling search
        });

        // Outline Select
        $('#select4').select2({
          containerCssClass: 'select2-outline-success',
          dropdownCssClass: 'bd-success hover-success',
          minimumResultsForSearch: Infinity // disabling search
        });

        $('#select5').select2({
          containerCssClass: 'select2-outline-info',
          dropdownCssClass: 'bd-info hover-info',
          minimumResultsForSearch: Infinity // disabling search
        });

        // Full Colored Select Box
        $('#select6').select2({
          containerCssClass: 'select2-full-color select2-primary',
          minimumResultsForSearch: Infinity // disabling search
        });

        $('#select7').select2({
          containerCssClass: 'select2-full-color select2-danger',
          dropdownCssClass: 'hover-danger',
          minimumResultsForSearch: Infinity // disabling search
        });

        // Full Colored Dropdown
        $('#select8').select2({
          dropdownCssClass: 'select2-drop-color select2-drop-primary',
          minimumResultsForSearch: Infinity // disabling search
        });

        $('#select9').select2({
          dropdownCssClass: 'select2-drop-color select2-drop-indigo',
          minimumResultsForSearch: Infinity // disabling search
        });

        // Full colored for both box and dropdown
        $('#select10').select2({
          containerCssClass: 'select2-full-color select2-primary',
          dropdownCssClass: 'select2-drop-color select2-drop-primary',
          minimumResultsForSearch: Infinity // disabling search
        });

        $('#select11').select2({
          containerCssClass: 'select2-full-color select2-indigo',
          dropdownCssClass: 'select2-drop-color select2-drop-indigo',
          minimumResultsForSearch: Infinity // disabling search
        });
      });
    </script>
@endsection
