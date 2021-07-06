<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login ()
    {
        return view('backend.auths.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credentials)) {
            Session::regenerate();
            Session::push('login', true);
            return redirect()->route('categories.index')->with('message', 'Bạn đã đăng nhập thành công');
        } else {
            return redirect()->route('login')->with('error', 'Bạn đăng nhập thất bại');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
