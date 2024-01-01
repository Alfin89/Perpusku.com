<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->


        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    </head>
    <body class="">
        <div class="header">
            <div class="header-left active">
                <a href="index.html" class="logo">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="" />
                </a>
                <a href="index.html" class="logo-small">
                    <img src="{{ asset('assets/img/logo-small.png') }}" alt="" />
                </a>
                <a id="toggle_btn" href=""> </a>
            </div>
        
            <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
        
            <ul class="nav user-menu">
                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                        </a>
                        <form action="#">
                            <div class="searchinputs">
                                <input type="text" placeholder="Search Here ..." />
                                <div class="search-addon">
                                    <span>Menu</span>
                                </div>
                            </div>
                            <a class="btn" id="searchdiv"><img src="{{ asset('assets/img/icons/search.svg') }}" alt="img" />Menu</a>
                        </form>
                    </div>
                </li>
        
                <li class="nav-item dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <img src="{{ asset('assets/img/icons/notification-bing.svg') }}" alt="img" />
                        <span class="badge rounded-pill">4</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti">
                                Clear All
                            </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{ asset('assets/img/profiles/avatar-02.jpg') }}"  />
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">John Doe</span>
                                                    added new task
                                                    <span class="noti-title">Patient appointment
                                                        booking</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
        
                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                        <span class="user-img"><img src="{{ asset('assets/img/profiles/avator1.jpg') }}" alt="" class="border border-2 border-black" />
                            <span class="status online"></span></span>
                    </a>
                    <div class="dropdown-menu menu-drop-user">
                        <div class="profilename">
                            <div class="profileset">
                                <span class="user-img"><img src="{{ asset('assets/img/profiles/avator1.jpg') }}" alt="" />
                                    <span class="status online"></span></span>
                                <div class="profilesets">
                                    <h6>John Doe</h6>
                                    <h5>Admin</h5>
                                </div>
                            </div>
                            <hr class="m-0" />
                            <a class="dropdown-item" href="profile.html">
                                <i class="me-2" data-feather="user"></i> My
                                Profile</a>
                            <a class="dropdown-item" href="generalsettings.html"><i class="me-2"
                                    data-feather="settings"></i>Settings</a>
                            <hr class="m-0" />
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                             <img src="{{ asset('assets/img/icons/log-out.svg') }}" class="me-2" alt="img" />
                                                {{ __('Logout') }}
                                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="dropdown-item logout pb-0" >
                                @csrf
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        
            <div class="dropdown mobile-user-menu">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="generalsettings.html">Settings</a>
                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>

        {{-- book --}}
        
        <div class="page-wrapper ms-0">
            <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 tabs_wrapper">
                        <div class="page-header container">
                            <div class="page-title">
                                <h4>Silahkan dibaca</h4>
                                <h6>Budayakan membaca buku</h6>
                            </div>
                        </div>
                        <div class="container">
                            <div class="tab_content active" data-tab="fruits">
                                <div class="row ">
                                    <div class="col-lg-3 col-sm-6 d-flex ">
                                        <div class="productset flex-fill active">
                                            <div class="productsetimg">
                                                <img src="assets/img/product/product29.jpg" alt="img">
                                                <h6>Qty: 5.00</h6>
                                                <div class="check-product">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="productsetcontent">
                                                <h5>Fruits</h5>
                                                <h4>Orange</h4>
                                                <h6>150.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 d-flex ">
                                        <div class="productset flex-fill">
                                            <div class="productsetimg">
                                                <img src="assets/img/product/product31.jpg" alt="img">
                                                <h6>Qty: 1.00</h6>
                                                <div class="check-product">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="productsetcontent">
                                                <h5>Fruits</h5>
                                                <h4>Strawberry</h4>
                                                <h6>15.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 d-flex ">
                                        <div class="productset flex-fill">
                                            <div class="productsetimg">
                                                <img src="assets/img/product/product35.jpg" alt="img">
                                                <h6>Qty: 5.00</h6>
                                                <div class="check-product">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="productsetcontent">
                                                <h5>Fruits</h5>
                                                <h4>Banana</h4>
                                                <h6>150.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 d-flex ">
                                        <div class="productset flex-fill">
                                            <div class="productsetimg">
                                                <img src="assets/img/product/product37.jpg" alt="img">
                                                <h6>Qty: 5.00</h6>
                                                <div class="check-product">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="productsetcontent">
                                                <h5>Fruits</h5>
                                                <h4>Limon</h4>
                                                <h6>1500.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 d-flex ">
                                        <div class="productset flex-fill">
                                            <div class="productsetimg">
                                                <img src="assets/img/product/product54.jpg" alt="img">
                                                <h6>Qty: 5.00</h6>
                                                <div class="check-product">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="productsetcontent">
                                                <h5>Fruits</h5>
                                                <h4>Apple</h4>
                                                <h6>1500.00</h6>
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
        {{-- /book --}}





        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
        </div>
    </body>
</html>
