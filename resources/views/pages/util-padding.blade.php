@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Padding Utilities</li>
          </ol>
          <h6 class="slim-pagetitle">Padding Utilities</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Setting A Padding</label>
          <p class="mg-b-20 mg-sm-b-40">You can set a padding to an element instantly by using the following utilities classes.</p>

          <div class="d-flex mg-b-40">
            <div class="wd-200 ht-100 bg-gray-500 pd-l-30">
              <div class="d-flex align-items-center justify-content-center ht-100p bg-gray-400">.pd-l-30</div>
            </div>
            <div class="wd-200 ht-100 bg-gray-500 mg-l-20 pd-l-50">
              <div class="d-flex align-items-center justify-content-center ht-100p bg-gray-400">.pd-l-50</div>
            </div>
          </div><!-- d-flex -->

          <p class="section-label">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-30p">Smaller Padding</th>
                <th class="wd-70p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <code class="pd-0 bg-transparent">.pd-t-[value]</code><br>
                  <code class="pd-0 bg-transparent">.pd-r-[value]</code><br>
                  <code class="pd-0 bg-transparent">.pd-b-[value]</code><br>
                  <code class="pd-0 bg-transparent">.pd-l-[value]</code>
                </td>
                <td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
              </tr>
            </tbody>
          </table>

          <table class="table table-reference mg-t-20">
            <thead>
              <tr>
                <th class="wd-30p">Bigger Padding</th>
                <th class="wd-70p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <code class="pd-0 bg-transparent">.pd-t-[value]</code><br>
                  <code class="pd-0 bg-transparent">.pd-r-[value]</code><br>
                  <code class="pd-0 bg-transparent">.pd-b-[value]</code><br>
                  <code class="pd-0 bg-transparent">.pd-l-[value]</code>
                </td>
                <td>15 | 20 | 25 | 30 | ... | 120 &nbsp; (step of 5)</td>
              </tr>
            </tbody>
          </table>

          <table class="table table-reference mg-t-20">
            <thead>
              <tr>
                <th class="wd-30p">Even Bigger Padding</th>
                <th class="wd-70p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <code class="pd-0 bg-transparent">.pd-t-[value]</code><br>
                  <code class="pd-0 bg-transparent">.pd-r-[value]</code><br>
                  <code class="pd-0 bg-transparent">.pd-b-[value]</code><br>
                  <code class="pd-0 bg-transparent">.pd-l-[value]</code>
                </td>
                <td>110 | 120 | 130 | 140 | ... | 200 &nbsp; (step of 10)</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Media Query Padding</label>
          <p class="mg-b-20 mg-sm-b-40">You can also set a padding to a different media query using the following utilities classes.</p>

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
                  <code class="pd-0 bg-transparent">.pd-[size]-t-[value]</code><br>
                  <code class="pd-0 bg-transparent">.pd-[size]-r-[value]</code><br>
                  <code class="pd-0 bg-transparent">.pd-[size]-b-[value]</code><br>
                  <code class="pd-0 bg-transparent">.pd-[size]-l-[value]</code>
                </td>
                <td>
                  <p class="mg-b-5">size: xs | sm | md | lg | xl</p>
                  <p class="mg-b-0">value: the padding value (refer to code above)</p>
                </td>
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
