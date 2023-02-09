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
    @yield('main-app');
</body>

</html>