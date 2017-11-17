<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'address', 'description', 'remember_token'
    ];
    protected $hidden = ['password', 'remember_token'];

    public function articles()
    {
        return $this->hasMany(Article::class,'user_id',id);
    }
}
