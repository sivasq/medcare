@extends('layouts.mainlayout')

@section('content')
    <div class="page-error-wrapper">
      <div>
        <h1 class="error-title">503</h1>
        <h5 class="tx-sm-24 tx-normal">Service Temporarily Unavailable.</h5>
        <p class="mg-b-50">The server is unable to service your request due to maintenance downtime or capacity problems.</p>
        <p class="mg-b-50"><a href="{{url('db')}}" class="btn btn-error">Back to Home</a></p>
        <p class="error-footer">&copy; Copyright 2018. All Rights Reserved. Slim Bootstrap 4 Admin Dashboard Template.</p>
      </div>

    </div><!-- page-error-wrapper -->
@endsection
