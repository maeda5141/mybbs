@extends('layouts.default')

@section('title', 'スレッド編集ページ')

@section('contents')
  <header>
    <h2>スレッド編集ページ</h2>
    <p><a href="/" class="new-thread">トップへ戻る</a></p>
  </header>
  <form method="post" action="{{ url('/threads', $thread) }}">
  {{ csrf_field() }}
  {{ method_field('patch') }}
  <p>
  @if($errors->has('title'))
  <p class="error">{{$errors->first('title')}}</p>
  @endif
  <input name="title" type="text" placeholder="スレッドのタイトルを入力してください" value="{{ old('title', $thread->title) }}">
  </p>
  <p>
  @if($errors->has('body'))
  <p class="error">{{$errors->first('body')}}</p>
  @endif
  <textarea name="body" placeholder="スレッドの内容、趣旨を入力してください">{{ old('body', $thread->body) }}</textarea>
  </p>
  <p><input type="submit"></p>
  </form>

@endsection