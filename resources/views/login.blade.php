@extends('template.templateauth')
@section('content')
<style type="text/css">
	.gender-radio{
		font-weight: 600;
	}
	.submit-button{
		font-weight: 600;
	}
</style>
<div class="content d-flex align-items-center">
	<div class="container">
		<h2><u>Login</u></h2>
		<br>
		<form>
			<div class="col-md-6 float-md-start">
				<table class="table border-none">
					<tbody>
						<tr>
							<td>
								<label for="email"><h5>Email Address : </h5></label>
							</td>
							<td>
								<input type="text" name="email" id="email" class="w-100">
							</td>
						</tr>
						<tr>
							<td>
								<label for="password"><h5>Password : </h5></label>
							</td>
							<td>
								<input type="password" name="password" id="password" class="w-100">
							</td>
						</tr>
					</tbody>
				</table>
				<div class="button-submit text-center">
					<button class="submit-button btn btn-warning w-25">Submit</button><br><br>
					<a href="{{ route('register') }}">Don't have an account? Click here to sign up</a>
				</div>
			</div>
			<div class="clearfix"></div>
		</form>
	</div>
</div>
@endsection