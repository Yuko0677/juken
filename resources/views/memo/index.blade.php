@extends('layouts.user')
@section('title', '記録一覧')

@section('content')
<div class="container">
  <div class="row">
    <h2>記録一覧</h2>
  </div>
  <div class="row">
    <div class="col-md-8">
      <form action="{{ action('Admin\MemoController@index') }}" method="get">
        <div class="form-group row">
          <label class="col-md-2">キーワード</label>
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
    <div class="list-memo col-md-12 mx-auto">
      <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th width="10%">日付</th>
              <th width="20%">項目</th>
              <th width="50%">内容</th>
              <th width="10%">操作</th>
            </tr>
          </thead>
          <tbody>
            @if(isset($memos))
            @foreach($memos as $memo)
            <tr>
              <td>{{ $memo->tookplace_at }}</td>
              <td>{{ $memo->event }}</td>
              <td>{!! nl2br($memo->body) !!}</td>
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