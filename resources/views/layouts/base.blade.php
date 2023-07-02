<!doctype html>
<html lang="en" class="no-js">
<head>
	<title>Shutter</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="{{ asset('css/shutter-assets.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
        @include('includes.header')
		<!-- End Header -->
        @yield('base_content')
		<!-- footer
			================================================== -->
        @include('includes.footer')
		<!-- End footer -->

	</div>
	<!-- End Container -->

	<div class="preloader">
		<img alt="" src="images/loader.gif">
	</div>

	<script src="{{ asset('js/shutter-plugins.min.js') }}"></script>
	<script src="{{ asset('js/popper.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>


</body>
</html>
