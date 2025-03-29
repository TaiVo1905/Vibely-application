<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'poster_id',
        'content',
        'status'
    ];

    public function poster() {
        return $this->belongsTo(User::class, 'poster_id');
    }

    public function likers() {
        return $this->belongsToMany(User::class, 'likes', 'post_id', 'user_like_id');
    }

    public function sharers() {
        return $this->belongsToMany(User::class, 'shares', 'post_id', 'user_share_id');
    }

    public function commenters() {
        return $this->belongsToMany(User::class, 'comments', 'post_id', 'commenter_id');
    }

    public function postImages() {
        return $this->hasMany(PostImage::class, 'post_id');
    }
}
