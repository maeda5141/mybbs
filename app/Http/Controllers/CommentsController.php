<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thread;

use App\Comment;

class CommentsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      }
    //
    public function store(Request $request, Thread $thread) {
        $this->validate($request, [
            'body'=>'required'
        ]);
        $comment = new Comment;
        $comment->body = $request->body;
        $comment->user_id = $request->user_id;
        $thread->comments()->save($comment);
        return redirect()->action('ThreadsController@show', $thread);
    }
}
