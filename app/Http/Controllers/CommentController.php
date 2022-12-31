<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Comment $comment)
    {
        $comment->username = $request->username;
        $comment->comment = $request->comment;
        $comment->post_id = $request->post_id;
        $comment->save();

        return redirect()->route('post', [$comment->post_id]);
    }
}
