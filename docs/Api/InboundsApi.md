# Swagger\BolClient\InboundsApi

All URIs are relative to *https://api.bol.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDeliveryWindows**](InboundsApi.md#getDeliveryWindows) | **GET** /retailer/inbounds/delivery-windows | Get delivery windows for new inbound shipments
[**getInbound**](InboundsApi.md#getInbound) | **GET** /retailer/inbounds/{inbound-id} | Get inbound by inbound id
[**getInboundShippingLabel**](InboundsApi.md#getInboundShippingLabel) | **GET** /retailer/inbounds/{inbound-id}/shippinglabel | Get inbound shipping label by inbound id
[**getInboundTransporters**](InboundsApi.md#getInboundTransporters) | **GET** /retailer/inbounds/inbound-transporters | Get inbound transporters list
[**getInbounds**](InboundsApi.md#getInbounds) | **GET** /retailer/inbounds | Get inbound shipment list
[**getPackingList**](InboundsApi.md#getPackingList) | **GET** /retailer/inbounds/{inbound-id}/packinglist | Get packing list by inbound id
[**getProductLabels**](InboundsApi.md#getProductLabels) | **POST** /retailer/inbounds/productlabels | Get inbound product labels by EAN
[**postInbound**](InboundsApi.md#postInbound) | **POST** /retailer/inbounds | Post inbound shipment


# **getDeliveryWindows**
> \Swagger\BolClient\Model\DeliveryWindowsForInboundShipments_ getDeliveryWindows($delivery_date, $items_to_send)

Get delivery windows for new inbound shipments

Retrieve a list of available delivery windows when creating a new inbound shipment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\InboundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delivery_date = "Today's date."; // string | The expected delivery date for the inbound in ISO 8601 format.
$items_to_send = 1; // int | The number of items that will be sent in the inbound.

try {
    $result = $apiInstance->getDeliveryWindows($delivery_date, $items_to_send);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundsApi->getDeliveryWindows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delivery_date** | **string**| The expected delivery date for the inbound in ISO 8601 format. | [optional] [default to Today&#39;s date.]
 **items_to_send** | **int**| The number of items that will be sent in the inbound. | [optional] [default to 1]

### Return type

[**\Swagger\BolClient\Model\DeliveryWindowsForInboundShipments_**](../Model/DeliveryWindowsForInboundShipments_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInbound**
> \Swagger\BolClient\Model\Inbound getInbound($inbound_id)

Get inbound by inbound id

Get inbound details by inbound id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\InboundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_id = 12345678; // int | A unique identifier for an inbound shipment.

try {
    $result = $apiInstance->getInbound($inbound_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundsApi->getInbound: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_id** | **int**| A unique identifier for an inbound shipment. |

### Return type

[**\Swagger\BolClient\Model\Inbound**](../Model/Inbound.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInboundShippingLabel**
> string[] getInboundShippingLabel($inbound_id)

Get inbound shipping label by inbound id

Get inbound shipping label by inbound id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\InboundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_id = 12345678; // int | A unique identifier for an inbound shipment.

try {
    $result = $apiInstance->getInboundShippingLabel($inbound_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundsApi->getInboundShippingLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_id** | **int**| A unique identifier for an inbound shipment. |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInboundTransporters**
> \Swagger\BolClient\Model\TransportersResponse getInboundTransporters()

Get inbound transporters list

Get all available transporters that carry out transports for inbound shipments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\InboundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getInboundTransporters();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundsApi->getInboundTransporters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\BolClient\Model\TransportersResponse**](../Model/TransportersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInbounds**
> \Swagger\BolClient\Model\Inbounds getInbounds($reference, $bsku, $creation_start_date, $creation_end_date, $state, $page)

Get inbound shipment list

A paginated list of all inbound shipments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\InboundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reference = "SHIPMENT1"; // string | A user defined reference to identify the inbound shipment.
$bsku = "2950002126612"; // string | The BSKU number associated with this product.
$creation_start_date = "2020-01-01"; // string | The creation start date and time to find the inbound shipment in ISO 8601 format.
$creation_end_date = "2020-01-01"; // string | The end date of the range to find the inbound shipment, in ISO 8601 format.
$state = "DRAFT"; // string | The current state of the inbound shipment.
$page = 1; // int | The requested page number with a pagesize of 50

try {
    $result = $apiInstance->getInbounds($reference, $bsku, $creation_start_date, $creation_end_date, $state, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundsApi->getInbounds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| A user defined reference to identify the inbound shipment. | [optional]
 **bsku** | **string**| The BSKU number associated with this product. | [optional]
 **creation_start_date** | **string**| The creation start date and time to find the inbound shipment in ISO 8601 format. | [optional]
 **creation_end_date** | **string**| The end date of the range to find the inbound shipment, in ISO 8601 format. | [optional]
 **state** | **string**| The current state of the inbound shipment. | [optional]
 **page** | **int**| The requested page number with a pagesize of 50 | [optional] [default to 1]

### Return type

[**\Swagger\BolClient\Model\Inbounds**](../Model/Inbounds.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPackingList**
> string[] getPackingList($inbound_id)

Get packing list by inbound id

Get packing list by inbound id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\InboundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inbound_id = 12345678; // int | A unique identifier for an inbound shipment.

try {
    $result = $apiInstance->getPackingList($inbound_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundsApi->getPackingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_id** | **int**| A unique identifier for an inbound shipment. |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductLabels**
> string[] getProductLabels($body)

Get inbound product labels by EAN

Get inbound product labels by EAN.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\InboundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\BolClient\Model\ProductLabelsRequest(); // \Swagger\BolClient\Model\ProductLabelsRequest | 

try {
    $result = $apiInstance->getProductLabels($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundsApi->getProductLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\BolClient\Model\ProductLabelsRequest**](../Model/ProductLabelsRequest.md)|  | [optional]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml
 - **Accept**: application/vnd.retailer.v4+pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postInbound**
> \Swagger\BolClient\Model\ProcessStatus postInbound($body)

Post inbound shipment

Create a new inbound shipment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\InboundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\BolClient\Model\InboundRequest(); // \Swagger\BolClient\Model\InboundRequest | 

try {
    $result = $apiInstance->postInbound($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundsApi->postInbound: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\BolClient\Model\InboundRequest**](../Model/InboundRequest.md)|  | [optional]

### Return type

[**\Swagger\BolClient\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

