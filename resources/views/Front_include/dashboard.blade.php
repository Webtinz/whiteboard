@extends('layouts.dashboardlayout')
@section('links')
<style>
    .scrollable-posts {
        max-height: 100vh; /* Définit la hauteur maximale de la liste */
        overflow-y: auto; /* Active le défilement vertical */
    }
</style>
@endsection
@section('content')
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
    
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Dashboard</h4>
    
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Utility</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
    
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
    
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <div class="text-center border-end">
                                                <img src="assets/images/users/avatar-10.jpg"
                                                    class="img-fluid avatar-xxl rounded-circle" alt="">
                                                <h4 class="text-primary font-size-20 mt-3 mb-2">{{$user->name}}</h4>
                                                <h5 class="text-muted font-size-13 mb-0">Web Designer</h5>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-md-9">
                                            <div class="ms-3">
                                                <div>
                                                    <h4 class="card-title mb-2">Biography</h4>
                                                    <p class="mb-0 text-muted">Hi I'm Jansh,has been the industry's standard
                                                        dummy text To an English person alteration text.</p>
                                                </div>
                                                <div class="row my-4">
                                                    <div class="col-md-12">
                                                        <div>
                                                            <p class="text-muted mb-2 fw-medium"><i
                                                                    class="mdi mdi-email-outline me-2"></i>{{$user->email}}
                                                            </p>
                                                            <p class="text-muted fw-medium mb-0"><i
                                                                    class="mdi mdi-phone-in-talk-outline me-2"></i>418-955-4703
                                                            </p>
                                                        </div>
                                                    </div><!-- end col -->
                                                </div><!-- end row -->
                                                <div class="d-flex gap-2 align-items-center">
                                                    <p class="font-size-14 mb-0 fw-medium">Social :</p>
                                                    <a href="javascript: void(0);">
                                                        <div class="avatar-sm">
                                                            <span
                                                                class="avatar-title bg-soft-primary rounded-circle font-size-16 text-primary">
                                                                <i class="mdi mdi-github"></i>
                                                            </span>
                                                        </div>
                                                    </a><!-- end -->
                                                    <a href="javascript: void(0);">
                                                        <div class="avatar-sm">
                                                            <span
                                                                class="avatar-title bg-soft-success text-success rounded-circle font-size-16">
                                                                <i class="mdi mdi-whatsapp"></i>
                                                            </span>
                                                        </div>
                                                    </a><!-- end -->
                                                    <a href="javascript: void(0)">
                                                        <div class="avatar-sm">
                                                            <span
                                                                class="avatar-title bg-soft-pink text-pink rounded-circle font-size-16">
                                                                <i class="mdi mdi-instagram"></i>
                                                            </span>
                                                        </div>
                                                    </a> <!-- end -->
                                                </div>
                                                <ul class="nav nav-tabs nav-tabs-custom border-bottom-0 mt-3 nav-justfied"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active px-4" data-bs-toggle="tab"
                                                            href="#projects-tab" role="tab">
                                                            <span class="d-block d-sm-none"><i
                                                                    class="fas fa-home"></i></span>
                                                            <span class="d-none d-sm-block">Projects</span>
                                                        </a>
                                                    </li><!-- end li -->
                                                    <li class="nav-item">
                                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#tasks-tab"
                                                            role="tab">
                                                            <span class="d-block d-sm-none"><i
                                                                    class="mdi mdi-menu-open"></i></span>
                                                            <span class="d-none d-sm-block">Tasks</span>
                                                        </a>
                                                    </li><!-- end li -->
                                                    <li class="nav-item">
                                                        <a class="nav-link px-4" data-bs-toggle="tab" href="#team-tab"
                                                            role="tab">
                                                            <span class="d-block d-sm-none"><i
                                                                    class="mdi mdi-account-group-outline"></i></span>
                                                            <span class="d-none d-sm-block">Team</span>
                                                        </a>
                                                    </li><!-- end li -->
                                                </ul><!-- end ul -->
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end card body -->
                            </div><!-- end card -->
    
                            <div class="card">
                                <div class="tab-content p-4">
                                    <div class="tab-pane active" id="projects-tab" role="tabpanel">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-1">
                                                <h4 class="card-title mb-4">Projects</h4>
                                            </div>
                                        </div>
    
                                        <div class="row" id="all-projects">
                                            @forelse ($projects as $project )    
                                                <div class="col-md-6 team-box" id="project-items-1">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="d-flex mb-3">
                                                                <div class="flex-grow-1 align-items-start">
                                                                    <div>
                                                                        <h6 class="mb-0 text-muted">
                                                                            <i class="mdi mdi-circle-medium text-danger fs-3 align-middle"></i>
                                                                            <span class="team-date">{{$project->deadline}}</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown ms-2">
                                                                    <a href="#" class="dropdown-toggle font-size-16 text-muted"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="{{ route('projects.show', $project->id) }}">Details</a>
                                                                        <a class="dropdown-item" href="{{ route('projects.edit', $project->id) }}">Edit</a>
                                                                        {{-- <a class="dropdown-item" href="javascript: void(0);">Share</a> --}}
                                                                        {{-- <div class="dropdown-divider"></div> --}}
                                                                        {{-- <a href="#" class="dropdown-item delete-item" data-id="{{ $project->id }}" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">Delete</a> --}}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="mb-4">
                                                                <h5 class="mb-1 font-size-17 team-title">{{$project->name}}</h5>
                                                                <p class="text-muted mb-0 team-description">{{$project->description}}</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="align-self-end">
                                                                    @if ($project->status == "Progress")
                                                                        <span class="badge badge-soft-danger p-2 team-status">{{$project->status}}</span>
                                                                    @endif
                                                                    @if ($project->status == "Pending")
                                                                        <span class="badge badge-soft-warning p-2 team-status">{{$project->status}}</span>
                                                                    @endif
                                                                    @if ($project->status == "Completed")
                                                                        <span class="badge badge-soft-success p-2 team-status">{{$project->status}}</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div><!-- end card body-->
                                                    </div><!-- end card -->
                                                </div><!-- end col -->
                                            @empty
                                                <div class="alert alert-warning">
                                                    Empty
                                                </div>
                                            @endforelse    
                                        </div><!-- end row -->
                                    </div><!-- end tab pane -->
    
                                    <div class="tab-pane" id="tasks-tab" role="tabpanel">
                                        <h4 class="card-title mb-4">Tasks</h4>
    
                                        <div class="row">
                                            <div class="col-xl-12">
                                                @forelse ($projecttasks as $task )    
                                                    <div class="task-list-box" data-project-id="{{ $task->project_id }}" data-progress="{{ $task->progress }}" id="landing-task">
                                                        <div id="task-item-1">
                                                            <div class="card list-group-item rounded-3">
                                                                <div class="card-body">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-xl-6 col-sm-5">
                                                                            <div class="checklist form-check font-size-15">
                                                                                <input type="checkbox" class="form-check-input"
                                                                                    id="customCheck1">
                                                                                <label class="form-check-label ms-1 task-title"
                                                                                    for="customCheck1">{{$task->name}}</label>
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
                                                                                                title="{{$user->name}}">
                                                                                                <img src="assets/images/users/avatar-2.jpg"
                                                                                                    alt=""
                                                                                                    class="rounded-circle avatar-sm">
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
                                                @empty
                                                    <div class="alert alert-warning">
                                                        Empty
                                                    </div>
                                                @endforelse

                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end tab pane -->
                                    <div class="tab-pane" id="team-tab" role="tabpanel">
                                        <h4 class="card-title mb-4">Team</h4>
                                        <div class="row">
                                            @forelse ($groupMessages as $groupMessage)    
                                                <div class="col-xl-4 col-md-6" id="team-1">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="d-flex mb-4">
                                                                <div class="flex-grow-1 align-items-start">
                                                                    <div class="avatar-group float-start flex-grow-1">
                                                                        @forelse ($groupMessage->members->unique('id') as $member)
                                                                            <div class="avatar-group-item">
                                                                                <a href="javascript: void(0);"
                                                                                class="d-inline-block" data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title=""
                                                                                data-bs-original-title="{{ $member->name }}">
                                                                                    <img src="assets/images/users/avatar-6.jpg"
                                                                                        alt="" class="rounded-circle avatar-sm">
                                                                                </a>
                                                                            </div>
                                                                        @empty
                                                                            <div class="alert alert-warning">
                                                                                Empty
                                                                            </div>
                                                                        @endforelse
                                                                    </div><!-- end avatar group -->
                                                                </div>
                                                                <div class="dropdown ms-2">
                                                                    <a href="#" class="dropdown-toggle font-size-16 text-muted"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                                    </a>
        
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item"
                                                                        href="{{route('conversations')}}">Go to chat</a>
                                                                        {{-- <div class="dropdown-divider"></div> --}}
                                                                        {{-- <a class="dropdown-item text-danger leave-team"
                                                                        data-id="1" data-bs-toggle="modal"
                                                                        data-bs-target=".bs-add-leave-team"
                                                                        href="javascript: void(0);">
                                                                        Leave Team</a> --}}
                                                                    </div>
                                                                </div><!-- end dropdown -->
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-1 font-size-17">{{$groupMessage->name}}</h5>
                                                                {{-- <p class="text-muted  font-size-13 mb-0">4 Projects</p> --}}
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col -->
                                            @empty
                                                <div class="alert alert-warning">
                                                    Empty
                                                </div>
                                            @endforelse
                                        </div><!-- end row -->
                                    </div><!-- end tab pane -->
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->
    
                        <div class="col-xl-4">
                            <div class="card">
                                <h5 class="mx-4 mt-4">Lastest posts</h5>
                                <div class="card-body scrollable-posts">
                                    @forelse ($posts as $post)
                                            <div class="col-sm-12 mb-4 shadow-lg">
                                                <!-- Header du post : avatar, auteur, date -->
                                                <div class="d-flex align-items-center mb-3">
                                                    <img src="{{ asset('assets/images/small/img-4.png') }}" alt="User Avatar" class="rounded-circle me-2" width="40" height="40">
                                                    <div>
                                                        <h6 class="mb-0">Team {{ $post->group->name }} posted by {{ $post->author->name }}</h6>
                                                        <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                                                    </div>
                                                    {{-- <div class="ms-auto">
                                                        <!-- Bouton options -->
                                                        <a href="#" class="text-muted" data-bs-toggle="dropdown">
                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div> --}}
                                                </div>
                        
                                                <!-- Contenu du post -->
                                                <p>{{ $post->content }}</p>
                        
                                                <!-- Image associée au post -->
                                                @if(Str::endsWith($post->image, ['.jpg', '.jpeg', '.png', '.gif']))
                                                    <img class="img-fluid rounded mb-3" src="{{ Storage::url($post->image) }}" alt="Image">
                                                @elseif(Str::endsWith($post->image, ['.mp4', '.mkv', '.avi', '.mov']))
                                                    <video controls class="img-fluid rounded mb-3">
                                                        <source src="{{ Storage::url($post->image) }}" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                @endif
                        
                                                <!-- Boutons Like, Commenter, Partager -->
                                                <div class="d-flex justify-content-between align-items-center border-top pt-2">
                                                    <!-- Bouton Like -->
                                                    <form action="{{ route('posts.like', $post->id) }}" method="POST" class="me-2">
                                                        @csrf
                                                        <button type="button" class="btn btn-link text-muted like-button" data-post-id="{{ $post->id }}">
                                                            @if($post->isLikedByUser($user->id))
                                                                <i class="far fa-thumbs-up" style="color: blue"></i> <span class="like-count">Like ({{ $post->likes->count() }})</span>
                                                                @else
                                                                    <i class="far fa-thumbs-up"></i> <span class="like-count">Like ({{ $post->likes->count() }})</span>
                                                            @endif
                                                        </button>                                                        
                                                    </form>
                        
                                                    <!-- Bouton Commenter -->
                                                    <a href="#comment-section-{{ $post->id }}" class="btn btn-link text-muted comment-count-btn" data-bs-toggle="collapse" data-post-id="{{ $post->id }}">
                                                        <i class="far fa-comment"></i> Comment ({{ $post->comments->count() }})
                                                    </a>                                                    
                        
                                                    <!-- Bouton Partager -->
                                                    {{-- <a href="#" class="btn btn-link text-muted">
                                                        <i class="far fa-share-square"></i> Share
                                                    </a> --}}
                                                </div>
                        
                                                <!-- Section des commentaires -->
                                                <div class="collapse" id="comment-section-{{ $post->id }}">
                                                    <div class="card-footer">
                                                        <!-- Formulaire pour ajouter un commentaire -->
                                                        <form id="comment-form-{{ $post->id }}" class="d-flex align-items-center mb-3">
                                                            @csrf
                                                            <img src="{{ asset('assets/images/small/img-4.png') }}" alt="User Avatar" class="rounded-circle me-2" width="30" height="30">
                                                            <input type="text" name="content" class="form-control comment-content" placeholder="Write a comment..." required>
                                                            <button class="btn btn-primary ms-2 submit-comment" data-post-id="{{ $post->id }}" type="button">Post</button>
                                                        </form>
                                                        
                                                        <!-- Affichage des commentaires existants avec un conteneur défilable -->
                                                        <div class="comment-section" style="max-height: 200px; overflow-y: auto;">
                                                            @forelse ($post->comments as $comment)
                                                            <div class="d-flex align-items-center mb-2">
                                                                <img src="{{ asset('assets/images/small/img-4.png') }}" alt="Comment Author Avatar" class="rounded-circle me-2" width="30" height="30">
                                                                <div class="bg-light rounded p-2 w-100">
                                                                    <strong>{{$comment->user->name}}</strong>
                                                                    <p class="mb-1">{{ $comment->content }}</p>
                                                                    <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                                                                </div>
                                                            </div>
                                                            @empty
                                                                <div class="alert alert-warning">
                                                                    Empty
                                                                </div>
                                                            @endforelse
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @empty
                                                <div class="alert alert-warning">
                                                    Empty
                                                </div>
                                            @endforelse
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
    
            <!-- Edit Project Modal -->
            <div class="modal fade bs-example-new-project" id="edit-project-modal" tabindex="-1" role="dialog"
                aria-labelledby="addProjectModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0">
                        <div class="modal-header bg-soft-primary">
                            <h5 class="modal-title font-size-16 text-primary add-project-title">Add New Project</h5>
                            <h5 class="modal-title font-size-16 text-primary update-project-title" style="display: none;">
                                Update Project</h5>
                            <button type="button" class="btn-close" id="update-team" data-bs-dismiss="modal"
                                aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body p-4">
                            <form id="NewtaskForm">
                                <div class="row mb-3">
                                    <label for="projectName" class="col-sm-2 col-form-label pt-0 pt-sm-2">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="projectName">
                                    </div>
                                </div><!-- end row -->
                                <div class="row mb-3">
                                    <label for="projectDetails" class="col-sm-2 col-form-label pt-0 pt-sm-2">Details</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="projectDetails">
                                    </div>
                                </div><!-- end row -->
                                <div class="row mb-3">
                                    <label for="task-due-date" class="col-sm-2 col-form-label pt-0 pt-sm-2">Timeline</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" value="" id="task-due-date"
                                            data-date-format="d M, Y">
                                    </div>
                                </div><!-- end row -->
                                <div class="row mb-3 mt-3 mt-xl-0">
                                    <label class="col-sm-2 col-form-label pt-0 pt-sm-2">Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" data-trigger name="team-status" id="team-status">
                                            <option value="">Choose...</option>
                                            <option value="Completed">Completed</option>
                                            <option value="Progress">Progress</option>
                                            <option value="Pending">Pending</option>
                                        </select>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                                <div class="pt-2">
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
                                                <label class="form-check-label font-size-14 ms-3 mb-0" for="member-1">Albert
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
                                                <label class="form-check-label font-size-14 ms-3 mb-0" for="member-2">Denny
                                                    Silva</label>
                                            </div>
                                        </li><!-- end li -->
                                        <li>
                                            <div
                                                class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" id="member-10"
                                                    name="member[]" data-type="image">
                                                <img src="assets/images/users/avatar-10.jpg"
                                                    class="rounded-circle avatar-sm" alt="">
                                                <label class="form-check-label font-size-14 ms-3 mb-0" for="member-10">Jansh
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
                                                <label class="form-check-label ms-3 font-size-14 mb-0" for="member-3">Adrian
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
                                                <label class="form-check-label font-size-14 ms-3 mb-0" for="member-5">Justin
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
                                                <label class="form-check-label font-size-14 ms-3 mb-0"
                                                    for="member-6">Michael Lawrence</label>
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
                                                <label class="form-check-label font-size-14 ms-3" for="member-8">Richard
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
                                                <label class="form-check-label font-size-14 ms-3 mb-0" for="member-9">Dan
                                                    Gibson</label>
                                            </div>
                                        </li><!-- end li -->
                                        <li>
                                            <div
                                                class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" id="member-15"
                                                    name="member[]" data-type="dataimage">
                                                <div class="avatar-sm">
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
                                                class="form-check form-check-primary font-size-14 mb-2 d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" id="member-13"
                                                    name="member[]" data-type="dataimage">
                                                <div class="avatar-sm">
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
                                                <input class="form-check-input me-3" type="checkbox" id="member-14"
                                                    name="member[]" data-type="dataimage">
                                                <div class="avatar-sm">
                                                    <div class="avatar-title rounded-circle bg-purple">
                                                        L
                                                    </div>
                                                </div>
                                                <label class="form-check-label font-size-14 ms-3 mb-0" for="member-14">Lisa
                                                    Freeman</label>
                                            </div>
                                        </li><!-- end li -->
                                        <li>
                                            <div
                                                class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" id="member-16"
                                                    name="member[]" data-type="dataimage">
                                                <div class="avatar-sm">
                                                    <div class="avatar-title rounded-circle bg-primary">
                                                        N
                                                    </div>
                                                </div>
                                                <label class="form-check-label font-size-14 ms-3 mb-0"
                                                    for="member-16">Nishant Rosborough</label>
                                            </div>
                                        </li><!-- end li -->
                                        <li>
                                            <div
                                                class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" id="member-17"
                                                    name="member[]" data-type="dataimage">
                                                <div class="avatar-sm">
                                                    <div class="avatar-title rounded-circle bg-purple">
                                                        F
                                                    </div>
                                                </div>
                                                <label class="form-check-label font-size-14 ms-3 mb-0" for="member-17">Felix
                                                    Schulze</label>
                                            </div>
                                        </li><!-- end li -->
                                    </ul><!-- end ul -->
                                </div>
                            </form>
                        </div>
    
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal"
                                id="cancelMember">Cancel</button>
                            <button type="button" class="btn btn-soft-primary" id="addproject">Create</button>
                            <button type="button" class="btn btn-soft-primary" style="display: none;"
                                id="updateprojectdetail">Update</button>
                        </div><!-- /.modal-footer -->
    
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
    
            <!-- Edit Task Modal -->
            <div class="modal fade bs-example-new-task" id="edit-task" tabindex="-1" role="dialog"
                aria-labelledby="addNewtaskModal" aria-hidden="true">
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
                                    <label for="tasksName" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="tasksName">
                                    </div>
                                </div><!-- end row -->
                                <div class="row mb-3">
                                    <label for="tasksName" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <!-- <select class="form-select shadow-none validate" id="TaskStatus" required="">
                                            <option value="" selected="">Choose..</option>
                                            <option value="Completed">Completed</option>
                                            <option value="Progress">Progress</option>
                                            <option value="Pending">Pending</option>
                                        </select> -->
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
                                                <label class="form-check-label font-size-14 ms-3 mb-0" for="member-1">Albert
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
                                                <label class="form-check-label font-size-14 ms-3 mb-0" for="member-2">Denny
                                                    Silva</label>
                                            </div>
                                        </li><!-- end li -->
                                        <li>
                                            <div
                                                class="form-check form-check-primary font-size-16 mb-2 d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" id="member-10"
                                                    name="member[]" data-type="image">
                                                <img src="assets/images/users/avatar-10.jpg"
                                                    class="rounded-circle avatar-sm" alt="">
                                                <label class="form-check-label font-size-14 ms-3 mb-0" for="member-10">Jansh
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
                                                <label class="form-check-label font-size-14 ms-3 mb-0" for="member-3">Adrian
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
                                                <label class="form-check-label font-size-14 ms-3 mb-0" for="member-4">Frank
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
                                                <label class="form-check-label font-size-14 ms-3 mb-0" for="member-5">Justin
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
                                                <label class="form-check-label font-size-14 ms-3 mb-0"
                                                    for="member-6">Michael Lawrence</label>
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
                                                <label class="form-check-label font-size-14 ms-3 mb-0"
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
                                                <label class="form-check-label font-size-14 ms-3 mb-0" for="member-9">Dan
                                                    Gibson</label>
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
                                                <label class="form-check-label font-size-14 ms-3 mb-0" for="member-11">Sarah
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
                                                <label class="form-check-label font-size-14 ms-3 mb-0" for="member-12">Den
                                                    Hudda</label>
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
                                                <label class="form-check-label font-size-14 ms-3 mb-0" for="member-13">Jansh
                                                    Music</label>
                                            </div>
                                        </li><!-- end li -->
                                    </ul><!-- end ul -->
                                </div><!-- end -->
    
                                <div class="mt-3">
                                    <p class="fw-medium mb-0">Sub Tasks</p>
                                    <div id="sub-tasks" class="mt-1">
    
                                        <div class="sub-group-item">
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
                                        <div class="sub-group-item">
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
                                            </div>
                                        </div><!-- end -->
                                        <div class="sub-group-item">
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
                                            </div>
                                        </div><!-- end -->
                                    </div><!-- end -->
    
                                    <div class="row px-0 mt-2">
                                        <div class="col">
                                            <input type="text" id="myInput" class="form-control" placeholder="Type task">
                                        </div>
                                        <div class="col-auto">
                                            <span onclick="newElement()" class="btn btn-light float-end">Add Tasks</span>
                                        </div>
                                    </div><!-- end -->
                                </div>
                            </form><!-- end form -->
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
    
            <!-- Leaves team Modal -->
            <div class="modal fade bs-add-leave-team" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0">
                        <div class="modal-body p-4 pb-2">
                            <button type="button" class="btn-close btn-sm float-end" id="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            <div class="mb-3">
                                <h6 class="text-body mb-0">Do you want to leave the team ?</h6>
                            </div><!-- end row -->
                        </div>
                        <div class="modal-footer border-0 pt-0">
                            <button type="button" class="btn btn-light btn-sm" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" id="leaving-team" data-id="" class="btn btn-danger btn-sm">Leave</button>
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
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on('click', '.like-button', function (e) {
    e.preventDefault();
    var postId = $(this).data('post-id');
    var likeButton = $(this);
    
    // Désactiver le bouton pour éviter les clics multiples
    likeButton.prop('disabled', true);

    $.ajax({
        url: '/posts/' + postId + '/like',
        type: 'POST',
        data: {
            _token: '{{ csrf_token() }}',
        },
        success: function (response) {
            if (response.liked) {
                likeButton.find('i').css('color', 'blue');
            } else {
                likeButton.find('i').css('color', '');
            }
            likeButton.find('.like-count').text('Like (' + response.likeCount + ')');
        },
        error: function (xhr) {
            console.log(xhr.responseText);
        },
        complete: function () {
            // Réactiver le bouton après la requête
            likeButton.prop('disabled', false);
        }
    });
});

</script>
<script>
    $(document).off('click', '.submit-comment').on('click', '.submit-comment', function (e) {
        e.preventDefault();
        var postId = $(this).data('post-id');
        var commentForm = $('#comment-form-' + postId);
        var content = commentForm.find('.comment-content').val();
        var commentSection = commentForm.next('.comment-section');
        var submitButton = $(this);

        // Désactiver le bouton pour éviter les clics multiples
        submitButton.prop('disabled', true);

        $.ajax({
            url: '/posts/' + postId + '/comment',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                content: content
            },
            success: function (response) {
                // Ajouter le nouveau commentaire à la section des commentaires
                var newComment = `
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('assets/images/small/img-4.png') }}" alt="Comment Author Avatar" class="rounded-circle me-2" width="30" height="30">
                        <div class="bg-light rounded p-2 w-100">
                            <strong>${response.comment.user.name}</strong>
                            <p class="mb-1">${response.comment.content}</p>
                            <small class="text-muted">Just now</small>
                        </div>
                    </div>
                `;
                commentSection.append(newComment);
                commentForm.find('.comment-content').val(''); // Effacer le champ de saisie

                // Mettre à jour le nombre de commentaires dans le bouton
                var commentCountBtn = $('.comment-count-btn[data-post-id="' + postId + '"]');
                var currentCount = parseInt(commentCountBtn.text().match(/\d+/)); // Extraire le nombre actuel
                var newCount = currentCount + 1;
                commentCountBtn.html('<i class="far fa-comment"></i> Comment (' + newCount + ')');
            },
            error: function (xhr) {
                console.log(xhr.responseText);
            },
            complete: function () {
                // Réactiver le bouton après la requête
                submitButton.prop('disabled', false);
            }
        });
    });

</script>
@endsection