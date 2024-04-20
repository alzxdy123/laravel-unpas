<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\registerController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});
Route::get('/Posts', [PostController::class, 'allPost']);
Route::get('/Posts/{post:slug}', [PostController::class, 'findPost']);

Route::get('/Categories', function() {
    return view('Categories', [
        'title' => 'Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [loginController::class, 'index']);
Route::post('/login', [loginController::class, 'authenticate']);

Route::get('/register', [registerController::class, 'index']);
Route::post('/register', [registerController::class, 'store']);

// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('Posts', [
//         "title" => 'Post in ' . $category->name,
//         'active' => "post",
//         "posts" => $category->posts->load('category', 'user')
//     ]);
// });

// Route::get('/author/{author:id}', function(User $author) {
//     return view('Posts', [
//         "title" => 'Post By ' . $author->name,
//         'active' => "post",
//         'posts' => $author->posts->load('category', 'user')
//     ]);
// });
