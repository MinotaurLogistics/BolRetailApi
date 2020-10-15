<?php

namespace Swagger\BolClient\Api;

use Swagger\BolClient\Api\Traits\AuthTrait;
use Swagger\BolClient\Api\Traits\FactoryTrait;
use Swagger\BolClient\GeneratedApi\TransportsApi as GeneratedTransportsApi;

class TransportsApi extends GeneratedTransportsApi
{
    use AuthTrait;
    use FactoryTrait;

    public function __construct()
    {
        parent::__construct();
    }
}
