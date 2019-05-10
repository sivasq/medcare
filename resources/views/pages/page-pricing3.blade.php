@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item"><a href="#">Pricing</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pricing 03</li>
          </ol>
          <h6 class="slim-pagetitle">Pricing</h6>
        </div><!-- slim-pageheader -->

        <div class="row row-xs">
          <div class="col-sm-6 col-xl-3">
            <div class="card card-pricing-three">
              <div class="card-header">Personal</div>
              <div class="card-pricing">
                <h1>$19</h1>
                <p>per month</p>
              </div><!-- card-pricing -->
              <div class="card-body">
                <ul class="pricing-list">
                  <li>Li Europan lingues es</li>
                  <li>Membres del sam familie.</li>
                  <li>Por scientie, musica</li>
                  <li>Europa usa li sam</li>
                  <li>Lor separat existentie</li>
                </ul><!-- pricing-list -->
                <a href="" class="btn btn-primary btn-pricing">Start Free Trial</a>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-xl-3 mg-t-10 mg-sm-t-0">
            <div class="card card-pricing-three card-pricing-primary">
              <div class="card-header bg-primary">Team</div>
              <div class="card-pricing">
                <h1>$99</h1>
                <p>per month</p>
              </div><!-- card-pricing -->
              <div class="card-body">
                <ul class="pricing-list">
                  <li>Li Europan lingues es</li>
                  <li>Membres del sam familie.</li>
                  <li>Por scientie, musica</li>
                  <li>Europa usa li sam</li>
                  <li>Lor separat existentie</li>
                </ul><!-- pricing-list -->
                <a href="" class="btn btn-primary btn-pricing">Start Free Trial</a>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-xl-3 mg-t-10 mg-xl-t-0">
            <div class="card card-pricing-three">
              <div class="card-header">Corporate</div>
              <div class="card-pricing">
                <h1>$199</h1>
                <p>per month</p>
              </div><!-- card-pricing -->
              <div class="card-body">
                <ul class="pricing-list">
                  <li>Li Europan lingues es</li>
                  <li>Membres del sam familie.</li>
                  <li>Por scientie, musica</li>
                  <li>Europa usa li sam</li>
                  <li>Lor separat existentie</li>
                </ul><!-- pricing-list -->
                <a href="" class="btn btn-primary btn-pricing">Start Free Trial</a>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-xl-3 mg-t-10 mg-xl-t-0">
            <div class="card card-pricing-three">
              <div class="card-header">Business</div>
              <div class="card-pricing">
                <h1>$299</h1>
                <p>per month</p>
              </div><!-- card-pricing -->
              <div class="card-body">
                <ul class="pricing-list">
                  <li>Li Europan lingues es</li>
                  <li>Membres del sam familie.</li>
                  <li>Por scientie, musica</li>
                  <li>Europa usa li sam</li>
                  <li>Lor separat existentie</li>
                </ul><!-- pricing-list -->
                <a href="" class="btn btn-primary btn-pricing">Start Free Trial</a>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
@endsection
