@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tooltip</li>
          </ol>
          <h6 class="slim-pagetitle">Tooltip</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Default Tooltip</label>
          <p class="mg-b-20 mg-sm-b-40">Four options are available: top, right, bottom, and left aligned.</p>

          <p class="section-label">Static Demo</p>
          <div class="tooltip-static-demo mg-b-25">
            <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="tooltip bs-tooltip-top" role="tooltip">
                  <div class="arrow"></div>
                  <div class="tooltip-inner">
                    Tooltip on the top
                  </div>
                </div>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
                <div class="tooltip bs-tooltip-bottom" role="tooltip">
                  <div class="arrow"></div>
                  <div class="tooltip-inner">
                    Tooltip on the bottom
                  </div>
                </div>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <div class="tooltip bs-tooltip-left" role="tooltip">
                  <div class="arrow"></div>
                  <div class="tooltip-inner">
                    Tooltip on the left
                  </div>
                </div>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <div class="tooltip bs-tooltip-right" role="tooltip">
                  <div class="arrow"></div>
                  <div class="tooltip-inner">
                    Tooltip on the right
                  </div>
                </div>
              </div><!-- col-3 -->
            </div><!-- row -->
          </div><!-- tooltip-static-demo -->

          <p class="section-label">Live Demo</p>
          <div class="bd pd-25">
            <div class="row tx-center">
              <div class="col-sm-6 col-lg-3">
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
  Hover me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top">
  Hover me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
  Hover me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                  Hover me
</button>
              </div><!-- col-3 -->
            </div><!-- row -->
          </div><!-- bd -->

          <p class="section-label mg-t-20 mg-sm-t-40">Required Attributes</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-50p">Attribute</th>
                <th class="wd-50p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">data-placement="[value]"</code></td>
                <td>top | bottom | left | right </td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">title="[value]"</code></td>
                <td>Any title value that you have in mind.</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Colored Tooltip</label>
          <p class="mg-b-20 mg-sm-b-40">Colored tooltip. Four options are available: top, right, bottom, and left aligned.</p>

          <p class="section-label">Static Demo</p>
          <div class="tooltip-static-demo">
            <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="tooltip tooltip-primary bs-tooltip-top" role="tooltip">
                  <div class="arrow"></div>
                  <div class="tooltip-inner">
                    Tooltip on the top
                  </div>
                </div>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
                <div class="tooltip tooltip-primary bs-tooltip-bottom" role="tooltip">
                  <div class="arrow"></div>
                  <div class="tooltip-inner">
                    Tooltip on the bottom
                  </div>
                </div>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <div class="tooltip tooltip-primary bs-tooltip-left" role="tooltip">
                  <div class="arrow"></div>
                  <div class="tooltip-inner">
                    Tooltip on the left
                  </div>
                </div>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <div class="tooltip tooltip-primary bs-tooltip-right" role="tooltip">
                  <div class="arrow"></div>
                  <div class="tooltip-inner">
                    Tooltip on the right
                  </div>
                </div>
              </div><!-- col-3 -->
            </div><!-- row -->
          </div><!-- tooltip-static-demo -->

          <div class="tooltip-static-demo mg-t-20">
            <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="tooltip tooltip-purple bs-tooltip-top" role="tooltip">
                  <div class="arrow"></div>
                  <div class="tooltip-inner">
                    Tooltip on the top
                  </div>
                </div>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
                <div class="tooltip tooltip-purple bs-tooltip-bottom" role="tooltip">
                  <div class="arrow"></div>
                  <div class="tooltip-inner">
                    Tooltip on the bottom
                  </div>
                </div>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <div class="tooltip tooltip-purple bs-tooltip-left" role="tooltip">
                  <div class="arrow"></div>
                  <div class="tooltip-inner">
                    Tooltip on the left
                  </div>
                </div>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <div class="tooltip tooltip-purple bs-tooltip-right" role="tooltip">
                  <div class="arrow"></div>
                  <div class="tooltip-inner">
                    Tooltip on the right
                  </div>
                </div>
              </div><!-- col-3 -->
            </div><!-- row -->
          </div><!-- tooltip-static-demo -->

          <p class="section-label mg-t-25">Live Demo</p>
          <div class="bd pd-20">
            <div class="row tx-center">
              <div class="col-sm-6 col-lg-3">
                <button type="button" class="btn btn-secondary" data-toggle="tooltip-primary" data-placement="top" title="Tooltip on top">
  Hover me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
                <button type="button" class="btn btn-secondary" data-toggle="tooltip-primary" data-placement="bottom" title="Tooltip on top">
  Hover me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <button type="button" class="btn btn-secondary" data-toggle="tooltip-primary" data-placement="left" title="Tooltip on left">
  Hover me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <button type="button" class="btn btn-secondary" data-toggle="tooltip-primary" data-placement="right" title="Tooltip on right">
                  Hover me
</button>
              </div><!-- col-3 -->
            </div><!-- row -->
          </div><!-- bd -->

          <div class="bd pd-20 mg-t-20">
            <div class="row tx-center">
              <div class="col-sm-6 col-lg-3">
                <button type="button" class="btn btn-secondary" data-toggle="tooltip-purple" data-placement="top" title="Tooltip on top">
  Hover me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
                <button type="button" class="btn btn-secondary" data-toggle="tooltip-purple" data-placement="bottom" title="Tooltip on top">
  Hover me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <button type="button" class="btn btn-secondary" data-toggle="tooltip-purple" data-placement="left" title="Tooltip on left">
  Hover me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <button type="button" class="btn btn-secondary" data-toggle="tooltip-purple" data-placement="right" title="Tooltip on right">
                  Hover me
</button>
              </div><!-- col-3 -->
            </div><!-- row -->
          </div><!-- bd -->

          <p class="section-label mg-t-40">Required Attributes</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Attribute</th>
                <th class="wd-60p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">data-toggle="tooltip-[value]"</code></td>
                <td>primary | success | warning | danger | info | indigo | purple | orange | teal | pink </td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">data-placement="[value]"</code></td>
                <td>top | bottom | left | right </td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">title="[value]"</code></td>
                <td>Any title value that you have in mind.</td>
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

    <script>
      $(function(){
        'use strict';

        // Initialize tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // colored tooltip
        $('[data-toggle="tooltip-primary"]').tooltip({
          template: '<div class="tooltip tooltip-primary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });

        $('[data-toggle="tooltip-success"]').tooltip({
          template: '<div class="tooltip tooltip-success" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });

        $('[data-toggle="tooltip-warning"]').tooltip({
          template: '<div class="tooltip tooltip-warning" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });

        $('[data-toggle="tooltip-danger"]').tooltip({
          template: '<div class="tooltip tooltip-danger" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });

        $('[data-toggle="tooltip-info"]').tooltip({
          template: '<div class="tooltip tooltip-info" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });

        $('[data-toggle="tooltip-indigo"]').tooltip({
          template: '<div class="tooltip tooltip-indigo" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });

        $('[data-toggle="tooltip-purple"]').tooltip({
          template: '<div class="tooltip tooltip-purple" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });

        $('[data-toggle="tooltip-teal"]').tooltip({
          template: '<div class="tooltip tooltip-teal" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });

        $('[data-toggle="tooltip-orange"]').tooltip({
          template: '<div class="tooltip tooltip-orange" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });

        $('[data-toggle="tooltip-pink"]').tooltip({
          template: '<div class="tooltip tooltip-pink" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });
      });
    </script>
@endsection
