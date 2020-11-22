<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Coderockr</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    .navbar-dark .navbar-nav .nav-link {
        color: white;
    }

    .ml-10 {
        margin-left: 10rem !important;
    }

    .mr-10 {
        margin-right: 10rem !important;
    }

    body {
        background: linear-gradient(100deg, #F1A10A, #342303);
    }
</style>

<body>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <div id="app">
        @yield('content')
    </div>
    <script src="https://use.fontawesome.com/00046d1603.js"></script>
</body>

</html>