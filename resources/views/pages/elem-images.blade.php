@extends('layouts.mainlayout')

@section('headerscripts')
	@parent
    <link href="{{asset('assets/lib/Jcrop/css/Jcrop.css')}}" rel="stylesheet">
 @endsection

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Images</li>
          </ol>
          <h6 class="slim-pagetitle">Images</h6>
        </div><!-- slim-pageheader -->



        <div class="section-wrapper">
          <label class="section-title">Image Shapes</label>
          <p class="mg-b-20 mg-sm-b-40">A rounded, circle or thumbnail image.</p>

          <div class="row">
            <div class="col-sm-6 col-md-3">
              <img src="{{asset('assets/img/img0.svg')}}" class="img-fluid" alt="">
            </div><!-- col -->
            <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0">
              <img src="{{asset('assets/img/img0.svg')}}" class="img-fluid rounded" alt="">
            </div><!-- col -->
            <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <img src="{{asset('assets/img/img0.svg')}}" class="img-fluid rounded-circle" alt="">
            </div><!-- col -->
            <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <img src="{{asset('assets/img/img0.svg')}}" class="img-fluid img-thumbnail" alt="">
            </div><!-- col-2 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Image Cropper</label>
          <p class="mg-b-20 mg-sm-b-40">Jcrop is the quick and easy way to add image cropping functionality to your web application.</p>

          <img src="http://via.placeholder.com/1000x667" id="myImage" class="img-fluid" alt="">
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Image Options</label>
          <p class="mg-b-20 mg-sm-b-40">An image with overlayed option at bottom center of an image.</p>

          <div class="wd-sm-300">
            <figure class="overlay">
              <img src="http://via.placeholder.com/1000x667" class="img-fluid" alt="">
              <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                <div class="img-option img-option-sm">
                  <a href="#" class="img-option-link"><div><i class="icon ion-android-share-alt"></i></div></a>
                  <a href="#" class="img-option-link"><div><i class="icon ion-ios-gear"></i></div></a>
                  <a href="#" class="img-option-link"><div><i class="icon ion-images"></i></div></a>
                  <a href="#" class="img-option-link"><div><i class="icon ion-ios-star"></i></div></a>
                </div>
              </figcaption>
            </figure>
          </div><!-- wd-300 -->

          <div class="wd-sm-450 mg-t-30">
            <figure class="overlay">
              <img src="http://via.placeholder.com/1000x667" class="img-fluid" alt="">
              <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                <div class="img-option">
                  <a href="#" class="img-option-link"><div><i class="icon ion-android-share-alt"></i></div></a>
                  <a href="#" class="img-option-link"><div><i class="icon ion-ios-gear"></i></div></a>
                  <a href="#" class="img-option-link"><div><i class="icon ion-images"></i></div></a>
                  <a href="#" class="img-option-link"><div><i class="icon ion-ios-star"></i></div></a>
                </div>
              </figcaption>
            </figure>
          </div><!-- wd-300 -->
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('assets/lib/Jcrop/js/Jcrop.js')}}"></script>

    <script>
      $(function(){
        'use strict';

        $('#myImage').Jcrop({
          setSelect:   [ 100, 100, 300, 200 ]
        });
      });
    </script>
@endsection
