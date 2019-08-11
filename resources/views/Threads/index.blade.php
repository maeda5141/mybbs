@extends('layouts.default')

@section('title', 'なんでも掲示板')

@section('contents')
  <header>
    <p><a href="{{ url('/threads/create') }}" class="new-thread">掲示板を立てる</a></p>
    <h1>なんでも掲示板</h1>
  </header>
  <p class="all-threads"> -- 掲示板一覧 -- </p>
  <ul>

  @forelse ($threads as $thread)
    <li>
      <div class="created_at">{{ $thread->created_at}}</div>
      <p><a href="{{url('/threads', $thread->id)}}">{{ $thread->title }}({{ $thread->comments()->count() }})</a></p></li>
  @empty
    <li>スレッドはまだありません</li>
  @endforelse
  </ul>

@endsection