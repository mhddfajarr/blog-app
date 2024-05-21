<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
        'posts' => Post::all()]);
    }

    public function singlePost($slug){
        $post = DB::table('posts')->where('slug', $slug)->first();

        if(!$post){
            abort(404);
        }
        return view('post',[
            'post' => $post
        ]);
    }
}
