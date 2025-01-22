<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('head')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

@include('layouts.web.header')

@yield('content')

@include('layouts.web.footer')
    
</body>
</html>