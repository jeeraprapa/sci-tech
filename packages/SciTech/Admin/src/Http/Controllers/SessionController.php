<?php

namespace SciTech\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use SciTech\Admin\Http\Requests\Session\AdminLoginRequest;

class SessionController extends Controller
{
    public function create()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard.index');
        }

        if (strpos(url()->previous(), 'admin') !== false) {
            $intendedUrl = url()->previous();
        } else {
            $intendedUrl = route('admin.dashboard.index');
        }

        session()->put('url.intended', $intendedUrl);

        return view('admin::sessions.login');
    }

    public function store(AdminLoginRequest $request)
    {
        $remember = $request->input('remember');

        if (Auth::guard('admin')->attempt($request->only(['email', 'password']), $remember)) {
            $user = Auth::guard('admin')->user();
            if(!$user->status){
                Auth::guard('admin')->logout();

                $request->session()->flash('status', 'danger');
                $request->session()->flash('message', 'ไม่สามารถเข้าสู่ระบบได้');
                return redirect()->route('admin.session.create');
            }

            return redirect()->intended(route('admin.dashboard.index'));
        }

        $request->session()->flash('status', 'danger');
        $request->session()->flash('message', 'ข้อมูลเข้าสู่ระบบไม่ถูกต้อง');
        return redirect()->route('admin.session.create');
    }

    public function destroy()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.session.create');
    }
}
