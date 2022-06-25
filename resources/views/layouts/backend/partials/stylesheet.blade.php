<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" />

<!-- plugins css -->
<link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendors/PACE/themes/blue/pace-theme-minimal.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" />

<!-- page plugins css -->
{{-- <link rel="stylesheet" href="{{ asset('assets/vendors/bower-jvectormap/jquery-jvectormap-1.2.2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendors/nvd3/build/nv.d3.min.css') }}" /> --}}

<!-- core css -->
<link rel="stylesheet" href="{{ asset('assets/css/ei-icon.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />

@yield('css_links')

<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />

{{-- Confirmation Alert --}}
<link rel="stylesheet" href="{{ asset('assets/css/confirmation_alert/jquery-confirmv3.3.2.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />

@yield('custom_css')
