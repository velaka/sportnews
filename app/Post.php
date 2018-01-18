<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Scout\Searchable;
use App\Category;

class Post extends Model
{

    protected $fillable = [
        'title',
        'category_id',
        'image',
        'description',
    ];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

     public function comments()
     {
         return $this->hasMany('App\Comment');
     }
}