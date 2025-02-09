<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $user_posts = [];
        if (Auth::check()) {
            $user_posts = Auth::user()->posts;
        }

        return view('posts.get', ['user_posts' => $user_posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        $post_data = $request->validated();
        $post_data['user_id'] = Auth::id();

        Post::create($post_data);

        return redirect('/home');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(PostRequest $request, Post $post)
    {
        $post->update($request->validated());

        return redirect('/home');
    }

    public function update() {}

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/home');

    }
}
