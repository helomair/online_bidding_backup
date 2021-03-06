<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{ csrf_token() }}">

        <title>@yield('title') | {{env('APP_NAME')}}</title>
		@yield('css')
		<link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/tether/tether.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-grid.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/socicon/css/styles.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}" type="text/css">
		<!-- Bootstrap core CSS
		<link href="{{ asset('vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
 -->
		<!-- Custom styles for this template
		<link href="{{ asset('css/shop-item.css') }}" rel="stylesheet">-->
	</head>

    <body>
        @include('layouts.navbar')
        @yield('content')
        @include('layouts.footer')
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/scripts.js') }}"></script>
		<!-- Bootstrap core JavaScript -->
		<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <!--<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>-->
    @yield('script')
	</body>

</html>
