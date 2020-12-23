<?php
use App\Section;
$sections = Section::sections();
?> 
        <!-- ========== HEADER ========== -->
        <header id="header" class="u-header u-header-left-aligned-nav">
        <div class="u-header__section">
                <!-- Topbar -->
                @include('layouts.front_layout.front_topbar')
                <!-- End Topbar -->

                <!-- Logo-Search-header-icons -->
                <div class="py-2 py-xl-5 bg-primary-down-lg">
                    <div class="container my-0dot5 my-xl-0">
                        <div class="row align-items-center">
                            <!-- Logo-offcanvas-menu -->
                            <div class="col-auto">
                                <!-- Nav -->
                                <nav class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
                                    <!-- Logo -->
                                    <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="{{url('/')}}" aria-label="Geekshopbd">
                                        <svg version="1.1" x="0px" y="0px" width="175.748px" height="42.52px" viewBox="0 0 175.748 42.52"  style="margin-bottom: 0;">
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
                                @include('layouts.front_layout.front_header_sidebar')
                                
                            </div>
                            <!-- End Logo-offcanvas-menu -->
                            <!-- Search Bar -->
                            <div class="col d-none d-xl-block">
                                <form class="js-focus-state">
                                    <label class="sr-only" for="searchproduct">Search</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control py-2 pl-5 font-size-15 border-right-0 height-40 border-width-2 rounded-left-pill border-primary" name="email" id="searchproduct-item" placeholder="Search for Products" aria-label="Search for Products" aria-describedby="searchProduct1" required>
                                        <div class="input-group-append">
                                            <!-- Select -->
                                            <select class="js-select selectpicker dropdown-select custom-search-categories-select"
                                                data-style="btn height-40 text-gray-60 font-weight-normal border-top border-bottom border-left-0 rounded-0 border-primary border-width-2 pl-0 pr-5 py-2">
                                                <option value="one" selected>All Categories</option>
                                                @foreach($sections as $section)
								                @foreach($section['categories'] as $category)
                                                <option value="{{ $category['category_name'] }}">{{ $category['category_name'] }}</option>
                                                @endforeach
								                @endforeach
                                            </select>
                                            <!-- End Select -->
                                            <button class="btn btn-primary height-40 py-2 px-3 rounded-right-pill" type="button" id="searchProduct1">
                                                <span class="ec ec-search font-size-24"></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Search Bar -->
                            <!-- Header Icons -->
                            <div class="col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
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
                                                <span class="ec ec-search"></span>
                                            </a>

                                            <!-- Input -->
                                            <div id="searchClassic" class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2" aria-labelledby="searchClassicInvoker">
                                                <form class="js-focus-state input-group px-3">
                                                    <input class="form-control" type="search" placeholder="Search Product">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary px-3" type="button"><i class="font-size-18 ec ec-search"></i></button>
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
                                                <span class="ec ec-user"></span>
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


                                        <li class="col d-none d-xl-block"><a href="compare.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Compare"><i class="font-size-22 ec ec-compare"></i></a></li>
                                        <li class="col d-none d-xl-block"><a href="wishlist.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Favorites"><i class="font-size-22 ec ec-favorites"></i></a></li>
                                        <li class="col pr-xl-0 px-2 px-sm-3 d-xl-none">
                                            <a href="{{url('/shopping-cart')}}" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart">
                                                <i class="font-size-22 ec ec-shopping-bag"></i>
                                                <span class="bg-lg-down-black width-22 height-22 bg-primary position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12 white-txt">2</span>
                                                <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3">$1785.00</span>
                                            </a>
                                        </li>
                                        <li class="col pr-xl-0 px-2 px-sm-3 d-none d-xl-block">
                                            <div id="basicDropdownHoverInvoker" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart"
                                                aria-controls="basicDropdownHover"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                                data-unfold-event="hover"
                                                data-unfold-target="#basicDropdownHover"
                                                data-unfold-type="css-animation"
                                                data-unfold-duration="300"
                                                data-unfold-delay="300"
                                                data-unfold-hide-on-scroll="true"
                                                data-unfold-animation-in="slideInUp"
                                                data-unfold-animation-out="fadeOut">
                                                <i class="font-size-22 ec ec-shopping-bag"></i>
                                                <span class="bg-lg-down-black width-22 height-22 bg-primary position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12 white-txt">2</span>
                                                <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3">$1785.00</span>
                                            </div>
                                            <div id="basicDropdownHover" class="cart-dropdown dropdown-menu dropdown-unfold border-top border-top-primary mt-3 border-width-2 border-left-0 border-right-0 border-bottom-0 left-auto right-0" aria-labelledby="basicDropdownHoverInvoker">
                                                <ul class="list-unstyled px-3 pt-3">
                                                    <li class="border-bottom pb-3 mb-3">
                                                        <div class="">
                                                            <ul class="list-unstyled row mx-n2">
                                                                <li class="px-2 col-auto">
                                                                    <img class="img-fluid" src="{{ url('img/front_img/75X75/img1.jpg') }}" alt="Image Description">
                                                                </li>
                                                                <li class="px-2 col">
                                                                    <h5 class="text-blue font-size-14 font-weight-bold">Ultra Wireless S50 Headphones S50 with Bluetooth</h5>
                                                                    <span class="font-size-14">1 × $1,100.00</span>
                                                                </li>
                                                                <li class="px-2 col-auto">
                                                                    <a href="#" class="text-gray-90"><i class="ec ec-close-remove"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="border-bottom pb-3 mb-3">
                                                        <div class="">
                                                            <ul class="list-unstyled row mx-n2">
                                                                <li class="px-2 col-auto">
                                                                    <img class="img-fluid" src="{{ url('img/front_img/75X75/img2.jpg') }}" alt="Image Description">
                                                                </li>
                                                                <li class="px-2 col">
                                                                    <h5 class="text-blue font-size-14 font-weight-bold">Widescreen NX Mini F1 SMART NX</h5>
                                                                    <span class="font-size-14">1 × $685.00</span>
                                                                </li>
                                                                <li class="px-2 col-auto">
                                                                    <a href="#" class="text-gray-90"><i class="ec ec-close-remove"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="flex-center-between px-4 pt-2">
                                                    <a href="{{url('/shopping-cart')}}" class="btn btn-soft-secondary mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">View cart</a>
                                                    <a href="checkout.html" class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5">Checkout</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Header Icons -->
                        </div>
                    </div>
                </div>
                <!-- End Logo-Search-header-icons -->








                
                <!-- Vertical-and-secondary-menu -->
                <div class="d-none d-xl-block container">
                    <div class="row">
                        <!-- Vertical Menu -->
                        <div class="col-md-auto d-none d-xl-block">
                            <div class="max-width-270 min-width-270">
                                <!-- Basics Accordion -->
                                <div id="basicsAccordion">
                                    <!-- Card -->
                                    <div class="card border-0 ">
                                        <div class="card-header card-collapse border-0" id="basicsHeadingOne">
                                            <button type="button" class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90"
                                                data-toggle="collapse"
                                                data-target="#basicsCollapseOne"
                                                aria-expanded="true"
                                                aria-controls="basicsCollapseOne">
                                                <span class="ml-0 text-gray-90 mr-2">
                                                    <span class="fa fa-list-ul white-txt"></span>
                                                </span>
                                                <span class="pl-1 white-txt font-size-17">All Sections</span>
                                            </button>
                                        </div>
                                        <div id="basicsCollapseOne" class="collapse show vertical-menu v1"
                                            aria-labelledby="basicsHeadingOne"
                                            data-parent="#basicsAccordion">
                                            <div class="card-body p-0">
                                                <nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
                                                    <div style="border-radius:0 0 15px 15px; " id="navBar" class="navbar-nav u-header__navbar-nav border-primary border-top-0">
                                                        <ul class="navbar-nav u-header__navbar-nav">
                                                            @foreach ($sections as $section)
                                                                @if(count($section['categories']) > 0)
                                                                    <!-- Nav Item MegaMenu -->
                                                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                                        data-event="hover"
                                                                        data-animation-in="slideInUp"
                                                                        data-animation-out="fadeOut"
                                                                        data-position="left">
                                                                        <a id="basicMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">{{ $section['name'] }}</a>
                                                                        <!--SECTION- Nav Item - Mega Menu -->
                                                                        <div style="border-radius:50px 50px 50px 50px; height: 600px;width: 1000px;overflow:auto ;" class="hs-mega-menu vmm-tfw u-header__sub-menu "  aria-labelledby="basicMegaMenu" >
                                                                        
                                                                            <div class="row u-header__mega-menu-wrapper">
                                                                                
                                                                                    @foreach ($section['categories'] as $category)
                                                                                    <div class="col mb-3 mb-sm-0">
                                                                                    <span class="u-header__sub-menu-title">{{ $category['category_name'] }}</span>
                                                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                                                        @foreach ($category['subcategories'] as $subcategory)
                                                                                        <li>
                                                                                            <a class="nav-link u-header__sub-menu-nav-link" href="{{ url('/'.$subcategory['url'])}}">{{ $subcategory['category_name'] }}</a>
                                                                                        </li>
                                                                                        @endforeach
                                                                                        <li>
                                                                                            
                                                                                                <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="{{ url('/'.$category['url'])}}">
                                                                                                    <div class="">{{ $category['category_name'] }}</div>
                                                                                                    <div class="u-nav-subtext font-size-11 text-gray-30">All products</div>                                                                                                </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                    
                                                                                </div>@endforeach
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <!-- End Nav Item - Mega Menu -->
                                                                    </li>
                                                                    <!--End SECTION Nav Item MegaMenu -->
                                                                @endif
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
                        <!-- Secondary Menu -->
                        <div class="col">
                            <!-- Nav -->
                            <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
                                <!-- Navigation -->
                                <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                    <ul class="navbar-nav u-header__navbar-nav">
                                        <!-- Home -->
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
                                        
                                        <!-- FAQs -->
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link" href="{{url('/faqs')}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">FAQs</a>
                                        </li>
                                        <!-- End FAQs -->
                                        <!-- About us -->
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link" href="{{url('/about-us')}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">About us</a>
                                        </li>
                                        <!-- End About us -->
                                        <!-- Contact Us-->
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link" href="{{url('/contact-us')}}" aria-haspopup="true" aria-expanded="false">Contact Us</a>
                                        </li>
                                        <!-- End Contact Us-->
                                        <!-- Terms and Conditions-->
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link" href="{{url('/terms-conditions')}}" aria-haspopup="true" aria-expanded="false">Terms and Conditions</a>
                                        </li>
                                        <!-- End Terms and Conditions-->
                                        <!-- Store Directory-->
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link" href="{{url('/store-directory')}}" aria-haspopup="true" aria-expanded="false">Store Directory</a>
                                        </li>
                                        <!-- End Store Directory-->

                                        <!-- Button -->
                                        {{-- <li class="nav-item u-header__nav-last-item">
                                            <a class="text-gray-90" href="#" target="_blank">
                                                Free Delevering on Orders ৳ 499+
                                            </a>
                                        </li> --}}
                                        <!-- End Button -->
                                    </ul>
                                </div>
                                <!-- End Navigation -->
                            </nav>
                            <!-- End Nav -->
                        </div>
                        <!-- End Secondary Menu -->
                    </div>
                </div>
                <!-- End Vertical-and-secondary-menu -->
            </div>
        </header>
        <!-- ========== END HEADER ========== -->