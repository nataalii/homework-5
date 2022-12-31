
@extends('admin.dashboard')
    @section('slot')
    <h1>Create a post</h1>

    <form method="POST" action="/posts">
        @csrf
        <div>
            <label for="title">Add post Title:</label>
            <input type="text" name="title" id="title">
        </div>
        <div style="margin-top: 20px">
            <label for="body" >Add post body:</label>
            <textarea style="resize: none; height:100px" name="body" id="body"></textarea>
        </div>
        <div style="position: relative">
            <button type="submit" style="position: absolute; right: 0; top:20px; background-color:blueviolet; border: none; border-radius: 20px; color: white; padding: 5px 15px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">Create Post</button>

        </div>
    </form>

@endsection
