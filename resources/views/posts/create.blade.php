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
		<form>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Email Address</span>
				<input type="text" class="form-control" placeholder="Email Address" aria-describedby="basic-addon1">
			</div>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">@</span>
				<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
			</div>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">@</span>
				<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
			</div>
		</form>
	</div><!-- /.blog-main -->

	{{-- SIDEBAR --}}
	@include('layout.sidebar')
	{{-- SIDEBAR --}}

</div><!-- /.row -->
@endsection