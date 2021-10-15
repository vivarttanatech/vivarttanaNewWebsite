<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Vivarttana CRM Login | @yield('title')</title>
        @include('crm.layout.headerscripts')
    </head>
    <body>
        @yield('content')
        @include('crm.layout.footerscripts.blade.php')
        @yield('javascript')
    </body>
</html>
