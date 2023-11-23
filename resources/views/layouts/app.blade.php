<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MULTIFANDOM</title>

  
   

    <!-- Scripts -->
    @vite(['resources/js/app.js'])<!-- es el paso 8 para instalar boostrap-->
   
</head>
<body>
    @include('partials.barranavegacion')
   
    @yield('container')
    
</body>
</html>
