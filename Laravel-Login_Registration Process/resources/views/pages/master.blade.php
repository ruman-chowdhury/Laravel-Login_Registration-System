<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> @yield('title') </title>

	<!-- boortstrap css -->
	<link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('user/css/style.css') }}" type="text/css"/>

	<!--font awesome-->
	<link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.7.1/css/all.css') }}" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!--Google font-->
	<link href="{{ asset('https://fonts.googleapis.com/css?family=Charm|Merriweather|Montserrat|Sacramento|Ubuntu|Monoton') }}" rel="stylesheet">

</head>
<body>
	<div class="container-fluid">

        @include('partial.header')

		@yield('content')


	</div><!--container-->

	<!-- ===================js==================== -->
	<script src="{{ asset('user/js/jquery.min.js') }}"></script>
	<script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
<!-- 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

</body>
</html>