@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Background Utilities</li>
          </ol>
          <h6 class="slim-pagetitle">Background Utilities</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Gray Background Set</label>
          <p class="mg-b-20 mg-sm-b-40">A set of gray background utilities classes.</p>

          <div class="d-flex flex-wrap ht-100 mg-b-40">
            <div class="flex-1 bg-gray-900 ht-100p"></div>
            <div class="flex-1 bg-gray-800 ht-100p"></div>
            <div class="flex-1 bg-gray-700 ht-100p"></div>
            <div class="flex-1 bg-gray-600 ht-100p"></div>
            <div class="flex-1 bg-gray-500 ht-100p"></div>
            <div class="flex-1 bg-gray-400 ht-100p"></div>
            <div class="flex-1 bg-gray-300 ht-100p"></div>
            <div class="flex-1 bg-gray-200 ht-100p"></div>
            <div class="flex-1 bg-gray-100 ht-100p"></div>
          </div><!-- d-flex -->

          <p class="section-label">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">class="bg-gray-[value]"</code></td>
                <td>900 | 800 | 700 | 600 | 500 | 400 | 300 | 200 | 100</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Solid Background Set</label>
          <p class="mg-b-20 mg-sm-b-40">A set of solid background utilities classes.</p>

          <div class="d-flex flex-wrap ht-100 mg-b-40">
            <div class="flex-1 bg-primary ht-100p"></div>
            <div class="flex-1 bg-success ht-100p"></div>
            <div class="flex-1 bg-warning ht-100p"></div>
            <div class="flex-1 bg-danger ht-100p"></div>
            <div class="flex-1 bg-info ht-100p"></div>
            <div class="flex-1 bg-indigo ht-100p"></div>
            <div class="flex-1 bg-purple ht-100p"></div>
            <div class="flex-1 bg-pink ht-100p"></div>
            <div class="flex-1 bg-teal ht-100p"></div>
            <div class="flex-1 bg-orange ht-100p"></div>
          </div><!-- d-flex -->

          <p class="section-label">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">class="bg-[value]"</code></td>
                <td>primary | success | warning | danger | info | indigo | purple | teal | pink | orange</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Transparent White Background Set</label>
          <p class="mg-b-20 mg-sm-b-40">A set of overlay transparent white background utilities classes.</p>

          <div class="d-flex flex-wrap ht-100 mg-b-40">
            <div class="flex-1 overlay">
              <img src="http://via.placeholder.com/1000x667" class="wd-100p ht-100p object-fit-cover" alt="">
              <div class="overlay-body bg-white-1"></div>
            </div>
            <div class="flex-1 overlay">
              <img src="http://via.placeholder.com/1000x667" class="wd-100p ht-100p object-fit-cover" alt="">
              <div class="overlay-body bg-white-2"></div>
            </div>
            <div class="flex-1 overlay">
              <img src="http://via.placeholder.com/1000x667" class="wd-100p ht-100p object-fit-cover" alt="">
              <div class="overlay-body bg-white-3"></div>
            </div>
            <div class="flex-1 overlay">
              <img src="http://via.placeholder.com/1000x667" class="wd-100p ht-100p object-fit-cover" alt="">
              <div class="overlay-body bg-white-4"></div>
            </div>
            <div class="flex-1 overlay">
              <img src="http://via.placeholder.com/1000x667" class="wd-100p ht-100p object-fit-cover" alt="">
              <div class="overlay-body bg-white-5"></div>
            </div>
            <div class="flex-1 overlay">
              <img src="http://via.placeholder.com/1000x667" class="wd-100p ht-100p object-fit-cover" alt="">
              <div class="overlay-body bg-white-6"></div>
            </div>
            <div class="flex-1 overlay">
              <img src="http://via.placeholder.com/1000x667" class="wd-100p ht-100p object-fit-cover" alt="">
              <div class="overlay-body bg-white-7"></div>
            </div>
            <div class="flex-1 overlay">
              <img src="http://via.placeholder.com/1000x667" class="wd-100p ht-100p object-fit-cover" alt="">
              <div class="overlay-body bg-white-8"></div>
            </div>
            <div class="flex-1 overlay">
              <img src="http://via.placeholder.com/1000x667" class="wd-100p ht-100p object-fit-cover" alt="">
              <div class="overlay-body bg-white-9"></div>
            </div>
          </div><!-- d-flex -->

          <p class="section-label">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">class="bg-white-[value]"</code></td>
                <td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Transparent Black Background Set</label>
          <p class="mg-b-20 mg-sm-b-40">A set of overlay transparent black background utilities classes.</p>

          <div class="d-flex flex-wrap ht-100 mg-b-40">
            <div class="flex-1 overlay">
              <img src="http://via.placeholder.com/1000x667" class="wd-100p ht-100p object-fit-cover" alt="">
              <div class="overlay-body bg-black-1"></div>
            </div>
            <div class="flex-1 overlay">
              <img src="http://via.placeholder.com/1000x667" class="wd-100p ht-100p object-fit-cover" alt="">
              <div class="overlay-body bg-black-2"></div>
            </div>
            <div class="flex-1 overlay">
              <img src="http://via.placeholder.com/1000x667" class="wd-100p ht-100p object-fit-cover" alt="">
              <div class="overlay-body bg-black-3"></div>
            </div>
            <div class="flex-1 overlay">
              <img src="http://via.placeholder.com/1000x667" class="wd-100p ht-100p object-fit-cover" alt="">
              <div class="overlay-body bg-black-4"></div>
            </div>
            <div class="flex-1 overlay">
              <img src="http://via.placeholder.com/1000x667" class="wd-100p ht-100p object-fit-cover" alt="">
              <div class="overlay-body bg-black-5"></div>
            </div>
            <div class="flex-1 overlay">
              <img src="http://via.placeholder.com/1000x667" class="wd-100p ht-100p object-fit-cover" alt="">
              <div class="overlay-body bg-black-6"></div>
            </div>
            <div class="flex-1 overlay">
              <img src="http://via.placeholder.com/1000x667" class="wd-100p ht-100p object-fit-cover" alt="">
              <div class="overlay-body bg-black-7"></div>
            </div>
            <div class="flex-1 overlay">
              <img src="http://via.placeholder.com/1000x667" class="wd-100p ht-100p object-fit-cover" alt="">
              <div class="overlay-body bg-black-8"></div>
            </div>
            <div class="flex-1 overlay">
              <img src="http://via.placeholder.com/1000x667" class="wd-100p ht-100p object-fit-cover" alt="">
              <div class="overlay-body bg-black-9"></div>
            </div>
          </div><!-- d-flex -->

          <p class="section-label">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">class="bg-black-[value]"</code></td>
                <td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Gradient Background Set</label>
          <p class="mg-b-20 mg-sm-b-40">A set of gradient background utilities classes.</p>

          <div class="row">
            <div class="col-6 col-xl-3">
              <div class="bg-mantle ht-100"></div>
            </div><!-- col-3 -->
            <div class="col-6 col-xl-3">
              <div class="bg-reef ht-100"></div>
            </div><!-- col-3 -->
            <div class="col-6 col-xl-3 mg-t-30 mg-xl-t-0">
              <div class="bg-transfile ht-100"></div>
            </div><!-- col-3 -->
            <div class="col-6 col-xl-3 mg-t-30 mg-xl-t-0">
              <div class="bg-neon ht-100"></div>
            </div><!-- col-3 -->
          </div><!-- row -->

          <div class="row mg-t-30">
            <div class="col-6 col-xl-3">
              <div class="bg-delicate ht-100"></div>
            </div><!-- col-3 -->
            <div class="col-6 col-xl-3">
              <div class="bg-emerald ht-100"></div>
            </div><!-- col-3 -->
            <div class="col-6 col-xl-3 mg-t-30 mg-xl-t-0">
              <div class="bg-mojito ht-100"></div>
            </div><!-- col-3 -->
            <div class="col-6 col-xl-3 mg-t-30 mg-xl-t-0">
              <div class="bg-dance ht-100"></div>
            </div><!-- col-3 -->
          </div><!-- row -->

          <div class="row mg-t-30">
            <div class="col-6 col-xl-3">
              <div class="bg-teal-love ht-100"></div>
            </div><!-- col-3 -->
            <div class="col-6 col-xl-3">
              <div class="bg-crystal-clear ht-100"></div>
            </div><!-- col-3 -->
            <div class="col-6 col-xl-3 mg-t-30 mg-xl-t-0">
              <div class="bg-grandeur ht-100"></div>
            </div><!-- col-3 -->
            <div class="col-6 col-xl-3 mg-t-30 mg-xl-t-0">
              <div class="bg-flickr ht-100"></div>
            </div><!-- col-3 -->
          </div><!-- row -->

          <div class="row mg-t-30">
            <div class="col-6 col-xl-3">
              <div class="bg-royal ht-100"></div>
            </div><!-- col-3 -->
            <div class="col-6 col-xl-3">
              <div class="bg-firewatch ht-100"></div>
            </div><!-- col-3 -->
          </div><!-- row -->

          <p class="section-label mg-t-40">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">class="bg-[value]"</code></td>
                <td>mantle | reef | transfile | neon | delicate | emerald | mojito | dance | teal-love | crystal-clear | grandeur | flickr | royal | firewatch</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
@endsection
