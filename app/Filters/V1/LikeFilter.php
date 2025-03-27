<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class LikeFilter extends ApiFilter {

    protected $safeParams = [
        'postId' => 'eq',
        'userLikeId' => 'eq'
    ];

    protected $columnMap = [
        'postId' => 'post_id',
        'userLikeId' => 'user_like_id',
    ];

    protected $operatorMap = [
        'eq' => '=',
    ];
}