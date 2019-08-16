<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thread;

use App\Http\Requests\ThreadRequest;

class ThreadsController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
      }
    public function index () {
        $threads = Thread::latest()->get();
        return view('Threads.index')->with('threads', $threads);
    }
    public function show (Thread $thread) {
        return view('Threads.show')->with('thread', $thread);
    }
    public function create () {
        return view('Threads.create');
    }
    public function store (ThreadRequest $request) {
        // $this->validate($request, [
        //     'title'=>'required|min:5',
        //     'body'=>'required|min:5'
        // ]);
        $thread = new Thread();
        $thread->title = $request->title;
        $thread->body = $request->body;
        $thread->user_id = $request->user_id;
        $thread->save();
        return redirect('/');
    }
    public function edit (Thread $thread) {
        return view('Threads.edit')->with('thread', $thread);
    }

    public function update (ThreadRequest $request, Thread $thread) {
        // $this->validate($request, [
        //     'title'=>'required|min:5',
        //     'body'=>'required|min:5'
        // ]);
        $thread->title = $request->title;
        $thread->body = $request->body;
        $thread->save();
        return redirect('/');
    }

    public function destroy (Thread $thread) {
        $thread->delete();
        return redirect('/');
    }

}


