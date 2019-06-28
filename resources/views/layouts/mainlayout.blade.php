<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('partials.header-scripts')
</head>
<body class="slim-sticky-header">

@if (Auth::check())
	@include('partials.header')
	@include('partials.nav')
	@yield('content')
	@include('partials.footer')
	@include('partials.footer-scripts')
@else
	@yield('content')
	@include('partials.footer-scripts')
@endif

</body>
</html>