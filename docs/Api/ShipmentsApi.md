# Swagger\BolClient\ShipmentsApi

All URIs are relative to *https://api.bol.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getShipment**](ShipmentsApi.md#getShipment) | **GET** /retailer/shipments/{shipment-id} | Get a shipment by shipment id
[**getShipments**](ShipmentsApi.md#getShipments) | **GET** /retailer/shipments | Get shipment list


# **getShipment**
> \Swagger\BolClient\Model\Shipment getShipment($shipment_id)

Get a shipment by shipment id

Retrieve a single shipment by its corresponding id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = 789; // int | The id of the shipment.

try {
    $result = $apiInstance->getShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **int**| The id of the shipment. |

### Return type

[**\Swagger\BolClient\Model\Shipment**](../Model/Shipment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShipments**
> \Swagger\BolClient\Model\ShipmentResponse getShipments($page, $fulfilment_method, $order_id)

Get shipment list

A paginated list to retrieve all your shipments up to 3 months old. The shipments will be sorted by date in descending order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The page to get with a page size of 50.
$fulfilment_method = "FBR"; // string | The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
$order_id = "order_id_example"; // string | The id of the order. Only valid without fulfilment-method. The default fulfilment-method is ignored.

try {
    $result = $apiInstance->getShipments($page, $fulfilment_method, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getShipments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page to get with a page size of 50. | [optional] [default to 1]
 **fulfilment_method** | **string**| The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). | [optional] [default to FBR]
 **order_id** | **string**| The id of the order. Only valid without fulfilment-method. The default fulfilment-method is ignored. | [optional]

### Return type

[**\Swagger\BolClient\Model\ShipmentResponse**](../Model/ShipmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

