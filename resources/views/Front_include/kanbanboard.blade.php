@extends('layouts.dashboardlayout')
@section('links')
<!-- CSS de Select2 -->
<link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">
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
                                        <div class="d-flex" style="justify-content: space-between">
                                            <div class="flex-1">
                                                <h5 class="mb-1 text-uppercas">{{$projectChoose->name}}</h5>
                                                <p class="text-muted mb-0">A Kanban template will ease your
                                                    transition into a new project management method.</p>
                                            </div>
                                            <div class="flex-2">
                                                <p class="bg-success bg-gradient">Epic</p>
                                                <p class="bg-dark text-white">Feature</p>
                                                <p class="bg-info bg-gradient">User storie</p>
                                                <p class="bg-warning bg-gradient">Task</p>
                                            </div>
                                        </div>
                                        <div class="text-cente mt-4">
                                            <a href="javascript: void(0);" class="btn btn-primary"
                                                data-bs-toggle="modal" data-bs-target=".bs-add-new-board"><i
                                                    class="mdi mdi-plus me-1"></i> Add New Board</a>
                                        </div>
                                    </div><!-- end col -->

                                </div><!-- end row -->
                            </div>

                            <div class="task-board" id="kanbanboard">
                                @foreach ($etats as $etat)
                                <div class="task-list " id="remove-item-19" data-etat-id="{{ $etat->id }}">
                                    <div class="card bg-light shadow-none card-h-100" style="width: 350px;">
                                        <div class="card-header bg-transparent border-bottom-0 d-flex align-items-center">
                                            <div class="flex-1">
                                                <h4 class="card-title mb-0" id="edit-text-1">
                                                    <span id="edit-input-1">{{ $etat->name }}</span>
                                                </h4>
                                                {{-- <div class="dropdown-menu dropdown-menu-end"> --}}
                                                    {{-- <a class="dropdown-item font-size-14 fw-medium text-muted edit-heading" href="#"><i class="mdi mdi-file-edit-outline me-1"></i>Edit</a> --}}
                                                    <form method="POST" action="{{ route('etats.destroy', $etat->id) }}" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item font-size-14 fw-medium text-danger delete-item-etat" data-etat-id-del="{{ $etat->id }}">
                                                            <i class="mdi mdi-trash-can-outline me-1"></i>Delete
                                                        </button>
                                                    </form>
                                                {{-- </div> --}}
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
                                                    
                                                <div id="backlog-task" style="width: 300px; height: 200px;" class="task d-flex flex-column mb-2" draggable="true" data-task-id="{{ $task->id }}">
                                                    <div class="card task-box shadow-none">
                                                        <div class="card-body 
                                                            @if ($task->type === 'epic') bg-success bg-gradient text-dark
                                                            @elseif ($task->type === 'feature') bg-dark bg-gradient text-white 
                                                            @elseif ($task->type === 'user_story') bg-info bg-gradient text-dark
                                                            @else bg-warning bg-gradient text-dark
                                                            @endif">
                                                            <div class="d-flex mb-3">
                                                                <div class="flex-grow-1 align-items-start">
                                                                    <div>
                                                                        <p class="fw-medium mb-0 current-id">#{{ $task->id }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown ms-2">
                                                                    <a href="#" class="dropdown-toggle font-size-16" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item edit-task-btn" data-bs-toggle="modal" href="#" data-id="{{ $task->id }}"
                                                                            data-name="{{ $task->name }}"
                                                                            data-description="{{ $task->description }}"
                                                                            data-progress="{{ $task->progress }}"
                                                                            data-end_date="{{ $task->real_time }}"
                                                                            data-estimate_date="{{ $task->estimate_time }}"
                                                                            {{-- data-status="{{ $task->status }}" --}}
                                                                            data-type="{{ $task->type }}"
                                                                            data-parent-id="{{ $task->parent_id }}"
                                                                            data-assigned-members="{{ json_encode($task->users) }}"
                                                                            data-children="{{ json_encode($task->children) }}">Edit</a>
                                                                        <a class="dropdown-item delete-itemt" href="#" data-id="{{ $task->id }}">Remove</a>
                                                                        
                                                                        <!-- Menu pour déplacer la tâche -->
                                                                        <div class="dropdown dropdown-move">
                                                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#">Move</a>
                                                                            <div class="dropdown-menu">
                                                                                @foreach ($etats as $etatOption)
                                                                                    @if ($task->etat_id != $etatOption->id)
                                                                                        <a class="dropdown-item move-task" href="#" data-id="{{ $task->id }}" data-etat-id="{{ $etatOption->id }}">
                                                                                            Move to {{ $etatOption->name }}
                                                                                        </a>
                                                                                    @endif
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>                                                                
                                                            </div>

                                                            <a href="{{ route('tasks.show', $task->id) }}" class="font-size-15 fw-medium task-name">
                                                                {{ $task->name }}
                                                            </a>                                                                                                                     

                                                            <p class="text-truncate mt-1 font-size-13 task-desc">{{ $task->description }}</p>

                                                            <div class="progress progress-sm animated-progess mb-3"
                                                                style="height: 4px;">
                                                                <div class="progress-bar" role="progressbar"
                                                                    style="width: {{$task->progress}}%" aria-valuenow="0" value="0"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <p class="font-size-13 fw-medium mb-2">
                                                                        <i class="mdi mdi-calendar-range me-1"></i>
                                                                        <span class="due-date">{{ $task->end_date }}</span>
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <p class="font-size-13 fw-medium mb-2">
                                                                        <i class="mdi mdi-check-all me-1 align-middle"></i>{{ $task->progress == 100 ? 'Completed' : 'Not Completed' }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div id="all-member-lists-2" class="flex-grow-1">
                                                                    @foreach ($task->users as $member )
                                                                    <div class="avatar-group float-start task-assigne">
                                                                        <div class="avatar-group-item">
                                                                            <a href="javascript: void(0);"
                                                                            class="d-inline-block"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            value="member-1" title="{{$member->name}}">
                                                                            <img src="{{ asset('assets/images/users/avatar-' . $member->id . '.jpg')}}"
                                                                            alt=""
                                                                            class="rounded-circle avatar-sm">
                                                                            </a>
                                                                        </div>
                                                                    </div><!-- end avatar group -->
                                                                @endforeach
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
                        <h5 class="mb-2 title-show">Probic : Dashboard UI</h5>
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
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Modal de modification de tâche -->
    <div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTaskModalLabel">Edit Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editTaskForm" method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <!-- Task Details Section -->
                    <h6 class="fw-bold mb-3">Task Details</h6>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="editTaskName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="editTaskName" name="name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="editTaskProgress" class="form-label">Progress</label>
                            <input type="number" class="form-control" id="editTaskProgress" name="progress" max="100" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editTaskDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="editTaskDescription" name="description" rows="3" required></textarea>
                    </div>
                    
                    <!-- Time Estimates Section -->
                    <h6 class="fw-bold mb-3">Time Estimates</h6>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="editEstimateDate" class="form-label">Estimate Time</label>
                            <input type="number" step="0.01" class="form-control" id="editEstimateDate" name="estimate_time" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="editTaskEndDate" class="form-label">Real Time</label>
                            <input type="number" step="0.01" class="form-control" id="editTaskEndDate" name="real_time">
                        </div>
                    </div>
                    
                    <!-- Task Type and Parent Task -->
                    <h6 class="fw-bold mb-3">Task Structure</h6>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="editTaskType" class="form-label">Task Type</label>
                            <select id="editTaskType" name="type" class="form-control" required>
                                <option value="epic">Epic</option>
                                <option value="feature">Feature</option>
                                <option value="user_story">User Story</option>
                                <option value="simple_task">Simple Task</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="editParentTask" class="form-label">Parent Task</label>
                            <select id="editParentTask" name="parent_id" class="form-control select2">
                                <option value="">None</option>
                                @foreach ($projecttasks as $task)
                                    <option value="{{ $task->id }}">{{ $task->name }} ({{ $task->type }})</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <!-- Assign Team Members -->
                    <h6 class="fw-bold mb-3">Assign Team Members</h6>
                    <div class="mb-3">
                        <input type="text" id="userSearch" class="form-control mb-3" placeholder="Search members...">
                        <ul class="list-unstyled user-list validate mt-2" id="taskassignee" data-simplebar style="max-height: 160px;">
                            @foreach ($users as $user)
                                <li class="user-item">
                                    <div class="form-check form-check-primary d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" 
                                               id="member-{{ $user->id }}" 
                                               name="assigned_members[]" 
                                               value="{{ $user->id }}">
                                        <img src="{{ asset('assets/images/users/avatar-' . $user->id . '.jpg') }}" 
                                             class="rounded-circle avatar-sm" 
                                             alt="{{ $user->name }}">
                                        <label class="form-check-label font-size-14 mb-0 ms-3" 
                                               for="member-{{ $user->id }}">{{ $user->name }}</label>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <!-- Attach Files -->
                    <h6 class="fw-bold mb-3">Attachments</h6>
                    <div class="mb-3">
                        <label for="files" class="form-label">Attach Files</label>
                        <input type="file" name="files[]" id="files" class="form-control" multiple>
                    </div>
                    
                    <!-- Children's Tasks -->
                    <div class="mb-3">
                        <label for="childrenList" class="form-label">Children's Tasks:</label>
                        <ul id="childrenList" class="list-unstyled"></ul>
                    </div>
                    
                    <!-- Hidden Input -->
                    <input type="hidden" id="editTaskId" name="task_id">
                    
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    


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
                    <!-- Formulaire combiné pour ajouter ou modifier une tâche -->
                    <form id="NewtaskForm" method="POST" action="{{ route('projecttasks.store') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- Nom de la tâche -->
                        <div class="mb-3">
                            <label for="taskname" class="form-label">Name</label>
                            <input id="taskname" name="name" type="text" class="form-control" placeholder="Enter Task Name..." required>
                        </div>
    
                        <!-- Description de la tâche -->
                        <div class="mb-3">
                            <label for="taskdesc" class="form-label">Description</label>
                            <textarea id="taskdesc" class="form-control" name="description" placeholder="Add Description"></textarea>
                        </div>
    
                        <!-- Estimation de temps -->
                        <div class="mb-3">
                            <label for="estimate_date" class="form-label">Estimate Time</label>
                            <input class="form-control" type="number" name="estimate_time" id="estimate_date" step="0.01">
                        </div>
                        
                        <!-- Temps réel -->
                        <div class="mb-3">
                            <label for="task-due-date" class="form-label">Real Time</label>
                            <input class="form-control" type="number" name="real_time" id="task-due-date" step="0.01">
                        </div>                        
    
                        <!-- Progression -->
                        <div class="mb-3">
                            <label for="taskprogressbar" class="form-label">Progress</label>
                            <input id="taskprogressbar" max="100" min="0" value="0" name="progress" type="number" class="form-control" placeholder="Enter Progress...">
                        </div>
    
                        <!-- Type de tâche -->
                        <div class="mb-3">
                            <label for="tasktype" class="form-label">Task Type</label>
                            <select id="tasktype" name="type" class="form-control" required>
                                <option value="epic">Epic</option>
                                <option value="feature">Feature</option>
                                <option value="user_story">User Story</option>
                                <option value="simple_task">Simple Task</option>
                            </select>
                        </div>
    
                        <!-- Tâche parente avec recherche -->
                        <div class="mb-3" id="cparentTaskField">
                            <label for="parenttask" class="form-label">Parent Task</label>
                            <select id="parenttask" name="parent_id" class="form-control select2">
                                <option value="">None</option>
                                @foreach ($projecttasks as $task)
                                    <option value="{{ $task->id }}">{{ $task->name }} ({{ $task->type }})</option>
                                @endforeach
                            </select>
                        </div>
    
                        <!-- Projet et État cachés -->
                        <input type="hidden" name="etat_id" value="{{ $etat->id }}">
                        <input type="hidden" name="project_id" value="{{ $projectChoose->id }}">
    
                        <!-- Membres assignés avec recherche -->
                        <div class="mb-3">
                            <label for="taskassignee" class="form-label">Assign Team Members</label>
                            <select id="taskassigneeC" name="assigned_members[]" class="form-control select2" multiple>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
    
                        <!-- Section pour uploader des fichiers -->
                        <div class="mb-3">
                            <label for="files" class="form-label">Attach Files</label>
                            <input type="file" name="files[]" id="files" class="form-control" multiple>
                        </div>
    
                        <!-- Bouton de soumission -->
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

<!-- Modal de confirmation -->
<div class="modal fade" id="deleteTaskModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm deletion</h5>
                <button type="button" class="btn-close" id="cancelDeleteTask" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this task?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="cancelDeleteTask" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteTask">Delete</button>
            </div>
        </div>
    </div>
</div>

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
    document.addEventListener('DOMContentLoaded', function() {
        let taskIdToDelete = null;
        const deleteModal = new bootstrap.Modal(document.getElementById('deleteTaskModal'));
        
        // Supprimer les anciens écouteurs d'événements s'ils existent
        const confirmButton = document.getElementById('confirmDeleteTask');
        confirmButton.replaceWith(confirmButton.cloneNode(true));
        
        // Réattacher l'écouteur sur le nouveau bouton
        document.getElementById('confirmDeleteTask').addEventListener('click', deleteTask);
        document.getElementById('cancelDeleteTask').addEventListener('click', $('#deleteTaskModal').modal('hide'));
    
        // Utiliser la délégation d'événements pour le bouton delete-itemt
        document.addEventListener('click', function(e) {
            if (e.target.matches('.delete-itemt')) {
                e.preventDefault();
                taskIdToDelete = e.target.getAttribute('data-id');
                deleteModal.show();
            }
        });
    
        function deleteTask() {
            if (!taskIdToDelete) return;
    
            const token = document.querySelector('meta[name="csrf-token"]').content;
            
            // Fermer d'abord la modal de confirmation
            deleteModal.hide();
            
            fetch(`/projecttasks/${taskIdToDelete}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': token,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    _token: token
                })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur réseau');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // S'assurer que la modal Bootstrap est bien fermée
                    const modalElement = document.getElementById('deleteTaskModal');
                    const modalInstance = bootstrap.Modal.getInstance(modalElement);
                    if (modalInstance) {
                        modalInstance.hide();
                    }
                    
                    // Retirer le backdrop manuellement si nécessaire
                    const backdrop = document.querySelector('.modal-backdrop');
                    if (backdrop) {
                        backdrop.remove();
                    }
                    
                    // Retirer la classe modal-open du body
                    document.body.classList.remove('modal-open');
                    
                    // Afficher le message de succès et recharger
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'The task was successfully deleted',
                        timer: 1500,
                        showConfirmButton: false
                    }).then(() => {
                        window.location.reload();
                    });
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred while deleting',
                });
            })
            .finally(() => {
                taskIdToDelete = null;
            });
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

    // Récupérer les données du formulaire
    var formData = new FormData(this);  // Utiliser FormData pour inclure les fichiers

    // Désactiver le bouton de soumission pour éviter plusieurs clics
    $('#addtask').prop('disabled', true).text('Submitting...');

    $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: formData,
        processData: false,  // Important pour l'envoi des fichiers
        contentType: false,  // Important pour l'envoi des fichiers
        success: function(response) {
            // Fermer le modal après la création de la tâche
            $('#modalForm').modal('hide');

            // Afficher un message de succès
            location.reload();

            // Mettre à jour la liste des tâches sans recharger la page
            // Exemple : ajouter la nouvelle tâche à la liste dynamique
            $('#taskList').append('<li>' + response.task_name + '</li>');

            // Réinitialiser le formulaire
            $('#NewtaskForm')[0].reset();

            // Réactiver le bouton de soumission
            $('#addtask').prop('disabled', false).text('Create Task');
        },
        error: function(response) {
            // Gérer les erreurs de manière plus précise
            if (response.status === 422) {
                // Afficher les erreurs de validation
                var errors = response.responseJSON.errors;
                var errorMessages = '';
                $.each(errors, function(key, value) {
                    errorMessages += value[0] + '\n';  // Afficher les erreurs
                });
                alert(errorMessages);
            } else {
                // Autres erreurs (ex. serveur)
                alert('An error occurred. Please try again.');
            }

            // Réactiver le bouton de soumission
            $('#addtask').prop('disabled', false).text('Create Task');
        }
    });
});

</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gestionnaire pour les liens de déplacement de tâche
        document.addEventListener('click', function(e) {
            if (e.target.matches('.move-task')) {
                e.preventDefault();
                const taskId = e.target.getAttribute('data-id');
                const newEtatId = e.target.getAttribute('data-etat-id');
                moveTask(taskId, newEtatId);
            }
        });
    
        function moveTask(taskId, newEtatId) {
            const token = document.querySelector('meta[name="csrf-token"]').content;
    
            fetch(`/projecttasks/${taskId}/move`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': token,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    etat_id: newEtatId,
                    _token: token
                })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur réseau');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Afficher une notification de succès
                    Swal.fire({
                        icon: 'success',
                        title: 'Succès',
                        text: 'The task was moved successfully',
                        timer: 1500,
                        showConfirmButton: false
                    }).then(() => {
                        // Recharger la page pour afficher la tâche dans son nouvel état
                        window.location.reload();
                    });
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred while moving the task',
                });
            });
        }
    });
</script>
<script>
    $(document).on('click', '.edit-task-btn', function (e) {
    e.preventDefault();

    // Récupère les informations de la tâche à partir des attributs data-*
    var taskId = $(this).data('id');
    var taskName = $(this).data('name');
    var taskDescription = $(this).data('description');
    var taskProgress = $(this).data('progress');
    var taskEndDate = $(this).data('end_date');
    var taskEstimateDate = $(this).data('estimate_date');
    var taskType = $(this).data('type');
    var taskParentId = $(this).data('parent-id');
    var assignedMembers = $(this).data('assigned-members');
    var childrens = $(this).data('children'); // Récupère les enfants en JSON

    // Remplir les champs du formulaire
    $('#editTaskId').val(taskId);
    $('#editTaskName').val(taskName);
    $('#editTaskDescription').val(taskDescription);
    $('#editTaskProgress').val(taskProgress);
    $('#editTaskEndDate').val(taskEndDate);
    $('#editEstimateDate').val(taskEstimateDate);
    $('#editTaskType').val(taskType);
    $('#editParentTask').val(taskParentId);

    // Affiche les membres assignés
    $('#taskassignee input[type="checkbox"]').prop('checked', false);
    if (assignedMembers && Array.isArray(assignedMembers)) {
        assignedMembers.forEach(function (memberId) {
            $('#member-' + memberId.id).prop('checked', true);
        });
    }

    // Afficher la liste des tâches enfants
    var childrenContainer = $('#childrenList');
    childrenContainer.empty(); // Vider le contenu précédent
    
    if (childrens && Array.isArray(childrens)) {
        childrens.forEach(function (child) {
            var childItem = `<li>${child.name} - ${child.progress}% completed</li>`;
            childrenContainer.append(childItem);
        });
    } else {
        childrenContainer.append('<li>Aucune tâche enfant</li>');
    }

    // Définir l'action du formulaire
    $('#editTaskForm').attr('action', '/projecttasks/' + taskId);

    // Affiche le modal d'édition
    $('#editTaskModal').modal('show');
});

</script>  
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fonction pour initialiser les membres assignés
        function initializeAssignedMembers(members) {
            if (members && members.length > 0) {
                members.forEach(memberId => {
                    const checkbox = document.querySelector(`input[value="${memberId}"]`);
                    if (checkbox) {
                        checkbox.checked = true;
                    }
                });
            }
        }
    
        // Fonction de recherche
        function initializeSearch() {
            const searchInput = document.getElementById('userSearch');
            const userItems = document.querySelectorAll('.user-item');
    
            searchInput.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase();
    
                userItems.forEach(item => {
                    const userName = item.querySelector('.form-check-label').textContent.toLowerCase();
                    const shouldShow = userName.includes(searchTerm);
                    item.style.display = shouldShow ? 'block' : 'none';
                });
            });
        }
    
        // Initialiser la recherche
        initializeSearch();
    
        // Pour être utilisé dans votre gestionnaire d'événements d'édition
        window.initTaskEdit = function(taskData) {
            // Supposons que assignedMembers soit un tableau d'IDs
            if (taskData.assignedMembers) {
                // Si assignedMembers est une chaîne JSON, la parser
                const members = typeof taskData.assignedMembers === 'string' 
                    ? JSON.parse(taskData.assignedMembers) 
                    : taskData.assignedMembers;
                
                initializeAssignedMembers(members);
            }
        }
    });
    </script>
    
    <style>
    .user-item {
        transition: all 0.3s ease;
    }
    
    .user-item:hover {
        background-color: rgba(0, 0, 0, 0.05);
    }
    
    #userSearch {
        border-radius: 6px;
        padding: 8px 12px;
        margin-bottom: 10px;
    }
    
    .user-list {
        border: 1px solid #e0e0e0;
        border-radius: 6px;
        padding: 10px;
    }
    
    .avatar-sm {
        width: 32px;
        height: 32px;
        object-fit: cover;
    }
    
    .user-item {
        animation: fadeIn 0.3s ease-in-out;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    </style>  
<script>
    $(document).ready(function() {
        // Initialiser Select2 sur les champs avec la classe 'select2'
        $('.select2').select2({
            placeholder: "Select an option",
            allowClear: true
        });
    });
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tasks = document.querySelectorAll('.task');
    const taskLists = document.querySelectorAll('.task-list');

    tasks.forEach(task => {
        task.addEventListener('dragstart', handleDragStart);
        task.addEventListener('dragend', handleDragEnd);
    });

    taskLists.forEach(list => {
        list.addEventListener('dragover', handleDragOver);
        list.addEventListener('dragenter', handleDragEnter);
        list.addEventListener('dragleave', handleDragLeave);
        list.addEventListener('drop', handleDrop);
    });

    let draggedTask = null;
    let originalParent = null;
    let originalPosition = null;

    function handleDragStart(e) {
        draggedTask = this;
        originalParent = this.parentNode;
        const tasks = [...originalParent.children];
        originalPosition = tasks.indexOf(this);
        this.classList.add('is-dragging');
        e.dataTransfer.effectAllowed = 'move';
        requestAnimationFrame(() => {
            this.style.opacity = '0.5';
        });
    }

    function handleDragEnd(e) {
        this.classList.remove('is-dragging');
        this.style.opacity = '1';
        taskLists.forEach(list => {
            list.classList.remove('drag-over');
        });
    }

    function handleDragOver(e) {
        e.preventDefault();
        e.dataTransfer.dropEffect = 'move';
        return false;
    }

    function handleDragEnter(e) {
        this.classList.add('drag-over');
    }

    function handleDragLeave(e) {
        this.classList.remove('drag-over');
    }

    function handleDrop(e) {
        e.preventDefault();
        e.stopPropagation();

        if (!draggedTask) return;

        const newEtatId = this.dataset.etatId;
        const taskId = draggedTask.dataset.taskId;
        const oldEtatId = originalParent.closest('.task-list').dataset.etatId;

        if (newEtatId !== oldEtatId) {
            const tasklistContent = this.querySelector('.tasklist-content');

            let insertPosition = -1;
            const mouseY = e.clientY;
            const tasks = [...tasklistContent.children];

            for (let i = 0; i < tasks.length; i++) {
                const task = tasks[i];
                const rect = task.getBoundingClientRect();
                const taskMiddle = rect.top + rect.height / 2;

                if (mouseY < taskMiddle) {
                    insertPosition = i;
                    break;
                }
            }

            if (insertPosition !== -1) {
                tasklistContent.insertBefore(draggedTask, tasks[insertPosition]);
            } else {
                tasklistContent.appendChild(draggedTask);
            }

            updateTaskState(taskId, newEtatId, draggedTask, oldEtatId);
        }

        this.classList.remove('drag-over');
        return false;
    }

    function updateTaskState(taskId, newEtatId, taskElement, oldEtatId) {
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    
    fetch(`/projecttasks/${taskId}/move`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': token,
            'Accept': 'application/json'
        },
        body: JSON.stringify({
            etat_id: newEtatId
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Mettre à jour les dates si nécessaire
            if (data.end_date) {
                const dueDateElement = taskElement.querySelector('.due-date');
                if (dueDateElement) {
                    dueDateElement.textContent = data.end_date;
                }
            }
            
            // Ajouter une animation de succès
            taskElement.classList.add('task-moved-success');
            setTimeout(() => {
                taskElement.classList.remove('task-moved-success');
                window.location.reload(); // Recharge la page après succès
            }, 1000);

            toastr.success('Tâche déplacée avec succès');
        } else {
            // En cas d'erreur, replacer la tâche à sa position initiale
            handleError(taskElement, oldEtatId, originalPosition);
        }
    })
    .catch(error => {
        console.error('Erreur:', error);
        handleError(taskElement, oldEtatId, originalPosition);
    });
}


    function handleError(taskElement, oldEtatId, originalPosition) {
        const originalList = document.querySelector(`[data-etat-id="${oldEtatId}"] .tasklist-content`);
        const tasks = [...originalList.children];
        if (originalPosition >= 0 && originalPosition < tasks.length) {
            originalList.insertBefore(taskElement, tasks[originalPosition]);
        } else {
            originalList.appendChild(taskElement);
        }

        taskElement.classList.add('task-moved-error');
        setTimeout(() => {
            taskElement.classList.remove('task-moved-error');
        }, 1000);

        toastr.error('Erreur lors du déplacement de la tâche');
    }
});

</script>
<script>
$(document).ready(function () {
    // Stocke toutes les options du sélecteur de tâches parentes
    const allParentTasksOption = $('#editParentTask option').clone();

    // Écoute les changements sur le champ du type de tâche
    $('#editTaskType').on('change', function () {
        var selectedType = $(this).val(); // Récupère le type sélectionné

        if (selectedType === 'user_story') {
            // Affiche les tâches de type "Feature" et montre le champ Parent Task
            $('#editParentTask').empty().append(allParentTasksOption.filter(function () {
                return $(this).val() === '' || $(this).text().includes('(feature)');
            }));
            $('#parentTaskField').show(); // Affiche le champ Parent Task

        } else if (selectedType === 'feature') {
            // Affiche les tâches de type "Epic" et montre le champ Parent Task
            $('#editParentTask').empty().append(allParentTasksOption.filter(function () {
                return $(this).val() === '' || $(this).text().includes('(epic)');
            }));
            $('#parentTaskField').show(); // Affiche le champ Parent Task

        }
        else if (selectedType === 'simple_task') {
            // Affiche les tâches de type "Epic" et montre le champ Parent Task
            $('#editParentTask').empty().append(allParentTasksOption.filter(function () {
                return $(this).val() === '' || $(this).text().includes('(user_story)');
            }));
            $('#parentTaskField').show(); // Affiche le champ Parent Task

        } else {
            // Cache le champ Parent Task pour les autres types
            $('#parentTaskField').hide();
        }
    });

    // Masque le champ Parent Task au chargement de la page si aucun type n'est sélectionné
    $('#parentTaskField').hide();
});

</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new TomSelect('#taskassigneeC', {
            plugins: ['remove_button'],
            maxItems: null, // permet la sélection multiple
            searchField: ['text'], // champ utilisé pour la recherche
            placeholder: 'Rechercher des membres...', 
            createOnBlur: false, // désactive la création de nouveaux éléments
            create: false,
            render: {
                no_results: function(data,escape) {
                    return '<div class="no-results">Aucun résultat trouvé</div>';
                },
            }
        });
    });
</script>
<script>
    $(document).ready(function () {
        // Stocke toutes les options du sélecteur de tâches parentes
        const allParentTasksOptions = $('#parenttask option').clone();
    
        // Écoute les changements sur le champ du type de tâche
        $('#tasktype').on('change', function () {
            var selectedType = $(this).val(); // Récupère le type sélectionné
    
            if (selectedType === 'user_story') {
                // Affiche les tâches de type "Feature" et montre le champ Parent Task
                $('#parenttask').empty().append(allParentTasksOptions.filter(function () {
                    return $(this).val() === '' || $(this).text().includes('(feature)');
                }));
                $('#cparentTaskField').show(); // Affiche le champ Parent Task
    
            } else if (selectedType === 'feature') {
                // Affiche les tâches de type "Epic" et montre le champ Parent Task
                $('#parenttask').empty().append(allParentTasksOptions.filter(function () {
                    return $(this).val() === '' || $(this).text().includes('(epic)');
                }));
                $('#cparentTaskField').show(); // Affiche le champ Parent Task
    
            }
            else if (selectedType === 'simple_task') {
                // Affiche les tâches de type "Epic" et montre le champ Parent Task
                $('#parenttask').empty().append(allParentTasksOptions.filter(function () {
                    return $(this).val() === '' || $(this).text().includes('(user_story)');
                }));
                $('#cparentTaskField').show(); // Affiche le champ Parent Task
    
            } else {
                // Cache le champ Parent Task pour les autres types
                $('#cparentTaskField').hide();
            }
        });
    
        // Masque le champ Parent Task au chargement de la page si aucun type n'est sélectionné
        $('#cparentTaskField').hide();
    });
    
    </script>
    <script>
        $(document).on('click', '.delete-item-etat', function(e) {
    e.preventDefault();
    if (confirm('Are you sure you want to delete this state ?')) {
        const etatId = $(this).data('etat-id-del');
        console.log("Etat id",etatId)
        $.ajax({
            url: `/etats/${etatId}`,
            type: 'DELETE',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                alert('État supprimé avec succès.');
                location.reload();
            },
            error: function(response) {
                location.reload();
            }
        });
    }
});
    </script>
<script>
function editTaskDetails(taskId) {
    fetch(`/projecttasks/${taskId}`)
        .then(response => response.json())
        .then(data => {
            // Remplir les informations de la tâche
            document.querySelector('.modal-title').textContent = `#${data.id || 'PM0020'}`; // Numéro de la tâche
            document.querySelector('.modal-body h5.title-show').textContent = data.name || 'Probic : Dashboard UI'; // Nom de la tâche
            document.querySelector('.modal-body p.text-muted').textContent = data.description || 'Description de la tâche...'; // Description

            // Attributs supplémentaires
            document.querySelector('.badge-status').textContent = data.status || 'In Progress'; // Status
            document.querySelector('.badge-priority').textContent = data.priority || 'High'; // Priorité
            document.querySelector('.label-reporter').textContent = data.reporter || 'Nom du reporter';

            // Remplir les commentaires
            let commentsContainer = document.querySelector('#comments');
            commentsContainer.innerHTML = ''; // Vider les commentaires précédents
            data.comments.forEach(comment => {
                commentsContainer.innerHTML += `
                    <div class="d-flex mt-2 align-items-start border-bottom py-4">
                        <img class="me-3 rounded-circle avatar-sm" src="${comment.avatar || 'default-avatar.jpg'}" alt="">
                        <div class="flex-1">
                            <h5 class="font-size-15 mt-0 mb-1">${comment.author}
                                <small class="text-muted float-end">${comment.time}</small>
                            </h5>
                            <p class="text-muted">${comment.content}</p>
                            <a href="javascript: void(0);" class="text-muted font-size-13 d-inline-block">
                                <i class="mdi mdi-reply me-1"></i>Reply
                            </a>
                        </div>
                    </div>
                `;
            });

            // Remplir les fichiers associés
            let filesContainer = document.querySelector('#file-items');
            filesContainer.innerHTML = ''; // Vider les fichiers précédents
            data.files.forEach(file => {
                filesContainer.innerHTML += `
                    <div class="card mb-2 p-2 fade show">
                        <div class="d-flex align-items-center">
                            <div class="avatar-sm me-3 ms-0 flex-shrink-0">
                                <div class="avatar-title bg-light text-muted rounded font-size-20">
                                    <i class="mdi mdi-folder-zip"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="text-start">
                                    <h5 class="font-size-14 mb-1">${file.name}</h5>
                                    <p class="text-muted font-size-13 mb-0">${file.size}</p>
                                </div>
                            </div>
                            <a href="#" class="delete-item" data-id="${file.id}"><i class="mdi mdi-trash-can-outline text-danger font-size-16"></i></a>
                        </div>
                    </div>
                `;
            });
        })
        .catch(error => console.error('Erreur:', error));
}

</script>
<!-- JavaScript de Select2 -->
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
@endsection
