<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;



class PostController extends Controller
{
    public function allPost() {
        return view('/Posts', [
            'title' => "Halaman Post",
            'active' => 'post',
            'posts' => Post::latest()->get()
        ]);
    }

    public function findPost(Post $post) {
        return view('SinglePost', [
            'title' => 'Single Post',
            'active' => 'post',
            'post' => $post
        ]);
    }

    public function apiPost() {
        $posts = Post::all();
        return response()->json($posts);
    }
}
