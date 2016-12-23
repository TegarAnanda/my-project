<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThreadCategory extends Model
{
    public function thread()
    {
        return $this->hasMany(Thread::class);
    }
}
