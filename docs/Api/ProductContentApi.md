# Swagger\BolClient\ProductContentApi

All URIs are relative to *https://api.bol.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getValidationReport**](ProductContentApi.md#getValidationReport) | **GET** /retailer/content/validation-report/{uploadId} | Get validation report
[**postProductContent**](ProductContentApi.md#postProductContent) | **POST** /retailer/content/product | Post product content


# **getValidationReport**
> \Swagger\BolClient\Model\ValidationReportResponse getValidationReport($upload_id)

Get validation report

Retrieve a validation report of the product content upload based on the upload id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\ProductContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$upload_id = "upload_id_example"; // string | The identifier of the product content upload.

try {
    $result = $apiInstance->getValidationReport($upload_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductContentApi->getValidationReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_id** | **string**| The identifier of the product content upload. |

### Return type

[**\Swagger\BolClient\Model\ValidationReportResponse**](../Model/ValidationReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postProductContent**
> \Swagger\BolClient\Model\ProcessStatus postProductContent($body)

Post product content

Create content for existing products or new products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\ProductContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\BolClient\Model\CreateProductContentRequest(); // \Swagger\BolClient\Model\CreateProductContentRequest | 

try {
    $result = $apiInstance->postProductContent($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductContentApi->postProductContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\BolClient\Model\CreateProductContentRequest**](../Model/CreateProductContentRequest.md)|  | [optional]

### Return type

[**\Swagger\BolClient\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

