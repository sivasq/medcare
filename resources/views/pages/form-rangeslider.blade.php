@extends('layouts.mainlayout')

@section('headerscripts')
	@parent
    <link href="{{asset('assets/lib/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
 @endsection

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Range Slider</li>
          </ol>
          <h6 class="slim-pagetitle">Range Slider</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Default Skin</label>
          <p class="mg-b-20 mg-sm-b-40">Below is the default flat ui skin color.</p>

          <div class="row">
            <div class="col-lg-6">
              <input type="text" class="rangeslider1" name="example_name" value="">
            </div><!-- col-6 -->
            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
              <input type="text" class="rangeslider2" name="example_name" value="">
            </div><!-- col-6 -->
          </div><!-- row -->
          <div class="row mg-t-40">
            <div class="col-lg-6">
              <input type="text" class="rangeslider3" name="example_name" value="">
            </div><!-- col-6 -->
            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
              <input type="text" class="rangeslider4" name="example_name" value="">
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Default Skin Color Variant</label>
          <p class="mg-b-20 mg-sm-b-40">Below are the default flat ui skin with different color variant.</p>

          <div class="row">
            <div class="col-lg-6">
              <input type="text" class="rangeslider2" name="example_name" data-extra-classes="irs-primary" value="">
            </div><!-- col-6 -->
            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
              <input type="text" class="rangeslider3" name="example_name" data-extra-classes="irs-primary" value="">
            </div><!-- col-6 -->
          </div><!-- row -->

          <div class="row mg-t-30">
            <div class="col-lg-6">
              <input type="text" class="rangeslider2" name="example_name" data-extra-classes="irs-success" value="">
            </div><!-- col-6 -->
            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
              <input type="text" class="rangeslider3" name="example_name" data-extra-classes="irs-success" value="">
            </div><!-- col-6 -->
          </div><!-- row -->

          <div class="row mg-t-30">
            <div class="col-lg-6">
              <input type="text" class="rangeslider2" name="example_name" data-extra-classes="irs-danger" value="">
            </div><!-- col-6 -->
            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
              <input type="text" class="rangeslider3" name="example_name" data-extra-classes="irs-danger" value="">
            </div><!-- col-6 -->
          </div><!-- row -->

          <p class="section-label mg-t-40">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">data-extra-classes="irs-[value]"</code></td>
                <td>primary | success | warning | danger | info | teal | indigo | purple | pink | orange | dark</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Modern Skin</label>
          <p class="mg-b-20 mg-sm-b-40">Below is the modern skin slider default.</p>

          <div class="row">
            <div class="col-lg-6">
              <input type="text" class="rangeslider1" name="example_name" data-extra-classes="irs-modern">
            </div><!-- col-6 -->
            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
              <input type="text" class="rangeslider2" name="example_name" data-extra-classes="irs-modern">
            </div><!-- col-6 -->
          </div><!-- row -->
          <div class="row mg-t-40">
            <div class="col-lg-6">
              <input type="text" class="rangeslider3" name="example_name" data-extra-classes="irs-modern">
            </div><!-- col-6 -->
            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
              <input type="text" class="rangeslider4" name="example_name" data-extra-classes="irs-modern">
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Modern Skin Color Variant</label>
          <p class="mg-b-20 mg-sm-b-40">Below is the modern skin slider with different color variant.</p>

          <div class="row">
            <div class="col-lg-6">
              <input type="text" class="rangeslider2" name="example_name" data-extra-classes="irs-modern irs-primary" value="">
            </div><!-- col-6 -->
            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
              <input type="text" class="rangeslider3" name="example_name" data-extra-classes="irs-modern irs-primary" value="">
            </div><!-- col-6 -->
          </div><!-- row -->

          <div class="row mg-t-30">
            <div class="col-lg-6">
              <input type="text" class="rangeslider2" name="example_name" data-extra-classes="irs-modern irs-indigo" value="">
            </div><!-- col-6 -->
            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
              <input type="text" class="rangeslider3" name="example_name" data-extra-classes="irs-modern irs-indigo" value="">
            </div><!-- col-6 -->
          </div><!-- row -->

          <div class="row mg-t-30">
            <div class="col-lg-6">
              <input type="text" class="rangeslider2" name="example_name" data-extra-classes="irs-modern irs-pink" value="">
            </div><!-- col-6 -->
            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
              <input type="text" class="rangeslider3" name="example_name" data-extra-classes="irs-modern irs-pink" value="">
            </div><!-- col-6 -->
          </div><!-- row -->

          <p class="section-label mg-t-40">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">data-extra-classes="irs-modern irs-[value]"</code></td>
                <td>primary | success | warning | danger | info | teal | indigo | purple | pink | orange | dark</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Outline Skin</label>
          <p class="mg-b-20 mg-sm-b-40">Below are the outline skin slider default.</p>

          <div class="row">
            <div class="col-lg-6">
              <input type="text" class="rangeslider1" name="example_name" data-extra-classes="irs-outline">
            </div><!-- col-6 -->
            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
              <input type="text" class="rangeslider2" name="example_name" data-extra-classes="irs-outline">
            </div><!-- col-6 -->
          </div><!-- row -->
          <div class="row mg-t-40">
            <div class="col-lg-6">
              <input type="text" class="rangeslider3" name="example_name" data-extra-classes="irs-outline">
            </div><!-- col-6 -->
            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
              <input type="text" class="rangeslider4" name="example_name" data-extra-classes="irs-outline">
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Outline Skin Color Variant</label>
          <p class="mg-b-20 mg-sm-b-40">Below are the outline skin slider with different color variants to choose from.</p>

          <div class="row">
            <div class="col-lg-6">
              <input type="text" class="rangeslider2" name="example_name" data-extra-classes="irs-outline irs-warning" value="">
            </div><!-- col-6 -->
            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
              <input type="text" class="rangeslider3" name="example_name" data-extra-classes="irs-outline irs-warning" value="">
            </div><!-- col-6 -->
          </div><!-- row -->

          <div class="row mg-t-30">
            <div class="col-lg-6">
              <input type="text" class="rangeslider2" name="example_name" data-extra-classes="irs-outline irs-purple" value="">
            </div><!-- col-6 -->
            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
              <input type="text" class="rangeslider3" name="example_name" data-extra-classes="irs-outline irs-purple" value="">
            </div><!-- col-6 -->
          </div><!-- row -->

          <div class="row mg-t-30">
            <div class="col-lg-6">
              <input type="text" class="rangeslider2" name="example_name" data-extra-classes="irs-outline irs-teal" value="">
            </div><!-- col-6 -->
            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
              <input type="text" class="rangeslider3" name="example_name" data-extra-classes="irs-outline irs-teal" value="">
            </div><!-- col-6 -->
          </div><!-- row -->

          <p class="section-label mg-t-40">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">data-extra-classes="irs-outline irs-[value]"</code></td>
                <td>primary | success | warning | danger | info | teal | indigo | purple | pink | orange | dark</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->


      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('assets/lib/ion.rangeSlider/js/ion.rangeSlider.min.js')}}"></script>

    <script>
      $(function(){
        'use strict';

        $('.rangeslider1').ionRangeSlider();

        $('.rangeslider2').ionRangeSlider({
            min: 100,
            max: 1000,
            from: 550
        });

        $('.rangeslider3').ionRangeSlider({
            type: 'double',
            grid: true,
            min: 0,
            max: 1000,
            from: 200,
            to: 800,
            prefix: '$'
        });

        $('.rangeslider4').ionRangeSlider({
            type: 'double',
            grid: true,
            min: -1000,
            max: 1000,
            from: -500,
            to: 500,
            step: 250
        });

      });
    </script>
@endsection
