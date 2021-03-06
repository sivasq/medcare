@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Height Utilities</li>
          </ol>
          <h6 class="slim-pagetitle">Height Utilities</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Setting A Height</label>
          <p class="mg-b-20 mg-sm-b-40">You can set a height to an element instantly by using the following utilities classes for height.</p>

          <div class="d-flex mg-b-40">
            <div class="d-flex align-items-center justify-content-center wd-150 ht-80 bg-gray-400">.ht-80</div>
            <div class="d-flex align-items-center justify-content-center wd-150 ht-150 bg-gray-400 mg-l-20">.ht-150</div>
            <div class="d-flex align-items-center justify-content-center wd-150 ht-100 bg-gray-400 mg-l-20">.ht-100</div>
          </div><!-- d-flex -->

          <p class="section-label">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-30p">Smaller Height</th>
                <th class="wd-70p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">.ht-[value]</code></td>
                <td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
              </tr>
            </tbody>
          </table>

          <table class="table table-reference mg-t-20">
            <thead>
              <tr>
                <th class="wd-30p">Regular Height</th>
                <th class="wd-70p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">.ht-[value]</code></td>
                <td>15 | 20 | 25 | 30 | ... | 100 &nbsp; (step of 5)</td>
              </tr>
            </tbody>
          </table>

          <table class="table table-reference mg-t-20">
            <thead>
              <tr>
                <th class="wd-30p">Bigger Height</th>
                <th class="wd-70p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">.ht-[value]</code></td>
                <td>150 | 200 | 250 | 300 | ... | 850 &nbsp; (step of 50)</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Percentage Height</label>
          <p class="mg-b-20 mg-sm-b-40">You can set a height through percentage using the following utilities classes.</p>

          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-30p">Class</th>
                <th class="wd-70p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">.ht-[value]p</code></td>
                <td>10 | 20 | 30 | 40 | ... | 100 &nbsp; (step of 10)</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Media Query Height</label>
          <p class="mg-b-20 mg-sm-b-40">You can also set a height to a different media query using the following utilities classes.</p>

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
                <td><code class="pd-0 bg-transparent">.ht-[size]-[value]</code></td>
                <td rowspan="2">
                  <p class="mg-b-5">size: xs | sm | md | lg | xl</p>
                  <p class="mg-b-0">value: the height value (refer to code above)</p>
                </td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">.ht-[size]-[value]p</code></td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Extra Height Classes</label>
          <p class="mg-b-20 mg-sm-b-40">You can also set a height using the extra utilities classes below.</p>

          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-30p">Class</th>
                <th class="wd-70p">Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">.ht-100v</code></td>
                <td>Set a height to an element based on viewport height.</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">.ht-auto</code></td>
                <td>Set an auto height to an element.</td>
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
