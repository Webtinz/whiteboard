@extends('layouts.dashboardlayout')

@section('links')
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    {{-- <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- App Css-->
    
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @if (session('removed'))
        <div class="alert alert-success">
            {{ session('removed') }}
        </div>
    @endif

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="ms-md-auto py-2 py-md-0 mb-2 d-flex align-items-center justify-content-between">

                    @if (Auth::user()->hasDirectPermission('create_platform_user'))
                        <a href="{{ route('admin_users.create') }} " class="btn btn-primary btn-round float-end">Add Platform Users</a>
                    @endif
                </div>

                <div class="card center ">
                    <div class="card-header">
                        <div class="card-title">Platform users</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admin_users as $user)
                                    <tr>
                                        <div>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>

                                            <td>
                                                <a href="{{ route('admin_users.show', $user->id) }}" class="btn btn-warning btn-sm"><i
                                                        class="fas fa-eye"></i></a>
                                                @if (Auth::user()->hasDirectPermission('edit_platform_user'))
                                                    <a href="{{ route('admin_users.edit', $user->id) }}"
                                                        class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                                @endif

                                                @if (Auth::user()->hasDirectPermission('delete_platform_user'))
                                                    <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="fas fa-trash-alt"></i></i></button>
                                                @endif
                                            </td>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Do you really want to remove this platform user ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ route('admin_users.destroy', $user->id) }}" method="POST"
                                                            style="display: inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger " data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">Confirm</button>
                                                        </form>
                                                        <button type="button" class="btn btn-success"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item {{ $admin_users->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $admin_users->previousPageUrl() }}" tabindex="-1"
                                        aria-disabled="true">Précédent</a>
                                </li>
                                @foreach ($admin_users->getUrlRange(1, $admin_users->lastPage()) as $page => $url)
                                    <li class="page-item {{ $page == $admin_users->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endforeach
                                <li class="page-item {{ $admin_users->hasMorePages() ? '' : 'disabled' }}">
                                    <a class="page-link" href="{{ $admin_users->nextPageUrl() }}">Suivant</a>
                                </li>
                            </ul>
                        </nav> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    {{-- data-dowload-file-id --}}

    @include('ak_dir.chat.chat_script.chat_scripts')
    
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Metismenu Js -->
    <script src="{{ asset('assets/libs/metismenujs/metismenujs.min.js') }}"></script>

    <!-- Simplebar Js -->
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>

    <!-- Feather Js -->
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>


    <!-- ligntbox -->
    <script src="{{ asset('assets/libs/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/lightbox.init.js') }}"></script>
@endsection