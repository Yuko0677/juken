@extends('layouts.admin')
@section('title', '登録済み志望校一覧')

@section('content')
<div class="container">
  <div class="row">
    <h2>志望校一覧</h2>
  </div>
  <div class="row">
    <div class="col-md-4">
      <a href="{{ action('Admin\TargetSchoolController@add') }}" role="button" class="btn btn-primary"> 新規作成</a>
    </div>
    <div class="col-md-8">
      <form action="{{ action('Admin\TargetSchoolController@index') }}" method="get">
        <div class="form-group row">
          <label class="col-md-2">学校名</label>
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
    <div class="list-targetschool col-md-12 mx-auto">
      <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th width="10%">志望順位</th>
              <th width="20%">学校名</th>
              <th width="10%">偏差値</th>
              <th width="20%">アクセス</th>
              <th width="20%">特記事項</th>
              <th width="10%">操作</th>
            </tr>
          </thead>
          <tbody>
            @if(isset($targetschools))
            @foreach($targetschools as $targetschool)
            <tr>
              <td>{{ $targetschool->ranking }}</td>
              <td>
                <a href="{{ $targetschool->url }}" target="_blank">{{ $targetschool->name }}</a>
              </td>
              <td>{{ $targetschool->standardscore }}</td>
              <td>{{ $targetschool->access }}</td>
              <td>{!! nl2br($targetschool->point) !!}</td>
              <td>
                <div>
                  <a href="{{ action('Admin\TargetSchoolController@edit', ['id' => $targetschool->id]) }}">編集</a>
                </div>
                <div>
                  <a href="{{ action('Admin\TargetSchoolController@delete', ['id' => $targetschool->id]) }}">削除</a>
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