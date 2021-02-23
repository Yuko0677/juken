@extends('layouts.admin')
@section('title', 'テスト偏差値の編集')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>テスト偏差値の編集</h2>
      <form action="{{ action('Admin\StandardscoreController@update') }}" method="post" enctype="multipart/form-data">
        @if (count($errors) > 0)
        <ul>
          @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
          @endforeach
        </ul>
        @endif
        <div class="form-group row">
          <label class="col-md-2" for="test_name">テスト名</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="test_name" value="{{ $standardscore->test_name }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="exam_at">日付</label>
          <div class="col-md-10">
            <input type="date" class="form-control" name="exam_at" value="{{ $standardscore->exam_at }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="subject">科目</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="subject" value="{{ $standardscore->subject }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="score">偏差値</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="score" value="{{ $standardscore->score }}">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-10">
            <input type="hidden" name="id" value="{{ $standardscore->id }}">
            {{ csrf_field() }}
            <input type="submit" class="btn btn-primary" value="更新">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection