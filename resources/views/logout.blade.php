@extends('template.templatehome')
@section('content')
<div class="content d-flex align-items-center justify-content-center">
	<div>
		<div class="text-content text-center border-warning border border-5 d-flex align-items-center justify-content-center rounded-circle">
			<h4>{{ __('home.logouttext') }}!</h4>
		</div>
	</div>
</div>
<script>
	window.setTimeout(function(){
		window.location = '/';
	}, 3000);
</script>
@endsection