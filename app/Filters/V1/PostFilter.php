<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class PostFilter extends ApiFilter {

    protected $safeParams = [
        'user_post_id' => 'eq',
        'content' => 'ceq',
        'status' => 'eq'
    ];

    protected $columnMap = [
        'userPostId' => 'user_post_id',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'ceq' => 'like',
    ];
}