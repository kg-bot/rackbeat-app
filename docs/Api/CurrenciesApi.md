# Swagger\Client\CurrenciesApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**indexCurrencies**](CurrenciesApi.md#indexCurrencies) | **GET** /currency | Index currencies
[**resetCurrency**](CurrenciesApi.md#resetCurrency) | **PUT** /currency/{currencyCode}/reset | Reset existing currency
[**showCurrency**](CurrenciesApi.md#showCurrency) | **GET** /currency/{currencyCode} | Show single currency
[**updateCurrency**](CurrenciesApi.md#updateCurrency) | **PUT** /currency/{currencyCode} | Update existing currency


# **indexCurrencies**
> \Swagger\Client\Model\CurrencyRateList indexCurrencies()

Index currencies



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->indexCurrencies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->indexCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CurrencyRateList**](../Model/CurrencyRateList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetCurrency**
> \Swagger\Client\Model\CurrencyRate resetCurrency($currency_code)

Reset existing currency



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_code = "currency_code_example"; // string | Currency code

try {
    $result = $apiInstance->resetCurrency($currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->resetCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_code** | **string**| Currency code |

### Return type

[**\Swagger\Client\Model\CurrencyRate**](../Model/CurrencyRate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showCurrency**
> \Swagger\Client\Model\CurrencyRate showCurrency($currency_code)

Show single currency



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_code = "currency_code_example"; // string | Currency code

try {
    $result = $apiInstance->showCurrency($currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->showCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_code** | **string**| Currency code |

### Return type

[**\Swagger\Client\Model\CurrencyRate**](../Model/CurrencyRate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCurrency**
> \Swagger\Client\Model\CurrencyRate updateCurrency($currency_code, $body)

Update existing currency



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_code = "currency_code_example"; // string | Currency code
$body = new \Swagger\Client\Model\CurrencyRateForm(); // \Swagger\Client\Model\CurrencyRateForm | Currency object that should be updated.

try {
    $result = $apiInstance->updateCurrency($currency_code, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->updateCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_code** | **string**| Currency code |
 **body** | [**\Swagger\Client\Model\CurrencyRateForm**](../Model/CurrencyRateForm.md)| Currency object that should be updated. |

### Return type

[**\Swagger\Client\Model\CurrencyRate**](../Model/CurrencyRate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

