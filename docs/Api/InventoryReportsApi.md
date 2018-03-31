# Swagger\Client\InventoryReportsApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryReportInventoryChecking**](InventoryReportsApi.md#inventoryReportInventoryChecking) | **GET** /inventory-reports/inventory-checking | Inventory report: inventory checking
[**inventoryReportInventoryLedger**](InventoryReportsApi.md#inventoryReportInventoryLedger) | **GET** /inventory-reports/inventory-ledger | Inventory report: inventory ledger
[**inventoryReportInventoryValuation**](InventoryReportsApi.md#inventoryReportInventoryValuation) | **GET** /inventory-reports/inventory-valuation | Inventory report: inventory valuation


# **inventoryReportInventoryChecking**
> \Swagger\Client\Model\InventoryCheckingReport inventoryReportInventoryChecking($body)

Inventory report: inventory checking



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\InventoryCheckingReportForm(); // \Swagger\Client\Model\InventoryCheckingReportForm | Inventory checking filter object

try {
    $result = $apiInstance->inventoryReportInventoryChecking($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryReportsApi->inventoryReportInventoryChecking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\InventoryCheckingReportForm**](../Model/InventoryCheckingReportForm.md)| Inventory checking filter object |

### Return type

[**\Swagger\Client\Model\InventoryCheckingReport**](../Model/InventoryCheckingReport.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryReportInventoryLedger**
> \Swagger\Client\Model\InventoryLedgerReport inventoryReportInventoryLedger($body)

Inventory report: inventory ledger



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\InventoryLedgerReportForm(); // \Swagger\Client\Model\InventoryLedgerReportForm | Inventory ledger filter object

try {
    $result = $apiInstance->inventoryReportInventoryLedger($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryReportsApi->inventoryReportInventoryLedger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\InventoryLedgerReportForm**](../Model/InventoryLedgerReportForm.md)| Inventory ledger filter object |

### Return type

[**\Swagger\Client\Model\InventoryLedgerReport**](../Model/InventoryLedgerReport.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryReportInventoryValuation**
> \Swagger\Client\Model\InventoryValuationReport inventoryReportInventoryValuation($body)

Inventory report: inventory valuation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InventoryReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\InventoryValuationReportForm(); // \Swagger\Client\Model\InventoryValuationReportForm | Inventory valuation filter object

try {
    $result = $apiInstance->inventoryReportInventoryValuation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryReportsApi->inventoryReportInventoryValuation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\InventoryValuationReportForm**](../Model/InventoryValuationReportForm.md)| Inventory valuation filter object |

### Return type

[**\Swagger\Client\Model\InventoryValuationReport**](../Model/InventoryValuationReport.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

