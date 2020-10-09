<?php
/**
 * ShipmentsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\BolClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * v4
 *
 * The bol.com API for Retailers.
 *
 * OpenAPI spec version: 4.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.16
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\BolClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\BolClient\ApiException;
use Swagger\BolClient\Configuration;
use Swagger\BolClient\HeaderSelector;
use Swagger\BolClient\ObjectSerializer;

/**
 * ShipmentsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\BolClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getShipment
     *
     * Get a shipment by shipment id
     *
     * @param  int $shipment_id The id of the shipment. (required)
     *
     * @throws \Swagger\BolClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\BolClient\Model\Shipment
     */
    public function getShipment($shipment_id)
    {
        list($response) = $this->getShipmentWithHttpInfo($shipment_id);
        return $response;
    }

    /**
     * Operation getShipmentWithHttpInfo
     *
     * Get a shipment by shipment id
     *
     * @param  int $shipment_id The id of the shipment. (required)
     *
     * @throws \Swagger\BolClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\BolClient\Model\Shipment, HTTP status code, HTTP response headers (array of strings)
     */
    public function getShipmentWithHttpInfo($shipment_id)
    {
        $returnType = '\Swagger\BolClient\Model\Shipment';
        $request = $this->getShipmentRequest($shipment_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\BolClient\Model\Shipment',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\BolClient\Model\Problem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getShipmentAsync
     *
     * Get a shipment by shipment id
     *
     * @param  int $shipment_id The id of the shipment. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShipmentAsync($shipment_id)
    {
        return $this->getShipmentAsyncWithHttpInfo($shipment_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getShipmentAsyncWithHttpInfo
     *
     * Get a shipment by shipment id
     *
     * @param  int $shipment_id The id of the shipment. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShipmentAsyncWithHttpInfo($shipment_id)
    {
        $returnType = '\Swagger\BolClient\Model\Shipment';
        $request = $this->getShipmentRequest($shipment_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getShipment'
     *
     * @param  int $shipment_id The id of the shipment. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getShipmentRequest($shipment_id)
    {
        // verify the required parameter 'shipment_id' is set
        if ($shipment_id === null || (is_array($shipment_id) && count($shipment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $shipment_id when calling getShipment'
            );
        }

        $resourcePath = '/retailer/shipments/{shipment-id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($shipment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'shipment-id' . '}',
                ObjectSerializer::toPathValue($shipment_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.retailer.v4+json', 'application/vnd.retailer.v4+xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.retailer.v4+json', 'application/vnd.retailer.v4+xml'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getShipments
     *
     * Get shipment list
     *
     * @param  int $page The page to get with a page size of 50. (optional, default to 1)
     * @param  string $fulfilment_method The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). (optional, default to FBR)
     * @param  string $order_id The id of the order. Only valid without fulfilment-method. The default fulfilment-method is ignored. (optional)
     *
     * @throws \Swagger\BolClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\BolClient\Model\ShipmentResponse
     */
    public function getShipments($page = '1', $fulfilment_method = 'FBR', $order_id = null)
    {
        list($response) = $this->getShipmentsWithHttpInfo($page, $fulfilment_method, $order_id);
        return $response;
    }

    /**
     * Operation getShipmentsWithHttpInfo
     *
     * Get shipment list
     *
     * @param  int $page The page to get with a page size of 50. (optional, default to 1)
     * @param  string $fulfilment_method The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). (optional, default to FBR)
     * @param  string $order_id The id of the order. Only valid without fulfilment-method. The default fulfilment-method is ignored. (optional)
     *
     * @throws \Swagger\BolClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\BolClient\Model\ShipmentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getShipmentsWithHttpInfo($page = '1', $fulfilment_method = 'FBR', $order_id = null)
    {
        $returnType = '\Swagger\BolClient\Model\ShipmentResponse';
        $request = $this->getShipmentsRequest($page, $fulfilment_method, $order_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\BolClient\Model\ShipmentResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\BolClient\Model\Problem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getShipmentsAsync
     *
     * Get shipment list
     *
     * @param  int $page The page to get with a page size of 50. (optional, default to 1)
     * @param  string $fulfilment_method The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). (optional, default to FBR)
     * @param  string $order_id The id of the order. Only valid without fulfilment-method. The default fulfilment-method is ignored. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShipmentsAsync($page = '1', $fulfilment_method = 'FBR', $order_id = null)
    {
        return $this->getShipmentsAsyncWithHttpInfo($page, $fulfilment_method, $order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getShipmentsAsyncWithHttpInfo
     *
     * Get shipment list
     *
     * @param  int $page The page to get with a page size of 50. (optional, default to 1)
     * @param  string $fulfilment_method The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). (optional, default to FBR)
     * @param  string $order_id The id of the order. Only valid without fulfilment-method. The default fulfilment-method is ignored. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShipmentsAsyncWithHttpInfo($page = '1', $fulfilment_method = 'FBR', $order_id = null)
    {
        $returnType = '\Swagger\BolClient\Model\ShipmentResponse';
        $request = $this->getShipmentsRequest($page, $fulfilment_method, $order_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getShipments'
     *
     * @param  int $page The page to get with a page size of 50. (optional, default to 1)
     * @param  string $fulfilment_method The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). (optional, default to FBR)
     * @param  string $order_id The id of the order. Only valid without fulfilment-method. The default fulfilment-method is ignored. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getShipmentsRequest($page = '1', $fulfilment_method = 'FBR', $order_id = null)
    {

        $resourcePath = '/retailer/shipments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($fulfilment_method !== null) {
            $queryParams['fulfilment-method'] = ObjectSerializer::toQueryValue($fulfilment_method);
        }
        // query params
        if ($order_id !== null) {
            $queryParams['order-id'] = ObjectSerializer::toQueryValue($order_id);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.retailer.v4+json', 'application/vnd.retailer.v4+xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.retailer.v4+json', 'application/vnd.retailer.v4+xml'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
