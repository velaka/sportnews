<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;
use App\Post;

class PostTag extends Model
{
    protected $fillable = [
        'post_id',
        'tag_id',
    ];

    public $timestamps = false;

}
