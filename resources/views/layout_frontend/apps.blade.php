<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Font Icons -->
    <link media="all" rel="stylesheet" href="{{ url('public/frontend/css/fonts/icomoon/icomoon.css') }}">
    <!--     <link media="all" rel="stylesheet" href="css/fonts/roxine-font-icon/roxine-font.css"> -->
    <link media="all" rel="stylesheet" href="{{ url('public/frontend/vendors/font-awesome/css/font-awesome.css') }}">
    <!-- Vendors -->
    <link media="all" rel="stylesheet" href="{{ url('public/frontend/vendors/owl-carousel/dist/assets/owl.carousel.min.css') }}">
    <link media="all" rel="stylesheet" href="{{ url('public/frontend/vendors/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
    <link media="all" rel="stylesheet" href="{{ url('public/frontend/vendors/animate/animate.css') }}">
    <link media="all" rel="stylesheet" href="{{ url('public/frontend/vendors/rateyo/jquery.rateyo.css') }}">
    <link media="all" rel="stylesheet" href="{{ url('public/frontend/vendors/bootstrap-datepicker/css/bootstrap-datepicker.css') }}">
    <link media="all" rel="stylesheet" href="{{ url('public/frontend/vendors/fancyBox/source/jquery.fancybox.css') }}">
    <link media="all" rel="stylesheet" href="{{ url('public/frontend/vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.css') }}">
    <!-- Bootstrap 4 -->
    <link media="all" rel="stylesheet" href="{{ url('public/frontend/css/bootstrap.css') }}">
    <!-- Rev Slider -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/vendors/rev-slider/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/vendors/rev-slider/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/vendors/rev-slider/revolution/css/navigation.css') }}">
    <!-- Theme CSS -->
    <link media="all" rel="stylesheet" href="{{ url('public/frontend/css/main.css') }}">
    <!-- Custom CSS -->
    <link media="all" rel="stylesheet" href="{{ url('public/frontend/css/custom.css') }}">
</head>
<body class="white-overlay">
    <div class="preloader" id="pageLoad">
        <div class="holder">
            <div class="coffee_cup"></div>
        </div>
    </div>

    @include('layout_frontend.navigasi')

    <div id="wrapper" class="no-overflow-x">
        <div class="page-wrapper">
            <!-- header of the page -->
            @include('layout_frontend.header')
            <!--/header of the page -->
            <main>
                @yield('content')
            </main>
        </div>
        <!-- footer of the pagse -->
        @include('layout_frontend.footer')
        <!--/footer of the page -->
    </div>

    <div class="search-form-wrapper overlay overlay-hugeinc">
        <button type="button" class="overlay-close"><span class="custom-icon-plus"></span></button>
        <div class="search-form">
            <form action="#" method="post">
                <div class="form-group">
                    <input type="search" class="form-control" placeholder="Enter Your Search">
                    <button type="submit"><span class="icon-search"></span></button>
                </div>
            </form>
        </div>
    </div>
    <a href="#" class="section-scroll" id="scroll-to-top"><i class="fa fa-angle-up"></i></a>
</body>
    <!-- jQuery Library -->
    <script src="{{ url('public/frontend/vendors/jquery/jquery-2.1.4.min.js') }}"></script>
    <!-- Vendor Scripts -->
    <script src="{{ url('public/frontend/vendors/tether/dist/js/tether.min.js') }}"></script>
    <script src="{{ url('public/frontend/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('public/frontend/vendors/stellar/jquery.stellar.min.js') }}"></script>
    <script src="{{ url('public/frontend/vendors/isotope/javascripts/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('public/frontend/vendors/isotope/javascripts/packery-mode.pkgd.js') }}"></script>
    <script src="{{ url('public/frontend/vendors/owl-carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ url('public/frontend/vendors/waypoint/waypoints.min.js') }}"></script>
    <script src="{{ url('public/frontend/vendors/counter-up/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('public/frontend/vendors/fancyBox/source/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ url('public/frontend/vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.js') }}"></script>
    <script src="{{ url('public/frontend/vendors/image-stretcher-master/image-stretcher.js') }}"></script>
    <script src="{{ url('public/frontend/vendors/wow/wow.min.js') }}"></script>
    <script src="{{ url('public/frontend/vendors/rateyo/jquery.rateyo.min.js') }}"></script>
    <script src="{{ url('public/frontend/vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ url('public/frontend/vendors/bootstrap-slider-master/src/js/bootstrap-slider.js') }}"></script>
    <script src="{{ url('public/frontend/vendors/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('public/frontend/js/mega-menu.js') }}"></script>
    <script src="{{ url('public/frontend/vendors/retina/retina.min.js') }}"></script>
    <!-- Custom Script -->
    <script src="{{ url('public/frontend/js/jquery.main.js') }}"></script>
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{ url('public/frontend/vendors/rev-slider/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/frontend/vendors/rev-slider/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="{{ url('public/frontend/vendors/rev-slider/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/frontend/vendors/rev-slider/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/frontend/vendors/rev-slider/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/frontend/vendors/rev-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/frontend/vendors/rev-slider/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/frontend/vendors/rev-slider/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/frontend/vendors/rev-slider/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/frontend/vendors/rev-slider/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/frontend/vendors/rev-slider/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <!-- SNOW ADD ON -->
    <script type="text/javascript" src="{{ 'public/frontend/vendors/rev-slider/revolution-addons/snow/revolution.addon.snow.min.js' }}"></script>
    <!-- Revolution Slider Script -->
    <script src="{{ 'public/frontend/js/revolution.js' }}"></script>
</html>