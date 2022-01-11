<!doctype html >
<html  dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>edit</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/front-end/js/app.js') }}" defer></script>
    <script src="{{ asset('theme/js/app.js') }}" defer></script>
    <script src="{{ asset('theme/css/app.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/aso.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/bootstrap-datepicker.min.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/jquery-migrate-3.0.1.min.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/jquery-ui.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/jquery.animateNumber.min.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/jquery.countdown.min.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/jquery.easing.1.3.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/jquery.fancybox.min.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/jquery.magnific-popup.min.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/jquery.stellar.min.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/jquery.sticky.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/jquery.waypoints.min.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/main.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/mediaelement-and-player.min.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/slick.min.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/typed.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/chat.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/custom.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/dashboard1.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/dashboard2.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/dashboard3.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/dashboard4.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/dashboard5.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/dashboard6.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/flot-data.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/footable-init.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/jasny-bootstrap copy.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/jasny-bootstrap.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/jquery.PrintArea.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/jquery.slimscroll.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/jsgrid-init.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/mask.init.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/morris-data.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/perfect-scrollbar.min.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/sidebarmenu.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/toastr.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/validation.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/validator.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/waves.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/widget-charts.js') }}" defer></script>
    <script src="{{ asset('assets/front-end/js/forset/js/widget-data.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/front-end/fonts/icomoon/style.css">
    <link rel="stylesheet" href="assets/front-end/fonts/brand/style.css">

    <!-- Styles -->
    <link href="{{ asset('assets/front-end/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front-end/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front-end/css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front-end/css/bootstrap-datepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front-end/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front-end/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front-end/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front-end/css/mediaelementplayer.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front-end/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front-end/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front-end/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front-end/css/forset/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front-end/css/forset/css/material.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front-end/css/forset/css/spinners.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front-end/css/forset/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front-end/css/forset/css/icons/themify-icons/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front-end/css/forset/css/icons/simple-line-icons/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front-end/css/forset/css/icons/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
    <div id="app">
        


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
