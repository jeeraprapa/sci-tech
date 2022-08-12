<?php

namespace SciTech\Admin\Http\Controllers;

use Illuminate\Http\Request;
use SciTech\Admin\Http\Requests\Department\StoreDepartmentRequest;
use SciTech\Admin\Http\Requests\Department\UpdateDepartmentRequest;
use SciTech\Admin\Models\Department;

class DepartmentController extends Controller
{

    public function index()
    {
        $departments  = Department::paginate(10);

        return view('admin::department.index')->with('departments', $departments);
    }

    public function create()
    {
        return view('admin::department.create');
    }

    public function store(StoreDepartmentRequest $request)
    {
        $data = $request->all();

        Department::create($data);

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.department.index');
    }

    public function edit($id)
    {
        $department = Department::findOrFail($id);

        return view('admin::department.edit')->with('department', $department);
    }

    public function update(UpdateDepartmentRequest $request, $id)
    {
        $data = $request->all();

        $department = Department::findOrFail($id);

        $department->fill($data)->saveOrFail();

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.department.index');
    }

    public function destroy(Request $request, $id)
    {

        $department = Department::findOrFail($id);
        $department->delete();

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.department.index');
    }
}
