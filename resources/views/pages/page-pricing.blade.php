@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item"><a href="#">Pricing</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pricing 01</li>
          </ol>
          <h6 class="slim-pagetitle">Pricing</h6>
        </div><!-- slim-pageheader -->

        <div class="card card-pricing-one">
          <div class="row">
            <div class="col-lg">
              <div class="pricing-item">
                <div class="pricing-icon"><i class="icon ion-model-s"></i></div>
                <h5 class="pricing-title">Personal</h5>
                <p class="pricing-text">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum.</p>
                <h1 class="pricing-price">$19</h1>
                <a href="" class="btn btn-primary btn-pricing">Choose Plan</a>
              </div><!-- pricing-item -->
            </div><!-- col -->
            <div class="col-lg mg-t-30 mg-lg-t-0">
              <div class="pricing-item">
                <div class="pricing-icon"><i class="icon ion-android-boat"></i></div>
                <h5 class="pricing-title">Team</h5>
                <p class="pricing-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
                <h1 class="pricing-price">$99</h1>
                <a href="" class="btn btn-primary btn-pricing">Choose Plan</a>
              </div><!-- pricing-item -->
            </div>
            <div class="col-lg mg-t-30 mg-lg-t-0">
              <div class="pricing-item">
                <div class="pricing-icon"><i class="icon ion-plane"></i></div>
                <h5 class="pricing-title">Corporate</h5>
                <p class="pricing-text">Nemo enim ipsam volu ptatem quia voluptas sit asp ernatur aut odit aut fugit, sed quia conse quuntur magni dolores eos qui ratione.</p>
                <h1 class="pricing-price">$199</h1>
                <a href="" class="btn btn-primary btn-pricing">Choose Plan</a>
              </div><!-- pricing-item -->
            </div>
          </div><!-- row -->
        </div><!-- card -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
@endsection
