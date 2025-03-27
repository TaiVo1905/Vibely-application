<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class CommentFilter extends ApiFilter {

    protected $safeParams = [
        'postId' => 'eq',
        'content' => 'ceq',
        'commenterId' => 'eq'
    ];

    protected $columnMap = [
        'postId' => 'post_id',
        'commenterId' => 'commenter_id',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'ceq' => 'like',
    ];
}