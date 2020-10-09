# Swagger\BolClient\ShippingLabelsApi

All URIs are relative to *https://api.bol.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDeliveryOptions**](ShippingLabelsApi.md#getDeliveryOptions) | **POST** /retailer/shipping-labels/delivery-options | Get delivery options for a shippable configuration of a number of order items within an order.
[**getShippingLabel**](ShippingLabelsApi.md#getShippingLabel) | **GET** /retailer/shipping-labels/{shipping-label-id} | Get a shipping label
[**postShippingLabel**](ShippingLabelsApi.md#postShippingLabel) | **POST** /retailer/shipping-labels | Create a shipping label


# **getDeliveryOptions**
> \Swagger\BolClient\Model\DeliveryOptionsResponse getDeliveryOptions($body)

Get delivery options for a shippable configuration of a number of order items within an order.

Retrieves all available delivery options based on the supplied configuration of order items that has to be shipped.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\ShippingLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\BolClient\Model\DeliveryOptionsRequest(); // \Swagger\BolClient\Model\DeliveryOptionsRequest | 

try {
    $result = $apiInstance->getDeliveryOptions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingLabelsApi->getDeliveryOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\BolClient\Model\DeliveryOptionsRequest**](../Model/DeliveryOptionsRequest.md)|  | [optional]

### Return type

[**\Swagger\BolClient\Model\DeliveryOptionsResponse**](../Model/DeliveryOptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShippingLabel**
> string[] getShippingLabel($shipping_label_id)

Get a shipping label

Gets a shipping label by shipping label id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\ShippingLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipping_label_id = "6ff736b5-cdd0-4150-8c67-78269ee986f5"; // string | The shipping label id.

try {
    $result = $apiInstance->getShippingLabel($shipping_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingLabelsApi->getShippingLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_label_id** | **string**| The shipping label id. |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postShippingLabel**
> \Swagger\BolClient\Model\ProcessStatus postShippingLabel($body)

Create a shipping label

Create a shipping label with a shipping label offer id retrieved from get delivery options.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\ShippingLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\BolClient\Model\ShippingLabelRequest(); // \Swagger\BolClient\Model\ShippingLabelRequest | 

try {
    $result = $apiInstance->postShippingLabel($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingLabelsApi->postShippingLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\BolClient\Model\ShippingLabelRequest**](../Model/ShippingLabelRequest.md)|  | [optional]

### Return type

[**\Swagger\BolClient\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

