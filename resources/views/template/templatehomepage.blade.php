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
					<a href="{{ route('logout') }}" class="text-dark py-1 px-2 bg-warning rounded">Logout</a>
				</div>
			</header>
		</div>
		<div class="bg-warning text-center">
			<nav>
				<ul class="py-1">
					<li class="d-inline-block mx-3">
						<a id="home" href="{{route('homepage.home')}}" class="text-dark menu-homepage"><h5>Home</h5></a>
					</li>
					<li class="d-inline-block mx-3">
						<a id="cart" href="{{route('homepage.cart')}}" class="text-dark menu-homepage"><h5>Cart</h5></a>
					</li>
					<li class="d-inline-block mx-3">
						<a id="profile" href="{{ route('homepage.profil') }}" class="text-dark menu-homepage"><h5>Profile</h5></a>
					</li>
					@if($role == 1)
					<li class="d-inline-block mx-3">
						<a id="account-maintenance" href="{{ route('homepage.account.maintenance') }}" class="text-dark menu-homepage"><h5>Account Maintenance</h5></a>
					</li>
					@endif
				</ul>
			</nav>
		</div>
	</div>
	@yield('content')

	@include('template.footer')
</body>
</html>