    
        
        <!-- ========== HEADER ========== -->
        <header id="header" class="u-header u-header-left-aligned-nav">
            <div class="u-header__section">
                <!-- Topbar -->
                <div class="u-header-topbar py-2 d-none d-xl-block">
                    <div class="container">
                        <div class="d-flex align-items-center">
                            <div class="topbar-left">
                                <a href="#" class="text-gray-110 font-size-13 u-header-topbar__nav-link">Welcome to Worldwide Electronics Store</a>
                            </div>
                            <div class="topbar-right ml-auto">
                                <ul class="list-inline mb-0">
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
                                            aria-expanded="false"
                                            data-unfold-event="click"
                                            data-unfold-hide-on-scroll="false"
                                            data-unfold-target="#sidebarContent"
                                            data-unfold-type="css-animation"
                                            data-unfold-animation-in="fadeInRight"
                                            data-unfold-animation-out="fadeOutRight"
                                            data-unfold-duration="500">
                                            <i class="ec ec-user mr-1"></i> Register <span class="text-gray-50">or</span> Sign in
                                        </a>
                                        <!-- End Account Sidebar Toggle Button -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Topbar -->

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
                                           <h2> GeekshopBD</h5> 
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
                                            <!-- Home -->
                                            <li class="nav-item hs-has-sub-menu u-header__nav-item"
                                                data-event="hover"
                                                data-animation-in="slideInUp"
                                                data-animation-out="fadeOut">
                                                <a id="HomeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="HomeSubMenu">Home</a>

                                                <!-- Home - Submenu -->
                                                <ul id="HomeSubMenu" class="hs-sub-menu u-header__sub-menu animated fadeOut" aria-labelledby="HomeMegaMenu" style="min-width: 230px; display: none;">
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="home/index.html">Home v1</a></li>
                                                </ul>
                                                <!-- End Home - Submenu -->
                                            </li>
                                            <!-- End Home -->

                                            <!-- Pages -->
                                            <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                data-event="hover"
                                                data-animation-in="slideInUp"
                                                data-animation-out="fadeOut">
                                                <a id="pagesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Pages</a>

                                                <!-- Home - Mega Menu -->
                                                <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="pagesMegaMenu">
                                                    <div class="row u-header__mega-menu-wrapper">
                                                        <div class="col-md-3">
                                                            <span class="u-header__sub-menu-title">Home & Static Pages</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="home/index.html" class="nav-link u-header__sub-menu-nav-link">Home v1</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="u-header__sub-menu-title">Shop Pages</span>
                                                            <ul class="u-header__sub-menu-nav-group mb-3">
                                                                <li><a href="shop-grid.html" class="nav-link u-header__sub-menu-nav-link">Shop Grid</a></li>
                                                            </ul>
                                                            <span class="u-header__sub-menu-title">Product Categories</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="product-categories-4-column-sidebar.html" class="nav-link u-header__sub-menu-nav-link">4 Column Sidebar</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="u-header__sub-menu-title">Single Product Pages</span>
                                                            <ul class="u-header__sub-menu-nav-group mb-3">
                                                                <li><a href="single-product-extended.html" class="nav-link u-header__sub-menu-nav-link">Single Product Extended</a></li>
                                                            </ul>
                                                            <span class="u-header__sub-menu-title">Ecommerce Pages</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="shop_listing.html" class="nav-link u-header__sub-menu-nav-link">Shop</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="u-header__sub-menu-title">Blog Pages</span>
                                                            <ul class="u-header__sub-menu-nav-group mb-3">
                                                                <li><a href="blog/blog-v1.html" class="nav-link u-header__sub-menu-nav-link">Blog v1</a></li>
                                                            </ul>
                                                            <span class="u-header__sub-menu-title">Shop Columns</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="shop-7-columns-full-width.html" class="nav-link u-header__sub-menu-nav-link">7 Column Full width</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Home - Mega Menu -->
                                            </li>
                                            <!-- End Pages -->

                                            <!-- Blog -->
                                            <li class="nav-item hs-has-sub-menu u-header__nav-item"
                                                data-event="hover"
                                                data-animation-in="slideInUp"
                                                data-animation-out="fadeOut">
                                                <a id="blogMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">Blog</a>

                                                <!-- Blog - Submenu -->
                                                <ul id="blogSubMenu" class="hs-sub-menu u-header__sub-menu" aria-labelledby="blogMegaMenu" style="min-width: 230px;">
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="blog/blog-v1.html">Blog v1</a></li>
                                                </ul>
                                                <!-- End Submenu -->
                                            </li>
                                            <!-- End Blog -->

                                            <!-- About us -->
                                            <li class="nav-item u-header__nav-item">
                                                <a class="nav-link u-header__nav-link" href="home/about.html">About us</a>
                                            </li>
                                            <!-- End About us -->

                                            <!-- FAQs -->
                                            <li class="nav-item u-header__nav-item">
                                                <a class="nav-link u-header__nav-link" href="home/faq.html">FAQs</a>
                                            </li>
                                            <!-- End FAQs -->

                                            <!-- Contact Us -->
                                            <li class="nav-item u-header__nav-item">
                                                <a class="nav-link u-header__nav-link" href="home/contact-v1.html">Contact Us</a>
                                            </li>
                                            <!-- End Contact Us -->
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
                                            <strong>Support</strong> <a href="tel:800856800604" class="text-gray-90">(+800) 856 800 604</a>
                                        </div>
                                        <div class="email">
                                            E-mail: <a href="mailto:info@electro.com?subject=Help Need" class="text-gray-90">info@electro.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Customer Care -->
                            <!-- Header Icons -->
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
                                        <li class="col d-none d-xl-block"><a href="compare.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Compare"><i class="font-size-22 ec ec-compare white-txt"></i></a></li>
                                        <li class="col d-none d-xl-block"><a href="wishlist.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Favorites"><i class="font-size-22 ec ec-favorites white-txt"></i></a></li>
                                        <li class="col d-xl-none px-2 px-sm-3"><a href="my-account.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="My Account"><i class="font-size-22 ec ec-user white-txt"></i></a></li>
                                        <li class="col pr-xl-0 px-2 px-sm-3">
                                            <a href="cart.html" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart">
                                                <i class="font-size-22 ec ec-shopping-bag  white-txt"></i>
                                                <span class="width-22 height-22 bg-dark position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12 text-white">2</span>
                                                <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3 white-txt">$1785.00</span>
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
                                                                    <div style="height: 600px;width: 1000px;overflow:auto ;" class="hs-mega-menu vmm-tfw u-header__sub-menu "  aria-labelledby="basicMegaMenu" >
                                                                        
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
                                                                                                <div class="">See All - {{ $category['category_name'] }}</div>
                                                                                                <div class="u-nav-subtext font-size-11 text-gray-30">Discover more products</div>
                                                                                            </a>
                                                                                    </li>
                                                                                </ul>
                                                                                
                                                                            </div>@endforeach
                                                                        </div>
                                                                        <div class="vmm-bg">
                                                                            <img class="img-fluid" src="{{ url('img/front_img/500X400/img4.png') }}" alt="Category Picture">
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
                                                <option value="two">Two</option>
                                                <option value="three">Three</option>
                                                <option value="four">Four</option>
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
                            <!-- Header Icons -->
                            <div class="col-md-auto align-self-center">
                                <div class="d-flex">
                                    <ul class="d-flex list-unstyled mb-0">
                                        <li class="col"><a href="compare.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Compare"><i class="font-size-22 ec ec-compare white-txt"></i></a></li>
                                        <li class="col"><a href="wishlist.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Favorites"><i class="font-size-22 ec ec-favorites white-txt"></i></a></li>
                                        <li class="col pr-0">
                                            <a href="cart.html" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart">
                                                <i class="font-size-22 ec ec-shopping-bag white-txt"></i>
                                                <span class="width-22 height-22 bg-dark position-absolute flex-content-center text-white rounded-circle left-12 top-8 font-weight-bold font-size-12">2</span>
                                                <span class="font-weight-bold font-size-16 text-gray-90 ml-3 white-txt">$1785.00</span>
                                            </a>
                                        </li>
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