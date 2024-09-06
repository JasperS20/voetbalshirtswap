<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VoetbalShirtsSwap - @yield('title')</title>
        @vite(['resources/js/app.js', 'resources/css/app.css'])
    </head>
    <body>
        @include('layout.header')
        <div class="mx-auto w-4/5">
            @yield('content')
        </div>
        @include('layout.footer')
    </body>
</html>
