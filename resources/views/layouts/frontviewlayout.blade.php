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
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- choice plugin css -->
    <link href="assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" />

    <!-- dragula css -->
    <link href="assets/libs/dragula/dragula.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <style>
        #page-topbar{
            position: absolute;
            left: 0 !important;
        }
        .main-content,#page-topbar{
            min-width: 100% !important;
            margin-left: 0px !important;
        }
    </style>

</head>


<body data-sidebar="dark">

<!-- <body data-layout="horizontal" data-topbar="colored"> -->

<!-- Begin page -->
<div id="layout-wrapper">


    <header id="page-topbar" class="container">
        <div class="navbar-header navbar navbar-expand-lg">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand">
                    <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
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
    {{-- <div class="vertical-menu">

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
    </div> --}}
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content container">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                {{-- <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Kanban Board</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active">Kanban Board</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div> --}}
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mb-0">
                            <div class="card-body p-4 pb-0">
                                <div class="pb-3 mb-3">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="d-flex">
                                                <div class="flex-1">
                                                    <h5 class="mb-1 text-uppercas">Probic Admin Dashboard</h5>
                                                    <p class="text-muted mb-0">A Kanban template will ease your
                                                        transition into a new project management method.</p>
                                                </div>
                                            </div>
                                        </div><!-- end col -->

                                        <div class="col-sm-6">
                                            <div
                                                class="d-flex flex-wrap justify-content-sm-end align-items-center mt-4 mt-md-0">
                                                <div class="me-3">
                                                    <h6 class="fw-medium text-muted mb-0">Members :-</h6>
                                                </div>
                                                <div class="avatar-group">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Mark Burke">
                                                            <img src="assets/images/users/avatar-1.jpg" alt=""
                                                                class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Denny Silva">
                                                            <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Julia Halsey">
                                                            <img src="assets/images/users/avatar-3.jpg" alt=""
                                                                class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Abel Owen">
                                                            <img src="assets/images/users/avatar-4.jpg" alt=""
                                                                class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Julia Ott">
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
                                                            title="William Zawacki">
                                                            <img src="assets/images/users/avatar-5.jpg" alt=""
                                                                class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Jansh Wells">
                                                            <img src="assets/images/users/avatar-10.jpg" alt=""
                                                                class="rounded-circle avatar-sm">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);">
                                                            <div class="avatar-sm">
                                                                <span
                                                                    class="avatar-title rounded-circle bg-primary text-white font-size-14">
                                                                    +7
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div><!-- end avatar group -->
                                            </div><!-- end -->
                                            <div class="d-flex align-items-center justify-content-sm-end mt-4">
                                                <div class="search-box ">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control rounded"
                                                            id="search-kanbanboard" onkeyup="searchKanban()"
                                                            placeholder="Search...">
                                                        <i class="uil uil-search search-icon"></i>
                                                    </div>
                                                </div><!-- end seacrh-box -->
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div>

                                <div class="task-board" id="kanbanboard">
                                    <div class="task-list" id="remove-item-19">
                                        <div class="card bg-light shadow-none card-h-100">
                                            <div
                                                class="card-header bg-transparent border-bottom-0 d-flex align-items-center">
                                                <div class="flex-1">
                                                    <h4 class="card-title mb-0" id="edit-text-1">
                                                        <span id="edit-input-1">Backlog</span><span
                                                            class="badge badge-soft-secondary ms-2">04</span>
                                                    </h4>

                                                    <div id="heading-1" class="d-flex visually-hidden">
                                                        <input class="form-control kanbanboard-rename-input" type="text"
                                                            name="name" id="edit-heading-1">
                                                        <button
                                                            class="btn btn-soft-success mx-3 kanbanboard-rename-save save-heading"
                                                            type="button" data-input-id="edit-heading-1"
                                                            onclick="kanbanboard_heading(1)">Save</button>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle arrow-none font-size-16"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="uil uil-ellipsis-h text-muted"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item font-size-14 fw-medium text-muted edit-heading"
                                                            href="#" onclick="editHeading('1')"><i
                                                                class="mdi mdi-file-edit-outline me-1"></i>Edit</a>
                                                        <a class="dropdown-item font-size-14 fw-medium text-danger delete-item"
                                                            onclick="removeTask('remove-item-19')" href="#">
                                                            <i class="mdi mdi-trash-can-outline me-1"></i>Delete</a>
                                                    </div>
                                                </div> <!-- end dropdown -->
                                            </div><!-- end card-header -->

                                            <div>
                                                <div data-simplebar class="tasklist-content pt-0 p-3">
                                                    <div id="backlog-task" class="task d-flex flex-column">

                                                        <div class="card task-box shadow-none" id="remove-item-1">
                                                            <div class="card-body">
                                                                <div class="d-flex mb-3">
                                                                    <div class="flex-grow-1 align-items-start">
                                                                        <div>
                                                                            <p
                                                                                class="text-primary fw-medium mb-0 current-id">
                                                                                #PM0025</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dropdown ms-2">
                                                                        <a href="#"
                                                                            class="dropdown-toggle font-size-16 text-muted"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <div class="dropdown dropdown-move">
                                                                                <a class=" dropdown-item dropdown-toggle arrow-none"
                                                                                    href="javascript:void(0);">Move</a>
                                                                                <div class="dropdown-menu">
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Backlog</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Waiting</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Doing</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Review</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Done</a>
                                                                                </div>
                                                                            </div>
                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target=".bs-task-details-edit"
                                                                                href="#"
                                                                                onclick="editTask('remove-item-1')">Edit</a>
                                                                            <a class="dropdown-item delete-item"
                                                                                href="#"
                                                                                onclick="removeTask('remove-item-1')">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <a href="#"
                                                                    class="font-size-15 fw-medium text-dark task-name"
                                                                    data-bs-toggle="modal" data-id="remove-item-1"
                                                                    onclick="editTaskDetails('remove-item-1' ,1)"
                                                                    data-bs-target=".bs-task-details">Dashboard UI</a>

                                                                <p
                                                                    class="text-muted text-truncate mt-1 font-size-13 task-desc">
                                                                    Creating Awesome Dashboard UI Kit</p>

                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-calendar-range me-1"></i><span
                                                                                class="due-date">28/08/21</span>
                                                                        </p>
                                                                    </div>
                                                                    <div>
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-check-all me-1 align-middle"></i>0/4
                                                                        </p>
                                                                    </div>
                                                                    <div class="ms-4">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-3">
                                                                            <i
                                                                                class="mdi mdi-message-outline me-1 align-middle"></i>0
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                                <div class="progress progress-sm animated-progess mb-3"
                                                                    style="height: 4px;">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        style="width: 0%" aria-valuenow="0" value="0"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div id="all-member-lists-1" class="flex-grow-1">
                                                                        <div
                                                                            class="avatar-group float-start task-assigne">

                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-5" title="Abel Owen">
                                                                                    <img src="assets/images/users/avatar-5.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>

                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-10"
                                                                                    title="Jenny Morrow">
                                                                                    <img src="assets/images/users/avatar-10.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                        </div><!-- end avatar group -->
                                                                    </div>
                                                                    <div class="align-self-end">
                                                                        <span
                                                                            class="badge badge-soft-primary p-2 task-category">Web
                                                                            Design</span>
                                                                    </div>
                                                                </div>

                                                            </div><!-- end card body -->
                                                        </div><!-- end task card -->


                                                        <div class="card task-box shadow-none" id="remove-item-2">
                                                            <div class="card-body">
                                                                <div class="d-flex mb-3">
                                                                    <div class="flex-grow-1 align-items-start">
                                                                        <div>
                                                                            <p
                                                                                class="text-primary fw-medium mb-0 current-id">
                                                                                #PM0023</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dropdown ms-2">
                                                                        <a href="#"
                                                                            class="dropdown-toggle font-size-16 text-muted"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <div class="dropdown dropdown-move">
                                                                                <a class=" dropdown-item dropdown-toggle arrow-none"
                                                                                    href="javascript:void(0);">Move</a>
                                                                                <div class="dropdown-menu">
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Backlog</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Waiting</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Doing</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Review</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Done</a>
                                                                                </div>
                                                                            </div>

                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target=".bs-task-details-edit"
                                                                                href="#"
                                                                                onclick="editTask('remove-item-2')">Edit</a>
                                                                            <a class="dropdown-item delete-item"
                                                                                href="#"
                                                                                onclick="removeTask('remove-item-2')">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <a href="#"
                                                                    class="font-size-15 fw-medium text-dark task-name"
                                                                    data-bs-toggle="modal" data-id="remove-item-2"
                                                                    data-bs-target=".bs-task-details"
                                                                    onclick="editTaskDetails('remove-item-2' ,2)">New
                                                                    Create Admin UI</a>
                                                                <p
                                                                    class="text-muted text-truncate mt-1 font-size-13 task-desc">
                                                                    Add app content, authentication pages etc.</p>

                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-calendar-range me-1"></i><span
                                                                                class="due-date">26/08/2021</span>
                                                                        </p>
                                                                    </div>
                                                                    <div>
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-check-all me-1 align-middle"></i>0/2
                                                                        </p>
                                                                    </div>
                                                                    <div class="ms-4">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-3">
                                                                            <i
                                                                                class="mdi mdi-message-outline me-1 align-middle"></i>0
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                                <div class="progress progress-sm animated-progess mb-3"
                                                                    style="height: 4px;">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        style="width: 0%" value="0" aria-valuenow="0"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>

                                                                <div class="d-flex">
                                                                    <div id="all-member-lists-2" class="flex-grow-1">
                                                                        <div
                                                                            class="avatar-group float-start task-assigne">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-1" title="Ruhi Shah">
                                                                                    <img src="assets/images/users/avatar-1.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    value="member-6"
                                                                                    data-bs-placement="top"
                                                                                    title="Terrell Soto">
                                                                                    <img src="assets/images/users/avatar-6.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    value="member-15"
                                                                                    data-bs-placement="top"
                                                                                    title="Denny Silva">
                                                                                    <div class="avatar-sm">
                                                                                        <div
                                                                                            class="avatar-title rounded-circle bg-primary">
                                                                                            D
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div><!-- end avatar group -->
                                                                    </div>
                                                                    <div class="align-self-end">
                                                                        <span
                                                                            class="badge badge-soft-primary p-2 task-category">Web
                                                                            Design</span>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end card body -->
                                                        </div><!-- end task card -->

                                                        <div class="card task-box shadow-none" id="remove-item-3">
                                                            <div class="card-body">
                                                                <div class="d-flex mb-3">
                                                                    <div class="flex-grow-1 align-items-start">
                                                                        <div>
                                                                            <p
                                                                                class="text-primary fw-medium mb-0 current-id">
                                                                                #PM0022</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dropdown ms-2">
                                                                        <a href="#"
                                                                            class="dropdown-toggle font-size-16 text-muted"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <div class="dropdown dropdown-move">
                                                                                <a class=" dropdown-item dropdown-toggle arrow-none"
                                                                                    href="javascript:void(0);">Move
                                                                                </a>
                                                                                <div class="dropdown-menu">
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Backlog</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Waiting</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Doing</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Review</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Done</a>
                                                                                </div>
                                                                            </div>

                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target=".bs-task-details-edit"
                                                                                href="#"
                                                                                onclick="editTask('remove-item-3')">Edit</a>
                                                                            <a class="dropdown-item delete-item"
                                                                                href="#"
                                                                                onclick="removeTask('remove-item-3')">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#"
                                                                    class="font-size-15 fw-medium text-dark task-name"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target=".bs-task-details"
                                                                    data-id="remove-item-3"
                                                                    onclick="editTaskDetails('remove-item-3' ,3)">Create
                                                                    a New Landing UI</a>
                                                                <p
                                                                    class="text-muted text-truncate font-size-13 mt-1 task-desc">
                                                                    Creating an application concept in ui ux design</p>

                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-calendar-range me-1"></i><span
                                                                                class="due-date">22/08/2021</span>
                                                                        </p>
                                                                    </div>
                                                                    <div>
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-check-all me-1 align-middle"></i>0/3
                                                                        </p>
                                                                    </div>
                                                                    <div class="ms-4">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-3">
                                                                            <i
                                                                                class="mdi mdi-message-outline me-1 align-middle"></i>0
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                                <div class="progress progress-sm animated-progess mb-3"
                                                                    style="height: 4px;">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        style="width: 0%" aria-valuenow="0" value="0"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div id="all-member-list-3" class="flex-grow-1">
                                                                        <div
                                                                            class="avatar-group float-start task-assigne">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    value="member-12"
                                                                                    data-bs-placement="top"
                                                                                    title="James Ross">
                                                                                    <div class="avatar-sm">
                                                                                        <div
                                                                                            class="avatar-title rounded-circle bg-purple">
                                                                                            J
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div><!-- end avatar group -->
                                                                    </div>
                                                                    <div class="align-self-end">
                                                                        <span
                                                                            class="badge badge-soft-purple p-2 task-category">UI/UX</span>
                                                                    </div>
                                                                </div>

                                                            </div><!-- end card body -->
                                                        </div><!-- end task card -->

                                                        <div class="card task-box shadow-none" id="remove-item-4">
                                                            <div class="card-body">
                                                                <div class="d-flex mb-3">
                                                                    <div class="flex-grow-1 align-items-start">
                                                                        <div>
                                                                            <p
                                                                                class="text-primary fw-medium mb-0 current-id">
                                                                                #PM0020</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dropdown ms-2">
                                                                        <a href="#"
                                                                            class="dropdown-toggle font-size-16 text-muted"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <div class="dropdown dropdown-move">
                                                                                <a class=" dropdown-item dropdown-toggle arrow-none"
                                                                                    href="javascript:void(0);">Move</a>
                                                                                <div class="dropdown-menu">
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Backlog</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Waiting</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Doing</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Review</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Done</a>
                                                                                </div>
                                                                            </div>
                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target=".bs-task-details-edit"
                                                                                href="#"
                                                                                onclick="editTask('remove-item-4')">Edit</a>
                                                                            <a class="dropdown-item delete-item"
                                                                                href="#"
                                                                                onclick="removeTask('remove-item-4')">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <a href="#"
                                                                    class="font-size-15 task-name fw-medium text-dark"
                                                                    data-bs-toggle="modal" data-id="remove-item-4"
                                                                    data-bs-target=".bs-task-details"
                                                                    onclick="editTaskDetails('remove-item-4' ,4)">Code
                                                                    the Script</a>
                                                                <p
                                                                    class="text-muted text-truncate mt-1 font-size-13 task-desc">
                                                                    A scripting language is usually interpreted from
                                                                    source code or bytecode.</p>

                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-calendar-range me-1"></i><span
                                                                                class="due-date">20/08/2021</span>
                                                                        </p>
                                                                    </div>
                                                                    <div>
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-check-all me-1 align-middle"></i>0/4
                                                                        </p>
                                                                    </div>
                                                                    <div class="ms-4">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-3">
                                                                            <i
                                                                                class="mdi mdi-message-outline me-1 align-middle"></i>0
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                                <div class="progress progress-sm animated-progess mb-3"
                                                                    style="height: 4px;">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        style="width: 0%" aria-valuenow="0" value="0"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div id="all-member-lists-4" class="flex-grow-1">
                                                                        <div
                                                                            class="avatar-group float-start task-assigne">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-2" title="Dan Gibson">
                                                                                    <img src="assets/images/users/avatar-2.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-7"
                                                                                    title="Oliver Sharp">
                                                                                    <img src="assets/images/users/avatar-7.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-block" value="member-13"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    title="Vini Childers">
                                                                                    <div class="avatar-sm">
                                                                                        <div
                                                                                            class="avatar-title rounded-circle bg-primary">
                                                                                            V</div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <div>
                                                                                    <div class="avatar-sm">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-success text-white font-size-14">+1</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- end avatar group -->
                                                                    </div>
                                                                    <div class="align-self-end">
                                                                        <span
                                                                            class="badge badge-soft-warning p-2 task-category">React</span>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end card body -->
                                                        </div><!-- end task card -->
                                                    </div>
                                                </div><!-- end data-simplebar -->

                                                <div class="text-center p-3">
                                                    <a href="javascript: void(0);"
                                                        class="btn btn-soft-primary w-100 add-new-task"
                                                        data-bs-toggle="modal" data-bs-target=".bs-task-details-edit"
                                                        onclick="addTaskDetails('remove-item-19')"><i
                                                            class="mdi mdi-plus me-1"></i> Add New Task</a>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                    </div><!-- end tasklist -->

                                    <div class="task-list" id="remove-item-18">
                                        <div class="card bg-light shadow-none card-h-100">
                                            <div
                                                class="card-header bg-transparent border-bottom-0 d-flex align-items-center">
                                                <div class="flex-1">
                                                    <h4 class="card-title mb-0" id="edit-text-2">
                                                        <span id="edit-input-2">Waiting</span><span
                                                            class="badge badge-soft-secondary ms-2">03</span>
                                                    </h4>
                                                    <div id="heading-2" class="d-flex visually-hidden">
                                                        <input class="form-control kanbanboard-rename-input" type="text"
                                                            name="name" id="edit-heading-2">
                                                        <button
                                                            class="btn btn-soft-success mx-3 kanbanboard-rename-save save-heading"
                                                            type="button" data-input-id="edit-heading-2"
                                                            onclick="kanbanboard_heading(2)">
                                                            Save</button>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle arrow-none font-size-16"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="uil uil-ellipsis-h text-muted"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item font-size-14 fw-medium text-muted edit-heading"
                                                            href="#" onclick="editHeading('2')"><i
                                                                class="mdi mdi-file-edit-outline me-1"></i>Edit</a>
                                                        <a class="dropdown-item font-size-14 fw-medium text-danger delete-item"
                                                            href="#" onclick="removeTask('remove-item-18')"><i
                                                                class="mdi mdi-trash-can-outline me-1"></i>Delete</a>
                                                    </div>
                                                </div> <!-- end dropdown -->
                                            </div> <!-- end card-header -->

                                            <div>
                                                <div data-simplebar class="tasklist-content pt-0 p-3">
                                                    <div id="waiting-task" class="task d-flex flex-column">

                                                        <div class="card task-box shadow-none" id="remove-item-5">
                                                            <div class="card-body">
                                                                <div class="d-flex mb-3">
                                                                    <div class="flex-grow-1 align-items-start">
                                                                        <div>
                                                                            <p
                                                                                class="text-primary fw-medium mb-0 current-id">
                                                                                #PM0017</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dropdown ms-2">
                                                                        <a href="#"
                                                                            class="dropdown-toggle font-size-16 text-muted"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <div class="dropdown dropdown-move">
                                                                                <a class="dropdown-item dropdown-toggle arrow-none"
                                                                                    href="javascript:void(0);">Move</a>
                                                                                <div class="dropdown-menu">
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Backlog</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Waiting</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Doing</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Review</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Done</a>
                                                                                </div>
                                                                            </div>

                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target=".bs-task-details-edit"
                                                                                href="#"
                                                                                onclick="editTask('remove-item-5')">Edit</a>
                                                                            <a class="dropdown-item delete-item"
                                                                                href="#"
                                                                                onclick="removeTask('remove-item-5')">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <a href="#"
                                                                    class="font-size-15 fw-medium text-dark task-name"
                                                                    data-bs-toggle="modal" data-id="remove-item-5"
                                                                    onclick="editTaskDetails('remove-item-5' ,5)"
                                                                    data-bs-target=".bs-task-details">Brand Logo
                                                                    Design</a>

                                                                <p
                                                                    class="text-muted text-truncate mt-1 font-size-13 task-desc">
                                                                    A scripting language is usually interpreted from
                                                                    source code or bytecode. </p>

                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-calendar-range me-1"></i><span
                                                                                class="due-date">20/08/2021</span>
                                                                        </p>
                                                                    </div>
                                                                    <div>
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-check-all me-1 align-middle"></i>1/3
                                                                        </p>
                                                                    </div>
                                                                    <div class="ms-4">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-3">
                                                                            <i
                                                                                class="mdi mdi-message-outline me-1 align-middle"></i>2
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                                <div class="progress progress-sm animated-progess mb-3"
                                                                    style="height: 4px;">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        style="width: 25%" value="25" aria-valuenow="25"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div id="all-member-lists-5" class="flex-grow-1">
                                                                        <div
                                                                            class="avatar-group float-start task-assigne">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    value="member-8"
                                                                                    data-bs-placement="top"
                                                                                    title="Jim Lee">
                                                                                    <img src="assets/images/users/avatar-8.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    value="member-4"
                                                                                    data-bs-placement="top"
                                                                                    title="Dan Gibson">
                                                                                    <img src="assets/images/users/avatar-4.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    value="member-9"
                                                                                    data-bs-placement="top"
                                                                                    title="Dan Gibson">
                                                                                    <img src="assets/images/users/avatar-9.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <div>
                                                                                    <div class="avatar-sm">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning text-white font-size-14">+5</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- end avatar group -->
                                                                    </div>
                                                                    <div class="align-self-end">
                                                                        <span
                                                                            class="badge badge-soft-purple p-2 task-category">UI/UX</span>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end card body -->
                                                        </div><!-- end task card -->

                                                        <div class="card task-box shadow-none" id="remove-item-6">
                                                            <div class="card-body">
                                                                <div class="d-flex mb-3">
                                                                    <div class="flex-grow-1 align-items-start">
                                                                        <div>
                                                                            <p
                                                                                class="text-primary fw-medium mb-0 current-id">
                                                                                #PM0016</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dropdown ms-2">
                                                                        <a href="#"
                                                                            class="dropdown-toggle font-size-16 text-muted"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <div class="dropdown dropdown-move">
                                                                                <a class=" dropdown-item dropdown-toggle arrow-none"
                                                                                    href="javascript:void(0);">Move
                                                                                </a>
                                                                                <div class="dropdown-menu">
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Backlog</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Waiting</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Doing</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Review</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Done</a>
                                                                                </div>
                                                                            </div>

                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target=".bs-task-details-edit"
                                                                                href="#"
                                                                                onclick="editTask('remove-item-6')">Edit</a>
                                                                            <a class="dropdown-item delete-item"
                                                                                href="#"
                                                                                data-id="remove-item-6">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <a href="#"
                                                                    class="font-size-15 fw-medium text-dark task-name"
                                                                    data-bs-toggle="modal" data-id="remove-item-6"
                                                                    onclick="editTaskDetails('remove-item-6' ,6)"
                                                                    data-bs-target=".bs-task-details">Create Gallery
                                                                    Pages</a>
                                                                <p
                                                                    class="text-muted text-truncate mt-1 font-size-13 task-desc">
                                                                    Gallery Pages are designed to display images and
                                                                    videos.</p>
                                                                <ul class="list-inline mb-4 edit-task-images">
                                                                    <li class="list-inline-item">
                                                                        <a href="#">
                                                                            <div>
                                                                                <img src="assets/images/small/img-6.png"
                                                                                    class="rounded"
                                                                                    alt="Signed document file.txt"
                                                                                    height="48">
                                                                            </div>
                                                                        </a>
                                                                    </li><!-- end li -->
                                                                    <li class="list-inline-item">
                                                                        <a href="#">
                                                                            <div>
                                                                                <img src="assets/images/small/img-9.png"
                                                                                    class="rounded"
                                                                                    alt="Admin testing file.zip"
                                                                                    height="48">
                                                                            </div>
                                                                        </a>
                                                                    </li><!-- end li -->
                                                                </ul><!-- end ul -->

                                                                <div class="d-flex">
                                                                    <div id="all-member-lists-6" class="flex-grow-1">
                                                                        <div
                                                                            class="avatar-group float-start task-assigne">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-2"
                                                                                    title="Johnson Knight">
                                                                                    <img src="assets/images/users/avatar-2.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-10"
                                                                                    title="Rodney Clark">
                                                                                    <img src="assets/images/users/avatar-10.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                        </div><!-- end avatar group -->
                                                                    </div>
                                                                    <div class="align-self-end">
                                                                        <span
                                                                            class="badge badge-soft-purple p-2 task-category">UI/UX</span>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end card body -->
                                                        </div><!-- end task card -->

                                                        <div class="card task-box shadow-none" id="remove-item-7">
                                                            <div class="card-body">
                                                                <div class="d-flex mb-3">
                                                                    <div class="flex-grow-1 align-items-start">
                                                                        <div>
                                                                            <p
                                                                                class="text-primary fw-medium mb-0 current-id">
                                                                                #PM0015</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dropdown ms-2">
                                                                        <a href="#"
                                                                            class="dropdown-toggle font-size-16 text-muted"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <div class="dropdown dropdown-move">
                                                                                <a class="dropdown-item dropdown-toggle arrow-none"
                                                                                    href="javascript:void(0);">Move
                                                                                </a>
                                                                                <div class="dropdown-menu">
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Backlog</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Waiting</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Doing</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Review</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Done</a>
                                                                                </div>
                                                                            </div>

                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target=".bs-task-details-edit"
                                                                                href="#"
                                                                                onclick="editTask('remove-item-7')">Edit</a>
                                                                            <a class="dropdown-item delete-item"
                                                                                href="#"
                                                                                data-id="remove-item-7">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#"
                                                                    class="font-size-15 fw-medium text-dark task-name"
                                                                    data-bs-toggle="modal" data-id="remove-item-7"
                                                                    onclick="editTaskDetails('remove-item-7' ,7)"
                                                                    data-bs-target=".bs-task-details">Chat App Pages</a>

                                                                <p
                                                                    class="text-muted text-truncate mt-1 font-size-13 task-desc">
                                                                    Simple Messaging App Concept chatbox chat of social
                                                                    network page.</p>

                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-calendar-range me-1"></i><span
                                                                                class="due-date">17/08/2021</span>
                                                                        </p>
                                                                    </div>
                                                                    <div>
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-check-all me-1 align-middle"></i>0/3
                                                                        </p>
                                                                    </div>
                                                                    <div class="ms-4">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-3">
                                                                            <i
                                                                                class="mdi mdi-message-outline me-1 align-middle"></i>2
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                                <div class="progress progress-sm animated-progess mb-3"
                                                                    style="height: 4px;">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        style="width: 37%" value="37" aria-valuenow="37"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>

                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1" id="all-member-lists-7">
                                                                        <div
                                                                            class="avatar-group float-start task-assigne">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    value="member-3"
                                                                                    data-bs-placement="top"
                                                                                    title="Hattie Bustos">
                                                                                    <img src="assets/images/users/avatar-3.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    value="member-7"
                                                                                    data-bs-placement="top"
                                                                                    title="William Zawacki">
                                                                                    <img src="assets/images/users/avatar-7.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    value="member-9"
                                                                                    data-bs-placement="top"
                                                                                    title="Daniel Lanoue">
                                                                                    <img src="assets/images/users/avatar-9.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <div>
                                                                                    <div class="avatar-sm">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-purple text-white font-size-14">+7</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- end avatar group -->
                                                                    </div>
                                                                    <div class="align-self-end">
                                                                        <span
                                                                            class="badge badge-soft-warning p-2 task-category">React</span>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end card body -->
                                                        </div><!-- end task card -->
                                                    </div>
                                                </div><!-- end data - simplebar -->

                                                <div class="text-center p-3">
                                                    <a href="javascript: void(0);"
                                                        class="btn btn-soft-primary w-100 add-new-task"
                                                        data-bs-toggle="modal" data-bs-target=".bs-task-details-edit"
                                                        onclick="addTaskDetails('remove-item-18')"><i
                                                            class="mdi mdi-plus me-1"></i> Add New Task</a>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                    </div><!-- end tasklist -->

                                    <div class="task-list" id="remove-item-17">
                                        <div class="card bg-light shadow-none card-h-100">
                                            <div
                                                class="card-header bg-transparent border-bottom-0 d-flex align-items-center">
                                                <div class="flex-1">
                                                    <h4 class="card-title mb-0" id="edit-text-3">
                                                        <span class="board-column-header" id="edit-input-3">Doing</span>
                                                        <span class="badge badge-soft-secondary ms-2">03</span>
                                                    </h4>
                                                    <div id="heading-3" class="d-flex visually-hidden">
                                                        <input class="form-control kanbanboard-rename-input" type="text"
                                                            name="name" id="edit-heading-3">
                                                        <button
                                                            class="btn btn-soft-success mx-3 kanbanboard-rename-save save-heading"
                                                            type="button" data-input-id="edit-heading-3"
                                                            onclick="kanbanboard_heading(3)">Save</button>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle arrow-none font-size-16"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="uil uil-ellipsis-h text-muted"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item font-size-14 fw-medium text-muted edit-heading"
                                                            href="#" onclick="editHeading('3')"><i
                                                                class="mdi mdi-file-edit-outline me-1"></i>Edit</a>
                                                        <a class="dropdown-item font-size-14 fw-medium text-danger delete-item"
                                                            href="#" onclick="removeTask('remove-item-17')"><i
                                                                class="mdi mdi-trash-can-outline me-1"></i>Delete</a>
                                                    </div>
                                                </div><!-- end dropdown -->
                                            </div><!-- end card-header -->

                                            <div>
                                                <div data-simplebar class="tasklist-content pt-0 p-3">
                                                    <div id="doing-task" class="task d-flex flex-column">

                                                        <div class="card task-box shadow-none" id="remove-item-8">
                                                            <div class="card-body">
                                                                <div class="d-flex mb-3">
                                                                    <div class="flex-grow-1 align-items-start">
                                                                        <div>
                                                                            <p
                                                                                class="text-primary fw-medium mb-0 current-id">
                                                                                #PM0018</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dropdown ms-2">
                                                                        <a href="#"
                                                                            class="dropdown-toggle font-size-16 text-muted"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <div class="dropdown dropdown-move">
                                                                                <a class=" dropdown-item dropdown-toggle arrow-none"
                                                                                    href="javascript:void(0);">Move
                                                                                </a>
                                                                                <div class="dropdown-menu">
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Backlog</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Waiting</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Doing</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Review</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Done</a>
                                                                                </div>
                                                                            </div>

                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target=".bs-task-details-edit"
                                                                                href="#"
                                                                                onclick="editTask('remove-item-8')">Edit</a>
                                                                            <a class="dropdown-item delete-item"
                                                                                href="#"
                                                                                data-id="remove-item-8">Remove</a>
                                                                        </div>
                                                                    </div><!-- end -->
                                                                </div>

                                                                <a href="#"
                                                                    class="font-size-15 fw-medium text-dark task-name"
                                                                    data-id="remove-item-8"
                                                                    onclick="editTaskDetails('remove-item-8' ,8)"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target=".bs-task-details">Multipurpose
                                                                    Landing</a>

                                                                <p
                                                                    class="text-muted text-truncate mt-1 font-size-13 task-desc">
                                                                    Landing page template with clean, minimal and modern
                                                                    design.</p>

                                                                <ul class="list-inline mb-4 edit-task-images">
                                                                    <li class="list-inline-item">
                                                                        <a href="#">
                                                                            <div>
                                                                                <img src="assets/images/small/img-5.png"
                                                                                    class="rounded"
                                                                                    alt="Signed document file.txt"
                                                                                    height="48">
                                                                            </div>
                                                                        </a>
                                                                    </li><!-- end li -->
                                                                    <li class="list-inline-item">
                                                                        <a href="#">
                                                                            <div>
                                                                                <img src="assets/images/small/img-6.png"
                                                                                    class="rounded"
                                                                                    alt="Admin testing file.zip"
                                                                                    height="48">
                                                                            </div>
                                                                        </a>
                                                                    </li><!-- end li -->
                                                                    <li class="list-inline-item">
                                                                        <a href="#">
                                                                            <div>
                                                                                <img src="assets/images/small/img-7.png"
                                                                                    class="rounded"
                                                                                    alt="Signed testing file.txt"
                                                                                    height="48">
                                                                            </div>
                                                                        </a>
                                                                    </li><!-- end li -->
                                                                </ul><!-- end ul -->
                                                                <div class="d-flex">
                                                                    <div id="all-member-lists-8" class="flex-grow-1">
                                                                        <div
                                                                            class="avatar-group float-start task-assigne">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-10"
                                                                                    title="Julia Halsey">
                                                                                    <img src="assets/images/users/avatar-10.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-6"
                                                                                    title="Ayaan Curry">
                                                                                    <img src="assets/images/users/avatar-6.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-2"
                                                                                    title="Ayaan Curry">
                                                                                    <img src="assets/images/users/avatar-2.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <div>
                                                                                    <div class="avatar-sm">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-primary text-white font-size-14">+2</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- end avatar group -->
                                                                    </div>
                                                                    <div class="align-self-end">
                                                                        <span
                                                                            class="badge badge-soft-primary task-category p-2">Web
                                                                            Design</span>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end card body -->
                                                        </div><!-- end task card -->

                                                        <div class="card task-box shadow-none" id="remove-item-9">
                                                            <div class="card-body">
                                                                <div class="d-flex mb-3">
                                                                    <div class="flex-grow-1 align-items-start">
                                                                        <div>
                                                                            <p
                                                                                class="text-primary fw-medium mb-0 current-id">
                                                                                #PM0014</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown ms-2">
                                                                        <a href="#"
                                                                            class="dropdown-toggle font-size-16 text-muted"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <div class="dropdown dropdown-move">
                                                                                <a class=" dropdown-item dropdown-toggle arrow-none"
                                                                                    href="javascript:void(0);">Move
                                                                                </a>
                                                                                <div class="dropdown-menu">
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Backlog</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Waiting</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Doing</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Review</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Done</a>
                                                                                </div>
                                                                            </div>

                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target=".bs-task-details-edit"
                                                                                href="#"
                                                                                onclick="editTask('remove-item-9')">Edit</a>
                                                                            <a class="dropdown-item delete-item"
                                                                                href="#"
                                                                                data-id="remove-item-9">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <a href="#"
                                                                    class="font-size-15 fw-medium text-dark task-name"
                                                                    data-id="remove-item-9"
                                                                    onclick="editTaskDetails('remove-item-9' ,9)"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target=".bs-task-details">Create a Blog
                                                                    Template UI</a>

                                                                <p
                                                                    class="text-muted text-truncate mt-1 font-size-13 task-desc">
                                                                    Easily customize your Blog template with our web
                                                                    design tools.</p>

                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-calendar-range me-1"></i><span
                                                                                class="due-date">16/08/2021</span>
                                                                        </p>
                                                                    </div>
                                                                    <div>
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-check-all me-1 align-middle"></i>2/4
                                                                        </p>
                                                                    </div>
                                                                    <div class="ms-4">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-3">
                                                                            <i
                                                                                class="mdi mdi-message-outline me-1 align-middle"></i>2
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                                <div class="progress progress-sm animated-progess mb-3"
                                                                    style="height: 4px;">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        style="width: 82%" value="82" aria-valuenow="82"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>

                                                                <div class="d-flex">
                                                                    <div id="all-member-lists-9" class="flex-grow-1">
                                                                        <div
                                                                            class="avatar-group float-start task-assigne">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-9" title="Mark Burke">
                                                                                    <img src="assets/images/users/avatar-9.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-10"
                                                                                    title="Julia Halsey">
                                                                                    <img src="assets/images/users/avatar-10.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-6"
                                                                                    title="Ayaan Curry">
                                                                                    <img src="assets/images/users/avatar-6.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <div>
                                                                                    <div class="avatar-sm">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-purple text-white font-size-14">+3</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- end avatar group -->
                                                                    </div>
                                                                    <div class="align-self-end">
                                                                        <span
                                                                            class="badge badge-soft-primary p-2 task-category">Web
                                                                            Design</span>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end card body -->
                                                        </div><!-- end task card -->

                                                        <div class="card task-box shadow-none" id="remove-item-10">
                                                            <div class="card-body">
                                                                <div class="d-flex mb-3">
                                                                    <div class="flex-grow-1 align-items-start">
                                                                        <div>
                                                                            <p
                                                                                class="text-primary fw-medium mb-0 current-id">
                                                                                #PM0021</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dropdown ms-2">
                                                                        <a href="#"
                                                                            class="dropdown-toggle font-size-16 text-muted"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <div class="dropdown dropdown-move">
                                                                                <a class=" dropdown-item dropdown-toggle arrow-none"
                                                                                    href="javascript:void(0)">Move
                                                                                </a>
                                                                                <div class="dropdown-menu">
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Backlog</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Waiting</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Doing</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Review</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Done</a>
                                                                                </div>
                                                                            </div>

                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target=".bs-task-details-edit"
                                                                                onclick="editTask('remove-item-10')"
                                                                                href="#">Edit</a>
                                                                            <a class="dropdown-item delete-item"
                                                                                href="#"
                                                                                data-id="remove-item-10">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#"
                                                                    class="font-size-15 fw-medium text-dark task-name"
                                                                    data-bs-toggle="modal" data-id="remove-item-10"
                                                                    onclick="editTaskDetails('remove-item-10' ,10)"
                                                                    data-bs-target=".bs-task-details">Ecommerce App</a>

                                                                <p
                                                                    class="text-muted text-truncate mt-1 font-size-13 task-desc">
                                                                    We developed the most flexible Ecommerce Templates.
                                                                </p>

                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-calendar-range me-1"></i><span
                                                                                class="due-date">15/08/2021</span>
                                                                        </p>
                                                                    </div>
                                                                    <div>
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-check-all me-1 align-middle"></i>1/2
                                                                        </p>
                                                                    </div>
                                                                    <div class="ms-4">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-3">
                                                                            <i
                                                                                class="mdi mdi-message-outline me-1 align-middle"></i>2
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                                <div class="progress progress-sm animated-progess mb-3"
                                                                    style="height: 4px;">
                                                                    <div class="progress-bar bg-warning"
                                                                        role="progressbar" style="width: 77%"
                                                                        aria-valuenow="77" value="77" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>

                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1" id="all-member-lists-10">
                                                                        <div
                                                                            class="avatar-group float-start task-assigne">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-1"
                                                                                    title="Victor Kadlec">
                                                                                    <img src="assets/images/users/avatar-1.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-14"
                                                                                    title="Lisa Freeman">
                                                                                    <div class="avatar-sm">
                                                                                        <div
                                                                                            class="avatar-title rounded-circle bg-purple">
                                                                                            L
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-3"
                                                                                    title="Carolyn Denton">
                                                                                    <img src="assets/images/users/avatar-3.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <div>
                                                                                    <div class="avatar-sm">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-primary text-white font-size-14">+9</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- end avatar group -->
                                                                    </div>

                                                                    <div class="align-self-end">
                                                                        <span
                                                                            class="badge badge-soft-warning p-2 task-category">React</span>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end card body -->
                                                        </div><!-- end task card -->
                                                    </div>
                                                </div><!-- end data simplebar -->

                                                <div class="text-center p-3">
                                                    <a href="javascript: void(0);"
                                                        class="btn btn-soft-primary w-100 add-new-task"
                                                        data-bs-toggle="modal" data-bs-target=".bs-task-details-edit"
                                                        onclick="addTaskDetails('remove-item-17')"><i
                                                            class="mdi mdi-plus me-1"></i>Add New Task</a>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                    </div><!-- end tasklist -->

                                    <div class="task-list" id="remove-item-21">
                                        <div class="card bg-light shadow-none card-h-100">
                                            <div
                                                class="card-header bg-transparent border-bottom-0 d-flex align-items-center">
                                                <div class="flex-1">
                                                    <h4 class="card-title mb-0" id="edit-text-4">
                                                        <span class="board-column-header"
                                                            id="edit-input-4">Review</span>
                                                        <span class="badge badge-soft-secondary ms-2">01</span>
                                                    </h4>
                                                    <div id="heading-4" class="d-flex visually-hidden">
                                                        <input class="form-control kanbanboard-rename-input" type="text"
                                                            name="name" id="edit-heading-4">
                                                        <button
                                                            class="btn btn-soft-success mx-3 kanbanboard-rename-save save-heading"
                                                            type="button" data-input-id="edit-heading-4"
                                                            onclick="kanbanboard_heading(4)">
                                                            Save</button>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle arrow-none font-size-16"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="uil uil-ellipsis-h text-muted"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item font-size-14 fw-medium text-muted edit-heading"
                                                            href="#" onclick="editHeading('4')"><i
                                                                class="mdi mdi-file-edit-outline me-1"></i>Edit</a>
                                                        <a class="dropdown-item font-size-14 fw-medium text-danger delete-item"
                                                            href="#" onclick="removeTask('remove-item-21')"><i
                                                                class="mdi mdi-trash-can-outline me-1"></i>Delete</a>
                                                    </div>
                                                </div> <!-- end dropdown -->
                                            </div><!-- end card-header -->

                                            <div>
                                                <div data-simplebar class="tasklist-content pt-0 p-3">
                                                    <div id="review-task" class="task d-flex flex-column">

                                                        <div class="card task-box shadow-none" id="remove-item-22">
                                                            <div class="card-body">
                                                                <div class="d-flex mb-3">
                                                                    <div class="flex-grow-1 align-items-start">
                                                                        <div>
                                                                            <p
                                                                                class="text-primary fw-medium mb-0 current-id">
                                                                                #PM0013</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dropdown ms-2">
                                                                        <a href="#"
                                                                            class="dropdown-toggle font-size-16 text-muted"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <div class="dropdown dropdown-move">
                                                                                <a class=" dropdown-item dropdown-toggle arrow-none"
                                                                                    href="javascript:void(0)">Move
                                                                                </a>
                                                                                <div class="dropdown-menu">
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Backlog</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Waiting</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Doing</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Review</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Done</a>
                                                                                </div>
                                                                            </div>

                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target=".bs-task-details-edit"
                                                                                href="#"
                                                                                onclick="editTask('remove-item-22')">Edit</a>
                                                                            <a class="dropdown-item delete-item"
                                                                                href="#"
                                                                                data-id="remove-item-22">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#"
                                                                    class="font-size-15 fw-medium text-dark task-name"
                                                                    data-bs-toggle="modal" data-id="remove-item-22"
                                                                    onclick="editTaskDetails('remove-item-22' ,22)"
                                                                    data-bs-target=".bs-task-details">Admin Layout
                                                                    Design</a>

                                                                <p
                                                                    class="text-muted text-truncate mt-1 font-size-13 task-desc">
                                                                    Create a responsive admin dashboard layout.</p>

                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-calendar-range me-1"></i><span
                                                                                class="due-date">14/08/2021</span>
                                                                        </p>
                                                                    </div>
                                                                    <div>
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-check-all me-1 align-middle"></i>4/4
                                                                        </p>
                                                                    </div>
                                                                    <div class="ms-4">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-3">
                                                                            <i
                                                                                class="mdi mdi-message-outline me-1 align-middle"></i>6
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                                <div class="progress progress-sm animated-progess mb-3"
                                                                    style="height: 4px;">
                                                                    <div class="progress-bar bg-success"
                                                                        role="progressbar" style="width: 100%"
                                                                        aria-valuenow="100" value="100"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>

                                                                <div class="d-flex">
                                                                    <div id="all-member-lists-22" class="flex-grow-1">
                                                                        <div
                                                                            class="avatar-group float-start task-assigne">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-10"
                                                                                    title="Mark Burke">
                                                                                    <img src="assets/images/users/avatar-10.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-12" title="Jansh Ott">
                                                                                    <div class="avatar-sm">
                                                                                        <div
                                                                                            class="avatar-title rounded-circle bg-purple">
                                                                                            J
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div><!-- end avatar group -->
                                                                    </div>
                                                                    <div class="align-self-end">
                                                                        <span
                                                                            class="badge badge-soft-purple task-category p-2">UI/UX</span>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end card body -->
                                                        </div><!-- end task card -->
                                                    </div>
                                                </div>
                                                <!-- end data simplebar -->
                                                <div class="text-center p-3">
                                                    <a href="javascript: void(0);"
                                                        class="btn btn-soft-primary w-100 add-new-task"
                                                        data-bs-toggle="modal" data-bs-target=".bs-task-details-edit"
                                                        onclick="addTaskDetails('remove-item-21')"><i
                                                            class="mdi mdi-plus me-1"></i> Add New Task</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end tasklist -->

                                    <div class="task-list" id="remove-item-15">
                                        <div class="card bg-light shadow-none card-h-100">
                                            <div
                                                class="card-header bg-transparent border-bottom-0 d-flex align-items-center">
                                                <div class="flex-1">
                                                    <h4 class="card-title mb-0" id="edit-text-5">
                                                        <span class="board-column-header" id="edit-input-5">Done</span>
                                                        <span class="badge badge-soft-secondary ms-2">03</span>
                                                    </h4>
                                                    <div id="heading-5" class="d-flex visually-hidden">
                                                        <input class="form-control kanbanboard-rename-input" type="text"
                                                            name="name" id="edit-heading-5">
                                                        <button
                                                            class="btn btn-soft-success mx-3 kanbanboard-rename-save save-heading"
                                                            type="button" data-input-id="edit-heading-5"
                                                            onclick="kanbanboard_heading(5)">Save</button>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle arrow-none font-size-16"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="uil uil-ellipsis-h text-muted"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item font-size-14 fw-medium text-muted edit-heading"
                                                            href="#" onclick="editHeading('5')">
                                                            <i class="mdi mdi-file-edit-outline me-1"></i>Edit
                                                        </a>
                                                        <a class="dropdown-item font-size-14 fw-medium text-danger delete-item"
                                                            href="#" onclick="removeTask('remove-item-15')">
                                                            <i class="mdi mdi-trash-can-outline me-1"></i>Delete
                                                        </a>
                                                    </div>
                                                </div><!-- end dropdown -->
                                            </div><!-- end card-header -->

                                            <div>
                                                <div data-simplebar class="tasklist-content pt-0 p-3">
                                                    <div id="done-task" class="task d-flex flex-column">

                                                        <div class="card task-box shadow-none" id="remove-item-12">
                                                            <div class="card-body">
                                                                <div class="d-flex mb-3">
                                                                    <div class="flex-grow-1 align-items-start">
                                                                        <div>
                                                                            <p
                                                                                class="text-primary fw-medium mb-0 current-id">
                                                                                #PM0012</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dropdown ms-2">
                                                                        <a href="#"
                                                                            class="dropdown-toggle font-size-16 text-muted"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <div class="dropdown dropdown-move">
                                                                                <a class="dropdown-item dropdown-toggle arrow-none"
                                                                                    href="javascript:void(0)">Move
                                                                                </a>
                                                                                <div class="dropdown-menu">
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Backlog</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Waiting</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Doing</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Review</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Done</a>
                                                                                </div>
                                                                            </div>

                                                                            <a href="#" class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target=".bs-task-details-edit"
                                                                                onclick="editTask('remove-item-12')">Edit</a>
                                                                            <a href="#"
                                                                                class="dropdown-item delete-item"
                                                                                data-id="remove-item-12">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <a href="#"
                                                                    class="font-size-15 fw-medium text-dark task-name"
                                                                    data-bs-toggle="modal" data-id="remove-item-12"
                                                                    onclick="editTaskDetails('remove-item-12' ,12)"
                                                                    data-bs-target=".bs-task-details">Form Pages</a>
                                                                <p
                                                                    class="text-muted text-truncate mt-1 font-size-13 task-desc">
                                                                    Create online forms and publish them..</p>

                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-calendar-range me-1"></i><span
                                                                                class="due-date">13/08/2021</span>
                                                                        </p>
                                                                    </div>
                                                                    <div>
                                                                        <p
                                                                            class="font-size-13 text-success fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-check-all me-1 align-middle"></i>3/3
                                                                        </p>
                                                                    </div>
                                                                    <div class="ms-4">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-3">
                                                                            <i
                                                                                class="mdi mdi-message-outline me-1 align-middle"></i>3
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div id="all-member-lists-12" class="flex-grow-1">
                                                                        <div
                                                                            class="avatar-group float-start task-assigne">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-1"
                                                                                    title="Rita Callahan">
                                                                                    <img src="assets/images/users/avatar-1.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-5"
                                                                                    title="Timothy Turner">
                                                                                    <img src="assets/images/users/avatar-5.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-10"
                                                                                    title="Joycelyn Blanchard">
                                                                                    <img src="assets/images/users/avatar-10.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-sm">
                                                                                    <span
                                                                                        class="avatar-title rounded-circle bg-warning text-white font-size-14">
                                                                                        +1
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- end avatar group -->
                                                                    </div>
                                                                    <div class="align-self-end">
                                                                        <span
                                                                            class="badge badge-soft-primary task-category p-2">Web
                                                                            Design</span>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end card body -->
                                                        </div><!-- end task card -->

                                                        <div class="card task-box shadow-none" id="remove-item-13">
                                                            <div class="card-body">
                                                                <div class="d-flex mb-3">
                                                                    <div class="flex-grow-1 align-items-start">
                                                                        <div>
                                                                            <p
                                                                                class="text-primary fw-medium mb-0 current-id">
                                                                                #PM0011</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dropdown ms-2">
                                                                        <a href="#"
                                                                            class="dropdown-toggle font-size-16 text-muted"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <div class="dropdown dropdown-move">
                                                                                <a class=" dropdown-item dropdown-toggle arrow-none"
                                                                                    href="javascript:void(0)">Move
                                                                                </a>
                                                                                <div class="dropdown-menu">
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Backlog</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Waiting</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Doing</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Review</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Done</a>
                                                                                </div>
                                                                            </div>

                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target=".bs-task-details-edit"
                                                                                onclick="editTask('remove-item-13')"
                                                                                href="#">Edit</a>
                                                                            <a class="dropdown-item delete-item"
                                                                                href="#"
                                                                                data-id="remove-item-13">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#"
                                                                    class="font-size-15 fw-medium text-dark task-name"
                                                                    data-bs-toggle="modal" data-id="remove-item-13"
                                                                    onclick="editTaskDetails('remove-item-13' ,13)"
                                                                    data-bs-target=".bs-task-details">Design the about
                                                                    Pages</a>

                                                                <p
                                                                    class="text-muted text-truncate mt-1 font-size-13 task-desc">
                                                                    The About page is where site users go to learn more
                                                                    about the site they're on.</p>

                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-calendar-range me-1"></i><span
                                                                                class="due-date">10/08/2021</span>
                                                                        </p>
                                                                    </div>
                                                                    <div>
                                                                        <p
                                                                            class="font-size-13 text-success fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-check-all me-1 align-middle"></i>2/2
                                                                        </p>
                                                                    </div>
                                                                    <div class="ms-4">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-3">
                                                                            <i
                                                                                class="mdi mdi-message-outline me-1 align-middle"></i>9
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div id="all-member-lists-13" class="flex-grow-1">
                                                                        <div
                                                                            class="avatar-group float-start task-assigne">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-2"
                                                                                    title="Todd Torres">
                                                                                    <img src="assets/images/users/avatar-2.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                        </div><!-- end avatar group -->
                                                                    </div>
                                                                    <div class="align-self-end">
                                                                        <span
                                                                            class="badge badge-soft-purple p-2 task-category">UI/UX</span>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end card body -->
                                                        </div><!-- end task card -->

                                                        <div class="card task-box shadow-none" id="remove-item-14">
                                                            <div class="card-body">
                                                                <div class="d-flex mb-3">
                                                                    <div class="flex-grow-1 align-items-start">
                                                                        <div>
                                                                            <p
                                                                                class="text-primary fw-medium mb-0 current-id">
                                                                                #PM0010</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="dropdown ms-2">
                                                                        <a href="#"
                                                                            class="dropdown-toggle font-size-16 text-muted"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <div class="dropdown dropdown-move">
                                                                                <a class=" dropdown-item dropdown-toggle arrow-none"
                                                                                    href="javascript:void(0)">Move
                                                                                </a>
                                                                                <div class="dropdown-menu">
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Backlog</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Waiting</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Doing</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Review</a>
                                                                                    <a href="#"
                                                                                        class="dropdown-item">Done</a>
                                                                                </div>
                                                                            </div>

                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target=".bs-task-details-edit"
                                                                                onclick="editTask('remove-item-14')"
                                                                                href="#">Edit</a>
                                                                            <a class="dropdown-item delete-item"
                                                                                href="#"
                                                                                data-id="remove-item-14">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#"
                                                                    class="font-size-15 fw-medium text-dark task-name"
                                                                    data-id="remove-item-14"
                                                                    onclick="editTaskDetails('remove-item-14' ,14)"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target=".bs-task-details">Components
                                                                    Pages</a>

                                                                <p
                                                                    class="text-muted text-truncate mt-1 font-size-13 task-desc">
                                                                    Create custom Components.</p>

                                                                <ul class="list-inline mb-4 edit-task-images">
                                                                    <li class="list-inline-item">
                                                                        <a href="#">
                                                                            <div>
                                                                                <img src="assets/images/small/img-9.png"
                                                                                    class="rounded"
                                                                                    alt="Signed document file.txt"
                                                                                    height="48">
                                                                            </div>
                                                                        </a>
                                                                    </li><!-- end li -->
                                                                </ul><!-- end ul -->

                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-calendar-range me-1"></i><span
                                                                                class="due-date">11/08/2021</span>
                                                                        </p>
                                                                    </div>
                                                                    <div>
                                                                        <p
                                                                            class="font-size-13 text-success fw-medium mb-2">
                                                                            <i
                                                                                class="mdi mdi-check-all me-1 align-middle"></i>4/4
                                                                        </p>
                                                                    </div>
                                                                    <div class="ms-4">
                                                                        <p
                                                                            class="text-muted font-size-13 fw-medium mb-3">
                                                                            <i
                                                                                class="mdi mdi-message-outline me-1 align-middle"></i>1
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div id="all-member-lists-14" class="flex-grow-1">
                                                                        <div
                                                                            class="avatar-group float-start task-assigne">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-10"
                                                                                    title="Margaret Sandberg">
                                                                                    <img src="assets/images/users/avatar-10.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-9"
                                                                                    title="Russell Days">
                                                                                    <img src="assets/images/users/avatar-9.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    value="member-15"
                                                                                    title="David Tyrell">
                                                                                    <div class="avatar-sm">
                                                                                        <div
                                                                                            class="avatar-title rounded-circle bg-primary">
                                                                                            D
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div><!-- end avatar group -->
                                                                    </div>
                                                                    <div class="align-self-end">
                                                                        <span
                                                                            class="badge badge-soft-warning p-2 task-category">React</span>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end card body -->
                                                        </div><!-- end task card -->
                                                    </div>
                                                </div><!-- end data - simplebar -->

                                                <div class="text-center p-3">
                                                    <a href="javascript: void(0);"
                                                        class="btn btn-soft-primary w-100 add-new-task"
                                                        data-bs-toggle="modal" data-bs-target=".bs-task-details-edit"
                                                        onclick="addTaskDetails('remove-item-15')"><i
                                                            class="mdi mdi-plus me-1"></i> Add New Task</a>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                    </div><!-- end tasklist -->
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card  -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!-- Projects Details Modal -->
        <div class="modal fade bs-task-details" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content border-0">
                    <div class="modal-header border-bottom-0 pb-0 pt-2">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="edit-modal"></button>
                    </div>
                    <div class="modal-body pt-0 py-4">
                        <div class="ps-2 pe-4">
                            <h5 class="modal-title font-size-14 text-primary mb-2">#PM0020</h5>
                            <h5 class="mb-2">Probic : Dashboard UI</h5>
                        </div>
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="ps-2 pe-4" data-simplebar style="max-height: 690px;">
                                    <p class="text-muted">All the Lorem Ipsum generators on the Internet tend to repeat
                                        predefined chunks as necessary, making this the first true generator on the
                                        Internet.</p>
                                    <div class="mt-4">
                                        <h6 class="font-size-13 text-muted">Checklist</h6>
                                        <h5 class="font-size-17">General Tasks</h5>
                                        <div class="mt-3" id="general-tasks">
                                            <div class="sub-group-item">
                                                <div
                                                    class="checklist d-flex bg-light py-1 font-size-16 px-3 rounded form-check align-items-center mb-2">
                                                    <div class="flex-grow-1">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="custom_Design">
                                                        <label class="form-check-label font-size-15 mb-0 ms-3"
                                                            for="custom_Design">Brand Logo Design.</label>
                                                    </div>
                                                    <div>
                                                        <i class="mdi mdi-text mdi-24px text-muted"></i>
                                                    </div>
                                                </div>
                                            </div><!-- end -->
                                            <div class="sub-group-item">
                                                <div
                                                    class="checklist d-flex bg-light py-1 px-3 font-size-16 rounded form-check align-items-center mb-2">
                                                    <div class="flex-grow-1">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="Multi_Design" checked>
                                                        <label class="form-check-label font-size-15 mb-0 ms-3"
                                                            for="Multi_Design">Multipurpose Design.</label>
                                                    </div>
                                                    <div>
                                                        <i class="mdi mdi-text mdi-24px text-muted"></i>
                                                    </div>
                                                </div>
                                            </div><!-- end -->
                                            <div class="sub-group-item">
                                                <div
                                                    class="checklist d-flex bg-light font-size-16 py-1 px-3 rounded form-check align-items-center mb-2">
                                                    <div class="flex-grow-1">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="app_Design">
                                                        <label class="form-check-label font-size-15 mb-0 ms-3"
                                                            for="app_Design">App Pages.</label>
                                                    </div>
                                                    <div>
                                                        <i class="mdi mdi-text mdi-24px text-muted"></i>
                                                    </div>
                                                </div>
                                            </div><!-- end -->
                                            <div class="sub-group-item">
                                                <div
                                                    class="checklist d-flex bg-light py-1 px-3 rounded form-check align-items-center font-size-16 mb-2">
                                                    <div class="flex-grow-1">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="galleryDesign">
                                                        <label class="form-check-label font-size-15 mb-0 ms-3"
                                                            for="galleryDesign">Gallery Pages.</label>
                                                    </div>
                                                    <div>
                                                        <i class="mdi mdi-text mdi-24px text-muted"></i>
                                                    </div>
                                                </div>
                                            </div><!-- end -->
                                        </div><!-- end -->
                                        <div class="mt-4">
                                            <h5 class="font-size-17 mb-0">Comments</h5>
                                        </div>
                                        <div class="border rounded mt-3">
                                            <form action="#">
                                                <textarea rows="3"
                                                    class="form-control border-0 resize-none task-comment"
                                                    placeholder="Add a Comments..."></textarea>
                                                <div class="px-2 bg-light">
                                                    <div class="btn-group" role="group">
                                                        <button type="button"
                                                            class="btn btn-sm btn-link shadow-none text-dark">
                                                            <i class="mdi mdi-link-variant"></i></button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-link shadow-none text-dark">
                                                            <i class="mdi mdi-emoticon-excited-outline"></i></button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-link shadow-none text-dark">
                                                            <i class="mdi mdi-at"></i></button>
                                                    </div>
                                                    <div class="float-end">
                                                        <button type="button"
                                                            class="btn btn-sm btn-link shadow-none text-dark">
                                                            <i class="mdi mdi-send send-task-comment"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form><!-- end form -->
                                        </div>
                                        <div id="comments">
                                            <div class="d-flex mt-2 align-items-start border-bottom py-4">
                                                <img class="me-3 rounded-circle avatar-sm"
                                                    src="assets/images/users/avatar-2.jpg" alt="">
                                                <div class="flex-1">
                                                    <h5 class="font-size-15 mt-0 mb-1">Denny Silva
                                                        <small class="text-muted float-end">01:23 PM</small>
                                                    </h5>
                                                    <p class="text-muted">To achieve this, it would be necessary to have
                                                        uniform pronunciation. But I must explain to you how all this
                                                        mistaken idea of denouncing pleasure and praising pain was born
                                                        and
                                                        I will complete account the system, and expound the actual
                                                        teachings
                                                        of the great explorer.</p>

                                                    <a href="javascript: void(0);"
                                                        class="text-muted font-size-13 d-inline-block"><i
                                                            class="mdi mdi-reply me-1"></i>Reply</a>
                                                </div>
                                            </div><!-- end -->

                                            <div class="d-flex mt-2 align-items-start border-bottom py-4">
                                                <img class="me-3 rounded-circle avatar-sm"
                                                    src="assets/images/users/avatar-10.jpg" alt="">
                                                <div class="flex-1">
                                                    <h5 class="font-size-15 mt-0 mb-1">Jansh Wells
                                                        <small class="text-muted float-end">11:06 AM</small>
                                                    </h5>
                                                    <p class="text-muted">Thanks for the help !!</p>

                                                    <a href="javascript: void(0);"
                                                        class="text-muted font-size-13 d-inline-block"><i
                                                            class="mdi mdi-reply me-1"></i>Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-end mt-3">
                                    <button type="button" class="btn btn-light shadow-none" data-bs-dismiss="modal"
                                        id="cancelMember">Cancel</button>
                                    <button type="button" class="btn btn-soft-primary shadow-none"
                                        id="createnote">Update</button>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-4">
                                <div class="pe-2 mt-4 mt-xl-0">
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <h6 class="mb-0">Attributes</h6>
                                            <hr>
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-sm mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th class="text-muted font-size-14">Status</th>
                                                            <th class="text-end font-size-13">
                                                                <span class="badge badge-soft-primary p-2">In
                                                                    Progress</span>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-muted font-size-14">Priority</th>
                                                            <th class="text-end font-size-13">
                                                                <span class="badge badge-soft-danger p-2">
                                                                    <i
                                                                        class="mdi mdi-alert-circle-outline text-danger me-1"></i>High</span>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-muted font-size-14">Label</th>
                                                            <th class="text-end font-size-13">None</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-muted font-size-14">Repoter</th>
                                                            <th class="text-end font-size-13">Ayaan Curry</th>
                                                        </tr>
                                                    </tbody><!-- end tbody -->
                                                </table><!-- end table -->
                                            </div><!-- end table responsive -->
                                        </div><!-- end card-body -->
                                    </div><!-- end card -->

                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <h6 class="mb-0">Team Members</h6>
                                            <hr>
                                            <div class="d-flex">
                                                <div id="allmember" class="flex-grow-1"></div>
                                                <div class="align-self-end">
                                                    <button class="btn btn-soft-secondary shadow-none btn-sm"
                                                        id="add-members" data-bs-toggle="modal"
                                                        data-bs-target=".add-members">+ Add Members</button>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->

                                    <div class="card mb-0 bg-light">
                                        <div class="card-body">
                                            <h6 class="mb-0">Files</h6>
                                            <hr>
                                            <div class="card mb-2 p-2 fade show" id="file-items-1">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-3 ms-0 flex-shrink-0">
                                                        <div
                                                            class="avatar-title bg-light text-muted rounded font-size-20">
                                                            <i class="mdi mdi-folder-zip"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div class="text-start">
                                                            <h5 class="font-size-14 mb-1">document.zip</h5>
                                                            <p class="text-muted font-size-13 mb-0">5.9 MB</p>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="delete-item" data-id="file-items-1"><i
                                                            class="mdi mdi-trash-can-outline text-danger font-size-16"></i></a>
                                                </div>
                                            </div>
                                            <!-- end card -->
                                            <div class="card mb-2 p-2 fade show" id="file-items-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-3 ms-0 flex-shrink-0">
                                                        <div
                                                            class="avatar-title bg-light text-muted rounded font-size-20">
                                                            <i class="mdi mdi-text-box-check"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div class="text-start">
                                                            <h5 class="font-size-14 mb-1">file_update.docx</h5>
                                                            <p class="text-muted font-size-13 mb-0">2.0 MB</p>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="delete-item" data-id="file-items-2">
                                                        <i
                                                            class="mdi mdi-trash-can-outline text-danger font-size-16"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end card -->

                                            <div class="card mb-0 p-2 fade show" id="file-items-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-3 ms-0 flex-shrink-0">
                                                        <div
                                                            class="avatar-title bg-light text-muted rounded font-size-20">
                                                            <i class="mdi mdi-file-code"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="text-start">
                                                            <h5 class="font-size-14 mb-1">widgets-changes.txt</h5>
                                                            <p class="text-muted font-size-13 mb-0">2.0 MB</p>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="delete-item" data-id="file-items-3"><i
                                                            class="mdi mdi-trash-can-outline text-danger font-size-16"></i></a>
                                                </div>
                                            </div><!-- end card -->
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- KanbanBoard Card Edit Modal -->
        <div class="modal fade bs-task-details-edit" tabindex="-1" role="dialog" id="modalForm" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0 add-task-title" id="add-task-title">Add New Task</h5>
                        <h5 class="modal-title mt-0 update-task-title" id="update-task-title" style="display: none;">
                            Update Task</h5>
                        <button type="button" id="update-task" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="NewtaskForm">
                            <div class="mb-3">
                                <label for="taskname" class="form-label">Project Name</label>
                                <input id="taskname" name="taskname" type="text" class="form-control validate"
                                    placeholder="Enter Project Name..." required>
                            </div>
                            <div class="mb-3">
                                <label for="taskdesc" class="form-label">Project Description</label>
                                <textarea id="taskdesc" class="form-control" name="taskdesc" placeholder="Add Description"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6" id="taskbudget">
                                    <div class="mb-3">
                                        <label for="task-due-date" class="form-label">Due Date</label>
                                        <input class="form-control" type="date" value="2021-09-20" id="task-due-date"
                                            required>
                                    </div><!-- end -->
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Categories</label>
                                        <div>
                                            <select class="form-control" data-trigger name="TaskStatus" id="TaskStatus"
                                                required>
                                                <option value="">Choose...</option>
                                                <option value="Web Design">Web Design</option>
                                                <option value="UI/UX">UI/UX</option>
                                                <option value="React">React</option>
                                            </select>
                                        </div>
                                    </div><!-- end -->
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <div class="mb-3" id="task-progressbar">
                                <label for="taskprogressbar" class="form-label">Progress</label>
                                <input id="taskprogressbar" name="taskprogressbar" type="number" required
                                    class="form-control validate" placeholder="Enter Progress Bar Number...">
                            </div>

                            <div class="pt-2">
                                <p class="fw-medium mb-3">Add Team Member</p>
                                <ul class="list-unstyled user-list validate mt-2" id="taskassignee" data-simplebar
                                    style="max-height: 160px;">
                                    <li>
                                        <div
                                            class="form-check form-check-primary mb-2 font-size-16 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-1"
                                                name="member[]" data-type="image">
                                            <img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-sm"
                                                alt="">
                                            <label class="form-check-label font-size-14 mb-0 ms-3" for="member-1">Albert
                                                Rodarte</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary mb-2 font-size-16 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-2"
                                                name="member[]" data-type="image">
                                            <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-sm"
                                                alt="">
                                            <label class="form-check-label font-size-14 mb-0 ms-3" for="member-2">Denny
                                                Silva</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary mb-2 font-size-16 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-10"
                                                name="member[]" data-type="image">
                                            <img src="assets/images/users/avatar-10.jpg"
                                                class="rounded-circle avatar-sm" alt="">
                                            <label class="form-check-label font-size-14 mb-0 ms-3" for="member-10">Jansh
                                                Wells</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary mb-2 font-size-16 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-3"
                                                name="member[]" data-type="image">
                                            <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm"
                                                alt="">
                                            <label class="form-check-label font-size-14 mb-0 ms-3" for="member-3">Adrian
                                                Rodarte</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary mb-2 font-size-16 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-4"
                                                name="member[]" data-type="image">
                                            <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-sm"
                                                alt="">
                                            <label class="form-check-label ms-3 font-size-14 mb-0" for="member-4">Frank
                                                Hamilton</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-5"
                                                name="member[]" data-type="image">
                                            <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-sm"
                                                alt="">
                                            <label class="form-check-label ms-3 font-size-14 mb-0" for="member-5">Justin
                                                Howard</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary mb-2 font-size-16 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-6"
                                                name="member[]" data-type="image">
                                            <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-sm"
                                                alt="">
                                            <label class="form-check-label ms-3 font-size-14 mb-0"
                                                for="member-6">Michael Lawrence</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary mb-2 font-size-16 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-7"
                                                name="member[]" data-type="image">
                                            <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-sm"
                                                alt="">
                                            <label class="form-check-label ms-3 font-size-14 mb-0" for="member-7">Oliver
                                                Sharp</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary mb-2 font-size-16 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-8"
                                                name="member[]" data-type="image">
                                            <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-sm"
                                                alt="">
                                            <label class="form-check-label font-size-14 mb-0 ms-3"
                                                for="member-8">Richard Simpson</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-9"
                                                name="member[]" data-type="image">
                                            <img src="assets/images/users/avatar-9.jpg" class="rounded-circle avatar-sm"
                                                alt="">
                                            <label class="form-check-label ms-3 font-size-14 mb-0" for="member-9">Dan
                                                Gibson</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary mb-2 font-size-16 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-15"
                                                name="member[]" data-type="dataimage">
                                            <div class="avatar-sm">
                                                <div class="avatar-title rounded-circle bg-primary">
                                                    D
                                                </div>
                                            </div>
                                            <label class="form-check-label font-size-14 mb-0 ms-3" for="member-15">Den
                                                Hudda</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-12"
                                                name="member[]" data-type="dataimage">
                                            <div class="avatar-sm">
                                                <div class="avatar-title rounded-circle bg-purple">
                                                    J
                                                </div>
                                            </div>
                                            <label class="form-check-label ms-3 font-size-14 mb-0" for="member-12">Jim
                                                Lee</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-13"
                                                name="member[]" data-type="dataimage">
                                            <div class="avatar-sm">
                                                <div class="avatar-title rounded-circle bg-primary">
                                                    V
                                                </div>
                                            </div>
                                            <label class="form-check-label ms-3 font-size-14 mb-0" for="member-13">Vihan
                                                Bragg</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-14"
                                                name="member[]" data-type="dataimage">
                                            <div class="avatar-sm">
                                                <div class="avatar-title rounded-circle bg-purple">
                                                    L
                                                </div>
                                            </div>
                                            <label class="form-check-label ms-3 font-size-14 mb-0" for="member-14">Lisa
                                                Freeman</label>
                                        </div>
                                    </li><!-- end li -->
                                </ul><!-- end ul -->
                            </div>
                            <!-- end -->

                            <div class="mt-3">
                                <p class="fw-medium mb-0">Sub Tasks</p>
                                <div id="sub-tasks" class="mt-1">
                                    <div>
                                        <div class="sub-group-item">
                                            <div
                                                class="checklist px-0 d-flex form-check font-size-16 align-items-center font-size-15">
                                                <div class="flex-grow-1">
                                                    <input type="checkbox" name="subtask" class="form-check-input ms-0"
                                                        id="customDesign">
                                                    <label class="form-check-label font-size-14 mb-0 ms-3"
                                                        for="customDesign">Brand Logo Design.</label>
                                                </div>
                                                <div>
                                                    <i class="mdi mdi-text mdi-24px text-muted"></i>
                                                </div>
                                            </div><!-- end -->
                                        </div>
                                    </div>

                                    <div>
                                        <div class="sub-group-item">
                                            <div
                                                class="checklist px-0 d-flex form-check font-size-16 align-items-center font-size-15">
                                                <div class="flex-grow-1">
                                                    <input type="checkbox" name="subtask" class="form-check-input ms-0"
                                                        id="multiDesign" checked>
                                                    <label class="form-check-label font-size-14 mb-0 ms-3"
                                                        for="multiDesign">Multipurpose Design.</label>
                                                </div>
                                                <div>
                                                    <i class="mdi mdi-text mdi-24px text-muted"></i>
                                                </div>
                                            </div><!-- end -->
                                        </div>
                                    </div>

                                    <div>
                                        <div class="sub-group-item">
                                            <div
                                                class="checklist px-0 d-flex form-check font-size-16 align-items-center font-size-15">
                                                <div class="flex-grow-1">
                                                    <input type="checkbox" name="subtask" class="form-check-input ms-0"
                                                        id="appDesign">
                                                    <label class="form-check-label font-size-14 mb-0 ms-3"
                                                        for="appDesign">App Pages.</label>
                                                </div>
                                                <div>
                                                    <i class="mdi mdi-text mdi-24px text-muted"></i>
                                                </div>
                                            </div><!-- end -->
                                        </div>
                                    </div><!-- end -->
                                </div>

                                <div class="row px-0 mt-2">
                                    <div class="col">
                                        <input type="text" id="myInput" class="form-control" placeholder="Type task">
                                    </div>
                                    <div class="col-auto">
                                        <span onclick="newElement()" class="btn btn-light float-end">Add Tasks</span>
                                    </div>
                                </div><!-- end -->
                            </div>

                            <div class="mt-4" id="attachments-files"></div>
                            <div class="row">
                                <div class="col-lg-10">
                                    <button type="submit" class="btn btn-primary addtask" id="addtask">Create
                                        Task</button>
                                    <button type="submit" class="btn btn-primary updatetaskdetail"
                                        id="updatetaskdetail">Update
                                        Task</button>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Add Member Modal -->
        <div class="modal fade add-members" tabindex="-1" role="dialog" aria-labelledby="addMemberModal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border shadow">
                    <div class="modal-header bg-soft-primary">
                        <h5 class="modal-title font-size-16 text-primary" id="addMemberModal">Employee List</h5>
                        <button type="button" class="btn-close" id="save-employee" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <!-- end modal header -->
                    <div class="modal-body">
                        <div id="member-list"></div>
                        <div class="search-box mt-2 py-2 px-4">
                            <div class="position-relative">
                                <input type="text" class="form-control rounded" placeholder="Search...">
                                <i class="bx bx-search-alt search-icon"></i>
                            </div>
                        </div>
                        <!-- end search box -->
                        <div data-simplebar style="max-height: 300px;">

                            <ul class="list-unstyled p-3 pb-0 mb-0" id="member-lists">
                                <li>
                                    <div
                                        class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                        <input class="form-check-input member-list-checkbox" type="checkbox"
                                            id="list-member-1" name="member[]" data-name="Albert Rodarte"
                                            data-image="assets/images/users/avatar-1.jpg" data-type="image"
                                            data-id="member-item-1">
                                        <img src="assets/images/users/avatar-1.jpg"
                                            class="rounded-circle avatar-sm ms-3" alt="">
                                        <label class="form-check-label font-size-14 ms-3 mb-0" for="member-1">Albert
                                            Rodarte</label>
                                    </div>
                                </li><!-- end li -->
                                <li>
                                    <div
                                        class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                        <input class="form-check-input member-list-checkbox" type="checkbox"
                                            id="list-member-2" name="member[]" data-name="Denny Silva"
                                            data-image="assets/images/users/avatar-2.jpg" data-type="image"
                                            data-id="member-item-2">
                                        <img src="assets/images/users/avatar-2.jpg"
                                            class="rounded-circle avatar-sm ms-3" alt="">
                                        <label class="form-check-label font-size-14 ms-3 mb-0" for="member-2">Denny
                                            Silva</label>
                                    </div>
                                </li><!-- end li -->
                                <li>
                                    <div
                                        class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                        <input class="form-check-input member-list-checkbox" type="checkbox"
                                            id="list-member-10" name="member[]" data-name="Jansh Wells"
                                            data-image="assets/images/users/avatar-10.jpg" data-type="image"
                                            data-id="member-item-10">
                                        <img src="assets/images/users/avatar-10.jpg"
                                            class="rounded-circle avatar-sm ms-3" alt="">
                                        <label class="form-check-label font-size-14 ms-3 mb-0" for="member-10">Jansh
                                            Wells</label>
                                    </div>
                                </li><!-- end li -->
                                <li>
                                    <div
                                        class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                        <input class="form-check-input member-list-checkbox" type="checkbox"
                                            id="list-member-3" name="member[]" data-name="Adrian Rodarte"
                                            data-image="assets/images/users/avatar-3.jpg" data-type="image"
                                            data-id="member-item-3">
                                        <img src="assets/images/users/avatar-3.jpg"
                                            class="rounded-circle avatar-sm ms-3" alt="">
                                        <label class="form-check-label font-size-14 ms-3 mb-0" for="member-3">Adrian
                                            Rodarte</label>
                                    </div>
                                </li><!-- end li -->
                                <li>
                                    <div
                                        class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                        <input class="form-check-input member-list-checkbox" type="checkbox"
                                            id="list-member-4" name="member[]" data-name="Frank Hamilton"
                                            data-image="assets/images/users/avatar-4.jpg" data-type="image"
                                            data-id="member-item-4">
                                        <img src="assets/images/users/avatar-4.jpg"
                                            class="rounded-circle avatar-sm ms-3" alt="">
                                        <label class="form-check-label font-size-14 ms-3 mb-0" for="member-4">Frank
                                            Hamilton</label>
                                    </div>
                                </li><!-- end li -->
                                <li>
                                    <div
                                        class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                        <input class="form-check-input member-list-checkbox" type="checkbox"
                                            id="list-member-5" name="member[]" data-name="Justin Howard"
                                            data-image="assets/images/users/avatar-5.jpg" data-type="image"
                                            data-id="member-item-5">
                                        <img src="assets/images/users/avatar-5.jpg"
                                            class="rounded-circle avatar-sm ms-3" alt="">
                                        <label class="form-check-label font-size-14 ms-3 mb-0" for="member-5">Justin
                                            Howard</label>
                                    </div>
                                </li><!-- end li -->
                                <li>
                                    <div
                                        class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                        <input class="form-check-input member-list-checkbox" type="checkbox"
                                            id="list-member-6" name="member[]" data-name="Michael Lawrence"
                                            data-image="assets/images/users/avatar-6.jpg" data-type="image"
                                            data-id="member-item-6">
                                        <img src="assets/images/users/avatar-6.jpg"
                                            class="rounded-circle avatar-sm ms-3" alt="">
                                        <label class="form-check-label font-size-14 ms-3 mb-0" for="member-6">Michael
                                            Lawrence</label>
                                    </div>
                                </li><!-- end li -->
                                <li>
                                    <div
                                        class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                        <input class="form-check-input member-list-checkbox" type="checkbox"
                                            id="list-member-7" name="member[]" data-name="Oliver Sharp"
                                            data-image="assets/images/users/avatar-7.jpg" data-type="image"
                                            data-id="member-item-7">
                                        <img src="assets/images/users/avatar-7.jpg"
                                            class="rounded-circle avatar-sm ms-3" alt="">
                                        <label class="form-check-label font-size-14 ms-3 mb-0" for="member-7">Oliver
                                            Sharp</label>
                                    </div>
                                </li><!-- end li -->
                                <li>
                                    <div
                                        class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                        <input class="form-check-input member-list-checkbox" type="checkbox"
                                            id="list-member-8" name="member[]" data-name="Richard Simpson"
                                            data-image="assets/images/users/avatar-8.jpg" data-type="image"
                                            data-id="member-item-8">
                                        <img src="assets/images/users/avatar-8.jpg"
                                            class="rounded-circle avatar-sm ms-3" alt="">
                                        <label class="form-check-label font-size-14 ms-3 mb-0" for="member-8">Richard
                                            Simpson</label>
                                    </div>
                                </li><!-- end li -->
                                <li>
                                    <div
                                        class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                        <input class="form-check-input member-list-checkbox" type="checkbox"
                                            id="list-member-9" name="member[]" data-name="Dan Gibson"
                                            data-image="assets/images/users/avatar-9.jpg" data-type="image"
                                            data-id="member-item-9">
                                        <img src="assets/images/users/avatar-9.jpg"
                                            class="rounded-circle avatar-sm ms-3" alt="">
                                        <label class="form-check-label font-size-14 ms-3 mb-0" for="member-9">Dan
                                            Gibson</label>
                                    </div>
                                </li><!-- end li -->
                                <li>
                                    <div
                                        class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                        <input class="form-check-input member-list-checkbox" type="checkbox"
                                            id="list-member-15" name="member[]" data-name="Den Hudda" data-image="D"
                                            data-type="dataimage" data-id="member-item-1">
                                        <div class="avatar-sm ms-3">
                                            <div class="avatar-title rounded-circle bg-primary">
                                                D
                                            </div>
                                        </div>
                                        <label class="form-check-label font-size-14 ms-3 mb-0" for="member-15">Den
                                            Hudda</label>
                                    </div>
                                </li><!-- end li -->
                                <li>
                                    <div
                                        class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                        <input class="form-check-input member-list-checkbox" type="checkbox"
                                            id="list-member-12" name="member[]" data-name="Jim Lee" data-image="J"
                                            data-type="dataimage" data-id="member-item-12">
                                        <div class="avatar-sm ms-3">
                                            <div class="avatar-title rounded-circle bg-purple">
                                                J
                                            </div>
                                        </div>
                                        <label class="form-check-label font-size-14 ms-3 mb-0" for="member-12">Jim
                                            Lee</label>
                                    </div>
                                </li><!-- end li -->
                                <li>
                                    <div
                                        class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                        <input class="form-check-input member-list-checkbox" type="checkbox"
                                            id="list-member-13" name="member[]" data-name="Vihan Bragg" data-image="V"
                                            data-type="dataimage" data-id="member-item-13">
                                        <div class="avatar-sm ms-3">
                                            <div class="avatar-title rounded-circle bg-primary">
                                                V
                                            </div>
                                        </div>
                                        <label class="form-check-label font-size-14 ms-3 mb-0" for="member-13">Vihan
                                            Bragg</label>
                                    </div>
                                </li><!-- end li -->
                                <li>
                                    <div
                                        class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                        <input class="form-check-input member-list-checkbox" type="checkbox"
                                            id="list-member-14" name="member[]" data-name="Lisa Freeman" data-image="L"
                                            data-type="dataimage" data-id="member-item-14">
                                        <div class="avatar-sm ms-3">
                                            <div class="avatar-title rounded-circle bg-purple">
                                                L
                                            </div>
                                        </div>
                                        <label class="form-check-label font-size-14 ms-3 mb-0" for="member-14">Lisa
                                            Freeman</label>
                                    </div>
                                </li><!-- end li -->
                            </ul><!-- end ul -->
                        </div>
                    </div><!-- /.modal body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-soft-primary" id="saveAllMember">Save</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Add New Board modal -->
        <div class="modal fade bs-add-new-board" id="bs-add-new-board" tabindex="-1" role="dialog"
            aria-labelledby="myNewBoardModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0">
                    <div class="modal-header bg-soft-primary">
                        <h5 class="modal-title font-size-16 text-primary" id="myNewBoardModal">Add Board</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="btn-close"></button>
                    </div>
                    <div class="modal-body p-4">
                        <form action="#" method="post">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Board Name</label>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button id="taskboardStageCreat" type="button" class="btn btn-soft-primary">Create</button>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
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
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Metismenu Js -->
<script src="assets/libs/metismenujs/metismenujs.min.js"></script>

<!-- Simplebar Js -->
<script src="assets/libs/simplebar/simplebar.min.js"></script>

<!-- Feather Js -->
<script src="assets/libs/feather-icons/feather.min.js"></script>


<!-- dragula plugins -->
<script src="assets/libs/dragula/dragula.min.js"></script>

<!-- dom autoscroll -->
<script src="assets/libs/dom-autoscroller/dom-autoscroller.min.js"></script>

<!-- choice plugins -->
<script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

<!-- flatpickr js -->
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>

<!-- moment Js -->
<script src="assets/js/pages/moment.js"></script>

<!-- kanbanboard Js -->
<script src="assets/js/pages/kanbanboard.init.js"></script>

<!-- team project remove -->
<script src="assets/js/pages/remove.init.js"></script>

<!-- flatpickr init -->
<script src="assets/js/pages/flatpickr.init.js"></script>

<!-- choice init -->
<script src="assets/js/pages/choices.init.js"></script>

<!-- custom Js -->
<script src="assets/js/app.js"></script>

</body>


<!-- Mirrored from preview.pichforest.com/probic/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2024 11:25:51 GMT -->
</html>
