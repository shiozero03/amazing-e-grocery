@extends('template.templateauth')
@section('content')
<div class="content d-flex align-items-center">
	<div class="container">
		<h2><u>{{ __('home.titleregister') }}</u></h2>
		<br>
		<form action="{{ route('process.register') }}" method="post" enctype="multipart/form-data">
			@csrf
			<div>
				@if ($message = Session::get('success'))
					<div class="alert alert-success">
						{{ __('home.errorregister') }}
					</div>
				@endif
				<table class="table border-none">
					<tbody>
						<tr>
							<td>
								<label for="first-name"><h5>{{ __('home.firstname') }} : </h5></label>
							</td>
							<td>
								<input type="text" name="first_name" id="first-name" class="w-100">
								@error('first_name')
									<small class="text-danger">{{ $message }}</small>
                            	@enderror
							</td>
							<td>
								<label for="last-name"><h5>{{ __('home.lastname') }} : </h5></label>
							</td>
							<td>
								<input type="text" name="last_name" id="last-name" class="w-100">
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
								<input type="text" name="email" id="email" class="w-100">
								@error('email')
									<small class="text-danger">{{ $message }}</small>
                            	@enderror
							</td>
							<td>
								<label for="role"><h5>{{ __('home.role') }} : </h5></label>
							</td>
							<td>
								<select class="w-100" name="role" id="role">
									@foreach($role as $rl)
									<option value="{{ $rl->role_id }}">{{ $rl->role_name }}</option>
									@endforeach
								</select>
								@error('role')
									<small class="text-danger">{{ $message }}</small>
                            	@enderror
							</td>
						</tr>
						<tr>
							<td>
								<span><h5>{{ __('home.gender') }} : </h5></span>
							</td>
							<td class="gender-radio">
								@foreach($gender as $gen)
								<label for="{{ $gen->gender_desc }}">
									<input type="radio" name="gender" id="{{ $gen->gender_desc }}" value="{{ $gen->gender_id }}" class="mx-2">{{ $gen->gender_desc }}
								</label>
								@endforeach
								<br>
								@error('gender')
									<small class="text-danger">{{ $message }}</small>
                            	@enderror
							</td>
							<td>
								<label for="display_picture_link"><h5>{{ __('home.display') }} : </h5></label>
							</td>
							<td>
								<div class="gender-radio">
									<input type="file" name="display_picture_link" id="display_picture_link" class="w-100 border border-dark" accept="image/png, image/jpeg, image/jpg, image/svg">
								</div>
								@error('display_picture_link')
									<small class="text-danger">{{ $message }}</small>
                            	@enderror
							</td>
						</tr>
						<tr>
							<td>
								<label for="password"><h5>Password : </h5></label>
							</td>
							<td>
								<input type="password" name="password" id="password" class="w-100">
								@error('password')
									<small class="text-danger">{{ $message }}</small>
                            	@enderror
							</td>
							<td>
								<label for="confirmpassword"><h5>{{ __('home.confirm') }} Password : </h5></label>
							</td>
							<td>
								<input type="password" name="confirmpassword" id="confirmpassword" class="w-100">
								@error('confirmpassword')
									<small class="text-danger">{{ $message }}</small>
                            	@enderror
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="button-submit text-center">
				<button class="submit-button btn btn-warning w-25">{{ __('home.submit') }}</button><br><br>
				<a href="{{ route('login') }}">{{ __('home.haveanaccount') }}</a>
			</div>
		</form>
	</div>
</div>
@endsection