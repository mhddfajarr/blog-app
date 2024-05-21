<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// class Post extends Model
// {
//     use HasFactory;
// }
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

    public static function find($slug):array
    {
        // menggunakan callback
        // return Arr::first(static::all(), function($post)use($slug){
        //     return $post ['slug'] == $slug;
        // });

        //menggunakan arrow function
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        
        // jika tidak ada slug yang ditemukan maka akan menampilkan view 404
        if(!$post){
            abort(404);
        }
        // jika ada kembalikan data $post
        return $post;
    }
}