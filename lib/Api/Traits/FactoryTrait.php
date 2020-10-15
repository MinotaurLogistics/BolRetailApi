<?php

namespace Swagger\BolClient\Api\Traits;

trait FactoryTrait
{
    /**
     * @param string $key
     * @param string $secret
     * @return self
     */
    public static function createWithCredentials($key, $secret)
    {
        $self = new self();
        $self->setCredentials($key, $secret);
        return $self;
    }

    /**
     * @param string $accessToken
     * @return self
     */
    public static function createWithToken($accessToken)
    {
        $self = new self();
        $self->setAccessToken($accessToken);
        return $self;
    }
}