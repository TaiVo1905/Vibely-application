<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_post_id',
        'content',
        'status'
    ];

    public function User() {
        return $this->belongsTo(Like::class);
    }

    public function Likes() {
        return $this->hasMany(Like::class);
    }

    public function Shares() {
        return $this->hasMany(Share::class);
    }

    public function Comments() {
        return $this->hasMany(Comment::class);
    }

    public function PostImages() {
        return $this->hasMany(PostImage::class);
    }
}
