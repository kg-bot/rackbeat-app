# Swagger\Client\CustomersApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerGroupProductsResetPrice**](CustomersApi.md#customerGroupProductsResetPrice) | **GET** /customer-groups/{number}/products/{productNumber}/reset-price | Reset price of customer group product
[**customersPproductsResetPrice**](CustomersApi.md#customersPproductsResetPrice) | **GET** /customers/{number}/products/{productNumber}/reset-price | Reset price of customer product
[**deleteCustomer**](CustomersApi.md#deleteCustomer) | **DELETE** /customers/{number} | Delete existing customer
[**indexCustomers**](CustomersApi.md#indexCustomers) | **GET** /customers | Index customers
[**indexCustomersProducts**](CustomersApi.md#indexCustomersProducts) | **GET** /customers/{number}/products | Index customers
[**shoeCustomerProduct**](CustomersApi.md#shoeCustomerProduct) | **GET** /customers/{number}/products/{productNumber} | Show customer product
[**showCustomer**](CustomersApi.md#showCustomer) | **GET** /customers/{number} | Show single customer
[**storeCustomer**](CustomersApi.md#storeCustomer) | **POST** /customers | Create new customer
[**updateCustomer**](CustomersApi.md#updateCustomer) | **PUT** /customers/{number} | Update existing customer
[**updateCustomerProduct**](CustomersApi.md#updateCustomerProduct) | **PUT** /customers/{number}/products/{productNumber} | Update customer product


# **customerGroupProductsResetPrice**
> customerGroupProductsResetPrice($number, $product_number)

Reset price of customer group product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer group number
$product_number = "product_number_example"; // string | Product number

try {
    $apiInstance->customerGroupProductsResetPrice($number, $product_number);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customerGroupProductsResetPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer group number |
 **product_number** | **string**| Product number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersPproductsResetPrice**
> \Swagger\Client\Model\CustomerProduct customersPproductsResetPrice($number, $product_number)

Reset price of customer product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer number
$product_number = "product_number_example"; // string | Product number

try {
    $result = $apiInstance->customersPproductsResetPrice($number, $product_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersPproductsResetPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer number |
 **product_number** | **string**| Product number |

### Return type

[**\Swagger\Client\Model\CustomerProduct**](../Model/CustomerProduct.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomer**
> deleteCustomer($number)

Delete existing customer



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer number

try {
    $apiInstance->deleteCustomer($number);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexCustomers**
> \Swagger\Client\Model\CustomersList indexCustomers($company_name, $search)

Index customers



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_name = "company_name_example"; // string | Filter by company name
$search = "search_example"; // string | Search in company name or number

try {
    $result = $apiInstance->indexCustomers($company_name, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->indexCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_name** | **string**| Filter by company name | [optional]
 **search** | **string**| Search in company name or number | [optional]

### Return type

[**\Swagger\Client\Model\CustomersList**](../Model/CustomersList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexCustomersProducts**
> \Swagger\Client\Model\Customer indexCustomersProducts($number)

Index customers



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer number

try {
    $result = $apiInstance->indexCustomersProducts($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->indexCustomersProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer number |

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shoeCustomerProduct**
> \Swagger\Client\Model\CustomerProduct shoeCustomerProduct($number, $product_number)

Show customer product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer number
$product_number = "product_number_example"; // string | Product number

try {
    $result = $apiInstance->shoeCustomerProduct($number, $product_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->shoeCustomerProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer number |
 **product_number** | **string**| Product number |

### Return type

[**\Swagger\Client\Model\CustomerProduct**](../Model/CustomerProduct.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showCustomer**
> \Swagger\Client\Model\Customer showCustomer($number)

Show single customer



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer number

try {
    $result = $apiInstance->showCustomer($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->showCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer number |

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeCustomer**
> \Swagger\Client\Model\Customer storeCustomer($body)

Create new customer



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CustomerForm(); // \Swagger\Client\Model\CustomerForm | Customer object that should be created.\"

try {
    $result = $apiInstance->storeCustomer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->storeCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerForm**](../Model/CustomerForm.md)| Customer object that should be created.\&quot; |

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomer**
> \Swagger\Client\Model\Customer updateCustomer($number, $body)

Update existing customer



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer number
$body = new \Swagger\Client\Model\CustomerForm(); // \Swagger\Client\Model\CustomerForm | Customer object that should be updated.

try {
    $result = $apiInstance->updateCustomer($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer number |
 **body** | [**\Swagger\Client\Model\CustomerForm**](../Model/CustomerForm.md)| Customer object that should be updated. |

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerProduct**
> \Swagger\Client\Model\CustomerProduct updateCustomerProduct($number, $product_number, $body)

Update customer product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer number
$product_number = "product_number_example"; // string | Product number
$body = new \Swagger\Client\Model\Body3(); // \Swagger\Client\Model\Body3 | Customers product object that should be created.

try {
    $result = $apiInstance->updateCustomerProduct($number, $product_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomerProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer number |
 **product_number** | **string**| Product number |
 **body** | [**\Swagger\Client\Model\Body3**](../Model/Body3.md)| Customers product object that should be created. |

### Return type

[**\Swagger\Client\Model\CustomerProduct**](../Model/CustomerProduct.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

