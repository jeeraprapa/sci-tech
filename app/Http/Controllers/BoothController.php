<?php

namespace App\Http\Controllers;

use SciTech\Admin\Models\Department;
use SciTech\Admin\Models\Major;

class BoothController
{

    public function view ($slug)
    {
        $department = Department::where('slug', $slug)->firstOrFail();

        return view('booth.index',compact('department'));
    }

    public function major ($department,$slug)
    {
        $major = Major::where('slug', $slug)
                      ->firstOrFail();

        $department = Department::where('slug', $department)
                                ->firstOrFail();

        $next = Major::where('department_id', $department->id)
                     ->where('id', '>', $major->id)
                     ->orderBy('id')->first();

        if (empty($next)) {
            $next = Major::where('department_id', $department->id)
                         ->where('id', '!=', $major->id)
                         ->orderBy('id')->first();
        }


        return view('booth.detail',compact('department','major','next'));

    }
}
