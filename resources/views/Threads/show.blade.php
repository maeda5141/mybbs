@extends('layouts.default')

@section('title', $thread->title)

@section('contents')
  <header>
    <p><a href="/" class="back-to-top">トップへ戻る</a></p>
    <h2>{{ $thread->title }}</h2>
    <div class="submit-data">
      <div class="created_at">{{ $thread->created_at}}</div>
      <div class="user-name">投稿者: 太郎</div>
    </div>
  </header>
  <div class="body">
  {!! nl2br(  e($thread->body) )!!}
  </div>
    <div class="buttons">
      <p><a href="{{ action('ThreadsController@edit', $thread) }}" class="edit-thread">[編集]</a></p>
      <p><a href="#" class="remove-thread" data-id="{{$thread->id}}">[削除]</a></p>
      <form method="post" action="{{url('/threads', $thread)}}" id="{{$thread->id}}">
      {{ csrf_field() }}
      {{ method_field('delete') }}
      </form>
    </div>
  <div class="comment-header">返信({{ $thread->comments()->count() }})</div>
  <ul class="comments-area">
    @forelse( $thread->comments as $comment)
  <li class="comments-area__comment">
  <p class="comment-submit-data">
    <span class="comment-id">{{ $comment->id }}:</span>
    <span class="comment-user-name">名無しさん</span>
    <span class="comment-created_at">{{ $comment->created_at }}</span>
  </p>
  <p>{!! nl2br(e($comment->body)) !!}</p>
  </li>
  @empty
  <li class="comments-area__comment">
  返信はまだありません
  </li>
  @endforelse
  </ul>
  <form method="post" action="{{ action('CommentsController@store', $thread) }}">
  {{ csrf_field() }}
  <p>
  @if($errors->has('body'))
  <p class="error">{{$errors->first('body')}}</p>
  @endif
  <textarea name="body" placeholder="スレッドへの返信を入力してください">{{ old('body') }}</textarea>
  </p>
  <p class="submit"><input type="submit"></p>
  </form>
@endsection