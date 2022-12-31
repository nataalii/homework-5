@extends('layout')
@section('slot')
    <div style="width: 500px; ">
        <h1 style="color: blueviolet; font-size: 25px">All Posts</h1>
            @forelse ($posts as $post)
                <div style="margin-top: 50px">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->body }}</p>
                    <a href="/posts/{{ $post->id }}">See the post</a>
                </div>
            @empty
                <h1>There are no posts added </h1>
            @endforelse
    </div>
@endsection

    