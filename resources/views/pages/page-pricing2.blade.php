@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item"><a href="#">Pricing</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pricing 02</li>
          </ol>
          <h6 class="slim-pagetitle">Pricing</h6>
        </div><!-- slim-pageheader -->

        <div class="row row-sm">
          <div class="col-lg-4">
            <div class="card card-pricing-two">
              <h6 class="pricing-title">Personal</h6>
              <h1 class="pricing-price">$19</h1>
              <p class="mg-b-25">per month</p>

              <ul class="pricing-list">
                <li>Li Europan lingues es</li>
                <li>Membres del sam familie.</li>
                <li>Por scientie, musica</li>
                <li>Europa usa li sam</li>
                <li>Lor separat existentie</li>
              </ul><!-- pricing-list -->
              <a href="" class="btn btn-primary btn-pricing">Start Free Trial</a>
            </div><!-- card-pricing-two -->
          </div><!-- col -->
          <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <div class="card card-pricing-two">
              <h6 class="pricing-title">Team</h6>
              <h1 class="pricing-price">$99</h1>
              <p class="mg-b-25">per month</p>

              <ul class="pricing-list">
                <li>Li Europan lingues es</li>
                <li>Membres del sam familie.</li>
                <li>Por scientie, musica</li>
                <li>Europa usa li sam</li>
                <li>Lor separat existentie</li>
              </ul><!-- pricing-list -->
              <a href="" class="btn btn-primary btn-pricing">Start Free Trial</a>
            </div><!-- card-pricing-two -->
          </div><!-- col -->
          <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <div class="card card-pricing-two">
              <h6 class="pricing-title">Corporate</h6>
              <h1 class="pricing-price">$199</h1>
              <p class="mg-b-25">per month</p>

              <ul class="pricing-list">
                <li>Li Europan lingues es</li>
                <li>Membres del sam familie.</li>
                <li>Por scientie, musica</li>
                <li>Europa usa li sam</li>
                <li>Lor separat existentie</li>
              </ul><!-- pricing-list -->
              <a href="" class="btn btn-primary btn-pricing">Start Free Trial</a>
            </div><!-- card-pricing-two -->
          </div><!-- col -->
        </div><!-- row -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
@endsection
