@extends('template.templatehomepage')
@section('content')
<script type="text/javascript">
	document.getElementById('account-maintenance').classList.add('active')
</script>
<div class="content d-flex align-items-center justify-content-center">
	<div>
		<div class="text-content text-center border-warning border border-5 position-relative rounded-circle">
			<div class="position-absolute text-center w-100" style="top: 50%; transform: translateY(-50%);">
				<h2>Saved !</h2>
				<a style="font-size: 70%" href="{{ route('homepage.home') }}">Click here to "Home"</a>
			</div>
		</div>
	</div>
</div>
@endsection