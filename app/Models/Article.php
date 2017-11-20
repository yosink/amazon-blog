<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'cat_id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }

    public function zans()
    {
        return $this->morphMany(Zan::class,'object');
    }
}
