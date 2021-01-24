@extends('layouts.admin')
@section('title', '登録済みメモの一覧')

@section('content')
<div class="container">
  <div class="row">
    <h2>メモ一覧</h2>
    <div class="col-md-12">
      <a href="..\" , role="button" class="btn btn-primary"> メモ画面</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <a href="{{ action('Admin\MemoController@add') }}" role="button" class="btn btn-primary"> 新規作成</a>
    </div>
    <div class="col-md-8">
      <form action="{{ action('Admin\MemoController@index') }}" method="get">
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
    <div class="admin-news col-md-12 mx-auto">
      <div class="row">
        <table class="table table-dark">
          <thead>
            <tr>
              <th width="10%">日付</th>
              <th width="20%">メモ</th>
              <th width="50%">内容</th>
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
                  <a href="{{ action('Admin\HomeworkController@edit', ['id' => $hoomework->id]) }}">編集</a>
                </div>
                <div>
                  <a href="{{ action('Admin\HomeworkController@delete', ['id' => $homework->id]) }}">削除</a>
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