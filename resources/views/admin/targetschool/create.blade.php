{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

{{--admin.blade.phpの@yield('title')に'志望校の新規作成'を埋め込む --}}
@section('title', '志望校の新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを読み込む --}}
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>志望校の新規作成</h2>
      <form action="{{ action('Admin\TargetSchoolController@create') }}" method="post" enctype="multipart/form-data">

        @if (count($errors) > 0)
        <ul>
          @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
          @endforeach
        </ul>
        @endif
        <div class="form-group row">
          <label class="col-md-2" for="ranking">志望順</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="ranking" value="{{ old('ranking') }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="name">学校名</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="url">URL</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="url" value="{{ old('url') }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="standardscore">偏差値</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="standardscore" value="{{ old('standardscore') }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="access">アクセス</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="access" value="{{ old('access') }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="point">特徴</label>
          <div class="col-md-10">
            <textarea class="form-control" name="point" rows="10">{{ old('point') }}</textarea>
          </div>
        </div>
        {{ csrf_field() }}
        <input type="submit" class="btn btn-primary" value="更新">
      </form>
    </div>
  </div>
</div>
@endsection