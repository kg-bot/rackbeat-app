# Swagger\Client\PaymentTermsApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePaymentTerm**](PaymentTermsApi.md#deletePaymentTerm) | **DELETE** /payment-terms/{number} | Delete existing payment term
[**indexPaymentTerm**](PaymentTermsApi.md#indexPaymentTerm) | **GET** /payment-terms | Index payment term
[**showPaymentTerm**](PaymentTermsApi.md#showPaymentTerm) | **GET** /payment-terms/{number} | Show single payment term
[**storePaymentTerm**](PaymentTermsApi.md#storePaymentTerm) | **POST** /payment-terms | Create new payment term
[**updatePaymentTerm**](PaymentTermsApi.md#updatePaymentTerm) | **PUT** /payment-terms/{number} | Update existing payment term


# **deletePaymentTerm**
> deletePaymentTerm($number)

Delete existing payment term



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Payment Term number

try {
    $apiInstance->deletePaymentTerm($number);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermsApi->deletePaymentTerm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Payment Term number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexPaymentTerm**
> \Swagger\Client\Model\PaymentTermList indexPaymentTerm()

Index payment term



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->indexPaymentTerm();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermsApi->indexPaymentTerm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaymentTermList**](../Model/PaymentTermList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showPaymentTerm**
> \Swagger\Client\Model\PaymentTerm showPaymentTerm($number)

Show single payment term



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Payment Term number

try {
    $result = $apiInstance->showPaymentTerm($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermsApi->showPaymentTerm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Payment Term number |

### Return type

[**\Swagger\Client\Model\PaymentTerm**](../Model/PaymentTerm.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storePaymentTerm**
> \Swagger\Client\Model\PaymentTerm storePaymentTerm($body)

Create new payment term



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PaymentTermForm(); // \Swagger\Client\Model\PaymentTermForm | Payment term object that should be created.

try {
    $result = $apiInstance->storePaymentTerm($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermsApi->storePaymentTerm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PaymentTermForm**](../Model/PaymentTermForm.md)| Payment term object that should be created. |

### Return type

[**\Swagger\Client\Model\PaymentTerm**](../Model/PaymentTerm.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePaymentTerm**
> \Swagger\Client\Model\PaymentTerm updatePaymentTerm($number)

Update existing payment term



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PaymentTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Payment Term number

try {
    $result = $apiInstance->updatePaymentTerm($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermsApi->updatePaymentTerm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Payment Term number |

### Return type

[**\Swagger\Client\Model\PaymentTerm**](../Model/PaymentTerm.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

