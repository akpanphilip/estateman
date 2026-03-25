<!doctype html>

<html class="no-js" lang="en">

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{-- Dynamic SEO --}}
    <title>@yield('seo_title', config('app.name') . ' - Real Estate')</title>
    <meta name="description" content="@yield('seo_description', 'Find your dream property on ' . config('app.name'))">
    <meta name="keywords" content="@yield('seo_keywords', 'real estate, property, estate, prototype')">

    {{-- Open Graph (Facebook & WhatsApp preview) --}}
    <meta property="og:title" content="@yield('seo_title', config('app.name'))">
    <meta property="og:description" content="@yield('seo_description', 'Find your dream property')">
    <meta property="og:image" content="@yield('seo_image', asset('assets/images/brand/logo.png'))">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ config('app.name') }}">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('seo_title', config('app.name'))">
    <meta name="twitter:description" content="@yield('seo_description', 'Find your dream property')">
    <meta name="twitter:image" content="@yield('seo_image', asset('assets/images/brand/logo.png'))">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/brand/favicon.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.png') }}" />

    <!-- Title -->
    <title>Estateman</title>
    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('assets/plugins/bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Dashboard Css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!-- Font-awesome Css -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />

    <!-- Select2 Plugin -->
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />

    <!-- Date Picker Plugin -->
    <link href="{{ asset('assets/plugins/date-picker/spectrum.css') }}" rel="stylesheet" />

    <!-- Owl Theme css -->
    <link href="{{ asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />

    <!-- jquery ui RangeSlider -->
    <link href="{{ asset('assets/plugins/jquery-uislider/jquery-ui.css') }}" rel="stylesheet">

    <!-- P-scroll bar css -->
    <link href="{{ asset('assets/plugins/pscrollbar/perfect-scrollbar.css') }}" rel="stylesheet" />
    
    
    @stack('styles')
</head>

<body class="main-body">

    <!--Loader-->
    <div id="global-loader">
        <img src="../assets/images/loader.svg" class="loader-img" alt="">
    </div>

    @include('section.topbar')

    @yield('content')


    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>

    <section>
        <div class="cover-image sptb bg-background-color" data-bs-image-src="../assets/images/banners/banner4.jpg">
            <div class="content-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h2 class="mb-2 display-5">Let’s Help You Own Genuine Property in Nigeria</h2>
                        <h6>Whether you’re looking to buy land, invest in housing, or develop an estate, Estateman Ltd
                            is
                            your trusted partner on the ground. We’ll ensure you never lose a kobo to fraud or
                            misinformation.</h6>

                        <h6>
                            Contact us today and let’s help you invest confidently in Nigeria — from wherever you are in
                            the
                            world.
                        </h6>
                        <div class="mt-5">
                            <a href="" class="btn btn-secondary  btn-lg">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('section.footer')

    @stack('scripts')

</body>

</html>
