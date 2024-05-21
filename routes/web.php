<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Post{
    public static function all(){
        return [
            [
                'id' => 1,
                'slug' => 'judul-article-1',
                'title' => 'Judul blog ke 1',
                'author' => 'Muhammad Fajar',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus mollitia, ratione id eaque soluta dolore beatae sequi blanditiis autem ab, quo tenetur quae, expedita natus nulla amet? Quaerat, impedit quam!'
            ],
            [   
                'id' => 2,
                'slug' => 'judul-article-2',
                'title' => 'Judul blog ke 2',
                'author' => 'Ridwan Sanusi  ',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus mollitia, ratione id eaque soluta dolore beatae sequi blanditiis autem ab, quo tenetur quae, expedita natus nulla amet? Quaerat, impedit quam!'
            ],
        ];
    }
}

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
    $post = Arr::first(Post::all(), function($post)use($slug){
        return $post ['slug'] == $slug;
    });

    return view('/post', ['post' => $post]);
});
Route::get('/contact', function () {
    return view('contact');
});

