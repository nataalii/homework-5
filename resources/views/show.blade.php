@extends('layout')
@section('slot')
    <div style="width: 500px; ">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>


    <div style="width: 800px; display:flex; justify-content:space-between; margin-top:50px ">
        <div  style=" width:400px">
            <h1>Comments on this Post:</h1>
            @forelse ($comments as $comment)
            <div style=" margin-top: 50px">
                <h3>{{ $comment->username }}</h3>
                <p>{{ $comment->comment }}</p>
            </div>

            @empty
                There are no comments on this Post
            @endforelse
        </div>

    </div>
    <form id="form" action="/comments" method="post" style="position: absolute; top:50px; left:100px">
            <h2>Add a Comment</h2>
            @csrf
        
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <div>
                <label for="username">username:</label>
                <input type="text" id="username" name="username">
            </div>
            <div>
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" style="resize: none; margin-top: 30px"></textarea>
            </div>
            <button type="submit" style=" background-color:blueviolet; border: none; border-radius: 20px; color: white; padding: 5px 15px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; margin-top:20px">Add Comment</button>

    </form>


    <script src="https://unpkg.com/axios/dist/axios.min.js">
        document.getElementById('form').addEventListener('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            axios.post(this.action, formData).then(response => {
                    console.log(response.data);
                }).catch(error => {
                    console.log(error);
                });
        });
    </script>
@endsection
