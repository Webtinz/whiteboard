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
                        <h4 class="mb-0">Projects</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                <li class="breadcrumb-item active">Projects</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div>
                <div class="d-flex flex-column flex-sm-row">
                    <div class="flex-grow-1">
                        <a href="#" class="btn btn-soft-primary" data-bs-toggle="modal"
                            data-bs-target=".bs-example-new-project" onclick="addProjects()"><i
                                class="mdi mdi-plus me-1"></i>Add Project</a>
                    </div>
                    <div class="search-box mt-3 mt-sm-0">
                        <div class="position-relative">
                            <input type="text" class="form-control rounded" id="projectSearch"
                                placeholder="Search...">
                            <i class="uil uil-search search-icon"></i>
                        </div>
                    </div>
                    <div class="ms-0 ms-sm-3 mt-3 mt-sm-0">
                        <a href="#" class="btn btn-soft-primary"><i class="mdi mdi-filter"></i></a>
                    </div>
                </div>

                <div class="row mt-4">
                    @foreach ($projects as $project )
                        
                    <div class="col-xl-3 col-md-6 team-box" id="project-items-1">
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
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item delete-item" href="{{ route('projects.delete', $project->id) }}">Delete</a>
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
                    @endforeach

                </div><!-- end row -->
            </div>
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <!-- Add Project Modal -->
    <div class="modal fade bs-example-new-project" tabindex="-1" role="dialog" aria-labelledby="addProjectModal"
        aria-hidden="true">
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
                    <form id="NewtaskForm" action="{{ route('projects.store') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="projectName" class="col-sm-2 col-form-label pt-0 pt-sm-2">Name</label>
                            <div class="col-sm-10">
                                <input type="text" id="item-name" name="name" class="form-control" placeholder="Enter Name">
                            </div>
                        </div><!-- end row -->
                        <div class="row mb-3">
                            <label for="projectDetails" class="col-sm-2 col-form-label pt-0 pt-sm-2">Details</label>
                            <div class="col-sm-10">
                                <input type="text" name="description" class="form-control"  placeholder="Enter Detail">
                            </div>
                        </div><!-- end row -->
                        <div class="row mb-3">
                            <label for="task-due-date" class="col-sm-2 col-form-label pt-0 pt-sm-2">Deadline</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="date" name='deadline' value="" 
                                    data-date-format="d M, Y" placeholder="Enter Date">
                            </div>
                        </div><!-- end row -->
                        <div class="row mb-3 mt-3 mt-xl-0">
                            <label class="col-sm-2 col-form-label pt-0 pt-sm-2">Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" data-trigger name="status">
                                    <option value="">Choose...</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Progress">Progress</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal"
                                id="cancelMember">Cancel</button>
                            <button type="submit" class="btn btn-soft-primary" >Create Project</button>
                            <button type="button" class="btn btn-soft-primary" style="display: none;"
                                id="updateprojectdetail">Update Project</button>
                        </div><!-- /.modal-footer -->
                    </form><!-- end form -->
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
@endsection
@section('js')
<script>
    document.getElementById('projectSearch').addEventListener('keyup', function() {
        var searchValue = this.value.toLowerCase();
        var projectItems = document.querySelectorAll('.team-box');

        projectItems.forEach(function(project) {
            var projectName = project.querySelector('.team-title').textContent.toLowerCase();

            if (projectName.includes(searchValue)) {
                project.style.display = ''; // Affiche l'élément
            } else {
                project.style.display = 'none'; // Masque l'élément
            }
        });
    });
</script>
@endsection
