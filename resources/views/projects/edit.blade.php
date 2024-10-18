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
                        <h4 class="mb-0">Edit Project</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6">
                                    <form action="{{ route('projects.update', $project->id) }}" method="POST">
                                        @csrf
                                        @method("PUT")
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="name" value="{{$project->name}}" id="example-text-input">
                                            </div>
                                        </div><!-- end row -->
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Description</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="description" value="{{$project->description}}" id="example-text-input">
                                            </div>
                                        </div><!-- end row -->
                                        <div class="mb-3 mb-lg-0 row">
                                            <label for="example-datetime-local-input" class="col-md-2 col-form-label">Date and time</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="date" name="deadline" value="{{$project->deadline}}" id="example-datetime-local-input">
                                            </div>
                                        </div><!-- end row -->
                                        <div class="row mb-3">
                                            <label class="col-md-2 col-form-label">Select</label>
                                            <div class="col-md-10">
                                                <select class="form-select" name="status">
                                                    @if ($project->status == "Completed")
                                                        <option value="Completed" selected>Completed</option>
                                                        @else
                                                            <option value="Completed">Completed</option>
                                                    @endif
                                                    @if ($project->status == "Progress")
                                                        <option value="Progress" selected>Progress</option>
                                                        @else
                                                            <option value="Progress" >Progress</option>
                                                    @endif
                                                    @if ($project->status == "Pending")
                                                        <option value="Pending" selected>Pending</option>
                                                        @else
                                                            <option value="Pending">Pending</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div><!-- end row -->
                                        
                                        <button type="submit" class="btn btn-soft-primary" >Update Project</button>
                                    </form>
                            </div><!-- end row -->

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
