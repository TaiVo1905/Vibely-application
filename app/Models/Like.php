<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    protected $fillable = [
        'post_id',
        'user_like_id'
    ];

    public function post() {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function liker() {
        return $this->belongsTo(User::class, 'user_like_id');
    }
}
