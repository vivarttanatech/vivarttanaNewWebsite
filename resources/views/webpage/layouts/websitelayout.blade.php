<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
    </head>
    <body class="">        
            <main>
                @include('webpage.layouts.topnav')
                @yield('content')
            </main>
    </body>
</html>
