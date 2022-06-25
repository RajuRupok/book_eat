<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="HTML,CSS,JavaScript">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
        {{-- CSRF Token--}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @include('layouts.frontend.partials.stylesheet')
    </head>

    <body>
        @include('layouts.frontend.partials.topbar')

        @include('layouts.frontend.partials.navbar')

        <main class="main-body-section" id="mainBodySection">
            {{-- Main Content --}}
            <div class="main-content">
                @yield('main_content')

                @include('layouts.frontend.partials.subscribe')
            </div>
        </main>

        @include('layouts.frontend.partials.footer')

        @include('guest.modals.login')
        @include('guest.modals.signup')

        {{-- Sweet Alert --}}
        @include('sweetalert::alert')

        @include('layouts.frontend.partials.scripts')
    </body>
</html>
