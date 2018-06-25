<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title> Home </title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('anuncios') }}"> Anuncios </a>
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