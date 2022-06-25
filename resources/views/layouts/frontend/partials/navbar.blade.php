<!--=============================================== Start Navbar ================================================-->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-4 col-lg-9">
                <div class="primary_menu">
                    <nav>
                        <ul>
                            <li><a href="{{ route('homepage') }}" class="navbar-menu {{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                            <li><a href="{{ route('guest.offer.index') }}" class="navbar-menu {{ Request::is('offer*') ? 'active' : '' }}">All Offer</a></li>
                            <li><a href="restaurant_details.php">Restaurant Type <span><i class="fas fa-chevron-down"></i></span></a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </nav>
                </div>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <ul>
                        <li><a href="{{ route('homepage') }}" class="navbar-menu {{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{ route('guest.offer.index') }}" class="navbar-menu {{ Request::is('offer*') ? 'active' : '' }}"All Offer</a></li>
                        <li><a href="restaurant_details.php">Restaurant Type <span><i class="fas fa-chevron-down"></i></span></a></li>
                        <li><a href="">Location</a></li>
                    </ul>
                </div>
                <span id="sidebarmenu" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            </div>
            <div class="col-8 col-lg-3 text-right">
                <div class="faq float-right">
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#" class="f1">Need help?</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!--=============================================== Start Navbar ================================================-->
