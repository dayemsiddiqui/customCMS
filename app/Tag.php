<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable = [
        'id',
        'tag_name',
    ];

    public function posts(){
        return $this->belongsToMany('App\Post','posttags','tag_id', 'post_id');
    }
}
