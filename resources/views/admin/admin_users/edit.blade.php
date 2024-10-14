{{-- @extends('users.layouts.app')

@section('content') --}}
@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
    <form method="POST" action="{{ route('admin_users.update', $admin_user->id) }}">
        <div class="row">
            <div class="col-md-6 d-block justify-content-around align-items-center">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Username</label>
                    <div class="input-icon">
                        <span class="input-icon-addon">
                            <i class="fa fa-user"></i>
                        </span>
                        <input value="{{ old('name', $admin_user->name) }}" type="text" class="form-control"
                            placeholder="Username" name="name" required autocomplete="name" />
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" value="{{ old('name', $admin_user->email) }}" class="form-control" id="email"
                        placeholder="Enter Email" name="email" required autocomplete="email" />
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>

            </div>
            <div class="col-md-6 d-block align-items-center justify-content-around">
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="user_type">User type</label>
                        <select class="form-control" name="user_type" id="user_type">
                            <option {{ $admin_user->user_type == 'platform master' ? 'selected' : '' }}
                                value="platform master">Platform master</option>
                            <option {{ $admin_user->user_type == 'platform user' ? 'selected' : '' }} value="platform user">
                                Platform user</option>
                        </select>
                        @error('user_type')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="rolesPermissionsSection"
            style="display: {{ $admin_user->user_type == 'platform user' ? 'flex' : 'none' }};">
            <div class="col-md-6">
                <div class="custom-select-wrapper form-group d-block" id="select-1-wrapper">
                    <label for="role">Roles</label>
                    <select id="roles" name="roles[]" class="form-control" multiple size="10">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}" {{ $admin_user->hasRole($role) ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('roles')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="custom-select-wrapper form-group d-block" id="select-2-wrapper">
                    <label for="role">Permissions</label>
                    <select id="permissions" name="permissions[]" class="form-control" multiple size="10">
                        @foreach ($userPermissions as $permission)
                            <option value="{{ $permission->id }}"
                                {{ $admin_user->hasDirectPermission($permission) ? 'selected' : '' }}>
                                {{ $permission->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('permissions')
                        {{ $message }}
                    @enderror
                </div>

            </div>

        </div>
        <div class="m-auto mt-4 d-flex align-items-center justify-content-around">
            <button class="btn btn-primary" type="submit">Update</button>
            <button class="btn btn-danger" type="reset">Cancel</button>
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rolesSelect = document.getElementById('roles');
            const permissionsSelect = document.getElementById('permissions');
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
            // console.log(selectedPermissions);
            rolesSelect.addEventListener('change', function() {
                // Store currently selected permissions before updating
                const currentlySelectedPermissions = new Set(Array.from(permissionsSelect.selectedOptions)
                    .map(option => option.value));

                // Merge current selections with previously selected
                selectedPermissions = new Set([...selectedPermissions, ...currentlySelectedPermissions]);

                // Clear and repopulate permissions
                permissionsSelect.innerHTML = '';

                for (let option of rolesSelect.selectedOptions) {
                    const roleId = option.value;
                    const role = @json($roles->keyBy('id'))[roleId];
                    // console.log(roleId, role);
                    if (role && role.permissions) {
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
            // Re-select previously selected permissions
            selectedPermissions.forEach(permissionId => {
                const option = permissionsSelect.querySelector(`option[value="${permissionId}"]`);
                if (option) {
                    option.selected = true;
                }
            });

        });
    </script>
{{-- @endsection --}}
