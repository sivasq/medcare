@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Margin Utilities</li>
          </ol>
          <h6 class="slim-pagetitle">Margin Utilities</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Setting A Margin</label>
          <p class="mg-b-20 mg-sm-b-40">You can set a margin to an element instantly by using the following utilities classes.</p>

          <div class="d-flex mg-b-40">
            <div class="wd-150 ht-80 bg-gray-400"></div>
            <div class="d-flex align-items-center justify-content-center wd-150 ht-80 bg-gray-400 mg-l-20">.mg-l-20</div>
            <div class="d-flex align-items-center justify-content-center wd-150 ht-80 bg-gray-400 mg-l-40">.mg-l-40</div>
          </div><!-- d-flex -->

          <p class="section-label">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-30p">Smaller Margin</th>
                <th class="wd-70p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <code class="pd-0 bg-transparent">.mg-t-[value]</code><br>
                  <code class="pd-0 bg-transparent">.mg-r-[value]</code><br>
                  <code class="pd-0 bg-transparent">.mg-b-[value]</code><br>
                  <code class="pd-0 bg-transparent">.mg-l-[value]</code>
                </td>
                <td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
              </tr>
            </tbody>
          </table>

          <table class="table table-reference mg-t-20">
            <thead>
              <tr>
                <th class="wd-30p">Bigger Margin</th>
                <th class="wd-70p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <code class="pd-0 bg-transparent">.mg-t-[value]</code><br>
                  <code class="pd-0 bg-transparent">.mg-r-[value]</code><br>
                  <code class="pd-0 bg-transparent">.mg-b-[value]</code><br>
                  <code class="pd-0 bg-transparent">.mg-l-[value]</code>
                </td>
                <td>15 | 20 | 25 | 30 | ... | 120 &nbsp; (step of 5)</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Media Query Margin</label>
          <p class="mg-b-20 mg-sm-b-40">You can also set a margin to a different media query using the following utilities classes.</p>

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
                <td>
                  <code class="pd-0 bg-transparent">.mg-[size]-t-[value]</code><br>
                  <code class="pd-0 bg-transparent">.mg-[size]-r-[value]</code><br>
                  <code class="pd-0 bg-transparent">.mg-[size]-b-[value]</code><br>
                  <code class="pd-0 bg-transparent">.mg-[size]-l-[value]</code>
                </td>
                <td>
                  <p class="mg-b-5">size: xs | sm | md | lg | xl</p>
                  <p class="mg-b-0">value: the margin value (refer to code above)</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Margin Auto</label>
          <p class="mg-b-20 mg-sm-b-40">You can also set a margin to a different media query using the following utilities classes.</p>

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
                <td><code class="pd-0 bg-transparent">.mg-t-auto</code></td>
                <td>Set a top margin to auto</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">.mg-r-auto</code></td>
                <td>Set a right margin to auto</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">.mg-b-auto</code></td>
                <td>Set a bottom margin to auto</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">.mg-l-auto</code></td>
                <td>Set a left margin to auto</td>
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
