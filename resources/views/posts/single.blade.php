@extends("layout.master")

@section('content')
<div class="blog-header">
	<h1 class="blog-title">The Bootstrap Blog</h1>
	<p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
</div>

<div class="row">

	<div class="col-sm-8 blog-main">

		<div class="blog-post">
			<a href="/posts/{{$post->id}}"><h2 class="blog-post-title">{{ $post->title }}</h2></a>
			<p class="blog-post-meta">{{ date('F, d Y h:i:s', strtotime($post->created_at)) }} by <a href="#">Mark</a></p>

			{{ $post->body }}

		</div><!-- /.blog-post -->
		<hr>
		<div class="comments">

			<ul class="list-group">

				@foreach($post->comments as $comment)

					<li class="list-group-item">
						<strong>
							{{ date('F, d Y h:i:s', strtotime($comment->created_at)) }}
						</strong>

						{{ $comment->body }}

					</li>
				@endforeach
			
			</ul>

		</div>


{{-- COMMENT ADD --}}
		<div class="card">
			<div class="card-block">
				<form method="POST" action="/posts/{{$post->id}}/comment">
					{{ csrf_field() }}
					<div class="form-group">
						<textarea name="body" placeholder="Your Comment Here." class="form-control"></textarea>
						
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
					@include('layout.errors')
				</form>
			</div>
		</div>

	</div><!-- /.blog-main -->

	{{-- SIDEBAR --}}
	@include('layout.sidebar')
	{{-- SIDEBAR --}}

</div><!-- /.row -->
@endsection