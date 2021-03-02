@extends('layouts.admin')
@section('title', '登録済み科目の一覧')

@section('content')
<div class="container">
  <div class="row">
    <h2>科目一覧</h2>
  </div>
  <div class="row">
    <div class="col-md-4">
      <a href="{{ action('Admin\SubjectController@add') }}" role="button" class="btn btn-primary"> 新規作成</a>
    </div>
    <div class="col-md-8">
      <form action="{{ action('Admin\SubjectController@index') }}" method="get">
        <div class="form-group row">
          <label class="col-md-2">科目</label>
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
    <div class="list-subject col-md-12 mx-auto">
      <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th width="50%">教科</th>
              <th width="30%">操作</th>
            </tr>
          </thead>
          <tbody>
            @if(isset($subjects))
            @foreach($subjects as $subject)
            <tr>
              <td>{{ $subject->name }}</td>
              <td>
                <div>
                  <a href="{{ action('Admin\SubjectController@edit', ['id' => $subject->id]) }}">編集</a>
                </div>
                <div>
                  <a href="{{ action('Admin\SubjectController@delete', ['id' => $subject->id]) }}">削除</a>
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