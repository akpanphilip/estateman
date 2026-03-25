@extends('layouts.app')
@section('content')
    <!--Sliders Section-->
    <div>
        <div class=" cover-image sptb-1 bg-background" data-bs-image-src="../assets/images/banners/banner1.jpg">
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
                                                <option value="2">Apartments</option>
                                                <option value="3">Houses & Villas</option>
                                                <option value="4">Builder Floors</option>
                                                <option value="5">Lands</option>
                                                <option value="6">Plots</option>
                                                <option value="7">Shops</option>
                                                <option value="8">Offices</option>
                                                <option value="9">Farm Houses</option>
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
                <h4 class="page-title">Ad Details</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ad Details</li>
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
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h3 class="card-title">Posted By</h3>
                        </div> --}}
                        <div class="card-body  item-user">
                            <div class="profile-pic mb-0">
                                @if ($developer->avatar)
                                    <img src="{{ asset('storage/' . $developer->avatar) }}" class="brround avatar-xxl"
                                        alt="{{ $developer->name }}">
                                @else
                                    <img src="../assets/images/faces/male/25.jpg" class="brround avatar-xxl" alt="user">
                                @endif
                                <div class="">
                                    <a href="userprofile2.html" class="text-dark">
                                        <h4 class="mt-3 mb-1 font-weight-semibold">{{ $developer->name }}</h4>
                                    </a>
                                    {{-- <p class="mb-0">RealEstate Agent</p> --}}
                                    <span class="text-muted">Member Since
                                        {{ $developer->created_at->diffForHumans() }}</span>
                                    <h6 class="mt-2 mb-0"><a href="userprofile2.html" class="btn btn-primary btn-sm">See All
                                            Properties</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body item-user">
                            <h4 class="mb-4">About</h4>
                            <div>
                                {{-- <h6><span class="font-weight-semibold"><i class="fa fa-map-marker me-2 mb-2"></i></span><a
                                        href="javascript:void(0);" class="text-body"> 7981 Aspen Ave. Hammonton, USA</a>
                                </h6> --}}
                                <h6><span class="font-weight-semibold"><i class="fa fa-envelope me-2 mb-2"></i></span><a
                                        href="javascript:void(0);" class="text-body"> robert123@gmail.com</a></h6>
                                <h6><span class="font-weight-semibold"><i class="fa fa-phone me-2  mb-2"></i></span><a
                                        href="javascript:void(0);" class="text-body"> 0-235-657-24587</a></h6>
                                {{-- <h6><span class="font-weight-semibold"><i class="fa fa-link me-2 "></i></span><a
                                        href="javascript:void(0);" class="text-body">http://spruko.com/</a></h6> --}}
                            </div>
                            <div class=" item-user-icons mt-4">
                                <a href="javascript:void(0);" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
                                <a href="javascript:void(0);" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="javascript:void(0);" class="google-bg"><i class="fa fa-google"></i></a>
                                <a href="javascript:void(0);" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-start">
                                <a href="javascript:void(0);" class="btn  btn-success"><i class="fa fa-envelope"></i>
                                    Chat</a>
                                <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#contact"><i class="fa fa-user"></i> Contact Me</a>
                                <a href="javascript:void(0);" class="btn  btn-info"><i class="fa fa-share"></i> Share</a>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/Left Side Content-->

                <div class="col-xl-8 col-lg-8 col-md-12">

                    <div class="card">

                        <div class="card-body">
                            <ol class="breadcrumb1">
                                <li class="breadcrumb-item1"><a href="javascript:void(0);">{{ $developer->name }}</a></li>
                                <li class="breadcrumb-item1"><a href="javascript:void(0);">Estates</a></li>
                            </ol>

                            <div class="row">
                                {{-- <p class="text-muted">16 November 2019.</p> --}}
                                {{-- @foreach ($developerEstates as $developerEstate)
                                    <div class="col-xl-6 col-lg-6 col-md-12 mb-4">
                                        <div class="card mb-xl-0">
                                            <div class="item-card8-img  br-tr-3 br-tl-3">
                                                <img src="../assets/images/products/f3.png" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <h4 class="font-weight-semibold">{{ $developerEstate->name }}</h4>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos
                                                        ducimus qui blanditiis praesentium</p>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-block">View
                                                    Properties</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach --}}
                                @forelse($estates as $estate)
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="card">
                                            {{-- Estate Image --}}
                                            <div class="item-card7-img">
                                                <img src="{{ $estate->image ? asset('storage/' . $estate->image) : asset('assets/images/products/h1.png') }}"
                                                    alt="{{ $estate->name }}"
                                                    style="width:100%; height:200px; object-fit:cover;">
                                            </div>

                                            <div class="card-body">
                                                <h4 class="font-weight-semibold">
                                                    <a href="{{ route('estate.detail', $estate->slug) }}"
                                                        class="text-dark">
                                                        {{ $estate->name }}
                                                    </a>
                                                </h4>
                                                @if ($estate->location)
                                                    <p class="text-muted mb-1">
                                                        <i class="fa fa-map-marker me-1"></i>{{ $estate->location }}
                                                    </p>
                                                @endif
                                                <p class="text-muted mb-1">
                                                    <i class="fa fa-home me-1"></i>{{ $estate->prototypes->count() }}
                                                    Properties
                                                </p>
                                                <a href="{{ route('properties', $estate->slug) }}"
                                                    class="btn btn-primary btn-sm mt-2">
                                                    View Properties
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12 text-center">
                                        <p class="text-muted">No estates found for this developer.</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <!--/Add Description-->

                </div>
            </div>
        </div>
    </section>
    <!--Add listing-->
@endsection
