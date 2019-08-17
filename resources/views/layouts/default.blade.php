<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <div class="auth-information">
  @if(!Auth::check())
  <a href="/register">新規登録</a>
  <a href="/login">ログイン</a>
  @else
  <a href="#" id="logoutLabel">ログアウト</a>
  <form method="post" action="/logout" id="logout">
      {{ csrf_field() }}
  </form>
  @endif
  @if(Auth::check())
  <span>{{ Auth::user()->name }}さん</span>
  @else
  <span>名無しさん</span>
  @endif
  </div>
  <div class="container">
    @yield('contents')
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/js/main.js"></script>
</body>
</html>