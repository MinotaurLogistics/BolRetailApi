<?php

namespace Swagger\BolClient\Api;

use Swagger\BolClient\Api\Traits\AuthTrait;
use Swagger\BolClient\Api\Traits\ConstructorTrait;
use Swagger\BolClient\Api\Traits\FactoryTrait;
use Swagger\BolClient\Api\Traits\HttpClientOptionsTrait;
use Swagger\BolClient\GeneratedApi\InvoicesApi as GeneratedInvoicesApi;

class InvoicesApi extends GeneratedInvoicesApi
{
    use AuthTrait;
    use FactoryTrait;
    use HttpClientOptionsTrait;
    use ConstructorTrait;
}
