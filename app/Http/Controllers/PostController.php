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
            'posts' => Post::all()
        ]);
    }

    public function findPost(Post $post) {
        return view('SinglePost', [
            'title' => 'Single Post',
            'post' => $post
        ]);
    }
}
