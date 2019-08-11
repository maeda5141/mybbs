<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thread;

use App\Comment;

class CommentsController extends Controller
{
    //
    public function store(Request $request, Thread $thread) {
        $this->validate($request, [
            'body'=>'required'
        ]);
        $comment = new Comment;
        $comment->body = $request->body;
        $thread->comments()->save($comment);
        return redirect()->action('ThreadsController@show', $thread);
    }
}
