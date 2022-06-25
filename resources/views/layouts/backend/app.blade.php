<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    {{-- CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--  Page Title  --}}
    @php
        $role = Auth::user()->role_id;

        $role_type = null;
        $side_nav = NULL;

        if($role == 1){
            $role_type = 'ADMIN';
            $side_nav = 'layouts.backend.partials.admin_sidenav';
        } elseif($role == 2){
            $role_type = 'MANAGER';
            $side_nav = 'layouts.backend.partials.manager_sidenav';
        } elseif($role == 3){
            $role_type = 'RESTAURANT OWNER';
            $side_nav = 'layouts.backend.partials.owner_sidenav';
        }
    @endphp
    <title> {{ $role_type }} | @yield('page_title') </title>


    @include('layouts.backend.partials.stylesheet')
</head>

<body>
    <div class="app side-nav-dark header-dark">
        <div class="layout">
            {{-- Side Nav --}}
            @include($side_nav)

            {{-- Page Container START --}}
            <div class="page-container">
                {{-- Top Nav --}}
                @include('layouts.backend.partials.topnav')

                {{-- Main Content --}}
                <div class="main-content">
                    @yield('main_content')
                </div>

                {{-- Footer --}}
                @include('layouts.backend.partials.footer')
            </div>
            {{-- Page Container END --}}
        </div>
    </div>

    {{-- Sweet Alert --}}
    @include('sweetalert::alert')

    @include('layouts.backend.partials.scripts')

</body>
</html>
