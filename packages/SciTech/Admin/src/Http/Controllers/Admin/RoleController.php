<?php

namespace SciTech\Admin\Http\Controllers\Admin;

use SciTech\Admin\Http\Controllers\Controller;
use SciTech\Admin\Http\Requests\Admin\StoreRoleRequest;
use SciTech\Admin\Http\Requests\Admin\UpdateRoleRequest;
use SciTech\Admin\Repositories\PermissionRepositoryInterface;
use SciTech\Admin\Repositories\RoleRepositoryInterface;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::paginate(10);

        return view('admin::roles.index')->with('roles', $roles);
    }

    public function create()
    {
        $rolePermissions = array();
        $permissions = Permission::all();

        return view('admin::roles.create')
            ->with('permissions', $permissions)
            ->with('rolePermissions', $rolePermissions);
    }

    public function store(StoreRoleRequest $request)
    {
        $role = Role::create(['guard_name' => 'admin', 'name' => $request->get('name')]);
        $role->syncPermissions($request->get('permission'));

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'Task was successful!');
        return redirect()->route('admin.role.index');
    }

    public function edit($id)
    {
        $permissions = Permission::all();
        $role = Role::findById($id);
        $rolePermissions = $role->permissions->pluck('name')->toArray();

        return view('admin::roles.edit')
            ->with('role', $role)
            ->with('permissions', $permissions)
            ->with('rolePermissions', $rolePermissions);
    }

    public function update(UpdateRoleRequest $request, $id)
    {
        $role = Role::findById($id);
        $role->update($request->only('name'));

        $role->syncPermissions($request->get('permission'));

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'Task was successful!');
        return redirect()->route('admin.role.index');
    }

    public function destroy(Request $request, $id)
    {
        $role = Role::findById($id);
        $role->delete();

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'Task was successful!');
        return redirect()->route('admin.role.index');
    }
}
