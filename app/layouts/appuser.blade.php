<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>@yield('title')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <!-- Fonts -->
    {{-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" /> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"> --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="shortcut icon" href="{{asset('image/login.jpg')}}" type="image/x-icon">

    <link href="{{asset('css/stylec_panal/material-dashboard.css')}}" rel="stylesheet" />
    <link href="{{asset('css/stylec_panal/demo.css')}}" rel="stylesheet" />

</head>
<body>
    <div id="app">

 @include ('layouts/Dashboard/header')
        <main>
            @yield('content')
        </main>


    </div>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
</body>
</html>
