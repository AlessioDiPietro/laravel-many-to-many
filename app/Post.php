<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'article',
        'slug',
        'category_id'
    ];

    public function category(){
        return $this->belogsTo('App\Category');
    }
    
    public function tags(){
        return $this->belogsTo('App\Tag');
    }
}
