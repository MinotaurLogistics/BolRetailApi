# Swagger\BolClient\InsightsApi

All URIs are relative to *https://api.bol.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOfferInsights**](InsightsApi.md#getOfferInsights) | **GET** /retailer/insights/offer | Get offer insights
[**getPerformanceIndicator**](InsightsApi.md#getPerformanceIndicator) | **GET** /retailer/insights/performance/indicator | Get performance indicators
[**getSalesForecast**](InsightsApi.md#getSalesForecast) | **GET** /retailer/insights/sales-forecast | Get sales forecast


# **getOfferInsights**
> \Swagger\BolClient\Model\OfferInsights getOfferInsights($offer_id, $period, $number_of_periods, $name)

Get offer insights

Gets offer insights.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offer_id = "offer_id_example"; // string | Unique identifier for an offer.
$period = "period_example"; // string | The time unit in which the offer insights are grouped.
$number_of_periods = 56; // int | The number of periods for which the offer insights are requested back in time.
$name = array("name_example"); // string[] | The name of the requested offer insight.

try {
    $result = $apiInstance->getOfferInsights($offer_id, $period, $number_of_periods, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->getOfferInsights: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Unique identifier for an offer. |
 **period** | **string**| The time unit in which the offer insights are grouped. |
 **number_of_periods** | **int**| The number of periods for which the offer insights are requested back in time. |
 **name** | [**string[]**](../Model/string.md)| The name of the requested offer insight. |

### Return type

[**\Swagger\BolClient\Model\OfferInsights**](../Model/OfferInsights.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPerformanceIndicator**
> \Swagger\BolClient\Model\PerformanceIndicators getPerformanceIndicator($name, $year, $week)

Get performance indicators

Gets the measurements for your performance indicators per week.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = array("name_example"); // string[] | The type of the performance indicator
$year = "year_example"; // string | Year number in the ISO-8601 standard.
$week = "week_example"; // string | Week number in the ISO-8601 standard. If you would like to get the relative scores from the current week, please provide the current week number here. Be advised that measurements can change heavily over the course of the week.

try {
    $result = $apiInstance->getPerformanceIndicator($name, $year, $week);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->getPerformanceIndicator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | [**string[]**](../Model/string.md)| The type of the performance indicator |
 **year** | **string**| Year number in the ISO-8601 standard. |
 **week** | **string**| Week number in the ISO-8601 standard. If you would like to get the relative scores from the current week, please provide the current week number here. Be advised that measurements can change heavily over the course of the week. |

### Return type

[**\Swagger\BolClient\Model\PerformanceIndicators**](../Model/PerformanceIndicators.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSalesForecast**
> \Swagger\BolClient\Model\SalesForecastResponse getSalesForecast($offer_id, $weeks_ahead)

Get sales forecast

Gets sales forecast.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offer_id = "offer_id_example"; // string | Unique identifier for an offer.
$weeks_ahead = 56; // int | The number of weeks into the future, starting from today.

try {
    $result = $apiInstance->getSalesForecast($offer_id, $weeks_ahead);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->getSalesForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Unique identifier for an offer. |
 **weeks_ahead** | **int**| The number of weeks into the future, starting from today. |

### Return type

[**\Swagger\BolClient\Model\SalesForecastResponse**](../Model/SalesForecastResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

