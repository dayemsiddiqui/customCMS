<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'author',
        'image_id',
        'category',
        'published_at',
        'show'
    ];

    public function tags(){
        return $this->belongsToMany('App\Tag', 'posttags', "post_id", 'tag_id');
    }
}
