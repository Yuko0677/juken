@extends('layouts.admin')
@section('title', 'ニュース宿題の編集')

// test
// ome more test
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>宿題の編集</h2>
      <form action="{{ action('Admin\NewsController@update') }}" method="post" enctype="multipart/form-data">
        @if (count($errors) > 0)
        <ul>
          @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
          @endforeach
        </ul>
        @endif
        <div class="form-group row">
          <label class="col-md-2" for="title">項目</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="title" value="{{ $homework_form->title }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="body">内容</label>
          <div class="col-md-10">
            <textarea class="form-control" name="body" rows="20">{{ $homeowrk_form->body }}</textarea>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-10">
            <input type="hidden" name="id" value="{{ $homework_form->id }}">
            {{ csrf_field() }}
            <input type="submit" class="btn btn-primary" value="更新">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection