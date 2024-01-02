<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <meta name="description" content="POS - Bootstrap Admin Template" />
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive" />
    <meta name="author" content="Dreamguys - Bootstrap Admin Template" />
    <meta name="robots" content="noindex, nofollow" />
    <title>User</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.jpg" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}" />

    {{-- <link rel="stylesheet" href="{{ asset('assets/js/dataTables.bootstrap4.min.js')}}" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css')}}">


    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <style>
    .library-info-container {
        background-color: orange;
        padding: 10%;
        border-radius: 10px;
        }

    .library-title {
    font-size: 36px;
    color: #ffffff; /* Warna teks putih */
    margin-bottom: 20px;    
    }
    </style>
</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"></div>
    </div>

    <div class="main-wrapper">
        {{-- Header --}}
        <div class="header">
            <div class="header-left active">
                <a href="index.html" class="logo">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="" />
                </a>
                <a href="index.html" class="logo-small">
                    <img src="{{ asset('assets/img/logo-small.png') }}" alt="" />
                </a>
                <a id="toggle_btn" href="javascript:void(0);"> </a>
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
                                    <span><img src="{{ asset('assets/img/icons/closes.svg') }}" alt="img" /></span>
                                </div>
                            </div>
                            <a class="btn" id="searchdiv"><img src="{{ asset('assets/img/icons/search.svg') }}" alt="img" /></a>
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
                        <span class="user-img"><i class="me-2" data-feather="user"></i>
                            <span class="status online"></span></span>
                    </a>
                    {{-- dop --}}
                    <div class="dropdown-menu menu-drop-user">
                        <div class="profilename">
                            <div class="profileset">
                                <span class="user-img"><i class="me-2" data-feather="user"></i>
                                    <span class="status online"></span></span>
                                <div class="profilesets">
                                    <h6>User</h6>
                                </div>
                            </div>
                            <hr class="m-0" />
                    
                            @if (Route::has('login'))
                                @auth
                                    <a class="dropdown-item" href="{{ url('/home') }}">Home</a>
                                @else
                                    <a class="dropdown-item" href="{{ route('login') }}">Log in</a>
                    
                                    @if (Route::has('register'))
                                        <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            @endif
                    
                            <hr class="m-0" />

                            <hr class="m-0" />
                            
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <img src="{{ asset('assets/img/icons/log-out.svg') }}" class="me-2" alt="img" />
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="dropdown-item logout pb-0">
                                @csrf
                            </form>
                        </div>
                    </div>
                    
                    {{-- /dop --}}
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

        {{-- Content --}}
            <div class="content mt-5">
                <div class="row">
                    <div class="col-lg-7 col-sm-12 col-12 d-flex">
                        <img src="{{ asset('assets/img/perpustakaan.jpg') }}" width="100%" alt="">
                    </div>
                    <div class="col-lg-5 col-sm-12 col-12 d-flex">
                        <div class="library-info-container ms-2">
                            <div class="library-info">
                                <h2 class="library-title mt-5">Selamat Datang di Perpustakaan Digital</h2>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        {{-- /Content --}}
        
    </div>

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('assets/js/feather.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>

