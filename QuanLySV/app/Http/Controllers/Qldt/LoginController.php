<?php

namespace App\Http\Controllers\Qldt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function form(){
        return view('Qldt.login');
    }

    public function login(Request $request){
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
}
