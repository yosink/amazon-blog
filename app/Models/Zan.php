<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zan extends Model
{
    protected $guarded = [];

    public function object()
    {
        return $this->morphTo();
    }
}
