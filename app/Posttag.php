<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posttag extends Model
{
    protected $table = 'posttags';
    protected $fillable = [
        'id',
        'tag_id',
        'post_id'
    ];
}
