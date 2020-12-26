<?php
use App\Product;
use App\Section;
use App\Cart;
$sections = Section::sections();
$cartItems = Cart::userCartItems();
?>    
        <!-- ========== HEADER ========== -->
        <header id="header" class="u-header u-header-left-aligned-nav">
            <div class="u-header__section">
               @include('layouts.front_layout.front_topbar')
                <!-- Logo and Menu -->
                <div class="py-2 py-xl-4 bg-primary-down-lg">
                    <div class="container my-0dot5 my-xl-0">
                        <div class="row align-items-center">
                            <!-- Logo-offcanvas-menu -->
                            <div class="col-auto">
                                <!-- Nav -->
                                <nav class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
                                    <!-- Logo -->
                                    <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="{{url('/')}}" aria-label="Geekshopbd">
                                        <svg version="1.1" x="0px" y="0px" width="175.748px" height="42.52px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52" style="margin-bottom: 0;">
                                           <h4 style="color: black"> GeekshopBD</h4> 
                                        </svg>
                                    </a>
                                    <!-- End Logo -->

                                    <!-- Fullscreen Toggle Button -->
                                    <button id="sidebarHeaderInvokerMenu" type="button" class="navbar-toggler d-block btn u-hamburger mr-3 mr-xl-0"
                                        aria-controls="sidebarHeader"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        data-unfold-event="click"
                                        data-unfold-hide-on-scroll="false"
                                        data-unfold-target="#sidebarHeader1"
                                        data-unfold-type="css-animation"
                                        data-unfold-animation-in="fadeInLeft"
                                        data-unfold-animation-out="fadeOutLeft"
                                        data-unfold-duration="500">
                                        <span id="hamburgerTriggerMenu" class="u-hamburger__box">
                                            <span class="u-hamburger__inner"></span>
                                        </span>
                                    </button>
                                    <!-- End Fullscreen Toggle Button -->
                                </nav>
                                <!-- End Nav -->

                                <!-- ========== HEADER SIDEBAR ========== -->
                                @include('layouts.front_layout.front_header_sidebar')
                                <!-- ========== END HEADER SIDEBAR ========== -->
                            </div>
                            <!-- End Logo-offcanvas-menu -->
                            <!-- Primary Menu -->
                            <div class="col d-none d-xl-block">
                                <!-- Nav -->
                                <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
                                    <!-- Navigation -->
                                    <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                        <ul class="navbar-nav u-header__navbar-nav">
                                            <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                            data-event="click"
                                            data-animation-in="slideInUp"
                                            data-animation-out="fadeOut"
                                            data-position="left">
                                            <a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle text-sale" href="javascript:;" aria-haspopup="true" aria-expanded="false">Desktop</a>
                                            <!-- Desktop - Mega Menu -->
                                            <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="homeMegaMenu">
                                                <div class="row u-header__mega-menu-wrapper">
                                                        @foreach ($sections as $section)
                                                        @if($section['id'] == 1)
                                                        @foreach ($section['categories'] as $category)
                                                        <div class="col-md-3">
                                                        <span class="u-header__sub-menu-title">{{$category['category_name']}}</span>
                                                        <ul class="u-header__sub-menu-nav-group">
                                                            @foreach ($category['subcategories'] as $subcategory)
                                                            <li><a href="/{{ $subcategory['url'] }}" class="nav-link u-header__sub-menu-nav-link">{{ $subcategory['category_name'] }}</a></li>
                                                            @endforeach
                                                            <li> <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="/{{ $category['url'] }}">
                                                                <div class="">{{ $category['category_name'] }}</div></a><li>
                                                        </ul>
                                                        </div>
                                                        @endforeach
                                                        @endif
                                                        @endforeach
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Desktop -->
                                        <!-- LAPTOP -->
                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                            data-event="click"
                                            data-animation-in="slideInUp"
                                            data-animation-out="fadeOut"
                                            data-position="left">
                                            <a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle text-sale" href="javascript:;" aria-haspopup="true" aria-expanded="false">Laptop</a>
                                            <!-- LAPTOP - Mega Menu -->
                                            <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="homeMegaMenu">
                                                <div class="row u-header__mega-menu-wrapper">
                                                        @foreach ($sections as $section)
                                                        @if($section['id'] == 2)
                                                        @foreach ($section['categories'] as $category)
                                                        <div class="col-md-3">
                                                        <span class="u-header__sub-menu-title">{{$category['category_name']}}</span>
                                                        <ul class="u-header__sub-menu-nav-group">
                                                            @foreach ($category['subcategories'] as $subcategory)
                                                            <li><a href="/{{ $subcategory['url'] }}" class="nav-link u-header__sub-menu-nav-link">{{ $subcategory['category_name'] }}</a></li>
                                                            @endforeach
                                                            <li> <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="/{{ $category['url'] }}">
                                                                <div class="">{{ $category['category_name'] }}</div></a><li>
                                                        </ul>
                                                        </div>
                                                        @endforeach
                                                        @endif
                                                        @endforeach
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End LAPTOP -->
                                        <!-- Accessories -->
                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                            data-event="click"
                                            data-animation-in="slideInUp"
                                            data-animation-out="fadeOut"
                                            data-position="left">
                                            <a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle text-sale" href="javascript:;" aria-haspopup="true" aria-expanded="false">Accessories</a>
                                            <!-- LAPTOP - Mega Menu -->
                                            <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="homeMegaMenu">
                                                <div class="row u-header__mega-menu-wrapper">
                                                    <div class="col-md-6">
                                                    <span class="u-header__sub-menu-title">Accessories</span>
                                                        @foreach ($sections as $section)
                                                        @if($section['id'] == 5)
                                                        @foreach ($section['categories'] as $category)
                                                        <ul class="u-header__sub-menu-nav-group">
                                                            @foreach ($category['subcategories'] as $subcategory)
                                                            <li><a href="/{{ $subcategory['url'] }}" class="nav-link u-header__sub-menu-nav-link">{{ $subcategory['category_name'] }}</a></li>
                                                            @endforeach
                                                            <li> <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="/{{ $category['url'] }}">
                                                                <div class="">{{ $category['category_name'] }}</div></a><li>
                                                        </ul>
                                                        @endforeach
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Accessories -->
                                        <!-- Gadget -->
                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                            data-event="click"
                                            data-animation-in="slideInUp"
                                            data-animation-out="fadeOut"
                                            data-position="left">
                                            <a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle text-sale" href="javascript:;" aria-haspopup="true" aria-expanded="false">Gadgets</a>
                                            <!-- LAPTOP - Mega Menu -->
                                            <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="homeMegaMenu">
                                                <div class="row u-header__mega-menu-wrapper">
                                                    <div class="col-md-6">
                                                    <span class="u-header__sub-menu-title">Gadgets & Gear</span>
                                                        @foreach ($sections as $section)
                                                        @if($section['id'] == 6)
                                                        @foreach ($section['categories'] as $category)
                                                        <ul class="u-header__sub-menu-nav-group">
                                                            @foreach ($category['subcategories'] as $subcategory)
                                                            <li><a href="/{{ $subcategory['url'] }}" class="nav-link u-header__sub-menu-nav-link">{{ $subcategory['category_name'] }}</a></li>
                                                            @endforeach
                                                            <li> <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="/{{ $category['url'] }}">
                                                                <div class="">{{ $category['category_name'] }}</div></a><li>
                                                        </ul>
                                                        @endforeach
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Gadget -->

                                        <!-- About us -->
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link" href="{{url('/about-us')}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">About us</a>
                                        </li>
                                        <!-- End About us -->

                                        <!-- FAQs -->
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link" href="{{url('/faqs')}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">FAQs</a>
                                        </li>
                                        <!-- End FAQs -->

                                        <!-- Contact Us-->
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link" href="{{url('/contact-us')}}" aria-haspopup="true" aria-expanded="false">Contact Us</a>
                                        </li>
                                        <!-- End Contact Us-->
                                        <!-- Store Directory-->
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link" href="{{url('/store-directory')}}" aria-haspopup="true" aria-expanded="false">Store Directory</a>
                                        </li>
                                        <!-- End Store Directory-->
                                        </ul>
                                    </div>
                                    <!-- End Navigation -->
                                </nav>
                                <!-- End Nav -->
                            </div>
                            <!-- End Primary Menu -->
                            <!-- Customer Care -->
                            <div class="d-none d-xl-block col-md-auto">
                                <div class="d-flex">
                                    <i class="ec ec-support font-size-50 text-primary"></i>
                                    <div class="ml-2">
                                        <div class="phone">
                                            <strong>Support</strong> <a href="tel:800856800604" class="text-gray-90">(+880) 1774339279</a>
                                        </div>
                                        <div class="email">
                                            E-mail: <a href="mailto:info@geekshopbd.com?subject=Help Need" class="text-gray-90">info@geekshopbd.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Customer Care -->
                            <!-- Header Icons MOBILE DEVICE-->
                            <div class="d-xl-none col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                                <div class="d-inline-flex">
                                    <ul class="d-flex list-unstyled mb-0 align-items-center">
                                        <!-- Search -->
                                        <li class="col d-xl-none px-2 px-sm-3 position-static">
                                            <a id="searchClassicInvoker" class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary" href="javascript:;" role="button"
                                                data-toggle="tooltip"
                                                data-placement="top"
                                                title="Search"
                                                aria-controls="searchClassic"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                                data-unfold-target="#searchClassic"
                                                data-unfold-type="css-animation"
                                                data-unfold-duration="300"
                                                data-unfold-delay="300"
                                                data-unfold-hide-on-scroll="true"
                                                data-unfold-animation-in="slideInUp"
                                                data-unfold-animation-out="fadeOut">
                                                <span class="ec ec-search white-txt"></span>
                                            </a>

                                            <!-- Input -->
                                            <div id="searchClassic" class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2" aria-labelledby="searchClassicInvoker">
                                                <form class="js-focus-state input-group px-3">
                                                    <input class="form-control" type="search" placeholder="Search Product">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary px-3" type="button"><i class="font-size-18 ec ec-search white-txt"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- End Input -->
                                        </li>
                                        <!-- End Search -->
                                        <!-- My Account -->
                                        <li class="col d-xl-none px-2 px-sm-3 position-static">
                                            <a id="UserPanelInvoker" class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary" href="javascript:;" role="button"
                                                data-toggle="tooltip"
                                                data-placement="top"
                                                title="My Account"
                                                aria-controls="user-panel"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                                data-unfold-target="#user-panel"
                                                data-unfold-type="css-animation"
                                                data-unfold-duration="300"
                                                data-unfold-delay="300"
                                                data-unfold-hide-on-scroll="true"
                                                data-unfold-animation-in="slideInUp"
                                                data-unfold-animation-out="fadeOut">
                                                <span class="ec ec-user white-txt"></span>
                                            </a>

                                            <div id="user-panel" class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2" aria-labelledby="UserPanelInvoker">
                                                @if(Auth::check())
                                                <a href="{{url('/my-account')}}" class="dropdown-item"><i class="fas fa-user fa-sm fa-fw mr-2 "></i>My Account</a> 
                                                <div class="dropdown-divider"></div>
                                                <a href="/user-logout" class="dropdown-item"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
                                                @else
                                                <a href="{{url('/login-register')}}" class="dropdown-item"><i class="fas fa-sign-in-alt mr-2"></i>  Register/Login</a> 
                                                @endif
                                            </div>
                                        </li>
                                         <!-- My Account -->
                                        <li class="col d-none d-xl-block"><a href="{{ url('/compare') }}" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Compare"><i class="font-size-22 ec ec-compare white-txt"></i></a></li>
                                        <li class="col d-none d-xl-block"><a href="{{ url('/my-wishlist') }}" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Favorites"><i class="font-size-22 ec ec-favorites white-txt"></i></a></li>
                                        <li class="col pr-xl-0 px-2 px-sm-3">
                                            <a href="{{url('/shopping-cart')}}" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart">
                                                <i class="font-size-22 ec ec-shopping-bag  white-txt"></i>
                                                <span class="width-22 height-22 bg-dark position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12 text-white">{{ count($cartItems)}}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Header Icons -->
                        </div>
                    </div>
                </div>
                <!-- End Logo and Menu -->

                <!-- Vertical-and-Search-Bar -->
                <div class="d-none d-xl-block bg-primary">
                    <div class="container">
                        <div class="row align-items-stretch min-height-50">
                            <!-- Vertical Menu -->
                            <div class="col-md-auto d-none d-xl-flex align-items-end">
                                <div class="max-width-270 min-width-270">
                                    <!-- Basics Accordion -->
                                    <div id="basicsAccordion">
                                        <!-- Card -->
                                        <div class="card border-0 rounded-0">
                                            <div class="card-header bg-primary rounded-0 card-collapse border-0" id="basicsHeadingOne">
                                                <button type="button" class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90"
                                                    data-toggle="collapse"
                                                    data-target="#basicsCollapseOne"
                                                    aria-expanded="true"
                                                    aria-controls="basicsCollapseOne">
                                                    <span class="pl-1 text-gray-90 white-txt font-size-16">Shop By Categories</span>
                                                    <span class="text-gray-90 ml-3">
                                                        <span class="ec ec-arrow-down-search white-txt"></span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div id="basicsCollapseOne" class="collapse vertical-menu v1"
                                                aria-labelledby="basicsHeadingOne"
                                                data-parent="#basicsAccordion">
                                                <div class="card-body p-0">
                                                    <nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
                                                        <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                                            <ul class="navbar-nav u-header__navbar-nav border-primary border-top-0">
                                                                    <!-- Nav Item MegaMenu -->
                                                                @foreach ($sections as $section)
                                                                
                                                                <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                                    data-event="hover"
                                                                    data-animation-in="slideInUp"
                                                                    data-animation-out="fadeOut"
                                                                    data-position="left">
                                                                    <a id="basicMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">{{ $section['name'] }}</a>

                                                                    <!-- Nav Item - Mega Menu -->
                                                                    <div style="border-radius:50px 50px 50px 50px;height: 600px;width: 1000px;overflow:auto ;" class="hs-mega-menu vmm-tfw u-header__sub-menu "  aria-labelledby="basicMegaMenu" >
                                                                        
                                                                        <div class="row u-header__mega-menu-wrapper">
                                                                            
                                                                                @foreach ($section['categories'] as $category)
                                                                                <div class="col mb-3 mb-sm-0">
                                                                                <span class="u-header__sub-menu-title">{{ $category['category_name'] }}</span>
                                                                                <ul class="u-header__sub-menu-nav-group mb-3">
                                                                                    @foreach ($category['subcategories'] as $subcategory)
                                                                                    <li>
                                                                                        <a class="nav-link u-header__sub-menu-nav-link" href="/{{ $subcategory['url'] }}">{{ $subcategory['category_name'] }}</a>
                                                                                    </li>
                                                                                    @endforeach
                                                                                    <li>
                                                                                        
                                                                                            <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="/{{ $category['url'] }}">
                                                                                                <div class="">{{ $category['category_name'] }}</div>
                                                                                                <div class="u-nav-subtext font-size-11 text-gray-30">All products</div>
                                                                                            </a>
                                                                                    </li>
                                                                                </ul>
                                                                                
                                                                            </div>@endforeach
                                                                        </div>
                                                                    </div>
                                                                    <!-- End Nav Item - Mega Menu -->
                                                                </li>
                                                                <!-- End Nav Item MegaMenu-->
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Card -->
                                    </div>
                                    <!-- End Basics Accordion -->
                                </div>
                            </div>
                            <!-- End Vertical Menu -->
                            <!-- Search bar -->
                            <div class="col align-self-center">
                                <!-- Search-Form -->
                                <form class="js-focus-state">
                                    <label class="sr-only" for="searchProduct">Search</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control py-2 pl-5 font-size-15 border-0 height-40 rounded-left-pill" name="email" id="searchProduct" placeholder="Search for Products" aria-label="Search for Products" aria-describedby="searchProduct1" required>
                                        <div class="input-group-append">
                                            <!-- Select -->
                                            <select class="js-select selectpicker dropdown-select custom-search-categories-select"
                                                data-style="btn height-40 text-gray-60 font-weight-normal border-0 rounded-0 bg-white px-5 py-2">
                                                <option value="one" selected>All Categories</option>
                                                @foreach($sections as $section)
								                @foreach($section['categories'] as $category)
                                                <option value="{{ $category['category_name'] }}">{{ $category['category_name'] }}</option>
                                                @endforeach
								                @endforeach
                                            </select>
                                            <!-- End Select -->
                                            <button class="btn btn-dark height-40 py-2 px-3 rounded-right-pill" type="button" id="searchProduct1">
                                                <span class="ec ec-search font-size-24 white-txt"></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Search-Form -->
                            </div>
                            <!-- End Search bar -->
                            <!-- MINI SHOPPING CART -->
                            <div class="col-md-auto align-self-center">
                                <div class="d-flex">
                                    <ul class="d-flex list-unstyled mb-0">
                                        <li class="col-md-1"><a href="{{ url('/compare') }}" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Compare"><i class="font-size-22 ec ec-compare white-txt"></i></a></li>
                                        <li class="col-md-1"><a href="{{ url('/my-wishlist') }}" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Favorites"><i class="font-size-22 ec ec-favorites white-txt"></i></a></li>
                                            @include('front.products.shopping_mini_cart')
                                        </ul>
                                    </div>
                                </div>
                            
                            <!-- End Header Icons -->
                        </div>
                    </div>
                </div>
                <!-- End Vertical-and-secondary-menu -->
            </div>
        </header>
        <!-- ========== END HEADER ========== -->