<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
            'title' => count($user->posts) . ' Article by ' . $user->name,
            'posts' => $user->Posts]);
    }

    public function byCategory(Category $category){
        return view('posts', [
            'title' => 'Category ' . $category->name,
            'posts' => $category->Posts]);
    }
}
