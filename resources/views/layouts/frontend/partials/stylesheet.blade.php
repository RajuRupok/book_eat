{{--  Page Title  --}}
<title> WeBookEat | @yield('page_title') </title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" />

<!-- plugins css -->
<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-grid.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-reboot.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">

<!-- fontawesome.min.css -->
<link rel="stylesheet" href="{{ asset('frontend/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">

@yield('css_links')

<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}" />

<link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}" />
@yield('custom_css')
