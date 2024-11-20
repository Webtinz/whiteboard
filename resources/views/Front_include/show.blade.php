@extends('layouts.dashboardlayout')
@section('links')
<!-- CSS de Select2 -->
<link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">
<style>
    .main {
    max-height: 90vh; /* Pour éviter de dépasser l'écran */
    overflow-y: auto; /* Activer le défilement vertical */
}

</style>
@endsection
@section('content')
<div class="main-content main">
    <div class="container-fluid d-flex align-items-center justify-content-center" style="margin-top: 100px;">
        <div class="col-lg-10 col-md-12">
            <div class="card shadow-lg border-0">
                <div class="card-header @if ($task->type === 'epic') bg-success bg-gradient text-dark
                                                            @elseif ($task->type === 'feature') bg-dark bg-gradient text-light 
                                                            @elseif ($task->type === 'user_story') bg-info bg-gradient text-dark
                                                            @else bg-warning bg-gradient text-dark
                                                            @endif">
                    <h3 class="mb-0 text-center @if ($task->type === 'epic') t text-dark
                                                            @elseif ($task->type === 'feature')  text-light 
                                                            @elseif ($task->type === 'user_story') text-dark
                                                            @else text-dark
                                                            @endif">{{ $task->name }}</h3>
                </div>
                <div class="card-body">
                    <!-- Section Description -->
                    <div class="mb-4">
                        <h5 class="fw-bold text-secondary">Description</h5>
                        <p class="text-muted">{{ $task->description }}</p>
                    </div>

                    <!-- Task Details -->
                    <div class="mb-4">
                        <h5 class="fw-bold text-secondary">Task Details</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Progress:</strong> {{ $task->progress }}%</p>
                                <p><strong>Status:</strong> 
                                    <span class="badge {{ $task->progress == 100 ? 'bg-success' : 'bg-warning text-dark' }}">
                                        {{ $task->progress == 100 ? 'Completed' : 'Not Completed' }}
                                    </span>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>End Date:</strong> {{ $task->end_date }}</p>
                                <p><strong>Etat:</strong> 
                                    <span class="badge bg-info text-dark">{{ $task->etat->name }}</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Assigned Members -->
                    <div class="mb-4">
                        <h5 class="fw-bold text-secondary">Assigned Members</h5>
                        <div class="d-flex flex-wrap">
                            @forelse ($task->users as $user)
                                <div class="avatar-group-item me-2">
                                    <img src="{{ asset('assets/images/users/avatar-' . $user->id . '.jpg') }}" 
                                         alt="{{ $user->name }}" 
                                         class="rounded-circle avatar-sm" 
                                         title="{{ $user->name }}" 
                                         data-bs-toggle="tooltip">
                                </div>
                            @empty
                                <p class="text-muted">No members assigned to this task.</p>
                            @endforelse
                        </div>
                    </div>
                    <div class="mb-4">
                        <h5 class="fw-bold text-secondary">Sub tasks</h5>
                        <div class="d-flex flex-wrap">
                            @forelse ($task->children as $user)
                            <a href="{{ route('tasks.show', $user->id) }}" class="font-size-15 fw-medium task-name">
                               # {{$user->id}}  {{ $user->name }}
                            </a> 
                            @empty
                                <p class="text-muted">No subtask link to this task.</p>
                            @endforelse
                        </div>
                    </div>
                    <h5 class="fw-bold text-secondary">Attached Files</h5>
                    <ul class="list-group">
                        @forelse ($task->files as $file)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="{{ asset('storage/' . $file->file_path) }}" target="_blank">{{ $file->file_name }}</a>
                                <form action="{{ route('tasks.delete_file', $file->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </li>
                        @empty
                            <p class="text-muted">No files attached to this task.</p>
                        @endforelse
                    </ul>
                </div>

                <div class="card-footer bg-light d-flex justify-content-between">
                    <a href="{{ route('kanbanboard', $task->project_id) }}" class="btn btn-secondary btn-sm">
                        <i class="mdi mdi-arrow-left"></i> Back to Tasks
                    </a>
                    <a class="edit-task-btn btn-sm btn-primary btn" data-bs-toggle="modal" href="#" data-id="{{ $task->id }}"
                        data-name="{{ $task->name }}"
                        data-description="{{ $task->description }}"
                        data-progress="{{ $task->progress }}"
                        data-end_date="{{ $task->real_time }}"
                        data-estimate_date="{{ $task->estimate_time }}"
                        {{-- data-status="{{ $task->status }}" --}}
                        data-type="{{ $task->type }}"
                        data-parent-id="{{ $task->parent_id }}"
                        data-assigned-members="{{ json_encode($task->users) }}"
                        data-children="{{ json_encode($task->children) }}"><i class="mdi mdi-pencil"></i> Edit Task</a>
                </div>
            </div>
        </div>
    </div>
    
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
                                    @foreach ($tasks as $task)
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
    <footer class="footer mt-5">
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
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
@endsection
