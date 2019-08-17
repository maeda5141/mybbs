@extends('layouts.default')

@section('title', 'なんでも掲示板')

@section('contents')
  <header>
    <p>
    <a href="/" class="back-to-top">トップへ戻る</a>
    <a href="{{ action('UsersController@edit', $user)}}" class="back-to-top">登録情報の編集</a>
    </p>
    <h2>{{ $user->name }}さんのページ</h2>
  </header>
  <p class="all-threads"> -- 掲示板一覧 -- </p>
  <ul>

  @forelse ($user -> threads as $thread)
    <li>
      <div class="created_at">{{ $thread->created_at}}</div>
      <p><a href="{{url('/threads', $thread->id)}}">{{ $thread->title }}({{ $thread->comments()->count() }})</a></p></li>
  @empty
    <li>スレッドはまだありません</li>
  @endforelse
  </ul>

@endsection