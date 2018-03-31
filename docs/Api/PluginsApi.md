# Swagger\Client\PluginsApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**setPluginSettings**](PluginsApi.md#setPluginSettings) | **POST** /plugins/{number}/set-settings-url | Set plugin settings


# **setPluginSettings**
> setPluginSettings($number, $body)

Set plugin settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Plugin number
$body = new \Swagger\Client\Model\Body5(); // \Swagger\Client\Model\Body5 | Location object that should be created.

try {
    $apiInstance->setPluginSettings($number, $body);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->setPluginSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Plugin number |
 **body** | [**\Swagger\Client\Model\Body5**](../Model/Body5.md)| Location object that should be created. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

