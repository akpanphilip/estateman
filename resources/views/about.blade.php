@extends('layouts.app')
@section('content')
    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3 sptb-2" data-bs-image-src="../assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h1 class="">About Us</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->

    <!--section-->
    <section class="sptb">
        <div class="container">
            <div class="text-justify">
                <h2 class="mb-4">Why Estateman Ltd?</h2>
                <h4 class="leading-normal">Estateman Ltd – Trusted Real Estate Solutions for Nigerians in the Diaspora</h4>
                <p class="leading-normal">Estateman Ltd is a proudly Nigerian real estate marketing and property management
                    company built on trust, transparency, and reliability. Our mission is simple — to make real estate
                    investment in Nigeria safe, stress-free, and rewarding for Nigerians living abroad.</p>
                <p class="leading-normal mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    With a deep understanding of the risks and challenges that come with investing in property from afar, we
                    provide a secure bridge between our clients in the diaspora and genuine real estate opportunities in
                    Nigeria. We are not just real estate marketers; we are your eyes, ears, and hands on the ground.</p>
            </div>
        </div>
    </section>
    <!--/section-->

    <!--How to work-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Core Services</h2>
                {{-- <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p> --}}
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="service-card text-center">
                                <div class="bg-purple-transparent icon-bg icon-service text-purple">
                                    <i class="fa fa-shopping-cart "></i>
                                </div>
                                <div class="servic-data mt-4">
                                    <h4 class="font-weight-semibold mb-2">Property Verification <br> & Due Diligence</h4>
                                    <p class="text-muted">At Estateman Ltd, we verify every property to ensure your
                                        investment is 100% genuine and legally secure.
                                    </p>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="service-card text-center">
                                <div class="bg-warning-transparent icon-bg icon-service text-warning">
                                    <i class="fa fa-eye"></i>
                                </div>
                                <div class="servic-data mt-4">
                                    <h4 class="font-weight-semibold mb-2">Indemnified Transactions <br> for Your Peace of
                                        Mind
                                    </h4>
                                    <p class="text-muted">
                                        Every transaction is backed by our indemnity, giving you full confidence and peace
                                        of mind.

                                    </p>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="service-card text-center">
                                <div class="bg-secondary-transparent icon-bg icon-service">
                                    <i class="fa fa-credit-card"></i>
                                </div>
                                <div class="servic-data mt-4">
                                    <h4 class="font-weight-semibold mb-2">Property Management <br> While You're Away</h4>
                                    <p class="text-muted">
                                        We manage your property fully, ensuring it stays protected, well-maintained, and
                                        income-generating.
                                    </p>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--/How to work-->

    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Why Nigerians in the Diaspora Trust Us</h2>
                {{-- <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p> --}}
            </div>

            <div id="defaultCarousel" class="owl-carousel Card-owlcarousel owl-carousel-icons">

                <div class="item">
                    <div class="card mb-0">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-success  mb-3">
                                    <i class="fa fa-university  text-white"></i>
                                </div>
                                <h4>Zero Tolerance for Fraud</h4>
                                <p>
                                    We only deal with verified estates and certified
                                    developers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-primary mb-3">
                                    <i class="fa fa-pencil-square-o  text-white"></i>
                                </div>
                                <h4>Full Transparency</h4>
                                <p>You get real-time updates, photos, video inspections,
                                    and document reviews </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card mb-0">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-secondary mb-3">
                                    <i class="fa fa-handshake-o  text-white"></i>
                                </div>
                                <h4>Professional Team</h4>
                                <p>
                                    We work with lawyers, surveyors, town planners, and
                                    property consultants.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card mb-0">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-warning mb-3">
                                    <i class="fa fa-cubes   text-white"></i>
                                </div>
                                <h4>Client-Centered Approach</h4>
                                <p>
                                    We treat every transaction like it’s our own, with integrity, care, and unwavering
                                    attention to detail.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row ">
                <div class="col-sm-6 col-lg-4 features">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-success  mb-3">
                                    <i class="fa fa-university  text-white"></i>
                                </div>
                                <h3>Zero Tolerance for Fraud</h3>
                                <p>
                                    We only deal with verified estates and certified
                                    developers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 features">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-primary mb-3">
                                    <i class="fa fa-pencil-square-o  text-white"></i>
                                </div>
                                <h3>Full Transparency</h3>
                                <p>You get real-time updates, photos, video inspections,
                                    and document reviews </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 features">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-secondary mb-3">
                                    <i class="fa fa-handshake-o  text-white"></i>
                                </div>
                                <h3>Professional Team</h3>
                                <p>
                                    We work with lawyers, surveyors, town planners, and
                                    property consultants.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 features">
                    <div class="card mb-lg-0">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-warning mb-3">
                                    <i class="fa fa-cubes   text-white"></i>
                                </div>
                                <h3>Client-Centered Approach</h3>
                                <p>
                                    We treat every transaction like it’s our own.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div> --}}
        </div>
    </section>


    <section class="sptb bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card widgets-cards">
                        <div class="card-body d-flex">
                            <div class="widgets-cards-icons">
                                <div class="wrp icon-circle bg-success">
                                    <i class="fa fa-rocket icons"></i>
                                </div>
                            </div>
                            <div class="widgets-cards-data">
                                <div class="wrp text-wrapper">
                                    <p>Our Vision</p>
                                    <p class="text-muted mt-1 mb-0">
                                        To become the most trusted real estate partner for Nigerians in the diaspora by
                                        delivering peace of mind through verified property transactions and reliable
                                        after-sale management.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card widgets-cards">
                        <div class="card-body d-flex">
                            <div class="widgets-cards-icons">
                                <div class="wrp icon-circle bg-success">
                                    <i class="fa fa-rocket icons"></i>
                                </div>
                            </div>
                            <div class="widgets-cards-data">
                                <div class="wrp text-wrapper">
                                    <p>Our Mission</p>
                                    <p class="text-muted mt-1 mb-0">
                                        To bridge the trust gap in the Nigerian real estate market by providing verified
                                        property opportunities and full-risk accountability to clients abroad.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--post section-->
  
    <!--/post section-->


    <!--section-->

    <!--/section-->

    <!--Statistics-->
    {{-- <section>
        <div class="about-1 cover-image sptb bg-background-color"
            data-bs-image-src="../assets/images/banners/banner5.jpg">
            <div class="content-text mb-0 text-white info">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status md-mb-0">
                                <div class="counter-icon text-danger">
                                    <i class="icon icon-people"></i>
                                </div>
                                <h5>Total Agents</h5>
                                <h2 class="counter mb-0 font-weight-bold">893</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status-1 md-mb-0">
                                <div class="counter-icon text-warning">
                                    <i class="icon icon-rocket"></i>
                                </div>
                                <h5>Total Sales</h5>
                                <h2 class="counter mb-0 font-weight-bold">1765</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status md-mb-0">
                                <div class="counter-icon text-primary">
                                    <i class="icon icon-docs"></i>
                                </div>
                                <h5>Total Projects</h5>
                                <h2 class="counter mb-0 font-weight-bold">846</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status">
                                <div class="counter-icon text-success">
                                    <i class="icon icon-emotsmile"></i>
                                </div>
                                <h5>Happy Customers</h5>
                                <h2 class="counter font-weight-bold">7253</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--/Statistics-->
@endsection
