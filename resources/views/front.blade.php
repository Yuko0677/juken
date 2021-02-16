{{-- layouts/home.blade.phpを読み込む --}}
@extends('layouts.home')
{{--home.blade.phpの@yield('title')に'明日香受験プロジェクト'を埋め込む --}}
@section('title', '明日香受験プロジェクト')
{{-- admin.blade.phpの@yield('content')に以下のタグを読み込む --}}
@section('content')


<body>
  <h1>Road to Junior High</h1>
  <h2>受験日まであと{{ $diff_days }}日</h2>
  <a href="/homework/">今日の宿題</a>
  <a href="/standardscore">偏差値チャート</a>
  <a href="/targetschool">志望校リスト</a>
  <a href="/memo">記録・メモ</a>
  <a href="/calendar">カレンダー</a>
</body>

</html>
<?php
echo date('Y/m/d');
?>