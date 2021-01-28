@extends('layouts.admin')
@section('title', '登録済みテスト偏差値の一覧')

@section('content')
<div class="container">
  <div class="row">
    <h2>テスト偏差値一覧</h2>
  </div>
  <div class="row">
    <div class="col-md-4">
      <a href="{{ action('Admin\StandardscoreController@add') }}" role="button" class="btn btn-primary"> 新規作成</a>
    </div>
    <div class="col-md-8">
      <form action="{{ action('Admin\StandardscoreController@index') }}" method="get">
        <div class="form-group row">
          <label class="col-md-2">タイトル</label>
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
    <div class="admin-memo col-md-12 mx-auto">
      <div class="row">
        <table class="table table-dark">
          <thead>
            <tr>
              <th width="10%">日付</th>
              <th width="20%">テスト種類</th>
              <th width="25%">科目</th>
              <th width="25%">偏差値</th>
              <th width="10%">操作</th>
            </tr>
          </thead>
          <tbody>
            @if(isset($posts))
            @foreach($posts as $memo)
            <tr>
              <th>{{ $memo->id }}</th>
              <td>{{ \Str::limit($memo->title, 100) }}</td>
              <td>{{ \Str::limit($memo->body, 250) }}</td>
              <td>
                <div>
                  <a href="{{ action('Admin\MemoController@edit', ['id' => $memo->id]) }}">編集</a>
                </div>
                <div>
                  <a href="{{ action('Admin\MemoController@delete', ['id' => $memo->id]) }}">削除</a>
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