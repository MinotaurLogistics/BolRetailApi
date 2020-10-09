# Swagger\BolClient\ProcessStatusApi

All URIs are relative to *https://api.bol.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProcessStatus**](ProcessStatusApi.md#getProcessStatus) | **GET** /retailer/process-status/{process-status-id} | Get the status of an asynchronous process by id
[**getProcessStatusBulk**](ProcessStatusApi.md#getProcessStatusBulk) | **POST** /retailer/process-status | Gets the status of multiple asynchronous processes by an array of process status id&#39;s for a retailer
[**getProcessStatusEntityId**](ProcessStatusApi.md#getProcessStatusEntityId) | **GET** /retailer/process-status | Gets the status of an asynchronous process by entity id and event type for a retailer


# **getProcessStatus**
> \Swagger\BolClient\Model\ProcessStatus getProcessStatus($process_status_id)

Get the status of an asynchronous process by id

Retrieve a specific process-status, which shows information regarding a previously executed PUT/POST/DELETE request. All PUT/POST/DELETE requests on the other endpoints will supply a process-status-id in the related response. You can use this id to retrieve a status by using the endpoint below. Please note: process status instances are only retained for a limited period of time after completion. Outside of this period, a 404 will be returned for missing process statuses. Please handle this accordingly, by stopping any active polling for these statuses.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\ProcessStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$process_status_id = 789; // int | The id of the process status being requested. This id is supplied in every response to a PUT/POST/DELETE request on the other endpoints.

try {
    $result = $apiInstance->getProcessStatus($process_status_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessStatusApi->getProcessStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_status_id** | **int**| The id of the process status being requested. This id is supplied in every response to a PUT/POST/DELETE request on the other endpoints. |

### Return type

[**\Swagger\BolClient\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessStatusBulk**
> \Swagger\BolClient\Model\ProcessStatusResponse getProcessStatusBulk($body)

Gets the status of multiple asynchronous processes by an array of process status id's for a retailer

Retrieve a list of process statuses, which shows information regarding previously executed PUT/POST/DELETE requests. No more than 1000 process status id's can be sent in a single request.Please note: process status instances are only retained for a limited period of time after completion. Outside of this period, deleted process statuses will no longer be returned. Please handle this accordingly, by stopping any active polling for these statuses.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\ProcessStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\BolClient\Model\BulkProcessStatusRequest(); // \Swagger\BolClient\Model\BulkProcessStatusRequest | 

try {
    $result = $apiInstance->getProcessStatusBulk($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessStatusApi->getProcessStatusBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\BolClient\Model\BulkProcessStatusRequest**](../Model/BulkProcessStatusRequest.md)|  | [optional]

### Return type

[**\Swagger\BolClient\Model\ProcessStatusResponse**](../Model/ProcessStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessStatusEntityId**
> \Swagger\BolClient\Model\ProcessStatusResponse getProcessStatusEntityId($entity_id, $event_type, $page)

Gets the status of an asynchronous process by entity id and event type for a retailer

Retrieve a list of process statuses, which shows information regarding previously executed PUT/POST/DELETE requests in descending order. You need to supply an entity id and event type. Please note: process status instances are only retained for a limited period of time after completion. Outside of this period, deleted process statuses will no longer be returned. Please handle this accordingly, by stopping any active polling for these statuses.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\ProcessStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity_id = "987654321"; // string | The entity id is not unique so you need to provide an event type. The entity id can either be order item id, transport id, return number or inbound reference.
$event_type = "CONFIRM_SHIPMENT"; // string | The event type can only be used in combination with the entity id.
$page = 1; // int | The requested page number with a pagesize of 50

try {
    $result = $apiInstance->getProcessStatusEntityId($entity_id, $event_type, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessStatusApi->getProcessStatusEntityId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_id** | **string**| The entity id is not unique so you need to provide an event type. The entity id can either be order item id, transport id, return number or inbound reference. |
 **event_type** | **string**| The event type can only be used in combination with the entity id. |
 **page** | **int**| The requested page number with a pagesize of 50 | [optional] [default to 1]

### Return type

[**\Swagger\BolClient\Model\ProcessStatusResponse**](../Model/ProcessStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

