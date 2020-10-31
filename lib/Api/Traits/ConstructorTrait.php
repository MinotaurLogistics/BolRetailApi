<?php

namespace Swagger\BolClient\Api\Traits;

use Swagger\BolClient\ApplicationJsonHeaderSelector;

trait ConstructorTrait
{
    public function __construct()
    {
        parent::__construct(null, null, new ApplicationJsonHeaderSelector());
    }
}