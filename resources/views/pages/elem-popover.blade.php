@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Popover</li>
          </ol>
          <h6 class="slim-pagetitle">Popover</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Default Popover</label>
          <p class="mg-b-20 mg-sm-b-40">Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site.</p>

          <p class="section-label">Static Demo</p>
          <div class="popover-static-demo mg-b-20">
            <div class="row">
              <div class="col-md-6">
                <div class="popover bs-popover-top">
                  <div class="arrow"></div>
                  <h3 class="popover-header">Popover top</h3>
                  <div class="popover-body">
                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  </div>
                </div><!-- popover -->
              </div><!-- col-6 -->
              <div class="col-md-6 mg-t-30 mg-md-t-0">
                <div class="popover bs-popover-bottom">
                  <div class="arrow"></div>
                  <h3 class="popover-header">Popover Bottom</h3>
                  <div class="popover-body">
                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  </div>
                </div><!-- popover -->
              </div><!-- col-6 -->
              <div class="col-md-6 mg-t-30">
                <div class="popover bs-popover-left">
                  <div class="arrow"></div>
                  <h3 class="popover-header">Popover Left</h3>
                  <div class="popover-body">
                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  </div>
                </div><!-- popover -->
              </div><!-- col-6 -->
              <div class="col-md-6 mg-t-30">
                <div class="popover bs-popover-right">
                  <div class="arrow"></div>
                  <h3 class="popover-header">Popover Right</h3>
                  <div class="popover-body">
                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  </div>
                </div><!-- popover -->
              </div><!-- col-6 -->
            </div><!-- row -->
          </div><!-- popover-static-demo -->

          <p class="section-label">Live Demo</p>
          <div class="bd pd-20">
            <div class="row tx-center">
              <div class="col-sm-6 col-lg-3">
                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="top" title="Popover top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Click me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="bottom" title="Popover bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Click me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="left" title="Popover left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Click me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="right" title="Popover right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Click me
</button>
              </div><!-- col-3 -->
            </div><!-- row -->
          </div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-25">
          <label class="section-title">Colored Head Popover</label>
          <p class="mg-b-20 mg-sm-b-40">A demonstration of colored title background of popover available in all four directions.</p>

          <p class="section-label">Static Demo</p>
          <div class="popover-static-demo mg-b-20">
            <div class="row">
              <div class="col-md-6">
                <div class="popover popover-head-primary bs-popover-top">
                  <div class="arrow"></div>
                  <h3 class="popover-header">Popover top</h3>
                  <div class="popover-body">
                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  </div>
                </div><!-- popover -->
              </div><!-- col-6 -->
              <div class="col-md-6 mg-t-30 mg-md-t-0">
                <div class="popover popover-head-info bs-popover-bottom">
                  <div class="arrow"></div>
                  <h3 class="popover-header">Popover Bottom</h3>
                  <div class="popover-body">
                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  </div>
                </div><!-- popover -->
              </div><!-- col-6 -->
              <div class="col-md-6 mg-t-30">
                <div class="popover popover-head-indigo bs-popover-left">
                  <div class="arrow"></div>
                  <h3 class="popover-header">Popover Left</h3>
                  <div class="popover-body">
                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  </div>
                </div><!-- popover -->
              </div><!-- col-6 -->
              <div class="col-md-6 mg-t-30">
                <div class="popover popover-head-purple bs-popover-right">
                  <div class="arrow"></div>
                  <h3 class="popover-header">Popover Right</h3>
                  <div class="popover-body">
                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  </div>
                </div><!-- popover -->
              </div><!-- col-6 -->
            </div><!-- row -->
          </div><!-- popover-static-demo -->

          <p class="section-label">Live Demo</p>
          <div class="bd pd-20">
            <div class="row tx-center">
              <div class="col-sm-6 col-lg-3">
                <button type="button" class="btn btn-secondary" data-container="body" data-popover-color="head-primary" data-placement="top" title="Popover top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Click me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
                <button type="button" class="btn btn-secondary" data-container="body" data-popover-color="head-teal" data-placement="bottom" title="Popover bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Click me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <button type="button" class="btn btn-secondary" data-container="body" data-popover-color="head-indigo" data-placement="left" title="Popover left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Click me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <button type="button" class="btn btn-secondary" data-container="body" data-popover-color="head-purple" data-placement="right" title="Popover right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Click me
