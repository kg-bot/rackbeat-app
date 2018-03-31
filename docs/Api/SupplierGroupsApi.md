# RackbeatApp\Client\SupplierGroupsApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSupplierGroup**](SupplierGroupsApi.md#deleteSupplierGroup) | **DELETE** /supplier-groups/{number} | Delete existing supplier group
[**indexSupplierGroups**](SupplierGroupsApi.md#indexSupplierGroups) | **GET** /supplier-groups | Index supplier groups
[**showSupplierGroup**](SupplierGroupsApi.md#showSupplierGroup) | **GET** /supplier-groups/{number} | Show single supplier group
[**storeSupplierGroup**](SupplierGroupsApi.md#storeSupplierGroup) | **POST** /supplier-groups | Create new supplier group
[**updateSupplierGroup**](SupplierGroupsApi.md#updateSupplierGroup) | **PUT** /supplier-groups/{number} | Update existing supplier group


# **deleteSupplierGroup**
> deleteSupplierGroup($number)

Delete existing supplier group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier group number

try {
    $apiInstance->deleteSupplierGroup($number);
} catch (Exception $e) {
    echo 'Exception when calling SupplierGroupsApi->deleteSupplierGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier group number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexSupplierGroups**
> \RackbeatApp\Client\Model\SupplierGroupsList indexSupplierGroups($name)

Index supplier groups



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Filter by name

try {
    $result = $apiInstance->indexSupplierGroups($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierGroupsApi->indexSupplierGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filter by name | [optional]

### Return type

[**\RackbeatApp\Client\Model\SupplierGroupsList**](../Model/SupplierGroupsList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showSupplierGroup**
> \RackbeatApp\Client\Model\SupplierGroup showSupplierGroup($number)

Show single supplier group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier group number

try {
    $result = $apiInstance->showSupplierGroup($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierGroupsApi->showSupplierGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier group number |

### Return type

[**\RackbeatApp\Client\Model\SupplierGroup**](../Model/SupplierGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeSupplierGroup**
> \RackbeatApp\Client\Model\SupplierGroup storeSupplierGroup($body)

Create new supplier group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \RackbeatApp\Client\Model\SupplierGroupForm(); // \RackbeatApp\Client\Model\SupplierGroupForm | Supplier group object that should be created.

try {
    $result = $apiInstance->storeSupplierGroup($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierGroupsApi->storeSupplierGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RackbeatApp\Client\Model\SupplierGroupForm**](../Model/SupplierGroupForm.md)| Supplier group object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\SupplierGroup**](../Model/SupplierGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSupplierGroup**
> \RackbeatApp\Client\Model\SupplierGroupForm updateSupplierGroup($number, $body)

Update existing supplier group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier group number
$body = new \RackbeatApp\Client\Model\SupplierGroupForm(); // \RackbeatApp\Client\Model\SupplierGroupForm | Supplier group object that should be updated.

try {
    $result = $apiInstance->updateSupplierGroup($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierGroupsApi->updateSupplierGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier group number |
 **body** | [**\RackbeatApp\Client\Model\SupplierGroupForm**](../Model/SupplierGroupForm.md)| Supplier group object that should be updated. |

### Return type

[**\RackbeatApp\Client\Model\SupplierGroupForm**](../Model/SupplierGroupForm.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

