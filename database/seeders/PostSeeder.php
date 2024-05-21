<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->delete();
        $post = [[
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
    DB::table('posts')->insert($post);
    }
}
