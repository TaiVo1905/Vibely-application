<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class PostFilter extends ApiFilter {

    protected $safeParams = [
        'poster_id' => 'eq',
        'content' => 'ceq',
        'status' => 'eq'
    ];

    protected $columnMap = [
        'userPostId' => 'poster_id',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'ceq' => 'like',
    ];
}