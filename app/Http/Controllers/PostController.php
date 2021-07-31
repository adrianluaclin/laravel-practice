<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function show($id){

        $post = \App\Models\Post::find($id);
        return view('blog-post',["post" => $post]);
    }
}
