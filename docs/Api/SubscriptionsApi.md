# Swagger\BolClient\SubscriptionsApi

All URIs are relative to *https://api.bol.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePushNotificationSubscription**](SubscriptionsApi.md#deletePushNotificationSubscription) | **DELETE** /retailer/subscriptions/{subscription-id} | BETA: Delete push notification subscription
[**getPushNotificationSubscription**](SubscriptionsApi.md#getPushNotificationSubscription) | **GET** /retailer/subscriptions/{subscription-id} | BETA: Get push notification subscription by id
[**getPushNotificationSubscriptions**](SubscriptionsApi.md#getPushNotificationSubscriptions) | **GET** /retailer/subscriptions | BETA: Get push notification subscriptions
[**postPushNotificationSubscription**](SubscriptionsApi.md#postPushNotificationSubscription) | **POST** /retailer/subscriptions | BETA: Create push notification subscription
[**postTestPushNotification**](SubscriptionsApi.md#postTestPushNotification) | **POST** /retailer/subscriptions/test | BETA: Send test push notification for subscriptions
[**putPushNotificationSubscription**](SubscriptionsApi.md#putPushNotificationSubscription) | **PUT** /retailer/subscriptions/{subscription-id} | BETA: Update push notification subscription


# **deletePushNotificationSubscription**
> \Swagger\BolClient\Model\ProcessStatus deletePushNotificationSubscription($subscription_id)

BETA: Delete push notification subscription

Delete a push notification subscription with the provided id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_id = 1234; // int | A unique identifier for the subscription

try {
    $result = $apiInstance->deletePushNotificationSubscription($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->deletePushNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| A unique identifier for the subscription |

### Return type

[**\Swagger\BolClient\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPushNotificationSubscription**
> \Swagger\BolClient\Model\SubscriptionResponse getPushNotificationSubscription($subscription_id)

BETA: Get push notification subscription by id

Retrieve a configured and active push notification subscription with the provided id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_id = 1234; // int | A unique identifier for the subscription

try {
    $result = $apiInstance->getPushNotificationSubscription($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getPushNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| A unique identifier for the subscription |

### Return type

[**\Swagger\BolClient\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPushNotificationSubscriptions**
> \Swagger\BolClient\Model\SubscriptionsResponse getPushNotificationSubscriptions()

BETA: Get push notification subscriptions

Retrieve a list of all configured and active push notification subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPushNotificationSubscriptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getPushNotificationSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\BolClient\Model\SubscriptionsResponse**](../Model/SubscriptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPushNotificationSubscription**
> \Swagger\BolClient\Model\ProcessStatus postPushNotificationSubscription($body)

BETA: Create push notification subscription

Create a push notification subscription for one (or more) of the available resources. The configured URL has to support https scheme.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\BolClient\Model\CreateSubscriptionRequest(); // \Swagger\BolClient\Model\CreateSubscriptionRequest | 

try {
    $result = $apiInstance->postPushNotificationSubscription($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->postPushNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\BolClient\Model\CreateSubscriptionRequest**](../Model/CreateSubscriptionRequest.md)|  | [optional]

### Return type

[**\Swagger\BolClient\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTestPushNotification**
> \Swagger\BolClient\Model\ProcessStatus postTestPushNotification()

BETA: Send test push notification for subscriptions

Send a test push notification to all subscriptions for the provided event.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->postTestPushNotification();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->postTestPushNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\BolClient\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPushNotificationSubscription**
> \Swagger\BolClient\Model\ProcessStatus putPushNotificationSubscription($subscription_id, $body)

BETA: Update push notification subscription

Update an existing push notification subscription with the supplied id. The configured URL has to support https scheme.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\BolClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_id = 1234; // int | A unique identifier for the subscription
$body = new \Swagger\BolClient\Model\UpdateSubscriptionRequest(); // \Swagger\BolClient\Model\UpdateSubscriptionRequest | 

try {
    $result = $apiInstance->putPushNotificationSubscription($subscription_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->putPushNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| A unique identifier for the subscription |
 **body** | [**\Swagger\BolClient\Model\UpdateSubscriptionRequest**](../Model/UpdateSubscriptionRequest.md)|  | [optional]

### Return type

[**\Swagger\BolClient\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml
 - **Accept**: application/vnd.retailer.v4+json, application/vnd.retailer.v4+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

