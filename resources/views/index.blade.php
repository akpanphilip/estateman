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


    <!--Latest Ads-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Latest Properties</h2>
                <p>Discover our newest listings, fresh on the market and ready for you.</p>
                {{-- <p>Sed do eiusmod tempor incidid
                    punt ut labore et dolore magna aliqua</p> --}}
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
                                            <h4 class="text-truncate" style="max-width: 100%;">{{ $prototype->name }}</h4>
                                        </a>
                                        <p class="mb-2"><i class="fa fa-map-marker text-danger me-1"></i>
                                            {{ $prototype->estate->location }}</p>

                                    </div>
                                    <ul class="d-flex justify-content-between mb-0 align-items-center">
                                        <li class="w-auto"><a href="javascript:void(0);">
                                                <h5 class="font-weight-bold"> ₦{{ number_format($prototype->price) }}
                                                </h5>
                                            </a></li>
                                        <li class="w-auto"><a href="javascript:void(0);" class="icons text-right"><i
                                                    class="fa fa-arrows-alt text-muted me-1"></i>
                                                {{ number_format($prototype->plot_size) }} Sqft</a></li>

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
                <p>Exceptional homes you don’t want to miss.</p>
            </div>
            <div id="myCarousel2" class="owl-carousel owl-carousel-icons2">
                <!-- Wrapper for carousel items -->
                @foreach ($featuredPrototypes as $featuredPrototype)
                    <div class="item">
                        <div class="card mb-0">
                            <div class="arrow-ribbon bg-primary">For Sale</div>
                            <div class="item-card7-imgs">
                                <a href="{{ route('property.detail', $featuredPrototype->slug) }}"></a>
                                @if ($featuredPrototype->coverImage)
                                    <img src="{{ asset('storage/' . $featuredPrototype->coverImage->image) }}"
                                        alt="{{ $featuredPrototype->name }}" class="cover-image">
                                @else
                                    <img src="../assets/images/products/products/b3.jpg" alt="img" class="cover-image">
                                @endif
                            </div>
                            <div class="item-card7-overlaytext">
                                <a href="{{ route('property.detail', $featuredPrototype->slug) }}" class="text-white">
                                    Featured </a>
                                <span class="mb-0 fs-13"><i class="fa fa fa-heart-o"></i></span>
                            </div>
                            <div class="card-body">
                                <div class="item-card7-desc">
                                    <div class="item-card7-text">
                                        <a href="{{ route('property.detail', $featuredPrototype->slug) }}"
                                            class="text-dark">
                                            <h4 class="text-truncate" style="max-width: 100%;">
                                                {{ $featuredPrototype->name }}
                                            </h4>
                                        </a>
                                        <p class=""><i class="icon icon-location-pin text-muted me-1"></i>
                                            {{ $featuredPrototype->estate->location ?? 'N/A' }} </p>
                                    </div>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li class="w-auto"><a href="javascript:void(0);">
                                            <h5 class="font-weight-bold"> ₦{{ number_format($featuredPrototype->price) }}
                                            </h5>
                                        </a></li>
                                    <li class="w-auto"><a href="javascript:void(0);" class="icons text-right"><i
                                                class="fa fa-arrows-alt text-muted me-1"></i>{{ number_format($featuredPrototype->plot_size) }}
                                            Sqft</a>
                                    </li>
                                </ul>

                            </div>

                            <div class="card-footer">
                                <div class="d-flex mb-0">
                                    <span class="fs-12"><i
                                            class="icon icon-event me-2 mt-1"></i>{{ $featuredPrototype->created_at->format('M d, Y') }}
                                    </span>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Share Property"><i
                                                class="icon icon-share text-muted"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="item">
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
                </div> --}}

            </div>
    </section>
    <!--/Featured Ads-->

    <section>
        <div class="about-1 cover-image sptb bg-background2" data-bs-image-src="../assets/images/banners/banner5.jpg">
            <div class="content-text mb-0 text-white info">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status md-mb-0">
                                <div class="counter-icon">
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
                                <h2 class="counter font-weight-bold mb-0">7253</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Categories-->
    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Developers</h2>
                <p>Crafted by experts, delivered with excellence.</p>
            </div>
            <div id="small-categories" class="owl-carousel owl-carousel-icons2">
                @foreach ($developers as $developer)
                    <div class="item">
                        <div class="card mb-0">
                            <div class="item-card">
                                <div class="item-card-desc">
                                    <a href=""></a>
                                    <div class="item-card-img">
                                        {{-- @if ($developer->logo)
                                        <img src="{{ asset('storage/' . $developer->logo) }}" alt="{{ $developer->name }}"
                                            class="br-tr-7 br-tl-7">
                                    @else --}}
                                        <img src="../assets/images/products/1.png" alt="{{ $developer->name }}"
                                            class="br-tr-7 br-tl-7">
                                        {{-- @endif --}}
                                    </div>
                                    <div class="item-card-text">
                                        <h4 class="mb-0">{{ $developer->name }}</h4>
                                        <span
                                            class="badge rounded-pill badge-primary w-15">{{ $developer->prototypes_count }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- @foreach ($developers as $developer)
             @endforeach
             --}}
                {{-- <div class="item">
                    <div class="card mb-0">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="javascript:void(0);"></a>
                                <div class="item-card-img">
                                    <img src="../assets/images/products/1.png" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">Stylish Houses</h4>
                                    <span class="badge rounded-pill badge-primary w-15">45</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}


            </div>
        </div>
    </section>
@endsection
