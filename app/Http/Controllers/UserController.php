<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // method for logout the user
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    // method for register the user
    public function register(Request $request)
    {

        // validating the user data
        $reg_data = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:6', 'max:20'],
        ]);

        $reg_data['password'] = bcrypt($reg_data['password']);
        $user = User::create($reg_data);
        Auth::login($user);

        return redirect('/home');
    }

    // method for login the user
    public function login(Request $request)
    {
        // validating the user data
        $login_data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // checking the user credentials
        if (Auth::attempt($login_data)) {
            return redirect('/home');
        }

        return back()->withErrors([
            'email' => 'Invalid Credentials',
        ]);

    }
}
