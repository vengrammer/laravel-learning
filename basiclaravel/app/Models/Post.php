<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
    ];

    public function comment(): HasOne
    {
        return $this->hasOne(Comment::class);
    }
}
