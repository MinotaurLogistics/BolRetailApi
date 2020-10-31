<?php

namespace Swagger\BolClient\Api;

use Swagger\BolClient\Api\Traits\AuthTrait;
use Swagger\BolClient\Api\Traits\ConstructorTrait;
use Swagger\BolClient\Api\Traits\FactoryTrait;
use Swagger\BolClient\Api\Traits\HttpClientOptionsTrait;
use Swagger\BolClient\GeneratedApi\ProcessStatusApi as GeneratedProcessStatusApi;

class ProcessStatusApi extends GeneratedProcessStatusApi
{
    use AuthTrait;
    use FactoryTrait;
    use HttpClientOptionsTrait;
    use ConstructorTrait;
}
