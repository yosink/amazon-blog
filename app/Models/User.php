<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'address', 'description', 'remember_token'
    ];
    protected $hidden = ['password', 'remember_token'];

    public function articles()
    {
        return $this->hasMany(Article::class,'user_id');
    }
    //收到的赞

    //关注的人
    public function stars()
    {
        return $this->hasMany(Fan::class,'fan_id');
    }

    //被谁关注了
    public function fans()
    {
        return $this->hasMany(Fan::class,'star_id');
    }
}
