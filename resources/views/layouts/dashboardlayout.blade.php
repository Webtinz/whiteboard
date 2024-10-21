<!doctype html>
<html lang="en">


<!-- Mirrored from preview.pichforest.com/probic/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2024 11:25:50 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Kanban Board | Probic - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Pichforest" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/glightbox/css/glightbox.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
        
    <link href="{{ asset('assets/libs/prismjs/themes/prism.css' )}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/prismjs/plugins/toolbar/prism-toolbar.css' )}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/prismjs/plugins/line-numbers/prism-line-numbers.css' )}}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css' )}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css' )}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css' )}}" id="app-style" rel="stylesheet" type="text/css" />

    {{-- <style>
       #layout-wrapper .nav-icon{
         width:17px !important;
         height:17px !important;
       }
    </style> --}}

    @yield('links')

</head>


<body data-sidebar="dark">

<!-- <body data-layout="horizontal" data-topbar="colored"> -->

<!-- Begin page -->
<div id="layout-wrapper">


    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index-2.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-light-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="22">
                        </span>
                    </a>

                    <a href="index-2.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-light-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="22">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
            </div>

            <div class="d-flex">
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-sm" data-feather="bell"></i>
                        <span class="noti-dot bg-danger"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                        aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="m-0 font-size-15"> Notifications </h5>
                                </div>
                                <div class="col-auto">
                                    <a href="#!" class="small"> Mark all as read</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 250px;">
                        </div>
                        <div class="p-2 border-top d-grid">
                            <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                <i class="uil-arrow-circle-right me-1"></i> <span>View More..</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon right-bar-toggle" id="right-bar-toggle">
                        <i class="icon-sm" data-feather="settings"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item user text-start d-flex align-items-center"
                        id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-10.jpg"
                            alt="Header Avatar">
                        <span class="ms-2 d-none d-sm-block user-item-desc">
                            <span class="user-name">Jansh Wells</span>
                            <span class="user-sub-title">Administrator</span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end pt-0">
                        <div class="p-3 bg-primary border-bottom">
                            <h6 class="mb-0 text-white">Jansh Wells</h6>
                            <p class="mb-0 font-size-11 text-white-50 fw-semibold">Janshwells@probic.com</p>
                        </div>
                        <a> <span class="align-middle">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
        
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </span>
                        </a> 
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <!-- LOGO -->
        <div class="navbar-brand-box" style="background-image: linear-gradient(45deg, #009EC5 0%, #2e7eed 20%, #02225B 50%)">
            <a href="index-2.html" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo-dark.png" alt="" height="22">
                </span>
            </a>

            <a href="index-2.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="assets/images/logo-light-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo-light.png" alt="" height="22">
                </span>
                <span class="logo-lg-brand">
                    <img src="assets/images/logo-brand-light.png" alt="" height="22">
                </span>
            </a>
        </div>

        <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
            <i class="fa fa-fw fa-bars"></i>
        </button>

        <div data-simplebar class="sidebar-menu-scroll"  style="background-color:#02225B">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">

                    <li>
                        <a href="{{route('kanbanboard' )}}">
                            <i class="icon nav-icon" data-feather="trello"></i>
                            <span class="menu-item" data-key="t-kanban-board">Kanban Board</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('posts.index')}}">
                            <i class="icon nav-icon" data-feather="briefcase"></i>
                            <span class="menu-item" data-key="t-contacts">Posts</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('projects.index')}}">
                            <i class="icon nav-icon" data-feather="briefcase"></i>
                            <span class="menu-item" data-key="t-contacts">Projects</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('task' )}}">
                            <i class="icon nav-icon" data-feather="message-square"></i>
                            <span class="menu-item" data-key="t-chat">Tasks</span>
                        </a>
                    </li>

                    <li>
                        <a href="apps-chat.html">
                            <i class="icon nav-icon" data-feather="message-square"></i>
                            <span class="menu-item" data-key="t-chat">Files</span>
                        </a>
                    </li>

                    <li>
                        <a href="apps-chat.html">
                            <i class="icon nav-icon" data-feather="message-square"></i>
                            <span class="menu-item" data-key="t-chat">Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('conversations' )}}">
                            <i class="icon nav-icon" data-feather="message-square"></i>
                            <span class="menu-item" data-key="t-chat">Chat</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('activityzone' )}}">
                            <i class="icon nav-icon" data-feather="message-square"></i>
                            <span class="menu-item" data-key="t-chat">Activity Zone</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i class="icon nav-icon" data-feather="users"></i>
                            <span class="menu-item" data-key="t-team-overview">Team Overview</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('allemployee' )}}" data-key="t-employee">Employee</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    @yield('content')
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title d-flex align-items-center bg-dark p-3">

            <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

            <a href="javascript:void(0);" class="right-bar-toggle ms-auto" id="right-bar-toggle">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>

        <!-- Settings -->
        <hr class="m-0" />

        <div class="p-4">

            <h6 class="mt-4 mb-3">Layout Mode</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-mode"
                    id="layout-mode-light" value="light">
                <label class="form-check-label" for="layout-mode-light">Light</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-mode"
                    id="layout-mode-dark" value="dark">
                <label class="form-check-label" for="layout-mode-dark">Dark</label>
            </div>

            <h6 class="mt-4 mb-3">Layout Width</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-width"
                    id="layout-width-fluid" value="fluid" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                <label class="form-check-label" for="layout-width-fluid">Fluid</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-width"
                    id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                <label class="form-check-label" for="layout-width-boxed">Boxed</label>
            </div>

            <h6 class="mt-4 mb-3">Layout Position</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-position"
                    id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                <label class="form-check-label" for="layout-position-fixed">Fixed</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-position"
                    id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
            </div>

            <h6 class="mt-4 mb-3">Topbar Color</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="topbar-color"
                    id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                <label class="form-check-label" for="topbar-color-light">Light</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="topbar-color"
                    id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                <label class="form-check-label" for="topbar-color-dark">Dark</label>
            </div>

            <div id="sidebar-setting">
            <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Size</h6>

            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-size"
                    id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                <label class="form-check-label" for="sidebar-size-default">Default</label>
            </div>
            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-size"
                    id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                <label class="form-check-label" for="sidebar-size-compact">Compact</label>
            </div>
            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-size"
                    id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
            </div>

            <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Color</h6>

            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-color"
                    id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                <label class="form-check-label" for="sidebar-color-light">Light</label>
            </div>
            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-color"
                    id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                <label class="form-check-label" for="sidebar-color-dark">Dark</label>
            </div>
            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-color"
                    id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                <label class="form-check-label" for="sidebar-color-brand">Brand</label>
            </div>
        </div>

            <h6 class="mt-4 mb-3">Direction</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-direction"
                    id="layout-direction-ltr" value="ltr">
                <label class="form-check-label" for="layout-direction-ltr">LTR</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-direction"
                    id="layout-direction-rtl" value="rtl">
                <label class="form-check-label" for="layout-direction-rtl">RTL</label>
            </div>

        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
@yield('js')
@if (request()->url() != route('conversations'))
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js' )}}"></script>

    <!-- Metismenu Js -->
    <script src="{{ asset('assets/libs/metismenujs/metismenujs.min.js' )}}"></script>

    <!-- Simplebar Js -->
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js' )}}"></script>

    <!-- Feather Js -->
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js' )}}"></script>


    <!-- prismjs plugin -->
    <script src="{{ asset('assets/libs/prismjs/prism.js' )}}"></script>

    <script src="{{ asset('assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js' )}}"></script>

    <script src="{{ asset('assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js' )}}"></script>

    <!-- Custom js -->
    <script src="{{ asset('assets/js/app.js' )}}"></script>    
@endif

</body>


<!-- Mirrored from preview.pichforest.com/probic/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2024 11:25:51 GMT -->
</html>
