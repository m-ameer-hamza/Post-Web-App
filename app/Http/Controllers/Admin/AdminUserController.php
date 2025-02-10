<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        // create a new post
    }

    public function store()
    {
        // store the post
    }

    public function show(User $user, Post $post)
    {
        $posts = $user->posts;

        return view('admin.users.show', compact('user', 'posts'));
    }

    public function edit(User $user)
    {
        $user->update(['active' => 'approved']);

        return redirect('/admin/users');
    }

    public function update(User $user)
    {
        $user->update(['active' => 'terminated']);

        return redirect('/admin/users');
    }

    public function destroy($user)
    {
        // delete the user
    }
}
