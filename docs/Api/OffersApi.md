# Swagger\BolClient\OffersApi

All URIs are relative to *https://api.bol.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOffer**](OffersApi.md#deleteOffer) | **DELETE** /retailer/offers/{offer-id} | Delete offer by id
[**getOffer**](OffersApi.md#getOffer) | **GET** /retailer/offers/{offer-id} | Retrieve an offer by its offer id
[**getOfferExport**](OffersApi.md#getOfferExport) | **GET** /retailer/offers/export/{report-id} | Retrieve an offer export file by offer export id
[**getUnpublishedOfferReport**](OffersApi.md#getUnpublishedOfferReport) | **GET** /retailer/offers/unpublished/{report-id} | BETA: Retrieve an unpublished offer report by report id
[**postOffer**](OffersApi.md#postOffer) | **POST** /retailer/offers | Create a new offer
[**postOfferExport**](OffersApi.md#postOfferExport) | **POST** /retailer/offers/export | Request an offer export file
[**postUnpublishedOfferReport**](OffersApi.md#postUnpublishedOfferReport) | **POST** /retailer/offers/unpublished | BETA: Request an unpublished offer report
[**putOffer**](OffersApi.md#putOffer) | **PUT** /retailer/offers/{offer-id} | Update an offer
[**updateOfferPrice**](OffersApi.md#updateOfferPrice) | **PUT** /retailer/offers/{offer-id}/price | Update price(s) for offer by id
[**updateOfferStock**](OffersApi.md#updateOfferStock) | **PUT** /retailer/offers/{offer-id}/stock | Update stock for offer by id


# **deleteOffer**
> \Swagger\BolClient\Model\ProcessStatus deleteOffer($offer_id)

Delete offer by id

Delete an offer by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offer_id = "offer_id_example"; // string | Unique identifier for an offer.

try {
    $result = $apiInstance->deleteOffer($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->deleteOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Unique identifier for an offer. |

### Return type

[**\Swagger\BolClient\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOffer**
> \Swagger\BolClient\Model\RetailerOffer getOffer($offer_id)

Retrieve an offer by its offer id

Retrieve an offer by using the offer id provided to you when creating or listing your offers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offer_id = "offer_id_example"; // string | Unique identifier for an offer.

try {
    $result = $apiInstance->getOffer($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->getOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Unique identifier for an offer. |

### Return type

[**\Swagger\BolClient\Model\RetailerOffer**](../Model/RetailerOffer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOfferExport**
> getOfferExport($report_id)

Retrieve an offer export file by offer export id

Retrieve an offer export file containing all offers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$report_id = "report_id_example"; // string | Unique identifier for an offer export report.

try {
    $apiInstance->getOfferExport($report_id);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->getOfferExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **string**| Unique identifier for an offer export report. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnpublishedOfferReport**
> getUnpublishedOfferReport($report_id)

BETA: Retrieve an unpublished offer report by report id

Retrieve an unpublished offer report containing all unpublished offers and reasons.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$report_id = "report_id_example"; // string | Unique identifier for unpublished offer report.

try {
    $apiInstance->getUnpublishedOfferReport($report_id);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->getUnpublishedOfferReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **string**| Unique identifier for unpublished offer report. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOffer**
> \Swagger\BolClient\Model\ProcessStatus postOffer($body)

Create a new offer

Creates a new offer, and adds it to the catalog. After creation, status information can be retrieved to review if the offer is valid and published to the shop.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\BolClient\Model\CreateOfferRequest(); // \Swagger\BolClient\Model\CreateOfferRequest | 

try {
    $result = $apiInstance->postOffer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->postOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\BolClient\Model\CreateOfferRequest**](../Model/CreateOfferRequest.md)|  | [optional]

### Return type

[**\Swagger\BolClient\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOfferExport**
> \Swagger\BolClient\Model\ProcessStatus postOfferExport($body)

Request an offer export file

Request an offer export file containing all offers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\BolClient\Model\CreateOfferExportRequest(); // \Swagger\BolClient\Model\CreateOfferExportRequest | 

try {
    $result = $apiInstance->postOfferExport($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->postOfferExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\BolClient\Model\CreateOfferExportRequest**](../Model/CreateOfferExportRequest.md)|  | [optional]

### Return type

[**\Swagger\BolClient\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUnpublishedOfferReport**
> \Swagger\BolClient\Model\ProcessStatus postUnpublishedOfferReport($body)

BETA: Request an unpublished offer report

Request an unpublished offer report containing all unpublished offers and reasons.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\BolClient\Model\CreateUnpublishedOfferReportRequest(); // \Swagger\BolClient\Model\CreateUnpublishedOfferReportRequest | 

try {
    $result = $apiInstance->postUnpublishedOfferReport($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->postUnpublishedOfferReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\BolClient\Model\CreateUnpublishedOfferReportRequest**](../Model/CreateUnpublishedOfferReportRequest.md)|  | [optional]

### Return type

[**\Swagger\BolClient\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOffer**
> \Swagger\BolClient\Model\ProcessStatus putOffer($offer_id, $body)

Update an offer

Use this endpoint to send an offer update. This endpoint returns a process status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offer_id = "offer_id_example"; // string | Unique identifier for an offer.
$body = new \Swagger\BolClient\Model\UpdateOfferRequest(); // \Swagger\BolClient\Model\UpdateOfferRequest | 

try {
    $result = $apiInstance->putOffer($offer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->putOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Unique identifier for an offer. |
 **body** | [**\Swagger\BolClient\Model\UpdateOfferRequest**](../Model/UpdateOfferRequest.md)|  | [optional]

### Return type

[**\Swagger\BolClient\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOfferPrice**
> \Swagger\BolClient\Model\ProcessStatus updateOfferPrice($offer_id, $body)

Update price(s) for offer by id

Update price(s) for offer by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offer_id = "offer_id_example"; // string | Unique identifier for an offer.
$body = new \Swagger\BolClient\Model\UpdateOfferPriceRequest(); // \Swagger\BolClient\Model\UpdateOfferPriceRequest | 

try {
    $result = $apiInstance->updateOfferPrice($offer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->updateOfferPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Unique identifier for an offer. |
 **body** | [**\Swagger\BolClient\Model\UpdateOfferPriceRequest**](../Model/UpdateOfferPriceRequest.md)|  | [optional]

### Return type

[**\Swagger\BolClient\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOfferStock**
> \Swagger\BolClient\Model\ProcessStatus updateOfferStock($offer_id, $body)

Update stock for offer by id

Update stock for offer by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offer_id = "offer_id_example"; // string | Unique identifier for an offer.
$body = new \Swagger\BolClient\Model\UpdateOfferStockRequest(); // \Swagger\BolClient\Model\UpdateOfferStockRequest | 

try {
    $result = $apiInstance->updateOfferStock($offer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->updateOfferStock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Unique identifier for an offer. |
 **body** | [**\Swagger\BolClient\Model\UpdateOfferStockRequest**](../Model/UpdateOfferStockRequest.md)|  | [optional]

### Return type

[**\Swagger\BolClient\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

