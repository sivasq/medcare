@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Progress</li>
          </ol>
          <h6 class="slim-pagetitle">Progress</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Basic Progress</label>
          <p class="mg-b-20 mg-sm-b-40">A basic progress in all different colors.</p>

          <div class="progress mg-b-20">
            <div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <div class="progress mg-b-20">
            <div class="progress-bar bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <div class="progress mg-b-20">
            <div class="progress-bar bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <div class="progress mg-b-20">
            <div class="progress-bar bg-danger wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-indigo wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

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
                <td><code class="pd-0 bg-transparent">class="progress-bar bg-[value]"</code></td>
                <td>primary | success | warning | danger | info | teal | indigo | purple | orange | pink</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Striped Progress</label>
          <p class="mg-b-20 mg-sm-b-40">A striped progress in all different colors.</p>

          <div class="progress mg-b-20">
            <div class="progress-bar progress-bar-striped wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <div class="progress mg-b-20">
            <div class="progress-bar progress-bar-striped bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <div class="progress mg-b-20">
            <div class="progress-bar progress-bar-striped bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <div class="progress mg-b-20">
            <div class="progress-bar progress-bar-striped bg-danger wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <div class="progress">
            <div class="progress-bar progress-bar-striped bg-info wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Progress Sizes</label>
          <p class="mg-b-20 mg-sm-b-40">A basic progress in different sizes.</p>

          <span class="tx-uppercase tx-11 d-block mg-b-5">Size Super Extra Small</span>
          <div class="progress mg-b-10">
            <div class="progress-bar ht-2 wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress mg-b-10">
            <div class="progress-bar bg-success ht-2 wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-danger ht-2 wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Extra Small</span>
          <div class="progress mg-b-10">
            <div class="progress-bar progress-bar-xs wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress mg-b-10">
            <div class="progress-bar bg-success progress-bar-xs wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-danger progress-bar-xs wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Small</span>
          <div class="progress mg-b-10">
            <div class="progress-bar progress-bar-sm wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress mg-b-10">
            <div class="progress-bar bg-success progress-bar-sm wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-danger progress-bar-sm wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Normal</span>
          <div class="progress mg-b-10">
            <div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress mg-b-10">
            <div class="progress-bar bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-danger wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Large</span>
          <div class="progress mg-b-10">
            <div class="progress-bar progress-bar-lg wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress mg-b-10">
            <div class="progress-bar bg-success progress-bar-lg wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-danger progress-bar-lg wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

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
                <td><code class="pd-0 bg-transparent">class="progress-bar ht-2"</code></td>
                <td>A super extra small size of progress using the <code class="bg-transparent pd-0">.ht-2</code> class.</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">class="progress-bar progress-bar-xs"</code></td>
                <td>An extra small size of progress.</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">class="progress-bar progress-bar-sm"</code></td>
                <td>An small size of progress.</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">class="progress-bar progress-bar-lg"</code></td>
                <td>An large size of progress.</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Progress Label</label>
          <p class="mg-b-20 mg-sm-b-40">A basic progress with labels centered.</p>

          <div class="progress mg-b-10">
            <div class="progress-bar wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
          </div>
          <div class="progress mg-b-10">
            <div class="progress-bar bg-success wd-60p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-danger wd-95p" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
          </div>
        </div><!-- section-wrapper -->


      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
@endsection
