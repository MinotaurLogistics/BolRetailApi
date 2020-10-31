<?php


namespace Swagger\BolClient\Api\Traits;


trait HttpClientOptionsTrait
{
    /**
     * @return array
     */
    protected function createHttpClientOption()
    {
        $options = parent::createHttpClientOption();

        $options['headers'] = [
            'Content-Type' => 'application/vnd.retailer.v4+json',
            'Accept' => 'application/vnd.retailer.v4+json'
        ];

        return $options;
    }
}