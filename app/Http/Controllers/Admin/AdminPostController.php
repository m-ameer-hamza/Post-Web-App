<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;

class AdminPostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        // create a new post
    }

    public function store()
    {
        // store the post
    }

    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    public function edit($id)
    {
        // edit the post
    }

    public function update($id)
    {
        // update the post
    }

    public function destroy(Post $post)
    {

        $post->delete();

        return redirect('/admin/posts');
    }
}
