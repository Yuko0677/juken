@extends('layouts.user')
{{--home.blade.phpの@yield('title')に'明日香受験プロジェクト'を埋め込む --}}
@section('title', '明日香受験プロジェクト')
@section('content')
<div class="container">
  <div class="header">
    <h1 class="p-2 text-info">Road to Junior High</h1>
  </div>


  <body>

    <h2>受験日まであと{{ $diff_days }}日</h2>
  </body>

  </html>
  <?php
  echo date('Y/m/d');
  ?>