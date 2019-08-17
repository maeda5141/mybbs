@extends('layouts.default')

@section('title', 'ユーザー情報編集ページ')

@section('contents')
  <header>
    <h2>ユーザー情報編集ページ</h2>
    <p><a href="/" class="new-thread">トップへ戻る</a></p>
  </header>
  <form method="post" action="{{ url('/users', $user) }}" class="update-user-form">
  {{ csrf_field() }}
  {{ method_field('patch') }}
  <p>
  <!-- @if($errors->has('title'))
  <p class="error">{{$errors->first('title')}}</p>
  @endif -->
  <label for="name">名前</label><input name="name" id="name" type="text" value="{{old('name', $user->name)}}">
  </p>
  <p>
  <!-- @if($errors->has('title'))
  <p class="error">{{$errors->first('title')}}</p>
  @endif -->
  <label for="email">メールアドレス</label><input name="email" id="email" type="text" value="{{old('email', $user->email)}}">
  </p>
  <p>
  <!-- @if($errors->has('title'))
  <p class="error">{{$errors->first('title')}}</p>
  @endif -->
  <label for="password">パスワード</label><input name="email" id="password" type="password" value="{{old('password', $user->password)}}">
  </p>
  <p>
  <!-- @if($errors->has('title'))
  <p class="error">{{$errors->first('title')}}</p>
  @endif -->
  <label for="password-confirmation">確認用パスワード</label><input name="password-confirmation" id="password-confirmation" type="password" value="{{old('password-confirmation')}}">
  </p>

  <p><input type="submit"></p>
  </form>

@endsection