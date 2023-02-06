@extends('template.templatehomepage')
@section('content')
<script type="text/javascript">
	document.getElementById('profile').classList.add('active')
</script>
<div class="content d-flex align-items-center">
	<div class="container">
		<h2><u>Register</u></h2>
		<br>
		<form action="{{ route('update.account') }}" method="post" enctype="multipart/form-data">
			@csrf
			<div>
				@if (session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
				@endif
				<table class="table border-none col-md-6 float-md-start">
					<tbody>
						<tr>
							<td rowspan="4" width="15%">
								<img id="imagefet" src="{{ asset('mystyle/image/display_picture/'.$account->display_picture_link) }}" class="w-100">
							</td>
							<td>
								<label for="first-name"><h5>First Name : </h5></label>
							</td>
							<td>
								<input type="text" name="first_name" id="first-name" class="w-100" value="{{ $account->first_name }}">
								@error('first_name')
									<small class="text-danger">{{ $message }}</small>
                            	@enderror
							</td>
							<td>
								<label for="last-name"><h5>Last Name : </h5></label>
							</td>
							<td>
								<input type="text" name="last_name" id="last-name" class="w-100" value="{{ $account->last_name }}">
								@error('last_name')
									<small class="text-danger">{{ $message }}</small>
                            	@enderror
							</td>
						</tr>
						<tr>
							<td>
								<label for="email"><h5>Email : </h5></label>
							</td>
							<td>
								<input type="text" name="email" id="email" class="w-100" value="{{ $account->email }}">
								@error('email')
									<small class="text-danger">{{ $message }}</small>
                            	@enderror
							</td>
							<td>
								<label for="role"><h5>Role : </h5></label>
							</td>
							<td>
								<input type="text" name="role" disabled class="w-100" value="{{ $roleNow->role_name }}">
								@error('role')
									<small class="text-danger">{{ $message }}</small>
                            	@enderror
							</td>
						</tr>
						<tr>
							<td>
								<span><h5>Gender : </h5></span>
							</td>
							<td class="gender-radio">
								@foreach($gender as $gen)
								<label for="{{ $gen->gender_desc }}">
									<input type="radio" name="gender" id="{{ $gen->gender_desc }}" value="{{ $gen->gender_id }}" class="mx-2" <?php if($account->gender_id == $gen->gender_id){echo "checked=checked";} ?>>{{ $gen->gender_desc }}
								</label>
								@endforeach
								<br>
								@error('gender')
									<small class="text-danger">{{ $message }}</small>
                            	@enderror
							</td>
							<td>
								<label for="display_picture_link"><h5>Display Picture : </h5></label>
							</td>
							<td>
								<div class="gender-radio">
									<input type="file" name="display_picture_link" id="display_picture_link" class="w-100 border border-dark" accept="image/png, image/jpeg, image/jpg, image/svg">
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<label for="password"><h5>Password : </h5></label>
							</td>
							<td>
								<input type="password" name="password" id="password" class="w-100" value="{{ $account->password }}">
								@error('password')
									<small class="text-danger">{{ $message }}</small>
                            	@enderror
							</td>
							<td>
								<label for="confirmpassword"><h5>Confirm Password : </h5></label>
							</td>
							<td>
								<input type="password" name="confirmpassword" id="confirmpassword" class="w-100" value="{{ $account->password }}">
								@error('confirmpassword')
									<small class="text-danger">{{ $message }}</small>
                            	@enderror
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="button-submit text-center">
				<button class="submit-button btn btn-warning w-25">Save</button>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	let display_picture_link = document.getElementById('display_picture_link')
	let imagefet = document.getElementById('imagefet')

	display_picture_link.addEventListener('change', function () {
        gambar(this);
    })
    function gambar(a) {
        if (a.files && a.files[0]) {     
            var reader = new FileReader();    
            reader.onload = function (e) {
                imagefet.src=e.target.result;
            }    
            reader.readAsDataURL(a.files[0]);
        }
    }
</script>
@endsection