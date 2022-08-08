<?php

namespace SciTech\Admin\Http\Controllers\Admin;

use SciTech\Admin\Http\Controllers\Controller;
use SciTech\Admin\Http\Requests\Admin\StoreAdminRequest;
use SciTech\Admin\Http\Requests\Admin\UpdateAdminRequest;
use SciTech\Admin\Models\Admin;
use SciTech\Admin\Repositories\AdminRepositoryInterface;
use SciTech\Admin\Repositories\RoleRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::paginate(10);

        return view('admin::admins.index')->with('admins', $admins);
    }

    public function create()
    {
        $roles = Role::all();
        $roles = $roles->pluck('name', 'id')->toArray();

        return view('admin::admins.create')->with('roles', $roles);
    }

    public function store(StoreAdminRequest $request)
    {
        $admin = Admin::create($request->all());
        $admin->assignRole([$request->get('role_id')]);

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        $roles = Role::all();
        $adminRole = $admin->roles->pluck('id')->toArray();

        $roles = $roles->pluck('name', 'id')->toArray();

        return view('admin::admins.edit')
            ->with('admin', $admin)
            ->with('adminRole', $adminRole)
            ->with('roles', $roles);
    }

    public function update(UpdateAdminRequest $request, $id)
    {
        $admin = Admin::findOrFail($id);
        $admin->fill($request->all())->saveOrFail();
        $admin->syncRoles([$request->get('role_id')]);

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.index');
    }

    public function destroy(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.index');
    }
}
