@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cards</li>
          </ol>
          <h6 class="slim-pagetitle">Cards</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Card Body</label>
          <p class="mg-b-20 mg-sm-b-40">An example some text within a card body.</p>

          <div class="row">
            <div class="col-md">
              <div class="card card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card card-body bg-primary tx-white bd-0">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card card-body bg-purple tx-white bd-0">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Card Titles, Text and Links</label>
          <p class="mg-b-20 mg-sm-b-40">An example of using card title. In the same way, links are added and placed next to each other by adding link tag.</p>

          <div class="row">
            <div class="col-md">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title tx-dark tx-medium mg-b-10">The Card Title</h5>
                  <p class="card-subtitle tx-normal mg-b-15">This is the card subtitle</p>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card bg-primary tx-white bd-0">
                <div class="card-body">
                  <h5 class="card-title tx-white tx-medium mg-b-10">The Card Title</h5>
                  <p class="card-subtitle tx-normal mg-b-15 tx-white-8">This is the card subtitle</p>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link tx-white-7 hover-white">Card link</a>
                  <a href="#" class="card-link tx-white-7 hover-white">Another link</a>
                </div>
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card bg-purple tx-white bd-0">
                <div class="card-body">
                  <h5 class="card-title tx-white tx-medium mg-b-10">The Card Title</h5>
                  <p class="card-subtitle tx-normal tx-white-8 mg-b-15">This is the card subtitle</p>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link tx-white-7 hover-white">Card link</a>
                  <a href="#" class="card-link tx-white-7 hover-white">Another link</a>
                </div>
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Top Image Card</label>
          <p class="mg-b-20 mg-sm-b-40">Places an image to the top, bottom or overlay of the card.</p>

          <div class="row">
            <div class="col-lg-4">
              <div class="card bd-0">
                <img class="img-fluid" src="http://via.placeholder.com/1000x667" alt="Image">
                <div class="card-body bd bd-t-0">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div><!-- card -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <div class="card bd-0">
                <img class="img-fluid" src="http://via.placeholder.com/1000x667" alt="Image">
                <div class="card-body bd bd-t-0">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div><!-- card -->
            </div><!-- col-4 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Bottom Image Card</label>
          <p class="mg-b-20 mg-sm-b-40">Places an image to the top, bottom or overlay of the card.</p>

          <div class="row">
            <div class="col-lg-4">
              <div class="card bd-0">
                <div class="card-body bd bd-b-0">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div><!-- card-body -->
                <img class="img-fluid" src="http://via.placeholder.com/1000x667" alt="Image">
              </div><!-- card -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <div class="card bd-0">
                <div class="card-body bd bd-b-0">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div><!-- card-body -->
                <img class="img-fluid" src="http://via.placeholder.com/1000x667" alt="Image">
              </div><!-- card -->
            </div><!-- col-4 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Image Content Overlay</label>
          <p class="mg-b-20 mg-sm-b-40">Turn an image into a card background and overlay your card’s text.</p>

          <div class="row">
            <div class="col-md">
              <div class="card bd-0">
                <img class="img-fluid" src="http://via.placeholder.com/1000x667" alt="Image">
                <div class="card-img-overlay pd-30 bg-black-4 d-flex flex-column justify-content-center">
                  <p class="tx-white tx-medium mg-b-15">The Cat Prisoner</p>
                  <p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                  <p class="mg-b-0"><a href="" class="tx-white">Read more</a></p>
                </div><!-- card-img-overlay -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card bd-0">
                <img class="card-img img-fluid" src="http://via.placeholder.com/1000x667" alt="Image">
                <div class="card-img-overlay pd-30 bg-black-4 d-flex flex-column justify-content-center">
                  <p class="tx-white tx-medium mg-b-15">The Ghost Town</p>
                  <p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                  <p class="mg-b-0"><a href="" class="tx-white">Read more</a></p>
                </div><!-- card-img-overlay -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card bd-0">
                <img class="card-img img-fluid" src="http://via.placeholder.com/1000x667" alt="Image">
                <div class="card-img-overlay pd-30 bg-black-4 d-flex flex-column justify-content-center">
                  <p class="tx-white tx-medium mg-b-15">The Green Leaves</p>
                  <p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                  <p class="mg-b-0"><a href="" class="tx-white">Read more</a></p>
                </div><!-- card-img-overlay -->
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Colored Card Header</label>
          <p class="mg-b-20 mg-sm-b-40">Add an optional color header within a card.</p>

          <div class="row">
            <div class="col-md-4">
              <div class="card bd-0">
                <div class="card-header tx-medium bd-0 tx-white bg-primary">
                  Description
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md-4 mg-t-20 mg-md-t-0">
              <div class="card bd-0">
                <div class="card-header tx-medium bd-0 tx-white bg-danger">
                  Description
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md-4 mg-t-20 mg-md-t-0">
              <div class="card bd-0">
                <div class="card-header tx-medium bd-0 tx-white bg-purple">
                  Description
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->

          <p class="section-label mg-t-20 mg-sm-t-40">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">class="card-header bg-[value]"</code></td>
                <td>
                  primary | success | warning | danger | info | indigo | purple | pink | orange | light | dark
                </td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Gradient Color Card Header</label>
          <p class="mg-b-20 mg-sm-b-40">Add an optional gradient color header within a card.</p>

          <div class="row">
            <div class="col-md-4">
              <div class="card bd-0">
                <div class="card-header tx-medium bd-0 tx-white bg-mantle">
                  Description
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md-4 mg-t-20 mg-md-t-0">
              <div class="card bd-0">
                <div class="card-header tx-medium bd-0 tx-white bg-dance">
                  Description
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md-4 mg-t-20 mg-md-t-0">
              <div class="card bd-0">
                <div class="card-header tx-medium bd-0 tx-white bg-transfile">
                  Description
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->

          <p class="section-label mg-t-20 mg-sm-t-40">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">class="card-header bg-[value]"</code></td>
                <td>
                  mantle | reef | transfile | neon | delicate | emerald | mojito | dance | teal-love | crystal-clear | grandeur | flickr | royal | firewatch
                </td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Card with Footer</label>
          <p class="mg-b-20 mg-sm-b-40">Add an optional footer within a card.</p>

          <div class="row">
            <div class="col-md">
              <div class="card">
                <div class="card-body">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
                <div class="card-footer bd-t">
                  January, 20, 2017 4:30am
                </div><!-- card-footer -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card">
                <div class="card-body">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
                <div class="card-footer bd-t tx-center">
                  <a href="">Read more</a>
                </div><!-- card-footer -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card">
                <div class="card-body">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
                <div class="card-footer bd-t tx-right">
                  Share
                  <i class="fa fa-facebook-official mg-l-5 mg-r-5"></i>
                  <i class="fa fa-twitter"></i>
                </div><!-- card-footer -->
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Card with Tabs</label>
          <p class="mg-b-20 mg-sm-b-40">Add a tab navigation in header of a card.</p>

          <div class="row">
            <div class="col-md">
              <div class="card">
                <div class="card-header">
                  <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" href="#popular" data-toggle="tab">Popular</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#recent" data-toggle="tab">Recent</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#toprated" data-toggle="tab">Top Rated</a>
                    </li>
                  </ul>
                </div><!-- card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="popular">
                      Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...
                    </div><!-- tab-pane -->
                    <div class="tab-pane" id="recent">
                      Recent content goes here...
                    </div><!-- tab-pane -->
                    <div class="tab-pane" id="toprated">
                      Top rated content goes here...
                    </div><!-- tab-pane -->
                  </div><!-- tab-content -->
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card bd-0">
                <div class="card-header bg-dark">
                  <ul class="nav nav-tabs nav-tabs-for-dark card-header-tabs">
                    <li class="nav-item">
                      <a class="nav-link bd-0 active pd-y-8" href="#popular2" data-toggle="tab">Popular</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link bd-0" href="#recent2" data-toggle="tab">Recent</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link bd-0" href="#toprated2" data-toggle="tab">Top Rated</a>
                    </li>
                  </ul>
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0">
                  <div class="tab-content">
                    <div class="tab-pane active" id="popular2">
                      Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...
                    </div><!-- tab-pane -->
                    <div class="tab-pane" id="recent2">
                      Recent content goes here...
                    </div><!-- tab-pane -->
                    <div class="tab-pane" id="toprated2">
                      Top rated content goes here...
                    </div><!-- tab-pane -->
                  </div><!-- tab-content -->
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Colored Background Variant</label>
          <p class="mg-b-20 mg-sm-b-40">Cards include their own variant classes for quickly changing card background.</p>

          <div class="row">
            <div class="col-md">
              <div class="card card-body tx-white-8 bg-primary bd-0">
                Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card card-body tx-white-8 bg-success bd-0">
                Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card card-body tx-white-8 bg-warning bd-0">
                Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->

          <p class="section-label mg-t-20 mg-sm-t-40">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">class="card card-body bd-0 bg-[value]"</code></td>
                <td>
                  primary | success | warning | danger | info | indigo | purple | pink | orange | dark
                </td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Gradient Background Variant</label>
          <p class="mg-b-20 mg-sm-b-40">Cards include their own variant classes for quickly changing card background.</p>

          <div class="row mg-t-20">
            <div class="col-md-4">
              <div class="card card-body tx-white-8 bg-mantle bd-0">
                Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md-4 mg-t-20 mg-md-t-0">
              <div class="card card-body tx-white-8 bg-dance bd-0">
                Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md-4 mg-t-20 mg-md-t-0">
              <div class="card card-body tx-white-8 bg-transfile bd-0">
                Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->

          <p class="section-label mg-t-20 mg-sm-t-40">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">class="card card-body bd-0 bg-[value]"</code></td>
                <td>
                  mantle | reef | transfile | neon | delicate | emerald | mojito | dance | teal-love | crystal-clear | grandeur | flickr | royal | firewatch
                </td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Card with Options &amp; Buttons</label>
          <p class="mg-b-20 mg-sm-b-40">Cards with some options in the right corner of header of card.</p>

          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between pd-y-5 bd-b">
                  <h6 class="mg-b-0 tx-14 tx-inverse">Some Information</h6>
                  <div class="card-option tx-24">
                    <a href="" class="tx-gray-600 mg-l-10"><i class="icon ion-ios-refresh-empty lh-0"></i></a>
                    <a href="" class="tx-gray-600 mg-l-10"><i class="icon ion-ios-arrow-down lh-0"></i></a>
                    <a href="" class="tx-gray-600 mg-l-10"><i class="icon ion-android-more-vertical lh-0"></i></a>
                  </div><!-- card-option -->
                </div><!-- card-header -->
                <div class="card-body">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col-6 -->
            <div class="col-md-6 mg-t-30 mg-md-t-0">
              <div class="card bd-0">
                <div class="card-header bg-dark bd-0 d-flex align-items-center justify-content-between pd-y-5">
                  <h6 class="mg-b-0 tx-14 tx-white tx-normal">Some Information</h6>
                  <div class="card-option tx-24">
                    <a href="" class="tx-gray-600 hover-white mg-l-10"><i class="icon ion-ios-refresh-empty lh-0"></i></a>
                    <a href="" class="tx-gray-600 hover-white mg-l-10"><i class="icon ion-ios-arrow-down lh-0"></i></a>
                    <a href="" class="tx-gray-600 hover-white mg-l-10"><i class="icon ion-android-more-vertical lh-0"></i></a>
                  </div><!-- card-option -->
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0 rounded-bottom">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col-6 -->
          </div><!-- row -->

          <div class="row mg-t-30">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between pd-y-5 bd-b">
                  <h6 class="mg-b-0 tx-14 tx-inverse">Some Information</h6>
                  <div class="card-option tx-24">
                    <a href="" class="tx-gray-600 mg-l-10"><i class="icon ion-ios-refresh-empty lh-0"></i></a>
                    <a href="" class="tx-gray-600 mg-l-10"><i class="icon ion-ios-arrow-down lh-0"></i></a>
                    <a href="" class="tx-gray-600 mg-l-10"><i class="icon ion-android-more-vertical lh-0"></i></a>
                  </div><!-- card-option -->
                </div><!-- card-header -->
                <div class="card-body">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
                <div class="card-footer bd-t tx-center">
                  <a href="" class="btn btn-primary">Continue</a>
                  <a href="" class="btn btn-secondary">Cancel</a>
                </div>
              </div><!-- card -->
            </div><!-- col-6 -->
            <div class="col-md-6 mg-t-30 mg-md-t-0">
              <div class="card bd-0">
                <div class="card-header bg-primary bd-0 d-flex align-items-center justify-content-between pd-y-5">
                  <h6 class="mg-b-0 tx-14 tx-white tx-normal">Some Information</h6>
                  <div class="card-option tx-24">
                    <a href="" class="tx-white-8 hover-white mg-l-10"><i class="icon ion-ios-refresh-empty lh-0"></i></a>
                    <a href="" class="tx-white-8 hover-white mg-l-10"><i class="icon ion-ios-arrow-down lh-0"></i></a>
                    <a href="" class="tx-white-8 hover-white mg-l-10"><i class="icon ion-android-more-vertical lh-0"></i></a>
                  </div><!-- card-option -->
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0 rounded-bottom-0">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
                <div class="card-footer bd bd-t-0 d-flex justify-content-between">
                  <a href="" class="btn btn-primary">Continue</a>
                  <a href="" class="btn btn-secondary">Cancel</a>
                </div>
              </div><!-- card -->
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
