<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width-device-width, initial-scale=1">

  <!-- CSRF Token -->
  {{-- --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>

  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet type=" text/css">


  <!-- Styles -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-laravel">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Tobble navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a href="{{ route('homework') }}" class="nav-item nav-link">宿題</a></li>
            <li class="nav-item"><a href="{{ route('memo') }}" class="nav-item nav-link">記録メモ</a></li>
            <li class="nav-item"><a href="{{ route('exam') }}" class="nav-item nav-link">テスト</a></li>
            <li class="nav-item"><a href="{{ route('targetschool') }}" class="nav-item nav-link">志望校</a></li>
          </ul>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
          </ul>
        </div>
      </div>
    </nav>

    <main class="py-4">
      @yield('content')
    </main>
  </div>
</body>

</html>