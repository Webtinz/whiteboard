{{-- @extends('users.layouts.app')

@section('content') --}}
    <div class="container mt-5">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="d-flex justify-content-between">
            <h2 class="mb-4">Détails de l'utilisateur</h2>
            <a href="{{ route('admin_users.edit', $user->id) }}" class="mr-3"><span class="btn btn-primary btn-sm">
                    Edit</span> </a>
        </div>
        <div class="card">
            <div class="card-header">
                Informations Générales
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

        <div class="card mt-4">
            <div class="card-header">
                Détails Supplémentaires
            </div>

        </div>

        <div class="card mt-4">
            <div class="card-header">
                Roles and permissions
            </div>
            <div class="card-body">
                <h5 class="card-title">Roles:</h5>
                @foreach ($user->roles as $role)
                    <p class="card-text">{{ $role->name }}</p>
                @endforeach
            </div>
            <div class="card-body">
                <h5 class="card-title">Permissions:</h5>
                @foreach ($user->permissions as $permissions)
                    <p class="card-text">{{ $permissions->name }} </p>
                @endforeach
            </div>
        </div>
    </div>
    <div class="card center ">
        <div class="card-header">
            <div class="card-title">{{ $user->name }} platform users</div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
{{-- @endsection --}}
