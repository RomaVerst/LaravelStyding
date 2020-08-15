<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title')Страница | @show</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-default bg-dark rounded">
            <h4 class="navbar-brand text-white">Меню</h4>
            @yield('menu')
        </nav>
        
        <main class="py-4">
            <h2>@yield('title_page')</h2>
            <hr>
            @yield('content')
        </main>
    </div>
</body>
</html>