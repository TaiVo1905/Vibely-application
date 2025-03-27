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

    public function Post() {
        return $this->belongsTo(Post::class);
    }

    public function Comments() {
        return $this->hasMany(Comment::class);
    }
}
