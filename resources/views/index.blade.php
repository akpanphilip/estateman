@extends('layouts.app')
@section('content')
    
    <!--Sliders Section-->
    <section>
        <div class="banner-1 cover-image sptb-2 sptb-tab bg-background2"
            data-bs-image-src="../assets/images/banners/banner1.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white mb-7">
                        <h1 class="mb-1">Your Property, Our Priority.</h1>
                        <p>It is a long established fact that a reader will be distracted by the readable.</p>
                    </div>
                    <div class="row">
                        <div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
                            <div class="search-background bg-transparent">
                                <div class="form row no-gutters ">
                                    <div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0">
                                        <input type="text" class="form-control input-lg br-tr-md-0 br-br-md-0"
                                            id="text4" placeholder="Find Your Property">
                                    </div>
                                    <div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0">
                                        <input type="text" class="form-control input-lg br-md-0" id="text5"
                                            placeholder="Enter Location">
                                        <span><i class="fa fa-map-marker location-gps me-1"></i> </span>
                                    </div>
                                    <div class="form-group  col-xl-2 col-lg-3 col-md-12 mb-0">
                                        <input class="form-control fc-datepicker input-lg br-md-0"
                                            placeholder="Start-Date" type="text">
                                        <span><i class="fa fa-calendar location-gps me-1"></i> </span>
                                    </div>
                                    <div class="form-group  col-xl-2 col-lg-3 col-md-12 mb-0">
                                        <input class="form-control fc-datepicker input-lg br-md-0"
                                            placeholder="End-Date" type="text">
                                        <span><i class="fa fa-calendar location-gps me-1"></i> </span>
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-md-12 mb-0">
                                        <a href="javascript:void(0);"
                                            class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0">Search
                                            Here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /header-text -->
        </div>
    </section>
    <!--Sliders Section-->

    <!--Categories-->
    <section class="categories">
        <div class="container">
            <div class="card mb-0 box-shadow-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 d-catmb mb-4 mb-lg-0">
                            <div class="d-flex">
                                <div>
                                    <span class="bg-primary-transparent icon-service1 text-primary">
                                        <i class="fa fa-map-o"></i>
                                    </span>
                                </div>
                                <div class="ms-4 mt-1">
                                    <h3 class=" mb-0 font-weight-bold">1,200</h3>
                                    <p class="mb-0 text-muted">Commercial Lands</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 d-catmb mb-4 mb-lg-0">
                            <div class="d-flex">
                                <div>
                                    <span class="bg-secondary-transparent icon-service1 text-secondary">
                                        <i class="fa fa-home"></i>
                                    </span>
                                </div>
                                <div class="ms-4 mt-1">
                                    <h3 class=" mb-0 font-weight-bold">894</h3>
                                    <p class="mb-0 text-muted">Showrooms & Shops</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 d-catmb mb-4 mb-sm-0">
                            <div class="d-flex">
                                <div>
                                    <span class="bg-warning-transparent icon-service1 text-warning">
                                        <i class="fa fa-object-group"></i>
                                    </span>
                                </div>
                                <div class="ms-4 mt-1">
                                    <h3 class=" mb-0 font-weight-bold">1,089</h3>
                                    <p class="mb-0 text-muted">Office rooms</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <div class="d-flex">
                                <div>
                                    <span class="bg-info-transparent icon-service1 text-info">
                                        <i class="fa fa-building-o"></i>
                                    </span>
                                </div>
                                <div class="ms-4 mt-1">
                                    <h3 class=" mb-0 font-weight-bold ">789</h3>
                                    <p class="mb-0 text-muted">Residential</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Categories-->

    <!--Categories-->
    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Categories</h2>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div id="small-categories" class="owl-carousel owl-carousel-icons2">
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="../assets/images/products/1.png" alt="img"
                                        class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Stylish Houses</h4>
                                    <span class="badge rounded-pill badge-primary w-15">45</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="../assets/images/products/2.png" alt="img"
                                        class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Luxury Houses</h4>
                                    <span class="badge rounded-pill badge-secondary w-15">23</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="../assets/images/products/3.png" alt="img"
                                        class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Apartments</h4>
                                    <span class="badge rounded-pill badge-warning w-15">48</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="../assets/images/products/9.png" alt="img"
                                        class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Deluxe Houses</h4>
                                    <span class="badge rounded-pill badge-info w-15">15</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="../assets/images/products/10.png" alt="img"
                                        class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Nature Houses</h4>
                                    <span class="badge rounded-pill badge-success w-15">12</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card ">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="../assets/images/products/11.png" alt="img"
                                        class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">2BHK Houses</h4>
                                    <span class="badge rounded-pill badge-pink w-15">05</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0 mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="../assets/images/products/3.png" alt="img"
                                        class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">3BK Houses</h4>
                                    <span class="badge rounded-pill badge-primary w-15">09</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="../assets/images/products/12.png" alt="img"
                                        class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Duplex House</h4>
                                    <span class="badge rounded-pill badge-secondary w-15">65</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="../assets/images/products/13.png" alt="img"
                                        class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Office Houses</h4>
                                    <span class="badge rounded-pill badge-warning w-15">45</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="../assets/images/products/14.png" alt="img"
                                        class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">KidsFriendly Houses</h4>
                                    <span class="badge rounded-pill badge-info w-15">36</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="../assets/images/products/4.png" alt="img"
                                        class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Budget Homes</h4>
                                    <span class="badge rounded-pill badge-success w-15">59</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Categories-->

    <!--Latest Ads-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Latest Properties</h2>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div id="myCarousel1" class="owl-carousel owl-carousel-icons2">
                <div class="item">
                    <div class="card mb-0">
                        <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i
                                    class="fa fa-bolt"></i></span></div>
                        <div class="item-card2-img">
                            <a href="col-left.html"></a>
                            <img src="../assets/images/products/products/f1.jpg" alt="img" class="cover-image">
                            <div class="tag-text">
                                <span class="bg-danger tag-option">For Sale </span>
                                <span class="bg-pink tag-option">Open</span>
                            </div>
                        </div>
                        <div class="item-card2-icons">
                            <a href="col-left.html" class="item-card2-icons-l bg-primary"> <i
                                    class="fa fa-home"></i></a>
                            <a href="javascript:void(0);" class="item-card2-icons-r bg-secondary"><i
                                    class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="item-card2">
                                <div class="item-card2-text">
                                    <a href="col-left.html" class="text-dark">
                                        <h4 class="">Deluxe Houses</h4>
                                    </a>
                                    <p class="mb-2"><i class="fa fa-map-marker text-danger me-1"></i> Preston Street
                                        Wichita , USA </p>
                                    <h5 class="font-weight-bold mb-3">$89,005 <span
                                            class="fs-12  font-weight-normal">Per Month</span></h5>
                                </div>
                                <ul class="item-card2-list">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i>
                                            256 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-bed text-muted me-1"></i> 3 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-bath text-muted me-1"></i> 2 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footerimg d-flex mt-0 mb-0">
                                <div class="d-flex footerimg-l mb-0">
                                    <img src="../assets/images/faces/male/18.jpg" alt="image"
                                        class="avatar brround  me-2">
                                    <h5 class="time-title text-muted p-0 leading-normal my-auto">Wendy Peake<i
                                            class="si si-check text-success fs-12 ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="verified"></i></h5>
                                </div>
                                <div class="my-auto footerimg-r ms-auto">
                                    <small class="text-muted">1 day ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i
                                    class="fa fa-bolt"></i></span></div>
                        <div class="item-card2-img">
                            <a href="col-left.html"></a>
                            <img src="../assets/images/products/products/h4.jpg" alt="img" class="cover-image">
                            <div class="tag-text"><span class="bg-danger tag-option">For Rent </span></div>
                        </div>
                        <div class="item-card2-icons">
                            <a href="javascript:void(0);" class="item-card2-icons-l bg-primary"> <i
                                    class="fa fa-home"></i></a>
                            <a href="javascript:void(0);" class="item-card2-icons-r bg-secondary"><i
                                    class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="item-card2">
                                <div class="item-card2-text">
                                    <a href="col-left.html" class="text-dark">
                                        <h4 class="">2BK Houses</h4>
                                    </a>
                                    <p class="mb-2"><i class="fa fa-map-marker text-danger me-1"></i> Preston Street
                                        Wichita , USA </p>
                                    <h5 class="font-weight-bold mb-3">$12,890 <span
                                            class="fs-12  font-weight-normal">Per Month</span></h5>
                                </div>
                                <ul class="item-card2-list">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i>
                                            150 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-bed text-muted me-1"></i> 2 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footerimg d-flex mt-0 mb-0">
                                <div class="d-flex footerimg-l mb-0">
                                    <img src="../assets/images/faces/female/12.jpg" alt="image"
                                        class="avatar brround  me-2">
                                    <h5 class="time-title text-muted p-0 leading-normal my-auto">Ryan Lyman<i
                                            class="si si-check text-success fs-12 ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="verified"></i></h5>
                                </div>
                                <div class="my-auto footerimg-r ms-auto">
                                    <small class="text-muted">55 mins ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card2-img">
                            <a href="col-left.html"></a>
                            <img src="../assets/images/products/products/b1.jpg" alt="img" class="cover-image">
                            <div class="tag-text">
                                <span class="bg-danger tag-option">For Rent </span>
                                <span class="bg-pink tag-option">Hot</span>
                            </div>
                        </div>
                        <div class="item-card2-icons">
                            <a href="javascript:void(0);" class="item-card2-icons-l bg-primary"> <i
                                    class="fa fa-home"></i></a>
                            <a href="javascript:void(0);" class="item-card2-icons-r bg-secondary"><i
                                    class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="item-card2">
                                <div class="item-card2-text">
                                    <a href="col-left.html" class="text-dark">
                                        <h4 class="">Office Rooms</h4>
                                    </a>
                                    <p class="mb-2"><i class="fa fa-map-marker text-danger me-1"></i> Preston Street
                                        Wichita , USA </p>
                                    <h5 class="font-weight-bold mb-3">$25,784 <span
                                            class="fs-12  font-weight-normal">Per Month</span></h5>
                                </div>
                                <ul class="item-card2-list">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i>
                                            256 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-bed text-muted me-1"></i> 8 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-bath text-muted me-1"></i> 4 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-car text-muted me-1"></i> 4 Car</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footerimg d-flex mt-0 mb-0">
                                <div class="d-flex footerimg-l mb-0">
                                    <img src="../assets/images/faces/male/8.jpg" alt="image"
                                        class="avatar brround  me-2">
                                    <h5 class="time-title text-muted p-0 leading-normal my-auto">Joan Hunter<i
                                            class="si si-check text-success fs-12 ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="verified"></i></h5>
                                </div>
                                <div class="my-auto footerimg-r ms-auto">
                                    <small class="text-muted">2 day ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i
                                    class="fa fa-bolt"></i></span></div>
                        <div class="item-card2-img">
                            <a href="col-left.html"></a>
                            <img src="../assets/images/products/products/v1.jpg" alt="img" class="cover-image">
                            <div class="tag-text"><span class="bg-danger tag-option">For Sale </span></div>
                        </div>
                        <div class="item-card2-icons">
                            <a href="javascript:void(0);" class="item-card2-icons-l bg-primary"> <i
                                    class="fa fa-home"></i></a>
                            <a href="javascript:void(0);" class="item-card2-icons-r bg-secondary"><i
                                    class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="item-card2">
                                <div class="item-card2-text">
                                    <a href="col-left.html" class="text-dark">
                                        <h4 class="">Apartments</h4>
                                    </a>
                                    <p class="mb-2"><i class="fa fa-map-marker text-danger me-1"></i> Preston Street
                                        Wichita , USA </p>
                                    <h5 class="font-weight-bold mb-3">$89,005 <span
                                            class="fs-12  font-weight-normal">Per Month</span></h5>
                                </div>
                                <ul class="item-card2-list">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i>
                                            700 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-bed text-muted me-1"></i> 20 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-bath text-muted me-1"></i> 10 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-car text-muted me-1"></i> 10 Car</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footerimg d-flex mt-0 mb-0">
                                <div class="d-flex footerimg-l mb-0">
                                    <img src="../assets/images/faces/female/19.jpg" alt="image"
                                        class="avatar brround  me-2">
                                    <h5 class="time-title text-muted p-0 leading-normal my-auto">Elizabeth<i
                                            class="si si-check text-success fs-12 ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="verified"></i></h5>
                                </div>
                                <div class="my-auto footerimg-r ms-auto">
                                    <small class="text-muted">50 mins ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item sold-out">
                    <div class="ribbon sold-ribbon ribbon-top-left text-danger"><span class="bg-danger">Sold
                            Out</span></div>
                    <div class="card mb-0">
                        <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i
                                    class="fa fa-bolt"></i></span></div>
                        <div class="item-card2-img">
                            <a href="col-left.html"></a>
                            <img src="../assets/images/products/products/f3.jpg" alt="img" class="cover-image">
                            <div class="tag-text">
                                <span class="bg-danger tag-option">For Sale </span>
                                <span class="bg-pink tag-option">New</span>
                            </div>
                        </div>
                        <div class="item-card2-icons">
                            <a href="javascript:void(0);" class="item-card2-icons-l bg-primary"> <i
                                    class="fa fa-home"></i></a>
                            <a href="javascript:void(0);" class="item-card2-icons-r bg-secondary"><i
                                    class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="item-card2">
                                <div class="item-card2-text">
                                    <a href="col-left.html" class="text-dark">
                                        <h4 class="">Duplex House</h4>
                                    </a>
                                    <p class="mb-2"><i class="fa fa-map-marker text-danger me-1"></i> Preston Street
                                        Wichita , USA </p>
                                    <h5 class="font-weight-bold mb-3">$23,789 <span
                                            class="fs-12  font-weight-normal">Per Month</span></h5>
                                </div>
                                <ul class="item-card2-list">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i>
                                            300 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-bed text-muted me-1"></i> 4 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footerimg d-flex mt-0 mb-0">
                                <div class="d-flex footerimg-l mb-0">
                                    <img src="../assets/images/faces/female/18.jpg" alt="image"
                                        class="avatar brround  me-2">
                                    <h5 class="time-title text-muted p-0 leading-normal my-auto">Boris Nash<i
                                            class="si si-check text-success fs-12 ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="verified"></i></h5>
                                </div>
                                <div class="my-auto footerimg-r ms-auto">
                                    <small class="text-muted">12 mins ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Latest Ads-->

    <!--Featured Ads-->
    <section class="sptb bg-patterns">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Featured Properties</h2>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div id="myCarousel2" class="owl-carousel owl-carousel-icons2">
                <!-- Wrapper for carousel items -->
                <div class="item">
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-primary">For Sale</div>
                        <div class="item-card7-imgs">
                            <a href="col-left.html"></a>
                            <img src="../assets/images/products/products/b3.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <a href="col-left.html" class="text-white"> Featured </a>
                            <span class="mb-0 fs-13 active"><i class="fa fa fa-heart"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="col-left.html" class="text-dark">
                                        <h4 class="">Deluxe Flat</h4>
                                    </a>
                                    <p class=""><i class="icon icon-location-pin text-muted me-1"></i> New York,
                                        NY 10012, US </p>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i>
                                            300 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-bed text-muted me-1"></i> 4 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                                <h5 class="font-weight-bold mb-0">$89,005 <span class="fs-12  font-weight-normal">Per
                                        Month</span></h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex mb-0">
                                <span class="fs-12"><i class="icon icon-event me-2 mt-1"></i>Jul 10 2019 </span>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Share Property"><i
                                            class="icon icon-share text-muted"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-purple">For Buy</div>
                        <div class="item-card7-imgs">
                            <a href="col-left.html"></a>
                            <img src="../assets/images/products/products/h3.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <a href="col-left.html" class="text-white">Featured</a>
                            <span class="mb-0 fs-13"><i class="fa fa fa-heart-o"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="col-left.html" class="text-dark">
                                        <h4 class="">2BHk Deluxe Flat</h4>
                                    </a>
                                    <p class=""><i class="icon icon-location-pin text-muted me-1"></i> New
                                        York, NY 10012, US </p>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i>
                                            300 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-bed text-muted me-1"></i> 4 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                                <h5 class="font-weight-bold mb-0">$89,005 <span class="fs-12  font-weight-normal">Per
                                        Month</span></h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex mb-0">
                                <span class="fs-12"><i class="icon icon-event me-2 mt-1"></i>Jul 05 2019 </span>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Share Property"><i
                                            class="icon icon-share text-muted"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-secondary">For Rent</div>
                        <div class="item-card7-imgs">
                            <a href="col-left.html"></a>
                            <img src="../assets/images/products/products/v4.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <a href="col-left.html" class="text-white">Featured</a>
                            <span class="mb-0 fs-13 active"><i class="fa fa fa-heart"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="col-left.html" class="text-dark">
                                        <h4 class="">House For Sale</h4>
                                    </a>
                                    <p class=""><i class="icon icon-location-pin text-muted me-1"></i> New
                                        York, NY 10012, US </p>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i>
                                            300 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-bed text-muted me-1"></i> 4 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                                <h5 class="font-weight-bold mb-0">$89,005 <span class="fs-12  font-weight-normal">Per
                                        Month</span></h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex mb-0">
                                <span class="fs-12"><i class="icon icon-event me-2 mt-1"></i>June 29 2019 </span>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Share Property"><i
                                            class="icon icon-share text-muted"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-primary">For Sale</div>
                        <div class="item-card7-imgs">
                            <a href="col-left.html"></a>
                            <img src="../assets/images/products/products/f2.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <a href="col-left.html" class="text-white"> Featured</a>
                            <span class="mb-0 fs-13"><i class="fa fa fa-heart-o"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="col-left.html" class="text-dark">
                                        <h4 class="">Office For Rent</h4>
                                    </a>
                                    <p class=""><i class="icon icon-location-pin text-muted me-1"></i> New
                                        York, NY 10012, US </p>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i>
                                            300 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-bed text-muted me-1"></i> 4 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                                <h5 class="font-weight-bold mb-0">$89,005 <span class="fs-12  font-weight-normal">Per
                                        Month</span></h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex mb-0">
                                <span class="fs-12"><i class="icon icon-event me-2 mt-1"></i>June 25 2019 </span>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Share Property"><i
                                            class="icon icon-share text-muted"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item sold-out">
                    <div class="ribbon sold-ribbon ribbon-top-left text-danger"><span class="bg-danger">Sold
                            Out</span></div>
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-secondary">For Rent</div>
                        <div class="item-card7-imgs">
                            <a href="col-left.html"></a>
                            <img src="../assets/images/products/products/j3.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <a href="col-left.html" class="text-white">Featured</a>
                            <span class="mb-0 fs-13 active"><i class="fa fa fa-heart"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text ">
                                    <a href="col-left.html" class="text-dark">
                                        <h4 class="">Modern House For Sale</h4>
                                    </a>
                                    <p class=""><i class="icon icon-location-pin text-muted me-1"></i> New
                                        York, NY 10012, US </p>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i>
                                            300 Sqft</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-bed text-muted me-1"></i> 4 Beds</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-bath text-muted me-1"></i> 3 Bath</a></li>
                                    <li><a href="javascript:void(0);" class="icons"><i
                                                class="fa fa-car text-muted me-1"></i> 1 Car</a></li>
                                </ul>
                                <h5 class="font-weight-bold mb-0">$89,005 <span class="fs-12  font-weight-normal">Per
                                        Month</span></h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex mb-0">
                                <span class="fs-12"><i class="icon icon-event me-2 mt-1"></i>June 19 2019 </span>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Share Property"><i
                                            class="icon icon-share text-muted"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Featured Ads-->

    <!--Property-->
    <section class="sptb">
        <div class="container">
            <div class="col-md-12">
                <div class="items-gallery">
                    <div class="items-blog-tab text-center">
                        <h2 class="">Best Property Collections</h2>
                        <div class="items-blog-tab-heading">
                            <div class="">
                                <ul class="nav items-blog-tab-menu">
                                    <li class=""><a href="#tab-1" class="active show"
                                            data-bs-toggle="tab">All</a></li>
                                    <li><a href="#tab-2" data-bs-toggle="tab" class="">2BHK Homes</a></li>
                                    <li><a href="#tab-3" data-bs-toggle="tab" class="">Villas</a></li>
                                    <li><a href="#tab-4" data-bs-toggle="tab" class="">Apartments</a></li>
                                    <li><a href="#tab-5" data-bs-toggle="tab" class="">Deplux Houses</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content p-0">
                            <div class="tab-pane active" id="tab-1">
                                <div class="row pt-2" id="container3">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card">
                                            <span class="ribbon-2">
                                                <span><i class="fa fa-home"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/f1.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary  mb-0">Luxury Room</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 June 2019.</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card">
                                            <span class="ribbon-3">
                                                <span><i class="fa fa-building"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/b1.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info  mb-0">Villa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">05 June 2019</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card">
                                            <span class="ribbon-2">
                                                <span><i class="fa fa-home"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/h4.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary  mb-0">Apartments</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">21 June 2019</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card">
                                            <span class="ribbon-3">
                                                <span><i class="fa fa-building"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/f4.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info  mb-0">Deplux Rooms</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">20 June 2019</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card">
                                            <span class="ribbon-1">
                                                <span><i class="fa fa-home"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/j2.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary mb-0">2BHK House</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">11 June 2019 </p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card">
                                            <span class="ribbon-2">
                                                <span><i class="fa fa-building-o"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/b2.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary  mb-0">Villa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">26 May 2019.</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card">
                                            <span class="ribbon-3">
                                                <span><i class="fa fa-home"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/h2.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info mb-0">Apartments</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">18 June 2019</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card">
                                            <span class="ribbon-1">
                                                <span><i class="fa fa-building"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/f3.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary mb-0">Duplex House</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">19 June 2019</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card">
                                            <span class="ribbon-3">
                                                <span><i class="fa fa-home"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/j3.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info mb-0">2BHK House</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">10 June 2019.</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-lg-0">
                                            <span class="ribbon-1">
                                                <span><i class="fa fa-building-o"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/j1.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary  mb-0">Villa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2019.</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
                                            <span class="ribbon-1">
                                                <span><i class="fa fa-home"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/h3.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary  mb-0">Apartments</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">06 July 2019</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
                                            <span class="ribbon-2">
                                                <span><i class="fa fa-building"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/f2.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary  mb-0">Duplex Room</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">13 June 2019</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-2">
                                                <span><i class="fa fa-home"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/f1.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary  mb-0">Luxury Room</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 June 2019.</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-1">
                                                <span><i class="fa fa-home"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/j2.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary mb-0">2BHK House</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">11 June 2019 </p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
                                            <span class="ribbon-3">
                                                <span><i class="fa fa-home"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/j3.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info mb-0">Modren Kitchen</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">10 June 2019.</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-3">
                                                <span><i class="fa fa-building"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/b1.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info  mb-0">Villa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">05 June 2019</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-2">
                                                <span><i class="fa fa-building-o"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/b2.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary  mb-0">Garden House</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">26 May 2019.</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
                                            <span class="ribbon-1">
                                                <span><i class="fa fa-building-o"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/j1.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary  mb-0">Villa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2019.</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-2">
                                                <span><i class="fa fa-home"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/h4.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary  mb-0">Apartments</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">21 June 2019</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-3">
                                                <span><i class="fa fa-home"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/h2.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info mb-0">2BHK House</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">18 June 2019</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
                                            <span class="ribbon-1">
                                                <span><i class="fa fa-home"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/h3.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary  mb-0">3BHK House</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">06 July 2019</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-3">
                                                <span><i class="fa fa-building"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/f4.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info  mb-0">Deplux Rooms</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">20 June 2019</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-1">
                                                <span><i class="fa fa-building"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/f3.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary mb-0">Duplex House</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">19 June 2019</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
                                            <span class="ribbon-2">
                                                <span><i class="fa fa-building"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <a href="ad-details.html"></a>
                                                <img src="../assets/images/products/f2.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary  mb-0">Duplex Room</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">13 June 2019</p>
                                                    <a href="ad-details.html">
                                                        <h4 class="font-weight-semibold">Food &amp; Bar Apartments
                                                        </h4>
                                                    </a>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Property-->
@endsection