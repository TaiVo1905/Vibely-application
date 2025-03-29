<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = [
        'comment_id',
        'replier_id',
        'content'
    ];

    public function comment() {
        $this->belongsTo(Comment::class, 'comment_id');
    }

    public function replier() {
        $this->belongsTo(User::class, 'replier_id');
    }
}
