<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class PostImageFilter extends ApiFilter {

    protected $safeParams = [
        'postId' => 'eq',
        'link' => 'eq'
    ];

    protected $columnMap = [
        'postId' => 'post_id',
    ];

    protected $operatorMap = [
        'eq' => '=',
    ];
}