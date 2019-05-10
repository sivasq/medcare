@extends('layouts.mainlayout')

@section('content')
    <div class="page-error-wrapper">
      <div>
        <h1 class="error-title">505</h1>
        <h5 class="tx-sm-24 tx-normal">Oopps. Something is broken.</h5>
        <p class="mg-b-50">We've been automatically alerted of the issue and will work to fix it asap.</p>
        <p class="mg-b-50"><a href="{{url('db')}}" class="btn btn-error">Back to Home</a></p>
        <p class="error-footer">&copy; Copyright 2018. All Rights Reserved. Slim Bootstrap 4 Admin Dashboard Template.</p>
      </div>

    </div><!-- page-error-wrapper -->
@endsection
