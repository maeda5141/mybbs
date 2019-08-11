@extends('layouts.default')

@section('title', 'スレッド投稿ページ')

@section('contents')
  <header>
    <p><a href="/" class="back-to-top">トップへ戻る</a></p>
    <h2>スレッド作成ページ</h2>
  </header>
  <form method="post" action="{{ url('/threads') }}">
  {{ csrf_field() }}
  <p>
  @if($errors->has('title'))
  <p class="error">{{$errors->first('title')}}</p>
  @endif
  <input name="title" type="text" placeholder="スレッドのタイトルを入力してください" value="{{ old('title') }}">
  </p>
  <p>
  @if($errors->has('body'))
  <p class="error">{{$errors->first('body')}}</p>
  @endif
  <textarea name="body" placeholder="スレッドの説明、趣旨を入力してください">{{ old('body') }}</textarea>
  </p>
  <p class="submit"><input type="submit" value="作成"></p>
  </form>

@endsection