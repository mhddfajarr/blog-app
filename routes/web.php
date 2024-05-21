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
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/posts/{slug}', function($slug){
    
//     $post = Post::find($slug);

//     return view('/post', ['post' => $post]);
// });
Route::get('/contact', function () {
    return view('contact');
});

