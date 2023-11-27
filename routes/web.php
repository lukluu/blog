<?php

use App\Models\Post;
use App\Models\Saya;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SayaController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;


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


Route::get('/', [HomeController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);

// Route::get('/categories/', function () {
//     return view('categories', [
//         'title' => 'Post Categories',
//         "active" => "categories",
//         'category' => Category::all()
//     ]);
// });
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "post by Category : $category->name",
        "active" => "categories",
        'posts' => $category->posts->load('category', 'author')
    ]);
});
Route::get('/authors/', [AuthorController::class, 'index']);
Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "post by author : $author->name",
        "active" => "categories",
        'posts' => $author->posts->load('category', 'author')
    ]);
});