</button>
              </div><!-- col-3 -->
            </div><!-- row -->
          </div><!-- bd -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-25">
          <label class="section-title">Colored Body Popover</label>
          <p class="mg-b-20 mg-sm-b-40">A demonstration of colored body background of popover available in all four directions.</p>

          <p class="section-label">Static Demo</p>
          <div class="popover-static-demo mg-b-20">
            <div class="row">
              <div class="col-md-6">
                <div class="popover popover-primary bs-popover-top">
                  <div class="arrow"></div>
                  <h3 class="popover-header">Popover top</h3>
                  <div class="popover-body">
                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  </div>
                </div><!-- popover -->
              </div><!-- col-6 -->
              <div class="col-md-6 mg-t-30 mg-md-t-0">
                <div class="popover popover-info bs-popover-bottom">
                  <div class="arrow"></div>
                  <h3 class="popover-header">Popover Bottom</h3>
                  <div class="popover-body">
                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  </div>
                </div><!-- popover -->
              </div><!-- col-6 -->
              <div class="col-md-6 mg-t-30">
                <div class="popover popover-indigo bs-popover-left">
                  <div class="arrow"></div>
                  <h3 class="popover-header">Popover Left</h3>
                  <div class="popover-body">
                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  </div>
                </div><!-- popover -->
              </div><!-- col-6 -->
              <div class="col-md-6 mg-t-30">
                <div class="popover popover-pink bs-popover-right">
                  <div class="arrow"></div>
                  <h3 class="popover-header">Popover Right</h3>
                  <div class="popover-body">
                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  </div>
                </div><!-- popover -->
              </div><!-- col-6 -->
            </div><!-- row -->
          </div>

          <p class="section-label">Live Demo</p>
          <div class="bd pd-20">
            <div class="row tx-center">
              <div class="col-sm-6 col-lg-3">
                <button type="button" class="btn btn-secondary" data-container="body" data-popover-color="primary" data-placement="top" title="Popover top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Click me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
                <button type="button" class="btn btn-secondary" data-container="body" data-popover-color="info" data-placement="bottom" title="Popover bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Click me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <button type="button" class="btn btn-secondary" data-container="body" data-popover-color="indigo" data-placement="left" title="Popover left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Click me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <button type="button" class="btn btn-secondary" data-container="body" data-popover-color="pink" data-placement="right" title="Popover right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Click me
</button>
              </div><!-- col-3 -->
            </div><!-- row -->
          </div><!-- bd -->
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

        // Initialize popover
        $('[data-toggle="popover"]').popover();

        $('[data-popover-color="head-primary"]').popover({
          template: '<div class="popover popover-head-primary" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });

        $('[data-popover-color="head-success"]').popover({
          template: '<div class="popover popover-head-success" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });

        $('[data-popover-color="head-warning"]').popover({
          template: '<div class="popover popover-head-warning" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });

        $('[data-popover-color="head-danger"]').popover({
          template: '<div class="popover popover-head-danger" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });

        $('[data-popover-color="head-info"]').popover({
          template: '<div class="popover popover-head-info" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });

        $('[data-popover-color="head-teal"]').popover({
          template: '<div class="popover popover-head-teal" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });

        $('[data-popover-color="head-indigo"]').popover({
          template: '<div class="popover popover-head-indigo" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });

        $('[data-popover-color="head-purple"]').popover({
          template: '<div class="popover popover-head-purple" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });

        $('[data-popover-color="head-pink"]').popover({
          template: '<div class="popover popover-head-pink" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });

        $('[data-popover-color="head-orange"]').popover({
          template: '<div class="popover popover-head-orange" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });

        $('[data-popover-color="head-dark"]').popover({
          template: '<div class="popover popover-head-dark" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });

        $('[data-popover-color="primary"]').popover({
          template: '<div class="popover popover-primary" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });

        $('[data-popover-color="success"]').popover({
          template: '<div class="popover popover-success" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });

        $('[data-popover-color="warning"]').popover({
          template: '<div class="popover popover-warning" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });

        $('[data-popover-color="danger"]').popover({
          template: '<div class="popover popover-danger" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });

        $('[data-popover-color="info"]').popover({
          template: '<div class="popover popover-info" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });

        $('[data-popover-color="teal"]').popover({
          template: '<div class="popover popover-teal" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });

        $('[data-popover-color="indigo"]').popover({
          template: '<div class="popover popover-indigo" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });

        $('[data-popover-color="purple"]').popover({
          template: '<div class="popover popover-purple" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });

        $('[data-popover-color="orange"]').popover({
          template: '<div class="popover popover-orange" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });

        $('[data-popover-color="pink"]').popover({
          template: '<div class="popover popover-pink" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        });

        // By default, Bootstrap doesn't auto close popover after appearing in the page
        // resulting other popover overlap each other. Doing this will auto dismiss a popover
        // when clicking anywhere outside of it
        $(document).on('click', function (e) {
          $('[data-toggle="popover"],[data-original-title]').each(function () {
              //the 'is' for buttons that trigger popups
              //the 'has' for icons within a button that triggers a popup
              if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                  (($(this).popover('hide').data('bs.popover')||{}).inState||{}).click = false  // fix for BS 3.3.6
              }

          });
        });
      });
    </script>
@endsection
