 <!-- Topbar -->
 <div class="u-header-topbar py-2 d-none d-xl-block">
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="topbar-left">
                <a href="#" class="text-gray-110 font-size-13 u-header-topbar__nav-link">Welcome to our Computer & Electronics store</a>
            </div>
            <div class="topbar-right ml-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                        <a href="" class="u-header-topbar__nav-link">Free Delevering on Orders ৳ 499+</a>
                    </li>
                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                        <a href="#" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i> Store Locator</a>
                    </li>
                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                        <a href="track-your-order.html" class="u-header-topbar__nav-link"><i class="ec ec-transport mr-1"></i> Track Your Order</a>
                    </li>
                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border u-header-topbar__nav-item-no-border u-header-topbar__nav-item-border-single">
                        <div class="d-flex align-items-center">
                            <!-- Language -->
                            <div class="position-relative">
                                <a id="languageDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center u-header-topbar__nav-link font-weight-normal" href="javascript:;" role="button"
                                    aria-controls="languageDropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-unfold-event="hover"
                                    data-unfold-target="#languageDropdown"
                                    data-unfold-type="css-animation"
                                    data-unfold-duration="300"
                                    data-unfold-delay="300"
                                    data-unfold-hide-on-scroll="true"
                                    data-unfold-animation-in="slideInUp"
                                    data-unfold-animation-out="fadeOut">
                                    <span class="d-inline-block d-sm-none">US</span>
                                    <span class="d-none d-sm-inline-flex align-items-center"><i class="ec ec-dollar mr-1"></i> Dollar (US)</span>
                                </a>

                                <div id="languageDropdown" class="dropdown-menu dropdown-unfold" aria-labelledby="languageDropdownInvoker">
                                    <a class="dropdown-item active" href="#">English</a>
                                    <a class="dropdown-item" href="#">Deutsch</a>
                                    <a class="dropdown-item" href="#">Español‎</a>
                                </div>
                            </div>
                            <!-- End Language -->
                        </div>
                    </li>
                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                        <!-- Account Sidebar Toggle Button -->
                        <a id="sidebarNavToggler" href="javascript:;" role="button" class="u-header-topbar__nav-link"
                            aria-controls="sidebarContent"
                            aria-haspopup="true"
                            aria-expanded="true"
                            data-unfold-event="click"
                            data-unfold-hide-on-scroll="false"
                            data-unfold-target="#sidebarContent"
                            data-unfold-type="css-animation"
                            data-unfold-animation-in="fadeInRight"
                            data-unfold-animation-out="fadeOutRight"
                            data-unfold-duration="500">
                            @if(Auth::check())
                            <a href="/my-account"> <i class="ec ec-user mr-1"></i>{{Auth::user()->name}}'s Account </a>  <a href="/user-logout"><span class="text-gray-50">(Logout)</span></a>
                            @else
                            <a href="{{url('/login-register')}}"><i class="ec ec-user mr-1"></i> Register or Sign in</a>
                            @endif
                        </a>
                        <!-- End Account Sidebar Toggle Button -->
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Topbar -->