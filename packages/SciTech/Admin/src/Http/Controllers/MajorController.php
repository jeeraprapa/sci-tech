<?php

namespace SciTech\Admin\Http\Controllers;

use Illuminate\Http\Request;
use SciTech\Admin\Http\Requests\Major\StoreMajorRequest;
use SciTech\Admin\Http\Requests\Major\UpdateMajorRequest;
use SciTech\Admin\Models\Department;
use SciTech\Admin\Models\Major;

class MajorController extends Controller
{

    public function index()
    {
        $majors = Major::paginate(10);

        return view('admin::major.index')->with('majors', $majors);
    }

    public function create()
    {
        $departments = Department::get();
        $departments = $departments->pluck('name', 'id');

        return view('admin::major.create')->with('departments', $departments);
    }

    public function store(StoreMajorRequest $request)
    {
        $data = $request->all();

        $major = Major::create($data);

        if($request->hasFile('img') && $request->file('img')->isValid()) {
            $major->clearMediaCollection('img');
            $major->addMediaFromRequest('img')
                    ->toMediaCollection('img');
        }


        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.major.index');
    }

    public function edit($id)
    {
        $major = Major::findOrFail($id);

        $departments = Department::get();
        $departments = $departments->pluck('name', 'id');

        return view('admin::major.edit')->with('major', $major)->with('departments', $departments);
    }

    public function update(UpdateMajorRequest $request, $id)
    {
        $data = $request->all();

        $major = Major::findOrFail($id);

        $major->fill($data)->saveOrFail();

        if($request->hasFile('img') && $request->file('img')->isValid()) {
            $major->clearMediaCollection('img');
            $major->addMediaFromRequest('img')
                    ->toMediaCollection('img');
        }

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.major.index');
    }

    public function destroy(Request $request, $id)
    {
        $major = Major::findOrFail($id);
        $major->delete();

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.major.index');
    }
}
