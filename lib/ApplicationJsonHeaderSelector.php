<?php

namespace Swagger\BolClient;

class ApplicationJsonHeaderSelector extends HeaderSelector
{
    private function selectAcceptHeader($accept)
    {
        return 'application/json';
    }

    private function selectContentTypeHeader($contentType)
    {
       return 'application/json';
    }
}