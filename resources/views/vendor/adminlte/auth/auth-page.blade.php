@extends('adminlte::master')

@php( $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home') )

@if (config('adminlte.use_route_url', false))
    @php( $dashboard_url = $dashboard_url ? route($dashboard_url) : '' )
@else
    @php( $dashboard_url = $dashboard_url ? url($dashboard_url) : '' )
@endif

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('body')

    <div class="navbar navbar-expand-md navbar-dark bg-dark">
        <span class="navbar-brand">Test</span>
    </div>

    <div class="login-page">
        <div class="login-box">
            @yield('auth_body')
        </div>
    </div>
@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')
@stop
