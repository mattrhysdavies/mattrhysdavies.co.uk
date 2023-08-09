<div>

    @foreach($posts as $post)
        <p><a href="{{ route('blog.post.show', $post) }}">{{ $post->title }}</a></p>
    @endforeach


</div>
