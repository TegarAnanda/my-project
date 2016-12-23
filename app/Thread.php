<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable = [
        'judul', 'isi'
    ];

    public function threadCategory()
    {
        return $this->belongsTo(ThreadCategory::class, 'thread_category_id');
    }
}
