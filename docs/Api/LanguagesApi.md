# Swagger\Client\LanguagesApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteLanguage**](LanguagesApi.md#deleteLanguage) | **DELETE** /languages/{number} | Delete existing language
[**indexLanguages**](LanguagesApi.md#indexLanguages) | **GET** /languages | Index languages
[**showLanguage**](LanguagesApi.md#showLanguage) | **GET** /languages/{number} | Show single language
[**storeLanguage**](LanguagesApi.md#storeLanguage) | **POST** /languages | Create new language
[**updateLanguage**](LanguagesApi.md#updateLanguage) | **PUT** /languages/{number} | Update existing language


# **deleteLanguage**
> deleteLanguage($number)

Delete existing language



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Language number

try {
    $apiInstance->deleteLanguage($number);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->deleteLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Language number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexLanguages**
> \Swagger\Client\Model\LanguageList indexLanguages($name, $number)

Index languages



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Filter by language name
$number = "number_example"; // string | Filter by language number

try {
    $result = $apiInstance->indexLanguages($name, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->indexLanguages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filter by language name | [optional]
 **number** | **string**| Filter by language number | [optional]

### Return type

[**\Swagger\Client\Model\LanguageList**](../Model/LanguageList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showLanguage**
> \Swagger\Client\Model\Language showLanguage($number)

Show single language



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Language number

try {
    $result = $apiInstance->showLanguage($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->showLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Language number |

### Return type

[**\Swagger\Client\Model\Language**](../Model/Language.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeLanguage**
> \Swagger\Client\Model\Language storeLanguage($body)

Create new language



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LanguageForm(); // \Swagger\Client\Model\LanguageForm | Language object that should be created.

try {
    $result = $apiInstance->storeLanguage($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->storeLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LanguageForm**](../Model/LanguageForm.md)| Language object that should be created. |

### Return type

[**\Swagger\Client\Model\Language**](../Model/Language.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLanguage**
> \Swagger\Client\Model\Language updateLanguage($number, $body)

Update existing language



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Language number
$body = new \Swagger\Client\Model\LanguageForm(); // \Swagger\Client\Model\LanguageForm | Language object that should be updated.

try {
    $result = $apiInstance->updateLanguage($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->updateLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Language number |
 **body** | [**\Swagger\Client\Model\LanguageForm**](../Model/LanguageForm.md)| Language object that should be updated. |

### Return type

[**\Swagger\Client\Model\Language**](../Model/Language.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

