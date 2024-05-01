<?php

namespace App\Http\Controllers\Qldt;

use App\Http\Controllers\Controller;
use App\Models\StudentAccount;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function form()
    {
        return view('Qldt.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $result = Auth::guard('user')->attempt($credentials);
        if ($result) {
            return redirect()->route('user.post.form');
        } else {
            return redirect()->back()->with('error', 'The e-mail/password provided is incorrect.');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login.form');
    }

    public function formchangePassword()
    {
        return view('Qldt.ChangePassWordStudent');
    }

    public function changePassword(Request $request)
    {
        $user = Auth::guard('user')->user();
        $txtPassword = $user->password;
        $txtOldPassword = $request->txtOldPassword;

        if (Hash::check($txtOldPassword, $txtPassword)) {
            $changepassword = StudentAccount::where('student_account_id', $user->student_account_id)
                ->update([
                    'password' => bcrypt($request->txtNewPassWord)
                ]);
            if ($changepassword !== null) {
                return redirect()->back()->with('success', 'Password update successfully');
            } else {
                return redirect()->back()->with('error', 'Failed to update Password');
            }
        } else {
            return redirect()->back()->with('error', 'Old password does not match');
        }
    }
}
