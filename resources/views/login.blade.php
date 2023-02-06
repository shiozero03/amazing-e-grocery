@extends('template.templateauth')
@section('content')
<div class="content d-flex align-items-center">
	<div class="container">
		<h2><u>{{__('home.titlelogin')}}</u></h2>
		<br>
		<form action="{{ route('process.login') }}" method="post">
			@csrf
			<div class="col-md-6 float-md-start">
				@if (session('error'))
					<div class="alert alert-danger">
						{{ __('home.erroraccount') }}
					</div>
				@endif
				@if (session('login'))
					<div class="alert alert-danger">
						{{ __('home.errorlogin') }}
					</div>
				@endif
				<table class="table border-none">
					<tbody>
						<tr>
							<td>
								<label for="email"><h5>{{__('home.emailaddress')}} : </h5></label>
							</td>
							<td>
								<input type="text" name="email" id="email" class="w-100">
								@error('email')
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
						</tr>
					</tbody>
				</table>
				<div class="button-submit text-center">
					<button class="submit-button btn btn-warning w-25">{{__('home.submit')}}</button><br><br>
					<a href="{{ route('register') }}">{{ __('home.didnotanaccount') }}</a>
				</div>
			</div>
			<div class="clearfix"></div>
		</form>
	</div>
</div>
@endsection