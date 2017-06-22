@extends("layout.master")

@section('content')
	<div class="col-md-8">
		<h1>Register</h1>
		<form method="post" action="/login">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="email">Email: </label>
				<input type="email" name="email" class="form-control">

			</div>

			<div class="form-group">
				<label for="password">Password: </label>
				<input type="password" name="password" class="form-control">
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