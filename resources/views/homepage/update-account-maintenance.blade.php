@extends('template.templatehomepage')
@section('content')
<script type="text/javascript">
	document.getElementById('account-maintenance').classList.add('active')
</script>
<div class="content w-100 position-absolute" style="top: 25%; ">
	<div class="container">
		@if (session('success'))
			<div class="alert alert-success">
				{{ session('success') }}
			</div>
		@endif
		<h2><u>{{$accountget->first_name}} {{$accountget->last_name}}</u></h2><br>
		<form class="col-md-4" action="{{ route('update.role') }}" method="post">
			@csrf
			<ul>
				<li class="d-inline-block me-md-5">
					<h5>Role :</h5>
				</li>
				<li class="d-inline-block w-50">
					<input type="hidden" name="id_getaccount" value="{{ $accountget->account_id }}">
					<select class="w-100" name="role">
						@foreach($roleget as $rg)
						<option value="{{ $rg->role_id }}" <?php if($rg->role_id == $accountget->role_id){echo "selected"; } ?> >{{ $rg->role_name }}</option>
						@endforeach
					</select>
				</li>
			</ul>
			<br>
			<div class="text-center">
				<button class="btn btn-warning">Save</button>
			</div>
		</form>
	</div>
</div>
@endsection