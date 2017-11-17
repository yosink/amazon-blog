<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function articles()
    {
        return $this->hasMany(Article::class,'cat_id','id');
    }
}
