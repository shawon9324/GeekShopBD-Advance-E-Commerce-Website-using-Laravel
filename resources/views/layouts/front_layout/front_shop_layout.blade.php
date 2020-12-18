<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        <title>Single Product Fullwidth | Electro - Responsive Website Template</title>

        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.png">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="{{ url('vendor/front_vendor/font-awesome/css/fontawesome-all.min.css')}} ">
        <link rel="stylesheet" href="{{ url('css/front_css/font-electro.css')}} ">
        <link rel="stylesheet" href="{{ url('vendor/front_vendor/animate.css/animate.min.css')}} ">
        <link rel="stylesheet" href="{{ url('vendor/front_vendor/hs-megamenu/src/hs.megamenu.css')}} ">
        <link rel="stylesheet" href="{{ url('vendor/front_vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}} ">
        <link rel="stylesheet" href="{{ url('vendor/front_vendor/fancybox/jquery.fancybox.css')}} ">
        <link rel="stylesheet" href="{{ url('vendor/front_vendor/slick-carousel/slick/slick.css')}} ">
        <link rel="stylesheet" href="{{ url('vendor/front_vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}} ">
        {{-- Sweet Alert --}}
        <link rel="stylesheet" href="{{ url('sweetalert2/bootstrap-4.min.css')}} "/>

        {{-- Listing Page --}}
        <link rel="stylesheet" href="{{ url('vendor/front_vendor/ion-rangeslider/css/ion.rangeSlider.css')}} ">

        <!-- CSS Electro Template -->
        <link rel="stylesheet" href="{{ url('css/front_css/theme.css')}} ">
        {{-- CSRF TOKEN PASS --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
    </head>

    <body>

        @include('layouts.front_layout.front__shop_header')
        @include('sweetalert::alert')
        @yield('content')
        @include('layouts.front_layout.front_footer')
        @include('layouts.front_layout.login_registration_siderbar')

        <!-- Go to Top -->
        <a class="js-go-to u-go-to" href="#"
            data-position='{"bottom": 15, "right": 15 }'
            data-type="fixed"
            data-offset-top="400"
            data-compensation="#header"
            data-show-effect="slideInUp"
            data-hide-effect="slideOutDown">
            <span class="fas fa-arrow-up u-go-to__inner"></span>
        </a>
        <!-- End Go to Top -->
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <!-- JS Global Compulsory -->
        {{-- <script src="{{ url('vendor/front_vendor/jquery/dist/jquery.min.js')}} "></script> --}}
        <script src="{{ url('vendor/front_vendor/jquery-migrate/dist/jquery-migrate.min.js')}} "></script>
        <script src="{{ url('vendor/front_vendor/popper.js/dist/umd/popper.min.js')}} "></script>
        <script src="{{ url('vendor/front_vendor/bootstrap/bootstrap.min.js')}} "></script>

        <!-- JS Implementing Plugins -->
        <script src="{{ url('vendor/front_vendor/appear.js')}} "></script>
        <script src="{{ url('vendor/front_vendor/jquery.countdown.min.js')}} "></script>
        <script src="{{ url('vendor/front_vendor/hs-megamenu/src/hs.megamenu.js')}} "></script>
        <script src="{{ url('vendor/front_vendor/svg-injector/dist/svg-injector.min.js')}} "></script>
        <script src="{{ url('vendor/front_vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}} "></script>
        <script src="{{ url('vendor/front_vendor/jquery-validation/dist/jquery.validate.min.js')}} "></script>
        <script src="{{ url('vendor/front_vendor/fancybox/jquery.fancybox.min.js')}} "></script>
         {{-- JS listing page START--}}
         <script src="{{ url('vendor/front_vendor/ion-rangeslider/js/ion.rangeSlider.min.js')}} "></script>
          {{-- End --}}
        <script src="{{ url('vendor/front_vendor/typed.js/lib/typed.min.js')}} "></script>
        <script src="{{ url('vendor/front_vendor/slick-carousel/slick/slick.js')}} "></script>
        <script src="{{ url('vendor/front_vendor/appear.js')}} "></script>
        <script src="{{ url('vendor/front_vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}} "></script>
        {{-- JS FORM VALIDATOR--}}
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
        {{-- FRONT CUSTOM JS SCRIPT --}}
        <script src="{{ url('js/front_js/front_script_custom.js ')}} "></script>

        <!-- JS THEME -->
        <script src="{{ url('js/front_js/hs.core.js ')}} "></script>
        <script src="{{ url('js/front_js/components/hs.countdown.js ')}} "></script>
        <script src="{{ url('js/front_js/components/hs.header.js ')}} "></script>
        <script src="{{ url('js/front_js/components/hs.hamburgers.js ')}} "></script>
        <script src="{{ url('js/front_js/components/hs.unfold.js ')}} "></script>
        <script src="{{ url('js/front_js/components/hs.focus-state.js ')}} "></script>
        <script src="{{ url('js/front_js/components/hs.malihu-scrollbar.js ')}} "></script>
        <script src="{{ url('js/front_js/components/hs.validation.js ')}} "></script>
        <script src="{{ url('js/front_js/components/hs.fancybox.js ')}} "></script>
        <script src="{{ url('js/front_js/components/hs.onscroll-animation.js ')}} "></script>
        <script src="{{ url('js/front_js/components/hs.slick-carousel.js ')}} "></script>
         {{-- JS Listing Page START --}}
        <script src="{{ url('js/front_js/components/hs.quantity-counter.js ')}} "></script>
        <script src="{{ url('js/front_js/components/hs.range-slider.js ')}} "></script>
        {{-- End --}}
        <script src="{{ url('js/front_js/components/hs.show-animation.js ')}} "></script>
        <script src="{{ url('js/front_js/components/hs.svg-injector.js ')}} "></script>
        <script src="{{ url('js/front_js/components/hs.scroll-nav.js ')}} "></script>
        <script src="{{ url('js/front_js/components/hs.go-to.js ')}} "></script>
        <script src="{{ url('js/front_js/components/hs.selectpicker.js ')}} "></script>
       
        {{-- Sweet Alert --}}
        <script src="{{ url('sweetalert2/sweetalert2.min.js')}} "></script>
        <!-- JS Plugins Init. -LISTING -->
        <script>
            $(window).on('load', function () {
                // initialization of HSMegaMenu component
                $('.js-mega-menu').HSMegaMenu({
                    event: 'hover',
                    direction: 'horizontal',
                    pageContainer: $('.container'),
                    breakpoint: 767.98,
                    hideTimeOut: 0
                });
            });

            $(document).on('ready', function () {
                // initialization of header
                $.HSCore.components.HSHeader.init($('#header'));

                // initialization of animation
                $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                    afterOpen: function () {
                        $(this).find('input[type="search"]').focus();
                    }
                });

                // initialization of HSScrollNav component
                $.HSCore.components.HSScrollNav.init($('.js-scroll-nav'), {
                  duration: 700
                });

                // initialization of quantity counter
                $.HSCore.components.HSQantityCounter.init('.js-quantity');

                // initialization of popups
                $.HSCore.components.HSFancyBox.init('.js-fancybox');

                // initialization of countdowns
                var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
                    yearsElSelector: '.js-cd-years',
                    monthsElSelector: '.js-cd-months',
                    daysElSelector: '.js-cd-days',
                    hoursElSelector: '.js-cd-hours',
                    minutesElSelector: '.js-cd-minutes',
                    secondsElSelector: '.js-cd-seconds'
                });

                // initialization of malihu scrollbar
                $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

                // initialization of forms
                $.HSCore.components.HSFocusState.init();

                // initialization of form validation
                $.HSCore.components.HSValidation.init('.js-validate', {
                    rules: {
                        confirmPassword: {
                            equalTo: '#signupPassword'
                        }
                    }
                });

                // initialization of forms
                $.HSCore.components.HSRangeSlider.init('.js-range-slider');

                // initialization of show animations
                $.HSCore.components.HSShowAnimation.init('.js-animation-link');

                // initialization of fancybox
                $.HSCore.components.HSFancyBox.init('.js-fancybox');

                // initialization of slick carousel
                $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

                // initialization of go to
                $.HSCore.components.HSGoTo.init('.js-go-to');

                // initialization of hamburgers
                $.HSCore.components.HSHamburgers.init('#hamburgerTrigger');

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                    beforeClose: function () {
                        $('#hamburgerTrigger').removeClass('is-active');
                    },
                    afterClose: function() {
                        $('#headerSidebarList .collapse.show').collapse('hide');
                    }
                });

                $('#headerSidebarList [data-toggle="collapse"]').on('click', function (e) {
                    e.preventDefault();

                    var target = $(this).data('target');

                    if($(this).attr('aria-expanded') === "true") {
                        $(target).collapse('hide');
                    } else {
                        $(target).collapse('show');
                    }
                });

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

                // initialization of select picker
                $.HSCore.components.HSSelectPicker.init('.js-select');
            });
        </script>
         


        


    </body>
</html>
