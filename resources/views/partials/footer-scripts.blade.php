<!-- Bootstrap core JavaScript
================================================= -->

@section('footerscripts')
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{asset('assets/lib/jquery/js/jquery.js')}}"></script>
	<script src="{{asset('assets/lib/popper.js/js/popper.js')}}"></script>
	<script src="{{asset('assets/lib/bootstrap/js/bootstrap.js')}}"></script>
@show

<script src="{{asset('assets/js/slim.js')}}"></script>

<script>
	setTimeout(function() {
		$('#flashMessage').fadeOut('slow');
	}, 5000); // <-- time in milliseconds
</script>