<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use http\Message\Body;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         User::truncate();
//         Post::truncate();
//         Category::truncate();
        $user = User::factory()->create([
            'name' =>'Yik Soon'
        ]);

         Post::factory(5)->create([
             'user_id' => $user->id
         ]);

//         $user = User::factory()->create();
//
//        $personal =Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//
//         $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//         ]);
//
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//
//        Post::create([
//            'user_id'=> $user->id,
//            'category_id'=> $family->id,
//            'title' =>'My family Post',
//            'slug'=>'my-first-post',
//            'excerpt'=>'<p>This is my family post</p>',
//            'body'=> '<p>I love my family</p>'
//        ]);
//
//        Post::create([
//            'user_id'=> $user->id,
//            'category_id'=> $work->id,
//            'title' =>'My work Post',
//            'slug'=>'my-work-post',
//            'excerpt'=>'<p>This is my family post</p>',
//            'body'=> '<p>I love my work</p>'
//        ]);
    }
}
