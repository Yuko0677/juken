@extends('layouts.admin')
@section('title', '記録メモの編集')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>記録メモの編集</h2>
      <form action="{{ action('Admin\MemoController@update') }}" method="post" enctype="multipart/form-data">
        @if (count($errors) > 0)
        <ul>
          @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
          @endforeach
        </ul>
        @endif
        <div class="form-group row">
          <label class="col-md-2" for="date">日付</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="tookplace_at" value="{{ $memo->tookplace_at }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="event">項目</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="event" value="{{ $memo->event }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="body">内容</label>
          <div class="col-md-10">
            <textarea class="form-control" name="body" rows="20">{{ $memo->body }}</textarea>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-10">
            <input type="hidden" name="id" value="{{ $memo->id }}">
            {{ csrf_field() }}
            <input type="submit" class="btn btn-primary" value="更新">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection