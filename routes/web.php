<?php

use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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

// Welcome //
// Route::get('/', function () {
//     return view('welcome');
// });



// Home //
Route::get('/', function () {
    return view('Home' , [
        "title" => "Home",
        "active" => "home"
    ]);
});



// About //
Route::get('/about', function () {
    return view('About' , [
        "title" => "About",
        "active" => "about",
        "name"   => "Octavyan Putra Ramadhan",
        "email"  => "octavyan4@gmail.com",
        "image"  => "Benedetta Profile.jpg"
    ]);
});



// Posts //
Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);



// Category //
Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => "categories",
        'categories' => Category::all()
    ]);
});

// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('posts', [
//         'title' => "Post By Category : $category->name",
//         "active" => "categories",
//         'posts' => $category->posts->load('category', 'author'),
//     ]);
// });



// // Author //
// Route::get('/authors/{author:username}', function(User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         "active" => "posts",
//         'posts' => $author->posts->load('category', 'author'),
//     ]);
// });


// Login //
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);



// Regiser //
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);



// Dashboard //
Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');



// Dashboard Post //
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');