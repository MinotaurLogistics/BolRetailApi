# Swagger\BolClient\ReturnsApi

All URIs are relative to *https://api.bol.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReturn**](ReturnsApi.md#createReturn) | **POST** /retailer/returns | Create return
[**getReturn**](ReturnsApi.md#getReturn) | **GET** /retailer/returns/{return-id} | Get a return by return id
[**getReturns**](ReturnsApi.md#getReturns) | **GET** /retailer/returns | Get returns
[**handleReturn**](ReturnsApi.md#handleReturn) | **PUT** /retailer/returns/{rma-id} | Handle a return


# **createReturn**
> \Swagger\BolClient\Model\ProcessStatus createReturn($body)

Create return

Create a return, and automatically handle it with the provided handling result. When successfully created, the resulting return id is provided in the process status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\BolClient\Model\CreateReturnRequest(); // \Swagger\BolClient\Model\CreateReturnRequest | 

try {
    $result = $apiInstance->createReturn($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->createReturn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\BolClient\Model\CreateReturnRequest**](../Model/CreateReturnRequest.md)|  | [optional]

### Return type

[**\Swagger\BolClient\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturn**
> \Swagger\BolClient\Model\ModelReturn getReturn($return_id)

Get a return by return id

Retrieve a return based on the return id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$return_id = 789; // int | Unique identifier for a return.

try {
    $result = $apiInstance->getReturn($return_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->getReturn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_id** | **int**| Unique identifier for a return. |

### Return type

[**\Swagger\BolClient\Model\ModelReturn**](../Model/ModelReturn.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturns**
> \Swagger\BolClient\Model\ReturnsResponse getReturns($page, $handled, $fulfilment_method)

Get returns

Get a paginated list of multi-item returns, which are sorted by date in descending order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The page to get with a page size of 50.
$handled = true; // bool | The status of the returns you wish to see, shows either handled or unhandled returns.
$fulfilment_method = "FBR"; // string | The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).

try {
    $result = $apiInstance->getReturns($page, $handled, $fulfilment_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->getReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page to get with a page size of 50. | [optional] [default to 1]
 **handled** | **bool**| The status of the returns you wish to see, shows either handled or unhandled returns. | [optional]
 **fulfilment_method** | **string**| The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). | [optional] [default to FBR]

### Return type

[**\Swagger\BolClient\Model\ReturnsResponse**](../Model/ReturnsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **handleReturn**
> \Swagger\BolClient\Model\ProcessStatus handleReturn($rma_id, $body)

Handle a return

Allows the user to handle a return. This can be to either handle an open return, or change the handlingResult of an already handled return. The latter is only possible in limited scenarios, please check the returns documentation for a complete list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$rma_id = 789; // int | The RMA (Return Merchandise Authorization) id that identifies this particular return.
$body = new \Swagger\BolClient\Model\ReturnRequest(); // \Swagger\BolClient\Model\ReturnRequest | The handling result requested by the retailer.

try {
    $result = $apiInstance->handleReturn($rma_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->handleReturn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rma_id** | **int**| The RMA (Return Merchandise Authorization) id that identifies this particular return. |
 **body** | [**\Swagger\BolClient\Model\ReturnRequest**](../Model/ReturnRequest.md)| The handling result requested by the retailer. | [optional]

### Return type

[**\Swagger\BolClient\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

