<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body class="bg-primary-color text-text-color">
        @include('layout.header')
        @yield('content')
        @include('layout.footer')
    </body>
</html>
