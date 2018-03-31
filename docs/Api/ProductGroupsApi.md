# Swagger\Client\ProductGroupsApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProductGroup**](ProductGroupsApi.md#deleteProductGroup) | **DELETE** /product-groups/{number} | Delete existing product group
[**indexProductGroup**](ProductGroupsApi.md#indexProductGroup) | **GET** /product-groups | Index product group
[**publishProductGroup**](ProductGroupsApi.md#publishProductGroup) | **POST** /product-groups/{number}/publish | Create new draft product group
[**showProductGroup**](ProductGroupsApi.md#showProductGroup) | **GET** /product-groups/{number} | Show single product group
[**storeDraftProductGroup**](ProductGroupsApi.md#storeDraftProductGroup) | **POST** /product-groups/drafts | Create new draft product group
[**storeProductGroup**](ProductGroupsApi.md#storeProductGroup) | **POST** /product-groups | Create new product group
[**updateProductGroup**](ProductGroupsApi.md#updateProductGroup) | **PUT** /product-groups/{number} | Update existing product group


# **deleteProductGroup**
> deleteProductGroup($number)

Delete existing product group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product Group number

try {
    $apiInstance->deleteProductGroup($number);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupsApi->deleteProductGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product Group number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexProductGroup**
> \Swagger\Client\Model\ProductGroupList indexProductGroup($is_draft)

Index product group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_draft = true; // bool | Filter by draft flag

try {
    $result = $apiInstance->indexProductGroup($is_draft);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupsApi->indexProductGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_draft** | **bool**| Filter by draft flag | [optional]

### Return type

[**\Swagger\Client\Model\ProductGroupList**](../Model/ProductGroupList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publishProductGroup**
> \Swagger\Client\Model\ProductGroup publishProductGroup($number)

Create new draft product group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product group number

try {
    $result = $apiInstance->publishProductGroup($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupsApi->publishProductGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product group number |

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showProductGroup**
> \Swagger\Client\Model\ProductGroup showProductGroup($number)

Show single product group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product Group number

try {
    $result = $apiInstance->showProductGroup($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupsApi->showProductGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product Group number |

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeDraftProductGroup**
> \Swagger\Client\Model\ProductGroup storeDraftProductGroup($body)

Create new draft product group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ProductGroupForm(); // \Swagger\Client\Model\ProductGroupForm | Product group object that should be created.

try {
    $result = $apiInstance->storeDraftProductGroup($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupsApi->storeDraftProductGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductGroupForm**](../Model/ProductGroupForm.md)| Product group object that should be created. |

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeProductGroup**
> \Swagger\Client\Model\ProductGroup storeProductGroup($body)

Create new product group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ProductGroupForm(); // \Swagger\Client\Model\ProductGroupForm | Product group object that should be created.

try {
    $result = $apiInstance->storeProductGroup($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupsApi->storeProductGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductGroupForm**](../Model/ProductGroupForm.md)| Product group object that should be created. |

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductGroup**
> \Swagger\Client\Model\ProductGroup updateProductGroup($number, $body)

Update existing product group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product Group number
$body = new \Swagger\Client\Model\ProductGroupForm(); // \Swagger\Client\Model\ProductGroupForm | Product group object that should be created.

try {
    $result = $apiInstance->updateProductGroup($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupsApi->updateProductGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product Group number |
 **body** | [**\Swagger\Client\Model\ProductGroupForm**](../Model/ProductGroupForm.md)| Product group object that should be created. |

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

