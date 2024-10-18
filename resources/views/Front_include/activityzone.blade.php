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
                        <h4 class="mb-0">Activities</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                <li class="breadcrumb-item active">Activities</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Activity</h4>

                                <ul class="list-unstyled activity-wid">
                                    <li class="activity-list" id="activity-item-1">
                                        <div class="activity-icon avatar-sm">
                                            <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                <i class="mdi mdi-folder"></i>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-sm-row flex-column align-items-start">
                                            <div class="avatar-group position-relative me-sm-3 flex-shrink-0">
                                                <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Maria Morgan">
                                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-sm">
                                                </a>
                                            </div>
                                            <div class="flex-grow-1 mt-3 mt-sm-0">
                                                <div>
                                                    <p class="text-muted"><span class="text-dark fw-bold">Maria Morgan</span> added the noteClient Meeting Notes it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like <span class="text-primary fw-medium">Created a project.</span></p>
                                                    <div class="d-flex flex-wrap align-items-start gap-2">
                                                        <img src="assets/images/small/img-10.png" alt="" class="img-fluid rounded me-3" width="100">
                                                        <img src="assets/images/small/img-9.png" alt="" class="img-fluid rounded" width="100"> 
                                                    </div>     
                                                    <p class="font-size-12 text-muted fw-medium mt-2 mb-0">5 mins ago</p>
                                                </div>
                                            </div>
                                            <div class="dropdown ms-0 ms-sm-5">
                                                <a class="font-size-16 text-muted dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item text-muted fw-medium" href="#"><i class="mdi mdi-circle-edit-outline me-1"></i>Edit</a>
                                                    <a class="dropdown-item text-muted fw-medium delete-item"
                                                    data-id="activity-item-1" href="#"><i class="mdi mdi-trash-can-outline me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li><!-- end li -->
                                    <li class="activity-list" id="activity-item-2">
                                        <div class="activity-icon avatar-sm">
                                            <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                <i class="mdi mdi-format-list-bulleted-square"></i>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-sm-row flex-column align-items-start">
                                            <div class="avatar-group position-relative me-sm-3 flex-shrink-0">
                                                <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Denny Hudda">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-sm">
                                                </a>
                                            </div>
                                            <div class="flex-grow-1 mt-3 mt-sm-0">
                                                <div>
                                                    <p class="text-muted mb-1"><span class="text-dark fw-bold">Denny Hudda</span> completed the task established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like <span class="text-primary fw-medium">Design wireframs.</span></p>    
                                                    <p class="font-size-12 text-muted fw-medium mb-0">5 hours ago</p>
                                                </div>
                                            </div>
                                            <div class="dropdown ms-0 ms-sm-5">
                                                <a class="font-size-16 text-muted dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item text-muted fw-medium" href="#"><i class="mdi mdi-circle-edit-outline me-1"></i>Edit</a>
                                                    <a class="dropdown-item text-muted fw-medium delete-item" data-id="activity-item-2"
                                                    href="#"><i class="mdi mdi-trash-can-outline me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li><!-- end li -->
                                    <li class="activity-list" id="activity-item-3">
                                        <div class="activity-icon avatar-sm">
                                            <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                <i class="mdi mdi-pencil"></i>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-sm-row flex-column align-items-start">
                                            <div class="avatar-group position-relative me-sm-3 flex-shrink-0">
                                                <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Karen Pena">
                                                    <img src="assets/images/users/avatar-10.jpg" alt="" class="rounded-circle avatar-sm">
                                                </a>
                                            </div>
                                            <div class="flex-grow-1 mt-3 mt-sm-0">
                                                <div>
                                                    <p class="text-muted mb-1"><span class="text-dark fw-bold">Karen Pena</span> requested more information for long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like <span class="text-primary fw-medium">Project setup.</span></p>   
                                                    <p class="font-size-12 text-muted fw-medium mb-0">9 hours ago</p>
                                                </div>
                                            </div>
                                            <div class="dropdown ms-0 ms-sm-5">
                                                <a class="font-size-16 text-muted dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item text-muted fw-medium" href="#"><i class="mdi mdi-circle-edit-outline me-1"></i>Edit</a>
                                                    <a class="dropdown-item text-muted fw-medium delete-item" data-id="activity-item-3" href="#"><i class="mdi mdi-trash-can-outline me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li><!-- end li -->
                                    <li class="activity-list" id="activity-item-4">
                                        <div class="activity-icon avatar-sm">
                                            <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                <i class="mdi mdi-folder-open"></i>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-sm-row flex-column align-items-start">
                                            <div class="avatar-group position-relative me-sm-3 flex-shrink-0">
                                                <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Jansh Banes">
                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-sm">
                                                </a>
                                            </div>
                                            <div class="flex-grow-1 mt-3 mt-sm-0">
                                                <div>
                                                    <p class="text-muted"><span class="text-dark fw-bold">Jansh Banes</span> adding a new event with attachments more simple and regular than the existing European languages be as simple as occidental it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like <span class="text-primary fw-medium">Task generated.</span></p>
                                                    <div class="d-flex flex-wrap align-items-start gap-2">
                                                        <img src="assets/images/small/img-1.png" alt="" class="img-fluid rounded me-3" width="100">
                                                        <img src="assets/images/small/img-3.png" alt="" class="img-fluid rounded me-3" width="100">  
                                                        <img src="assets/images/small/img-2.png" alt="" class="img-fluid rounded" width="100">
                                                    </div>     
                                                    <p class="font-size-12 text-muted fw-medium mt-2 mb-0">1 days ago</p>
                                                </div>
                                            </div>
                                            <div class="dropdown ms-0 ms-sm-5">
                                                <a class="font-size-16 text-muted dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item text-muted fw-medium" href="#"><i class="mdi mdi-circle-edit-outline me-1"></i>Edit</a>
                                                    <a class="dropdown-item text-muted fw-medium delete-item" data-id="activity-item-4"
                                                    href="#"><i class="mdi mdi-trash-can-outline me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li><!-- end li -->
                                    <li class="activity-list" id="activity-item-5">
                                        <div class="activity-icon avatar-sm">
                                            <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                <i class="mdi mdi-send"></i>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-sm-row flex-column align-items-start">
                                            <div class="avatar-group position-relative me-sm-3 flex-shrink-0">
                                                <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Angela Rahman">
                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-sm">
                                                </a>
                                            </div>
                                            <div class="flex-grow-1 mt-3 mt-sm-0">
                                                <div>
                                                    <p class="text-muted mb-1"><span class="text-dark fw-bold">Angela Rahman</span> create new project budling product is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like <span class="text-primary fw-medium">Website template.</span></p>     
                                                    <p class="font-size-12 text-muted fw-medium mb-0">12 hours ago</p>
                                                </div>
                                            </div>
                                            <div class="dropdown ms-0 ms-sm-5">
                                                <a class="font-size-16 text-muted dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item text-muted fw-medium" href="#"><i class="mdi mdi-circle-edit-outline me-1"></i>Edit</a>
                                                    <a class="dropdown-item text-muted fw-medium delete-item" data-id="activity-item-5" href="#"><i class="mdi mdi-trash-can-outline me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li><!-- end li -->
                                </ul><!-- end ul -->
                            <div class="text-end mt-4">
                                <a href="javascript: void(0);" class="btn btn-primary shadow-none rounded-pill">View more <i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
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
@endsection
@section('js')
@endsection
