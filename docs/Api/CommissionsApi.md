# Swagger\BolClient\CommissionsApi

All URIs are relative to *https://api.bol.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCommission**](CommissionsApi.md#getCommission) | **GET** /retailer/commission/{ean} | Get all commissions and reductions by EAN per single EAN
[**getCommissions**](CommissionsApi.md#getCommissions) | **POST** /retailer/commission | Get all commissions and reductions by EAN in bulk


# **getCommission**
> \Swagger\BolClient\Model\Commission getCommission($ean, $unit_price, $condition)

Get all commissions and reductions by EAN per single EAN

Commissions can be filtered by condition, which defaults to NEW. If price is provided, the exact commission amount will also be calculated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\CommissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ean = "0000007740404"; // string | The EAN number associated with this product.
$unit_price = 59.0; // float | The price of the product with a period as a decimal separator. The price should always have two decimals precision.
$condition = "NEW"; // string | The condition of the offer.

try {
    $result = $apiInstance->getCommission($ean, $unit_price, $condition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommissionsApi->getCommission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| The EAN number associated with this product. |
 **unit_price** | **float**| The price of the product with a period as a decimal separator. The price should always have two decimals precision. |
 **condition** | **string**| The condition of the offer. | [optional] [default to NEW]

### Return type

[**\Swagger\BolClient\Model\Commission**](../Model/Commission.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommissions**
> \Swagger\BolClient\Model\BulkCommissionResponse getCommissions($body)

Get all commissions and reductions by EAN in bulk

Gets all commissions and possible reductions by EAN, condition and optionally price.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\CommissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\BolClient\Model\BulkCommissionRequest(); // \Swagger\BolClient\Model\BulkCommissionRequest | 

try {
    $result = $apiInstance->getCommissions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommissionsApi->getCommissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\BolClient\Model\BulkCommissionRequest**](../Model/BulkCommissionRequest.md)|  | [optional]

### Return type

[**\Swagger\BolClient\Model\BulkCommissionResponse**](../Model/BulkCommissionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

