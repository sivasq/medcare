@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pagination</li>
          </ol>
          <h6 class="slim-pagetitle">Pagination</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Basic Pagination</label>
          <p class="mg-b-20 mg-sm-b-40">Below are basic pagination navigation.</p>

          <div class="pagination-wrapper">
            <nav aria-label="Page navigation">
              <ul class="pagination mg-b-0">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div><!-- pagination-wrapper -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Justified Pagination</label>
          <p class="mg-b-20 mg-sm-b-40">Below are justified pagination where next and previous are in between.</p>

          <div class="pagination-wrapper justify-content-between">
            <ul class="pagination mg-b-0">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Last">
                  <i class="fa fa-angle-double-left"></i>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <i class="fa fa-angle-left"></i>
                </a>
              </li>
            </ul>

            <ul class="pagination mg-b-0">
              <li class="page-item"><a class="page-link" href="#">11</a></li>
              <li class="page-item active"><a class="page-link" href="#">12</a></li>
              <li class="page-item"><a class="page-link hidden-xs-down" href="#">13</a></li>
              <li class="page-item"><a class="page-link hidden-xs-down" href="#">14</a></li>
              <li class="page-item"><a class="page-link hidden-xs-down" href="#">15</a></li>
            </ul>

            <ul class="pagination mg-b-0">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <i class="fa fa-angle-right"></i>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Last">
                  <i class="fa fa-angle-double-right"></i>
                </a>
              </li>
            </ul>
          </div><!-- pagination-wrapper -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Pagination For Dark Background</label>
          <p class="mg-b-20 mg-sm-b-40">Below are basic pagination navigation for dark background.</p>

          <div class="pagination-wrapper bd-0 bg-primary">
            <nav aria-label="Page navigation">
              <ul class="pagination pagination-dark mg-b-0">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item disabled"><span class="page-link">...</span></li>
                <li class="page-item"><a class="page-link" href="#">10</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Last">
                    <i class="fa fa-angle-double-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div><!-- pagination-wrapper -->

          <div class="pagination-wrapper bd-0 bg-dark mg-t-20">
            <nav aria-label="Page navigation">
              <ul class="pagination pagination-dark mg-b-0">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item disabled"><span class="page-link">...</span></li>
                <li class="page-item"><a class="page-link" href="#">10</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Last">
                    <i class="fa fa-angle-double-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div><!-- pagination-wrapper -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Colored Pagination</label>
          <p class="mg-b-20 mg-sm-b-40">Below are the available colored pagination variants.</p>

          <div class="pagination-wrapper">
            <nav aria-label="Page navigation">
              <ul class="pagination pagination-success mg-b-0">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item disabled"><span class="page-link">...</span></li>
                <li class="page-item"><a class="page-link" href="#">10</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Last">
                    <i class="fa fa-angle-double-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div><!-- pagination-wrapper -->

          <div class="pagination-wrapper bd-0 bg-dark mg-t-20">
            <nav aria-label="Page navigation">
              <ul class="pagination pagination-dark pagination-danger mg-b-0">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item disabled"><span class="page-link">...</span></li>
                <li class="page-item"><a class="page-link" href="#">10</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Last">
                    <i class="fa fa-angle-double-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div><!-- pagination-wrapper -->

          <p class="section-label mg-t-20 mg-sm-t-40">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-50p">Class</th>
                <th class="wd-50p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">class="pagination pagination-[value]"</code></td>
                <td rowspan="2">primary | success | warning | danger | info | teal | indigo | purple | pink | orange</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">class="pagination pagination-dark pagination-[value]"</code></td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Circled Pagination</label>
          <p class="mg-b-20 mg-sm-b-40">Below are basic pagination navigation in circle.</p>

          <div class="pagination-wrapper">
            <ul class="pagination pagination-circle mg-b-0">
              <li class="page-item hidden-xs-down">
                <a class="page-link" href="#" aria-label="First"><i class="fa fa-angle-double-left"></i></a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item hidden-xs-down"><a class="page-link" href="#">3</a></li>
              <li class="page-item hidden-xs-down"><a class="page-link" href="#">4</a></li>
              <li class="page-item disabled"><span class="page-link">...</span></li>
              <li class="page-item"><a class="page-link" href="#">10</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a>
              </li>
              <li class="page-item hidden-xs-down">
                <a class="page-link" href="#" aria-label="Last"><i class="fa fa-angle-double-right"></i></a>
              </li>
            </ul>
          </div><!-- pagination-wrapper -->

          <div class="pagination-wrapper bd-0 bg-dark mg-t-20">
            <ul class="pagination pagination-dark pagination-circle pagination-danger mg-b-0">
              <li class="page-item hidden-xs-down">
                <a class="page-link" href="#" aria-label="First"><i class="fa fa-angle-double-left"></i></a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item hidden-xs-down"><a class="page-link" href="#">3</a></li>
              <li class="page-item hidden-xs-down"><a class="page-link" href="#">4</a></li>
              <li class="page-item disabled"><span class="page-link">...</span></li>
              <li class="page-item"><a class="page-link" href="#">10</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a>
              </li>
              <li class="page-item hidden-xs-down">
                <a class="page-link" href="#" aria-label="Last"><i class="fa fa-angle-double-right"></i></a>
              </li>
            </ul>
          </div><!-- pagination-wrapper -->
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
@endsection
