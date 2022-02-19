<head>
    <link rel="shortcut icon" href="{{ asset('images/d-logo.png') }}">
    <title>Admin | Dashboard</title>
    <meta content='maximum-scale=1.0, initial-scale=1.0, width=device-width' name='viewport'>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
    table td {
        line-height: 20px !important;
    }

    @-ms-viewport {
        width: device-width;
    }

    .badge-notify {
        position: relative;
        top: -20px;
        border-radius: 50px;
        left: -25px;
    }

    .gradient-border {
        --borderWidth: 3px;
        /* background: #1D1F20; */
        position: relative;
        border-radius: var(--borderWidth);
    }

    .gradient-border:after {
        content: '';
        position: absolute;
        top: calc(-1 * var(--borderWidth));
        left: calc(-1 * var(--borderWidth));
        height: calc(100% + var(--borderWidth) * 2);
        width: calc(100% + var(--borderWidth) * 2);
        background: linear-gradient(60deg, #f79533, #f37055, #ef4e7b, #a166ab, #5073b8, #1098ad, #07b39b, #6fba82);
        border-radius: calc(2 * var(--borderWidth));
        z-index: -1;
        animation: animatedgradient 3s ease alternate infinite;
        background-size: 300% 300%;
    }


    @keyframes animatedgradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .dynamic-cards {
        transition: all 0.5s ease;

        transform-style: preserve-3d;
        /* border-radius: 32px; */
        box-shadow:
            1px 1px 0 1px #f9f9fb,
            -1px 0 28px 0 rgba(34, 33, 81, 0.01),
            28px 28px 28px 0 rgba(34, 33, 81, 0.25);
        transition:
            .4s ease-in-out transform,
            .4s ease-in-out box-shadow;
    }

    .dynamic-cards:hover {
        transform: scale(1.1);
        box-shadow:
            1px 1px 0 1px #f9f9fb,
            -1px 0 28px 0 rgba(34, 33, 81, 0.01),
            28px 28px 28px 0 rgba(34, 33, 81, 0.25);
    }

</style>



<div data-active-color="white" data-background-color="black"
    data-image="{{ asset('app-assets/img/sidebar-bg/01.jpg') }}" class="app-sidebar">
    <!-- main menu header-->
    <!-- Sidebar Header starts-->
    <div class="sidebar-header">
        <div class="logo clearfix"><a href="/" class="logo-text float-left">
                <div class="logo-img"><img src="{{ asset('images/d-logo.png') }}" width="25" height="25" /></div>
                <span class="text">Home Services</span>
            </a>
            <a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i
                    data-toggle="expanded" class="toggle-icon ft-toggle-right"></i></a><a id="sidebarClose"
                href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i
                    class="ft-x"></i></a>
        </div>
    </div>
    <!-- Sidebar Header Ends-->
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="sidebar-content">
        <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" data-scroll-to-active="true"
                class="navigation navigation-main">
                <li class=" nav-item"><a href="{{ route('admin.dashboard') }}"><i
                            class="ft-home"></i><span data-i18n="" class="menu-title">Dashboard</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('admin.profile') }}"><i class="ft-user mr-2"></i><span
                            data-i18n="" class="menu-title">
                            Profile</span></a>
                </li>

                <li class=" nav-item"><a href="{{ route('admin.service_provider') }}"><i
                            class="
                fa fa-users mr-2"></i><span data-i18n=""
                            class="menu-title">Service Provider</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('admin.users') }}"><i class="ft-users mr-2"></i><span
                            data-i18n="" class="menu-title">
                            Users</span></a></li>
                <li class=" nav-item"><a href="{{ route('admin.service_categories') }}"><i
                            class="
                ft-briefcase mr-2"></i><span data-i18n=""
                            class="menu-title">Service Categories</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('admin.all_services') }}"><i
                            class="
                    ft-grid mr-2"></i><span data-i18n="" class="menu-title">All
                            Services
                        </span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('admin.contacts') }}">

                        <i class="fa fa-envelope-open"></i><span data-i18n="" class="menu-title">All
                            Queries</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('admin.changepassword') }}">

                        <i class="fa fa-key"></i><span data-i18n="" class="menu-title">Change
                            Password</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="ft-power mr-2"></i><span data-i18n="" class="menu-title">Logout</span></a>
                </li>
                </li>
            </ul>
        </div>
    </div>
    @if (Route::has('login'))
        @auth
            @if (Auth::user()->u_type === 'ADM')
                <li class="login-form"><a href="#" title="Register">My Account( Admin )</a>
                    <ul class="drop-down one-column hover-fade">
                        <li><a href="{{ route('admin.dashboard') }}">Dasboard</a></li>
                        <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    </ul>
                </li>
            @elseif(Auth::user()->u_type === 'SPV')
                <li class="login-form"><a href="#" title="Register">My Account(S Provider)</a>
                    <ul class="drop-down one-column hover-fade">
                        <li><a href="{{ route('sprovider.dashboard') }}">Dasboard</a></li>
                        <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    </ul>
                </li>
            @else
                <li class="login-form"><a href="" title="Register">My Account( Costumer )</a>
                    <ul class="drop-down one-column hover-fade">
                        <li><a href="{{ route('costumer.dashboard') }}">Dasboard</a></li>
                        <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    </ul>
                </li>
            @endif
            <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none">
                @csrf
            </form>
        @else
        @endif
        @endif
        <!-- main menu content-->
        <div class="sidebar-background"></div>
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
    </div>
    <!-- / main menu-->
    <!-- Navbar (Header) Starts-->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded header-navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span
                        class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span></button><span
                    class="d-lg-none navbar-right navbar-collapse-toggle"><a aria-controls="navbarSupportedContent"
                        href="javascript:;" class="open-navbar-container black"><i class="ft-more-vertical"></i></a></span>
                <form role="search" class="navbar-form navbar-right mt-1">
                    <div class="position-relative has-icon-right">
                        <input type="text" placeholder="Search" class="form-control round" />
                        <div class="form-control-position"><i class="ft-search"></i></div>
                    </div>
                </form>
            </div>
            <div class="navbar-container">
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item  d-none d-lg-block"><a href="{{ route('admin.contacts') }}"
                                class="nav-link "> <span id="group">
                                    <button type="button" class="btn btn-info ">
                                        <i class="fa fa-envelope"></i>
                                    </button>

                                </span>
                            </a></li>
                        <li class="nav-item mr-2 d-none d-lg-block"><a id="navbar-fullscreen" href="javascript:;"
                                class="nav-link apptogglefullscreen"><i
                                    class="ft-maximize font-medium-3 blue-grey darken-4"></i>
                                <p class="d-none">fullscreen</p>
                            </a></li>

                        <li class="dropdown nav-item"><a id="dropdownBasic3" href="#" data-toggle="dropdown"
                                class="nav-link position-relative dropdown-toggle"><i
                                    class="ft-user font-medium-3 blue-grey darken-4"></i>
                                <p class="d-none">User Settings</p>
                            </a>
                            <div ngbdropdownmenu="" aria-labelledby="dropdownBasic3"
                                class="dropdown-menu text-left dropdown-menu-right">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="dropdown-item"><i class="ft-power mr-2"></i><span>Logout</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar (Header) Ends-->
