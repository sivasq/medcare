@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dropdowns</li>
          </ol>
          <h6 class="slim-pagetitle">Dropdowns</h6>
        </div><!-- slim-pageheader -->



        <div class="section-wrapper">
          <label class="section-title">Dropdown Menu</label>
          <p class="mg-b-20 mg-sm-b-40">Any button can be turned into a dropdown toggle.</p>

          <div class="dropdown dropdown-demo show">
            <a href="#" class="dd-link">
              <div>
                <span>John Doe</span>
                <img src="http://via.placeholder.com/500x500" alt="">
                <i class="fa fa-angle-down mg-l-10"></i>
              </div>
            </a>
            <div class="dropdown-menu wd-200 pd-5 show">
              <nav class="nav dropdown-nav">
                <a href="" class="nav-link"><i class="icon ion-ios-person"></i> Edit Profile</a>
                <a href="" class="nav-link"><i class="icon ion-ios-gear"></i> Settings</a>
                <a href="" class="nav-link"><i class="icon ion-ios-download"></i> Downloads</a>
                <a href="" class="nav-link"><i class="icon ion-ios-star"></i> Favorites</a>
                <a href="" class="nav-link"><i class="icon ion-ios-folder"></i> Collections</a>
                <a href="" class="nav-link"><i class="icon ion-power"></i> Sign Out</a>
              </nav>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Dropdown With Media List</label>
          <p class="mg-b-20 mg-sm-b-40">A dropdown menu with a media list inside dropdown-menu class.</p>

          <div class="dropdown dropdown-demo show">
            <a href="#" class="btn btn-primary">
              <span>View Messages</span>
              <i class="fa fa-angle-down mg-l-5"></i>
            </a>
            <div class="dropdown-menu dropdown-media-list wd-350 show">
              <div class="dropdown-menu-header">
                <label>Messages</label>
                <a href="" class="tx-12">+ Add New Message</a>
              </div><!-- d-flex -->

              <div class="media-list">
                <!-- loop starts here -->
                <a href="" class="media">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="media-body">
                    <div>
                      <p>Donna Seay</p>
                      <span>2 minutes ago</span>
                    </div>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                  </div>
                </a><!-- media -->
                <!-- loop ends here -->
                <a href="" class="media">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="media-body">
                    <div>
                      <p>Samantha Francis</p>
                      <span>3 hours ago</span>
                    </div><!-- d-flex -->
                    <p>My entire soul, like these sweet mornings of spring.</p>
                  </div>
                </a><!-- media -->
                <a href="" class="media">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="media-body">
                    <div>
                      <p>Robert Walker</p>
                      <span>5 hours ago</span>
                    </div><!-- d-flex -->
                    <p>I should be incapable of drawing a single stroke at the present moment...</p>
                  </div>
                </a><!-- media -->
                <div class="dropdown-list-footer bd-t">
                  <a href="" class="tx-12 tx-info"><i class="fa fa-angle-down mg-r-5"></i> Show All Messages</a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Dropdown With Form</label>
          <p class="mg-b-20 mg-sm-b-40">A dropdown menu with a form elements wrapped inside by dropdown-menu class.</p>

          <div class="dropdown dropdown-demo show">
            <a href="#" class="dd-link">
              <div>
                <span>Sign In</span>
                <i class="fa fa-angle-down mg-l-5"></i>
              </div>
            </a>
            <div class="dropdown-menu pd-30 pd-sm-40 wd-sm-350 show">
              <h6 class="tx-gray-800 tx-uppercase tx-bold">Sign In</h6>
              <p class="tx-gray-600 mg-b-30">Signin using your account credentials.</p>

              <div class="form-group">
                <input type="email" class="form-control pd-y-12" placeholder="Email">
              </div><!-- form-group -->

              <div class="form-group">
                <input type="password" class="form-control pd-y-12" placeholder="Password">
              </div><!-- form-group -->

              <div class="form-group"><a href="" class="tx-12">Forgot password?</a></div>

              <button class="btn btn-primary btn-block pd-y-10 mg-b-30">Sign In</button>

              <p class="tx-11 tx-uppercase tx-spacing-2 tx-center mg-b-10">Or Sign In With</p>
              <div class="tx-center">
                <a href="#" class="btn btn-primary btn-icon">
                  <div><i class="fa fa-facebook"></i></div>
                </a>
                <a href="#" class="btn btn-info btn-icon mg-l-5">
                  <div><i class="fa fa-twitter"></i></div>
                </a>
                <a href="#" class="btn btn-danger btn-icon mg-l-5">
                  <div><i class="fa fa-google-plus"></i></div>
                </a>
              </div>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Dropdown With Tabs</label>
          <p class="mg-b-20 mg-sm-b-40">A dropdown menu with a tab menu and it's content wrapped by dropdown-menu class.</p>

          <div class="dropdown dropdown-demo show">
            <a href="#" class="dd-link">
              <div>
                <span>See License</span>
                <i class="fa fa-angle-down mg-l-5"></i>
              </div>
            </a>
            <div class="dropdown-menu pd-0 wd-sm-350 show">
              <ul class="nav nav-tabs nav-tabs-dropdown nav-justified" role="tablist">
                <li class="nav-item">
                  <a class="nav-link pd-y-10 active" data-toggle="tab" href="#tabRegular" role="tab">Regular</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pd-y-10" data-toggle="tab" href="#tabExtended" role="tab">Extended</a>
                </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content pd-30">
                <div class="tab-pane active" id="tabRegular" role="tabpanel">
                  <h1 class="dropdown-tab-price">$16</h1>
                  <h6 class="dropdown-tab-label">Regular License</h6>
                  <p class="mg-b-0 tx-13">Use, by you or one client, in a single end product which end users are not charged for. The total price includes the item price and a buyer fee.</p>
                </div>
                <div class="tab-pane" id="tabExtended" role="tabpanel">
                  <h1 class="dropdown-tab-price">$799</h1>
                  <h6 class="dropdown-tab-label">Extended License</h6>
                  <p class="mg-b-0 tx-13">Use, by you or one client, in a single end product which end users can be charged for. The total price includes the item price and a buyer fee.</p>
                </div>
              </div>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Dropdown With Advanced Menu</label>
          <p class="mg-b-20 mg-sm-b-40">A dropdown menu that contains several links and image using grid columns.</p>

          <div class="dropdown dropdown-demo show">
            <a href="#" class="dd-link">
              <div>
                <span>Shop Category</span>
                <i class="fa fa-angle-down mg-l-5"></i>
              </div>
            </a>
            <div class="dropdown-menu pd-y-0 pd-x-20 pd-sm-x-0 wd-sm-450 show">
              <div class="row">
                <div class="col-sm-5">
                  <div class="pd-sm-l-30 pd-t-30">
                    <h6 class="tx-info tx-normal mg-b-15">Shop Fashion</h6>
                    <ul class="list-unstyled lh-8 tx-13">
                      <li><a href="" class="tx-gray-700">Women</a></li>
                      <li><a href="" class="tx-gray-700">Men</a></li>
                      <li><a href="" class="tx-gray-700">Girls</a></li>
                      <li><a href="" class="tx-gray-700">Boys</a></li>
                      <li><a href="" class="tx-gray-700">Baby</a></li>
                      <li><a href="" class="tx-gray-700">Luggage</a></li>
                    </ul>

                    <h6 class="tx-info tx-normal mg-b-15">More to Explore</h6>

                    <a href="" class="d-block tx-gray-800">Our Brands</a>
                    <small class="d-block">Exclusive to customers who are members.</small>
                    <hr>
                    <a href="" class="d-block tx-gray-800">Subscribe &amp; Save</a>
                    <small class="d-block">Exclusive to customers who are members.</small>

                    <a href="" class="btn btn-outline-primary d-block mg-t-20 tx-12">Edit Categories</a>
                  </div>
                </div><!-- col -->
                <div class="col-sm-7">
                  <img src="http://via.placeholder.com/972x1920" class="img-fluid mg-t-10" alt="">
                </div><!-- col -->
              </div><!-- row -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
@endsection
