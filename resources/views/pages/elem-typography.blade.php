@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Typography</li>
          </ol>
          <h6 class="slim-pagetitle">Typography</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Font Family</label>
          <p class="mg-b-20 mg-sm-b-40">The base font family we used in this template.</p>

          <div class="row">
            <div class="col-sm-4">
              <span class="tx-uppercase tx-12 tx-medium d-block mg-b-15">Primary</span>
              <h1 class="display-1 pd-30 bg-gray-200 tx-inverse tx-center mg-b-15">Rr</h1>
              <h4 class="tx-inverse tx-normal">'Roboto', sans-serif; </h4>
            </div><!-- col-4 -->
            <div class="col-sm offset-sm-1">
              <span class="tx-uppercase tx-medium tx-12 d-block mg-b-15">Styles</span>
              <h1 class="tx-inverse mg-b-0 tx-light">Light</h1>
              <h1 class="tx-inverse mg-b-0 tx-normal">Regular</h1>
              <h1 class="tx-inverse mg-b-0 tx-medium">Medium</h1>
              <h1 class="tx-inverse mg-b-0 tx-semibold">Semibold</h1>
              <h1 class="tx-inverse mg-b-0 tx-bold">Bold</h1>
            </div>
          </div><!-- row -->

          <div class="row mg-t-40 tx-mont">
            <div class="col-sm-4">
              <span class="tx-uppercase tx-12 tx-medium d-block mg-b-15">Secondary</span>
              <h1 class="display-1 pd-30 bg-gray-200 tx-inverse tx-center mg-b-15">Mm</h1>
              <h4 class="tx-inverse tx-normal">'Montserrat', sans-serif; </h4>
            </div><!-- col-4 -->
            <div class="col-sm offset-sm-1">
              <span class="tx-uppercase tx-medium tx-12 d-block mg-b-15">Styles</span>
              <h1 class="tx-inverse mg-b-0 tx-light">Light</h1>
              <h1 class="tx-inverse mg-b-0 tx-normal">Regular</h1>
              <h1 class="tx-inverse mg-b-0 tx-medium">Medium</h1>
              <h1 class="tx-inverse mg-b-0 tx-semibold">Semibold</h1>
              <h1 class="tx-inverse mg-b-0 tx-bold">Bold</h1>
            </div>
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Headings</label>
          <p class="mg-b-20 mg-sm-b-40">Below is an example of a single media object.</p>

          <span class="tx-12 tx-uppercase d-block mg-b-5">Heading 1 - 2.5rem/40px</span>
          <h1 class="tx-inverse ">Slim Bootstrap 4 Dashboard Template</h1>
          <hr>
          <span class="tx-12 tx-uppercase d-block mg-b-5">Heading 2 - 2rem/32px</span>
          <h2 class="tx-inverse ">Slim Bootstrap 4 Dashboard Template</h2>
          <hr>
          <span class="tx-12 tx-uppercase d-block mg-b-5">Heading 3 - 1.75rem/28px</span>
          <h3 class="tx-inverse ">Slim Bootstrap 4 Dashboard Template</h3>
          <hr>
          <span class="tx-12 tx-uppercase d-block mg-b-5">Heading 4 - 1.5rem/24px</span>
          <h4 class="tx-inverse ">Slim Bootstrap 4 Dashboard Template</h4>
          <hr>
          <span class="tx-12 tx-uppercase d-block mg-b-5">Heading 5 - 1.25rem/20px</span>
          <h5 class="tx-inverse ">Slim Bootstrap 4 Dashboard Template</h5>
          <hr>
          <span class="tx-12 tx-uppercase d-block mg-b-5">Heading 6 - 1rem/16px</span>
          <h6 class="tx-inverse mg-b-0">Slim Bootstrap 4 Dashboard Template</h6>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Lead</label>
          <p class="mg-b-20 mg-sm-b-40">Make a paragraph stand out by adding <code>.lead</code> class</p>
          <p class="lead pd-30 bg-primary tx-white">Be who you are and say what you feel, because those who mind don't matter, and those who matter don't mind.</p>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Inline Elements</label>
          <p class="mg-b-20 mg-sm-b-40">Styling for common inline elements.</p>

          <p>You can use the mark tag to <mark>highlight</mark> text.</p>
          <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
          <p><u>This line of text will render as underlined</u></p>
          <p><small>This line of text is meant to be treated as fine print.</small></p>
          <p><strong>This line rendered as bold text.</strong></p>
          <p class="mg-b-0"><em>This line rendered as italicized text.</em></p>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Blockquotes</label>
          <p class="mg-b-20 mg-sm-b-40">For quoting blocks of content from another source within your document.</p>
          <blockquote class="blockquote bd-l bd-5 pd-l-20">
            <p class="mg-b-5 tx-inverse">Two things are infinite: the universe and human stupidity; and I'm not sure about the universe.</p>
            <footer class="blockquote-footer tx-14">Albert Einstein</footer>
          </blockquote>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Description List Alignment</label>
          <p class="mg-b-20 mg-sm-b-40">Align terms and descriptions horizontally by using our grid system’s predefined classes.</p>

          <div class="pd-30 bd">
            <dl class="row">
              <dt class="col-sm-3 tx-inverse">Description lists</dt>
              <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

              <dt class="col-sm-3 tx-inverse">Euismod</dt>
              <dd class="col-sm-9">
                <p class="mg-b-10">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
                <p>Donec id elit non mi porta gravida at eget metus.</p>
              </dd>

              <dt class="col-sm-3 tx-inverse">Malesuada porta</dt>
              <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

              <dt class="col-sm-3 text-truncate tx-inverse">Truncated term is truncated</dt>
              <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

              <dt class="col-sm-3 tx-inverse">Nesting</dt>
              <dd class="col-sm-9">
                <dl class="row">
                  <dt class="col-sm-4 tx-inverse">Nested definition list</dt>
                  <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                </dl>
              </dd>
            </dl>
          </div>
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
@endsection
