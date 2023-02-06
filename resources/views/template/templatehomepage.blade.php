<!DOCTYPE html>
<html>
<head>
	@include('template.metadata.homemeta')
</head>
<body>
	<div class="header fixed-top">
		<div class="bg-success">
			<header class="text-white position-relative py-3 container">
				<div class="text-center">
					<h1>Amazing E-Grocery</h1>
				</div>
				<div class="menu-auth text-white position-absolute">
					<a href="{{ route('register') }}" class="text-dark py-1 px-2 bg-warning rounded">Logout</a>
				</div>
			</header>
		</div>
		<div class="bg-warning text-center">
			<nav>
				<ul class="py-1">
					<li class="d-inline-block mx-3">
						<a href="{{route('homepage.home')}}" class="text-dark text-decoration-none"><h5>Home</h5></a>
					</li>
					<li class="d-inline-block mx-3">
						<a href="" class="text-dark text-decoration-none"><h5>Chart</h5></a>
					</li>
					<li class="d-inline-block mx-3">
						<a href="" class="text-dark text-decoration-none"><h5>Profile</h5></a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	@yield('content')

	@include('template.footer')
</body>
</html>