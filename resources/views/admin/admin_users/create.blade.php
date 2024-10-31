@extends('layouts.dashboardlayout')

@section('links')
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    {{-- <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- App Css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <form method="POST" action="{{ route('admin_users.store') }}">
        <div class="row">
            <div class="col-md-6 d-block justify-content-around align-items-center">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" placeholder="Username" name="name" required />
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email"
                        required />
                </div>
            </div>
            <div class="col-md-6 d-block align-items-center justify-content-around">
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
                        <span class="input-group-text" onclick="togglePasswordVisibility()">
                            <i class="fa fa-eye" id="eyeIcon"></i>
                        </span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="user_type">User type</label>
                    <select class="form-control" name="user_type" id="user_type"  onchange="deselectOtherOptions(this)">
                        <option selected value="platform master">Platform master</option>
                        <option value="platform user">Platform user</option>
                        <option value="internal">Internal</option>
                        <option value="external">External</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row" id="rolesPermissionsSection" style="display: none">
            <div class="col-md-6">
                <div class="custom-select-wrapper form-group d-block" id="select-1-wrapper">
                    <label for="role">Roles</label>
                    <select id="roles" name="roles[]" class="form-control" multiple size="10">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="custom-select-wrapper form-group d-block" id="select-2-wrapper">
                    <label for="role">Permissions</label>
                    <select id="permissions" name="permissions[]" class="form-control" multiple size="10">
                        <!-- Permissions will be populated dynamically -->
                    </select>
                </div>

            </div>

        </div>
        <div class="m-auto mt-4 d-flex align-items-center justify-content-around">
            <button class="btn btn-primary" type="submit">Create</button>
            <button class="btn btn-danger" onclick="goBack()"  type="reset">Cancel</button>
            {{-- <a onclick="goBack()" class="btn btn-default mx-2 my-1">Go Back</a> --}}
        </div>
    </form>    
@endsection

@section('js')
<script>
    function deselectOtherOptions(select) {
        // Vérifie si l'option "External" est sélectionnée
        if (select.value === 'external') {
            // Désélectionne toutes les options de roles[]
            const selectRoles = document.querySelector('select[name="roles[]"]');
            for (let option of selectRoles.options) {
                option.selected = false;
            }

            // Désélectionne toutes les options de permissions[]
            const selectPermissions = document.querySelector('select[name="permissions[]"]');
            for (let option of selectPermissions.options) {
                option.selected = false;
            }
        }
    }
</script>

<script>
    function togglePasswordVisibility() {
        const passwordField = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const rolesSelect = document.getElementById('roles');
        const permissionsSelect = document.getElementById('permissions');
        const allPermissions = @json($permissions);

        const userTypeSelect = document.getElementById('user_type');
        const rolesPermissionsSection = document.getElementById('rolesPermissionsSection');

        userTypeSelect.addEventListener('change', function() {
            if (this.value !== 'platform master') {
                rolesPermissionsSection.style.display = 'flex';
            } else {
                rolesPermissionsSection.style.display = 'none';
            }
        });

        let selectedPermissions = new Set(Array.from(permissionsSelect.selectedOptions).map(option => option
            .value));
        rolesSelect.addEventListener('change', function() {
            // Store currently selected permissions before updating
            const currentlySelectedPermissions = new Set(Array.from(permissionsSelect.selectedOptions)
                .map(option => option.value));

            // Merge current selections with previously selected
            selectedPermissions = new Set([...selectedPermissions, ...currentlySelectedPermissions]);

            permissionsSelect.innerHTML = '';

            for (let option of rolesSelect.selectedOptions) {
                const roleId = option.value;
                const role = @json($roles->keyBy('id'))[roleId];

                if (role && role.permissions) {
                    //console.log(role);
                    role.permissions.forEach(function(permission) {
                        if (!permissionsSelect.querySelector(
                            `option[value="${permission.id}"]`)) {
                            const opt = new Option(permission.name, permission.id);
                            permissionsSelect.add(opt);
                            // Select if it was previously selected
                            opt.selected = selectedPermissions.has(permission.id.toString());
                        }
                    });
                }
            }
        });
    });
</script>

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
