@extends('layouts.dashboardlayout')
@section('links')
@endsection
@section('content')
<div class="main-content">

    <div class="page-content">

        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Employee</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                <li class="breadcrumb-item active">Employee</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-xl-12">

                    <div>
                        <div class="d-flex flex-column flex-sm-row justify-content-between">
                            <div class="search-box">
                                <div class="position-relative">
                                    <input type="text" id="search-employee"
                                        class="form-control bg-whitetext-secondary rounded"
                                        onkeyup="searchEmployee()" placeholder="Search...">
                                    <i class="uil uil-search search-icon"></i>
                                </div>
                            </div>
                            <div class="mt-3 mt-md-0">
                                <a href="#" class="btn btn-soft-primary" data-bs-toggle="modal"
                                    data-bs-target=".bs-example-edit-employee" onclick="addEmployee()"><i
                                        class="mdi mdi-plus me-1"></i>New Members</a>
                            </div>
                        </div><!-- end -->
                        <div class="row mt-4" id="employee-items">
                            <div class="col-xl-3 col-md-6 employee-item" id="employee-items-1">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-end">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle font-size-16 text-muted"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item text-primary"
                                                        href="javascript: void(0);" data-bs-toggle="modal"
                                                        data-bs-target=".bs-example-edit-employee"
                                                        onclick="editProjects('employee-items-1')">
                                                        <i
                                                            class="mdi mdi-file-document-edit-outline me-2"></i>Edit</a>
                                                    <a class="dropdown-item text-danger delete-item"
                                                        onclick="deleteEmployee('employee-items-1')"
                                                        data-id="employee-items-1" href="javascript: void(0);"><i
                                                            class="mdi mdi-trash-can-outline me-2"></i>Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <img src="assets/images/users/avatar-10.jpg"
                                                class="avatar-lg img-fluid rounded-circle employee-image"
                                                data-type="image" alt="user-image">
                                            <h6 class="font-size-15 mt-3 mb-1"><a href="user-profile.html"
                                                    class="text-primary employee-name">Jansh Wells</a></h6>
                                            <p class="text-muted mb-0 font-size-12 fw-medium employee-designation">
                                                Web Designer</p>
                                        </div>

                                        <div class="d-flex flex-wrap gap-2 mt-3 justify-content-center">
                                            <div>
                                                <p class="text-muted fw-medium mb-0">Tag :</p>
                                            </div>
                                            <div class="employee-tags d-flex flex-wrap gap-1">
                                                <span class="badge badge-soft-secondary p-2">Html</span>
                                                <span class="badge badge-soft-secondary p-2">Css</span>
                                                <span class="badge badge-soft-secondary p-2">Bootstrap</span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                    <div class="card-footer p-0">
                                        <div class="row g-0">
                                            <div class="col-6">
                                                <div class="text-center border-end p-3">
                                                    <h6 class="font-size-14 mb-0">
                                                        <a href="javascript: void(0);"
                                                            class="text-muted employee-email"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="janshwellsprobic.com">
                                                            <i
                                                                class="mdi mdi-email-outline align-middle me-2"></i>E-mail
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-6">
                                                <div class="text-center p-3">
                                                    <h6 class="font-size-14 text-muted mb-0">
                                                        <a href="javascript: void(0);"
                                                            class="text-muted employee-phoneno"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="050 519 9488">
                                                            <i
                                                                class="mdi mdi-phone-outline align-middle me-2"></i>Phone
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end card-footer -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6 employee-item" id="employee-items-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-end">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle font-size-16 text-muted"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item text-primary"
                                                        href="javascript: void(0);" data-bs-toggle="modal"
                                                        data-bs-target=".bs-example-edit-employee"
                                                        onclick="editProjects('employee-items-2')">
                                                        <i
                                                            class="mdi mdi-file-document-edit-outline me-2"></i>Edit</a>
                                                    <a class="dropdown-item text-danger delete-item"
                                                        onclick="deleteEmployee('employee-items-2')"
                                                        data-id="employee-items-2" href="javascript: void(0);"><i
                                                            class="mdi mdi-trash-can-outline me-2"></i>Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <img src="assets/images/users/avatar-2.jpg"
                                                class="avatar-lg img-fluid rounded-circle employee-image"
                                                data-type="image" alt="user-image">
                                            <h6 class="font-size-15 mt-3 mb-1"><a href="user-profile.html"
                                                    class="text-primary employee-name">Denny Silva</a></h6>
                                            <p class="text-muted mb-0 font-size-12 fw-medium employee-designation">
                                                Web Developer</p>
                                        </div>

                                        <div class="d-flex flex-wrap gap-2 mt-3 justify-content-center">
                                            <div>
                                                <p class="text-muted fw-medium mb-0">Tag :</p>
                                            </div>
                                            <div class="employee-tags d-flex flex-wrap gap-1">
                                                <span class="badge badge-soft-secondary p-2">Laravel</span>
                                                <span class="badge badge-soft-secondary p-2">Django</span>
                                                <span class="badge badge-soft-secondary p-2">Python</span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                    <div class="card-footer p-0">
                                        <div class="row g-0">
                                            <div class="col-6">
                                                <div class="text-center border-end p-3">
                                                    <h6 class="font-size-14 mb-0">
                                                        <a href="javascript: void(0);"
                                                            class="text-muted employee-email"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="dennysilva@probic.com">
                                                            <i
                                                                class="mdi mdi-email-outline align-middle me-2"></i>E-mail
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-6">
                                                <div class="text-center p-3">
                                                    <h6 class="font-size-14 text-muted mb-0">
                                                        <a href="javascript: void(0);"
                                                            class="text-muted employee-phoneno"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="044 062 2075">
                                                            <i
                                                                class="mdi mdi-phone-outline align-middle me-2"></i>Phone
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end card-footer -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6 employee-item" id="employee-items-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-end">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle font-size-16 text-muted"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item text-primary"
                                                        href="javascript: void(0);" data-bs-toggle="modal"
                                                        data-bs-target=".bs-example-edit-employee"
                                                        onclick="editProjects('employee-items-3')">
                                                        <i
                                                            class="mdi mdi-file-document-edit-outline me-2"></i>Edit</a>
                                                    <a class="dropdown-item text-danger delete-item"
                                                        onclick="deleteEmployee('employee-items-3')"
                                                        data-id="employee-items-3" href="javascript: void(0);"><i
                                                            class="mdi mdi-trash-can-outline me-2"></i>Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <img src="assets/images/users/avatar-3.jpg"
                                                class="avatar-lg img-fluid rounded-circle employee-image"
                                                data-type="image" alt="user-image">
                                            <h6 class="font-size-15 mt-3 mb-1"><a href="user-profile.html"
                                                    class="text-primary employee-name">Jacquelin Weidman</a></h6>
                                            <p class="text-muted mb-0 font-size-12 fw-medium employee-designation">
                                                UI/UX Designer</p>
                                        </div>

                                        <div class="d-flex flex-wrap gap-2 mt-3 justify-content-center">
                                            <div>
                                                <p class="text-muted fw-medium mb-0">Tag :</p>
                                            </div>
                                            <div class="employee-tags d-flex flex-wrap gap-1">
                                                <span class="badge badge-soft-secondary p-2">Adobe XD</span>
                                                <span class="badge badge-soft-secondary p-2">illustrator</span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->

                                    <div class="card-footer p-0">
                                        <div class="row g-0">
                                            <div class="col-6">
                                                <div class="text-center border-end p-3">
                                                    <h6 class="font-size-14 mb-0">
                                                        <a href="javascript: void(0);"
                                                            class="text-muted employee-email"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="jacquelinweidman@probic.com">
                                                            <i
                                                                class="mdi mdi-email-outline align-middle me-2"></i>E-mail
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-6">
                                                <div class="text-center p-3">
                                                    <h6 class="font-size-14 text-muted mb-0">
                                                        <a href="javascript: void(0);"
                                                            class="text-muted employee-phoneno"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="041 684 6286">
                                                            <i
                                                                class="mdi mdi-phone-outline align-middle me-2"></i>Phone
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end card-footer -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6 employee-item" id="employee-items-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-end">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle font-size-16 text-muted"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item text-primary"
                                                        href="javascript: void(0);" data-bs-toggle="modal"
                                                        data-bs-target=".bs-example-edit-employee"
                                                        onclick="editProjects('employee-items-4')">
                                                        <i
                                                            class="mdi mdi-file-document-edit-outline me-2"></i>Edit</a>
                                                    <a class="dropdown-item text-danger delete-item"
                                                        onclick="deleteEmployee('employee-items-4')"
                                                        data-id="employee-items-4" href="#">
                                                        <i class="mdi mdi-trash-can-outline me-2"></i>Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <div class="employee-image" data-type="text">
                                                <div class="avatar-lg mx-auto">
                                                    <span
                                                        class="avatar-title rounded-circle fs-4 bg-soft-primary text-primary">
                                                        K
                                                    </span>
                                                </div>
                                            </div>
                                            <h6 class="font-size-15 mt-3 mb-1"><a href="user-profile.html"
                                                    class="text-primary employee-name">Kennith Silverberg</a></h6>
                                            <p class="text-muted mb-0 font-size-12 fw-medium employee-designation">
                                                Mobile Developer</p>
                                        </div>

                                        <div class="d-flex flex-wrap gap-2 mt-3 justify-content-center">
                                            <div>
                                                <p class="text-muted fw-medium mb-0">Tag :</p>
                                            </div>
                                            <div class="employee-tags d-flex flex-wrap gap-1">
                                                <span class="badge badge-soft-secondary p-2">IOS</span>
                                                <span class="badge badge-soft-secondary p-2">Android</span>
                                            </div>
                                        </div>

                                    </div><!-- end card body -->
                                    <div class="card-footer p-0">
                                        <div class="row g-0">
                                            <div class="col-6">
                                                <div class="text-center border-end p-3">
                                                    <h6 class="font-size-14 mb-0">
                                                        <a href="javascript: void(0);"
                                                            class="text-muted employee-email"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="kennithsilverberg@probic.com">
                                                            <i
                                                                class="mdi mdi-email-outline align-middle me-2"></i>E-mail
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-6">
                                                <div class="text-center p-3">
                                                    <h6 class="font-size-14 text-muted mb-0">
                                                        <a href="javascript: void(0);"
                                                            class="text-muted employee-phoneno"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="050 730 4869">
                                                            <i
                                                                class="mdi mdi-phone-outline align-middle me-2"></i>Phone
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end card-footer -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6 employee-item" id="employee-items-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-end">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle font-size-16 text-muted"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item text-primary"
                                                        href="javascript: void(0);" data-bs-toggle="modal"
                                                        data-bs-target=".bs-example-edit-employee"
                                                        onclick="editProjects('employee-items-5')">
                                                        <i
                                                            class="mdi mdi-file-document-edit-outline me-2"></i>Edit</a>
                                                    <a class="dropdown-item text-danger delete-item"
                                                        onclick="deleteEmployee('employee-items-5')"
                                                        data-id="employee-items-5" href="javascript: void(0);">
                                                        <i class="mdi mdi-trash-can-outline me-2"></i>Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <img src="assets/images/users/avatar-5.jpg"
                                                class="avatar-lg img-fluid rounded-circle employee-image"
                                                data-type="image" alt="user-image">
                                            <h6 class="font-size-15 mt-3 mb-1"><a href="user-profile.html"
                                                    class="text-primary employee-name">Anthony Sampson</a></h6>
                                            <p class="text-muted mb-0 font-size-12 fw-medium employee-designation">
                                                Full Stack</p>
                                        </div>

                                        <div class="d-flex flex-wrap gap-2 mt-3 justify-content-center">
                                            <div>
                                                <p class="text-muted fw-medium mb-0">Tag :</p>
                                            </div>
                                            <div class="employee-tags d-flex flex-wrap gap-1">
                                                <span class="badge badge-soft-secondary p-2">Angular</span>
                                                <span class="badge badge-soft-secondary p-2">React Native</span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->

                                    <div class="card-footer p-0">
                                        <div class="row g-0">
                                            <div class="col-6">
                                                <div class="text-center border-end p-3">
                                                    <h6 class="font-size-14 mb-0">
                                                        <a href="javascript: void(0);"
                                                            class="text-muted employee-email"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="anthonysampson@probic.com">
                                                            <i
                                                                class="mdi mdi-email-outline align-middle me-2"></i>E-mail
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-6">
                                                <div class="text-center p-3">
                                                    <h6 class="font-size-14 text-muted mb-0">
                                                        <a href="javascript: void(0);"
                                                            class="text-muted employee-phoneno"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="042 272 4283">
                                                            <i
                                                                class="mdi mdi-phone-outline align-middle me-2"></i>Phone
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end card-footer -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6 employee-item" id="employee-items-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-end">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle font-size-16 text-muted"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item text-primary"
                                                        href="javascript: void(0);" data-bs-toggle="modal"
                                                        data-bs-target=".bs-example-edit-employee"
                                                        onclick="editProjects('employee-items-6')">
                                                        <i
                                                            class="mdi mdi-file-document-edit-outline me-2"></i>Edit</a>
                                                    <a class="dropdown-item text-danger delete-item"
                                                        onclick="deleteEmployee('employee-items-6')"
                                                        data-id="employee-items-6" href="javascript: void(0);">
                                                        <i class="mdi mdi-trash-can-outline me-2"></i>Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <img src="assets/images/users/avatar-6.jpg"
                                                class="avatar-lg img-fluid rounded-circle employee-image"
                                                data-type="image" alt="user-image">
                                            <h5 class="font-size-15 mt-3 mb-1"><a href="user-profile.html"
                                                    class="text-primary employee-name">Maurice Ringler</a></h5>
                                            <p class="text-muted mb-0 font-size-12 fw-medium employee-designation">
                                                Web Designer</p>
                                        </div>

                                        <div class="d-flex flex-wrap gap-2 mt-3 justify-content-center">
                                            <div>
                                                <p class="text-muted fw-medium mb-0">Tag :</p>
                                            </div>
                                            <div class="employee-tags d-flex flex-wrap gap-1">
                                                <span class="badge badge-soft-secondary p-2">Bootstrap</span>
                                                <span class="badge badge-soft-secondary p-2">Html</span>
                                                <span class="badge badge-soft-secondary p-2">Css</span>
                                                <span class="badge badge-soft-secondary p-2">Js</span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->

                                    <div class="card-footer p-0">
                                        <div class="row g-0">
                                            <div class="col-6">
                                                <div class="text-center border-end p-3">
                                                    <h6 class="font-size-14 mb-0">
                                                        <a href="javascript: void(0);"
                                                            class="text-muted employee-email"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="mauriceringler@probic.com">
                                                            <i
                                                                class="mdi mdi-email-outline align-middle me-2"></i>E-mail
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-6">
                                                <div class="text-center p-3">
                                                    <h6 class="font-size-14 text-muted mb-0">
                                                        <a href="javascript: void(0);"
                                                            class="text-muted employee-phoneno"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="250 696 9150">
                                                            <i
                                                                class="mdi mdi-phone-outline align-middle me-2"></i>Phone
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end card-footer -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6 employee-item" id="employee-items-7">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-end">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle font-size-16 text-muted"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item text-primary"
                                                        href="javascript: void(0);" data-bs-toggle="modal"
                                                        data-bs-target=".bs-example-edit-employee"
                                                        onclick="editProjects('employee-items-7')">
                                                        <i
                                                            class="mdi mdi-file-document-edit-outline me-2"></i>Edit</a>
                                                    <a class="dropdown-item text-danger delete-item"
                                                        onclick="deleteEmployee('employee-items-7')"
                                                        data-id="employee-items-7" href="javascript: void(0);">
                                                        <i class="mdi mdi-trash-can-outline me-2"></i>Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <img src="assets/images/users/avatar-7.jpg"
                                                class="avatar-lg img-fluid rounded-circle employee-image"
                                                data-type="image" alt="user-image">
                                            <h5 class="font-size-15 mt-3 mb-1"><a href="user-profile.html"
                                                    class="text-primary employee-name">Nishant Wilson</a></h5>
                                            <p class="text-muted mb-0 font-size-12 fw-medium employee-designation">
                                                Flutter Developer</p>
                                        </div>

                                        <div class="d-flex flex-wrap gap-2 mt-3 justify-content-center">
                                            <div>
                                                <p class="text-muted fw-medium mb-0">Tag :</p>
                                            </div>
                                            <div class="employee-tags d-flex flex-wrap gap-1">
                                                <span class="badge badge-soft-secondary p-2">Adobe XD</span>
                                                <span class="badge badge-soft-secondary p-2">Photoshop</span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->

                                    <div class="card-footer p-0">
                                        <div class="row g-0">
                                            <div class="col-6">
                                                <div class="text-center border-end p-3">
                                                    <h6 class="font-size-14 mb-0">
                                                        <a href="javascript: void(0);"
                                                            class="text-muted employee-email"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="nishantwilson@probic.com">
                                                            <i
                                                                class="mdi mdi-email-outline align-middle me-2"></i>E-mail
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-6">
                                                <div class="text-center p-3">
                                                    <h6 class="font-size-14 text-muted mb-0">
                                                        <a href="javascript: void(0);"
                                                            class="text-muted employee-phoneno"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="778 883 7961">
                                                            <i
                                                                class="mdi mdi-phone-outline align-middle me-2"></i>Phone
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end card-footer -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6 employee-item" id="employee-items-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-end">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle font-size-16 text-muted"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item text-primary"
                                                        href="javascript: void(0);" data-bs-toggle="modal"
                                                        data-bs-target=".bs-example-edit-employee"
                                                        onclick="editProjects('employee-items-8')">
                                                        <i
                                                            class="mdi mdi-file-document-edit-outline me-2"></i>Edit</a>
                                                    <a class="dropdown-item text-danger delete-item"
                                                        onclick="deleteEmployee('employee-items-8')"
                                                        data-id="employee-items-8" href="javascript: void(0);">
                                                        <i class="mdi mdi-trash-can-outline me-2"></i>Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <img src="assets/images/users/avatar-8.jpg"
                                                class="avatar-lg img-fluid rounded-circle employee-image"
                                                data-type="image" alt="user-image">
                                            <h5 class="font-size-15 mt-3 mb-1"><a href="user-profile.html"
                                                    class="text-primary employee-name">Julia Taylor</a></h5>
                                            <p class="text-muted mb-0 font-size-12 fw-medium employee-designation">
                                                Graphic Design</p>
                                        </div>

                                        <div class="d-flex flex-wrap gap-2 mt-3 justify-content-center">
                                            <div>
                                                <p class="text-muted fw-medium mb-0">Tag :</p>
                                            </div>
                                            <div class="employee-tags d-flex flex-wrap gap-1">
                                                <span class="badge badge-soft-secondary p-2">Photoshop</span>
                                                <span class="badge badge-soft-secondary p-2">Sketch</span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->

                                    <div class="card-footer p-0">
                                        <div class="row g-0">
                                            <div class="col-6">
                                                <div class="text-center border-end p-3">
                                                    <h6 class="font-size-14 mb-0">
                                                        <a href="javascript: void(0);"
                                                            class="text-muted employee-email"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="Juliataylor@probic.com">
                                                            <i
                                                                class="mdi mdi-email-outline align-middle me-2"></i>E-mail
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-6">
                                                <div class="text-center p-3">
                                                    <h6 class="font-size-14 text-muted mb-0">
                                                        <a href="javascript: void(0);"
                                                            class="text-muted employee-phoneno"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="603 388 4547">
                                                            <i
                                                                class="mdi mdi-phone-outline align-middle me-2"></i>Phone
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end card-footer -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6 employee-item" id="employee-items-9">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-end">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle font-size-16 text-muted"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item text-primary"
                                                        href="javascript: void(0);" data-bs-toggle="modal"
                                                        data-bs-target=".bs-example-edit-employee"
                                                        onclick="editProjects('employee-items-9')">
                                                        <i
                                                            class="mdi mdi-file-document-edit-outline me-2"></i>Edit</a>
                                                    <a class="dropdown-item text-danger delete-item"
                                                        onclick="deleteEmployee('employee-items-9')"
                                                        data-id="employee-items-9" href="javascript: void(0);">
                                                        <i class="mdi mdi-trash-can-outline me-2"></i>Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <div class="employee-image" data-type="text">
                                                <div class="avatar-lg mx-auto">
                                                    <span
                                                        class="avatar-title rounded-circle fs-4 bg-soft-warning text-warning">
                                                        M
                                                    </span>
                                                </div>
                                            </div>
                                            <h5 class="font-size-15 mt-3 mb-1"><a href="user-profile.html"
                                                    class="text-primary employee-name">Muskan Weaver</a></h5>
                                            <p class="text-muted mb-0 font-size-12 fw-medium employee-designation">
                                                Backend Developer</p>
                                        </div>

                                        <div class="d-flex flex-wrap gap-2 mt-3 justify-content-center">
                                            <div>
                                                <p class="text-muted fw-medium mb-0">Tag :</p>
                                            </div>
                                            <div class="employee-tags d-flex flex-wrap gap-1">
                                                <span class="badge badge-soft-secondary p-2">Python</span>
                                                <span class="badge badge-soft-secondary p-2">Django</span>
                                                <span class="badge badge-soft-secondary p-2">Laravel</span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                    <div class="card-footer p-0">
                                        <div class="row g-0">
                                            <div class="col-6">
                                                <div class="text-center border-end p-3">
                                                    <h6 class="font-size-14 mb-0">
                                                        <a href="javascript: void(0);"
                                                            class="text-muted employee-email"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="muskanweaver@probic.com">
                                                            <i
                                                                class="mdi mdi-email-outline align-middle me-2"></i>E-mail
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-6">
                                                <div class="text-center p-3">
                                                    <h6 class="font-size-14 text-muted mb-0">
                                                        <a href="javascript: void(0);"
                                                            class="text-muted employee-phoneno"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="040 596 9053">
                                                            <i
                                                                class="mdi mdi-phone-outline align-middle me-2"></i>Phone
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end card-footer -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6 employee-item" id="employee-items-10">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-end">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle font-size-16 text-muted"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item text-primary"
                                                        href="javascript: void(0);" data-bs-toggle="modal"
                                                        data-bs-target=".bs-example-edit-employee"
                                                        onclick="editProjects('employee-items-10')">
                                                        <i
                                                            class="mdi mdi-file-document-edit-outline me-2"></i>Edit</a>
                                                    <a class="dropdown-item text-danger delete-item"
                                                        onclick="deleteEmployee('employee-items-10')"
                                                        data-id="employee-items-10" href="javascript: void(0);">
                                                        <i class="mdi mdi-trash-can-outline me-2"></i>Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <img src="assets/images/users/avatar-4.jpg"
                                                class="avatar-lg img-fluid rounded-circle employee-image"
                                                data-type="image" alt="user-image">
                                            <h6 class="font-size-15 mt-3 mb-1"><a href="user-profile.html"
                                                    class="text-primary employee-name">Jose Dortch</a></h6>
                                            <p class="text-muted mb-0 font-size-12 fw-medium employee-designation">
                                                Full Stack Developer
                                            </p>
                                        </div>

                                        <div class="d-flex flex-wrap gap-2 mt-3 justify-content-center">
                                            <div>
                                                <p class="text-muted fw-medium mb-0">Tag :</p>
                                            </div>
                                            <div class="employee-tags d-flex flex-wrap gap-1">
                                                <span class="badge badge-soft-secondary p-2">React</span>
                                                <span class="badge badge-soft-secondary p-2">React Native</span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                    <div class="card-footer p-0">
                                        <div class="row g-0">
                                            <div class="col-6">
                                                <div class="text-center border-end p-3">
                                                    <h6 class="font-size-14 mb-0">
                                                        <a href="javascript: void(0);"
                                                            class="text-muted employee-email"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="josedortch@probic.com">
                                                            <i
                                                                class="mdi mdi-email-outline align-middle me-2"></i>E-mail
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-6">
                                                <div class="text-center p-3">
                                                    <h6 class="font-size-14 text-muted mb-0">
                                                        <a href="javascript: void(0);"
                                                            class="text-muted employee-phoneno"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-original-title="047 496 6065">
                                                            <i
                                                                class="mdi mdi-phone-outline align-middle me-2"></i>Phone
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end card-footer -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <!-- Edit Employee Modal -->
    <div class="modal fade bs-example-edit-employee" tabindex="-1" role="dialog" aria-labelledby="addProjectModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header bg-soft-primary">
                    <h5 class="modal-title font-size-16 text-primary add-task-title" id="addProjectModal">Add Member
                    </h5>
                    <h5 class="modal-title font-size-16 text-primary update-task-title" id="updateProjectModal"
                        style="display: none;">Update Member</h5>
                    <button type="button" class="btn-close" id="update-emplyoee" data-bs-dismiss="modal"
                        aria-label="Close">
                    </button>
                </div>
                <div class="modal-body p-4">
                    <form id="NewtaskForm">
                        <div class="text-center">
                            <div class="mb-3 profile-user">
                                <div class="employee-image" id="employee-image-form" data-type="text">
                                    <div class="avatar-lg mx-auto img-thumbnail rounded-circle">
                                        <span class="avatar-title rounded-circle fs-4 bg-soft-primary text-primary">
                                            <i data-feather="user"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="avatar-sm p-0 rounded-circle profile-photo-edit">
                                    <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                                    <label for="profile-img-file-input" class="profile-photo-edit avatar-sm">
                                        <span class="avatar-title rounded-circle bg-light text-body">
                                            <i class="mdi mdi-camera"></i>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="employeeName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="employeeName" placeholder="Enter Your Name">
                        </div><!-- end -->
                        <div class="mb-3">
                            <label for="employeePosition" class="form-label">Position</label>
                            <input type="text" class="form-control" id="employeePosition" placeholder="Enter Work Position">
                        </div><!-- end-->
                        <div class="mb-3 mt-xl-0">
                            <div>
                                <label for="choices-multiple-remove-button" class="form-label">Tag</label>
                                <select class="form-control" name="choices-multiple-remove-button"
                                    id="choices-multiple-remove-button" multiple>
                                    <option value="">Choose...</option>
                                    <option value="Html">Html</option>
                                    <option value="Css">Css</option>
                                    <option value="Bootstrap">Bootstrap</option>
                                    <option value="Laravel">Laravel</option>
                                    <option value="Django">Django</option>
                                    <option value="Python">Python</option>
                                    <option value="Adobe XD">Adobe XD</option>
                                    <option value="React">React</option>
                                    <option value="Reactnative">Reactnative</option>
                                    <option value="Photoshop">Photoshop</option>
                                    <option value="IOS">IOS</option>
                                    <option value="Android">Android</option>
                                </select>
                            </div>
                        </div><!-- end-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3 mb-sm-0">
                                    <label for="exampleEmailId" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="exampleEmailId" placeholder="Enter Your Email">
                                </div>
                            </div><!-- end col -->
                            <div class="col-sm-6">
                                <div>
                                    <label for="PhoneNo" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="PhoneNo" placeholder="Enter Your Number">
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-soft-primary" id="addtask">Add</button>
                    <button type="button" class="btn btn-soft-primary" id="updatetaskdetail">Update</button>
                </div><!-- /.modal-footer -->
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
@endsection
@section('js')
@endsection