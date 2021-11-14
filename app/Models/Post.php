<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; //Post::factory

    protected $guarded =[];

    protected $with = ['category','author'];

    public function scopeFilter($query, array $filters)   //Post::newQuery()->filter()
    {

        $query->when($filters['search'] ?? false, function ($query, $search){
            $query->where(function($query) use ($search){
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['category'] ?? false, function ($query,$category) {
            $query->WhereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, function ($query,$author) {
            $query->WhereHas('author', function ($query) use ($author) {
                $query->where('username', $author);         //username match author name
            });
        });
//
//
//            $query->whereExists(function($query){
//              $query->from('categories')
//                  ->WhereColumn('categories.id','posts.category_id')
//                    ->Where('categories.slug','$category');
//            });
//        });

    }

    public function category()
    {
         return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }

    // protected $fillable = ['title','excerpt','body','id'];
}

