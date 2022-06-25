<!--All JavaScript Plugin-->
<script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/fontawesome-all.js') }}"></script>
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.nicescroll.min.js') }}"></script>

@yield('script_links')


<!-- main.js -->
<script src="{{ asset('frontend/js/main.js') }}"></script>
{{-- Side Navbar Small Device --}}
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>


{{-- Custom JS --}}
<script src="{{ asset('frontend/js/script.js') }}"></script>

@yield('custom_script')
