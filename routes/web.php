<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/posts', function () {
    return view('posts', ['posts'=> Post::all()]);
});
Route::get('/posts/{slug}', function($slug){
    
    $post = Post::find($slug);

    return view('/post', ['post' => $post]);
});
Route::get('/contact', function () {
    return view('contact');
});

