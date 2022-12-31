@extends('admin.dashboard')
@section('slot')
    <a href="/posts/create">create a post</a>
    <h2> Posts</h2>

    @foreach ($posts as $post)
    <div style="margin-top: 15px; width:500px ">
        <p>post title: {{ $post->title }}</p>
        <p>post body: {{ $post->body }}</p>
        <form action="/posts/{{ $post->id }}" method="post">
            @csrf
            @method('delete')
            <a href="/posts/{{ $post->id }}/edit">Edit</a>
            <button type="submit" style="  background-color:blueviolet; border: none; border-radius: 20px; color: white; padding: 5px 15px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin-left:20px; cursor: pointer;">Delete </button>
        </form>
    </div>

    @endforeach

@endsection
