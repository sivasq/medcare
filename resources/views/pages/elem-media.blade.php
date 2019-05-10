@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Media Object</li>
          </ol>
          <h6 class="slim-pagetitle">Media Object</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Default Media</label>
          <p class="mg-b-20 mg-sm-b-40">Below is an example of a single media object.</p>

          <div class="media media-demo">
            <img src="{{asset('assets/img/img0.svg')}}" class="d-flex mg-r-40 wd-150" alt="Image">
            <div class="media-body mg-t-20 mg-sm-t-0">
              <h5 class="tx-inverse mg-b-20">Media Heading Title</h5>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
              <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
              <p class="mg-b-0">It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour...</p>
            </div><!-- media-body -->
          </div><!-- media -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Media Alignment</label>
          <p class="mg-b-20 mg-sm-b-40">Media object can be aligned with flexbox utilities to the top (default), middle, or end.</p>

          <div class="media media-demo">
            <img src="{{asset('assets/img/img0.svg')}}" class="media-img-demo align-self-center" alt="Image">
            <div class="media-body mg-t-20 mg-sm-t-0">
              <h5 class="tx-inverse mg-b-20">The Media Heading</h5>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
              <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
              <p class="mg-b-0">It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour...</p>
            </div><!-- media-body -->
          </div><!-- media -->

          <div class="media media-demo mg-t-20">
            <img src="{{asset('assets/img/img0.svg')}}" class="media-img-demo align-self-end" alt="Image">
            <div class="media-body mg-t-20 mg-sm-t-0">
              <h5 class="tx-inverse mg-b-20">The Media Heading</h5>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
              <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
              <p class="mg-b-0">It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour...</p>
            </div><!-- media-body -->
          </div><!-- media -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Media List</label>
          <p class="mg-b-20 mg-sm-b-40">Media object has so few structural requirements, you can also use these classes on list HTML elements.</p>

          <ul class="media-list-demo">
            <li class="media">
              <img class="media-img" src="http://via.placeholder.com/500x500" alt="Image">
              <div class="media-body">
                <h6 class="tx-inverse mg-b-10">Jasmine Trello</h6>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </li>
            <li class="media">
              <img class="media-img" src="http://via.placeholder.com/500x500" alt="Image">
              <div class="media-body">
                <h6 class="tx-inverse mg-b-10">Dianne Slack</h6>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </li>
            <li class="media">
              <img class="media-img" src="http://via.placeholder.com/500x500" alt="Image">
              <div class="media-body">
                <h6 class="tx-inverse mg-b-10">Marianne Skaype</h6>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </li>
          </ul>
        </div><!-- section-wrapper -->


      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
@endsection
