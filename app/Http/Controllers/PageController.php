<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PageController extends Controller
{
    public function index(){

        $posts = Post::all();
        return view('index',compact('posts'));
    }

    public function single(Post $post){

        $categories = Category::all();
        return view('single',compact('post', 'categories'));
    }
}
