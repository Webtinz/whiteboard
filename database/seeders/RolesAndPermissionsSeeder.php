<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        
        Permission::create(['name' => 'create_platform_user']);
        Permission::create(['name' => 'edit_platform_user']);
        Permission::create(['name' => 'delete_platform_user']);

        Permission::create(['name' => 'activate_account']);
        Permission::create(['name' => 'edit_profile']);
        Permission::create(['name' => 'delete_account']);

        Permission::create(['name' => 'create_groups']);
        Permission::create(['name' => 'edit_groups']);
        Permission::create(['name' => 'view_groups']);
        Permission::create(['name' => 'view_groups_details']);
        Permission::create(['name' => 'view_group_leads']);

        Permission::create(['name' => 'create_projects']);
        Permission::create(['name' => 'edit_projects']);
        Permission::create(['name' => 'view_projects']);
        Permission::create(['name' => 'view_projects_details']);
        Permission::create(['name' => 'view_project_leads']);

        Permission::create(['name' => 'create_posts']);
        Permission::create(['name' => 'edit_posts']);
        Permission::create(['name' => 'view_posts']);
        Permission::create(['name' => 'view_posts_details']);
        Permission::create(['name' => 'view_post_leads']);

        
        $role = Role::create(['name' => 'platform_users_management'])
            ->givePermissionTo(['create_platform_user',
             'edit_platform_user', 
             'delete_platform_user',
             'edit_profile',
             'delete_account',
             'activate_account'

        ]);
        $role = Role::create(['name' => 'manage_groups'])
            ->givePermissionTo([
            'view_groups',
            'view_groups_details',
            'view_group_leads',
            'create_groups',
            'edit_groups',
        ]);

        $role = Role::create(['name' => 'manage_projects'])
            ->givePermissionTo([
            'view_projects',
            'view_projects_details',
            'view_project_leads',
            'create_projects',
            'edit_projects',
        ]);

        $role = Role::create(['name' => 'manage_posts'])
            ->givePermissionTo([
            'view_posts',
            'view_posts_details',
            'view_post_leads',
            'create_posts',
            'edit_posts',
        ]);

        $role = Role::create(['name' => 'platform_master']);
        $role->givePermissionTo(Permission::all());
    }
}
