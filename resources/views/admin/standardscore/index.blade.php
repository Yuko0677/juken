@extends('layouts.admin')
@section('title', '登録済みテスト偏差値の一覧')

@section('content')
<div class="container">
  <div class="row">
    <h2>テスト偏差値一覧</h2>
  </div>
  <div>
    <h2 class="h2">{{ $exam->name }}</h2>
    <p>
      {{ $exam->dated_at }}
    </p>
  </div>
  <div class="row">
    <div class="col-md-4">
      <a href="{{ action('Admin\StandardscoreController@add', ['exam_id' => $exam->id]) }}" role="button" class="btn btn-primary"> 新規作成</a>
    </div>
    <div class="col-md-8">
      <form action="" method="get">
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
        <table class="table">
          <thead>
            <tr>
              <th width="10%">科目</th>
              <th width="25%">偏差値</th>
              <th width="10%">操作</th>
            </tr>
          </thead>
          <tbody>
            @if(isset($standardscores))
            @foreach($standardscores as $standardscore)
            <tr>
              <td>{{ $standardscore->subject->name }}</td>
              <td>{{ number_format($standardscore->score, 1) }}</td>
              <td>
                <div>
                  <a href="{{ action('Admin\StandardscoreController@edit', ['exam_id' => $exam->id, 'id' => $standardscore->id]) }}">編集</a>
                </div>
                <div>
                  <a href="{{ action('Admin\StandardscoreController@delete', ['exam_id' => $exam->id, 'id' => $standardscore->id]) }}">削除</a>
                </div>
              </td>
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