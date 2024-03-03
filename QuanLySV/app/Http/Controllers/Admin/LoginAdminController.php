<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginAdminController extends Controller
{
    public function formLogin()
    {
        return view('Admin.Auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $result = Auth::guard('admin')->attempt($credentials);
        if ($result) {
            $admin = Auth::guard('admin')->user();
            $adminProfile = Admin::join('tbl_teacher', 'tbl_admin.teacher_id', '=', 'tbl_teacher.teacher_id')
                ->where('admin_id', $admin->admin_id)
                ->select('tbl_admin.*', 'tbl_teacher.*')->first();
            Session::put('teacher_name', $adminProfile->teacher_name);
            Session::put('teacher_avatar', $adminProfile->teacher_avatar);

            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->with('error', 'The e-mail/password provided is incorrect.');
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::put('teacher_name', null);
        Session::put('teacher_avatar', null);
        return redirect()->route('admin.login.form');
    }

    public function formRegister()
    {
        return view('Admin.Auth.register');
    }

    public function formDashBoard()
    {
        return view('Admin.DashBoard.dashboard');
    }
}
