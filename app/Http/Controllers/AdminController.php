<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class AdminController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function edit(Post $post) {

        $post = Post::find($post->id);
        $comments = $post->comments;
        return view('admin.posts.update', ['post' => $post, 'comments' => $comments]);
    }



    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        return redirect('/');
    }


    public function show(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect('/');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/');
    }

    public function deleteComment($id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        return redirect()->route('post.edit', [$comment->post_id]);
    }

}
