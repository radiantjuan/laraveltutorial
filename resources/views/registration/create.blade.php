@extends("layout.master")

@section('content')
	<div class="col-md-8">
		<h1>Register</h1>
		<form method="post" action="/register">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="name">Name: </label>
				<input type="text" name="name" placeholder="Name" class="form-control">
			</div>

			<div class="form-group">
				<label for="email">Email Address: </label>
				<input type="email" name="email" placeholder="Email Address" class="form-control">
			</div>


			<div class="form-group">
				<label for="password">Password: </label>
				<input type="password" name="password" placeholder="Password" class="form-control">
			</div>

			<div class="form-group">
				<label for="password_confirmation">Password Confirmation: </label>
				<input type="password" name="password_confirmation" placeholder="Password" class="form-control">
			</div>

			<div class="form-group">
				<input type="submit" class="form-control btn btn-success">
			</div>

			<div class="form-group">
				@include('layout.errors')
			</div>
		</form>
	</div>
@endsection