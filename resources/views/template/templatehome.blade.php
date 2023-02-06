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
				<a href="{{ route('register') }}" class="text-dark py-1 px-2 bg-warning rounded">{{__('home.titleregister')}}</a>
				<a href="{{ route('login') }}" class="text-dark py-1 px-2 bg-warning rounded">{{__('home.titlelogin')}}</a>
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
	@yield('content')

	@include('template.footer')
</body>
</html>