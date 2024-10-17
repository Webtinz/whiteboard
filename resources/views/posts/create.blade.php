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
                        <h4 class="mb-0">Add Post</h4>
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
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                
                                                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="content" class="form-label">Post Content</label>
                                                        <textarea name="content" class="form-control" id="content" rows="3"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="team_id" class="form-label">Team</label>
                                                        <select name="team_id" id="team_id" class="form-control" required>
                                                            @foreach ($teams as $team)
                                                                <option value="{{ $team->id }}">{{ $team->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Upload Image</label>
                                                        <input type="file" name="image" class="form-control" id="image">
                                                    </div>
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
<!-- end main content-->
@endsection
@section('js')
@endsection



        