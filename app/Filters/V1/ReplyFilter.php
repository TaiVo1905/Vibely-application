<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ReplyFilter extends ApiFilter {

    protected $safeParams = [
        'commentId' => 'eq',
        'replierId' => 'eq',
        'content' => 'ceq'
    ];

    protected $columnMap = [
        'commentId' => 'comment_id',
        'replierId' => 'replier_id',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'ceq' => 'like',
    ];
}