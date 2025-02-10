<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ErrorController;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

class AdminPostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(PostRequest $request)
    {
        $post_data = $request->validated();
        $post_data['user_id'] = Auth::id();

        Post::create($post_data);

        return redirect('/admin/dashboard');
    }

    public function show($id)
    {
        try {
            $post = Post::findOrFail($id);

            return view('admin.posts.show', compact('post'));
        } catch (ModelNotFoundException $e) {
            return app(ErrorController::class)->show();
        }
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
