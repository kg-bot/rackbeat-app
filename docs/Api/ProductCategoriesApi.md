# RackbeatApp\Client\ProductCategoriesApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProductCategory**](ProductCategoriesApi.md#deleteProductCategory) | **DELETE** /product-categories/{number} | Delete existing product category
[**deleteProductCategoryProduct**](ProductCategoriesApi.md#deleteProductCategoryProduct) | **DELETE** /product-categories/{number}/products | Delete existing product category
[**indexProductCategory**](ProductCategoriesApi.md#indexProductCategory) | **GET** /product-categories | Index product category
[**indexProductCategoryProducts**](ProductCategoriesApi.md#indexProductCategoryProducts) | **GET** /product-categories/{number}/products | Index product category
[**showProductCategory**](ProductCategoriesApi.md#showProductCategory) | **GET** /product-categories/{number} | Show single product category
[**storeProductCategory**](ProductCategoriesApi.md#storeProductCategory) | **POST** /product-categories | Create new product category
[**storeProductCategoryProduct**](ProductCategoriesApi.md#storeProductCategoryProduct) | **POST** /product-categories/{number}/products | Create new product category
[**updateProductCategory**](ProductCategoriesApi.md#updateProductCategory) | **PUT** /product-categories/{number} | Update existing product category


# **deleteProductCategory**
> deleteProductCategory($number)

Delete existing product category



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product Category number

try {
    $apiInstance->deleteProductCategory($number);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoriesApi->deleteProductCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product Category number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductCategoryProduct**
> deleteProductCategoryProduct($number)

Delete existing product category



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product category number

try {
    $apiInstance->deleteProductCategoryProduct($number);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoriesApi->deleteProductCategoryProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product category number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexProductCategory**
> \RackbeatApp\Client\Model\ProductCategoryList indexProductCategory()

Index product category



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->indexProductCategory();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoriesApi->indexProductCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\RackbeatApp\Client\Model\ProductCategoryList**](../Model/ProductCategoryList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexProductCategoryProducts**
> \RackbeatApp\Client\Model\ProductList indexProductCategoryProducts($number)

Index product category



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product category number

try {
    $result = $apiInstance->indexProductCategoryProducts($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoriesApi->indexProductCategoryProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product category number |

### Return type

[**\RackbeatApp\Client\Model\ProductList**](../Model/ProductList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showProductCategory**
> \RackbeatApp\Client\Model\ProductCategory showProductCategory($number)

Show single product category



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product Category number

try {
    $result = $apiInstance->showProductCategory($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoriesApi->showProductCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product Category number |

### Return type

[**\RackbeatApp\Client\Model\ProductCategory**](../Model/ProductCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeProductCategory**
> \RackbeatApp\Client\Model\ProductCategory storeProductCategory($body)

Create new product category



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \RackbeatApp\Client\Model\ProductCategoryForm(); // \RackbeatApp\Client\Model\ProductCategoryForm | Product category object that should be created.

try {
    $result = $apiInstance->storeProductCategory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoriesApi->storeProductCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RackbeatApp\Client\Model\ProductCategoryForm**](../Model/ProductCategoryForm.md)| Product category object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\ProductCategory**](../Model/ProductCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeProductCategoryProduct**
> \RackbeatApp\Client\Model\Product storeProductCategoryProduct($number, $body)

Create new product category



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product category number
$body = new \RackbeatApp\Client\Model\Body7(); // \RackbeatApp\Client\Model\Body7 | Product category object that should be created.

try {
    $result = $apiInstance->storeProductCategoryProduct($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoriesApi->storeProductCategoryProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product category number |
 **body** | [**\RackbeatApp\Client\Model\Body7**](../Model/Body7.md)| Product category object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductCategory**
> \RackbeatApp\Client\Model\ProductCategory updateProductCategory($number, $body)

Update existing product category



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product Category number
$body = new \RackbeatApp\Client\Model\ProductCategoryForm(); // \RackbeatApp\Client\Model\ProductCategoryForm | Product category object that should be created.

try {
    $result = $apiInstance->updateProductCategory($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoriesApi->updateProductCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product Category number |
 **body** | [**\RackbeatApp\Client\Model\ProductCategoryForm**](../Model/ProductCategoryForm.md)| Product category object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\ProductCategory**](../Model/ProductCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

