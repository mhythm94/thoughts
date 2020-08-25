<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table= 'posts';
    protected $fillable=[
        'id',
        'heading',
        'sub_heading',
        'body',
        'name',
        'email',
        'created_at'
    ];
    protected $hidden= [
        'updated_at'
    ];

}
