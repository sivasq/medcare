@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Alerts</li>
          </ol>
          <h6 class="slim-pagetitle">Alerts</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Basic Alerts</label>
          <p class="mg-b-20 mg-sm-b-40">Use one of the four required contextual classes</p>

          <div class="alert alert-success" id="flashMessage" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Well done!</strong> You successfully read this important alert message.
          </div><!-- alert -->

          <div class="alert alert-info" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
          </div><!-- alert -->

          <div class="alert alert-warning" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Warning!</strong> Better check yourself, you're not looking too good.
          </div><!-- alert -->

          <div class="alert alert-danger mg-b-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Oh snap!</strong> Change a few things up and try submitting again.
          </div><!-- alert -->

          <p class="section-label mg-t-20 mg-sm-t-40">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Values</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">class="alert alert-[value]"</code></td>
                <td>success | info | warning | danger</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Outline Alerts</label>
          <p class="mg-b-20 mg-sm-b-40">Use one of the four required contextual classes</p>

          <div class="alert alert-outline alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Well done!</strong> You successfully read this important alert message.
          </div><!-- alert -->

          <div class="alert alert-outline alert-info" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
          </div><!-- alert -->

          <div class="alert alert-outline alert-warning" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Warning!</strong> Better check yourself, you're not looking too good.
          </div><!-- alert -->

          <div class="alert alert-outline alert-danger mg-b-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Oh snap!</strong> Change a few things up and try submitting again.
          </div><!-- alert -->

          <p class="section-label mg-t-20 mg-sm-t-40">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Values</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">class="alert alert-outline alert-[value]"</code></td>
                <td>success | info | warning | danger</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Solid Color Alerts</label>
          <p class="mg-b-20 mg-sm-b-40">Use one of the four required contextual classes</p>

          <div class="alert alert-solid alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Well done!</strong> You successfully read this important alert message.
          </div><!-- alert -->

          <div class="alert alert-solid alert-info" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
          </div><!-- alert -->

          <div class="alert alert-solid alert-warning" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Warning!</strong> Better check yourself, you're not looking too good.
          </div><!-- alert -->

          <div class="alert alert-solid alert-danger mg-b-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Oh snap!</strong> Change a few things up and try submitting again.
          </div><!-- alert -->

          <p class="section-label mg-t-20 mg-sm-t-40">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Values</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">class="alert alert-solid alert-[value]"</code></td>
                <td>success | info | warning | danger</td>
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
