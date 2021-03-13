@extends('layouts.user')
{{--home.blade.phpの@yield('title')に'明日香受験プロジェクト'を埋め込む --}}
@section('title', '明日香受験プロジェクト')
@section('content')
<div class="container">
  <div class="header">
    <h1 class="p-2 text-info">Road to Junior High</h1>
  </div>

  <h2>受験日まであと<span class="text-danger">{{ $diff_days }}日</span></h2>
</div>
@endsection