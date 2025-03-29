<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class UserFilter extends ApiFilter {

    protected $safeParams = [
        'name' => ['eq'],
        'email' => ['eq'],
        'phoneNumber' => ['eq'],
        'imageUrl' => ['eq'],
        'address' => ['eq'],
        'password' => ['eq'],
    ];

    protected $columnMap = [
        'phoneNumber' => 'phone_number',
        'imageUrl' => 'image_url',
    ];

    protected $operatorMap = [
        'eq' => '='
    ];
}