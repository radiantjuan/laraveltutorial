@extends("layout.master")

@section('content')
<div class="blog-header">
	<h1 class="blog-title">The Bootstrap Blog</h1>
	<p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
</div>

<div class="row">

	<div class="col-sm-8 blog-main">
		<h1>create</h1>
		<hr>
		<form method="POST" action="/posts">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="title"></label>
				<input type="text" class="form-control" name="title" placeholder="Title" aria-describedby="basic-addon1">
			</div>
			<div class="form-group">
				<label for="title"></label>
				<textarea type="text" class="form-control" name="body"></textarea>
			</div>
			<div class="form-group">
				<input type="Submit" class="form-control btn btn-default" placeholder="Username" aria-describedby="basic-addon1">
			</div>
			
		</form>
		@include('layout.errors')
	</div><!-- /.blog-main -->

	{{-- SIDEBAR --}}
	@include('layout.sidebar')
	{{-- SIDEBAR --}}

</div><!-- /.row -->
@endsection