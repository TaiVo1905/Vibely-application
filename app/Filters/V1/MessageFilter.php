<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class MessageFilter extends ApiFilter {

    protected $safeParams = [
        'senderId' => 'eq',
        'receiverId' => 'eq',
        'content' => 'ceq'
    ];

    protected $columnMap = [
        'senderId' => 'sender_id',
        'receiverId' => 'receiver_id',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'ceq' => 'like',
    ];
}