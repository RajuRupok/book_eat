<!-- Side Nav START -->
<div class="side-nav">
    <div class="side-nav-inner">
        <div class="side-nav-logo">
            <a href="{{ route('admin.dashboard.index') }}">
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
            <li class="nav-item {{ Request::is('auth/admin') ? 'active' : '' }}">
                <a class="mrg-top-30" href="{{ route('admin.dashboard.index') }}">
                    <span class="icon-holder">
                            <i class="ti-home"></i>
                        </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            {{-- Restaurant Owners --}}
            <li class="nav-item dropdown {{ Request::is('auth/admin/owners*') ? 'open' : '' }}">
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
                    <li class="{{ Request::is('auth/admin/owners/active*') ? 'active' : '' }}">
                        <a href="{{ route('admin.owners.active') }}">Active Owners</a>
                    </li>
                    <li class="{{ Request::is('auth/admin/owners/inactive*') ? 'active' : '' }}">
                        <a href="{{ route('admin.owners.inactive') }}">Inactive Owners</a>
                    </li>
                </ul>
            </li>

            {{-- Restaurants --}}
            <li class="nav-item dropdown {{ Request::is('auth/admin/restaurants*') ? 'open' : '' }}">
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
                    <li class="{{ Request::is('auth/admin/restaurants/active*') ? 'active' : '' }}">
                        <a href="{{ route('admin.restaurants.active') }}">Active Restaurants</a>
                    </li>
                    <li class="{{ Request::is('auth/admin/restaurants/inactive*') ? 'active' : '' }}">
                        <a href="{{ route('admin.restaurants.inactive') }}">Inactive Restaurants</a>
                    </li>
                    <li class="{{ Request::is('auth/admin/restaurants/categories*') ? 'active' : '' }}">
                        <a href="{{ route('admin.restaurants.categories') }}">Restaurant Categories</a>
                    </li>
                </ul>
            </li>

            {{-- Customers --}}
            <li class="nav-item dropdown {{ Request::is('auth/admin/customers*') ? 'open' : '' }}">
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
                    <li class="{{ Request::is('auth/admin/customers/active*') ? 'active' : '' }}">
                        <a href="{{ route('admin.customers.active') }}">Active Customers</a>
                    </li>
                    <li class="{{ Request::is('auth/admin/customers/inactive*') ? 'active' : '' }}">
                        <a href="{{ route('admin.customers.inactive') }}">Inactive Customers</a>
                    </li>
                </ul>
            </li>

            {{-- Managers --}}
            <li class="nav-item dropdown {{ Request::is('auth/admin/managers*') ? 'open' : '' }}">
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
                    <li class="{{ Request::is('auth/admin/managers/active*') ? 'active' : '' }}">
                        <a href="{{ route('admin.managers.active') }}">Active Managers</a>
                    </li>
                    <li class="{{ Request::is('auth/admin/managers/inactive*') ? 'active' : '' }}">
                        <a href="{{ route('admin.managers.inactive') }}">Inactive Managers</a>
                    </li>
                </ul>
            </li>

            {{-- Settings --}}
            <li class="nav-item dropdown {{ Request::is('auth/admin/settings*') ? 'open' : '' }}">
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
                    <li class="{{ Request::is('auth/admin/settings/create_manager*') ? 'active' : '' }}">
                        <a href="{{ route('admin.settings.manager.create') }}">New Manager</a>
                    </li>
                    <li class="{{ Request::is('auth/admin/settings/create_restaurent_category*') ? 'active' : '' }}">
                        <a href="{{ route('admin.settings.category.create') }}">New Restaurant Category</a>
                    </li>
                    {{-- <li class="{{ Request::is('auth/admin/settings/create_manager*') ? 'active' : '' }}">
                        <a href="#">System Settings</a>
                    </li> --}}
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- Side Nav END -->
