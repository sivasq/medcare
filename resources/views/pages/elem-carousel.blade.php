@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Carousel</li>
          </ol>
          <h6 class="slim-pagetitle">Carousel</h6>
        </div><!-- slim-pageheader -->



        <div class="section-wrapper">
          <label class="section-title">Basic Carousel</label>
          <p class="mg-b-20 mg-sm-b-40">A basic carousel with previous and next control.</p>

          <div class="row">
            <div class="col-sm-8 col-lg-6">
              <div id="carousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Third slide">
                  </div>
                </div><!-- carousel-inner -->
                <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div><!-- carousel -->
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Carousel Control Position</label>
          <p class="mg-b-20 mg-sm-b-40">A basic carousel with different control positions.</p>

          <div class="row">
            <div class="col-md-6">
              <div id="carousel2" class="carousel slide control-top-left" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div><!-- carousel -->
            </div><!-- col-6 -->
            <div class="col-md-6 mg-t-30 mg-md-t-0">
              <div id="carousel3" class="carousel slide control-top-right" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carousel3" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel3" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div><!-- carousel -->
            </div><!-- col-6 -->

            <div class="col-md-6 mg-t-30">
              <div id="carousel4" class="carousel slide control-bottom-left" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carousel4" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel4" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div><!-- carousel -->
            </div><!-- col-6 -->

            <div class="col-md-6 mg-t-30">
              <div id="carousel5" class="carousel slide control-bottom-right" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carousel5" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel5" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div><!-- carousel -->
            </div><!-- col-6 -->
          </div><!-- row -->

          <p class="section-label mg-t-20 mg-sm-t-40">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Position</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">class="carousel slide control-[position]"</code></td>
                <td>top-left | top-right | bottom-left | bottom-right</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">With Dot Indicator</label>
          <p class="mg-b-20 mg-sm-b-40">A basic carousel with dot indicator at the center bottom of slide.</p>

          <div class="row">
            <div class="col-md-6">
              <div id="carousel6" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel6" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel6" data-slide-to="1"></li>
                  <li data-target="#carousel6" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Third slide">
                  </div>
                </div><!-- carousel-inner -->
                <a class="carousel-control-prev" href="#carousel6" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel6" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div><!-- carousel -->
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Dot Indicator Position</label>
          <p class="mg-b-20 mg-sm-b-40">Five different position to choose from when positioning the indicator of a slide.</p>

          <div class="row">
            <div class="col-md-6">
              <div id="carousel7" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators indicators-top-center">
                  <li data-target="#carousel7" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel7" data-slide-to="1"></li>
                  <li data-target="#carousel7" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Third slide">
                  </div>
                </div><!-- carousel-inner -->
                <a class="carousel-control-prev" href="#carousel7" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel7" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div><!-- carousel -->
            </div><!-- col-6 -->
            <div class="col-md-6 mg-t-30 mg-md-t-0">
              <div id="carousel8" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators indicators-top-left">
                  <li data-target="#carousel8" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel8" data-slide-to="1"></li>
                  <li data-target="#carousel8" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Third slide">
                  </div>
                </div><!-- carousel-inner -->
                <a class="carousel-control-prev" href="#carousel8" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel8" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div><!-- carousel -->
            </div><!-- col-6 -->

            <div class="col-md-6 mg-t-30">
              <div id="carousel9" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators indicators-top-right">
                  <li data-target="#carousel9" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel9" data-slide-to="1"></li>
                  <li data-target="#carousel9" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Third slide">
                  </div>
                </div><!-- carousel-inner -->
                <a class="carousel-control-prev" href="#carousel9" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel9" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div><!-- carousel -->
            </div><!-- col-6 -->
            <div class="col-md-6 mg-t-30">
              <div id="carousel10" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators indicators-bottom-right">
                  <li data-target="#carousel10" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel10" data-slide-to="1"></li>
                  <li data-target="#carousel10" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Third slide">
                  </div>
                </div><!-- carousel-inner -->
                <a class="carousel-control-prev" href="#carousel10" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel10" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div><!-- carousel -->
            </div><!-- col-6 -->
            <div class="col-md-6 mg-t-30">
              <div id="carousel11" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators indicators-bottom-left">
                  <li data-target="#carousel11" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel11" data-slide-to="1"></li>
                  <li data-target="#carousel11" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://via.placeholder.com/1000x667" alt="Third slide">
                  </div>
                </div><!-- carousel-inner -->
                <a class="carousel-control-prev" href="#carousel11" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel11" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div><!-- carousel -->
            </div><!-- col-6 -->
          </div><!-- row -->

          <p class="section-label mg-t-20 mg-sm-t-40">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-50p">Class</th>
                <th class="wd-50p">Position</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">class="carousel-indicators indicators-[position]"</code></td>
                <td>top-center | top-left | top-right | bottom-left | bottom-right</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Content Carousel</label>
          <p class="mg-b-20 mg-sm-b-40">An alternative to image using content instead of sliding an image.</p>

          <div class="row">
            <div class="col-sm-8 col-lg-6">
              <div id="carousel12" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel12" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel12" data-slide-to="1"></li>
                  <li data-target="#carousel12" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <div class="bg-primary pd-30 ht-300 d-flex align-items-center">
                      <div class="tx-white">
                        <p class="tx-uppercase tx-11 tx-spacing-2">Recent Article</p>
                        <h5 class="lh-5 mg-b-20">20 Best Travel Tips After 5 Years Of Traveling The World</h5>
                        <nav class="nav flex-row tx-13">
                          <a href="" class="tx-white-8 hover-white pd-l-0 pd-r-5">Edit</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">Unpublish</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">Delete</a>
                        </nav>
                      </div>
                    </div><!-- d-flex -->
                  </div>
                  <div class="carousel-item">
                    <div class="bg-success pd-30 ht-300 d-flex align-items-center">
                      <div class="tx-white">
                        <p class="tx-uppercase tx-11 tx-spacing-2">Recent Article</p>
                        <h5 class="lh-5 mg-b-20">How I Flew Around the World in Business Class for $1,340</h5>
                        <nav class="nav flex-row tx-13">
                          <a href="" class="tx-white-8 hover-white pd-l-0 pd-r-5">Edit</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">Unpublish</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">Delete</a>
                        </nav>
                      </div>
                    </div><!-- d-flex -->
                  </div>
                  <div class="carousel-item">
                    <div class="bg-danger pd-30 ht-300 d-flex align-items-center">
                      <div class="tx-white">
                        <p class="tx-uppercase tx-11 tx-spacing-2">Recent Article</p>
                        <h5 class="lh-5 mg-b-20">10 Reasons Why Travel Makes You a Happier Person</h5>
                        <nav class="nav flex-row tx-13">
                          <a href="" class="tx-white-8 hover-white pd-l-0 pd-r-5">Edit</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">Unpublish</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">Delete</a>
                        </nav>
                      </div>
                    </div><!-- d-flex -->
                  </div>
                </div><!-- carousel-inner -->
              </div><!-- carousel -->
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
@endsection
