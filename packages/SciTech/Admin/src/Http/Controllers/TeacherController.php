<?php

namespace SciTech\Admin\Http\Controllers;

use Illuminate\Http\Request;
use SciTech\Admin\Http\Requests\Teacher\StoreTeacherRequest;
use SciTech\Admin\Http\Requests\Teacher\UpdateTeacherRequest;
use SciTech\Admin\Models\Department;
use SciTech\Admin\Models\Teacher;
use SciTech\Admin\Service\Editor;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::paginate(10);

        return view('admin::teacher.index')->with('teachers', $teachers);
    }

    public function create()
    {
        $departments = Department::get();
        $departments = $departments->pluck('name', 'id');

        return view('admin::teacher.create')->with('departments', $departments);
    }

    public function store(StoreTeacherRequest $request)
    {
        $data = $request->all();

        $editor = new Editor();
        $data['research'] = $editor->uploadImage($data['research']);

        $teacher = Teacher::create($data);

        if($request->hasFile('img') && $request->file('img')->isValid()) {
            $teacher->clearMediaCollection('img');
            $teacher->addMediaFromRequest('img')
                    ->toMediaCollection('img');
        }


        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.teacher.index');
    }

    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);

        $departments = Department::get();
        $departments = $departments->pluck('name', 'id');

        return view('admin::teacher.edit')->with('teacher', $teacher)->with('departments', $departments);
    }

    public function update(UpdateTeacherRequest $request, $id)
    {
        $data = $request->all();

        $teacher = Teacher::findOrFail($id);

        $editor = new Editor();
        $data['research'] = $editor->uploadImage($data['research']);


        $teacher->fill($data)->saveOrFail();

        if($request->hasFile('img') && $request->file('img')->isValid()) {
            $teacher->clearMediaCollection('img');
            $teacher->addMediaFromRequest('img')
                    ->toMediaCollection('img');
        }

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.teacher.index');
    }

    public function destroy(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.teacher.index');
    }

}
