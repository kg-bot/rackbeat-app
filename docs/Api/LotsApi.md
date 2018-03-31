# RackbeatApp\Client\LotsApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteLot**](LotsApi.md#deleteLot) | **DELETE** /lots/{number} | Delete existing lot
[**indexLot**](LotsApi.md#indexLot) | **GET** /lots | Index lot
[**showLot**](LotsApi.md#showLot) | **GET** /lots/{number} | Show single lot
[**storeLot**](LotsApi.md#storeLot) | **POST** /lots | Create new lot
[**updateLot**](LotsApi.md#updateLot) | **PUT** /lots/{number} | Update existing lot


# **deleteLot**
> deleteLot($number)

Delete existing lot



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\LotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Lot number

try {
    $apiInstance->deleteLot($number);
} catch (Exception $e) {
    echo 'Exception when calling LotsApi->deleteLot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Lot number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexLot**
> \RackbeatApp\Client\Model\LotList indexLot()

Index lot



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\LotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->indexLot();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LotsApi->indexLot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\RackbeatApp\Client\Model\LotList**](../Model/LotList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showLot**
> \RackbeatApp\Client\Model\Lot showLot($number)

Show single lot



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\LotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Lot number

try {
    $result = $apiInstance->showLot($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LotsApi->showLot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Lot number |

### Return type

[**\RackbeatApp\Client\Model\Lot**](../Model/Lot.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeLot**
> \RackbeatApp\Client\Model\Lot storeLot($body)

Create new lot



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\LotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \RackbeatApp\Client\Model\LotForm(); // \RackbeatApp\Client\Model\LotForm | Lot object that should be created.

try {
    $result = $apiInstance->storeLot($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LotsApi->storeLot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RackbeatApp\Client\Model\LotForm**](../Model/LotForm.md)| Lot object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\Lot**](../Model/Lot.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLot**
> \RackbeatApp\Client\Model\Lot updateLot($number, $body)

Update existing lot



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\LotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Lot number
$body = new \RackbeatApp\Client\Model\LotForm(); // \RackbeatApp\Client\Model\LotForm | Lot object that should be created.

try {
    $result = $apiInstance->updateLot($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LotsApi->updateLot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Lot number |
 **body** | [**\RackbeatApp\Client\Model\LotForm**](../Model/LotForm.md)| Lot object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\Lot**](../Model/Lot.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

