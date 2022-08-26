<?php

namespace SciTech\Admin\Http\Controllers;

use Illuminate\Http\Request;
use SciTech\Admin\Http\Requests\Major\StoreMajorRequest;
use SciTech\Admin\Http\Requests\Major\UpdateMajorRequest;
use SciTech\Admin\Models\Department;
use SciTech\Admin\Models\Major;
use SciTech\Admin\Service\Editor;

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

        $editor = new Editor();
        $data['detail'] = $editor->uploadImage($data['detail']);
        $data['video'] = $editor->uploadImage($data['video']);
        $data['full_name'] = $editor->uploadImage($data['full_name']);

        $major = Major::create($data);

        if($request->hasFile('icon') && $request->file('icon')->isValid()) {
            $major->clearMediaCollection('icon');
            $major->addMediaFromRequest('icon')
                  ->toMediaCollection('icon');
        }

        if($request->hasFile('img') && $request->file('img')->isValid()) {
            $major->clearMediaCollection('img');
            $major->addMediaFromRequest('img')
                    ->toMediaCollection('img');
        }

        if($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
            $major->clearMediaCollection('thumbnail');
            $major->addMediaFromRequest('thumbnail')
                    ->toMediaCollection('thumbnail');
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

        $editor = new Editor();
        $data['detail'] = $editor->uploadImage($data['detail']);
        $data['video'] = $editor->uploadImage($data['video']);
        $data['full_name'] = $editor->uploadImage($data['full_name']);

        $major->fill($data)->saveOrFail();

        if($request->hasFile('img') && $request->file('img')->isValid()) {
            $major->clearMediaCollection('img');
            $major->addMediaFromRequest('img')
                    ->toMediaCollection('img');
        }

        if($request->hasFile('icon') && $request->file('icon')->isValid()) {
            $major->clearMediaCollection('icon');
            $major->addMediaFromRequest('icon')
                    ->toMediaCollection('icon');
        }

        if($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
            $major->clearMediaCollection('thumbnail');
            $major->addMediaFromRequest('thumbnail')
                    ->toMediaCollection('thumbnail');
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

    public function media(Major $major)
    {
        return view('admin::major.media')->with('major', $major);
    }

    public function mediaStore(Request $request, Major $major)
    {
        if($request->hasFile('file') && $request->file('file')->isValid()){
            $media = $major->addMediaFromRequest('file')
                          ->toMediaCollection('posters');

            return response()->json([
                'id' => $media->id,
            ]);
        }
    }

    public function mediaThumbnail(Request $request, Major $major, $id)
    {
        $mediaItems = $major->getMedia('posters');
        foreach($mediaItems as $mediaItem){
            $mediaItem->forgetCustomProperty('thumbnail');
            $mediaItem->save();
        }

        $mediaItem = $major->getMedia('posters')->where('id', $id)->first();
        $mediaItem->setCustomProperty('thumbnail', 'true');
        $mediaItem->save();

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.major.media', ['major' => $major->id]);
    }

    public function mediaDestroy(Request $request, Major $major, $id)
    {
        $mediaItem = $major->getMedia('posters')->where('id', $id)->first();
        $mediaItem->delete();

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'ดำเนินการสำเร็จ');
        return redirect()->route('admin.major.media', ['major' => $major->id]);
    }
}
