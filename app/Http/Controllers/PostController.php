<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
        'title' => 'Blogs',
        'posts' => Post::all()]);
    }

    public function singlePost($slug){
        $post = Post::where('slug', $slug)->first();

        if(!$post){
            abort(404);
        }
        return view('post',[
            'post' => $post
        ]);
    }

    public function byAuthor(User $user){
        return view('posts', [
            'title' => 'Article by ' . $user->name,
            'posts' => $user->Posts]);
    }
}
