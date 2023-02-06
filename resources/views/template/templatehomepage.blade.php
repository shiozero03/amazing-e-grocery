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
					<a href="{{ route('logout') }}" class="text-dark py-1 px-2 bg-warning rounded">{{__('home.logout')}}</a>
					<a onclick="dropdownlang()" style="cursor: pointer;" class="text-dark py-1 px-2 bg-warning rounded dropdown-toggle">{{ App::currentLocale() }}</a>
				</div>
				<ul class="position-absolute bg-warning rounded border-success border d-none" style="right:0; font-weight: 600;" id="dd-menu-lang">
	                <li class="d-block py-1 border-bottom border-success" style="margin-left: -25%;">
	                    <a class="text-dark" href="{{ route('locale', 'en') }}">
	                        English
	                    </a>
	                </li>
	                <li class="d-block py-1" style="margin-left: -25%;">
	                    <a class="text-dark" href="{{ route('locale', 'id') }}">
	                        Indonesia
	                    </a>
	                </li>
	            </ul>
			</header>
		</div>
		<div class="bg-warning text-center">
			<nav>
				<ul class="py-1">
					<li class="d-inline-block mx-3">
						<a id="home" href="{{route('homepage.home')}}" class="text-dark menu-homepage"><h5>{{__('home.home')}}</h5></a>
					</li>
					<li class="d-inline-block mx-3">
						<a id="cart" href="{{route('homepage.cart')}}" class="text-dark menu-homepage"><h5>{{__('home.cart')}}</h5></a>
					</li>
					<li class="d-inline-block mx-3">
						<a id="profile" href="{{ route('homepage.profil') }}" class="text-dark menu-homepage"><h5>{{__('home.profil')}}</h5></a>
					</li>
					@if($role == 1)
					<li class="d-inline-block mx-3">
						<a id="account-maintenance" href="{{ route('homepage.account.maintenance') }}" class="text-dark menu-homepage"><h5>{{__('home.account')}}</h5></a>
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