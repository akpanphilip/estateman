<!doctype html>

<html class="no-js" lang="en">

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta
        content="Reallist- Bootstrap Responsive Real estate Classifieds, Dealer, Rentel, Builder and Agent Multipurpose HTML Template"
        name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords"
        content="html template, real estate websites, real estate, property websites, premium html templates, real estate company website, bootstrap real estate template, real estate marketplace html template, listing website template, property listing html template, real estate bootstrap template, real estate html5 template, real estate listing template, property template, property dealer website" />

    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

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

    <!-- P-scroll bar css -->
    <link href="{{ asset('assets/plugins/pscrollbar/perfect-scrollbar.css') }}" rel="stylesheet" />

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

    @include('section.footer')

    @stack('scripts')

</body>

</html>
