<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'content',
        'commenter_id'
    ];

    public function post() {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function replies() {
        return $this->hasMany(Reply::class, 'replier_id');
    }
}
