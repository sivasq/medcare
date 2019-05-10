@extends('layouts.mainlayout')

@section('headerscripts')
	@parent
    <link href="{{asset('assets/lib/jquery.steps/css/jquery.steps.css')}}" rel="stylesheet">
 @endsection

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Wizards</li>
          </ol>
          <h6 class="slim-pagetitle">Form Wizards</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Basic Content Wizard</label>
          <p class="mg-b-20 mg-sm-b-40">Below is an example of a basic horizontal form wizard.</p>

          <div id="wizard1">
            <h3>Personal Information</h3>
            <section>
              <p>Try the keyboard navigation by clicking arrow left or right!</p>
            </section>
            <h3>Billing Information</h3>
            <section>
              <p>Wonderful transition effects.</p>
            </section>
            <h3>Payment Details</h3>
            <section>
              <p>The next and previous buttons help you to navigate through your content.</p>
            </section>
          </div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Basic Wizard With Validation</label>
          <p class="mg-b-20 mg-sm-b-40">A basic form wizard with form validation using Parsley js form validation plugin.</p>

          <div id="wizard2">
            <h3>Personal Information</h3>
            <section>
              <p>Try the keyboard navigation by clicking arrow left or right!</p>
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                <input id="firstname" class="form-control" name="firstname" placeholder="Enter firstname" type="text" required>
              </div><!-- form-group -->
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                <input id="lastname" class="form-control" name="lastname" placeholder="Enter lastname" type="text" required>
              </div><!-- form-group -->
            </section>
            <h3>Billing Information</h3>
            <section>
              <p>Wonderful transition effects.</p>
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                <input id="email" class="form-control" name="email" placeholder="Enter email address" type="email" required>
              </div><!-- form-group -->
            </section>
            <h3>Payment Details</h3>
            <section>
              <p>The next and previous buttons help you to navigate through your content.</p>
            </section>
          </div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Vertical Orientation Wizard</label>
          <p class="mg-b-20 mg-sm-b-40">A basic content wizard with vertical orientation.</p>

          <div id="wizard3">
            <h3>Personal Information</h3>
            <section>
              <p>Try the keyboard navigation by clicking arrow left or right!</p>
            </section>
            <h3>Billing Information</h3>
            <section>
              <p>Wonderful transition effects.</p>
            </section>
            <h3>Payment Details</h3>
            <section>
              <p>The next and previous buttons help you to navigate through your content.</p>
            </section>
          </div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Equal Width Step Indicator</label>
          <p class="mg-b-20 mg-sm-b-40">A basic wizard that adds a custom style to make the step indicator equal width.</p>

          <div id="wizard4">
            <h3>Personal Information</h3>
            <section>
              <p>Try the keyboard navigation by clicking arrow left or right!</p>
            </section>
            <h3>Billing Information</h3>
            <section>
              <p>Wonderful transition effects.</p>
            </section>
            <h3>Payment Details</h3>
            <section>
              <p>The next and previous buttons help you to navigate through your content.</p>
            </section>
          </div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Custom Style Step Indicator</label>
          <p class="mg-b-20 mg-sm-b-40">Below are a simple styles for step indicator of a wizard</p>

          <div id="wizard5">
            <h3>Personal Information</h3>
            <section>
              <p>Try the keyboard navigation by clicking arrow left or right!</p>
            </section>
            <h3>Billing Information</h3>
            <section>
              <p>Wonderful transition effects.</p>
            </section>
            <h3>Payment Details</h3>
            <section>
              <p>The next and previous buttons help you to navigate through your content.</p>
            </section>
          </div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Custom Style Step Indicator: Circle</label>
          <p class="mg-b-20 mg-sm-b-40">Below are a simple styles for step indicator of a wizard</p>

          <div id="wizard6">
            <h3>Personal Information</h3>
            <section>
              <p>Try the keyboard navigation by clicking arrow left or right!</p>
            </section>
            <h3>Billing Information</h3>
            <section>
              <p>Wonderful transition effects.</p>
            </section>
            <h3>Payment Details</h3>
            <section>
              <p>The next and previous buttons help you to navigate through your content.</p>
            </section>
          </div>
        </div><!-- section-wrapper -->


      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('assets/lib/jquery.steps/js/jquery.steps.js')}}"></script>
    <script src="{{asset('assets/lib/parsleyjs/js/parsley.js')}}"></script>

    <script>
      $(document).ready(function(){
        'use strict';

        $('#wizard1').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>'
        });

        $('#wizard2').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          onStepChanging: function (event, currentIndex, newIndex) {
            if(currentIndex < newIndex) {
              // Step 1 form validation
              if(currentIndex === 0) {
                var fname = $('#firstname').parsley();
                var lname = $('#lastname').parsley();

                if(fname.isValid() && lname.isValid()) {
                  return true;
                } else {
                  fname.validate();
                  lname.validate();
                }
              }

              // Step 2 form validation
              if(currentIndex === 1) {
                var email = $('#email').parsley();
                if(email.isValid()) {
                  return true;
                } else { email.validate(); }
              }
            // Always allow step back to the previous step even if the current step is not valid.
            } else { return true; }
          }
        });

        $('#wizard3').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          stepsOrientation: 1
        });

        $('#wizard4').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          cssClass: 'wizard step-equal-width'
        });

        $('#wizard5').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          cssClass: 'wizard wizard-style-1'
        });

        $('#wizard6').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          cssClass: 'wizard wizard-style-2'
        });

        $('#wizard7').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          cssClass: 'wizard wizard-style-3'
        });

      });
    </script>
@endsection
