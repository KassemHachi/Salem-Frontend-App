<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @hasSection('title')

    <title>@yield('title') - {{ config('app.name') }}</title>
    @else
    <title>{{ config('app.name') }}</title>
    @endif

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts

    <style>
        * {
            font-family: "IBM Plex Sans Arabic"
        }
    </style>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


<body style="direction: rtl">
    @yield('body')
</body>

</html>