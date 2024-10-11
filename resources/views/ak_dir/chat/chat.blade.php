
<!doctype html>
<html lang="en">


<!-- Mirrored from preview.pichforest.com/probic/layouts/apps-chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2024 11:26:03 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Chat | Probic - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Pichforest" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- lightbox css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/glightbox/css/glightbox.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

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
                            <img src="{{ asset('assets/images/logo-light-sm.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22">
                        </span>
                    </a>

                    <a href="index-2.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('assets/images/logo-light-sm.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="22">
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
                                    <img src="{{ asset('assets/images/illustrator/1.png') }}" alt="" class="img-fluid mx-auto"
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
                        <img id="header-lang-img" src="{{ asset('assets/images/flags/us.jpg') }}" alt="Header Language" height="16">
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
                            <img src="{{ asset('assets/images/flags/us.jpg') }}" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle">English</span>
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                            <img src="{{ asset('assets/images/flags/spain.jpg') }}" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle">Spanish</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                            <img src="{{ asset('assets/images/flags/germany.jpg') }}" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle">German</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                            <img src="{{ asset('assets/images/flags/italy.jpg') }}" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle">Italian</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                            <img src="{{ asset('assets/images/flags/russia.jpg') }}" alt="user-image" class="me-1" height="12"> <span
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
                                        <img src="{{ asset('assets/images/brands/slack.png') }}" alt="slack">
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
                                        <img src="{{ asset('assets/images/brands/behance.png') }}" alt="behance">
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
                                        <img src="{{ asset('assets/images/brands/dribbble.png') }}" alt="dribbble">
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
                                        <img src="{{ asset('assets/images/brands/dropbox.png') }}" alt="dropbox">
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
                                        <img src="{{ asset('assets/images/brands/mail_chimp.png') }}" alt="mail_chimp">
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
                                        <img src="{{ asset('assets/images/brands/github.png') }}" alt="github">
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
                                        <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" class="me-3 rounded-circle avatar-sm"
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
                                        <img src="{{ asset('assets/images/users/avatar-4.jpg') }}" class="me-3 rounded-circle avatar-sm"
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
                        <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/avatar-10.jpg') }}"
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
                    <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22">
                </span>
            </a>

            <a href="index-2.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="{{ asset('assets/images/logo-light-sm.png') }}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="22">
                </span>
                <span class="logo-lg-brand">
                    <img src="{{ asset('assets/images/logo-brand-light.png') }}" alt="" height="22">
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
                            <h4 class="mb-0">Chat</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active">Chat</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="d-lg-flex mb-4">
                    <div class="card border-end shadow-none rounded-0 chat-leftsidebar mb-0">
                        <div class="p-4 pb-0">
                            <div class="d-flex align-items-center">
                                <div class="d-inline-block position-relative flex-shrink-0">
                                    <div class="chat-user-img online">
                                        <img src="{{ asset('assets/images/users/avatar-10.jpg') }}"
                                            class="img-thumbnail avatar rounded-circle img-fluid" alt="">
                                        <span class="user-status"></span>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="font-size-16 mb-1">Jansh Wells</h5>
                                    <a href="javascript:void(0);" class="text-muted mb-0 font-size-13">Janshwells@probic.com</a>
                                </div>
                                <div class="dropdown">
                                    <a class="font-size-16 text-muted dropdown-toggle" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item text-muted fw-medium" href="#"><i
                                                class="mdi mdi-account-outline me-2"></i>Profile</a>
                                        <a class="dropdown-item text-muted fw-medium" href="#"><i
                                                class="mdi mdi-clipboard-edit-outline me-2"></i>Edit</a>
                                        <a class="dropdown-item text-muted fw-medium" href="#"><i
                                                class="mdi mdi-cog me-2"></i>Settings</a>
                                    </div>
                                </div>
                            </div>
                            <div class="search-box py-4">
                                <div class="position-relative">
                                    <input type="text" class="form-control rounded" id="search-chat" onkeyup="searchChat()" placeholder="Searchhhhhhhhhhhhhhhh...">
                                    <i class="bx bx-search-alt search-icon"></i>
                                </div>
                            </div><!-- end search box -->
                        </div><!-- end card body -->
                        <div class="pb-4" id="all-chat">
                            <div class="px-3" data-simplebar style="max-height: 564px;">
                                <div class="group-box chat-list-box">
                                    <div class="float-end">
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-transparent fs-5 rounded">
                                                <a href="#" class="text-secondary" data-bs-toggle="modal"
                                                    data-bs-target=".create-new-groups"><i class="mdi mdi-plus"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="text-uppercase font-size-13 mt-4 pt-2 mb-3">Groups</h6>
                                    <ul class="list-unstyled chat-list group-chat">
                                        @forelse ($groupConversations as $groupConversation)
                                            {{ $groupConversation }}
                                            <li>
                                                <a href="javascript: void(0);" class="fw-medium d-block">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title bg-light text-muted font-size-14 rounded-circle">
                                                                <i class="mdi mdi-lock"></i>
                                                            </span>
                                                        </div>
                                                        <div class="ms-3 chat-text">
                                                            Designer
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end li -->
                                            <li>
                                                <a href="javascript: void(0);" class="fw-medium d-block">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title bg-light text-muted font-size-16 rounded-circle">
                                                                <i class="mdi mdi-lock-open"></i>
                                                            </span>
                                                        </div>
                                                        <div class="ms-3 chat-text">
                                                            Random
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end li -->
                                        @empty
                                            <li>
                                                <a href="#" class="fw-medium d-block"  style="background: rgb(241, 180, 76) !important; color: #fff">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title bg-light text-muted font-size-16 rounded-circle">
                                                                <i class="mdi mdi-alert"></i>
                                                            </span>
                                                        </div>
                                                        <div class="ms-3 chat-text">
                                                            <span class="alert warning">No group yet</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end li -->                                            
                                        @endforelse
                                    </ul><!-- end ul -->
                                </div><!-- end -->

                                <div class="user-box chat-list-box">
                                    <div class="float-end">
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-transparent fs-5 text-secondary rounded">
                                                <a href="#" class="text-secondary" data-bs-toggle="modal"
                                                    data-bs-target=".direct-new-message"><i class="mdi mdi-plus"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="text-uppercase mt-4 pt-2 mb-3 font-size-12 text-muted">Direct message
                                    </h6>
                                    <ul class="list-unstyled chat-list mb-0 single-chat">
                                        @forelse ($directConversations as $directConversation)
                                        <li>
                                            <a href="javascript: void(0);" class="fw-medium d-block">
                                                <div class="d-flex align-items-center">
                                                    <div class="chat-user-img online flex-shrink-0">
                                                        <img src="{{ asset('assets/images/users/avatar-2.jpg') }}"
                                                            class="img-fluid avatar-sm rounded-circle" alt="">
                                                        <span class="user-status"></span>
                                                    </div>
                                                    <div class="ms-3 chat-text">
                                                        Denny Silva
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end li -->

                                        <li>
                                            <a href="javascript: void(0);" class="fw-medium d-block">
                                                <div class="d-flex align-items-center">
                                                    <div class="chat-user-img online">
                                                        <img src="{{ asset('assets/images/users/avatar-1.jpg') }}"
                                                            class="img-fluid avatar-sm rounded-circle" alt="">
                                                        <span class="user-status"></span>
                                                    </div>
                                                    <div class="ms-3 chat-text">
                                                        Jenny Morrow    
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end li -->
                                        @empty
                                            <li>
                                                <a href="#" class="fw-medium d-block"  style="background: rgb(241, 180, 76) !important; color: #fff">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title bg-light text-muted font-size-16 rounded-circle">
                                                                <i class="mdi mdi-alert"></i>
                                                            </span>
                                                        </div>
                                                        <div class="ms-3 chat-text">
                                                            <span class="alert warning">No chat yet</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end li -->                                            
                                        @endforelse
                                    </ul><!-- end ul -->
                                </div><!-- end -->
                            </div>
                        </div>
                    </div><!-- end card -->

                    <!-- Group Chat -->
                    <div id="group-chat-conversation" class="w-100 user-chat mt-4 mt-lg-0">
                        <div class="card rounded-0 shadow-none mb-0">
                            <div class="p-3 border-bottom">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-muted font-size-16 rounded-circle avatar-icon">
                                                    #
                                                </span>
                                            </div>
                                            <div class="ms-3">
                                                <h5 class="mb-0"><div class="chat-title-text">Welcome</div></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-7">
                                        <div class="d-flex flex-wrap justify-content-sm-end align-items-center mt-4 mt-md-0"
                                            data-bs-toggle="modal" data-bs-target=".groups-details">
                                            <div class="avatar-group">
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-inline-block"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Julia Halsey">
                                                        <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt=""
                                                            class="rounded-circle avatar-sm">
                                                    </a>
                                                </div>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-inline-block"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Mark Burke">
                                                        <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt=""
                                                            class="rounded-circle avatar-sm">
                                                    </a>
                                                </div>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-inline-block"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Siya Hudda">
                                                        <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" alt=""
                                                            class="rounded-circle avatar-sm">
                                                    </a>
                                                </div>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-inline-block"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Mary Evans">
                                                        <img src="{{ asset('assets/images/users/avatar-4.jpg') }}" alt=""
                                                            class="rounded-circle avatar-sm">
                                                    </a>
                                                </div>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-block"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Jansh Ott">
                                                        <div class="avatar-sm">
                                                            <div class="avatar-title rounded-circle bg-purple">
                                                                J
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-inline-block"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Max Cole">
                                                        <img src="{{ asset('assets/images/users/avatar-5.jpg') }}" alt=""
                                                            class="rounded-circle avatar-sm">
                                                    </a>
                                                </div>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);" class="d-inline-block"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Ayaan Curry">
                                                        <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt=""
                                                            class="rounded-circle avatar-sm">
                                                    </a>
                                                </div>
                                                <div class="avatar-group-item">
                                                    <a href="javascript: void(0);">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title rounded-circle bg-primary text-white">
                                                                +5
                                                            </span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div><!-- end avatar group -->
                                        </div><!-- end -->
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div>

                            <div>
                                <div class="chat-conversation py-3" id="chat-conversation" data-simplebar style="max-height: 602px;">
                                    <ul class="list-unstyled mb-0 px-3 chat-conversation-list" id="chat-conversation-list">
                                        <li class="chat-list">
                                            <div class="chat-day-title mt-2">
                                                <span class="title border rounded-pill">Thusday, 26th May</span>
                                            </div>
                                        </li><!-- end li -->

                                        <li class="chat-list">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-2.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex">
                                                            <div class="ctext-wrap">
                                                                <p class="mb-0"> Good morning</p>
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Denny Silva <small class="chat-time text-muted fw-medium">10:00 am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end conversation list -->
                                        </li><!-- end li -->

                                        <li class="chat-list">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-5.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex">
                                                            <div class="ctext-wrap">
                                                                <p class="mb-0"> Good morning everyone !</p>
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Ayaan Curry <small class="chat-time text-muted fw-medium">10:03 am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end conversation list -->
                                        </li><!-- end li -->

                                        <li class="chat-list">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-1.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex">
                                                            <div class="ctext-wrap">
                                                                <p class="mb-0">Good morning.. Have a nice day.</p>
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Siya Hudda <small class="chat-time text-muted fw-medium">10:05 am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end conversation list -->
                                        </li><!-- end li -->

                                        <li class="chat-list right">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-10.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex justify-content-end">
                                                            <div class="ctext-wrap">
                                                                <p class="mb-0">Good morning, How are you? What about our next meeting?</p>
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                                        <i class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                                        <i class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                                        <i class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                                        <i class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item" href="javascript: void(0);">
                                                                        <i class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Jansh Wells
                                                            <small class="chat-time text-muted fw-medium">10:08 am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end conversation list -->
                                        </li><!-- end li -->

                                        <li class="chat-list">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-2.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex">
                                                            <div class="ctext-wrap">
                                                                <p class="mb-0">Yeah.. I'm good & Next meeting tomorrow
                                                                    02.00 pm</p>
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Denny Silva <small
                                                                class="chat-time text-muted fw-medium">10:18 am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end conversation list -->
                                        </li><!-- end li -->

                                        <li class="chat-list">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-8.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex">
                                                            <div class="ctext-wrap">
                                                                <p class="mb-0">Okay !!</p>
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item"
                                                                        href="javascript: void(0);"><i class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Romi Miller <small class="chat-time text-muted fw-medium">10:09 am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end conversation list -->
                                        </li><!-- end li -->

                                        <li class="chat-list right">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-10.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex justify-content-end">
                                                            <div class="ctext-wrap">
                                                                <p class="mb-0">Okay.. Good</p>
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                                        <i class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                                        <i class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                                        <i class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                                        <i class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item" href="javascript: void(0);">
                                                                        <i class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Jansh Wells <small class="chat-time text-muted fw-medium">10:12 am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end conversation list -->
                                        </li><!-- end li -->

                                        <li class="chat-list">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-4.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex">
                                                            <div class="ctext-wrap">
                                                                <p class="mb-1">Yeah..</p>
                                                                <ul class="d-flex flex-wrap gap-2 list-inline message-img mb-0">
                                                                    <li class="list-inline-item message-img-list me-0">
                                                                        <div>
                                                                            <a href="{{ asset('assets/images/small/img-5.png') }}" class="thumb preview-thumb image-popup">
                                                                                <img src="{{ asset('assets/images/small/img-5.png') }}" class="img-fluid" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </li> <!-- end li -->
                                                                    <li class="list-inline-item message-img-list">
                                                                        <div>
                                                                            <a href="{{ asset('assets/images/small/img-7.png') }}" class="thumb preview-thumb image-popup">
                                                                                <img src="{{ asset('assets/images/small/img-7.png') }}" class="img-fluid" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </li><!-- end li -->
                                                                </ul><!-- end ul -->
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Mary Evans <small class="chat-time text-muted fw-medium">11:19 am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end conversation list -->
                                        </li><!-- end li -->

                                        <li class="chat-list">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-6.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex">
                                                            <div class="ctext-wrap">
                                                                <div class="card shadow-none p-2 mb-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm me-3 ms-0 flex-shrink-0">
                                                                            <div class="avatar-title bg-light text-muted rounded font-size-20">
                                                                                <i class="mdi mdi-file-document-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div class="text-start">
                                                                                <h5 class="font-size-14 mb-1">
                                                                                    document.zip</h5>
                                                                                <p class="text-muted font-size-13 mb-0">
                                                                                    5.9 MB</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ms-5">
                                                                            <a href="#" data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title="Download"><i
                                                                                    class="mdi mdi-download text-muted fs-5"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- end card -->
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Felix Handy<small class="chat-time text-muted fw-medium">11:48 am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end conversation list -->
                                        </li><!-- end li -->

                                        <li class="chat-list">
                                            <div class="chat-day-title">
                                                <span class="title border rounded-pill">Today</span>
                                            </div>
                                        </li><!-- end li -->

                                        <li class="chat-list right">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-10.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex justify-content-end">
                                                            <div class="ctext-wrap">
                                                                <p class="mb-0">Hello.. good morning</p>
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Jansh Wells<small class="chat-time text-muted fw-medium">08:16 am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end conversation list -->
                                        </li><!-- end li -->

                                        <li class="chat-list right">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-10.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex justify-content-end">
                                                            <div class="ctext-wrap">
                                                                <p class="mb-2">Projects information</p>
                                                                <div class="card shadow-none p-2 mb-1">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm me-3 ms-0 flex-shrink-0">
                                                                            <div class="avatar-title bg-light text-muted rounded font-size-20">
                                                                                <i class="mdi mdi-file-document-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div class="text-start">
                                                                                <h5 class="font-size-14 mb-1">document.zip</h5>
                                                                                <p class="text-muted font-size-13 mb-0">5.9 MB</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ms-5">
                                                                            <a href="#" data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title="Download">
                                                                                <i class="mdi mdi-download text-muted fs-5"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- end card -->
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                                        <i class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                                        <i class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                                        <i class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                                        <i class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item" href="javascript: void(0);">
                                                                        <i class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Jansh Wells
                                                            <small class="chat-time text-muted fw-medium">09:24 am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end conversation list -->
                                        </li><!-- end li -->

                                        <li class="chat-list">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-2.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex">
                                                            <div class="text-wrap">
                                                                <p class="mb-0">Very good morning</p>
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Denny Silva<small class="chat-time text-muted fw-medium">09:52 am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end conversation list -->
                                        </li><!-- end li -->

                                        <li class="chat-list">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-4.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex">
                                                            <div class="ctext-wrap">
                                                                <p class="mb-0">Hey ! How are you?</p>
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Mary Evans <small class="chat-time text-muted fw-medium">10:02 am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end conversation list -->
                                        </li><!-- end li -->
                                    </ul><!-- end ul -->
                                </div>

                                <div class="p-3 chat-input-section">
                                    <form class="chatinput-form" data-id="chat-conversation-list">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bx bx-plus fs-3"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                            <i class="mdi mdi-camera-outline me-2"></i>Camera</a>
                                                        <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                            <i class="mdi mdi-image-multiple-outline me-2"></i>Photos</a>
                                                        <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                            <i class="mdi mdi-map-marker-outline me-2"></i>Locations</a>
                                                        <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                            <i class="mdi mdi-file-document-outline me-2"></i>Documents</a>
                                                        <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                            <i class="mdi mdi-account-box-outline me-2"></i>Contact</a>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control chat-input task-comment" id="chat-input"
                                                        placeholder="Type your message here...">
                                                    <div class="chat-input-links" id="tooltip-container">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="javascript: void(0);" title="Emoji">
                                                                <i class="mdi mdi-emoticon-happy-outline"></i></a></li>
                                                        </ul><!-- end ul -->
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-auto">
                                                <div class="d-flex gap-3">
                                                    <i class="mdi mdi-microphone fs-3 text-muted align-middle"></i>
                                                    <button type="submit" class="btn btn-primary btn-rounded shadow-none chat-send">
                                                        <i class="mdi mdi-send send-task-comment"></i></button>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </form><!-- end form -->
                                </div>
                            </div>
                        </div>
                    </div><!-- end user chat -->

                    <!-- Direct Massage -->
                    <div id="user-chat-conversation" class="w-100 user-chat mt-4 mt-lg-0 d-none">
                        <div class="card rounded-0 shadow-none mb-0">
                            <div class="p-3 border-bottom">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/images/users/avatar-2.jpg') }}"
                                                class="avatar-sm rounded-circle img-fluid single-chat-img" alt="">
                                            <div class="ms-3">
                                                <h5 class="mb-0 single-chat-title">Denny Silva</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-7">
                                        <div class="d-flex flex-wrap gap-3 justify-content-sm-end align-items-center mt-4 mt-md-0">
                                            <div>
                                                <a href="#" class="text-muted" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title="" data-bs-original-title="voice call">
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title bg-light rounded-circle text-muted">
                                                            <i class="mdi mdi-phone"></i>
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="dropdown avatar-sm">
                                                <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="avatar-title rounded-circle bg-light text-muted">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </span>
                                                </a>

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <li class="chat-list"><a class="dropdown-item" href="#">Action</a></li>
                                                    <li class="chat-list"><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li class="chat-list"><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div>

                            <div>
                                <div class="chat-conversation py-3" data-simplebar style="max-height: 606px;" id="single-chat-conversation">
                                    <ul class="list-unstyled mb-0 px-3 single-chat-list" id="single-chat-list">
                                        <li class="chat-list">
                                            <div class="chat-day-title mt-2">
                                                <span class="title border rounded-pill">Thusday, 26th May</span>
                                            </div>
                                        </li><!-- end li -->
                                        <li class="chat-list left">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-2.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex">
                                                            <div class="ctext-wrap">
                                                                <p class="mb-0"> Hey.. Good morning </p>
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Denny Silva 
                                                            <small class="chat-time text-muted fw-medium">10:00 am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!-- end li -->
                                        <li class="chat-list right">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-10.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex justify-content-end">
                                                            <div class="ctext-wrap">
                                                                <p class="mb-0">Good morning, How are you? What about
                                                                    our next meeting?</p>
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-trash    -can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Jansh Wells <small class="chat-time text-muted fw-medium">10:05
                                                                am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!-- end li -->
                                        <li class="chat-list left">
                                            <div class="conversation-list">
                                                <div class="d-flex">                       
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-2.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex">
                                                            <div class="ctext-wrap">
                                                                <p class="mb-0">Yeah.. I'm fine & Next meeting tomorrow
                                                                    10.00AM</p>
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item"
                                                                        href="javascript: void(0);"><i class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Denny Silva <small class="chat-time text-muted fw-medium">10:09
                                                                am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!-- end li -->
                                        <li class="chat-list right">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-10.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex justify-content-end">
                                                            <div class="ctext-wrap">
                                                                <p class="mb-0">Okay.. Thank you !</p>
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Jansh Wells <small
                                                                class="chat-time text-muted fw-medium">10:09
                                                                am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!-- end li -->
                                        <li class="chat-list left">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-2.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex">
                                                            <div class="ctext-wrap">
                                                                <p class="mb-1">Yeah..</p>
                                                                <ul
                                                                    class="d-flex flex-wrap gap-2 list-inline message-img mb-0">
                                                                    <li class="list-inline-item message-img-list me-0">
                                                                        <div>
                                                                            <a href="{{ asset('assets/images/small/img-1.png') }}" class="thumb preview-thumb image-popup">
                                                                                <img src="{{ asset('assets/images/small/img-1.png') }}" class="img-fluid" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-inline-item message-img-list">
                                                                        <div>
                                                                            <a href="{{ asset('assets/images/small/img-2.png') }}" class="thumb preview-thumb image-popup">
                                                                                <img src="{{ asset('assets/images/small/img-2.png') }}" class="img-fluid" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);">
                                                                        <i class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);">
                                                                        <i class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);">
                                                                        <i class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);">
                                                                        <i class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item"
                                                                        href="javascript: void(0);">
                                                                        <i class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Denny Silva <small class="chat-time text-muted fw-medium">10:13 am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!-- end li -->
                                        <li class="chat-list left">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-2.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex">
                                                            <div class="ctext-wrap">
                                                                <div class="card shadow-none p-2 mb-1">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm me-3 ms-0 flex-shrink-0">
                                                                            <div class="avatar-title bg-light text-muted rounded font-size-20">
                                                                                <i class="mdi mdi-file-document-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div class="text-start">
                                                                                <h5 class="font-size-14 mb-1">
                                                                                    document.zip</h5>
                                                                                <p class="text-muted font-size-13 mb-0">
                                                                                    5.9 MB</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ms-5">
                                                                            <a href="#" data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                title="Download"><i
                                                                                    class="mdi mdi-download text-muted fs-5"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Denny Silva 
                                                            <small class="chat-time text-muted fw-medium">10:15 am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!-- end li -->
                                        <li class="chat-list left">
                                            <div class="chat-day-title">
                                                <span class="title border rounded-pill">Today</span>
                                            </div>
                                        </li><!-- end li -->
                                        <li class="chat-list right">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-10.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex justify-content-end">
                                                            <div class="ctext-wrap">
                                                                <p class="mb-0">Hello.. good morning</p>
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Jansh Wells <small
                                                                class="chat-time text-muted fw-medium">10:17
                                                                am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!-- end li -->
                                        <li class="chat-list right">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-10.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex justify-content-end">
                                                            <div class="ctext-wrap">
                                                                <p class="mb-2">Projects information</p>
                                                                <div class="card shadow-none p-2 mb-1">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar-sm me-3 ms-0 flex-shrink-0">
                                                                            <div class="avatar-title bg-light text-muted rounded font-size-20">
                                                                                <i class="mdi mdi-file-document-outline"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div class="text-start">
                                                                                <h5 class="font-size-14 mb-1">
                                                                                    document.zip</h5>
                                                                                <p class="text-muted font-size-13 mb-0">
                                                                                    5.9 MB</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ms-5">
                                                                            <a href="#" data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                title="Download"><i
                                                                                    class="mdi mdi-download text-muted fs-5"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Jansh Wells <small
                                                                class="chat-time text-muted fw-medium">10:25
                                                                am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!-- end li -->
                                        <li class="chat-list left">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-2.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex justify-content-end">
                                                            <div class="ctext-wrap">
                                                                <p class="mb-0">Very good morning</p>
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Denny Silva <small
                                                                class="chat-time text-muted fw-medium">11:38
                                                                am</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!-- end li -->
                                        <li class="chat-list right">
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <div class="chat-user">
                                                        <img src="{{ asset('assets/images/users/avatar-10.jpg') }}"
                                                            class="avatar-sm img-fluid rounded-circle" alt="">
                                                    </div><!-- end chat-user -->
                                                    <div class="flex-1 chat-arrow">
                                                        <div class="d-flex justify-content-end">
                                                            <div class="ctext-wrap">
                                                                <p class="mb-0">How are you dear?</p>
                                                            </div>
                                                            <div class="dropdown align-self-end">
                                                                <a class="dropdown-toggle" href="#" role="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-star-outline me-2"></i>Star</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-reply-all-outline me-2"></i>Reply</a>
                                                                    <a class="dropdown-item fw-medium text-muted"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-share-all-outline me-2"></i>Forward</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item fw-medium text-danger delete-chat-item"
                                                                        href="javascript: void(0);"><i
                                                                            class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="conversation-name fw-medium text-primary mb-2 mt-1">
                                                            Jansh Wells <small
                                                                class="chat-time text-muted fw-medium">02:23
                                                                pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!-- end li -->
                                    </ul><!-- end ul -->
                                </div>
                                <div class="p-3 chat-input-section">
                                    <form class="chatinput-form" data-id="single-chat-list">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bx bx-plus fs-3"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                            <i class="mdi mdi-camera-outline me-2"></i>Camera</a>
                                                        <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                            <i class="mdi mdi-image-multiple-outline me-2"></i>Photos</a>
                                                        <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                            <i class="mdi mdi-map-marker-outline me-2"></i>Locations</a>
                                                        <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                            <i class="mdi mdi-file-document-outline me-2"></i>Documents</a>
                                                        <a class="dropdown-item fw-medium text-muted" href="javascript: void(0);">
                                                            <i class="mdi mdi-account-box-outline me-2"></i>Contact</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="col">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control chat-input task-comment" id="single-chat-input"
                                                        placeholder="Type your message here...">
                                                    <div class="chat-input-links" id="tooltipContainer">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="javascript: void(0);" title="Emoji">
                                                                <i class="mdi mdi-emoticon-happy-outline"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-auto">
                                                <div class="d-flex gap-3">
                                                    <i class="mdi mdi-microphone fs-3 text-muted align-middle"></i>
                                                    <button type="submit" class="btn btn-primary btn-rounded shadow-none chat-send">
                                                        <i class="mdi mdi-send send-task-comment"></i></button>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </form><!-- end form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!-- Create groups Modal -->
        <div class="modal fade create-new-groups" tabindex="-1" role="dialog" aria-labelledby="createGroupModal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0">
                    <div class="modal-header bg-soft-primary">
                        <h5 class="modal-title font-size-16 text-primary" id="createGroupModal">Create Groups</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="mb-3">
                            <label for="GroupName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="GroupName" placeholder="Enter Name">
                        </div>
                        {{-- <div class="mb-3">
                            <label for="Groupdetails" class="form-label">Description</label>
                            <textarea type="text" class="form-control" rows="3" id="Groupdetails" placeholder="Enter Description"></textarea>
                        </div> --}}
                        <div class="form-check form-switch form-switch-md ps-0">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Make Private</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-soft-primary">Create Group</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Create Direct Mesaage Modal -->
        <div class="modal fade direct-new-message" tabindex="-1" role="dialog" aria-labelledby="createGroupModal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0">
                    <div class="modal-header bg-soft-primary">
                        <h5 class="modal-title font-size-16 text-primary" id="createGroupModal">All Direct Message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body p-0 py-3">
                        <div class="search-box py-2 px-4">
                            <div class="position-relative">
                                <input type="text" class="form-control rounded" placeholder="Search...">
                                <i class="bx bx-search-alt search-icon"></i>
                            </div>
                        </div>
                        <hr>
                        <div class="px-4" data-simplebar style="max-height: 300px;">
                            <div>
                                <h6 class="text-muted text-uppercase font-size-11">Today</h6>
                                <div class="card shadow-none rounded-3">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <img src="{{ asset('assets/images/users/avatar-10.jpg') }}" class="img-fluid avatar-sm rounded" alt="">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="font-size-14 mb-0">Jansh Wells</h6>
                                                <p class="text-muted font-size-13 mb-0"><span>You : </span>Okay</p>
                                            </div>
                                            <div>
                                                <p class="text-muted font-size-13 mb-0">6:57 PM</p>
                                            </div>
                                        </div><!-- end -->
                                        <hr>
                                        <div class="d-flex">
                                            <div>
                                                <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" class="img-fluid avatar-sm rounded" alt="">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="font-size-14 mb-0">Denny Silva</h6>
                                                <p class="text-muted font-size-13 mb-0"><span>You : </span>Cool</p>
                                            </div>
                                            <div>
                                                <p class="text-muted font-size-13 mb-0">2:57 PM</p>
                                            </div>
                                        </div><!-- end -->
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div>

                            <div>
                                <h6 class="text-muted text-uppercase font-size-11">Yesterday</h6>
                                <div class="card shadow-none rounded-3">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" class="img-fluid avatar-sm rounded" alt="">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="font-size-14 mb-0">Ruhi Shah</h6>
                                                <p class="text-muted font-size-13 mb-0"><span>You : </span>Done</p>
                                            </div>
                                            <div>
                                                <p class="text-muted font-size-13 mb-0">4:44 PM</p>
                                            </div>
                                        </div><!-- end -->
                                        <hr>
                                        <div class="d-flex">
                                            <div>
                                                <img src="{{ asset('assets/images/users/avatar-6.jpg') }}" class="img-fluid avatar-sm rounded" alt="">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="font-size-14 mb-0">Terrell Soto</h6>
                                                <p class="text-muted font-size-13 mb-0"><span>You : </span>Hey</p>
                                            </div>
                                            <div>
                                                <p class="text-muted font-size-13 mb-0">12:07 PM</p>
                                            </div>
                                        </div><!-- end -->
                                        <hr>
                                        <div class="d-flex">
                                            <div>
                                                <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" class="img-fluid avatar-sm rounded" alt="">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="font-size-14 mb-0">Julia Wilson</h6>
                                                <p class="text-muted font-size-13 mb-0"><span>You : </span>Yup</p>
                                            </div>
                                            <div>
                                                <p class="text-muted font-size-13 mb-0">10:19 AM</p>
                                            </div>
                                        </div><!-- end -->
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div>

                            <div>
                                <h6 class="text-muted text-uppercase font-size-11">November 20th</h6>
                                <div class="card shadow-none rounded-3">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <img src="{{ asset('assets/images/users/avatar-4.jpg') }}" class="img-fluid avatar-sm rounded" alt="">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="font-size-14 mb-0">Frank Hamilton</h6>
                                                <p class="text-muted font-size-13 mb-0"><span>You : </span>Good Morning</p>
                                            </div>
                                            <div>
                                                <p class="text-muted font-size-13 mb-0">9:05 AM</p>
                                            </div>
                                        </div><!-- end -->
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- groups details Modal -->
        <div class="modal fade groups-details" tabindex="-1" role="dialog" aria-labelledby="groupDetailModal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0">
                    <div class="modal-header bg-soft-primary">
                        <h5 class="modal-title font-size-16 text-primary" id="groupDetailModal"># Welcome</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body py-3 p-0">
                        <div class="search-box py-2 px-3">
                            <div class="position-relative">
                                <input type="text" class="form-control rounded" placeholder="Search...">
                                <i class="bx bx-search-alt search-icon"></i>
                            </div>
                        </div>
                        <div>
                            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#members" role="tab">
                                        Members (12)
                                    </a>
                                </li>
                                <!-- end li -->
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#media" role="tab">
                                        Media
                                    </a>
                                </li>
                                <!-- end li -->
                            </ul><!-- end ul -->
                        </div>

                        <div class="tab-content pt-3">
                            <div class="tab-pane show active" id="members" data-simplebar style="max-height: 264px;">
                                <ul class="list-unstyled member-list mb-0">
                                    <li class="chat-list">
                                        <a href="javascript: void(0);" class="fw-medium d-block">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm">
                                                    <span class="avatar-title bg-light text-body rounded">
                                                        <i class="mdi mdi-plus"></i>
                                                    </span>
                                                </div>
                                                <div class="ms-3">
                                                    <h5 class="font-size-15 mb-0">Add people</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end li -->
                                    <li class="chat-list">
                                        <a href="javascript: void(0);" class="fw-medium d-block">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img src="{{ asset('assets/images/users/avatar-10.jpg') }}"
                                                        class="img-fluid avatar rounded" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="font-size-15 mb-1">Jansh wells</h5>
                                                    <p class="text-muted font-size-13 mb-0">Web Developer</p>
                                                </div>
                                                <div>
                                                    <p class="text-muted font-size-13 mb-0">Remove</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end li -->
                                    <li class="chat-list">
                                        <a href="javascript: void(0);" class="fw-medium member-list d-block">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset('assets/images/users/avatar-5.jpg') }}"
                                                        class="img-fluid avatar rounded" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="font-size-15 mb-1">Ayaan Curry</h5>
                                                    <p class="text-muted font-size-13 mb-0">Python Developer</p>
                                                </div>
                                                <div>
                                                    <p class="text-muted font-size-13 mb-0">Remove</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end li -->
                                    <li class="chat-list">
                                        <a href="javascript: void(0);" class="fw-medium member-list d-block">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset('assets/images/users/avatar-1.jpg') }}"
                                                        class="img-fluid avatar rounded" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="font-size-15 mb-1">Siya Hudda</h5>
                                                    <p class="text-muted font-size-13 mb-0">Angular Developer</p>
                                                </div>
                                                <div>
                                                    <p class="text-muted font-size-13 mb-0">Remove</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end li -->
                                    <li class="chat-list">
                                        <a href="javascript: void(0);" class="fw-medium member-list d-block">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset('assets/images/users/avatar-2.jpg') }}"
                                                        class="img-fluid avatar rounded" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="font-size-15 mb-1">Denny Silva</h5>
                                                    <p class="text-muted font-size-13 mb-0">React Developer</p>
                                                </div>
                                                <div>
                                                    <p class="text-muted font-size-13 mb-0">Remove</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end li -->
                                    <li class="chat-list">
                                        <a href="javascript: void(0);" class="fw-medium member-list d-block">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img src="{{ asset('assets/images/users/avatar-8.jpg') }}"
                                                        class="img-fluid avatar rounded" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="font-size-15 mb-1">Romi Miller</h5>
                                                    <p class="text-muted font-size-13 mb-0">Wordpress Developer</p>
                                                </div>
                                                <div>
                                                    <p class="text-muted font-size-13 mb-0">Remove</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end li -->
                                    <li class="chat-list">
                                        <a href="javascript: void(0);" class="fw-medium member-list d-block">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset('assets/images/users/avatar-4.jpg') }}"
                                                        class="img-fluid avatar rounded" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="font-size-15 mb-1">Mary Evans</h5>
                                                    <p class="text-muted font-size-13 mb-0">Laravel Developer</p>
                                                </div>
                                                <div>
                                                    <p class="text-muted font-size-13 mb-0">Remove</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end li -->
                                    <li class="chat-list">
                                        <a href="javascript: void(0);" class="fw-medium member-list d-block">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset('assets/images/users/avatar-3.jpg') }}"
                                                        class="img-fluid avatar rounded" alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="font-size-15 mb-1">Prezy Hills</h5>
                                                    <p class="text-muted font-size-13 mb-0">UI / UX Developer</p>
                                                </div>
                                                <div>
                                                    <p class="text-muted font-size-13 mb-0">Remove</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end li -->
                                </ul><!-- end ul -->
                            </div><!-- end -->

                            <div class="tab-pane" id="media" data-simplebar style="max-height: 264px;">
                                <div class="media-list">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar flex-shrink-0">
                                            <span class="avatar-title bg-light text-muted rounded fs-5">
                                                <i class="fas fa-file-image"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="font-size-15 mb-1">Images</h6>
                                            <p class="font-size-13 text-muted mb-0">06 files</p>
                                        </div>
                                        <div>
                                            <h6 class="font-size-12 text-muted mb-0">1.77 GB</h6>
                                        </div>
                                    </div>
                                </div><!-- end -->
                                <div class="media-list">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar flex-shrink-0">
                                            <span class="avatar-title bg-light text-muted rounded fs-5">
                                                <i class="fas fa-file"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="font-size-15 mb-1">Documents</h6>
                                            <p class="font-size-13 text-muted mb-0">14 files</p>
                                        </div>
                                        <div>
                                            <h6 class="font-size-12 text-muted mb-0">258 MB</h6>
                                        </div>
                                    </div>
                                </div><!-- end -->

                                <div class="media-list">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar flex-shrink-0">
                                            <span class="avatar-title bg-light text-muted rounded fs-5">
                                                <i class="fas fa-file-alt"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="font-size-15 mb-1">Starter-page.html</h6>
                                            <p class="font-size-13 text-muted mb-0">1 files</p>
                                        </div>
                                        <div>
                                            <h6 class="font-size-12 text-muted mb-0">176 KB</h6>
                                        </div>
                                    </div>
                                </div><!-- end -->
                                <div class="media-list">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar flex-shrink-0">
                                            <span class="avatar-title bg-light text-muted rounded fs-5">
                                                <i class="far fa-file-word"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="font-size-15 mb-1">Task list.txt</h6>
                                            <p class="font-size-13 text-muted mb-0">2 files</p>
                                        </div>
                                        <div>
                                            <h6 class="font-size-12 text-muted mb-0">10 MB</h6>
                                        </div>
                                    </div>
                                </div><!-- end -->
                                <div class="media-list">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar flex-shrink-0">
                                            <span class="avatar-title bg-light text-muted rounded fs-5">
                                                <i class="fas fa-file-image"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="font-size-15 mb-1">Img-09.jpg</h6>
                                            <p class="font-size-13 text-muted mb-0">1 files</p>
                                        </div>
                                        <div>
                                            <h6 class="font-size-12 text-muted mb-0">3 MB</h6>
                                        </div>
                                    </div>
                                </div><!-- end -->
                                <div class="media-list">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar flex-shrink-0">
                                            <span class="avatar-title bg-light text-muted rounded fs-5">
                                                <i class="fas fa-file-image"></i>
                                            </span>
                                            
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="font-size-15 mb-1">Img-08.jpg</h6>
                                            <p class="font-size-13 text-muted mb-0">1 files</p>
                                        </div>
                                        <div>
                                            <h6 class="font-size-12 text-muted mb-0">6.3 MB</h6>
                                        </div>
                                    </div>
                                </div><!-- end -->
                                <div class="media-list">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar flex-shrink-0">
                                            <span class="avatar-title bg-light text-muted rounded fs-5">
                                                <i class="fas fa-file-archive"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="font-size-15 mb-1">projrcts.zip</h6>
                                            <p class="font-size-13 text-muted mb-0">1 files</p>
                                        </div>
                                        <div>
                                            <h6 class="font-size-12 text-muted mb-0">89 KB</h6>
                                        </div>
                                    </div>
                                </div><!-- end -->
                            </div><!-- end tab pane-->
                        </div>
                    </div><!-- /.modal body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-soft-primary">Done</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


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
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Metismenu Js -->
<script src="{{ asset('assets/libs/metismenujs/metismenujs.min.js') }}"></script>

<!-- Simplebar Js -->
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>

<!-- Feather Js -->
<script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>


<!-- ligntbox -->
<script src="{{ asset('assets/libs/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/lightbox.init.js') }}"></script>

<script src="{{ asset('assets/js/pages/chat.init.js') }}"></script>

<!-- custom js -->
<script src="{{ asset('assets/js/app.js') }}"></script>

</body>


<!-- Mirrored from preview.pichforest.com/probic/layouts/apps-chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2024 11:26:05 GMT -->
</html>