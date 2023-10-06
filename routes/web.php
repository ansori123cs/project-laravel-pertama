<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
    return view('home',[
        "title"=>"Home"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title"=>"AboutMe",
        "name" => "Ansori",
        "email" => "ansori@gmail.com",
        "jurusan" => "Sistem Informasi"
    ]);
});
Route::get('/posts', [PostController::class,'index']);

Route::get('posts/{post}', [PostController::class,'show']);

Route::get('/categories',function(){
    return view('categories',[
        'title'=>'Post Categories',
        'categories'=>Category::all()
    ]);

});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category',[
        'title'=>$category->name,
        'posts'=>$category->post,
        'category'=>$category->name
    ]);
    
});
Route::get('/authors/{user}', function(User $user){
    return view('category',[
        'title'=>$user->name,
        'posts'=>$user->posts,
        'category'=>$user->name
    ]);
    
});
