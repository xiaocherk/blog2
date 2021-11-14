<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
//        return Post::latest()->filter(
//            request(['search','category','author'])
//        )->get();

        return view('components.posts.index',[
            'posts' => Post::latest()->filter(
                request(['search','category','author']))
                ->Paginate(6)->withQueryString()

        ]);
    }

    public function show(Post $post)
    {
        return view('components.posts.show',[
            'post'=> $post
        ]);
    }

    //index, show, create, store, edit, update, destroy

}
