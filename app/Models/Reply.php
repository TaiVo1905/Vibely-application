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

    public function Replier() {
        $this->belongsTo(User::class);
    }
}
