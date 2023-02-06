@extends('template.templatehomepage')
@section('content')
<script type="text/javascript">
	document.getElementById('account-maintenance').classList.add('active')
</script>
<div class="content w-100 position-absolute" style="top: 25%; ">
	<div class="container">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th class="text-center"><u>Account</u></th>
					<th class="text-center"><u>Action</u></th>
				</tr>
			</thead>
			<tbody>
				@foreach($allaccount as $acc)
				<tr>
					<td class="text-center">{{ $acc->first_name }} {{ $acc->first_name }} - 
						@if($acc->role_id == 1)
						Admin
						@else
						User
						@endif
					</td>
					<td class="text-center">
						<a href="account-maintenance/update-role/{{ $acc->account_id }}" class="mx-3">Update Role</a> - <a href="homepage/account-maintenance/delete/{{ $acc->account_id }}" class="mx-3">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection