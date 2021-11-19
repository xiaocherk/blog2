<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function index()
    {
//        $this->authorize('admin');
//        dd(request()->user()->can('admin'));
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

    public function create()
    {
        return view('components.posts.create');
    }

    public function store()
    {

//        $path = request()->file('thumbnail')->store('thumbnails');
//
//        return 'Done:' .$path;

        $attributes = request()->validate([
            'title'=> 'required',
            'thumbnail'=> 'required|image',
            'slug'=> ['required',Rule::unique('posts','slug')],     //if the slug exists in the posts table then can't publish the new posts for the admin sessions
            'excerpt'=> 'required',
            'body' => 'required',
            'category_id'=>['required',Rule::exists('categories','id')]
        ]);

        $attributes['user_id']= auth()->id();
        $attributes['thumbnail']= request()->file('thumbnail')->store('thumbnails');

        Post::create($attributes);

        return redirect('/');
    }
    //index, show, create, store, edit, update, destroy


}
