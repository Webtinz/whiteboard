{{-- @extends('users.layouts.app')

@section('content') --}}
    @if (session('removed'))
        <div class="alert alert-success">
            {{ session('removed') }}
        </div>
    @endif
    
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
            <nav aria-label="Page navigation example">
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
            </nav>
        </div>
    </div>
    {{-- @else
  @include('admin.permission-denied') --}}
{{-- @endsection --}}
