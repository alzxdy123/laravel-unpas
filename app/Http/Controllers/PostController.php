<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;



class PostController extends Controller
{
    public function allPost() {

        // dd(request('search'));
        $title = '';
        if(request('category')) {
            $c = Category::firstWhere('slug', request('category'));
            $title = ' in '. $c->name;
        }

        if(request('user')) {
            $u = User::firstWhere('id', request('user'));
            $title = ' by '. $u->name;
        }

        return view('/Posts', [
            'title' => "Halaman Post" . $title,
            'active' => 'post',
            'posts' => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(9)->withQueryString()
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
