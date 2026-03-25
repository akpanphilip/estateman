@extends('layouts.app')
@section('content')
    <!--Sliders Section-->
    <div>
        <div class="cover-image sptb-1 bg-background" data-bs-image-src="../assets/images/banners/banner1.jpg">
            <div class="header-text1 mb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-12 col-md-12 d-block mx-auto">
                            <div class="text-center text-white text-property">
                                <h1><span class="font-weight-bold">16,25,365</span> Properties Available</h1>
                            </div>
                            <div class="search-background bg-transparent">
                                <div class="form row no-gutters ">
                                    <div class="form-group  col-xl-4 col-lg-3 col-md-12 mb-0">
                                        <input type="text" class="form-control input-lg br-tr-md-0 br-br-md-0"
                                            id="text4" placeholder="Find  Property">
                                    </div>
                                    <div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0">
                                        <input type="text" class="form-control input-lg br-md-0" id="text5"
                                            placeholder="Enter Location">
                                        <span><i class="fa fa-map-marker location-gps me-1"></i> </span>
                                    </div>
                                    <div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg mb-0">
                                        <select class="form-control select2-show-search  border-bottom-0"
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
                                            class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0">Search Here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /header-text -->
        </div>
    </div>
    <!--/Sliders Section-->

    <!--Breadcrumb-->
    {{-- <div class="bg-white border-bottom">
        <div class="container">
            <div class="page-header">
                <h4 class="page-title">Ad List Right</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ad List Right</li>
                </ol>
            </div>
        </div>
    </div> --}}
    <!--/Breadcrumb-->

    <!--Add listing-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <!--Left Side Content-->
                <div class="col-xl-3 col-lg-4 col-md-12">

                    <div class="card">
                        <form method="GET"
                            action="{{ request()->routeIs('properties') ? route('properties', $estate->slug ?? '') : route('prototypes.all') }}">
                            <!-- Price Range -->
                            <div class="card-header border-top">
                                <h3 class="card-title">Price Range</h3>
                            </div>
                            <div class="card-body">
                                <input type="text" name="price" id="price" value="{{ request('price') }}"
                                    class="form-control">
                                <div id="mySlider"></div>
                            </div>

                            <!-- Category -->
                            <div class="card-header border-top">
                                <h3 class="card-title">Category</h3>
                            </div>
                            <div class="card-body">
                                <div class="filter-product-checkboxs">
                                    <label class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" name="category[]"
                                            value="featured"
                                            {{ in_array('featured', request('category', [])) ? 'checked' : '' }}>
                                        <span class="custom-control-label">Featured</span>
                                    </label>

                                    <label class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" name="category[]"
                                            value="regular"
                                            {{ in_array('regular', request('category', [])) ? 'checked' : '' }}>
                                        <span class="custom-control-label">Regular</span>
                                    </label>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-block">Apply Filter</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/Left Side Content-->

                <div class="col-xl-9 col-lg-8 col-md-12">
                    <!--Add lists-->
                    <div class=" mb-lg-0">
                        <div class="">
                            <div class="item2-gl ">
                                <div class=" mb-0">
                                    <div class="">
                                        <div class="p-5 bg-white item2-gl-nav d-flex border br-5">
                                            <h6 class="mb-0 mt-2">Showing 1 to 10 of 30 entries</h6>
                                            <ul class="nav item2-gl-menu ms-auto mt-2">
                                                <li class=""><a href="#tab-11" class="" data-bs-toggle="tab"
                                                        title="List style"><i class="fa fa-list"></i></a></li>
                                                <li><a href="#tab-12" data-bs-toggle="tab" class="active show"
                                                        title="Grid"><i class="fa fa-th"></i></a></li>
                                            </ul>
                                            <div class="d-flex">
                                                <label class="me-2 mt-1 mb-sm-1 pt-2">Sort By:</label>
                                                <select name="item" class="form-control select-sm w-75 select2">
                                                    <option value="1">Latest</option>
                                                    <option value="2">Oldest</option>
                                                    <option value="3">Price:Low-to-High</option>
                                                    <option value="5">Price:Hight-to-Low</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane" id="tab-11">

                                        @foreach ($prototypes as $prototype)
                                            <div class="card overflow-hidden">
                                                <div class="d-md-flex">
                                                    <div class="item-card9-img">
                                                        <div class="arrow-ribbon bg-primary">
                                                            ₦{{ number_format($prototype->price) }}</div>
                                                        <div class="item-card9-imgs">
                                                            <a href="{{ route('property.detail', $prototype->slug) }}"></a>
                                                            @if ($prototype->coverImage)
                                                                <img src="{{ asset('storage/' . $prototype->coverImage->image) }}"
                                                                    alt="{{ $prototype->name }}" class="cover-image">
                                                            @else
                                                                <img src="../assets/images/products/h4.png" alt="img"
                                                                    class="cover-image">
                                                            @endif

                                                        </div>
                                                        <div class="item-card9-icons">
                                                            <a href="javascript:void(0);"
                                                                class="item-card9-icons1 bg-purple"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Share"> <i class="icon icon-share"></i></a>
                                                        </div>
                                                        <div class="item-tags">
                                                            <div class="bg-success tag-option">For Sale </div>
                                                            <div class="bg-pink tag-option">Open </div>
                                                        </div>

                                                    </div>
                                                    <div class="card border-0 mb-0">
                                                        <div class="card-body ">
                                                            <div class="item-card9">
                                                                {{-- <a href="col-left.html" class="text-muted me-4"><i
                                                                        class="fa fa-tag me-1"></i>
                                                                    {{ $prototype->locatoin }}</a> --}}
                                                                <a href="col-left.html" class="text-dark">
                                                                    <h4 class="font-weight-bold mt-1">
                                                                        {{ $prototype->name }} </h4>
                                                                </a>
                                                                <div class="mb-2">
                                                                    <a href="javascript:void(0);"
                                                                        class="icons text-muted me-4"><i
                                                                            class="fa fa-arrows-alt text-muted me-1"></i>
                                                                        {{ number_format($prototype->plot_size) }} Sqft</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer pt-4 pb-4">
                                                            <div class="item-card9-footer d-flex">
                                                                <div class="item-card9-cost">
                                                                    <a href="javascript:void(0);" class="me-4"><span
                                                                            class=""><i
                                                                                class="fa fa-map-marker text-muted me-1"></i>
                                                                            {{ $prototype->location }}</span></a>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <a href="javascript:void(0);" class=""><span
                                                                            class=""><i
                                                                                class="fa fa-calendar-o text-muted me-1"></i>
                                                                            {{ $prototype->created_at->diffForHumans() }}
                                                                        </span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="tab-pane active" id="tab-12">
                                        <div class="row">
                                            @foreach ($prototypes as $prototype)
                                                <div class="col-lg-6 col-md-12 col-xl-4">
                                                    <div class="card overflow-hidden">
                                                        <div class="item">
                                                            <div class="card mb-0">
                                                                <div class="arrow-ribbon bg-primary">For Sale</div>
                                                                <div class="item-card7-imgs">
                                                                    <a
                                                                        href="{{ route('property.detail', $prototype->slug) }}"></a>
                                                                    @if ($prototype->coverImage)
                                                                        <img src="{{ asset('storage/' . $prototype->coverImage->image) }}"
                                                                            alt="{{ $prototype->name }}"
                                                                            class="cover-image">
                                                                    @else
                                                                        <img src="../assets/images/products/products/b3.jpg"
                                                                            alt="img" class="cover-image">
                                                                    @endif
                                                                </div>
                                                                <div class="item-card7-overlaytext">
                                                                    <a href="{{ route('property.detail', $prototype->slug) }}"
                                                                        class="text-white">
                                                                        {{ ucwords(str_replace('_', ' ', $prototype->category)) }}
                                                                    </a>
                                                                    <span class="mb-0 fs-13"><i
                                                                            class="fa fa fa-heart-o"></i></span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="item-card7-desc">
                                                                        <div class="item-card7-text">
                                                                            <a href="{{ route('property.detail', $prototype->slug) }}"
                                                                                class="text-dark">
                                                                                <h4 class="text-truncate"
                                                                                    style="max-width: 100%;">
                                                                                    {{ $prototype->name }}
                                                                                </h4>
                                                                            </a>
                                                                            <p class=""><i
                                                                                    class="icon icon-location-pin text-muted me-1"></i>
                                                                                {{ $prototype->estate->location ?? 'N/A' }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <ul
                                                                        class="d-flex justify-content-between mb-0 align-items-center mb-0">
                                                                        <li class="w-auto"><a href="javascript:void(0);">
                                                                                <h5 class="font-weight-bold">
                                                                                    ₦{{ number_format($prototype->price) }}
                                                                                </h5>
                                                                            </a></li>
                                                                        <li class="w-auto"><a href="javascript:void(0);"
                                                                                class="icons text-right"><i
                                                                                    class="fa fa-arrows-alt text-muted me-1"></i>{{ number_format($prototype->plot_size) }}
                                                                                Sqft</a>
                                                                        </li>
                                                                    </ul>

                                                                </div>

                                                                <div class="card-footer">
                                                                    <div class="d-flex mb-0">
                                                                        <span class="fs-12"><i
                                                                                class="icon icon-event me-2 mt-1"></i>{{ $prototype->created_at->format('M d, Y') }}
                                                                        </span>
                                                                        <div class="ms-auto">
                                                                            <a href="javascript:void(0);" class=""
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                title="Share Property"><i
                                                                                    class="icon icon-share text-muted"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="center-block d-flex justify-content-center w-100 text-center">
                                <ul class="pagination mb-0">
                                    <li class="page-item page-prev disabled">
                                        <a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item page-next">
                                        <a class="page-link" href="javascript:void(0);">Next</a>
                                    </li>
                                </ul>
                            </div> --}}

                        </div>
                    </div>
                    <!--/Add lists-->
                </div>
            </div>
        </div>
    </section>
    <!--/Add Listings-->
    
@endsection
