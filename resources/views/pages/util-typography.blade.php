@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Typography Utilities</li>
          </ol>
          <h6 class="slim-pagetitle">Typography Utilities</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Font Size Utilities</label>
          <p class="mg-b-20 mg-sm-b-40">You can set a font size instantly to an element by using the following utilities classes.</p>

          <p class="section-label">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-30p">Class</th>
                <th class="wd-70p">Size</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">.tx-[size]</code></td>
                <td>8 | 9 | 10 | 11 | 12 | 13 | 14 | 15 | 16 </td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">.tx-[size]</code></td>
                <td>18 | 20 | 22 | 24 | ... | 140 (step of 2) </td>
              </tr>
            </tbody>
          </table>

          <p class="section-label mg-t-20">Media Query Class Reference</p>
          <table class="table table-reference table-responsive">
            <thead>
              <tr>
                <th class="wd-30p">Class</th>
                <th class="wd-30p">Viewport</th>
                <th class="wd-40p">Size</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">.tx-[viewport]-[size]</code></td>
                <td>xs | sm | md | lg | xl</td>
                <td>8 | 9 | 10 | 11 | 12 | 13 | 14 | 15 | 16 </td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">.tx-[viewport]-[size]</code></td>
                <td>xs | sm | md | lg | xl</td>
                <td>18 | 20 | 22 | 24 | ... | 140 (step of 2) </td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Font Weight Utilities</label>
          <p class="mg-b-20 mg-sm-b-40">You can set a font weight instantly to an element by using the following utilities classes.</p>

          <p class="section-label">Example</p>
          <h4 class="tx-bold tx-inverse">Slim Admin Template</h4>
          <h4 class="tx-normal tx-inverse">Slim Admin Template</h4>
          <h4 class="tx-thin tx-inverse">Slim Admin Template</h4>

          <p class="section-label mg-t-40">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-30p">Class</th>
                <th class="wd-70p">Weight</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">.tx-[weight]</code></td>
                <td>bold | semibold | medium | normal | light | thin | xthin</td>
              </tr>
            </tbody>
          </table>

          <p class="section-label mg-t-20">Media Query Class Reference</p>
          <table class="table table-reference table-responsive">
            <thead>
              <tr>
                <th class="wd-30p">Class</th>
                <th class="wd-30p">Viewport</th>
                <th class="wd-40p">Weight</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">.tx-[viewport]-[weight]</code></td>
                <td>xs | sm | md | lg | xl</td>
                <td>bold | semibold | medium | normal | light | thin | xthin</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Font Family Utilities</label>
          <p class="mg-b-20 mg-sm-b-40">You can set a font family instantly to an element by using the following utilities classes.</p>

          <p class="section-label">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-30p">Class</th>
                <th class="wd-70p">Family</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">.tx-[family]</code></td>
                <td>poppins | hind | firasans (default) | roboto | source</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Font Color Utilities</label>
          <p class="mg-b-20 mg-sm-b-40">You can set a font color instantly to an element by using the following utilities classes.</p>

          <p class="section-label">Example</p>
          <h4 class="tx-normal tx-primary">Slim Admin Template</h4>
          <h4 class="tx-normal tx-success">Slim Admin Template</h4>
          <h4 class="tx-normal tx-danger">Slim Admin Template</h4>

          <p class="section-label mg-t-40">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-30p">Class</th>
                <th class="wd-70p">Color</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">.tx-[color]</code></td>
                <td>primary | success | warning | danger | info | indigo | purple | orange | teal | pink | black | white | inverse</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">.tx-gray-[num]</code></td>
                <td>100 | 200 | 300 | 400 | 500 | 600 | 700 | 800 | 900</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">.tx-white-[transparency]</code></td>
                <td>2 | 3 | 4 | 5 | 6 | 7 | 8</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Font Spacing Utilities</label>
          <p class="mg-b-20 mg-sm-b-40">You can set a font spacing instantly to an element by using the following utilities classes.</p>

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
                <td><code class="pd-0 bg-transparent">.tx-spacing-[value]</code></td>
                <td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">.tx-spacing--[value]</code></td>
                <td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 (negative spacing result)</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Line Height Utilities</label>
          <p class="mg-b-20 mg-sm-b-40">You can set a line height instantly to an element by using the following utilities classes.</p>

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
                <td><code class="pd-0 bg-transparent">.lh-[value]</code></td>
                <td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15</td>
              </tr>
            </tbody>
          </table>

          <p class="section-label mg-t-20">Media Query Class Reference</p>
          <table class="table table-reference table-responsive">
            <thead>
              <tr>
                <th class="wd-30p">Class</th>
                <th class="wd-25p">Viewport</th>
                <th class="wd-45p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">.lh-[viewport]-[value]</code></td>
                <td>xs | sm | md | lg | xl</td>
                <td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15</td>
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
