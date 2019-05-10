@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lists</li>
          </ol>
          <h6 class="slim-pagetitle">Lists</h6>
        </div><!-- slim-pageheader -->



        <div class="section-wrapper">
          <label class="section-title">Basic List Group</label>
          <p class="mg-b-20 mg-sm-b-40">A basic list group with custom icons or just a simple list.</p>

          <div class="row">
            <div class="col-md-6 col-lg-4">
              <ul class="list-group">
                <li class="list-group-item">
                  <p class="mg-b-0"><strong class="tx-inverse tx-medium">Retina: 13.3-inch</strong> <span class="text-muted">Display</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><strong class="tx-inverse tx-medium">Intel Iris Graphics 6100</strong> <span class="text-muted">Graphics</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><strong class="tx-inverse tx-medium">500 GB</strong> <span class="text-muted">Flash Storage</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><strong class="tx-inverse tx-medium">3.1 GHz Intel Core i7</strong> <span class="text-muted">Processor</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><strong class="tx-inverse tx-medium">16 GB 1867 MHz DDR3</strong> <span class="text-muted">Memory</span></p>
                </li>
              </ul>
            </div><!-- col-4 -->
            <div class="col-md-6 col-lg-4 mg-t-20 mg-md-t-0-force">
              <ul class="list-group">
                <li class="list-group-item">
                  <p class="mg-b-0"><i class="fa fa-check tx-success mg-r-8"></i><strong class="tx-inverse tx-medium">Retina: 13.3-inch</strong> <span class="text-muted">Display</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><i class="fa fa-check tx-success mg-r-8"></i><strong class="tx-inverse tx-medium">Intel Iris Graphics 6100</strong> <span class="text-muted">Graphics</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><i class="fa fa-check tx-success mg-r-8"></i><strong class="tx-inverse tx-medium">500 GB</strong> <span class="text-muted">Flash Storage</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><i class="fa fa-check tx-success mg-r-8"></i><strong class="tx-inverse tx-medium">3.1 GHz Intel Core i7</strong> <span class="text-muted">Processor</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><i class="fa fa-check tx-success mg-r-8"></i><strong class="tx-inverse tx-medium">16 GB 1867 MHz DDR3</strong> <span class="text-muted">Memory</span></p>
                </li>
              </ul>
            </div><!-- col-4 -->
            <div class="col-md-6 col-lg-4 mg-t-20 mg-lg-t-0-force">
              <ul class="list-group">
                <li class="list-group-item">
                  <p class="mg-b-0"><i class="fa fa-cube tx-primary mg-r-8"></i><strong class="tx-inverse tx-medium">Retina: 13.3-inch</strong> <span class="text-muted">Display</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><i class="fa fa-cube tx-primary mg-r-8"></i><strong class="tx-inverse tx-medium">Intel Iris Graphics 6100</strong> <span class="text-muted">Graphics</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><i class="fa fa-cube tx-primary mg-r-8"></i><strong class="tx-inverse tx-medium">500 GB</strong> <span class="text-muted">Flash Storage</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><i class="fa fa-cube tx-primary mg-r-8"></i><strong class="tx-inverse tx-medium">3.1 GHz Intel Core i7</strong> <span class="text-muted">Processor</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><i class="fa fa-cube tx-primary mg-r-8"></i><strong class="tx-inverse tx-medium">16 GB 1867 MHz DDR3</strong> <span class="text-muted">Memory</span></p>
                </li>
              </ul>
            </div><!-- col-4 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Striped List Group</label>
          <p class="mg-b-20 mg-sm-b-40">A basic list group with striped background of a simple list.</p>

          <div class="row">
            <div class="col-md-6 col-lg-4">
              <ul class="list-group list-group-striped">
                <li class="list-group-item">
                  <p class="mg-b-0"><strong class="tx-inverse tx-medium">Retina: 13.3-inch</strong> <span class="text-muted">Display</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><strong class="tx-inverse tx-medium">Intel Iris Graphics 6100</strong> <span class="text-muted">Graphics</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><strong class="tx-inverse tx-medium">500 GB</strong> <span class="text-muted">Flash Storage</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><strong class="tx-inverse tx-medium">3.1 GHz Intel Core i7</strong> <span class="text-muted">Processor</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><strong class="tx-inverse tx-medium">16 GB 1867 MHz DDR3</strong> <span class="text-muted">Memory</span></p>
                </li>
              </ul>
            </div><!-- col-4 -->
            <div class="col-md-6 col-lg-4 mg-t-20 mg-md-t-0-force">
              <ul class="list-group list-group-striped">
                <li class="list-group-item">
                  <p class="mg-b-0"><i class="fa fa-check tx-success mg-r-8"></i><strong class="tx-inverse tx-medium">Retina: 13.3-inch</strong> <span class="text-muted">Display</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><i class="fa fa-check tx-success mg-r-8"></i><strong class="tx-inverse tx-medium">Intel Iris Graphics 6100</strong> <span class="text-muted">Graphics</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><i class="fa fa-check tx-success mg-r-8"></i><strong class="tx-inverse tx-medium">500 GB</strong> <span class="text-muted">Flash Storage</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><i class="fa fa-check tx-success mg-r-8"></i><strong class="tx-inverse tx-medium">3.1 GHz Intel Core i7</strong> <span class="text-muted">Processor</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><i class="fa fa-check tx-success mg-r-8"></i><strong class="tx-inverse tx-medium">16 GB 1867 MHz DDR3</strong> <span class="text-muted">Memory</span></p>
                </li>
              </ul>
            </div><!-- col-4 -->
            <div class="col-md-6 col-lg-4 mg-t-20 mg-lg-t-0-force">
              <ul class="list-group list-group-striped">
                <li class="list-group-item">
                  <p class="mg-b-0"><i class="fa fa-cube tx-primary mg-r-8"></i><strong class="tx-inverse tx-medium">Retina: 13.3-inch</strong> <span class="text-muted">Display</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><i class="fa fa-cube tx-primary mg-r-8"></i><strong class="tx-inverse tx-medium">Intel Iris Graphics 6100</strong> <span class="text-muted">Graphics</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><i class="fa fa-cube tx-primary mg-r-8"></i><strong class="tx-inverse tx-medium">500 GB</strong> <span class="text-muted">Flash Storage</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><i class="fa fa-cube tx-primary mg-r-8"></i><strong class="tx-inverse tx-medium">3.1 GHz Intel Core i7</strong> <span class="text-muted">Processor</span></p>
                </li>
                <li class="list-group-item">
                  <p class="mg-b-0"><i class="fa fa-cube tx-primary mg-r-8"></i><strong class="tx-inverse tx-medium">16 GB 1867 MHz DDR3</strong> <span class="text-muted">Memory</span></p>
                </li>
              </ul>
            </div><!-- col-4 -->
          </div><!-- row -->

        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Media List Group</label>
          <p class="mg-b-20 mg-sm-b-40">A basic list group using media layout for each list.</p>

          <div class="row">
            <div class="col-md-6">
              <div class="list-group">
                <div class="list-group-item pd-y-20">
                  <div class="media">
                    <div class="d-flex mg-r-10 wd-50">
                      <i class="fa fa-file-text-o tx-primary tx-40 tx"></i>
                    </div><!-- d-flex -->
                    <div class="media-body">
                      <h6 class="tx-inverse">Easy Customization</h6>
                      <p class="mg-b-0">List groups are a flexible and powerful component for displaying simple.</p>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </div><!-- list-group-item -->
                <div class="list-group-item pd-y-20">
                  <div class="media">
                    <div class="d-flex mg-r-10 wd-50">
                      <i class="fa fa-folder-open-o tx-primary tx-40"></i>
                    </div><!-- d-flex -->
                    <div class="media-body">
                      <h6 class="tx-inverse">Get Started Easily</h6>
                      <p class="mg-b-0">List groups are a flexible and powerful component for displaying simple.</p>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </div><!-- list-group-item -->
                <div class="list-group-item pd-y-20">
                  <div class="media">
                    <div class="d-flex mg-r-10 wd-50">
                      <i class="fa fa-tv tx-primary tx-40"></i>
                    </div><!-- d-flex -->
                    <div class="media-body">
                      <h6 class="tx-inverse">Customer Satisfaction</h6>
                      <p class="mg-b-0">List groups are a flexible and powerful component for displaying simple.</p>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </div><!-- list-group-item -->
              </div><!-- list-group -->
            </div><!-- col-md-6 -->

            <div class="col-md-6 mg-t-20 mg-md-t-0-force">
              <div class="list-group">
                <div class="list-group-item pd-y-20">
                  <div class="media">
                    <div class="media-body">
                      <h6 class="tx-inverse">Easy Customization</h6>
                      <p class="mg-b-0">List groups are a flexible and powerful component for displaying simple.</p>
                    </div><!-- media-body -->
                    <div class="d-flex mg-l-10 wd-50">
                      <i class="fa fa-file-text-o tx-primary tx-40"></i>
                    </div><!-- d-flex -->
                  </div><!-- media -->
                </div><!-- list-group-item -->
                <div class="list-group-item pd-y-20">
                  <div class="media">
                    <div class="media-body">
                      <h6 class="tx-inverse">Get Started Easily</h6>
                      <p class="mg-b-0">List groups are a flexible and powerful component for displaying simple.</p>
                    </div><!-- media-body -->
                    <div class="d-flex mg-l-10 wd-50">
                      <i class="fa fa-folder-open-o tx-primary tx-40"></i>
                    </div><!-- d-flex -->
                  </div><!-- media -->
                </div><!-- list-group-item -->
                <div class="list-group-item pd-y-20">
                  <div class="media">
                    <div class="media-body">
                      <h6 class="tx-inverse">Customer Satisfaction</h6>
                      <p class="mg-b-0">List groups are a flexible and powerful component for displaying simple.</p>
                    </div><!-- media-body -->
                    <div class="d-flex mg-l-10 wd-50">
                      <i class="fa fa-tv tx-primary tx-40"></i>
                    </div><!-- d-flex -->
                  </div><!-- media -->
                </div><!-- list-group-item -->
              </div><!-- list-group -->
            </div><!-- col-md-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Inbox List</label>
          <p class="mg-b-20 mg-sm-b-40">A mailbox inbox list group</p>

          <div class="row">
            <div class="col-lg-6">
              <div class="mail-list">
                <div class="mail-item active">
                  <div class="d-flex justify-content-between mg-b-2">
                    <div class="tx-14">
                      <a href="" class="tx-gray-500"><i class="icon ion-star"></i></a>
                      <a href="" class="tx-gray-500 mg-l-5"><i class="icon ion-android-attach"></i></a>
                    </div>
                    <span class="tx-12">8 hours ago</span>
                  </div><!-- d-flex -->
                  <h6 class="tx-14"><a href="" class="tx-inverse">Socrates Itumay, me (4)</a></h6>
                  <p class="tx-13 mg-b-10">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never...</p>
                </div><!-- mail-item -->
                <div class="mail-item">
                  <div class="d-flex justify-content-between mg-b-2">
                    <div class="tx-14">
                      <a href="" class="tx-gray-500"><i class="icon ion-star"></i></a>
                    </div>
                    <span class="tx-12">Yesterday</span>
                  </div><!-- d-flex -->
                  <h6 class="tx-14"><a href="" class="tx-inverse">Envato, me (2)</a></h6>
                  <p class="tx-13 mg-b-10">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never...</p>
                </div><!-- mail-item -->
                <div class="mail-item">
                  <div class="d-flex justify-content-between mg-b-2">
                    <div class="tx-14">
                      <a href="" class="tx-warning"><i class="icon ion-star"></i></a>
                    </div>
                    <span class="tx-12">2 days ago</span>
                  </div><!-- d-flex -->
                  <h6 class="tx-14"><a href="" class="tx-inverse">ThemeForest</a></h6>
                  <p class="tx-13 mg-b-10">A wonderful serenity has taken possession of my entire soul, like these sweet mornings...</p>
                </div><!-- mail-item -->
              </div><!-- mail-list -->
            </div><!-- col-6 -->

            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
              <div class="mail-list">
                <div class="mail-item d-flex active">
                  <div class="pd-t-5"><img src="http://via.placeholder.com/500x500" class="wd-48 rounded-circle" alt=""></div>
                  <div class="mg-l-20">
                    <div class="d-flex justify-content-between mg-b-2">
                      <div class="tx-14">
                        <a href="" class="tx-gray-500"><i class="icon ion-star"></i></a>
                        <a href="" class="tx-gray-500 mg-l-5"><i class="icon ion-android-attach"></i></a>
                      </div>
                      <span class="tx-12">8 hours ago</span>
                    </div><!-- d-flex -->
                    <h6 class="tx-14"><a href="" class="tx-inverse">Socrates Itumay, me (4)</a></h6>
                    <p class="tx-13 mg-b-10">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never...</p>
                  </div>
                </div><!-- mail-item -->
                <div class="mail-item d-flex">
                  <div class="pd-t-5"><img src="http://via.placeholder.com/500x500" class="wd-48 rounded-circle" alt=""></div>
                  <div class="mg-l-20">
                    <div class="d-flex justify-content-between mg-b-2">
                      <div class="tx-14">
                        <a href="" class="tx-gray-500"><i class="icon ion-star"></i></a>
                      </div>
                      <span class="tx-12">Yesterday</span>
                    </div><!-- d-flex -->
                    <h6 class="tx-14"><a href="" class="tx-inverse">Envato, me (2)</a></h6>
                    <p class="tx-13 mg-b-10">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never...</p>
                  </div>
                </div><!-- mail-item -->
                <div class="mail-item d-flex">
                  <div class="pd-t-5"><img src="http://via.placeholder.com/500x500" class="wd-48 rounded-circle" alt=""></div>
                  <div class="mg-l-20">
                    <div class="d-flex justify-content-between mg-b-2">
                      <div class="tx-14">
                        <a href="" class="tx-warning"><i class="icon ion-star"></i></a>
                      </div>
                      <span class="tx-12">2 days ago</span>
                    </div><!-- d-flex -->
                    <h6 class="tx-14"><a href="" class="tx-inverse">ThemeForest</a></h6>
                    <p class="tx-13 mg-b-10">A wonderful serenity has taken possession of my entire soul, like these sweet mornings...</p>
                  </div>
                </div><!-- mail-item -->
              </div><!-- mail-list -->
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">User List</label>
          <p class="mg-b-20 mg-sm-b-40">A user list group for contact app and more.</p>

          <div class="row">
            <div class="col-lg-6">
              <div class="list-group list-group-user">
                <div class="list-group-item">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="user-name-address">
                    <p>Marilyn Tarter</p>
                    <span>Clemson, CA</span>
                  </div>
                  <div class="user-btn-wrapper">
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                    </a>
                  </div>
                </div><!-- list-group-item -->
                <div class="list-group-item">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="user-name-address">
                    <p>Belinda Connor</p>
                    <span>Los Angeles, CA</span>
                  </div>
                  <div class="user-btn-wrapper">
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                    </a>
                  </div>
                </div><!-- list-group-item -->
                <div class="list-group-item">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="user-name-address">
                    <p>Theodore Gristen</p>
                    <span>San Francisco, CA</span>
                  </div>
                  <div class="user-btn-wrapper">
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                    </a>
                  </div>
                </div><!-- list-group-item -->
                <div class="list-group-item">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="user-name-address">
                    <p>Andrew Wiggins</p>
                    <span>San Francisco, CA</span>
                  </div>
                  <div class="user-btn-wrapper">
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                    </a>
                  </div>
                </div><!-- list-group-item -->
                <div class="list-group-item">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="user-name-address">
                    <p>Deborah Miner</p>
                    <span>San Francisco, CA</span>
                  </div>
                  <div class="user-btn-wrapper">
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                    </a>
                  </div>
                </div><!-- list-group-item -->
              </div><!-- list-group -->
            </div><!-- col-6 -->

            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
              <div class="list-group list-group-striped list-group-user">
                <div class="list-group-item">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="user-name-address">
                    <p>Marilyn Tarter</p>
                    <span>Clemson, CA</span>
                  </div>
                  <div class="user-btn-wrapper">
                    <a href="#" class="btn btn-outline-primary btn-icon">
                      <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-icon">
                      <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                    </a>
                  </div>
                </div><!-- list-group-item -->
                <div class="list-group-item">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="user-name-address">
                    <p>Belinda Connor</p>
                    <span>Los Angeles, CA</span>
                  </div>
                  <div class="user-btn-wrapper">
                    <a href="#" class="btn btn-outline-primary btn-icon">
                      <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-icon">
                      <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                    </a>
                  </div>
                </div><!-- list-group-item -->
                <div class="list-group-item">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="user-name-address">
                    <p>Theodore Gristen</p>
                    <span>San Francisco, CA</span>
                  </div>
                  <div class="user-btn-wrapper">
                    <a href="#" class="btn btn-outline-primary btn-icon">
                      <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-icon">
                      <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                    </a>
                  </div>
                </div><!-- list-group-item -->
                <div class="list-group-item">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="user-name-address">
                    <p>Andrew Wiggins</p>
                    <span>San Francisco, CA</span>
                  </div>
                  <div class="user-btn-wrapper">
                    <a href="#" class="btn btn-outline-primary btn-icon">
                      <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-icon">
                      <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                    </a>
                  </div>
                </div><!-- list-group-item -->
                <div class="list-group-item">
                  <img src="http://via.placeholder.com/500x500" alt="">
                  <div class="user-name-address">
                    <p>Deborah Miner</p>
                    <span>San Francisco, CA</span>
                  </div>
                  <div class="user-btn-wrapper">
                    <a href="#" class="btn btn-outline-primary btn-icon">
                      <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-icon">
                      <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                    </a>
                  </div>
                </div><!-- list-group-item -->
              </div><!-- list-group -->
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Blog List</label>
          <p class="mg-b-20 mg-sm-b-40">A blog list widget for managing blog content.</p>

          <div class="row">
            <div class="col-md-8 col-lg-6">
              <div class="list-group">
                <div class="list-group-item d-block pd-y-20">
                  <div class="d-flex justify-content-between align-items-center tx-12 mg-b-10">
                    <a href="" class="tx-info">Mildred J. Reulet</a>
                    <span>April 21, 2017</span>
                  </div><!-- d-flex -->
                  <h6 class="lh-3 mg-b-10"><a href="" class="tx-inverse hover-primary">Skip the Boring Business Plan. Focus on This Strategy Instead</a></h6>
                  <p class="tx-13 mg-b-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                </div><!-- list-group-item -->
                <div class="list-group-item d-block pd-y-20">
                  <div class="d-flex justify-content-between align-items-center tx-12 mg-b-10">
                    <a href="" class="tx-info">Randall A. Wells</a>
                    <span>April 22, 2017</span>
                  </div><!-- d-flex -->
                  <h6 class="lh-3 mg-b-10"><a href="" class="tx-inverse hover-primary">How I Built a Startup While Traveling to 20 Countries</a></h6>
                  <p class="tx-13 mg-b-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                </div><!-- list-group-item -->
                <div class="list-group-item d-block pd-y-20">
                  <div class="d-flex justify-content-between align-items-center tx-12 mg-b-10">
                    <a href="" class="tx-info">Reynante Labares</a>
                    <span>April 23, 2017</span>
                  </div><!-- d-flex -->
                  <h6 class="lh-3 mg-b-10"><a href="" class="tx-inverse hover-primary">A Counterintuitive System for Startup Compensation</a></h6>
                  <p class="tx-13 mg-b-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                </div><!-- list-group-item -->
              </div><!-- list-group -->
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
@endsection
