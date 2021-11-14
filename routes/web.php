<?php

use App\Http\Controllers\PostController;
use \App\Http\Controllers\RegisterController;
use \App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;




Route::get('/', [PostController::class,'index'])->name('home');


Route::get('posts/{post:slug}',[PostController::class,'show']);    // Post::where('slug',$post)->firstOrFail()     //showing the posts;

Route::get('register',[RegisterController::class,'create'])->middleware('guest');       //only guests can log in
Route::post('register',[RegisterController::class,'store'])->middleware('guest');

Route::get('login',[SessionsController::class,'create'])->middleware('guest');
Route::post('login',[SessionsController::class,'store'])->middleware('guest');

Route::post('logout',[SessionsController::class,'destroy'])->middleware('auth');

//Route::get('categories/{category:slug}', function(Category $category){
//    return view('posts',[
//        'posts' => $category->posts,
//        'currentCategory' => $category,
//        'categories' => Category::all()
//    ]);
//})->name('category');

//Route::get('authors/{author:username}', function(User $author){
//    return view('components.posts.index',[
//        'posts' => $author->post
//    ]);
//});
