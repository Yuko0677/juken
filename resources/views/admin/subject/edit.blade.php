@extends('layouts.admin')
@section('title', '科目の編集')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>科目の編集</h2>
      <form action="{{ action('Admin\SubjectController@update') }}" method="post" enctype="multipart/form-data">
        @if (count($errors) > 0)
        <ul>
          @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
          @endforeach
        </ul>
        @endif
        <div class="form-group row">
          <label class="col-md-2" for="name">科目</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="name" value="{{ $subject->name }}">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-10">
            <input type="hidden" name="id" value="{{ $subject->id }}">
            {{ csrf_field() }}
            <input type="submit" class="btn btn-primary" value="更新">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection