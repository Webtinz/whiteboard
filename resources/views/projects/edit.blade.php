<!doctype html>
<html lang="en">

    
<!-- Mirrored from preview.pichforest.com/probic/layouts/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2024 11:26:14 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Basic Elements | Probic - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Pichforest" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
        
        <link href="{{ asset('assets/libs/prismjs/themes/prism.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/prismjs/plugins/toolbar/prism-toolbar.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/prismjs/plugins/line-numbers/prism-line-numbers.css')}}" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

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

                        <div class="dropdown d-none d-lg-block ms-2">
                            <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="false"
                                aria-expanded="false">
                                <span>Components</span>
                                <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-xl p-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a class="dropdown-item" href="ui-alerts.html">Alerts</a>
                                        <a class="dropdown-item" href="ui-buttons.html">Buttons</a>
                                        <a class="dropdown-item" href="ui-cards.html">Cards</a>
                                        <a class="dropdown-item" href="ui-dropdowns.html">Dropdowns</a>
                                        <a class="dropdown-item" href="#!">Lightbox</a>
                                        <a class="dropdown-item" href="ui-modals.html">Modals</a>
                                        <a class="dropdown-item" href="#!">Range Slider</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="dropdown-item" href="ui-progressbars.html">Progress Bars</a>
                                        <a class="dropdown-item" href="#!">Sweet-Alert</a>
                                        <a class="dropdown-item" href="ui-tabs-accordions.html">Tabs & Accordions</a>
                                        <a class="dropdown-item" href="ui-typography.html">Typography</a>
                                        <a class="dropdown-item" href="#!">General</a>
                                        <a class="dropdown-item" href="#!">Rating</a>
                                        <a class="dropdown-item" href="#!">Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown dropdown-mega d-none d-lg-block">
                            <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="false"
                                aria-expanded="false">
                                <span>Categories</span>
                                <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu p-2 dropdown-megamenu">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="font-size-14 mx-4 mt-2">Computers & Accessories</h5>
                                        <a class="dropdown-item" href="#!">Laptops &amp; Tablets</a>
                                        <a class="dropdown-item" href="#!">Desktop Computers</a>
                                        <a class="dropdown-item" href="#!">Networking Products (NAS)</a>
                                        <a class="dropdown-item" href="#!">Monitors</a>
                                        <a class="dropdown-item" href="#!">Bags, Cases &amp; Sleeves</a>
                                        <a class="dropdown-item" href="#!">Batteries</a>
                                        <a class="dropdown-item" href="#!">Charges &amp; Adapters</a>
                                    </div>
                                    <div class="col">
                                        <h5 class="font-size-14 ms-4 mt-2">Smartphones & Tablets</h5>
                                        <a class="dropdown-item" href="#!">Apple iPhone</a>
                                        <a class="dropdown-item" href="#!">Android Smartphones</a>
                                        <a class="dropdown-item" href="#!">Phablets</a>
                                        <a class="dropdown-item" href="#!">Apple iPad</a>
                                        <a class="dropdown-item" href="#!">Android Tablets</a>
                                        <a class="dropdown-item" href="#!">Tablets with Keyboard</a>
                                    </div>
                                    <div class="col">
                                        <h5 class="font-size-14 ms-4 mt-2">Television & Video</h5>
                                        <a class="dropdown-item" href="#!">TV Sets</a>
                                        <a class="dropdown-item" href="#!">Home Theater Systems</a>
                                        <a class="dropdown-item" href="#!">DVD Players & Recorders</a>
                                        <a class="dropdown-item" href="#!">DVD-VCR Combos</a>
                                        <a class="dropdown-item" href="#!">Projectors</a>
                                        <a class="dropdown-item" href="#!">Projection Screens</a>
                                        <a class="dropdown-item" href="#!">Satelite Television</a>
                                    </div>
                                    <div class="col">
                                        <h5 class="font-size-14 ms-4 mt-2">Cameras, Photo & Video</h5>
                                        <a class="dropdown-item" href="#!">Point & Shoot Digital Cameras</a>
                                        <a class="dropdown-item" href="#!">DSLR Cameras</a>
                                        <a class="dropdown-item" href="#!">Mirrorless Cameras</a>
                                        <a class="dropdown-item" href="#!">Body Mounted Cameras</a>
                                        <a class="dropdown-item" href="#!">Camera Lenses</a>
                                        <a class="dropdown-item" href="#!">Video Studio</a>
                                    </div>
                                    <div class="col">
                                        <div class="py-lg-2 pr-lg-2">
                                            <img src="assets/images/illustrator/1.png" alt="" class="img-fluid mx-auto"
                                                style="max-height: 250px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="icon-sm" data-feather="search"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                                <form class="p-2">
                                    <div class="search-box">
                                        <div class="position-relative">
                                            <input type="text" class="form-control rounded bg-light border-0"
                                                placeholder="Search...">
                                            <i class="mdi mdi-magnify search-icon"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block language-switch">
                            <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <img id="header-lang-img" src="assets/images/flags/us.jpg" alt="Header Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
                                    <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span
                                        class="align-middle">English</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span
                                        class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span
                                        class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span
                                        class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span
                                        class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block">
                            <button type="button" class="btn header-item noti-icon" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="icon-sm" data-feather="grid"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                                <div class="p-3 border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="m-0 font-size-15"> Web Apps </h5>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small fw-semibold text-decoration-underline"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 270px;">
                                    <a class="notification-item text-reset" href="#!">
                                        <div class="d-flex border-bottom align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/brands/slack.png" alt="slack">
                                            </div>
                                            <div class="flex-grow-1 ms-4">
                                                <h6 class="mb-0">Slack</h6>
                                                <p class="font-size-12 text-muted mb-0">This is your moment. Let’s reinvent work.
                                                </p>
                                            </div>
                                        </div>
                                    </a><!-- end dropdown item -->
                                    <a class="notification-item text-reset" href="#!">
                                        <div class="d-flex border-bottom align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/brands/behance.png" alt="behance">
                                            </div>
                                            <div class="flex-grow-1 ms-4">
                                                <h6 class="mb-0">Behance <span class="badge bg-warning badge-pill ml-1">Free</span>
                                                </h6>
                                                <p class="font-size-12 text-muted mb-0">Showcase your work.</p>
                                            </div>
                                        </div>
                                    </a><!-- end dropdown item -->
                                    <a class="notification-item text-reset" href="#!">
                                        <div class="d-flex border-bottom align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                            </div>
                                            <div class="flex-grow-1 ms-4">
                                                <h6 class="mb-0">Dribbble</h6>
                                                <p class="font-size-12 text-muted mb-0">Dribbble is the world’s leading community
                                                    for creatives to share, grow, and get hired.</p>
                                            </div>
                                        </div>
                                    </a><!-- end dropdown item -->
                                    <a class="notification-item text-reset" href="#!">
                                        <div class="d-flex border-bottom align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                            </div>
                                            <div class="flex-grow-1 ms-4">
                                                <h6 class="mb-0">Dropbox</h6>
                                                <p class="font-size-12 text-muted mb-0">Keep life organized and work moving—all in
                                                    one place</p>
                                            </div>
                                        </div>
                                    </a><!-- end dropdown item -->
                                    <a class="notification-item text-reset" href="#!">
                                        <div class="d-flex border-bottom align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                            </div>
                                            <div class="flex-grow-1 ms-4">
                                                <h6 class="mb-0">Mail Chimp <span
                                                        class="badge bg-danger badge-pill ml-1">Premium</span></h6>
                                                <p class="font-size-12 text-muted mb-0">The best value for your digital marketing
                                                    budget</p>
                                            </div>
                                        </div>
                                    </a><!-- end dropdown item -->
                                    <a class="notification-item text-reset" href="#!">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/brands/github.png" alt="github">
                                            </div>
                                            <div class="flex-grow-1 ms-4">
                                                <h6 class="mb-0">Github</h6>
                                                <p class="font-size-12 text-muted mb-0">Where the world builds software</p>
                                            </div>
                                        </div>
                                    </a><!-- end dropdown item -->
                                </div><!-- end simplebar -->
                            </div>
                        </div>

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
                                    <h6 class="dropdown-header bg-light">New</h6>
                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex border-bottom align-items-start">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-sm"
                                                    alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Justin Verduzco</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1 font-size-13">Your task changed an issue from "In Progress" to
                                                        <span class="badge badge-soft-success">Review</span>
                                                    </p>
                                                    <p class="mb-0 font-size-10 text-uppercase fw-bold"><i
                                                            class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex border-bottom align-items-start">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm me-3">
                                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                        <i class="uil-shopping-basket"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">New order has been placed</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1 font-size-13">Open the order confirmation or shipment confirmation.</p>
                                                    <p class="mb-0 font-size-10 text-uppercase fw-bold"><i
                                                            class="mdi mdi-clock-outline"></i> 5 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <h6 class="dropdown-header bg-light">Earlier</h6>
                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex border-bottom align-items-start">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm me-3">
                                                    <span
                                                        class="avatar-title bg-soft-success text-success rounded-circle font-size-16">
                                                        <i class="uil-truck"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1 font-size-13">Here is somthing that you might light like to know.
                                                    </p>
                                                    <p class="mb-0 font-size-10 text-uppercase fw-bold"><i
                                                            class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex border-bottom align-items-start">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-4.jpg" class="me-3 rounded-circle avatar-sm"
                                                    alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1 font-size-13">Yay ! Everything worked!</p>
                                                    <p class="mb-0 font-size-10 text-uppercase fw-bold"><i
                                                            class="mdi mdi-clock-outline"></i> 3 days ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
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
                                <a class="dropdown-item" href="user-profile.html"><i
                                        class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span
                                        class="align-middle">Profile</span></a>
                                <a class="dropdown-item" href="apps-chat.html"><i
                                        class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-1"></i> <span
                                        class="align-middle">Messages</span></a>
                                <a class="dropdown-item" href="index-2.html"><i
                                        class="mdi mdi-calendar-check-outline text-muted font-size-16 align-middle me-1"></i> <span
                                        class="align-middle">Taskboard</span></a>
                                <a class="dropdown-item" href="user-profile.html"><i
                                        class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i> <span
                                        class="align-middle">Help</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="user-profile.html"><i
                                        class="mdi mdi-wallet text-muted font-size-16 align-middle me-1"></i> <span
                                        class="align-middle">Balance : <b>$6951.02</b></span></a>
                                <a class="dropdown-item d-flex align-items-center" href="project-file-manager.html"><i
                                        class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i> <span
                                        class="align-middle">Settings</span><span
                                        class="badge badge-soft-success ms-auto">New</span></a>
                                <a class="dropdown-item" href="javascript: void(0);"><i
                                        class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i> <span
                                        class="align-middle">Lock screen</span></a>
                                <a class="dropdown-item" href="auth-signout.html"><i
                                        class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i> <span
                                        class="align-middle">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
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

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">

                            <li class="menu-title" data-key="t-applications">Applications</li>

                            <li>
                                <a href="index-2.html">
                                    <i class="icon nav-icon" data-feather="trello"></i>
                                    <span class="menu-item" data-key="t-kanban-board">Kanban Board</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="icon nav-icon" data-feather="users"></i>
                                    <span class="menu-item" data-key="t-team-overview">Team Overview</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="team-projects.html" data-key="t-projects">Projects</a></li>
                                    <li><a href="team-employee.html" data-key="t-employee">Employee</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="icon nav-icon" data-feather="briefcase"></i>
                                    <span class="menu-item" data-key="t-contacts">Projects</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="project-tasks-list.html" data-key="t-task-list">Task List</a></li>
                                    <li><a href="project-file-manager.html" data-key="t-file-manager">File Manager</a></li>
                                    <li><a href="project-activity.html" data-key="t-activity">Activity</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="apps-chat.html">
                                    <i class="icon nav-icon" data-feather="message-square"></i>
                                    <span class="menu-item" data-key="t-chat">Chat</span>
                                </a>
                            </li>

                            <li>
                                <a href="user-profile.html">
                                    <i class="icon nav-icon" data-feather="user"></i>
                                    <span class="menu-item" data-key="t-profile">Profile</span>
                                </a>
                            </li>

                            <li class="menu-title" data-key="t-pages">Pages</li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-feather="user-check"></i>
                                    <span class="menu-item" data-key="t-authentication">Authentication</span>
                                    <span class="badge rounded-pill bg-info">9</span>
                                </a>

                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="auth-singin.html" data-key="t-signin">Signin</a></li>
                                    <li><a href="auth-signup.html" data-key="t-sign-up">Sign Up</a></li>
                                    <li><a href="auth-signout.html" data-key="t-sign-out">Sign Out</a></li>
                                    <li><a href="auth-forgot-password.html" data-key="t-forgot-password">Forgot Password</a></li>
                                    <li><a href="auth-reset-password.html" data-key="t-reset-password">Reset Password</a></li>
                                    <li><a href="auth-email-verification.html" data-key="t-email-verification">Email Verification</a></li>
                                    <li><a href="auth-2step-verification.html" data-key="t-2step-verification">2 Step Verification</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="icon nav-icon" data-feather="file-text"></i>
                                    <span class="menu-item" data-key="t-utility">Utility</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-starter.html" data-key="t-starter-page">Starter Page</a></li>
                                    <li><a href="error-404-1.html" data-key="400-error">400 Error</a></li>
                                    <li><a href="error-404-2.html" data-key="400-error-1">401 Error</a></li>
                                    <li><a href="error-500-1.html" data-key="500-error">500 Error</a></li>
                                    <li><a href="error-500-2.html" data-key="500-error-1">501 Error</a></li>
                                </ul>
                            </li>

                            <li class="menu-title" data-key="t-components">Components</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="icon nav-icon" data-feather="package"></i>
                                    <span class="menu-item" data-key="t-ui-elements">UI Elements</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ui-alerts.html" data-key="t-alerts">Alerts</a></li>
                                    <li><a href="ui-buttons.html" data-key="t-buttons">Buttons</a></li>
                                    <li><a href="ui-badges.html" data-key="t-badges">Badges</a></li>
                                    <li><a href="ui-cards.html" data-key="t-cards">Cards</a></li>
                                    <li><a href="ui-carousel.html" data-key="t-carousel">Carousel</a></li>
                                    <li><a href="ui-dropdowns.html" data-key="t-dropdowns">Dropdowns</a></li>
                                    <li><a href="ui-grid.html" data-key="t-grid">Grid</a></li>
                                    <li><a href="ui-images.html" data-key="t-images">Images</a></li>
                                    <li><a href="ui-modals.html" data-key="t-modals">Modals</a></li>
                                    <li><a href="ui-offcanvas.html" data-key="t-offcanvas">Offcanvas</a></li>
                                    <li><a href="ui-placeholders.html" data-key="t-placeholders">Placeholders</a></li>
                                    <li><a href="ui-progressbars.html" data-key="t-progress-bars">Progress Bars</a></li>
                                    <li><a href="ui-pagination.html" data-key="t-pagination">Pagination</a></li>
                                    <li><a href="ui-tabs-accordions.html" data-key="t-tabs-accordions">Tabs & Accordions</a></li>
                                    <li><a href="ui-tooltips-popovers.html" data-key="t-tooltips-popovers">Tooltips & Popovers</a></li>
                                    <li><a href="ui-typography.html" data-key="t-typography">Typography</a></li>
                                    <li><a href="ui-spinner.html" data-key="t-spinner">Spinner</a></li>
                                    <li><a href="ui-video.html" data-key="t-video">Video</a></li>
                                    <li><a href="ui-colors.html" data-key="t-colors">Colors</a></li>
                                    <li><a href="ui-utilities.html" data-key="t-utilities">Utilities</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="form-elements.html">
                                    <i class="icon nav-icon" data-feather="edit-3"></i>
                                    <span class="menu-item" data-key="t-forms">Forms</span>
                                </a>
                            </li>

                            <li>
                                <a href="tables-basic.html">
                                    <i class="icon nav-icon" data-feather="database"></i>
                                    <span class="menu-item" data-key="t-tables">Tables</span>
                                </a>
                            </li>
                
                            <li>
                                <a href="charts-apex.html">
                                    <i class="icon nav-icon" data-feather="bar-chart-2"></i>
                                    <span class="menu-item" data-key="t-apexcharts">Apex Charts</span>
                                </a>
                            </li>

                            <li>
                                <a href="icons-feathericons.html">
                                    <i class="icon nav-icon" data-feather="archive"></i>
                                    <span class="menu-item" data-key="t-feather-icons">Feather Icons</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="icon nav-icon" data-feather="share-2"></i>
                                    <span class="menu-item" data-key="t-multi-level">Multi Level</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);" data-key="t-level-1.1">Level 1.1</a></li>
                                    <li><a href="javascript: void(0);" class="has-arrow" data-key="t-level-1.2">Level 1.2</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);" data-key="t-level-2.1">Level 2.1</a></li>
                                            <li><a href="javascript: void(0);" data-key="t-level-2.2">Level 2.2</a></li>
                                        </ul>
                                    </li>
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
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Edit Project</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <form action="{{ route('projects.update', $project->id) }}" method="POST">
                                                    @csrf
                                                    @method("PUT")
                                                    <div class="mb-3 row">
                                                        <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="text" name="name" value="{{$project->name}}" id="example-text-input">
                                                        </div>
                                                    </div><!-- end row -->
                                                    <div class="mb-3 row">
                                                        <label for="example-text-input" class="col-md-2 col-form-label">Description</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="text" name="description" value="{{$project->description}}" id="example-text-input">
                                                        </div>
                                                    </div><!-- end row -->
                                                    <div class="mb-3 mb-lg-0 row">
                                                        <label for="example-datetime-local-input" class="col-md-2 col-form-label">Date and time</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="date" name="deadline" value="{{$project->deadline}}" id="example-datetime-local-input">
                                                        </div>
                                                    </div><!-- end row -->
                                                    <div class="row mb-3">
                                                        <label class="col-md-2 col-form-label">Select</label>
                                                        <div class="col-md-10">
                                                            <select class="form-select" name="status">
                                                                @if ($project->status == "Completed")
                                                                    <option value="Completed" selected>Completed</option>
                                                                    @else
                                                                        <option value="Completed">Completed</option>
                                                                @endif
                                                                @if ($project->status == "Progress")
                                                                    <option value="Progress" selected>Progress</option>
                                                                    @else
                                                                        <option value="Progress" >Progress</option>
                                                                @endif
                                                                @if ($project->status == "Pending")
                                                                    <option value="Pending" selected>Pending</option>
                                                                    @else
                                                                        <option value="Pending">Pending</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div><!-- end row -->
                                                    
                                                    <button type="submit" class="btn btn-soft-primary" >Update Project</button>
                                                </form>
                                        </div><!-- end row -->

                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Probic.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://pichforest.com/" target="_blank" class="text-reset">Pichforest</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
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


        <!-- Bootstrap JS -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Metismenu Js -->
        <script src="assets/libs/metismenujs/metismenujs.min.js"></script>

        <!-- Simplebar Js -->
        <script src="assets/libs/simplebar/simplebar.min.js"></script>

        <!-- Feather Js -->
        <script src="assets/libs/feather-icons/feather.min.js"></script>


        <!-- prismjs plugin -->
        <script src="assets/libs/prismjs/prism.js"></script>

        <script src="assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>

        <script src="assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>

        <!-- Custom js -->
        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from preview.pichforest.com/probic/layouts/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2024 11:26:14 GMT -->
</html>
