<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function store(UserRequest $request)
    {
        $reg_data = $request->validated();
        if ($reg_data['role'] === 'user') {
            $reg_data['active'] = 'approved';
        }
        $reg_data['password'] = bcrypt($reg_data['password']);
        $user = User::create($reg_data);
        Auth::login($user);
        if ($user->role === 'admin') {
            return view('request');
        }

        return redirect('/home');
    }
}
