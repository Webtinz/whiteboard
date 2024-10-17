<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class PlatformUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        $admin_users = User::where('user_type','platform user')
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view("admin.admin_users.index", compact("admin_users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::with('permissions')->get();
        $permissions = Permission::whereDoesntHave('roles')->get();
    
        return view('admin.admin_users.create', compact('roles', 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try {
            $validated = $request->validate([
                "name"=> 'required|max:50',
                "email" => 'required|max:50|email|unique:users,email',
                "password"=> 'required',
                'user_type' => 'required|string|in:platform user,platform master,sales manager,sales rep',
                'roles' => 'array',
                'roles.*' => 'exists:roles,id',
                'permissions' => 'array',
                'permissions.*' => 'exists:permissions,id',  
            ]) ;
            if ($validated) {
                $validated['created_by'] = Auth::id();
                $user = User::create([
                    'name'=> $validated['name'],
                    'email'=> $validated['email'],
                    'user_type'=> $validated['user_type'],
                    'password'=> Hash::make($validated['password']),
                    'created_by'=> $validated['created_by'],
                ]);
            }
        } catch (\Exception $e) {
            return redirect()->route('admin_users.create')
            ->with('error', 'Error : '.$e->getMessage());
        }
        // dd($validated);
        
        if ($request->user_type == 'platform user') {
            // Fetch role objects based on the submitted IDs
            $roles = Role::whereIn('id', $request->roles)->get();
            
            // Assign roles using the role objects
            $user->assignRole($roles);

            if ($request->has('permissions')) {
                // Fetch permission objects based on the submitted IDs
                $permissions = Permission::whereIn('id', $request->permissions)->get();
                
                // Assign permissions using the permission objects
                $user->givePermissionTo($permissions);
            }
        }elseif ($request->user_type == 'sales manager') {
            $query_start = 'leads';
            $defaultRoles = Role::where('name', 'LIKE', "%{$query_start}%")->get();
            $permissions = Permission::where('name','LIKE', "{$query_start}%" )
            ->where('name', 'edit_profile')->get();
            $user->assignRole($defaultRoles);
            $user->givePermissionTo($permissions);
        }elseif ($request->user_type == 'sales rep') {
            $query_start = 'leads';
            $defaultRoles = Role::where('name', 'LIKE', "%{$query_start}%")->get();
            $permissions = Permission::where('name','LIKE', "{$query_start}%" )
            ->where('name', 'edit_profile')->get();
            $user->assignRole($defaultRoles);
            $user->givePermissionTo($permissions);
        }
        else {
            //Give platform roles and permissions
            $defaultRole = Role::where('name', 'platform_master')->first();
            $permissions = Permission::all();
            $user->assignRole($defaultRole);
            $user->givePermissionTo($permissions);  
            
        }


        return redirect()->route('admin_users.create')
            ->with('success', "$user->user_type created successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        $create_user = User::where(
            'created_by', $user->id
        )->paginate(10);

        return view('admin.admin_users.show', compact('user', 'create_user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin_user = User::findOrFail($id);
        $query_start = 'client_';
        $roles = Role::whereNot('name', 'LIKE', "{$query_start}%")->with('permissions')->get();
        $permissions = Permission::where('name', 'LIKE', "{$query_start}%")->get();
        $userPermissions = $admin_user->getAllPermissions();
        // dd($userPermissions);
        return view('admin.admin_users.edit', compact('admin_user', 'roles', 'permissions', 'userPermissions'));
    }

    /** 
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        // dd($user->getPermissionNames());
        $validateData = $request->validate([
            "name"=> 'max:50',
            "email" => 'max:50|email',
            'user_type' => 'string|in:platform user,platform master',
            'roles' => 'array',
            'permissions' => 'array|exists:permissions,id',
            "password"=> ''
        ]) ;

        
        DB::beginTransaction();

        if ($validateData["password"] != "") {
            try {
                $user->update([
                    'name'=> $request->name,
                    'email'=> $request->email,
                    'user_type'=> $request->user_type,
                    'created_by'=>  Auth::id(),
                ]);
            }
            catch (\Exception $e) {
                return back()->with('error', 'An error occurred while updating the user: ' . $e->getMessage());
            }
        }else{
            
            try {
                $user->update([
                    'name'=> $request->name,
                    'email'=> $request->email,
                    'user_type'=> $request->user_type,
                    'created_by'=>  Auth::id(),
                ]);
            }
            catch (\Exception $e) {
                return back()->with('error', 'An error occurred while updating the user: ' . $e->getMessage());
            }
        }
        
            
        if($request->user_type == 'platform master') { 
            // Remove all roles and permissions for platform master
            $user->syncRoles([]);
            $user->syncPermissions([]);

            //Give platform roles and permissions
            $defaultRole = Role::where('name', 'master_admin')->first();
            $permissions = Permission::all();
            $user->assignRole($defaultRole);
            $user->givePermissionTo($permissions);  
            DB::commit();
        }else {
 
            $roles = Role::whereIn('id', $request->roles)->get();
            $user->syncRoles($roles);
            
            $permissions = Permission::whereIn('id', $request->permissions)->get();
            $user->syncPermissions($permissions);
            
            if ($request->has('permissions')) {
                // Fetch permission objects based on the submitted IDs
                // $permissions = Permission::whereIn('id', $request->permissions)->get();
                $user->syncPermissions($permissions);
                // dd($user->getRoleNames(),$user->getPermissionNames());
            } 
            DB::commit();
        }
        
        return redirect()->route('admin_users.show', $id)
        ->with('message',`user $user modified successfully`);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('admin_users.index')->with('removed', 'user removed successfully');
    }
}
