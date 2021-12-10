<!DOCTYPE HTML>

<html>
	<head>
		<title>Department of Technical Program Consultation Booking</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	</head>

	<body class="is-preload landing">
		<div id="page-wrapper">
			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="{{ route('landing') }}">Department of Technical Programs</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="{{ route('landing') }}">Home</a></li>
							<li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('schedules.index') }}">Book A Schedule</a></li>
							<li><a href="{{ route('login') }}" class="button default">Sign In</a></li>
							<li><a href="{{ route('register') }}" class="button primary">Sign Up</a></li>
						</ul>
					</nav>
				</header>

                @yield('content')

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="https://www.facebook.com/groups/592327707595177" class="icon brands alt fa-facebook-f"><span class="label">Facebook Groups Page</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; DTP. All rights reserved.</a></li>
					</ul>
				</footer>
		</div>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('dist/css/main.css') }}">
        <noscript> <link rel="stylesheet" href="{{ asset('dist/css/noscript.css') }}"> </noscript>
		<!-- Scripts -->
        <script src="{{ asset('dist/js/jquery.min.js') }}"></script>
        <script src="{{ asset('dist/js/jquery.scrolly.min.js') }}"></script>
        <script src="{{ asset('dist/js/jquery.dropotron.min.js') }}"></script>
        <script src="{{ asset('dist/js/jquery.scrollex.min.js') }}"></script>
        <script src="{{ asset('dist/js/browser.min.js') }}"></script>
        <script src="{{ asset('dist/js/breakpoints.min.js') }}"></script>
        <script src="{{ asset('dist/js/util.js') }}"></script>
        <script src="{{ asset('dist/js/main.js') }}"></script>

        <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


	</body>
</html>
