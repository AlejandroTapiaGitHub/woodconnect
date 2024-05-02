<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    @yield('css')
    <title>@yield('title')</title>
    @yield('scripts')
</head>

<body>
    <!--@include('layouts.partials.menu')
    <a href="{{ route('login') }}"> inicio </a>
    <br>-->

    @yield('content')
    
</body>

</html>
