<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function video()
    {
        return view('video', [
        ]);
    }

    public function allow()
    {
        $posts = Post::all();

        return view('allow', [
            'posts' => $posts,
        ]);
    }

    public function show(Post $post)
    {
        return view('show', [
            'post' => $post,
        ]);
    }
    public function notes()
    {
        return view('notes', [
            // 'post' => $post,
        ]);
    }

}
