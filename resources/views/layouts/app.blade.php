<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>VoetbalShirtsSwap - @yield('title')</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @stack('scripts')
</head>
<body class="flex flex-col min-h-screen">
    @include('layouts.header')
    <div class="mx-auto w-4/5 flex-1">
        @yield('content')
    </div>
    @include('layouts.footer')
</body>
</html>
