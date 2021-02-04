{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

{{--admin.blade.phpの@yield('title')に'宿題の新規作成'を埋め込む --}}
@section('title', '宿題の新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを読み込む --}}
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>宿題の新規作成</h2>
      <form action="{{ action('Admin\HomeworkController@create') }}" method="post" enctype="multipart/form-data">

        @if (count($errors) > 0)
        <ul>
          @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
          @endforeach
        </ul>
        @endif
        <div class="form-group row">
          <label class="col-md-2">日付</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="date" value="{{ old('date') }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2">科目</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="subject" value="{{ old('subject') }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2">内容</label>
          <div class="col-md-10">
            <textarea class="form-control" name="body" rows="10">{{ old('body') }}</textarea>
          </div>
        </div>
        {{ csrf_field() }}
        <input type="submit" class="btn btn-primary" value="更新">
      </form>
    </div>
  </div>
</div>
@endsection