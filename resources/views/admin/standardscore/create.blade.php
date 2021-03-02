{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

{{--admin.blade.phpの@yield('title')に'テスト偏差値の新規作成'を埋め込む --}}
@section('title', 'テスト偏差値の新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを読み込む --}}
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>テスト偏差値の新規作成</h2>
      <form action="{{ action('Admin\StandardscoreController@create') }}" method="post" enctype="multipart/form-data">

        @if (count($errors) > 0)
        <ul>
          @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
          @endforeach
        </ul>
        @endif
        <div class="form-group row">
          <label class="col-md-2">テスト名</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="test_name" value="{{ old('test_name') }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="exam_at">日付</label>
          <div class="col-md-10">
            <input type="date" class="form-control" name="exam_at" value="{{ old('exam_at')}}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="subject">科目</label>
          <div class="col-md-10">
            {{ Form::select('subject_id', $subjects, null,
              ['class' => 'form-control', 'id' => 'subject_id']
            ) }}
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="score">偏差値</label>
          <div class="col-md-10">
            <input type="float" class="form-control-file" name="score">
          </div>
        </div>
        {{ csrf_field() }}
        <input type="submit" class="btn btn-primary" value="更新">
      </form>
    </div>
  </div>
</div>
@endsection