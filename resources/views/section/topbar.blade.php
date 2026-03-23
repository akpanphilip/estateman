 <!--Topbar-->
 <div class="header-main">
     <div class="top-bar">
         <div class="container">
             <div class="row">
                 <div class="col-xl-8 col-lg-8 col-sm-4 col-7">
                     <div class="top-bar-left d-flex">
                         <div class="clearfix">
                             <ul class="socials">
                                 <li>
                                     <a class="social-icon text-dark" href="javascript:void(0);"><i
                                             class="fa fa-facebook"></i></a>
                                 </li>
                                 <li>
                                     <a class="social-icon text-dark" href="javascript:void(0);"><i
                                             class="fa fa-twitter"></i></a>
                                 </li>
                                 <li>
                                     <a class="social-icon text-dark" href="javascript:void(0);"><i
                                             class="fa fa-linkedin"></i></a>
                                 </li>
                                 <li>
                                     <a class="social-icon text-dark" href="javascript:void(0);"><i
                                             class="fa fa-google-plus"></i></a>
                                 </li>
                             </ul>
                         </div>

                     </div>
                 </div>
                 <div class="col-xl-4 col-lg-4 col-sm-8 col-5">
                     <div class="top-bar-right">
                         <ul class="custom">
                             @guest
                                 <li>
                                     <a href="{{ route('login') }}" class="text-dark">
                                         <i class="fa fa-sign-in me-1"></i>
                                         <span>Login</span>
                                     </a>
                                 </li>
                             @endguest

                             @auth
                                 <li>
                                     <form method="POST" action="{{ route('logout') }}">
                                         @csrf
                                         <button type="submit" class="text-dark"
                                             style="background:none; border:none; cursor:pointer; padding:0;">
                                             <i class="fa fa-sign-out me-1"></i>
                                             <span>Logout</span>
                                         </button>
                                     </form>
                                 </li>

                                 <li class="dropdown">
                                     <a href="javascript:void(0);" class="text-dark" data-bs-toggle="dropdown">
                                         <i class="fa fa-home me-1"></i>
                                         <span> My Dashboard</span>
                                     </a>
                                     <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                         <a href="{{ route('admin.dashboard') }}" class="dropdown-item">
                                             <i class="dropdown-icon icon icon-user"></i> My Profile
                                         </a>
                                         <a href="{{ route('admin.dashboard') }}" class="dropdown-item">
                                             <i class="dropdown-icon icon icon-speech"></i> Ads
                                         </a>
                                         <a href="{{ route('admin.dashboard') }}" class="dropdown-item">
                                             <i class="dropdown-icon icon icon-bell"></i> Notifications
                                         </a>
                                         <a href="{{ route('admin.dashboard') }}" class="dropdown-item">
                                             <i class="dropdown-icon icon icon-settings"></i> Account Settings
                                         </a>
                                         <form method="POST" action="{{ route('logout') }}">
                                             @csrf
                                             <button type="submit" class="dropdown-item">
                                                 <i class="dropdown-icon icon icon-power"></i> Log out
                                             </button>
                                         </form>
                                     </div>
                                 </li>
                             @endauth
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>


     <!-- Duplex Houses Header -->
     <div class="sticky">
         <div class="horizontal-header clearfix ">
             <div class="container">
                 <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
                 <span class="smllogo">
                     <a href="/">
                         <img src="../assets/images/brand/logo.png" class="mobile-light-logo" width="120"
                             alt="" />
                         <img src="../assets/images/brand/logo.png" class="mobile-dark-logo" width="120"
                             alt="" />
                     </a>
                 </span>
                 <a href="tel:245-6325-3256" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
             </div>
         </div>
     </div>
     <!-- /Duplex Houses Header -->

     <div class="horizontal-main bg-dark-transparent clearfix">
         <div class="horizontal-mainwrapper container clearfix">
             <div class="desktoplogo">
                 <a href="/"><img src="{{ asset('assets/images/brand/logo.png') }}" alt=""></a>
             </div>
             <div class="desktoplogo-1">
                 <a href="/"><img src="{{ asset('assets/images/brand/logo.png') }}" alt=""></a>
             </div>
             <!--Nav-->
             <nav class="horizontalMenu clearfix d-md-flex">
                 <ul class="horizontalMenu-list">
                     <li aria-haspopup="true"><a href="/">Home</a></li>
                     <li aria-haspopup="true"><a href="about">About Us </a></li>
                     <li aria-haspopup="true"><a href="contact">Contact Us </a></li>

                     {{-- <li aria-haspopup="true" class="d-lg-none mt-5 pb-5 mt-lg-0">
                         <span><a class="btn btn-secondary" href="contact.html">Contact Us</a></span>
                     </li> --}}
                 </ul>
                 {{-- <ul class="mb-0">
                     <li aria-haspopup="true" class="mt-3 d-none d-lg-block top-postbtn">
                         <span><a class="btn btn-secondary ad-post " href="ad-posts.html">Post Property
                                 Ad</a></span>
                     </li>
                 </ul> --}}
             </nav>
             <!--Nav-->
         </div>
     </div>
 </div>
