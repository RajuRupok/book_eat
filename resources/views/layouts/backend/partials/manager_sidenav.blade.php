<!-- Side Nav START -->
<div class="side-nav">
    <div class="side-nav-inner">
        <div class="side-nav-logo">
            <a href="{{ route('manager.dashboard.index') }}">
            <div class="logo logo-dark" style="background-image: url('{{ asset('assets/images/logo/logo.png') }}')"></div>
                <div class="logo logo-white" style="background-image: url('{{ asset('assets/images/logo/logo-white.png') }}')"></div>
            </a>
            <div class="mobile-toggle side-nav-toggle">
                <a href="#">
                    <i class="ti-arrow-circle-left"></i>
                </a>
            </div>
        </div>
        <ul class="side-nav-menu scrollable">
            {{-- Dashboard --}}
            <li class="nav-item active">
                <a class="mrg-top-30" href="{{ route('manager.dashboard.index') }}">
                    <span class="icon-holder">
                            <i class="ti-home"></i>
                        </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            {{-- Restaurant Owners --}}
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="ei-aircraft"></i>
                    </span>
                    <span class="title">Restaurant Owners</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">Active Owners</a>
                    </li>
                    <li>
                        <a href="#">Inactive Owners</a>
                    </li>
                </ul>
            </li>

            {{-- Restaurants --}}
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="ti-bag"></i>
                    </span>
                    <span class="title">Restaurants</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">Active Restaurants</a>
                    </li>
                    <li>
                        <a href="#">Inactive Restaurants</a>
                    </li>
                    <li>
                        <a href="#">Restaurant Categories</a>
                    </li>
                </ul>
            </li>

            {{-- Customers --}}
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="ti-user"></i>
                    </span>
                    <span class="title">Customers</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">Active Customers</a>
                    </li>
                    <li>
                        <a href="#">Inactive Customers</a>
                    </li>
                </ul>
            </li>

            {{-- Managers --}}
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fa fa-user-secret"></i>
                    </span>
                    <span class="title">Managers</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">Active Managers</a>
                    </li>
                    <li>
                        <a href="#">Inactive Managers</a>
                    </li>
                </ul>
            </li>

            {{-- Settings --}}
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="ti-settings"></i>
                    </span>
                    <span class="title">Settings</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">New Manager</a>
                    </li>
                    <li>
                        <a href="#">New Restaurant Category</a>
                    </li>
                    <li>
                        <a href="#">System Settings</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- Side Nav END -->
