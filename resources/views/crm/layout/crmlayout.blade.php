<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Vivarttana CRM | @yield('title')</title>
        @include('crm.layout.headerscripts')
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                @include('crm.layout.dashTopNav')
                @include('crm.layout.dashSideNav')
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Dashboard</h1>
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
        @include('crm.layout.footerscripts')
        @yield('javascript')
    </body>
</html>
