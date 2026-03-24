@extends('layouts.app')
@section('content')
    <!--Sliders Section-->
    <div>
        <div class="cover-image sptb-1 bg-background" data-bs-image-src="../assets/images/banners/banner1.jpg">
            <div class="header-text1 mb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
                            <div class="text-center text-white text-property">
                                <h1><span class="font-weight-bold">{{ $prototype->count() }}</span> Properties Available</h1>
                            </div>
                            <div class=" search-background bg-transparent">
                                <div class="form row no-gutters">
                                    <div class="form-group  col-xl-6 col-lg-5 col-md-12 mb-0">
                                        <input type="text" class="form-control input-lg br-tr-md-0 br-br-md-0"
                                            id="text" placeholder="Search Property">
                                    </div>
                                    <div class="form-group col-xl-4 col-lg-4 select2-lg  col-md-12 mb-0">
                                        <select class="form-control select2-show-search w-100" data-placeholder="Select">
                                            <optgroup label="Categories">
                                                <option>Select</option>
                                                <option value="1">Deluxe Houses</option>
                                                <option value="2">2BHK Homes</option>
                                                <option value="3">Apartments</option>
                                                <option value="4">Modren Houses</option>
                                                <option value="5">Job</option>
                                                <option value="6">Luxury Rooms</option>
                                                <option value="7">Luxury Rooms</option>
                                                <option value="8">Duplex Houses</option>
                                                <option value="9">3BHK Flatss</option>
                                                <option value="10">3BHk Homes</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-md-12 mb-0">
                                        <a href="javascript:void(0);"
                                            class="btn btn-lg btn-block btn-primary br-bl-md-0 br-tl-md-0">Search</a>
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

    <!--BreadCrumb-->
    <div class="bg-white border-bottom">
        <div class="container">
            <div class="page-header">
                <h4 class="page-title">{{ $prototype->estate->developer->name  }} | {{ $prototype->estate->name  }}</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Categories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Estateman</li>
                </ol>
            </div>
        </div>
    </div>
    <!--/BreadCrumb-->

    <!--Add listing-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12">

                    <!--Classified Description-->
                    <div class="card overflow-hidden">
                        <div class="ribbon ribbon-top-right text-danger"><span class="bg-danger">Offer</span></div>
                        <div class="card-body">
                            <div class="item-det mb-4">
                                <a href="javascript:void(0);" class="text-dark">
                                    <h3 class="">{{ $prototype->name }}</h3>
                                </a>
                                <ul class="d-flex">
                                    {{-- <li class="me-5"><a href="javascript:void(0);" class="icons"><i class="icon icon-briefcase text-muted me-1"></i> RealEstate</a></li> --}}
                                    <li class="me-5"><a href="javascript:void(0);" class="icons"><i
                                                class="icon icon-location-pin text-muted me-1"></i>
                                            {{ $prototype->estate->location }}</a></li>
                                    <li class="me-5"><a href="javascript:void(0);" class="icons"><i
                                                class="icon icon-calendar text-muted me-1"></i>
                                            {{ $prototype->created_at->diffForHumans() }}</a></li>
                                    {{-- <li class="me-5"><a href="javascript:void(0);" class="icons"><i class="icon icon-eye text-muted me-1"></i> {{ $prototype->view_count }}</a></li> --}}
                                    {{-- <li class=""><a href="javascript:void(0);" class="icons">
										<i class="fa fa-star text-warning"></i>
										<i class="fa fa-star text-warning"></i>
										<i class="fa fa-star text-warning"></i>
										<i class="fa fa-star text-warning"></i>
										<i class="fa fa-star-half-o text-warning me-1"></i>4.5</a></li> --}}
                                </ul>
                            </div>
                            <div class="product-slider carousel-slide-1">
                                <div id="carouselFade" class="carousel slide carousel-fade" data-bs-ride="carousel"
                                    data-bs-loop="false" data-bs-thumb="true" data-bs-dots="false">
                                    <div class="arrow-ribbon2 bg-primary">₦{{ number_format($prototype->price) }}</div>
                                    <div class="carousel-inner slide-show-image" id=full-gallery>
                                        <div class="carousel-item active"><img
                                                src="{{ asset('storage/' . $prototype->coverImage->image) }}"
                                                alt="img"> </div>
                                        <div class="carousel-item"><img src="../assets/images/products/products/h2.jpg"
                                                alt="img"> </div>
                                        <div class="carousel-item"><img src="../assets/images/products/products/h3.jpg"
                                                alt="img"> </div>
                                        <div class="carousel-item"><img src="../assets/images/products/products/h4.jpg"
                                                alt="img"> </div>
                                        <div class="carousel-item"><img src="../assets/images/products/products/h5.jpg"
                                                alt="img"> </div>
                                        <div class="carousel-item"><img src="../assets/images/products/products/h6.jpg"
                                                alt="img"> </div>
                                        <div class="carousel-item"><img src="../assets/images/products/products/b1.jpg"
                                                alt="img"> </div>
                                        <div class="carousel-item"><img src="../assets/images/products/products/b2.jpg"
                                                alt="img"> </div>
                                        <div class="carousel-item"><img src="../assets/images/products/products/b3.jpg"
                                                alt="img"> </div>
                                        <div class="carousel-item"><img src="../assets/images/products/products/b4.jpg"
                                                alt="img"> </div>
                                        <div class="thumbcarousel">
                                            <a class="carousel-control-prev" href="#carouselFade" role="button"
                                                data-bs-slide="prev">
                                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselFade" role="button"
                                                data-bs-slide="next">
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-0">
                        <div class="wideget-user-tab wideget-user-tab3">
                            <div class="tab-menu-heading">
                                <div class="tabs-menu1">
                                    <ul class="nav">
                                        <li class=""><a href="#tab-1" class="active"
                                                data-bs-toggle="tab">Overview</a></li>
                                        {{-- <li><a href="#tab-3" data-bs-toggle="tab" class="">Specifications</a></li> --}}
                                        {{-- <li><a href="#tab-4" data-bs-toggle="tab" class="">Information</a></li> --}}
                                        <li><a href="#tab-5" data-bs-toggle="tab" class="">About Video</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content border br-tr-3 br-tl-3 p-5 bg-white details-tab-content">
                            <div class="tab-pane active" id="tab-1">
                                <h3 class="card-title mb-3 font-weight-semibold">Description</h3>
                                <div class="mb-4">
                                    <p class="mb-0">
										{!! $prototype->description !!}
									</p>
                                    <p class="mb-0">Plot Size: <span
                                            class="font-weight-bold">{{ number_format($prototype->plot_size) }}Sqft</span></p>
                                </div>
                                {{-- <h4 class="mb-4">Specifications</h4>
									<div class="row">
										<div class="col-xl-12 col-md-12">
											<div class="table-responsive">
												<table class="table table-bordered border-top mb-0">
													<tbody>
														<tr>
															<td>Type</td>
															<td><span class="font-weight-bold">2BHK Flat</span></td>
														</tr>
														<tr>
															<td>Listed By </td>
															<td><span class="font-weight-bold">Owner</span></td>
														</tr>
														<tr>
															<td>BedRooms </td>
															<td><span class="font-weight-bold">2</span></td>
														</tr>
														<tr>
															<td>BathRooms</td>
															<td><span class="font-weight-bold">2</span></td>
														</tr>
														<tr>
															<td>Furnishing</td>
															<td><span class="font-weight-bold">Unfurnished</span></td>
														</tr>
														<tr>
															<td>Car Parking</td>
															<td><span class="font-weight-bold">2</span></td>
														</tr>
														<tr>
															<td>Total Foolrs</td>
															<td><span class="font-weight-bold">2</span></td>
														</tr>
														<tr>
															<td>Facing </td>
															<td><span class="font-weight-bold">East face</span></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div> --}}
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered border-top mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>BedRooms</td>
                                                        <td><i class="fa fa-check-circle text-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>BathRooms</td>
                                                        <td><i class="fa fa-check-circle text-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Car Parking</td>
                                                        <td><i class="fa fa-check-circle text-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Furnishing</td>
                                                        <td><i class="fa fa-times-circle text-danger"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Facing</td>
                                                        <td><i class="fa fa-check-circle text-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lift</td>
                                                        <td><i class="fa fa-check-circle text-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Swimming fool</td>
                                                        <td><i class="fa fa-check-circle text-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Security</td>
                                                        <td><i class="fa fa-times-circle text-danger"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered border-top mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>Type</td>
                                                        <td><span class="font-weight-bold">2BHK Flat</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bathrooms</td>
                                                        <td><span class="font-weight-bold">2</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Carpet Area</td>
                                                        <td><span class="font-weight-bold">1278 fts</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Facing</td>
                                                        <td><span class="font-weight-bold">East Face</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bed Rooms</td>
                                                        <td><span class="font-weight-bold">2</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Furnishing</td>
                                                        <td><span class="font-weight-bold">Unfurnished</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Balcony</td>
                                                        <td><span class="font-weight-bold">2</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lift</td>
                                                        <td><span class="font-weight-bold">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Swimming pool</td>
                                                        <td><span class="font-weight-bold">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Garden</td>
                                                        <td><span class="font-weight-bold">Yes</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <ul class="list-unstyled video-list-thumbs row ">
                                    <li class="mb-0">
                                        <a data-bs-toggle="modal" data-bs-target="#homeVideo">
                                            <img src="../assets/images/products/products/h1.jpg" alt="Barca"
                                                class="img-responsive">
                                            <span class="mdi mdi-arrow-right-drop-circle-outline text-white"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="py-4 px-5 border border-top-0 border-bottom-0 bg-white">
                            <div class="list-id">
                                <div class="row">
                                    <div class="col">
                                        <a class="mb-0">Classified ID : #8256358</a>
                                    </div>
                                    <div class="col col-auto">
                                        Posted By <a class="mb-0 font-weight-bold">Individual</a> / 21st Dec 2019
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="card-footer bg-white details-tab border">
                            <div class="icons">
                                <a href="javascript:void(0);" class="btn btn-info icons"><i
                                        class="icon icon-share me-1"></i> Share Ad</a>
                                {{-- <a href="javascript:void(0);" class="btn btn-primary icons"><i
                                        class="icon icon-heart  me-1"></i> 678</a>
                                <a href="javascript:void(0);" class="btn btn-secondary icons"><i
                                        class="icon icon-printer  me-1"></i> Print</a> --}}
                            </div>
                        </div>
                    </div>

                    {{-- <h3 class="mb-5 mt-4">Related Posts</h3> --}}



                    <div class="card mb-lg-0">
                        <div class="card-header">
                            <h3 class="card-title">Leave a reply</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name1" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Comment"></textarea>
                                </div>
                                <a href="javascript:void(0);" class="btn btn-primary">Send Reply</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Right Side Content-->
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h3 class="card-title">Posted By</h3>
                        </div> --}}
                        {{-- <div class="card-body  item-user">
                            <div class="profile-pic mb-0">
                                <img src="../assets/images/faces/male/25.jpg" class="brround avatar-xxl" alt="user">
                                <div class="">
                                    <a href="userprofile2.html" class="text-dark">
                                        <h4 class="mt-3 mb-1 font-weight-semibold">Robert McLean</h4>
                                    </a>
                                    <p class="mb-0">RealEstate Agent</p>
                                    <span class="text-muted">Member Since November 2008</span>
                                    <h6 class="mt-2 mb-0"><a href="userprofile2.html" class="btn btn-primary btn-sm">See
                                            All Ads</a></h6>
                                </div>
                            </div>
                        </div> --}}
                        <div class="card-body item-user">
                            <h4 class="mb-4">Contact Info</h4>
                            {{-- <div>
                                <h6><span class="font-weight-semibold"><i class="fa fa-map-marker me-2 mb-2"></i></span><a
                                        href="javascript:void(0);" class="text-body"> 7981 Aspen Ave. Hammonton, USA</a>
                                </h6>
                                <h6><span class="font-weight-semibold"><i class="fa fa-envelope me-2 mb-2"></i></span><a
                                        href="javascript:void(0);" class="text-body"> robert123@gmail.com</a></h6>
                                <h6><span class="font-weight-semibold"><i class="fa fa-phone me-2  mb-2"></i></span><a
                                        href="javascript:void(0);" class="text-body"> 0-235-657-24587</a></h6>
                                <h6><span class="font-weight-semibold"><i class="fa fa-link me-2 "></i></span><a
                                        href="javascript:void(0);" class="text-body">http://spruko.com/</a></h6>
                            </div> --}}
                            <div class=" item-user-icons mt-4">
                                <a href="https://www.facebook.com/" class="facebook-bg mt-0"><i
                                        class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.google.com/" class="google-bg"><i class="fa fa-google"></i></a>
                                <a href="https://dribbble.com/" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-start">
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $prototype->whatsapp_number) }}"
                                    class="btn btn-success" target="_blank">
                                    <i class="fa fa-whatsapp"></i> Chat
                                </a>
								<a href="tel:+{{ preg_replace('/[^0-9]/', '', $prototype->phone_number) }}" class="btn btn-primary">
									<i class="fa fa-phone"></i> Call
								</a>
                                {{-- <a href="{{ $prototype->phone_number }}" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#contact"><i class="fa fa-user"></i> Contact Me</a> --}}
                                <a href="javascript:void(0);" class="btn  btn-info"><i class="fa fa-share"></i> Share</a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Keywords</h3>
                        </div>
                        <div class="card-body product-filter-desc">
                            <div class="product-tags clearfix">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li><a href="javascript:void(0);">Real estate</a></li>
                                    <li><a href="javascript:void(0);">2BHK</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Shares</h3>
                        </div>
                        <div class="card-body product-filter-desc">
                            <div class="product-filter-icons text-center">
                                <a href="javascript:void(0);" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                <a href="javascript:void(0);" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="javascript:void(0);" class="google-bg"><i class="fa fa-google"></i></a>
                                <a href="javascript:void(0);" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
                                <a href="javascript:void(0);" class="pinterest-bg"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Latest Seller Ads</h3>
                        </div>
                        <div class="card-body pb-3">
                            <div class="rated-products">
                                <ul class="vertical-scroll">
                                    <li class="item">
                                        <div class="media m-0 mt-0 p-5">
                                            <img class="me-4" src="../assets/images/products/toys.png" alt="img">
                                            <div class="media-body">
                                                <h4 class="mt-2 mb-1">Apartment</h4>
                                                <span class="rated-products-ratings">
                                                    <i class="fa fa-star text-warning"> </i>
                                                    <i class="fa fa-star text-warning"> </i>
                                                    <i class="fa fa-star text-warning"> </i>
                                                    <i class="fa fa-star text-warning"> </i>
                                                    <i class="fa fa-star text-warning"> </i>
                                                </span>
                                                <div class="h5 mb-0 font-weight-semibold mt-1">$17 - $29</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="media p-5 mt-0">
                                            <img class="me-4" src="../assets/images/products/1.png" alt="img">
                                            <div class="media-body">
                                                <h4 class="mt-2 mb-1">Modren Apartment</h4>
                                                <span class="rated-products-ratings">
                                                    <i class="fa fa-star text-warning"> </i>
                                                    <i class="fa fa-star text-warning"> </i>
                                                    <i class="fa fa-star text-warning"> </i>
                                                    <i class="fa fa-star text-warning"> </i>
                                                    <i class="fa fa-star-o text-warning"> </i>
                                                </span>
                                                <div class="h5 mb-0 font-weight-semibold mt-1">$22 - $45</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="media p-5 mt-0">
                                            <img class=" me-4" src="../assets/images/products/4.png" alt="img">
                                            <div class="media-body">
                                                <h4 class="mt-2 mb-1">3BHK Flat</h4>
                                                <span class="rated-products-ratings">
                                                    <i class="fa fa-star text-warning"> </i>
                                                    <i class="fa fa-star text-warning"> </i>
                                                    <i class="fa fa-star text-warning"> </i>
                                                    <i class="fa fa-star text-warning"> </i>
                                                    <i class="fa fa-star-half-o text-warning"> </i>
                                                </span>
                                                <div class="h5 mb-0 font-weight-semibold mt-1">$35 - $72</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="media p-5 mt-0">
                                            <img class=" me-4" src="../assets/images/products/6.png" alt="img">
                                            <div class="media-body">
                                                <h4 class="mt-2 mb-1">2BHK Flat</h4>
                                                <span class="rated-products-ratings">
                                                    <i class="fa fa-star text-warning"> </i>
                                                    <i class="fa fa-star text-warning"> </i>
                                                    <i class="fa fa-star text-warning"> </i>
                                                    <i class="fa fa-star-half-o text-warning"> </i>
                                                    <i class="fa fa-star-o text-warning"> </i>
                                                </span>
                                                <div class="h5 mb-0 font-weight-semibold mt-1">$12 - $21</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="media  mb-0 p-5 mt-0">
                                            <img class=" me-4" src="../assets/images/products/8.png" alt="img">
                                            <div class="media-body">
                                                <h4 class="mt-2 mb-1">Luxury House</h4>
                                                <span class="rated-products-ratings">
                                                    <i class="fa fa-star text-warning"> </i>
                                                    <i class="fa fa-star text-warning"> </i>
                                                    <i class="fa fa-star text-warning"> </i>
                                                    <i class="fa fa-star-o text-warning"> </i>
                                                    <i class="fa fa-star-o text-warning"> </i>
                                                </span>
                                                <div class="h5 mb-0 font-weight-semibold mt-1">$89 - $97</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Map location</h3>
                        </div>
                        <div class="card-body">
                            <div class="map-header">
                                <div class="map-header-layer" id="map2"></div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Search Ads</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="text2"
                                    placeholder="What are you looking for?">
                            </div>
                            <div class="form-group">
                                <select name="country" id="select-countries"
                                    class="form-control form-select select2-show-search">
                                    <option value="1" selected>All Categories</option>
                                    <option value="2">RealEstate</option>
                                    <option value="3">Apartments</option>
                                    <option value="4">3BHK Flat</option>
                                    <option value="5">Homes</option>
                                    <option value="6">Luxury Rooms</option>
                                    <option value="7">Deluxe Houses</option>
                                    <option value="8">Duplex House</option>
                                    <option value="9">Luxury Rooms</option>
                                    <option value="10">2BHk Homes</option>
                                    <option value="11">Apartments</option>
                                    <option value="12">Duplex Houses</option>
                                    <option value="13">3BHK Flatss</option>
                                    <option value="14">2BHK Flats</option>
                                    <option value="15">Modren Houses</option>
                                </select>
                            </div>
                            <div class="">
                                <a href="javascript:void(0);" class="btn  btn-primary">Search</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Popular Tags</h3>
                        </div>
                        <div class="card-body">
                            <div class="product-tags clearfix">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="javascript:void(0);">RealEstate</a></li>
                                    <li><a href="javascript:void(0);">Homes</a></li>
                                    <li><a href="javascript:void(0);">3BHK Flatss</a></li>
                                    <li><a href="javascript:void(0);">2BHK Homes</a></li>
                                    <li><a href="javascript:void(0);">Luxury Rooms</a></li>
                                    <li><a href="javascript:void(0);">Apartments</a></li>
                                    <li><a href="javascript:void(0);">3BHK Flatss</a></li>
                                    <li><a href="javascript:void(0);">Homes</a></li>
                                    <li><a href="javascript:void(0);">Luxury House For Sale</a></li>
                                    <li><a href="javascript:void(0);">Apartments</a></li>
                                    <li><a href="javascript:void(0);" class="mb-0">Luxury Rooms</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Latest Properties</h3>
                        </div>
                        <div class="card-body pb-3">
                            <ul class="vertical-scroll">
                                <li class="news-item">
                                    <table>
                                        <tr>
                                            <td><img src="../assets/images/products/1.png" alt="img"
                                                    class="w-8 border" /></td>
                                            <td class="ps-4">
                                                <h5 class="mb-1 ">Best New Model Houses</h5><a href="javascript:void(0);"
                                                    class="btn-link">View Details</a><span
                                                    class="float-end font-weight-bold">$17</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="news-item">
                                    <table>
                                        <tr>
                                            <td><img src="../assets/images/products/2.png" alt="img"
                                                    class="w-8 border" /></td>
                                            <td class="ps-4">
                                                <h5 class="mb-1 ">Trending New Model Houses</h5><a
                                                    href="javascript:void(0);" class="btn-link">View Details</a><span
                                                    class="float-end font-weight-bold">$17</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="news-item">
                                    <table>
                                        <tr>
                                            <td><img src="../assets/images/products/3.png" alt="img"
                                                    class="w-8 border" /></td>
                                            <td class="ps-4">
                                                <h5 class="mb-1 ">Best New Model Houses</h5><a href="javascript:void(0);"
                                                    class="btn-link">View Details</a><span
                                                    class="float-end font-weight-bold">$17</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="news-item">
                                    <table>
                                        <tr>
                                            <td><img src="../assets/images/products/4.png" alt="img"
                                                    class="w-8 border" /></td>
                                            <td class="ps-4">
                                                <h5 class="mb-1 ">Trending New Model Houses</h5><a
                                                    href="javascript:void(0);" class="btn-link">View Details</a><span
                                                    class="float-end font-weight-bold">$17</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="news-item">
                                    <table>
                                        <tr>
                                            <td><img src="../assets/images/products/5.png" alt="img"
                                                    class="w-8 border" /></td>
                                            <td class="ps-4">
                                                <h5 class="mb-1 ">Best New Model Houses</h5><a href="javascript:void(0);"
                                                    class="btn-link">View Details</a><span
                                                    class="float-end font-weight-bold">$17</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="news-item">
                                    <table>
                                        <tr>
                                            <td><img src="../assets/images/products/6.png" alt="img"
                                                    class="w-8 border" /></td>
                                            <td class="ps-4">
                                                <h5 class="mb-1 ">Duplex House</h5><a href="javascript:void(0);"
                                                    class="btn-link">View Details</a><span
                                                    class="float-end font-weight-bold">$17</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="news-item">
                                    <table>
                                        <tr>
                                            <td><img src="../assets/images/products/7.png" alt="img"
                                                    class="w-8 border" /></td>
                                            <td class="ps-4">
                                                <h5 class="mb-1 ">Modren Flats</h5><a href="javascript:void(0);"
                                                    class="btn-link">View Details</a><span
                                                    class="float-end font-weight-bold">$17</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
                <!--/Right Side Content-->
            </div>
        </div>
    </section>
@endsection
