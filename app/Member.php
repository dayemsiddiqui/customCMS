<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $fillable = [
        'id',
        'name',
        'education',
        'content',
        'image',
        'availability'
    ];
}
