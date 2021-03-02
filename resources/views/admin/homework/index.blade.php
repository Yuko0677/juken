@extends('layouts.admin')
@section('title', '登録済み宿題の一覧')

@section('content')
<div class="container">
  <div class="row">
    <h2>宿題一覧</h2>
  </div>
  <div class="row">
    <div class="col-md-4">
      <a href="{{ action('Admin\HomeworkController@add') }}" role="button" class="btn btn-primary"> 新規作成</a>
    </div>
    <div class="col-md-8">
      <form action="{{ action('Admin\HomeworkController@index') }}" method="get">
        <div class="form-group row">
          <label class="col-md-2">内容</label>
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
    <div class="list-homework col-md-12 mx-auto">
      <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th width="10%">日付</th>
              <th width="20%">教科</th>
              <th width="50%">内容</th>
              <th width="10%">操作</th>
            </tr>
          </thead>
          <tbody>
            @if(isset($homeworks))
            @foreach($homeworks as $homework)
            <tr>
              <td>{{ $homework->limit_at }}</td>
              <td>{{ $homework->subject->name }}</td>
              <td>{!! nl2br($homework->body) !!}</td>
              <td>
                <div>
                  <a href="{{ action('Admin\HomeworkController@edit', ['id' => $homework->id]) }}">編集</a>
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