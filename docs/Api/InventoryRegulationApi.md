# RackbeatApp\Client\InventoryRegulationApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**storeInventoryAdhustment**](InventoryRegulationApi.md#storeInventoryAdhustment) | **POST** /inventory-adjustment | Create new inventory adhustment
[**storeInventoryRegulation**](InventoryRegulationApi.md#storeInventoryRegulation) | **POST** /inventory-movement | Create new inventory regulation


# **storeInventoryAdhustment**
> \RackbeatApp\Client\Model\InventoryRegulation storeInventoryAdhustment($body)

Create new inventory adhustment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\InventoryRegulationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \RackbeatApp\Client\Model\InventoryAdjustmentForm(); // \RackbeatApp\Client\Model\InventoryAdjustmentForm | Inventory adhustment object that should be created.

try {
    $result = $apiInstance->storeInventoryAdhustment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryRegulationApi->storeInventoryAdhustment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RackbeatApp\Client\Model\InventoryAdjustmentForm**](../Model/InventoryAdjustmentForm.md)| Inventory adhustment object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\InventoryRegulation**](../Model/InventoryRegulation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeInventoryRegulation**
> \RackbeatApp\Client\Model\InventoryRegulation storeInventoryRegulation($body)

Create new inventory regulation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\InventoryRegulationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \RackbeatApp\Client\Model\InventoryRegulationForm(); // \RackbeatApp\Client\Model\InventoryRegulationForm | Inventory regulation object that should be created.

try {
    $result = $apiInstance->storeInventoryRegulation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryRegulationApi->storeInventoryRegulation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RackbeatApp\Client\Model\InventoryRegulationForm**](../Model/InventoryRegulationForm.md)| Inventory regulation object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\InventoryRegulation**](../Model/InventoryRegulation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

