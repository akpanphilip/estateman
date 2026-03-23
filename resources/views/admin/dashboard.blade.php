@extends('layouts.app')

@section('content')
    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-bs-image-src="../assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="">My Dashboard</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">My Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Breadcrumb-->

    <!--User Dashboard-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-12 col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <h3 class="card-title">My Dashboard</h3>
                        </div>
                        <div class="card-body text-center item-user">
                            <div class="profile-pic">
                                <div class="profile-pic-img">
                                    <span class="bg-success dots" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="online"></span>
                                    <img src="../assets/images/faces/male/25.jpg" class="brround" alt="user">
                                </div>
                                <a href="userprofile.html" class="text-dark">
                                    <h4 class="mt-3 mb-0 font-weight-semibold">{{ auth()->user()->name }}</h4>
                                </a>
                            </div>
                        </div>
                        <aside class="doc-sidebar my-dash">
                            <div class="app-sidebar__user clearfix">
                                <ul class="side-menu">
                                    <li>
                                        <a class="side-menu__item" href="mydash.html"><i class="icon icon-user"></i><span
                                                class="side-menu__label ms-2">Edit Profile</span></a>
                                    </li>
                                    <li class="slide">
                                        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                                class="icon icon-heart"></i><span class="side-menu__label ms-2">My
                                                Favorite</span><i class="angle fa fa-angle-right"></i></a>
                                        <ul class="slide-menu">
                                            <li><a class="slide-item" href="myfavorite.html"><i
                                                        class="fa fa-angle-right me-2"></i>Favorite1</a></li>
                                            <li><a class="slide-item" href="javascript:void(0)"><i
                                                        class="fa fa-angle-right me-2"></i>Favorite2</a></li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                                class="icon icon-diamond"></i><span class="side-menu__label ms-2">My
                                                Ads</span><i class="angle fa fa-angle-right"></i></a>
                                        <ul class="slide-menu">
                                            <li><a class="slide-item" href="myads.html"><i
                                                        class="fa fa-angle-right me-2"></i>My-Ads 01</a></li>
                                            <li><a class="slide-item" href="javascript:void(0)"><i
                                                        class="fa fa-angle-right me-2"></i>My-Ads 02</a></li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                                class="icon icon-folder-alt"></i><span
                                                class="side-menu__label ms-2">Managed Ads</span><i
                                                class="angle fa fa-angle-right"></i></a>
                                        <ul class="slide-menu">
                                            <li><a class="slide-item" href="manged.html"><i
                                                        class="fa fa-angle-right me-2"></i></i>Managed Ads 01</a></li>
                                            <li><a class="slide-item" href="javascript:void(0)"><i
                                                        class="fa fa-angle-right me-2"></i></i>Managed Ads 02</a></li>
                                            <li class="sub-slide">
                                                <a class="side-menu__item border-top-0 slide-item"
                                                    href="javascript:void(0)" data-bs-toggle="sub-slide"><span
                                                        class="side-menu__label"><i
                                                            class="fa fa-angle-right me-2"></i>Managed Ads 03</span> <i
                                                        class="sub-angle fa fa-angle-right"></i></a>
                                                <ul class="child-sub-menu ">
                                                    <li><a class="slide-item" href="javascript:void(0)"><i
                                                                class="fa fa-angle-right me-2 text-muted"></i>Managed Ads
                                                            04</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="side-menu__item" href="payments.html"><i
                                                class="icon icon-credit-card"></i><span
                                                class="side-menu__label ms-2">Payments</span></a>
                                    </li>
                                    <li>
                                        <a class="side-menu__item" href="orders.html"><i
                                                class="icon icon-basket"></i><span
                                                class="side-menu__label ms-2">Orders</span></a>
                                    </li>
                                    <li>
                                        <a class="side-menu__item" href="tips.html"><i
                                                class="icon icon-game-controller"></i><span
                                                class="side-menu__label ms-2">Safety Tips</span></a>
                                    </li>
                                    <li>
                                        <a class="side-menu__item" href="settings.html"><i
                                                class="icon icon-settings"></i><span
                                                class="side-menu__label ms-2">Settings </span></a>
                                    </li>
                                    <li>
                                        <a class="side-menu__item" href="login.html"><i class="icon icon-power"></i><span
                                                class="side-menu__label ms-2">Logout</span></a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="card my-select">
                        <div class="card-header">
                            <h3 class="card-title">Search Ads</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="text"
                                    placeholder="What are you looking for?">
                            </div>
                            <div class="form-group">
                                <select name="country" id="select-countries"
                                    class="form-control form-select select2-show-search">
                                    <option value="1" selected="">All Categories</option>
                                    <option value="2">RealEstate</option>
                                    <option value="3">Apartments</option>
                                    <option value="4">3BHK Flat</option>
                                    <option value="5">Homes</option>
                                    <option value="6">Luxury Rooms</option>
                                    <option value="7">Deluxe Houses</option>
                                    <option value="8">Duplex House</option>
                                    <option value="9">Luxury Rooms</option>
                                    <option value="10">Pets &amp; Flats</option>
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
                    <div class="card mb-xl-0">
                        <div class="card-header">
                            <h3 class="card-title">Safety Tips For Buyers</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled widget-spec  mb-0">
                                <li class="">
                                    <i class="fa fa-check text-success" aria-hidden="true"></i> Meet Seller at public
                                    Place
                                </li>
                                <li class="">
                                    <i class="fa fa-check text-success" aria-hidden="true"></i> Check item before you buy
                                </li>
                                <li class="">
                                    <i class="fa fa-check text-success" aria-hidden="true"></i> Pay only after collecting
                                    item
                                </li>
                                <li class="ms-5 mb-0">
                                    <a href="tips.html"> View more..</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-12 col-md-12">
                    <div class="card mb-0">
                        <div class="card-header">
                            <h3 class="card-title">Edit Profile</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email address</label>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone Number</label>
                                        <input type="number" class="form-control" placeholder="Number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" placeholder="Home Address">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Postal Code</label>
                                        <input type="number" class="form-control" placeholder="ZIP Code">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="form-label">Country</label>
                                        <select
                                            class="form-control select2-show-search border-bottom-0 w-100 select2-show-search"
                                            data-placeholder="Select">
                                            <optgroup label="Categories">
                                                <option>--Select--</option>
                                                <option value="1">Germany</option>
                                                <option value="2">USA</option>
                                                <option value="3">Canada</option>
                                                <option value="4">Usa</option>
                                                <option value="5">Afghanistan</option>
                                                <option value="6">Albania</option>
                                                <option value="7">China</option>
                                                <option value="8">Denmark</option>
                                                <option value="9">Finland</option>
                                                <option value="10">India</option>
                                                <option value="11">Kiribati</option>
                                                <option value="12">Kuwait</option>
                                                <option value="13">Mexico</option>
                                                <option value="14">Pakistan</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Facebook</label>
                                        <input type="text" class="form-control"
                                            placeholder="https://www.facebook.com/">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Google</label>
                                        <input type="text" class="form-control" placeholder="https://www.google.com/">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Twitter</label>
                                        <input type="text" class="form-control" placeholder="https://twitter.com/">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Pinterest</label>
                                        <input type="text" class="form-control"
                                            placeholder="https://in.pinterest.com/">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">About Me</label>
                                        <textarea rows="5" class="form-control" placeholder="Enter About your description"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-file">
                                            <input type="file" class="form-control example-file-input-custom"
                                                name="example-file-input-custom">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Updated Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/User Dashboard-->
@endsection
