<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index');
    Route::get('/posts/{slug}', 'singlePost');
    Route::get('/authors/{user}', 'byAuthor');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/authors/{user}', function(User $user){

//     return view('/post', ['post' => $post]);
// });
Route::get('/contact', function () {
    return view('contact');
});

