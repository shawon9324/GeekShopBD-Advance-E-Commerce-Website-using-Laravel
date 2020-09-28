<!-- ========== HEADER SIDEBAR ========== -->
<aside id="sidebarHeader1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarHeaderInvoker">
    <div class="u-sidebar__scroller">
        <div class="u-sidebar__container">
            <div class="u-header-sidebar__footer-offset">
                <!-- Toggle Button -->
                <div class="position-absolute top-0 right-0 z-index-2 pt-4 pr-4 bg-white">
                    <button type="button" class="close ml-auto"
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
                        <span aria-hidden="true"><i class="ec ec-close-remove text-gray-90 font-size-20"></i></span>
                    </button>
                </div>
                <!-- End Toggle Button -->

                <!-- Content -->
                <div class="js-scrollbar u-sidebar__body">
                    <div id="headerSidebarContent" class="u-sidebar__content u-header-sidebar__content">
                        <!-- Logo -->
                        <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center mb-3" href="index.html" aria-label="GeekShopBD">
                            <svg version="1.1" x="0px" y="0px" width="175.748px" height="42.52px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52" style="margin-bottom: 0;">
                                <ellipse class="ellipse-bg" fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341" rx="5.32" ry="5.367"></ellipse>
                                <h1>GeekshopBD</h1>
                            </svg>
                        </a>
                        <!-- End Logo -->
                            {{-- SIDERBAR-NAV --}}
                        
                        <!-- List -->
                        <ul id="headerSidebarList" class="u-header-collapse__nav">
                            <!-- Computers & Accessories -->
                            <?php $i=0; ?>
                            @foreach ($sections as $section)
                            <?php $name =  "sidebar".$i; ?>
                                <li class="u-has-submenu u-header-collapse__submenu">
                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#{{ $name }}" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="{{ $name }}">
                                    {{ $section['name'] }}
                                    </a>
                                    <div id="{{ $name }}" class="collapse" data-parent="#headerSidebarContent">
                                        <ul class="u-header-collapse__nav-list">
                                            @foreach ($section['categories'] as $category)
                                                <li><span class="u-header-sidebar__sub-menu-title">{{ $category['category_name'] }}</span></li>
                                            @foreach ($category['subcategories'] as $subcategory)
                                                <li class=""><a class="u-header-collapse__submenu-nav-link" href="/{{ $subcategory['url'] }}">{{ $subcategory['category_name'] }}</a></li>
                                            @endforeach
                                                <li class=""><a class="u-header-collapse__submenu-nav-link" href="/{{ $category['url'] }}">All-{{ $category['category_name'] }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                            <?php $i++; ?>
                            @endforeach
                            <!-- End Computers & Accessories -->
                        </ul>

                        {{-- SIDERBAR-NAV --}}




                        <!-- End List -->
                    </div>
                </div>
                <!-- End Content -->
            </div>
            <!-- Footer -->
            <footer id="SVGwaveWithDots" class="svg-preloader u-header-sidebar__footer">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item pr-3">
                        <a class="u-header-sidebar__footer-link text-gray-90" href="#">Privacy</a>
                    </li>
                    <li class="list-inline-item pr-3">
                        <a class="u-header-sidebar__footer-link text-gray-90" href="#">Terms</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="u-header-sidebar__footer-link text-gray-90" href="#">
                            <i class="fas fa-info-circle"></i>
                        </a>
                    </li>
                </ul>

                <!-- SVG Background Shape -->
                <div class="position-absolute right-0 bottom-0 left-0 z-index-n1">
                    <img class="js-svg-injector" src="{{ url('svg/components/wave-bottom-with-dots.svg') }}" alt="Image Description"
                    data-parent="#SVGwaveWithDots">
                </div>
                <!-- End SVG Background Shape -->
            </footer>
            <!-- End Footer -->
        </div>
    </div>
</aside>
<!-- ========== END HEADER SIDEBAR ========== -->