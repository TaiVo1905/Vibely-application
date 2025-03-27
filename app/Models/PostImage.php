<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    protected $fillable = [
        'post_id',
        'image_url'
    ];

    public function Post() {
        return $this->belongsTo(Post::class);
    }
}
