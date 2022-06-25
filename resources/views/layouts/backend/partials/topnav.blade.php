<div class="header navbar">
    <div class="header-container">
        <ul class="nav-left">
            <li>
                <a class="side-nav-toggle" href="javascript:void(0);">
                    <i class="ti-view-grid"></i>
                </a>
            </li>
            {{-- <li class="search-box">
                <a class="search-toggle no-pdd-right" href="javascript:void(0);">
                    <i class="search-icon ti-search pdd-right-10"></i>
                    <i class="search-icon-close ti-close pdd-right-10"></i>
                </a>
            </li>
            <li class="search-input">
                <input class="form-control" type="text" placeholder="Search...">
                <div class="advanced-search">
                    <div class="search-wrapper">
                        <div class="pdd-vertical-10">
                            <span class="display-block mrg-vertical-5 pdd-horizon-20 text-gray">
                                    <i class="ti-user pdd-right-5"></i>
                                    <span>People</span>
                            </span>
                            <ul class="list-unstyled list-info">
                                <li>
                                    <a href="#">
                                        <img class="thumb-img" src="assets/images/avatars/thumb-1.jpg" alt="">
                                        <div class="info">
                                            <span class="title">Jordan Hurst</span>
                                            <span class="sub-title">
                                                    <i class="ti-location-pin"></i>
                                                    <span>44 Shirley Ave. West Chicago</span>
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="thumb-img" src="assets/images/avatars/thumb-5.jpg" alt="">
                                        <div class="info">
                                            <span class="title">Jennifer Watkins</span>
                                            <span class="sub-title">
                                                    <i class="ti-location-pin"></i>
                                                    <span>514 S. Magnolia St. Orlando</span>
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="thumb-img" src="assets/images/avatars/thumb-4.jpg" alt="">
                                        <div class="info">
                                            <span class="title">Michael Birch</span>
                                            <span class="sub-title">
                                                    <i class="ti-location-pin"></i>
                                                    <span>70 Bowman St. South Windsor</span>
                                            </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mrg-horizon-20 border top"></div>
                        <div class="pdd-vertical-10">
                            <span class="display-block mrg-vertical-5 pdd-horizon-20 text-gray">
                                    <i class="ti-rss pdd-right-5"></i>
                                    <span>Post</span>
                            </span>
                            <ul class="list-unstyled list-info">
                                <li>
                                    <a href="#">
                                        <img class="thumb-img" src="assets/images/img-1.jpg" alt="">
                                        <div class="info">
                                            <span class="title">Artoo expresses his relief</span>
                                            <span class="sub-title">
                                                    <span>Oh, thank goodness we're coming out...</span>
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="thumb-img" src="assets/images/img-2.jpg" alt="">
                                        <div class="info">
                                            <span class="title">Ready for some power?</span>
                                            <span class="sub-title">
                                                    <span>Lord Vader. You may take Caption So...</span>
                                            </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="search-footer">
                        <span>You are Searching for '<b class="text-dark"><span class="serach-text-bind"></span></b>'</span>
                    </div>
                </div>
            </li> --}}
        </ul>
        <ul class="nav-right">
            <li class="user-profile dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    @if (auth()->user()->avatar != null)
                        <img class="profile-img img-fluid" src="{{ Auth::user()->avatar }}" alt="">
                    @else
                        <img class="profile-img img-fluid" src="{{ asset('assets/images/user.jpg') }}" alt="">
                    @endif
                    <div class="user-info">
                        <span class="name pdd-right-5">{{ Auth::user()->name }}</span>
                        <i class="ti-angle-down font-size-10"></i>
                    </div>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">
                            <i class="ti-user pdd-right-10"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ti-settings pdd-right-10"></i>
                            <span>Setting</span>
                        </a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="ti-power-off pdd-right-10"></i>
                            <span>Logout</span>
                        </a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </li>
        </ul>
    </div>
</div>
