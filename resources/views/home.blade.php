@extends('template.templatehome')
@section('content')
<div class="content d-flex align-items-center justify-content-center">
	@if (session('logout'))
		<script type="text/javascript">
			alert('You has been logout')
		</script>
	@endif
	<div>
		<div class="text-content text-center border-warning border border-5 d-flex align-items-center justify-content-center rounded-circle">
			<h4>Find and Buy Your Grocery Here !</h4>
		</div>
	</div>
</div>
@endsection