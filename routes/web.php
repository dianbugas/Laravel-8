<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about',
        'email' => 'doambugas@sdas.dasda',
        'image' => 'sand.jpg'

    ]);
});

// Route::get('/blog', function () {
//     return view('posts', [
//         "title" => "Blog"
//     ]);
// });

// // /{{ slug }}
// Route::get('blogs', function () {
//     return view('post', [
//         "title" => "Single Post"
//     ]);
// });

Route::get('posts', [PostController::class, 'index']);

Route::get('post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Kategori',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

// Route::get('categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post bay Category : $category->name",
//         'active' => 'categories',
//         // LOAD untuk quary banding untuk mempercepat performent saat terjadinya realasi db yang ajan di looping
//         'posts' => $category->posts->load('category', 'author'),
//     ]);
// });

// Route::get('/author/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         'active' => 'posts',
//         'posts' => $author->posts->load('category', 'author'),
//     ]);
// });
