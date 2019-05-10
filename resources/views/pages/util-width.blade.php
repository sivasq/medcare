@extends('layouts.mainlayout')

@section('content')
	<div class="slim-mainpanel">
		<div class="container">
			<div class="slim-pageheader">
				<ol class="breadcrumb slim-breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">UI Elements</a></li>
					<li class="breadcrumb-item active" aria-current="page">Width Utilities</li>
				</ol>
				<h6 class="slim-pagetitle">Width Utilities</h6>
			</div><!-- slim-pageheader -->

			<div class="section-wrapper">
				<label class="section-title">Setting a Width</label>
				<p class="mg-b-20 mg-sm-b-40">You can set a width to an element instantly by using the following
					utilities classes for height.</p>

				<div class="d-flex mg-b-40">
					<div class="d-flex align-items-center justify-content-center wd-80 ht-80 bg-gray-400">.wd-80</div>
					<div class="d-flex align-items-center justify-content-center wd-150 ht-80 bg-gray-400 mg-l-20">
						.wd-150
					</div>
					<div class="d-flex align-items-center justify-content-center wd-100 ht-80 bg-gray-400 mg-l-20">
						.wd-100
					</div>
				</div><!-- d-flex -->

				<p class="br-section-label-sm">Class Reference</p>
				<table class="table table-reference">
					<thead>
					<tr>
						<th class="wd-30p">Smaller Width</th>
						<th class="wd-70p">Value</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td><code class="pd-0 bg-transparent">.wd-[value]</code></td>
						<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
					</tr>
					</tbody>
				</table>

				<table class="table table-reference mg-t-20">
					<thead>
					<tr>
						<th class="wd-30p">Regular Width</th>
						<th class="wd-70p">Value</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td><code class="pd-0 bg-transparent">.wd-[value]</code></td>
						<td>15 | 20 | 25 | 30 | ... | 100 &nbsp; (step of 5)</td>
					</tr>
					</tbody>
				</table>

				<table class="table table-reference mg-t-20">
					<thead>
					<tr>
						<th class="wd-30p">Bigger Width</th>
						<th class="wd-70p">Value</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td><code class="pd-0 bg-transparent">.wd-[value]</code></td>
						<td>150 | 200 | 250 | 300 | ... | 1000 &nbsp; (step of 50)</td>
					</tr>
					</tbody>
				</table>
			</div><!-- section-wrapper -->

			<div class="section-wrapper mg-t-20">
				<label class="section-title">Percentage Width</label>
				<p class="mg-b-20 mg-sm-b-40">You can set a width through percentage using the following utilities
					classes.</p>

				<table class="table table-reference">
					<thead>
					<tr>
						<th class="wd-30p">Class</th>
						<th class="wd-70p">Value</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td><code class="pd-0 bg-transparent">.wd-[value]p</code></td>
						<td>10 | 20 | 30 | 40 | ... | 100 &nbsp; (step of 10)</td>
					</tr>
					</tbody>
				</table>
			</div><!-- section-wrapper -->

			<div class="section-wrapper mg-t-20">
				<label class="section-title">Media Query Width</label>
				<p class="mg-b-20 mg-sm-b-40">You can also set a width to a different media query using the following
					utilities classes.</p>

				<p class="section-label">Class Reference</p>
				<table class="table table-reference">
					<thead>
					<tr>
						<th class="wd-30p">Class</th>
						<th class="wd-70p">Value</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td><code class="pd-0 bg-transparent">.wd-[size]-[value]</code></td>
						<td rowspan="2">
							<p class="mg-b-5">size: xs | sm | md | lg | xl</p>
							<p class="mg-b-0">value: the width value (refer to code above)</p>
						</td>
					</tr>
					<tr>
						<td><code class="pd-0 bg-transparent">.wd-[size]-[value]p</code></td>
					</tr>
					</tbody>
				</table>
			</div><!-- section-wrapper -->

			<div class="section-wrapper mg-t-20">
				<label class="section-title">Extra Width Classes</label>
				<p class="mg-b-20 mg-sm-b-40">You can also set a width using the extra utilities classes below.</p>

				<table class="table table-reference">
					<thead>
					<tr>
						<th class="wd-30p">Class</th>
						<th class="wd-70p">Description</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td><code class="pd-0 bg-transparent">.wd-100v</code></td>
						<td>Set a width to an element based on viewport width.</td>
					</tr>
					<tr>
						<td><code class="pd-0 bg-transparent">.wd-auto</code></td>
						<td>Set an auto width to an element.</td>
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
