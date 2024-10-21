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
                            <h4 class="mb-0">Task List</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active">Task List</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="d-xl-flex">
                    <div class="w-100">
                        <div class="d-md-flex">
                            <div class="card filemanager-sidebar me-md-3">
                                <div class="card-body">
                                    <div>
                                        <a href="#" class="btn btn-soft-primary w-100 shadow-none"
                                            data-bs-toggle="modal" data-bs-target="add_task"><i
                                                class="mdi mdi-plus me-1"></i>Add
                                            New Task</a>
                                    </div>

                                    <div class="tasks-list mt-4">
                                        <a href="#" class="active"><i
                                                class="mdi mdi-folder-outline font-size-16 align-middle me-2"></i>
                                            All Tasks</a>
                                        <a href="#"><i
                                                class="mdi mdi-text-box-check-outline align-middl font-size-16 me-2"></i>
                                            My Task</a>
                                    </div>

                                    <h6 class="mt-4 font-size-13 text-muted tex-decoration-underline">Status</h6>
                                    <div class="tasks-list mt-1">
                                        <a href="#"><span class="mdi mdi-autorenew text-muted me-1"></span>Pending
                                            Tasks
                                            <span class="ms-1 float-end">23</span></a>
                                        <a href="#"><span
                                                class="mdi mdi-check-circle-outline text-muted me-1"></span>Completed
                                            <span class="ms-1 float-end">30</span></a>
                                    </div>

                                    <h6 class="mt-4 font-size-13 text-muted tex-decoration-underline">Tags</h6>
                                    <div class="tasks-list mt-1">
                                        <a href="#"><span
                                                class="mdi mdi-circle text-primary font-size-12 me-2 float-end"></span>Fronted</a>
                                        <a href="#"><span
                                                class="mdi mdi-circle text-success font-size-12 me-2 float-end"></span>Backend</a>
                                        <a href="#"><span
                                                class="mdi mdi-circle text-warning font-size-12 me-2 fs- float-end"></span>Issue</a>
                                        <a href="#"><span
                                                class="mdi mdi-circle text-info font-size-12 me-2 fs float-end"></span>Design</a>
                                        <a href="#"><span
                                                class="mdi mdi-circle text-danger font-size-12 me-2 fs float-end"></span>Social</a>
                                    </div>
                                </div><!-- end cardbody-->
                            </div><!-- end card -->
                            <!-- filemanager-leftsidebar -->

                            <div class="w-100">
                                <div>
                                    <div class="d-flex">
                                        <div class="mb-2 me-sm-0 me-3 flex-grow-1">
                                            <div class="dropdown">
                                                <button class="btn btn-custom fw-medium dropdown-toggle" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Filter<i class="mdi mdi-filter align-middle ms-1"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item text-muted fw-medium" href="#"><i
                                                            class="mdi mdi-star-outline me-2"></i>Favourites</a>
                                                    <a class="dropdown-item text-muted fw-medium" href="#"><i
                                                            class="mdi mdi-check-all me-2"></i>Done</a>
                                                    <a class="dropdown-item text-muted fw-medium" href="#"><i
                                                            class="mdi mdi-trash-can-outline me-2"></i>Deleted</a>
                                                </div>
                                            </div><!-- end dropdown -->
                                        </div>
                                        <div class="search-box mb-2">
                                            <div class="position-relative">
                                                <input type="text" class="form-control rounded" id="search-task"
                                                    onkeyup="searchTask()" placeholder="Search...">
                                                <i class="bx bx-search-alt search-icon"></i>
                                            </div>
                                        </div><!-- end search box -->

                                        <div class="mb-2 ms-3">
                                            <div class="dropdown">
                                                <button class="btn btn-custom fw-medium dropdown-toggle" type="button"
                                                    id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="mdi mdi-cog"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item text-muted fw-medium" href="#"><i
                                                            class="mdi mdi-file-document-edit-outline me-2"></i>Edit</a>
                                                    <a class="dropdown-item text-muted fw-medium" href="#"><i
                                                            class="mdi mdi-export-variant align-middl me-2"></i>Share</a>
                                                </div>
                                            </div><!-- end dropdown -->
                                        </div>
                                    </div>
                                </div>

                                <div id="all-task">
                                    @foreach ($tasks as $task)
                                        <div class="task-list-box" id="landing-task">
                                            <div id="task-item-1">
                                                <div class="card list-group-item rounded-3">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-xl-6 col-sm-5">
                                                                <div class="checklist form-check font-size-15">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="customCheck1">
                                                                    <label class="form-check-label ms-1 task-title"
                                                                        for="customCheck1">{{$task->title}}</label>
                                                                </div>
                                                            </div><!-- end col -->
                                                            <div class="col-xl-6 col-sm-7">
                                                                <div class="row align-items-center">
                                                                    <div class="col-xl-5 col-md-6 col-sm-5">
                                                                        <div
                                                                            class="avatar-group mt-3 mt-xl-0 task-assigne">
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-inline-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    value="member-2"
                                                                                    data-bs-placement="top"
                                                                                    title="Mark Powell">
                                                                                    <img src="assets/images/users/avatar-2.jpg"
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
                                                                                    title="Craig Hall">
                                                                                    <img src="assets/images/users/avatar-4.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                    class="d-block"
                                                                                    data-bs-toggle="tooltip"
                                                                                    value="member-11"
                                                                                    data-bs-placement="top"
                                                                                    title="Sarah Kerns">
                                                                                    <div class="avatar-sm">
                                                                                        <div
                                                                                            class="avatar-title rounded-circle bg-info">
                                                                                            S
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div><!-- end avatar group -->
                                                                    </div><!-- end col -->
                                                                    <div class="col-xl-7 col-md-6 col-sm-7">
                                                                        <div
                                                                            class="d-flex flex-wrap gap-3 mt-3 mt-xl-0 justify-content-md-end">
                                                                            <div>
                                                                                <span
                                                                                    class="badge rounded-pill badge-soft-warning font-size-11 task-status">{{$task->status}}</span>
                                                                            </div>
                                                                            <div>
                                                                                <a href="#"
                                                                                    class="mb-0 text-muted fw-medium"><i
                                                                                        class="mdi mdi-checkbox-marked-circle-outline me-1"></i>4/8
                                                                                </a>
                                                                            </div>
                                                                            <div>
                                                                                <a href="#"
                                                                                    class="mb-0 text-muted fw-medium"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target=".bs-example-new-task"><i
                                                                                        class="mdi mdi-square-edit-outline font-size-16 align-middle"
                                                                                        onclick="editTask('task-item-1')"></i></a>
                                                                            </div>
                                                                            <div>
                                                                                <a href="#" class="delete-item"
                                                                                    onclick="deleteProjects('task-item-1')">
                                                                                    <i
                                                                                        class="mdi mdi-trash-can-outline align-middle font-size-16 text-danger"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col -->
                                                                </div><!-- end row -->
                                                            </div><!-- end col -->
                                                        </div><!-- end row -->
                                                    </div><!-- end cardbody -->
                                                </div><!-- end card -->
                                            </div>
                                        </div><!-- end -->
                                    @endforeach
                                </div>
                            </div><!-- end w-100 -->
                        </div>
                    </div>
                </div><!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!-- Add Newtask Modal -->
        <div id="add_task" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addNewtaskModal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0">
                    <div class="modal-header bg-soft-primary">
                        <h5 class="modal-title font-size-16 text-primary add-task-title" id="add-task-title">Add New
                            Tasks</h5>
                        <h5 class="modal-title font-size-16 text-primary update-task-title" id="update-task-title">
                            Update Tasks</h5>

                        <button type="button" id="update-task" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4">
                        <form id="NewtaskForm">
                            <div class="row mb-3">
                                <label for="tasksName" class="col-sm-2 col-form-label pt-sm-2 pt-0">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tasksName" placeholder="Enter Task">
                                </div>
                            </div><!-- end row -->
                            <div class="row mb-3">
                                <label for="tasksName" class="col-sm-2 col-form-label pt-sm-2 pt-0">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control" data-trigger name="TaskStatus" id="TaskStatus">
                                        <option value="">Choose...</option>
                                        <option value="Completed">Completed</option>
                                        <option value="Progress">Progress</option>
                                        <option value="Pending">Pending</option>
                                    </select>
                                </div>
                            </div><!-- end row -->

                            <div>
                                <p class="fw-medium mb-3">Select Member</p>
                                <ul class="list-unstyled user-list validate mt-2 mb-0" id="taskassignee" data-simplebar
                                    style="max-height: 152px;">
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
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
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
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
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-10"
                                                name="member[]" data-type="image">
                                            <img src="assets/images/users/avatar-10.jpg" class="rounded-circle avatar-sm"
                                                alt="">
                                            <label class="form-check-label font-size-14 mb-0 ms-3" for="member-10">Jansh
                                                Wells</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
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
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-4"
                                                name="member[]" data-type="image">
                                            <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-sm"
                                                alt="">
                                            <label class="form-check-label font-size-14 mb-0 ms-3" for="member-4">Frank
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
                                            <label class="form-check-label font-size-14 mb-0 ms-3" for="member-5">Justin
                                                Howard</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-6"
                                                name="member[]" data-type="image">
                                            <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-sm"
                                                alt="">
                                            <label class="form-check-label font-size-14 ms-3 mb-0" for="member-6">Michael
                                                Lawrence</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-7"
                                                name="member[]" data-type="image">
                                            <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-sm"
                                                alt="">
                                            <label class="form-check-label font-size-14 ms-3 mb-0" for="member-7">Oliver
                                                Sharp</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-8"
                                                name="member[]" data-type="image">
                                            <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-sm"
                                                alt="">
                                            <label class="form-check-label font-size-14 mb-0 ms-3" for="member-8">Richard
                                                Simpson</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-9"
                                                name="member[]" data-type="image">
                                            <img src="assets/images/users/avatar-9.jpg" class="rounded-circle avatar-sm"
                                                alt="">
                                            <label class="form-check-label font-size-14 mb-0 ms-3" for="member-9">Dan
                                                Gibson</label>
                                        </div>
                                    </li><!-- end li -->
                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-10"
                                                name="member[]" data-type="image">
                                            <img src="assets/images/users/avatar-10.jpg" class="rounded-circle avatar-sm"
                                                alt="">
                                            <label class="form-check-label font-size-14 mb-0 ms-3"
                                                for="member-10">Margaret Farnham</label>
                                        </div>
                                    </li><!-- end li -->

                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-11"
                                                name="member[]" data-type="dataimage">
                                            <div class="avatar-sm">
                                                <div class="avatar-title rounded-circle bg-info">
                                                    S
                                                </div>
                                            </div>
                                            <label class="form-check-label font-size-14 mb-0 ms-3" for="member-11">Sarah
                                                Kerns</label>
                                        </div>
                                    </li><!-- end li -->

                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-12"
                                                name="member[]" data-type="dataimage">
                                            <div class="avatar-sm">
                                                <div class="avatar-title rounded-circle bg-primary">
                                                    D
                                                </div>
                                            </div>
                                            <label class="form-check-label font-size-14 mb-0 ms-3" for="member-12">Denny
                                                Rogers</label>
                                        </div>
                                    </li><!-- end li -->

                                    <li>
                                        <div
                                            class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-13"
                                                name="member[]" data-type="dataimage">
                                            <div class="avatar-sm">
                                                <div class="avatar-title rounded-circle bg-purple">
                                                    J
                                                </div>
                                            </div>
                                            <label class="form-check-label font-size-14 mb-0 ms-3" for="member-13">Jansh
                                                Music</label>
                                        </div>
                                    </li><!-- end li -->

                                </ul><!-- end ul -->
                            </div><!-- end -->

                            <div class="mt-3">
                                <p class="fw-medium mb-0">Sub Tasks</p>
                                <div id="sub-tasks" class="mt-1">
                                    <div>
                                        <div id="subtask-item-4">
                                            <div class="checklist px-0 d-flex form-check align-items-center font-size-16">
                                                <div class="flex-grow-1">
                                                    <input type="checkbox" name="subtask" class="form-check-input ms-0"
                                                        id="customDesign">
                                                    <label class="form-check-label font-size-14 mb-0 ms-3"
                                                        for="customDesign">Brand Logo Design.</label>
                                                </div>
                                                <div>
                                                    <i class="mdi mdi-text mdi-24px text-muted"></i>
                                                </div>
                                            </div>
                                        </div><!-- end -->

                                        <div id="subtask-item-5">
                                            <div class="checklist px-0 d-flex form-check align-items-center font-size-16">
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

                                        <div id="subtask-item-6">
                                            <div class="checklist px-0 d-flex form-check align-items-center font-size-16">
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
                                    </div>
                                </div><!-- end -->

                                <div class="row px-0 mt-2">
                                    <div class="col">
                                        <input type="text" id="myInput" class="form-control"
                                            placeholder="Type task">
                                    </div>
                                    <div class="col-auto">
                                        <span onclick="newElement()" class="btn btn-light float-end">Add Tasks</span>
                                    </div>
                                </div><!-- end -->
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-soft-primary addtask" id="addtask">Add</button>
                        <button type="button" class="btn btn-soft-primary updatetaskdetail"
                            id="updatetaskdetail">Update</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Probic.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://pichforest.com/"
                                target="_blank" class="text-reset">Pichforest</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
@section('js')
@endsection
