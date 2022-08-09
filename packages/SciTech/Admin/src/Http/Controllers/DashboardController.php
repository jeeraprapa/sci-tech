<?php

namespace SciTech\Admin\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin::dashboard.index');
    }
}
