<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    //
    protected $fillable = [
        'post_id',
        'user_share_id'
    ];

    public function Post() {
        return $this->belongsTo(Post::class);
    }

    public function User() {
        return $this->belongsTo(User::class);
    }
}
