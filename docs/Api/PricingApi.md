# Swagger\BolClient\PricingApi

All URIs are relative to *https://api.bol.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRetailPrice**](PricingApi.md#getRetailPrice) | **GET** /retailer/pricing/retail-prices/{ean} | BETA: Retrieve retail price information for an EAN.


# **getRetailPrice**
> \Swagger\BolClient\Model\RetailPriceResponse getRetailPrice($ean)

BETA: Retrieve retail price information for an EAN.

Currently this endpoint only supports the allowable retail price and can support the following use cases:<br /><br />                     1) EANs that have been unpublished due to price related reasons can be checked against this endpoint.<br />                     2) Requesting the allowable retail price for EANs that are not yet in your assortment can help inform price setting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\PricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ean = "0000007740404"; // string | The EAN number associated with this product.

try {
    $result = $apiInstance->getRetailPrice($ean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingApi->getRetailPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| The EAN number associated with this product. |

### Return type

[**\Swagger\BolClient\Model\RetailPriceResponse**](../Model/RetailPriceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

