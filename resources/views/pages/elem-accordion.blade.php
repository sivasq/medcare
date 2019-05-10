@extends('layouts.mainlayout')

@section('headerscripts')
	@parent
	<link href="{{asset('assets/lib/rickshaw/css/rickshaw.min.css')}}" rel="stylesheet">
@endsection

@section('content')
	<div class="slim-mainpanel">
		<div class="container">
			<div class="slim-pageheader">
				<ol class="breadcrumb slim-breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">UI Elements</a></li>
					<li class="breadcrumb-item active" aria-current="page">Accordion</li>
				</ol>
				<h6 class="slim-pagetitle">Accordion</h6>
			</div><!-- slim-pageheader -->

			<div class="section-wrapper">
				<label class="section-title">Accordion Style 01</label>
				<p class="mg-b-20 mg-sm-b-40">The default collapse behavior to create an accordion.</p>

				<div id="accordion" class="accordion-one" role="tablist" aria-multiselectable="true">
					<div class="card">
						<div class="card-header" role="tab" id="headingOne">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
							   aria-controls="collapseOne" class="tx-gray-800 transition">
								Making a Beautiful CSS3 Button Set
							</a>
						</div><!-- card-header -->

						<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
							<div class="card-body">
								A concisely coded CSS3 button set increases usability across the board, gives you a ton
								of options, and keeps all the code involved to an absolute minimum. Anim pariatur cliche
								reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
								officia aute, non cupidatat skateboard dolor brunch.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingTwo">
							<a class="collapsed tx-gray-800 transition" data-toggle="collapse" data-parent="#accordion"
							   href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Horizontal Navigation Menu Fold Animation
							</a>
						</div>
						<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
								squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
								quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
								squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
								craft beer labore.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingThree">
							<a class="collapsed tx-gray-800 transition" data-toggle="collapse" data-parent="#accordion"
							   href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Creating CSS3 Button with Rounded Corners
							</a>
						</div>
						<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
								squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
								quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
								squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
								craft beer labore.
							</div>
						</div><!-- collapse -->
					</div><!-- card -->
				</div><!-- accordion -->

				<label class="section-title">Accordion Style 01 (Colored)</label>
				<p class="mg-b-20 mg-sm-b-40">The default collapse behavior to create an accordion.</p>

				<div id="accordion2" class="accordion-one accordion-one-primary" role="tablist"
				     aria-multiselectable="true">
					<div class="card">
						<div class="card-header" role="tab" id="headingOne2">
							<a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2"
							   aria-expanded="true" aria-controls="collapseOne2" class="tx-gray-800 transition">
								Making a Beautiful CSS3 Button Set
							</a>
						</div><!-- card-header -->

						<div id="collapseOne2" class="collapse show" role="tabpanel" aria-labelledby="headingOne2">
							<div class="card-body">
								A concisely coded CSS3 button set increases usability across the board, gives you a ton
								of options, and keeps all the code involved to an absolute minimum. Anim pariatur cliche
								reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
								officia aute, non cupidatat skateboard dolor brunch.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingTwo2">
							<a class="collapsed tx-gray-800 transition" data-toggle="collapse" data-parent="#accordion2"
							   href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
								Horizontal Navigation Menu Fold Animation
							</a>
						</div>
						<div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
								squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
								quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
								squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
								craft beer labore.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingThree2">
							<a class="collapsed tx-gray-800 transition" data-toggle="collapse" data-parent="#accordion2"
							   href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
								Creating CSS3 Button with Rounded Corners
							</a>
						</div>
						<div id="collapseThree2" class="collapse" role="tabpanel" aria-labelledby="headingThree2">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
								squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
								quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
								squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
								craft beer labore.
							</div>
						</div><!-- collapse -->
					</div><!-- card -->
				</div><!-- accordion -->

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
						<td><code class="pd-0 bg-transparent">class="accordion accordion-one-[value]"</code></td>
						<td>primary | success | warning | danger | info</td>
					</tr>
					</tbody>
				</table>
			</div><!-- section-wrapper -->

			<div class="section-wrapper mg-t-20">
				<label class="section-title">Accordion Style 02</label>
				<p class="mg-b-20 mg-sm-b-40">The default collapse behavior to create an accordion.</p>

				<div id="accordion3" class="accordion-two" role="tablist" aria-multiselectable="true">
					<div class="card">
						<div class="card-header" role="tab" id="headingOne3">
							<a data-toggle="collapse" data-parent="#accordion3" href="#collapseOne3"
							   aria-expanded="true" aria-controls="collapseOne3" class="tx-gray-800 transition">
								Making a Beautiful CSS3 Button Set
							</a>
						</div><!-- card-header -->

						<div id="collapseOne3" class="collapse show" role="tabpanel" aria-labelledby="headingOne3">
							<div class="card-body">
								A concisely coded CSS3 button set increases usability across the board, gives you a ton
								of options, and keeps all the code involved to an absolute minimum. Anim pariatur cliche
								reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
								officia aute, non cupidatat skateboard dolor brunch.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingTwo3">
							<a class="collapsed tx-gray-800 transition" data-toggle="collapse" data-parent="#accordion3"
							   href="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
								Horizontal Navigation Menu Fold Animation
							</a>
						</div>
						<div id="collapseTwo3" class="collapse" role="tabpanel" aria-labelledby="headingTwo3">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
								squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
								quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
								squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
								craft beer labore.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingThree3">
							<a class="collapsed tx-gray-800 transition" data-toggle="collapse" data-parent="#accordion3"
							   href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
								Creating CSS3 Button with Rounded Corners
							</a>
						</div>
						<div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
								squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
								quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
								squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
								craft beer labore.
							</div>
						</div><!-- collapse -->
					</div><!-- card -->
				</div><!-- accordion -->

				<label class="section-title">Accordion Style 02 (Colored)</label>
				<p class="mg-b-20 mg-sm-b-40">The default collapse behavior to create an accordion.</p>

				<div id="accordion4" class="accordion-two accordion-two-primary" role="tablist"
				     aria-multiselectable="true">
					<div class="card">
						<div class="card-header" role="tab" id="headingOne4">
							<a data-toggle="collapse" data-parent="#accordion4" href="#collapseOne4"
							   aria-expanded="true" aria-controls="collapseOne4" class="tx-gray-800 transition">
								Making a Beautiful CSS3 Button Set
							</a>
						</div><!-- card-header -->

						<div id="collapseOne4" class="collapse show" role="tabpanel" aria-labelledby="headingOne4">
							<div class="card-body">
								A concisely coded CSS3 button set increases usability across the board, gives you a ton
								of options, and keeps all the code involved to an absolute minimum. Anim pariatur cliche
								reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
								officia aute, non cupidatat skateboard dolor brunch.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingTwo4">
							<a class="collapsed tx-gray-800 transition" data-toggle="collapse" data-parent="#accordion4"
							   href="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
								Horizontal Navigation Menu Fold Animation
							</a>
						</div>
						<div id="collapseTwo4" class="collapse" role="tabpanel" aria-labelledby="headingTwo4">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
								squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
								quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
								squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
								craft beer labore.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingThree4">
							<a class="collapsed tx-gray-800 transition" data-toggle="collapse" data-parent="#accordion4"
							   href="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
								Creating CSS3 Button with Rounded Corners
							</a>
						</div>
						<div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
								squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
								quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
								squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
								craft beer labore.
							</div>
						</div><!-- collapse -->
					</div><!-- card -->
				</div><!-- accordion -->

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
						<td><code class="pd-0 bg-transparent">class="accordion accordion-two-[value]"</code></td>
						<td>primary | success | warning | danger | info</td>
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
