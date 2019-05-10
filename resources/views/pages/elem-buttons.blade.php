@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Buttons</li>
          </ol>
          <h6 class="slim-pagetitle">Buttons</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Default Buttons</label>
          <p class="mg-b-20 mg-sm-b-40">Predefined button styles, each serving its own semantic purpose.</p>

          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="btn-demo">
                <button class="btn btn-primary btn-block mg-b-10">Primary</button>
                <button class="btn btn-primary active btn-block mg-b-10">Active</button>
                <button class="btn btn-primary disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0">
              <div class="btn-demo">
                <button class="btn btn-secondary btn-block mg-b-10">Secondary</button>
                <button class="btn btn-secondary active btn-block mg-b-10">Active</button>
                <button class="btn btn-secondary disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Button Sizes</label>
          <p class="mg-b-20 mg-sm-b-40">A button with small and large size.</p>

          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="btn-demo">
                <button class="btn btn-primary btn-sm btn-block mg-b-10">Small</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->
            <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0">
              <div class="btn-demo">
                <button class="btn btn-secondary btn-sm btn-block mg-b-10">Small</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->
          </div><!-- row -->

          <div class="row mg-t-5">
            <div class="col-sm-6 col-md-3">
              <div class="btn-demo">
                <button class="btn btn-primary btn-lg btn-block mg-b-10">Large</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->
            <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0">
              <div class="btn-demo">
                <button class="btn btn-secondary btn-lg btn-block mg-b-10">Large</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Colored Buttons</label>
          <p class="mg-b-20 mg-sm-b-40">Predefined button styles, each serving its own semantic purpose.</p>

          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="btn-demo">
                <button class="btn btn-success btn-block mg-b-10">Success</button>
                <button class="btn btn-success active btn-block mg-b-10">Active</button>
                <button class="btn btn-success disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0">
              <div class="btn-demo">
                <button class="btn btn-warning btn-block mg-b-10">Warning</button>
                <button class="btn btn-warning active btn-block mg-b-10">Active</button>
                <button class="btn btn-warning disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <div class="btn-demo">
                <button class="btn btn-danger btn-block mg-b-10">Danger</button>
                <button class="btn btn-danger active btn-block mg-b-10">Active</button>
                <button class="btn btn-danger disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <div class="btn-demo">
                <button class="btn btn-info btn-block mg-b-10">Info</button>
                <button class="btn btn-info active btn-block mg-b-10">Active</button>
                <button class="btn btn-info disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Additional Colored Buttons</label>
          <p class="mg-b-20 mg-sm-b-40">Predefined button styles, each serving its own semantic purpose.</p>

          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="btn-demo">
                <button class="btn btn-indigo btn-block mg-b-10">Indigo</button>
                <button class="btn btn-indigo active btn-block mg-b-10">Active</button>
                <button class="btn btn-indigo disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0">
              <div class="btn-demo">
                <button class="btn btn-purple btn-block mg-b-10">Purple</button>
                <button class="btn btn-purple active btn-block mg-b-10">Active</button>
                <button class="btn btn-purple disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <div class="btn-demo">
                <button class="btn btn-teal btn-block mg-b-10">Teal</button>
                <button class="btn btn-teal active btn-block mg-b-10">Active</button>
                <button class="btn btn-teal disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <div class="btn-demo">
                <button class="btn btn-pink btn-block mg-b-10">Pink</button>
                <button class="btn btn-pink active btn-block mg-b-10">Active</button>
                <button class="btn btn-pink disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Outline Buttons</label>
          <p class="mg-b-20 mg-sm-b-40">Predefined button styles, each serving its own semantic purpose.</p>

          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="btn-demo">
                <button class="btn btn-outline-primary btn-block mg-b-10">Primary</button>
                <button class="btn btn-outline-primary active btn-block mg-b-10">Active</button>
                <button class="btn btn-outline-primary disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->
            <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0">
              <div class="btn-demo">
                <button class="btn btn-outline-secondary btn-block mg-b-10">Secondary</button>
                <button class="btn btn-outline-secondary active btn-block mg-b-10">Active</button>
                <button class="btn btn-outline-secondary disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->
            <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <div class="btn-demo">
                <button class="btn btn-outline-success btn-block mg-b-10">Secondary</button>
                <button class="btn btn-outline-success active btn-block mg-b-10">Active</button>
                <button class="btn btn-outline-success disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->
            <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <div class="btn-demo">
                <button class="btn btn-outline-danger btn-block mg-b-10">Secondary</button>
                <button class="btn btn-outline-danger active btn-block mg-b-10">Active</button>
                <button class="btn btn-outline-danger disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->
          </div><!-- row -->

          <p class="section-label mg-t-20 mg-sm-t-40">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-35p">Class</th>
                <th class="wd-65p">Values</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">class="btn btn-outline-[value]"</code></td>
                <td>primary | success | info | warning | danger | indigo | turtle | teal | pink | orange</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Rounded Buttons</label>
          <p class="mg-b-20 mg-sm-b-40">A very rounded corner for both basic and outline buttons.</p>

          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="btn-demo">
                <button class="btn btn-oblong btn-primary btn-block mg-b-10">Primary</button>
                <button class="btn btn-oblong btn-outline-primary btn-block mg-b-10">Primary</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0">
              <div class="btn-demo">
                <button class="btn btn-oblong btn-secondary btn-block mg-b-10">Secondary</button>
                <button class="btn btn-oblong btn-outline-secondary btn-block mg-b-10">Secondary</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <div class="btn-demo">
                <button class="btn btn-oblong btn-success btn-block mg-b-10">Success</button>
                <button class="btn btn-oblong btn-outline-success btn-block mg-b-10">Success</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <div class="btn-demo">
                <button class="btn btn-oblong btn-danger btn-block mg-b-10">Danger</button>
                <button class="btn btn-oblong btn-outline-danger btn-block">Danger</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->
          </div><!-- row -->

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
                <td><code class="pd-0 bg-transparent">class="btn btn-oblong btn-[value]"</code></td>
                <td rowspan="2" class="valign-middle-force">primary | success | warning | danger | info | teal | indigo | purple | pink | light | dark</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">class="btn btn-oblong btn-outline-[value]"</code></td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Button with Icons</label>
          <p class="mg-b-20 mg-sm-b-40">A basic button with added icons.</p>

          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="btn-demo">
                <button class="btn btn-primary btn-block mg-b-10"><i class="fa fa-file-text-o mg-r-5"></i> Compose</button>
                <button class="btn btn-outline-primary btn-block mg-b-10"><i class="fa fa-file-text-o mg-r-5"></i> Compose</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0">
              <div class="btn-demo">
                <button class="btn btn-secondary btn-block mg-b-10"><i class="fa fa-paper-plane mg-r-5"></i> Send</button>
                <button class="btn btn-outline-secondary btn-block mg-b-10"><i class="fa fa-paper-plane mg-r-5"></i> Send</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->
          </div><!-- row -->
          <p class="mg-b-0 mg-t-10">For more icons to use, go to <a href="elem-icons.html">icons page</a> of this template.</p>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Icon Buttons</label>
          <p class="mg-b-20 mg-sm-b-40">A button variant for using only icons.</p>

          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="demo-btn-list">
                <a href="#" class="btn btn-primary btn-icon"><div><i class="fa fa-facebook"></i></div></a>
                <a href="#" class="btn btn-info btn-icon"><div><i class="fa fa-twitter"></i></div></a>
                <a href="#" class="btn btn-danger btn-icon"><div><i class="fa fa-google-plus"></i></div></a>
                <a href="#" class="btn btn-dark btn-icon"><div><i class="fa fa-codepen"></i></div></a>
                <a href="#" class="btn btn-warning btn-icon"><div><i class="fa fa-stack-overflow"></i></div></a>
              </div><!-- demo-btn-list -->
            </div><!-- col-5 -->
            <div class="col-md-6 col-lg-4 mg-t-20 mg-md-t-0">
              <div class="demo-btn-list">
                <a href="#" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-facebook"></i></div></a>
                <a href="#" class="btn btn-outline-info btn-icon"><div><i class="fa fa-twitter"></i></div></a>
                <a href="#" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-google-plus"></i></div></a>
                <a href="#" class="btn btn-outline-dark btn-icon"><div><i class="fa fa-codepen"></i></div></a>
                <a href="#" class="btn btn-outline-warning btn-icon"><div><i class="fa fa-stack-overflow"></i></div></a>
              </div><!-- demo-btn-list -->
            </div><!-- col-5 -->
          </div><!-- row -->

          <div class="row mg-t-20">
            <div class="col-md-6 col-lg-4">
              <div class="demo-btn-list">
                <a href="#" class="btn btn-primary btn-icon rounded-circle"><div><i class="fa fa-facebook"></i></div></a>
                <a href="#" class="btn btn-info btn-icon rounded-circle"><div><i class="fa fa-twitter"></i></div></a>
                <a href="#" class="btn btn-danger btn-icon rounded-circle"><div><i class="fa fa-google-plus"></i></div></a>
                <a href="#" class="btn btn-dark btn-icon rounded-circle"><div><i class="fa fa-codepen"></i></div></a>
                <a href="#" class="btn btn-warning btn-icon rounded-circle"><div><i class="fa fa-stack-overflow"></i></div></a>
              </div><!-- demo-btn-list -->
            </div><!-- col-5 -->
            <div class="col-md-6 col-lg-4 mg-t-20 mg-lg-t-0">
              <div class="demo-btn-list">
                <a href="#" class="btn btn-outline-primary btn-icon rounded-circle"><div><i class="fa fa-facebook"></i></div></a>
                <a href="#" class="btn btn-outline-info btn-icon rounded-circle"><div><i class="fa fa-twitter"></i></div></a>
                <a href="#" class="btn btn-outline-danger btn-icon rounded-circle"><div><i class="fa fa-google-plus"></i></div></a>
                <a href="#" class="btn btn-outline-dark btn-icon rounded-circle"><div><i class="fa fa-codepen"></i></div></a>
                <a href="#" class="btn btn-outline-warning btn-icon rounded-circle"><div><i class="fa fa-stack-overflow"></i></div></a>
              </div><!-- demo-btn-list -->
            </div><!-- col-5 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Dropdown Buttons</label>
          <p class="mg-b-20 mg-sm-b-40">A button with added dropdown.</p>

          <div class="d-sm-flex">
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown button
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <div class="dropdown mg-sm-l-10 mg-t-10 mg-sm-t-0">
              <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown button
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
          </div><!-- d-flex -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Button Groups</label>
          <p class="mg-b-20 mg-sm-b-40">Group a series of buttons together on a single line with the button group.</p>

          <div class="row">
            <div class="col-lg-4">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary pd-x-25 active">Left</button>
                <button type="button" class="btn btn-secondary pd-x-25">Center</button>
                <button type="button" class="btn btn-secondary pd-x-25">Right</button>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-2 mg-t-20 mg-lg-t-0">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary active"><i class="fa fa-home"></i></button>
                <button type="button" class="btn btn-secondary"><i class="fa fa-envelope"></i></button>
                <button type="button" class="btn btn-secondary"><i class="fa fa-cog"></i></button>
              </div>
            </div><!-- col-2 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary active"><i class="fa fa-play"></i></button>
                <button type="button" class="btn btn-primary"><i class="fa fa-pause"></i></button>
                <button type="button" class="btn btn-primary"><i class="fa fa-stop"></i></button>
              </div>
            </div><!-- col-4 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->


      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
@endsection
