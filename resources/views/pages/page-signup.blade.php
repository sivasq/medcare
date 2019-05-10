@extends('layouts.mainlayout')

@section('content')
    <div class="signin-wrapper">

      <div class="signin-box signup">
        <h2 class="slim-logo"><a href="{{url('db')}}">slim<span>.</span></a></h2>
        <h3 class="signin-title-primary">Get Started!</h3>
        <h5 class="signin-title-secondary lh-4">It's free to signup and only takes a minute.</h5>

        <div class="row row-xs mg-b-10">
          <div class="col-sm"><input type="text" class="form-control" placeholder="Firstname"></div>
          <div class="col-sm mg-t-10 mg-sm-t-0"><input type="text" class="form-control" placeholder="Lastname"></div>
        </div><!-- row -->

        <div class="row row-xs mg-b-10">
          <div class="col-sm"><input type="email" class="form-control" placeholder="Email"></div>
          <div class="col-sm mg-t-10 mg-sm-t-0"><input type="password" class="form-control" placeholder="Password"></div>
        </div><!-- row -->

        <button class="btn btn-primary btn-block btn-signin">Sign Up</button>

        <div class="signup-separator"><span>or signup using</span></div>

        <button class="btn btn-facebook btn-block">Sign Up Using Facebook</button>
        <button class="btn btn-twitter btn-block">Sign Up Using Twitter</button>

        <p class="mg-t-40 mg-b-0">Already have an account? <a href="page-signin.blade.php">Sign In</a></p>
      </div><!-- signin-box -->

    </div><!-- signin-wrapper -->
@endsection
