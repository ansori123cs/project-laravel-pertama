<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;


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
    return view('home', [
        "title" => "Home",
        'active' => 'home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "AboutMe",
        'active' => 'about',
        "name" => "Ansori",
        "email" => "ansori@gmail.com",
        "jurusan" => "Sistem Informasi"
    ]);
});
Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Category :$category->name",
        'active' => 'cattegories',
        'posts' => $category->post->load(['user', 'category']),
    ]);
});
Route::get('/authors/{user}', function (User $user) {
    return view('posts', [
        'title' => "Ditulis Oleh :$user->name",
        'active' => 'user',
        'posts' => $user->posts->load(['user', 'category']),
    ]);
});
Route::get('/login',[LoginController::class,'index']);
