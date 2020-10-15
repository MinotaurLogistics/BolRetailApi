<?php

namespace Swagger\BolClient\Api\Traits;

use GuzzleHttp\Client;

trait AuthTrait
{
    /**
     * @param string $key
     * @param string $secret
     */
    public function setCredentials($key, $secret)
    {
        $response = (new Client())->post('https://login.bol.com/token?grant_type=client_credentials',
            [
                'exceptions' => true,
                'auth' => [
                    $key,
                    $secret
                ]
            ]
        );

        $data = json_decode($response->getBody()->getContents(), true);

        $this->setAccessToken($data['access_token']);
    }

    /**
     * @param string $token
     */
    public function setAccessToken($token)
    {
        $this->client = new Client(
            ['headers' => [
                'Authorization' => 'Bearer ' . $token
            ]]
        );
    }
}