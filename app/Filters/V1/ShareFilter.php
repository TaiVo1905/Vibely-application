<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ShareFilter extends ApiFilter {

    protected $safeParams = [
        'postId' => 'eq',
        'userShareId' => 'eq'
    ];

    protected $columnMap = [
        'postId' => 'post_id',
        'userShareId' => 'user_share_id',
    ];

    protected $operatorMap = [
        'eq' => '=',
    ];
}