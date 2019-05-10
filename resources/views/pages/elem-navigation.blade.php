@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Navigation</li>
          </ol>
          <h6 class="slim-pagetitle">Navigation</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Basic Navigation</label>
          <p class="mg-b-20 mg-sm-b-40">Below is an example of a basic navigation for both light and dark.</p>

          <div class="pd-10 bd">
            <ul class="nav nav-gray-600 flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->

          <div class="pd-10 mg-t-20 bg-gray-400">
            <ul class="nav nav-gray-700 flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->

          <div class="pd-10 mg-t-20 bg-dark">
            <ul class="nav nav-white-800 flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Vertical Navigation</label>
          <p class="mg-b-20 mg-sm-b-40">Below is an example of a basic navigation in a vertical mode.</p>

          <div class="row">
            <div class="col-md-4 col-xl-3">
              <div class="pd-10 bd">
                <ul class="nav nav-gray-600 flex-column" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
                </ul>
              </div><!-- pd-10 -->
            </div><!-- col-3 -->
            <div class="col-md-4 col-xl-3 mg-t-30 mg-md-t-0">
              <div class="pd-10 bg-gray-400">
                <ul class="nav nav-gray-700 flex-column" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
                </ul>
              </div><!-- pd-10 -->
            </div><!-- col-3 -->
            <div class="col-md-4 col-xl-3 mg-t-30 mg-md-t-0">
              <div class="pd-10 bg-dark">
                <ul class="nav nav-white-800 flex-column" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
                </ul>
              </div><!-- pd-10 -->
            </div><!-- col-3 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Pills Navigation</label>
          <p class="mg-b-20 mg-sm-b-40">Below is an example of a pill navigation in both light and dark.</p>

          <div class="pd-10 bd">
            <ul class="nav nav-pills flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->

          <div class="pd-10 bg-gray-400 mg-t-20">
            <ul class="nav nav-pills flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->

          <div class="pd-10 bg-dark mg-t-20">
            <ul class="nav nav-pills nav-pills-for-dark flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Vertical Pills Navigation</label>
          <p class="mg-b-20 mg-sm-b-40">Below is an example of a pill navigation in vertical mode.</p>

          <div class="row">
            <div class="col-md-4 col-xl-3">
              <div class="pd-10 bd">
                <ul class="nav nav-pills flex-column" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
                </ul>
              </div><!-- pd-10 -->
            </div><!-- col-3 -->
            <div class="col-md-4 col-xl-3 mg-t-30 mg-md-t-0">
              <div class="pd-10 bg-gray-400">
                <ul class="nav nav-pills flex-column" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
                </ul>
              </div><!-- pd-10 -->
            </div><!-- col-3 -->
            <div class="col-md-4 col-xl-3 mg-t-30 mg-md-t-0">
              <div class="pd-10 bg-dark">
                <ul class="nav nav-pills nav-pills-for-dark flex-column" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
                </ul>
              </div><!-- pd-10 -->
            </div><!-- col-3 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Horizontal Alignment</label>
          <p class="mg-b-20 mg-sm-b-40">A navigation with center and right in which left is the default.</p>

          <div class="pd-10 bd">
            <ul class="nav nav-gray-600 flex-column flex-md-row justify-content-center" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->

          <div class="pd-10 bd mg-t-20">
            <ul class="nav nav-gray-600 flex-column flex-md-row justify-content-end" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Colored Bar Variations</label>
          <p class="mg-b-20 mg-sm-b-40">A navigation with colored bar that wrapped the navigation.</p>

          <div class="pd-10 bg-primary">
            <ul class="nav nav-white-800 flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->
          <div class="pd-10 mg-t-20 bg-info">
            <ul class="nav nav-white-800 flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->
          <div class="pd-10 mg-t-20 bg-purple">
            <ul class="nav nav-white-800 flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Gradient Bar Variations</label>
          <p class="mg-b-20 mg-sm-b-40">A navigation with gradient color bar that wrapped the navigation.</p>

          <div class="pd-10 bg-mantle">
            <ul class="nav nav-white-800 flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->
          <div class="pd-10 mg-t-20 bg-reef">
            <ul class="nav nav-white-800 flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->
          <div class="pd-10 mg-t-20 bg-transfile">
            <ul class="nav nav-white-800 flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Underline Navigation</label>
          <p class="mg-b-20 mg-sm-b-40">Below is a type of navigation that have a line at the bottom of active link.</p>

          <div class="ht-md-60 pd-x-20 bg-gray-200 d-flex align-items-center justify-content-center">
            <ul class="nav nav-underline align-items-center flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->

          <div class="ht-md-60 pd-x-20 bg-dark d-flex align-items-center justify-content-center mg-t-20">
            <ul class="nav nav-underline-dark align-items-center flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Colored Bar Underline Navigation</label>
          <p class="mg-b-20 mg-sm-b-40">Below is a type of navigation that have a line at the bottom of active link.</p>

          <div class="ht-md-60 pd-x-20 bg-primary d-flex align-items-center justify-content-center">
            <ul class="nav nav-underline-dark align-items-center flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->

          <div class="ht-md-60 pd-x-20 bg-mantle d-flex align-items-center justify-content-center mg-t-20">
            <ul class="nav nav-outline nav-underline-dark align-items-center flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->
        </div><!-- section-wrapper -->


      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
@endsection
