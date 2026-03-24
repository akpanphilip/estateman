 <div class="col-xl-3 col-lg-12 col-md-12">
     <div class="card overflow-hidden">
         <div class="card-header">
             <h3 class="card-title">My Dashboard</h3>
         </div>
         <div class="card-body text-center item-user">
             <div class="profile-pic">
                 <div class="profile-pic-img">
                     <span class="bg-success dots" data-bs-toggle="tooltip" data-bs-placement="top" title="online"></span>
                     <img src="{{ asset('assets/images/faces/male/25.jpg') }}" class="brround" alt="user">
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
                         <a class="side-menu__item" href="dashboard"><i class="icon icon-user"></i><span
                                 class="side-menu__label ms-2">Edit Profile</span></a>
                     </li>
                     <li class="slide">
                         <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                 class="icon icon-heart"></i><span class="side-menu__label ms-2">Developer</span><i
                                 class="angle fa fa-angle-right"></i></a>
                         <ul class="slide-menu">
                             <li><a class="slide-item" href="{{ route('admin.developers.create') }}"><i
                                         class="fa fa-angle-right me-2"></i>Add
                                     Developer</a></li>
                             <li><a class="slide-item" href="{{ route('admin.developers.index') }}"><i
                                         class="fa fa-angle-right me-2"></i>Manage Developer</a></li>
                         </ul>
                     </li>
                     <li class="slide">
                         <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                 class="icon icon-diamond"></i><span class="side-menu__label ms-2">Estate</span><i
                                 class="angle fa fa-angle-right"></i></a>
                         <ul class="slide-menu">
                             <li><a class="slide-item" href="{{ route('admin.estates.create') }}"><i
                                         class="fa fa-angle-right me-2"></i>Add
                                     Estate</a></li>
                             <li><a class="slide-item" href="{{ route('admin.estates.index') }}"><i
                                         class="fa fa-angle-right me-2"></i>Manage Estate</a></li>
                         </ul>
                     </li>
                     <li class="slide">
                         <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                 class="icon icon-folder-alt"></i><span class="side-menu__label ms-2">Prototype</span><i
                                 class="angle fa fa-angle-right"></i></a>
                         <ul class="slide-menu">
                             <li><a class="slide-item" href="{{ route('admin.prototypes.create') }}"><i
                                         class="fa fa-angle-right me-2"></i>Add
                                     Prototype</a></li>
                             <li><a class="slide-item" href="{{ route('admin.prototypes.index') }}"><i
                                         class="fa fa-angle-right me-2"></i>Manage Prototype</a></li>
                             {{-- <li class="sub-slide">
                                 <a class="side-menu__item border-top-0 slide-item" href="javascript:void(0)"
                                     data-bs-toggle="sub-slide"><span class="side-menu__label"><i
                                             class="fa fa-angle-right me-2"></i>Managed Ads 03</span> <i
                                         class="sub-angle fa fa-angle-right"></i></a>
                                 <ul class="child-sub-menu ">
                                     <li><a class="slide-item" href="javascript:void(0)"><i
                                                 class="fa fa-angle-right me-2 text-muted"></i>Managed Ads
                                             04</a></li>
                                 </ul>
                             </li> --}}
                         </ul>
                     </li>
                     <li class="slide">
                         <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                 class="icon icon-folder-alt"></i><span class="side-menu__label ms-2">Banner</span><i
                                 class="angle fa fa-angle-right"></i></a>
                         <ul class="slide-menu">
                             <li><a class="slide-item" href="{{ route('admin.banners.create') }}"><i
                                         class="fa fa-angle-right me-2"></i>Add
                                     Banner</a></li>
                             <li><a class="slide-item" href="{{ route('admin.banners.index') }}"><i
                                         class="fa fa-angle-right me-2"></i>Manage Banner</a></li>
                           
                         </ul>
                     </li>
                     <li>
                         <form method="POST" action="{{ route('logout') }}">
                             @csrf
                             <button type="submit" class="side-menu__item"
                                 style="background:none; border:none; width:100%; text-align:left; cursor:pointer;">
                                 <i class="icon icon-power"></i>
                                 <span class="side-menu__label ms-2">Logout</span>
                             </button>
                         </form>
                     </li>
                 </ul>
             </div>
         </aside>
     </div>

 </div>
