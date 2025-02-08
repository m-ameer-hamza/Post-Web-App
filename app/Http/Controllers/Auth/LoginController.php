<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $login_data = $request->validated();

        if (Auth::attempt($login_data)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect('/admin/dashboard');
            }

            return redirect('/home');
        }

        return back()->withErrors([
            'email' => 'Invalid Credentials',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
