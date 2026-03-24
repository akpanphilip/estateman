@extends('layouts.app')
@section('content')
    <!--Sliders Section-->
    <section>
        <div class="banner-1 cover-image sptb-2 sptb-tab bg-background2 animation-zidex"
            data-bs-image-src="../assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white mb-7">
                        <h1 class="mb-1">Find Your Best Property</h1>
                        <p>Find your ideal, secure, and verified property.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
                            <div class="search-background bg-transparent">
                                <div class="form row no-gutters ">
                                    <div class="form-group  col-xl-4 col-lg-3 col-md-12 mb-0">
                                        <input type="text" class="form-control input-lg " id="text4"
                                            placeholder="Find Your Property">
                                    </div>
                                    <div class="form-group  col-xl-3 col-lg-2 col-md-12 mb-0">
                                        <input type="text" class="form-control input-lg  " id="text5"
                                            placeholder="Enter Location">
                                        <span><i class="fa fa-map-marker location-gps me-1"></i> </span>
                                    </div>
                                    <div class="form-group col-xl-3 col-lg-2 col-md-12 select2-lg  mb-0">
                                        <select class="form-control select2-show-search  "
                                            data-placeholder="Select Category">
                                            <optgroup label="Categories">
                                                <option>Select</option>
                                                <option value="1">Delux Houses</option>
                                                <option value="2">Modren Flats</option>
                                                <option value="3">Apartments</option>
                                                <option value="4">Apartments</option>
                                                <option value="5">Offices</option>
                                                <option value="6">Luxury Homes</option>
                                                <option value="7">Shops</option>
                                                <option value="8">Farm Houses</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-md-12 mb-0">
                                        <a href="javascript:void(0);"
                                            class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0">Find Home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /header-text -->
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </section>

    <!--Sliders Section-->

    <!-- Categories-->
    {{-- <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Categories</h2>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <div class="card bg-card mb-xl-0">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="page-list.html"></a>
                                <div class="cat-img text-shadow1">
                                    <img src="../assets/images/categories/bk.png" alt="img"
                                        class="cover-image h-8 w-8 status-img-light">
                                    <img src="../assets/images/categories/2.png" alt="img"
                                        class="cover-image h-8 w-8 status-img-dark">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">2BHK Homes</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <div class="card bg-card mb-xl-0">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="page-list.html"></a>
                                <div class="cat-img text-shadow1">
                                    <img src="../assets/images/categories/resturant.png" alt="img"
                                        class="cover-image h-8 w-8 status-img-light">
                                    <img src="../assets/images/categories/6.png" alt="img"
                                        class="cover-image h-8 w-8 status-img-dark">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Duplex House</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <div class="card bg-card mb-xl-0">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="page-list.html"></a>
                                <div class="cat-img text-shadow1">
                                    <img src="../assets/images/categories/apartment.png" alt="img"
                                        class="cover-image h-8 w-8 status-img-light">
                                    <img src="../assets/images/categories/1.png" alt="img"
                                        class="cover-image h-8 w-8 status-img-dark">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Apartments</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <div class="card bg-card mb-md-0">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="page-list.html"></a>
                                <div class="cat-img text-shadow1">
                                    <img src="../assets/images/categories/duplex.png" alt="img"
                                        class="cover-image h-8 w-8 status-img-light">
                                    <img src="../assets/images/categories/3.png" alt="img"
                                        class="cover-image h-8 w-8 status-img-dark">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">3BHK Flats</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <div class="card bg-card mb-sm-0">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="page-list.html"></a>
                                <div class="cat-img text-shadow1">
                                    <img src="../assets/images/categories/office.png" alt="img"
                                        class="cover-image h-8 w-8 status-img-light">
                                    <img src="../assets/images/categories/5.png" alt="img"
                                        class="cover-image h-8 w-8 status-img-dark">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Offices</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <div class="card bg-card mb-0">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="page-list.html"></a>
                                <div class="cat-img text-shadow1">
                                    <img src="../assets/images/categories/flats.png" alt="img"
                                        class="cover-image h-8 w-8 status-img-light">
                                    <img src="../assets/images/categories/4.png" alt="img"
                                        class="cover-image h-8 w-8 status-img-dark">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Flats</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--Categories-->


    <!--Latest Ads-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Latest Properties</h2>
                {{-- <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p> --}}
            </div>
            <div id="myCarousel1" class="owl-carousel owl-carousel-icons2">
                @foreach ($prototypes as $prototype)
                    <div class="item">
                        <div class="card mb-0">
                            <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i
                                        class="fa fa-bolt"></i></span></div>
                            <div class="item-card2-img">
                                <a href="{{ route('property.detail', $prototype->slug) }}"></a>
                                @if ($prototype->coverImage)
                                    <img src="{{ asset('storage/' . $prototype->coverImage->image) }}"
                                        alt="{{ $prototype->name }}" class="cover-image">
                                @else
                                    <img src="../assets/images/products/products/f1.jpg" alt="img" class="cover-image">
                                @endif
                                <div class="tag-text">
                                    <span class="bg-danger tag-option">{{ $prototype->category }} </span>
                                    {{-- <span class="bg-pink tag-option">Open</span> --}}
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
                                            <h4 class="">{{ $prototype->name }}</h4>
                                        </a>
                                        <p class="mb-2"><i class="fa fa-map-marker text-danger me-1"></i>
                                            {{ $prototype->estate->location }}</p>

                                    </div>
                                    <ul class="item-card2-list">
                                        <li><a href="javascript:void(0);">
                                                <h5 class="font-weight-bold"> ₦{{ number_format($prototype->price) }}
                                                </h5>
                                            </a></li>
                                        <li><a href="javascript:void(0);" class="icons text-right"><i
                                                    class="fa fa-arrows-alt text-muted me-1"></i>
                                                {{ $prototype->plot_size }} Sqft</a></li>

                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="card-footer">
                                <div class="footerimg d-flex mt-0 mb-0">
                                    <div class="d-flex footerimg-l mb-0">
                                        <img src="../assets/images/faces/male/18.jpg" alt="image"
                                            class="avatar brround  me-2">
                                        <h5 class="time-title text-muted p-0 leading-normal my-auto">Wendy Peake<i
                                                class="si si-check text-success fs-12 ms-1" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="verified"></i></h5>
                                    </div>
                                    <div class="my-auto footerimg-r ms-auto">
                                        <small class="text-muted">{{ $prototype->created_at }}</small>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--Latest Ads-->

    <!--Featured Ads-->
    <section class="sptb">
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
                            <span class="mb-0 fs-13"><i class="fa fa fa-heart-o"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="col-left.html" class="text-dark">
                                        <h4 class="">Deluxe Flat</h4>
                                    </a>
                                    <p class=""><i class="icon icon-location-pin text-muted me-1"></i> New York, NY
                                        10012, US </p>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 300
                                            Sqft</a></li>
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
                            <span class="mb-0 fs-13 active"><i class="fa fa fa-heart"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="col-left.html" class="text-dark">
                                        <h4 class="">2BHk Deluxe Flat</h4>
                                    </a>
                                    <p class=""><i class="icon icon-location-pin text-muted me-1"></i> New York, NY
                                        10012, US </p>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 300
                                            Sqft</a></li>
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
                            <span class="mb-0 fs-13"><i class="fa fa fa-heart-o"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="col-left.html" class="text-dark">
                                        <h4 class="">House For Sale</h4>
                                    </a>
                                    <p class=""><i class="icon icon-location-pin text-muted me-1"></i> New York, NY
                                        10012, US </p>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 300
                                            Sqft</a></li>
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
                            <span class="mb-0 fs-13 active"><i class="fa fa fa-heart"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="col-left.html" class="text-dark">
                                        <h4 class="">Office For Rent</h4>
                                    </a>
                                    <p class=""><i class="icon icon-location-pin text-muted me-1"></i> New York, NY
                                        10012, US </p>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 300
                                            Sqft</a></li>
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
                    <div class="ribbon sold-ribbon ribbon-top-left text-danger"><span class="bg-danger">Sold Out</span>
                    </div>
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-secondary">For Rent</div>
                        <div class="item-card7-imgs">
                            <a href="col-left.html"></a>
                            <img src="../assets/images/products/products/j3.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <a href="col-left.html" class="text-white">Featured</a>
                            <span class="mb-0 fs-13"><i class="fa fa fa-heart-o"></i></span>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text ">
                                    <a href="col-left.html" class="text-dark">
                                        <h4 class="">Modern House For Sale</h4>
                                    </a>
                                    <p class=""><i class="icon icon-location-pin text-muted me-1"></i> New York, NY
                                        10012, US </p>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrows-alt text-muted me-1"></i> 300
                                            Sqft</a></li>
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
@endsection
