<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="icon" sizes="180x180" href="{{ asset('images/favicon.png') }}">
    <title>KONCEEPT LAB</title>
    @yield('styles')
</head>

<body>
    <div class="parent">
        @include('layouts.navbar')

        @auth
            @yield('content')
        @else
            @yield('auth')
        @endauth

        @include('layouts.footer')
    </div>

    @yield('scripts')
</body>

</html>
