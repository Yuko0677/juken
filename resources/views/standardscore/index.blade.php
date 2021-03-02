@extends('layouts.user')
@section('title', 'テスト偏差値推移')

@section('content')
<div class="container">
  <div class="row">
    <h2>テスト偏差値一覧</h2>
  </div>
  <div class="row">
    <div class="col-md-8">
      <form action="{{ action('Admin\StandardscoreController@index') }}" method="get">
        <div class="form-group row">
          <label class="col-md-2">テスト名</label>
          <div class="col-md-8">
            <input type="text" class="form-control" name="cond_title" value="">
          </div>
          <div class="col-md-2">
            {{ csrf_field() }}
            <input type="submit" class="btn btn-primary" value="検索">
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="list-standardscore col-md-12 mx-auto">
      <div class="row">
        <table class="table table-dark">
          <thead>
            <tr>
              <th width="40%">テスト名</th>
              <th width="10%">日付</th>
              <th width="10%">科目</th>
              <th width="25%">偏差値</th>
              <th width="10%">操作</th>
            </tr>
          </thead>
          <tbody>
            @if(isset($standardscores))
            @foreach($standardscores as $standardscore)
            <tr>
              <td>{{ $standardscore->test_name }}</td>
              <td>{{ $standardscore->exam_at }}</td>
              <td>{{ $standardscore->subject->name }}</td>
              <td>{!! nl2br($standardscore->score) !!}</td>
            </tr>
            @endforeach
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection