<!-- Side Nav START -->
<div class="side-nav">
    <div class="side-nav-inner">
        <div class="side-nav-logo">
            <a href="{{ route('owner.dashboard.index') }}">
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
            <li class="nav-item {{ Request::is('owner') ? 'active' : '' }}">
                <a class="mrg-top-30" href="{{ route('owner.dashboard.index') }}">
                    <span class="icon-holder">
                            <i class="ti-home"></i>
                        </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            {{-- Bookings --}}
            <li class="nav-item dropdown {{ Request::is('owner/booking*') ? 'open' : '' }}">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="ti-pin-alt"></i>
                    </span>
                    <span class="title">Bookings</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('owner/booking/pending*') ? 'active' : '' }}">
                        <a href="{{ route('owner.booking.pending.index') }}">Pending</a>
                    </li>
                    <li class="{{ Request::is('owner/booking/ongoing*') ? 'active' : '' }}">
                        <a href="{{ route('owner.booking.ongoing.index') }}">Ongoing</a>
                    </li>
                    <li class="{{ Request::is('owner/booking/completed*') ? 'active' : '' }}">
                        <a href="{{ route('owner.booking.completed.index') }}">Completed</a>
                    </li>
                    <li class="{{ Request::is('owner/booking/canceled*') ? 'active' : '' }}">
                        <a href="{{ route('owner.booking.canceled.index') }}">Canceled</a>
                    </li>
                </ul>
            </li>

            {{-- Reviews --}}
            <li class="nav-item dropdown {{ Request::is('owner/review*') ? 'open' : '' }}">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="ti-star"></i>
                    </span>
                    <span class="title">Reviews</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('owner/review/all_review*') ? 'active' : '' }}">
                        <a href="{{ route('owner.review.all.index') }}">All Reviews</a>
                    </li>
                    <li class="{{ Request::is('owner/review/food*') ? 'active' : '' }}">
                        <a href="{{ route('owner.review.food.index') }}">Food</a>
                    </li>
                    <li class="{{ Request::is('owner/review/service*') ? 'active' : '' }}">
                        <a href="{{ route('owner.review.service.index') }}">Service</a>
                    </li>
                    <li class="{{ Request::is('owner/review/ambience*') ? 'active' : '' }}">
                        <a href="{{ route('owner.review.ambience.index') }}">Ambience</a>
                    </li>
                    <li class="{{ Request::is('owner/review/value*') ? 'active' : '' }}">
                        <a href="{{ route('owner.review.value.index') }}">Value</a>
                    </li>
                </ul>
            </li>

            {{-- Offers --}}
            <li class="nav-item dropdown {{ Request::is('owner/offer*') ? 'open' : '' }}">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="ti-shine"></i>
                    </span>
                    <span class="title">Offers</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('owner/offer/active*') ? 'active' : '' }}">
                        <a href="{{ route('owner.offer.active.index') }}">Active Offers</a>
                    </li>
                    <li class="{{ Request::is('owner/offer/inactive*') ? 'active' : '' }}">
                        <a href="{{ route('owner.offer.inactive.index') }}">Inactive Offers</a>
                    </li>
                    <li class="{{ Request::is('owner/offer/old*') ? 'active' : '' }}">
                        <a href="{{ route('owner.offer.old.index') }}">Old Offers</a>
                    </li>
                    <li class="{{ Request::is('owner/offer/new_offer*') ? 'active' : '' }}">
                        <a href="{{ route('owner.offer.create') }}">Publish New Offer</a>
                    </li>
                </ul>
            </li>

            {{-- Settings --}}
            <li class="nav-item dropdown {{ Request::is('owner/setting*') ? 'open' : '' }}">
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
                    <li class="{{ Request::is('owner/setting/restaurant*') ? 'active' : '' }}">
                        <a href="{{ route('owner.setting.restaurant.index') }}">Restaurant Info</a>
                    </li>
                    <li class="{{ Request::is('owner/setting/payment*') ? 'active' : '' }}">
                        <a href="{{ route('owner.setting.payment.index') }}">Payment Info</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- Side Nav END -->
