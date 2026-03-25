<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{-- Dynamic SEO --}}
    <title>@yield('seo_title', config('app.name') . ' - Real Estate')</title>
    <meta name="description" content="@yield('seo_description', 'Find your dream property on ' . config('app.name'))">
    <meta name="keywords" content="@yield('seo_keywords', 'real estate, property, estate, prototype')">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/brand/favicon.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.png') }}" />


    <!-- Title -->
    <title>Login | Estateman</title>

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('assets/plugins/bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Dashboard Css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!-- Font-awesome Css -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />

    <!-- Font-awesome  Css -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />

    <!--Select2 Plugin -->
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />

    <!-- P-scroll bar css-->
    <link href="{{ asset('assets/plugins/pscrollbar/perfect-scrollbar.css') }}" rel="stylesheet" />

</head>

<body class="main-body error-image h-100">

    <!--Loader-->
    <div id="global-loader">
        <img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="">
    </div>

    @yield('content')
    <!-- JQuery js-->
    <script src="{{ asset('assets/js/vendors/jquery-3.6.0.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('assets/plugins/bootstrap-5/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-5/js/bootstrap.min.js') }}"></script>

    <!--JQuery RealEstaterkline Js-->
    <script src="{{ asset('assets/js/vendors/jquery.sparkline.min.js') }}"></script>

    <!-- Circle Progress Js-->
    <script src="{{ asset('assets/js/vendors/circle-progress.min.js') }}"></script>

    <!-- Star Rating Js-->
    <script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>

    <!--Owl Carousel js -->
    <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>

    <!--Horizontal Menu-->
    <script src="{{ asset('assets/plugins/horizontal-menu/horizontal.js') }}"></script>

    <!--JQuery TouchSwipe js-->
    <script src="{{ asset('assets/js/jquery.touchSwipe.min.js') }}"></script>

    <!--Select2 js -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>

    <!-- sticky Js-->
    <script src="{{ asset('assets/js/sticky.js') }}"></script>

    <!-- Cookie js -->
    <script src="{{ asset('assets/plugins/cookie/jquery.ihavecookies.js') }}"></script>
    <script src="{{ asset('assets/plugins/cookie/cookie.js') }}"></script>

    <!-- P-scroll bar Js-->
    <script src="{{ asset('assets/plugins/pscrollbar/perfect-scrollbar.js') }}"></script>

    <!-- Swipe Js-->
    <script src="{{ asset('assets/js/swipe.js') }}"></script>

    <!-- Scripts Js-->
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>

    <!-- themecolor Js-->
    <script src="{{ asset('assets/js/themeColors.js') }}"></script>

    <!-- Custom Js-->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Custom-switcher Js-->
    <script src="{{ asset('assets/js/custom-switcher.js') }}"></script>
</body>

</html>
