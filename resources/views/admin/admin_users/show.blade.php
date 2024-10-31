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
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="container mt-5">
                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        
                    <div class="d-flex justify-content-between">
                        <h2 class="mb-4">User details</h2>
                        <a href="{{ route('admin_users.edit', $user->id) }}" class="mr-3"><span class="btn btn-primary btn-sm">
                                Edit</span> </a>
                    </div>
                    
                    <div class="card">
                        <div class="card-header text-center">
                            General Information
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @if ($user->name)
                                    <div class="col-md-6">
                                        <h5 class="card-title">Nom Complet:</h5>
                                        <p class="card-text">{{ $user->name }}</p>
                                    </div>
                                @endif

                                @if ($user->email)
                                    <div class="col-md-6">
                                        <h5 class="card-title">Email:</h5>
                                        <p class="card-text">{{ $user->email }}</p>
                                    </div>
                                @endif
                                <hr class="hr  mt-2 mb-2">
                                @if ($user->user_type)
                                    <div class="col-md-6">
                                        <h5 class="card-title">User Type:</h5>
                                        <p class="card-text">{{ $user->user_type }}</p>
                                    </div>
                                @endif

                                @if ($user->agency_name)
                                    <div class="col-md-6">
                                        <h5 class="card-title">Agency Name:</h5>
                                        <p class="card-text">{{ $user->agency_name }}</p>
                                    </div>
                                @endif

                                @if ($user->agency_type)
                                    <div class="col-md-6">
                                        <h5 class="card-title">Agency Type:</h5>
                                        <p class="card-text">{{ $user->agency_type }}</p>
                                    </div>
                                @endif

                                @if ($user->country)
                                    <div class="col-md-6">
                                        <h5 class="card-title">Country:</h5>
                                        <p class="card-text">{{ $user->country }}</p>
                                    </div>
                                @endif

                                @if ($user->state)
                                    <div class="col-md-6">
                                        <h5 class="card-title">State:</h5>
                                        <p class="card-text">{{ $user->state }}</p>
                                    </div>
                                @endif

                                @if ($user->city)
                                    <div class="col-md-6">
                                        <h5 class="card-title">City:</h5>
                                        <p class="card-text">{{ $user->city }}</p>
                                    </div>
                                @endif

                                @if ($user->local_government)
                                    <div class="col-md-6">
                                        <h5 class="card-title">Local government:</h5>
                                        <p class="card-text">{{ $user->local_government }}</p>
                                    </div>
                                @endif

                                @if ($user->primary_contact_name)
                                    <div class="col-md-6">
                                        <h5 class="card-title">Primary Contact Name:</h5>
                                        <p class="card-text">{{ $user->primary_contact_name }}</p>
                                    </div>
                                @endif

                                @if ($user->primary_contact_title)
                                    <div class="col-md-6">
                                        <h5 class="card-title">Primary Contact Title:</h5>
                                        <p class="card-text">{{ $user->primary_contact_title }}</p>
                                    </div>
                                @endif

                                @if ($user->primary_contact_business_email)
                                    <div class="col-md-6">
                                        <h5 class="card-title">Primary Contact Business Email:</h5>
                                        <p class="card-text">{{ $user->primary_contact_business_email }}</p>
                                    </div>
                                @endif

                                @if ($user->primary_business_phone_number)
                                    <div class="col-md-6">
                                        <h5 class="card-title">Primary Business Phone Number:</h5>
                                        <p class="card-text">{{ $user->primary_business_phone_number }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4 shadow p-3 text-center">
                        Additional Details
                    </div>

                    <div class="card mt-4">
                        <div class="card-header text-center">
                            Roles and permissions
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Roles:</h5>
                            @forelse ($user->roles as $role)
                                <li type="circle" class="card-text">{{ str_replace('_', ' ', $role->name) }}</li>
                            @empty
                                <center>
                                    <div class="alert alert-warning col-md-6">
                                        No Roles set yet
                                    </div>
                                </center>
                            @endforelse
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Permissions:</h5>
                            @forelse ($user->permissions as $permissions)
                                <li type="1" class="card-text">{{ str_replace('_', ' ', $permissions->name) }}</li>
                            @empty
                            <center>
                                <div class="alert alert-warning col-md-6">
                                    No Permissions yet
                                </div>
                            </center>
                        @endforelse
                        </div>
                    </div>

                    <div class="card center ">
                        <div class="card-header text-center">
                            <div class="card-title">{{ $user->name }}'s users created</div>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        {{-- <th scope="col">Rights</th> --}}
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Agency Type</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($create_user as $userc)
                                        <tr>
                                            <a href="{{ route('users.show', $user->id) }}">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $userc->name }}</td>
                                                <td>{{ $userc->email }}</td>

                                                <td>
                                                    {{ $userc->country }}
                                                </td>
                                                <td>
                                                    {{ $userc->agency_type }}
                                                </td>
                                            </a>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item {{ $create_user->onFirstPage() ? 'disabled' : '' }}">
                                        <a class="page-link" href="{{ $create_user->previousPageUrl() }}" tabindex="-1"
                                            aria-disabled="true">Précédent</a>
                                    </li>
                                    @foreach ($create_user->getUrlRange(1, $create_user->lastPage()) as $page => $url)
                                        <li class="page-item {{ $page == $create_user->currentPage() ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach
                                    <li class="page-item {{ $create_user->hasMorePages() ? '' : 'disabled' }}">
                                        <a class="page-link" href="{{ $create_user->nextPageUrl() }}">Suivant</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('js')
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection