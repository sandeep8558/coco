<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('head')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

@include('layouts.web.header')

@yield('content')

@include('layouts.web.footer')
    
</body>
</html>