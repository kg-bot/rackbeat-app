# RackbeatApp\Client\CustomerGroupsApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCustomerGroup**](CustomerGroupsApi.md#deleteCustomerGroup) | **DELETE** /customer-groups/{number} | Delete existing customer group
[**indexCustomerGroups**](CustomerGroupsApi.md#indexCustomerGroups) | **GET** /customer-groups | Index customer groups
[**indexCustomersGroupsProducts**](CustomerGroupsApi.md#indexCustomersGroupsProducts) | **GET** /customer-groups/{number}/products | Index customers groups products
[**shoeCustomerGroupProduct**](CustomerGroupsApi.md#shoeCustomerGroupProduct) | **GET** /customer-groups/{number}/products/{product} | Show customer group product
[**showCustomerGroup**](CustomerGroupsApi.md#showCustomerGroup) | **GET** /customer-groups/{number} | Show single customer group
[**storeCustomerGroup**](CustomerGroupsApi.md#storeCustomerGroup) | **POST** /customer-groups | Create new customer group
[**updateCustomerGroup**](CustomerGroupsApi.md#updateCustomerGroup) | **PUT** /customer-groups/{number} | Update existing customer group
[**updateCustomerGroupProduct**](CustomerGroupsApi.md#updateCustomerGroupProduct) | **PUT** /customer-groups/{number}/products/{product} | Update customer group product


# **deleteCustomerGroup**
> deleteCustomerGroup($number)

Delete existing customer group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\CustomerGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer group number

try {
    $apiInstance->deleteCustomerGroup($number);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupsApi->deleteCustomerGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer group number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexCustomerGroups**
> \RackbeatApp\Client\Model\CustomerGroupsList indexCustomerGroups($name)

Index customer groups



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\CustomerGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Filter by name

try {
    $result = $apiInstance->indexCustomerGroups($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupsApi->indexCustomerGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filter by name | [optional]

### Return type

[**\RackbeatApp\Client\Model\CustomerGroupsList**](../Model/CustomerGroupsList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexCustomersGroupsProducts**
> \RackbeatApp\Client\Model\CustomerGroupProduct indexCustomersGroupsProducts($number)

Index customers groups products



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\CustomerGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer group number

try {
    $result = $apiInstance->indexCustomersGroupsProducts($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupsApi->indexCustomersGroupsProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer group number |

### Return type

[**\RackbeatApp\Client\Model\CustomerGroupProduct**](../Model/CustomerGroupProduct.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shoeCustomerGroupProduct**
> \RackbeatApp\Client\Model\CustomerGroupProduct shoeCustomerGroupProduct($number, $product)

Show customer group product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\CustomerGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer group number
$product = "product_example"; // string | Product number

try {
    $result = $apiInstance->shoeCustomerGroupProduct($number, $product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupsApi->shoeCustomerGroupProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer group number |
 **product** | **string**| Product number |

### Return type

[**\RackbeatApp\Client\Model\CustomerGroupProduct**](../Model/CustomerGroupProduct.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showCustomerGroup**
> \RackbeatApp\Client\Model\CustomerGroup showCustomerGroup($number)

Show single customer group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\CustomerGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer group number

try {
    $result = $apiInstance->showCustomerGroup($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupsApi->showCustomerGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer group number |

### Return type

[**\RackbeatApp\Client\Model\CustomerGroup**](../Model/CustomerGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeCustomerGroup**
> \RackbeatApp\Client\Model\CustomerGroup storeCustomerGroup($body)

Create new customer group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\CustomerGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \RackbeatApp\Client\Model\CustomerGroupsForm(); // \RackbeatApp\Client\Model\CustomerGroupsForm | Customer group object that should be created.

try {
    $result = $apiInstance->storeCustomerGroup($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupsApi->storeCustomerGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RackbeatApp\Client\Model\CustomerGroupsForm**](../Model/CustomerGroupsForm.md)| Customer group object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\CustomerGroup**](../Model/CustomerGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerGroup**
> \RackbeatApp\Client\Model\CustomerGroupsForm updateCustomerGroup($number, $body)

Update existing customer group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\CustomerGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer group number
$body = new \RackbeatApp\Client\Model\CustomerGroupsForm(); // \RackbeatApp\Client\Model\CustomerGroupsForm | Customer group object that should be updated.

try {
    $result = $apiInstance->updateCustomerGroup($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupsApi->updateCustomerGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer group number |
 **body** | [**\RackbeatApp\Client\Model\CustomerGroupsForm**](../Model/CustomerGroupsForm.md)| Customer group object that should be updated. |

### Return type

[**\RackbeatApp\Client\Model\CustomerGroupsForm**](../Model/CustomerGroupsForm.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerGroupProduct**
> \RackbeatApp\Client\Model\CustomerGroupProduct updateCustomerGroupProduct($number, $product, $body)

Update customer group product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\CustomerGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer number
$product = "product_example"; // string | Product number
$body = new \RackbeatApp\Client\Model\Body4(); // \RackbeatApp\Client\Model\Body4 | Customers group product object that should be created.

try {
    $result = $apiInstance->updateCustomerGroupProduct($number, $product, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupsApi->updateCustomerGroupProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer number |
 **product** | **string**| Product number |
 **body** | [**\RackbeatApp\Client\Model\Body4**](../Model/Body4.md)| Customers group product object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\CustomerGroupProduct**](../Model/CustomerGroupProduct.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

