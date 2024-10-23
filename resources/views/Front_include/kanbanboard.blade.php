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
                        <h4 class="mb-0">Kanban Board</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                <li class="breadcrumb-item active">Kanban Board</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
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
                                                <h5 class="mb-1 text-uppercas">{{$projectChoose->name}}</h5>
                                                <p class="text-muted mb-0">A Kanban template will ease your
                                                    transition into a new project management method.</p>
                                            </div>
                                        </div>
                                        <div class="text-cente mt-4">
                                            <a href="javascript: void(0);" class="btn btn-primary"
                                                data-bs-toggle="modal" data-bs-target=".bs-add-new-board"><i
                                                    class="mdi mdi-plus me-1"></i> Add New Board</a>
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
                                @foreach ($etats as $etat)
                                <div class="task-list" id="remove-item-19">
                                    <div class="card bg-light shadow-none card-h-100">
                                        <div class="card-header bg-transparent border-bottom-0 d-flex align-items-center">
                                            <div class="flex-1">
                                                <h4 class="card-title mb-0" id="edit-text-1">
                                                    <span id="edit-input-1">{{ $etat->name }}</span>
                                                </h4>
                                            </div>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none font-size-16" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="uil uil-ellipsis-h text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item font-size-14 fw-medium text-muted edit-heading" href="#"><i class="mdi mdi-file-edit-outline me-1"></i>Edit</a>
                                                    <a class="dropdown-item font-size-14 fw-medium text-danger delete-item" href="#"><i class="mdi mdi-trash-can-outline me-1"></i>Delete</a>
                                                </div>
                                            </div> <!-- end dropdown -->
                                        </div><!-- end card-header -->

                                        <div>
                                            <div data-simplebar class="tasklist-content pt-0 p-3">
                                                @foreach ($projecttasks as $task)
                                                @if ($task->etat->id == $etat->id)
                                                    
                                                <div id="backlog-task" class="task d-flex flex-column">
                                                    <div class="card task-box shadow-none" id="remove-item-{{ $task->id }}">
                                                        <div class="card-body">
                                                            <div class="d-flex mb-3">
                                                                <div class="flex-grow-1 align-items-start">
                                                                    <div>
                                                                        <p class="text-primary fw-medium mb-0 current-id">#{{ $task->id }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown ms-2">
                                                                    <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target=".bs-task-details-edit" href="#">Edit</a>
                                                                        <a class="dropdown-item delete-itemt" href="#" data-id="{{ $task->id }}">Remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <a href="#" class="font-size-15 fw-medium text-dark task-name" data-bs-toggle="modal" onclick="editTaskDetails('remove-item-{{ $task->id }}', 1)">
                                                                {{ $task->name }}
                                                            </a>

                                                            <p class="text-muted text-truncate mt-1 font-size-13 task-desc">{{ $task->description }}</p>

                                                            <div class="progress progress-sm animated-progess mb-3"
                                                                style="height: 4px;">
                                                                <div class="progress-bar" role="progressbar"
                                                                    style="width: 0%" aria-valuenow="0" value="0"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <p class="text-muted font-size-13 fw-medium mb-2">
                                                                        <i class="mdi mdi-calendar-range me-1"></i>
                                                                        <span class="due-date">{{ $task->end_date }}</span>
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <p class="text-muted font-size-13 fw-medium mb-2">
                                                                        <i class="mdi mdi-check-all me-1 align-middle"></i>{{ $task->progress == 100 ? 'Completed' : 'Not Completed' }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div><!-- end card body -->
                                                    </div><!-- end task card -->
                                                </div><!-- end task -->
                                                @endif
                                                @endforeach
                                            </div><!-- end tasklist-content --> 

                                            <div class="text-center p-3">
                                                <a href="javascript: void(0);" class="btn btn-soft-primary w-100 add-new-task" data-bs-toggle="modal" data-bs-target=".bs-task-details-edit" data-etat-id="{{ $etat->id }}">
                                                    <i class="mdi mdi-plus me-1"></i> Add New Task
                                                </a>                                                
                                            </div>
                                        </div>
                                    </div><!-- end card -->
                                </div><!-- end tasklist -->
                                @endforeach

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
                    <button type="button" id="update-task" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="NewtaskForm" method="POST" action="{{ route('projecttasks.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="taskname" class="form-label">Name</label>
                            <input id="taskname" name="title" type="text" class="form-control validate" placeholder="Enter Task Name..." required>
                        </div>
                        <div class="mb-3">
                            <label for="taskdesc" class="form-label">Description</label>
                            <textarea id="taskdesc" class="form-control" name="description" placeholder="Add Description" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="task-due-date" class="form-label">Due Date</label>
                            <input class="form-control" type="date" name='end_date' value="2021-09-20" id="task-due-date"
                                required>
                        </div><!-- end -->
                        <div class="mb-3">
                            <label for="taskprogressbar" class="form-label">Progress</label>
                            <input id="taskprogressbar" name="progress" type="number" class="form-control validate" placeholder="Enter Progress Bar Number..." required>
                        </div>
                        <input id="taskprogressbar" name="etat_id" value="{{$etat->id}}" type="number" class="form-control validate" placeholder="Enter Progress Bar Number..."hidden>
                        <input id="taskprogressbar" name="project_id" value="{{$projectChoose->id}}" type="number" class="form-control validate" placeholder="Enter Progress Bar Number..."hidden>
            
                        <div class="pt-2">
                            <p class="fw-medium mb-3">Assign Team Members</p>
                            <ul class="list-unstyled user-list validate mt-2" id="taskassignee" data-simplebar style="max-height: 160px;">
                                @foreach ($users as $user)
                                    <li>
                                        <div class="form-check form-check-primary mb-2 font-size-16 d-flex align-items-center">
                                            <input class="form-check-input me-3" type="checkbox" id="member-{{ $user->id }}" name="assigned_members[]" value="{{ $user->id }}">
                                            <img src="{{ asset('assets/images/users/avatar-' . $user->id . '.jpg') }}" class="rounded-circle avatar-sm" alt="">
                                            <label class="form-check-label font-size-14 mb-0 ms-3" for="member-{{ $user->id }}">{{ $user->name }}</label>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
    
                        <div class="row mt-4">
                            <div class="col-lg-10">
                                <button type="submit" class="btn btn-primary addtask" id="addtask">Create Task</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

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
                <form id="addBoardForm" action="{{ route('etats.store', $projectChoose->id) }}" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Enter Board Name" required>
                        <label for="floatingInput">Board Name</label>
                    </div>
                    <input type="text" name="project_id" class="form-control" value="{{$projectChoose->id}}" id="floatingInput" placeholder="Enter Board Name" required hidden>
                    <div class="modal-footer">
                        <button id="taskboardStageCreate" type="submit" class="btn btn-soft-primary">Create</button>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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
<!-- dragula plugins -->
<script src="assets/libs/dragula/dragula.min.js"></script>
<!-- kanbanboard Js -->
<script src="assets/js/pages/kanbanboard.init.js"></script>
<script>
    $(document).on('click', '.delete-itemt', function (e) {
    e.preventDefault(); // Empêche le comportement par défaut du lien

    var taskId = $(this).data('id'); // Récupère l'ID de la tâche à partir du data-id
    var deleteUrl = '/projecttasks/' + taskId; // L'URL pour supprimer la tâche

    // if (confirm('Are you sure you want to delete this task?')) {
    print("pass");
        $.ajax({
            url: deleteUrl,
            type: 'DELETE',
            data: {
                _token: '{{ csrf_token() }}' // Inclut le token CSRF pour sécuriser la requête
            },
            success: function (response) {
                if (response.success) {
                    // Supprime la tâche du DOM après suppression
                    // $('#remove-item-' + taskId).remove();
                    alert(response.message);
                } else {
                    alert('Error: ' + response.message);
                }
            },
            error: function (xhr) {
                alert('Error deleting task');
            }
        });
    // }
});

</script>
<script>
    // Cible le modal
var taskModal = document.querySelector('.bs-task-details-edit');

taskModal.addEventListener('show.bs.modal', function (event) {
    // Récupère le bouton qui a déclenché le modal
    var button = event.relatedTarget;

    // Récupère l'ID de l'état à partir de l'attribut data-etat-id
    var etatId = button.getAttribute('data-etat-id');

    // Injecte l'ID de l'état dans le champ du formulaire
    var etatInput = taskModal.querySelector('input[name="etat_id"]');
    etatInput.value = etatId;
});

</script>
<script>
    function submitBoardForm() {
        var form = $('#addBoardForm');
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(),
            success: function(response) {
                // Fermer le modal
                $('#bs-add-new-board').modal('hide');
                
                // Afficher un message de succès
                alert('Board created successfully!');
                
                // Actualiser ou mettre à jour la liste des états
                location.reload();
            },
            error: function(response) {
                // Gérer les erreurs
                alert('An error occurred. Please try again.');
            }
        });
    }
</script>

<script>
    $('#NewtaskForm').on('submit', function(event) {
        event.preventDefault(); // Empêcher le rechargement de la page

        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData,
            success: function(response) {
                // Fermer le modal après la création de la tâche
                $('#modalForm').modal('hide');

                // Afficher un message de succès
                // alert('Task created successfully!');

                // Actualiser la liste des tâches ou la page
                location.reload();
            },
            error: function(response) {
                // Gérer les erreurs
                alert('An error occurred while creating the task.');
            }
        });
    });
</script>
@endsection
