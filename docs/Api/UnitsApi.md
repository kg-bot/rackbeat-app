# Swagger\Client\UnitsApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUnit**](UnitsApi.md#deleteUnit) | **DELETE** /units/{number} | Delete existing unit
[**indexUnit**](UnitsApi.md#indexUnit) | **GET** /units | Index unit
[**showUnit**](UnitsApi.md#showUnit) | **GET** /units/{number} | Show single unit
[**storeUnit**](UnitsApi.md#storeUnit) | **POST** /units | Create new unit
[**updateUnit**](UnitsApi.md#updateUnit) | **PUT** /units/{number} | Update existing unit


# **deleteUnit**
> deleteUnit($number)

Delete existing unit



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Unit number

try {
    $apiInstance->deleteUnit($number);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->deleteUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Unit number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexUnit**
> \Swagger\Client\Model\UnitList indexUnit($is_draft, $name)

Index unit



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_draft = true; // bool | Filter by draft flag
$name = "name_example"; // string | Filter by name

try {
    $result = $apiInstance->indexUnit($is_draft, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->indexUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_draft** | **bool**| Filter by draft flag | [optional]
 **name** | **string**| Filter by name | [optional]

### Return type

[**\Swagger\Client\Model\UnitList**](../Model/UnitList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showUnit**
> \Swagger\Client\Model\Unit showUnit($number)

Show single unit



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Unit number

try {
    $result = $apiInstance->showUnit($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->showUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Unit number |

### Return type

[**\Swagger\Client\Model\Unit**](../Model/Unit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeUnit**
> \Swagger\Client\Model\Unit storeUnit($body)

Create new unit



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\UnitForm(); // \Swagger\Client\Model\UnitForm | Unit object that should be created.

try {
    $result = $apiInstance->storeUnit($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->storeUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UnitForm**](../Model/UnitForm.md)| Unit object that should be created. |

### Return type

[**\Swagger\Client\Model\Unit**](../Model/Unit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUnit**
> \Swagger\Client\Model\Unit updateUnit($number, $body)

Update existing unit



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Unit number
$body = new \Swagger\Client\Model\UnitForm(); // \Swagger\Client\Model\UnitForm | Unit object that should be created.

try {
    $result = $apiInstance->updateUnit($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->updateUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Unit number |
 **body** | [**\Swagger\Client\Model\UnitForm**](../Model/UnitForm.md)| Unit object that should be created. |

### Return type

[**\Swagger\Client\Model\Unit**](../Model/Unit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

