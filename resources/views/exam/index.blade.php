@extends('layouts.user')
@section('title', '登録済みテストの一覧')

@section('content')
<div class="container">
  <canvas id="chart"></canvas>
  <div class="row">
    <div class="list-subject col-md-12 mx-auto">
      <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th width="40%">テスト名</th>
              <th width="20%">実施日</th>
            </tr>
          </thead>
          <tbody>
            @if(isset($exams))
            @foreach($exams as $exam)
            <tr>
              <td>
                <a href="{{ action('StandardscoreController@index', ['exam_id' => $exam->id]) }}">
                  {{ $exam->name }}
                </a>
              </td>
              <td>{{ $exam->dated_at }}</td>
            </tr>
            @endforeach
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script src="{{ asset('js/exam_chart.js') }}"></script>
<script>
  var exam_names = @json($exam_names);
  var subject_names = @json($subject_names);
  //TODO add subjects key
  var srandard_scores = @json($srandard_scores);
  examChart('chart');
</script>
@endsection