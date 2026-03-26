<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function index(){

        $posts = Post::all();
        return view('index',compact('posts'));
    }

    public function single(Post $post){

        return view('single',compact('post'));
    }
}
