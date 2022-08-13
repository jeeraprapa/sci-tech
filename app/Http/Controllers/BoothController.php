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

    public function major ($slug)
    {
        $major = Major::where('slug', $slug)->firstOrFail();
        $department = $major->department;

        return view('booth.detail',compact('major','department'));
    }
}
