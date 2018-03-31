# Swagger\Client\WebhooksApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteWebhook**](WebhooksApi.md#deleteWebhook) | **DELETE** /webhooks/{number} | Delete existing webhook
[**indexWebhook**](WebhooksApi.md#indexWebhook) | **GET** /webhooks | Index webhook
[**showWebhook**](WebhooksApi.md#showWebhook) | **GET** /webhooks/{number} | Show single webhook
[**storeWebhook**](WebhooksApi.md#storeWebhook) | **POST** /webhooks | Create new webhook
[**updateWebhook**](WebhooksApi.md#updateWebhook) | **PUT** /webhooks/{number} | Update existing webhook


# **deleteWebhook**
> deleteWebhook($number)

Delete existing webhook



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Webhook number

try {
    $apiInstance->deleteWebhook($number);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Webhook number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexWebhook**
> \Swagger\Client\Model\WebhookList indexWebhook()

Index webhook



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->indexWebhook();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->indexWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\WebhookList**](../Model/WebhookList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showWebhook**
> \Swagger\Client\Model\Webhook showWebhook($number)

Show single webhook



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Webhook number

try {
    $result = $apiInstance->showWebhook($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->showWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Webhook number |

### Return type

[**\Swagger\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeWebhook**
> \Swagger\Client\Model\Webhook storeWebhook($body)

Create new webhook



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\WebhookForm(); // \Swagger\Client\Model\WebhookForm | Webhook object that should be created.

try {
    $result = $apiInstance->storeWebhook($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->storeWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\WebhookForm**](../Model/WebhookForm.md)| Webhook object that should be created. |

### Return type

[**\Swagger\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWebhook**
> \Swagger\Client\Model\Webhook updateWebhook($number, $body)

Update existing webhook



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Webhook number
$body = new \Swagger\Client\Model\WebhookForm(); // \Swagger\Client\Model\WebhookForm | Webhook object that should be created.

try {
    $result = $apiInstance->updateWebhook($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Webhook number |
 **body** | [**\Swagger\Client\Model\WebhookForm**](../Model/WebhookForm.md)| Webhook object that should be created. |

### Return type

[**\Swagger\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

