<!DOCTYPE html>
<html>
<head>
	@include('template.metadata.homemeta')
</head>
<body>
	<div class="header fixed-top bg-success">
		<header class="text-white container position-relative py-3">
			<div class="text-center">
				<h1>Amazing E-Grocery</h1>
			</div>
			<div class="menu-auth text-white position-absolute">
				<a href="{{ route('register') }}" class="text-dark py-1 px-2 bg-warning rounded">Register</a>
				<a href="{{ route('login') }}" class="text-dark py-1 px-2 bg-warning rounded">Login</a>
			</div>
		</header>
	</div>
	@yield('content')

	@include('template.footer')
</body>
</html>