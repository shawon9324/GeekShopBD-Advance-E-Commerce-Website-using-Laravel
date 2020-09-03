<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $page_name }} | GeekShopBD.com</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="GeekShopBD Computer Shop Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('css/front_css/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ url('plugins/front_plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css"
        href="{{ url('plugins/front_plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('plugins/front_plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('plugins/front_plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('plugins/front_plugins/slick-1.8.0/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/front_css/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/front_css/responsive.css') }}">

    @if (isset($page_name) && $page_name == 'Products')


        <link rel="stylesheet" type="text/css"
            href="{{ url('plugins/front_plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ url('css/front_css/shop_styles.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ url('css/front_css/shop_responsive.css') }}">


    @endif



</head>

<body>

    <div class="super_container">
        @include('layouts.front_layout.front_header')
        @yield('content')
        @include('layouts.front_layout.front_footer')
    </div>

    <script src="{{ url('js/front_js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('css/front_css/bootstrap4/popper.js') }}"></script>
    <script src="{{ url('css/front_css/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ url('plugins/front_plugins/greensock/TweenMax.min.js') }}"></script>
    <script src="{{ url('plugins/front_plugins/greensock/TimelineMax.min.js') }}"></script>
    <script src="{{ url('plugins/front_plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script src="{{ url('plugins/front_plugins/greensock/animation.gsap.min.js') }}"></script>
    <script src="{{ url('plugins/front_plugins/greensock/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ url('plugins/front_plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ url('plugins/front_plugins/slick-1.8.0/slick.js') }}"></script>
    <script src="{{ url('plugins/front_plugins/easing/easing.js') }}"></script>
    <script src="{{ url('js/front_js/custom.js') }}"></script>

    <script src="{{ url('plugins/front_plugins/Isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('plugins/front_plugins/jquery-ui-1.12.1.custom/jquery-ui.js') }}"></script>
    <script src="{{ url('plugins/front_plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="{{ url('js/front_js/shop_custom.js') }}"></script>

</body>

</html>
