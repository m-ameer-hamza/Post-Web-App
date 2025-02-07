<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $user_posts = []; // convert to posts
        if (Auth::check()) {
            $user_posts = Auth::user()->posts;
        }

        return view('userPost', ['user_posts' => $user_posts]);
    }

    public function create()
    {
        return view('createPost');
    }

    public function store(Request $request)
    {
        $post_data = $request->validate([
            'title' => ['required', 'min:5'],
            'content' => ['required', 'min:5'],
        ]);
        $post_data['user_id'] = Auth::id();
        Post::create($post_data);

        return redirect('/home');
    }

    public function show(Post $post)
    {
        return view('editPost', ['post' => $post]);
    }

    public function edit(Post $post, Request $request)
    {
        // validating the post data
        $post_data = $request->validate([
            'title' => ['required', 'min:5'],
            'content' => ['required', 'min:5'],
        ]);
        $post->update($post_data);

        return redirect('/home');

    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/home');

    }
}
