@extends('layouts.admin')
@section('title', 'テストの編集')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>テストの編集</h2>
      <form action="{{ action('Admin\ExamController@update') }}" method="post" enctype="multipart/form-data">
        @if (count($errors) > 0)
        <ul>
          @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
          @endforeach
        </ul>
        @endif
        <div class="form-group row">
          <label class="col-md-2" for="name">テスト名</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="name" value="{{ $exam->name }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="name">実施日</label>
          <div class="col-md-10">
            <input type="date" class="form-control" name="dated_at" value="{{ $exam->dated_at }}">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-10">
            <input type="hidden" name="id" value="{{ $exam->id }}">
            {{ csrf_field() }}
            <input type="submit" class="btn btn-primary" value="更新">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection