<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title> Home </title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            @php
                $segment = \Request::segments(1);
               // dd($segment);
            @endphp
            <li class="nav-item @if(!isset($segment[0])) active @endif">
                <a class="nav-link" href="{{ url('/') }}">Home </a>
            </li>
            <li class="nav-item @isset($segment[0]) {{ $segment[0] == 'anuncios' ? 'active' : '' }} @endisset">
                <a class="nav-link" href="{{ url('anuncios') }}"> Anuncios </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('registrar') }}"> Anuncios </a>
            </li>
        </ul>
    </div>
</nav>

<div class="container" id="app">
        @yield('content')
    </div>
</body>

<script src="{{ asset('js/app.js') }}"></script>

</html>