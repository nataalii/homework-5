
@extends('admin.dashboard')
    @section('slot')
    <h1>Edit post</h1>

    <form method="POST" action="/posts/{{ $post->id }}" style="margin-bottom: 100px">
        @csrf
        @method('PATCH')
        <div>
            <label for="title">Edit post Title:</label>
            <input type="text" name="title" id="title" value="{{ $post->title }}">
        </div>
        <div style="margin-top: 20px">
            <label for="body">Edit post body:</label>
            <textarea style="resize: none; height:100px" name="body" id="body">{{ $post->body }}</textarea>
        </div>
        <div style="position: relative">
            <button type="submit" style="position: absolute; right: 0; top:20px; background-color:blueviolet; border: none; border-radius: 20px; color: white; padding: 5px 15px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">Update Post</button>

        </div>

    </form>
        <h1>Comments on this post</h1>
        @forelse ($comments as $comment)
        <div style="margin-top: 20px">
            <p>Username: {{ $comment->username }} </p>
            <p>Comment: {{ $comment->comment }}</p>            
            <form action="/comments/{{ $comment->id }}" method="POST">
                @method('DELETE')
                @csrf
            <button type="submit" style=" background-color:blueviolet; border: none; border-radius: 20px; color: white; padding: 5px 15px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">Delete Comment</button>
            </form>
        </div>
        @empty
        <h3>There are no comments on this posts</h3>
        @endforelse

@endsection
