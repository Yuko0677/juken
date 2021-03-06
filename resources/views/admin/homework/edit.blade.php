@extends('layouts.admin')
@section('title', '宿題の編集')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>宿題の編集</h2>
      <form action="{{ action('Admin\HomeworkController@update') }}" method="post" enctype="multipart/form-data">
        @if (count($errors) > 0)
        <ul>
          @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
          @endforeach
        </ul>
        @endif
        <div class="form-group row">
          <label class="col-md-2" for="limit_at">日付</label>
          <div class="col-md-10">
            <input type="date" class="form-control" name="limit_at" value="{{ $homework->limit_at }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="subject">科目</label>
          <div class="col-md-10">
            {{ Form::select('subject_id', $subjects, $homework->subject_id,
              ['class' => 'form-control', 'id' => 'subject_id']
            ) }}
          </div>
        </div>
        <div class=" form-group row">
          <label class="col-md-2" for="body">内容</label>
          <div class="col-md-10">
            <textarea class="form-control" name="body" rows="20">"{{ $homework->body }}"</textarea>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-10">
            <input type="hidden" name="id" value="{{ $homework->id }}">
            {{ csrf_field() }}
            <input type="submit" class="btn btn-primary" value="更新">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection