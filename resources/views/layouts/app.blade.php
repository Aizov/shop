<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Aizov">
    <link rel="icon" href="favicon.ico">

    <title>@yield('title') {{config('app.name')}}</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
</head>
<body>

@include('elements.header')

<main role="main">

    <br>
    <div class="container marketing ml-auto">

        @yield('content')
    </div>

    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Вверх</a></p>
        <p>&copy; {{config('app.name')}} &middot; <a href="#">Правила</a></p>
        @yield('footer')
    </footer>
</main>
</body>
</html>