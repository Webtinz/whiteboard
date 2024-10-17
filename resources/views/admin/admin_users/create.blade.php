{{-- @extends('users.layouts.app')

@section('content') --}}
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
                <div class="form-group">
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
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                        required />
                </div>
                <div class="mb-3">
                    <label for="user_type">User type</label>
                    <select class="form-control" name="user_type" id="user_type">
                        <option selected value="platform master">Platform master</option>
                        <option value="platform user">Platform user</option>
                        <option value="sales manager">Sales manager</option>
                        <option value="sales rep">Sales rep</option>
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
            <button class="btn btn-danger" type="reset">Cancel</button>
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rolesSelect = document.getElementById('roles');
            const permissionsSelect = document.getElementById('permissions');
            const allPermissions = @json($permissions);

            const userTypeSelect = document.getElementById('user_type');
            const rolesPermissionsSection = document.getElementById('rolesPermissionsSection');

            userTypeSelect.addEventListener('change', function() {
                if (this.value === 'platform user') {
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
{{-- @endsection --}}
