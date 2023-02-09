<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
    </title>
    @vite('resources/js/app.js')
</head>

<body>
    @include('partials.header')
    @yield('main-app')
</body>

</html>