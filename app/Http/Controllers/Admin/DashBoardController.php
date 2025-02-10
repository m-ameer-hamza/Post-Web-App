<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard.dashboard');
    }

    public function requests(User $user)
    {
        $users = User::where('active', 'pending')->get();

        return view('admin.dashboard.requests', compact('users'));
    }

    public function accountRequest(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->update(['active' => 'approved']);

        return redirect('/admin/users');
    }
}
