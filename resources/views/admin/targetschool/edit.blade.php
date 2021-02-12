@extends('layouts.admin')
@section('title', '志望校の編集')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>志望校の編集</h2>
      <form action="{{ action('Admin\TargetSchoolController@update') }}" method="post" enctype="multipart/form-data">
        @if (count($errors) > 0)
        <ul>
          @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
          @endforeach
        </ul>
        @endif
        <div class="form-group row">
          <label class="col-md-2" for="ranking">志望順位</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="ranking" value="{{ $targetschool->ranking }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="name">学校名</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="name" value="{{ $targetschool->name }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="standardscore">偏差値</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="standardscore" value="{{ $targetschool->standardsore }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="access">アクセス</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="access" value="{{ $targetschool->access }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="point">特徴</label>
          <div class="col-md-10">
            <textarea class="form-control" name="point" rows="20">{{ $targetschool->point }}</textarea>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-10">
            <input type="hidden" name="id" value="{{ $targetschool->id }}">
            {{ csrf_field() }}
            <input type="submit" class="btn btn-primary" value="更新">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection