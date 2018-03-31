# Swagger\Client\VariationsApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteVariation**](VariationsApi.md#deleteVariation) | **DELETE** /variations/{number} | Delete existing variation
[**deleteVariationType**](VariationsApi.md#deleteVariationType) | **DELETE** /variations/{number}/types/{typeNumber} | Delete existing variation type
[**deleteVariationTypeOption**](VariationsApi.md#deleteVariationTypeOption) | **DELETE** /variations/{number}/types/{type}/options/{optionNumber} | Delete existing variation type option
[**indexVariation**](VariationsApi.md#indexVariation) | **GET** /variations | Index variation
[**indexVariationType**](VariationsApi.md#indexVariationType) | **GET** /variations/{number}/types | Index variation type
[**indexVariationTypeOption**](VariationsApi.md#indexVariationTypeOption) | **GET** /variations/{number}/types/{number}/options | Index variation type option
[**showVariation**](VariationsApi.md#showVariation) | **GET** /variations/{number} | Show single variation
[**showVariationType**](VariationsApi.md#showVariationType) | **GET** /variations/{number}/types/{typeNumber} | Show single variation type
[**showVariationTypeOption**](VariationsApi.md#showVariationTypeOption) | **GET** /variations/{number}/types/{type}/options/{optionNumber} | Show single variation type option
[**storeVariation**](VariationsApi.md#storeVariation) | **POST** /variations | Create new variation
[**storeVariationType**](VariationsApi.md#storeVariationType) | **POST** /variations/{number}/types | Create new variation type
[**storeVariationTypeOption**](VariationsApi.md#storeVariationTypeOption) | **POST** /variations/{number}/types/{number}/options | Create new variation type option
[**updateVariation**](VariationsApi.md#updateVariation) | **PUT** /variations/{number} | Update existing variation
[**updateVariationType**](VariationsApi.md#updateVariationType) | **PUT** /variations/{number}/types/{typeNumber} | Update existing variation type
[**updateVariationTypeOption**](VariationsApi.md#updateVariationTypeOption) | **PUT** /variations/{number}/types/{type}/options/{optionNumber} | Update existing variation type option


# **deleteVariation**
> deleteVariation($number)

Delete existing variation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VariationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Variation number

try {
    $apiInstance->deleteVariation($number);
} catch (Exception $e) {
    echo 'Exception when calling VariationsApi->deleteVariation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Variation number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVariationType**
> deleteVariationType($number, $type_number)

Delete existing variation type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VariationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Variation number
$type_number = "type_number_example"; // string | Variation Type number

try {
    $apiInstance->deleteVariationType($number, $type_number);
} catch (Exception $e) {
    echo 'Exception when calling VariationsApi->deleteVariationType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Variation number |
 **type_number** | **string**| Variation Type number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVariationTypeOption**
> deleteVariationTypeOption($number, $type, $option_number)

Delete existing variation type option



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VariationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Variation number
$type = "type_example"; // string | Type number
$option_number = "option_number_example"; // string | Variation Type Option number

try {
    $apiInstance->deleteVariationTypeOption($number, $type, $option_number);
} catch (Exception $e) {
    echo 'Exception when calling VariationsApi->deleteVariationTypeOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Variation number |
 **type** | **string**| Type number |
 **option_number** | **string**| Variation Type Option number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexVariation**
> \Swagger\Client\Model\VariationList indexVariation($search)

Index variation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VariationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | Filter by search query

try {
    $result = $apiInstance->indexVariation($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariationsApi->indexVariation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Filter by search query | [optional]

### Return type

[**\Swagger\Client\Model\VariationList**](../Model/VariationList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexVariationType**
> \Swagger\Client\Model\VariationTypeList indexVariationType($number)

Index variation type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VariationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Variation number

try {
    $result = $apiInstance->indexVariationType($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariationsApi->indexVariationType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Variation number |

### Return type

[**\Swagger\Client\Model\VariationTypeList**](../Model/VariationTypeList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexVariationTypeOption**
> \Swagger\Client\Model\VariationTypeOptionList indexVariationTypeOption($number, $number2)

Index variation type option



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VariationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Variation number
$number2 = "number_example"; // string | Type number

try {
    $result = $apiInstance->indexVariationTypeOption($number, $number2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariationsApi->indexVariationTypeOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Variation number |
 **number2** | **string**| Type number |

### Return type

[**\Swagger\Client\Model\VariationTypeOptionList**](../Model/VariationTypeOptionList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showVariation**
> \Swagger\Client\Model\Variation showVariation($number)

Show single variation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VariationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Variation number

try {
    $result = $apiInstance->showVariation($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariationsApi->showVariation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Variation number |

### Return type

[**\Swagger\Client\Model\Variation**](../Model/Variation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showVariationType**
> \Swagger\Client\Model\VariationType showVariationType($number, $type_number)

Show single variation type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VariationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Variation number
$type_number = "type_number_example"; // string | Variation Type number

try {
    $result = $apiInstance->showVariationType($number, $type_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariationsApi->showVariationType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Variation number |
 **type_number** | **string**| Variation Type number |

### Return type

[**\Swagger\Client\Model\VariationType**](../Model/VariationType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showVariationTypeOption**
> \Swagger\Client\Model\VariationTypeOption showVariationTypeOption($number, $type, $option_number)

Show single variation type option



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VariationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Variation number
$type = "type_example"; // string | Type number
$option_number = "option_number_example"; // string | Variation Type Option number

try {
    $result = $apiInstance->showVariationTypeOption($number, $type, $option_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariationsApi->showVariationTypeOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Variation number |
 **type** | **string**| Type number |
 **option_number** | **string**| Variation Type Option number |

### Return type

[**\Swagger\Client\Model\VariationTypeOption**](../Model/VariationTypeOption.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeVariation**
> \Swagger\Client\Model\Variation storeVariation($body)

Create new variation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VariationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\VariationForm(); // \Swagger\Client\Model\VariationForm | Variation object that should be created.

try {
    $result = $apiInstance->storeVariation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariationsApi->storeVariation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\VariationForm**](../Model/VariationForm.md)| Variation object that should be created. |

### Return type

[**\Swagger\Client\Model\Variation**](../Model/Variation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeVariationType**
> \Swagger\Client\Model\VariationType storeVariationType($number, $body)

Create new variation type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VariationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Variation number
$body = new \Swagger\Client\Model\VariationTypeForm(); // \Swagger\Client\Model\VariationTypeForm | Variation type object that should be created.

try {
    $result = $apiInstance->storeVariationType($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariationsApi->storeVariationType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Variation number |
 **body** | [**\Swagger\Client\Model\VariationTypeForm**](../Model/VariationTypeForm.md)| Variation type object that should be created. |

### Return type

[**\Swagger\Client\Model\VariationType**](../Model/VariationType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeVariationTypeOption**
> \Swagger\Client\Model\VariationTypeOption storeVariationTypeOption($number, $number_type, $body)

Create new variation type option



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VariationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Variation number
$number_type = "number_type_example"; // string | 
$body = new \Swagger\Client\Model\VariationTypeOptionForm(); // \Swagger\Client\Model\VariationTypeOptionForm | Variation type option object that should be created.

try {
    $result = $apiInstance->storeVariationTypeOption($number, $number_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariationsApi->storeVariationTypeOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Variation number |
 **number_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\VariationTypeOptionForm**](../Model/VariationTypeOptionForm.md)| Variation type option object that should be created. |

### Return type

[**\Swagger\Client\Model\VariationTypeOption**](../Model/VariationTypeOption.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVariation**
> \Swagger\Client\Model\Variation updateVariation($number, $body)

Update existing variation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VariationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Variation number
$body = new \Swagger\Client\Model\VariationForm(); // \Swagger\Client\Model\VariationForm | Variation object that should be updated.

try {
    $result = $apiInstance->updateVariation($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariationsApi->updateVariation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Variation number |
 **body** | [**\Swagger\Client\Model\VariationForm**](../Model/VariationForm.md)| Variation object that should be updated. |

### Return type

[**\Swagger\Client\Model\Variation**](../Model/Variation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVariationType**
> \Swagger\Client\Model\VariationType updateVariationType($number, $type_number, $body)

Update existing variation type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VariationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Variation number
$type_number = "type_number_example"; // string | Variation Type number
$body = new \Swagger\Client\Model\VariationTypeForm(); // \Swagger\Client\Model\VariationTypeForm | Variation type object that should be updated.

try {
    $result = $apiInstance->updateVariationType($number, $type_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariationsApi->updateVariationType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Variation number |
 **type_number** | **string**| Variation Type number |
 **body** | [**\Swagger\Client\Model\VariationTypeForm**](../Model/VariationTypeForm.md)| Variation type object that should be updated. |

### Return type

[**\Swagger\Client\Model\VariationType**](../Model/VariationType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVariationTypeOption**
> \Swagger\Client\Model\VariationTypeOption updateVariationTypeOption($number, $type, $option_number, $body)

Update existing variation type option



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VariationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Variation number
$type = "type_example"; // string | Type number
$option_number = "option_number_example"; // string | Variation Type Option number
$body = new \Swagger\Client\Model\VariationTypeOptionForm(); // \Swagger\Client\Model\VariationTypeOptionForm | Variation type option object that should be created.

try {
    $result = $apiInstance->updateVariationTypeOption($number, $type, $option_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariationsApi->updateVariationTypeOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Variation number |
 **type** | **string**| Type number |
 **option_number** | **string**| Variation Type Option number |
 **body** | [**\Swagger\Client\Model\VariationTypeOptionForm**](../Model/VariationTypeOptionForm.md)| Variation type option object that should be created. |

### Return type

[**\Swagger\Client\Model\VariationTypeOption**](../Model/VariationTypeOption.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

