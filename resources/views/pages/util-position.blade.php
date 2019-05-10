@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Position Utilities</li>
          </ol>
          <h6 class="slim-pagetitle">Position Utilities</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Setting A Position</label>
          <p class="mg-b-20 mg-sm-b-40">You can set a position to an element instantly by using the following utilities classes.</p>

          <p class="section-label">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-30p">Class</th>
                <th class="wd-70p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">.pos-relative</code></td>
                <td>Set a relative position to an element.</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">.pos-absolute</code></td>
                <td>Set an absolute position to an element.</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">.pos-fixed</code></td>
                <td>Set a fixed position to an element.</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">.pos-static</code></td>
                <td>Set a static position to an element.</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Top, Right, Bottom &amp; Left Positioning</label>
          <p class="mg-b-20 mg-sm-b-40">You can set a top,right,bottom and left position to an element using the following utilities classes.</p>

          <p class="section-label">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-30p">Class</th>
                <th class="wd-70p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">.t-[value]</code></td>
                <td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">.r-[value]</code></td>
                <td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">.b-[value]</code></td>
                <td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">.l-[value]</code></td>
                <td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">X and Y Positioning</label>
          <p class="mg-b-20 mg-sm-b-40">You can set a top and bottom (y) and left and right (x) or even all (a) position to an element using the following utilities classes.</p>

          <p class="section-label">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-30p">Class</th>
                <th class="wd-70p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">.x-[value]</code></td>
                <td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">.y-[value]</code></td>
                <td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">.a-[value]</code></td>
                <td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Negative Positioning</label>
          <p class="mg-b-20 mg-sm-b-40">You can set a negative positioning to an element using the following utilities classes.</p>

          <p class="section-label">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-30p">Class</th>
                <th class="wd-70p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">.t--[value]</code></td>
                <td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">.r--[value]</code></td>
                <td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">.b--[value]</code></td>
                <td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">.l--[value]</code></td>
                <td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Z-Index Positioning</label>
          <p class="mg-b-20 mg-sm-b-40">You can set a z-index to an element instantly using the following utilities classes.</p>

          <p class="section-label">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-30p">Class</th>
                <th class="wd-70p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">.z-index-[value]</code></td>
                <td>10 | 50 | 100 | 150 | 200</td>
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
@endsection
