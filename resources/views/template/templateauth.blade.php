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
		</header>
	</div>
	@yield('content')

	@include('template.footer')
</body>
</html>