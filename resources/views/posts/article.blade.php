@foreach($posts as $key => $post)
	<div class="blog-post">
		<a href="/posts/{{$post->id}}"><h2 class="blog-post-title">{{ $post->title }}</h2></a>
		<p class="blog-post-meta">{{ date('F, d Y h:i:s', strtotime($post->created_at)) }} by <a href="#">Mark</a></p>

		{{ $post->body }}
	</div><!-- /.blog-post -->
@endforeach
