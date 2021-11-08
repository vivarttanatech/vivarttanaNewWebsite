@extends('crm.layout.crmlayout')
@include('crm.admin.includes.sidenav')
@section('logouturl')
    <a class="nav-link px-3" href="{{route('crm.admin.logout')}}">Sign out</a>
@endsection
@section('title','Admin Dashboard')
@section('custom_css')
    @yield('dashboard_custom_css')
@endsection
@section('content')
    @yield('dashboard_content')
@endsection
@section('javascript')
    @yield('dashboard_custom_javascript')
@endsection