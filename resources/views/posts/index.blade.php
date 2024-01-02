@foreach ($posts as $post)
    <div>
        <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
        <p>{{ $post->created_at->format('M d, Y') }}</p>
    </div>
@endforeach
