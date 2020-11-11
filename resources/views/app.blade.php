<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Portfolio') }}</title>

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <header-component></header-component>
    <main-component></main-component>
    <works-component></works-component>
    <about-component></about-component>
    <skill-component></skill-component>
    <contact-component></contact-component>
</div>
<!-- Scripts -->
<script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>