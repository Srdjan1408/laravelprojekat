<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller{
    
    public function index(){

        $posts = Post::all();
        
        return view('posts', compact('posts'));
    }

    public function kontakt(){
        
        return view('contact');
    }

    public function omeni(){
        
        return view('o_meni');
    }

    public function show(Post $post){
        
        return view('post', compact('post'));
    }

}
