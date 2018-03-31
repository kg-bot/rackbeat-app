# Swagger\Client\LocationsApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteLocation**](LocationsApi.md#deleteLocation) | **DELETE** /locations/{number} | Delete existing location
[**indexLocation**](LocationsApi.md#indexLocation) | **GET** /locations | Index location
[**locationFlat**](LocationsApi.md#locationFlat) | **GET** /locations/flat | Location flat
[**locationsChildren**](LocationsApi.md#locationsChildren) | **GET** /locations/{number}/children | Location children
[**locationsGetLineableStock**](LocationsApi.md#locationsGetLineableStock) | **GET** /locations/{number}/get-stock/{lineableNumber} | Location get lineable stock
[**showLocation**](LocationsApi.md#showLocation) | **GET** /locations/{number} | Show single location
[**storeLocation**](LocationsApi.md#storeLocation) | **POST** /locations | Create new location
[**updateLocation**](LocationsApi.md#updateLocation) | **PUT** /locations/{number} | Update existing location


# **deleteLocation**
> deleteLocation($number)

Delete existing location



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Location number

try {
    $apiInstance->deleteLocation($number);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->deleteLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Location number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexLocation**
> \Swagger\Client\Model\LocationList indexLocation($is_draft, $parent_id, $search, $is_default)

Index location



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_draft = true; // bool | Filter by draft flag
$parent_id = 56; // int | Filter by parent id
$search = "search_example"; // string | Filter by search query
$is_default = true; // bool | Filter by default flag

try {
    $result = $apiInstance->indexLocation($is_draft, $parent_id, $search, $is_default);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->indexLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_draft** | **bool**| Filter by draft flag | [optional]
 **parent_id** | **int**| Filter by parent id | [optional]
 **search** | **string**| Filter by search query | [optional]
 **is_default** | **bool**| Filter by default flag | [optional]

### Return type

[**\Swagger\Client\Model\LocationList**](../Model/LocationList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationFlat**
> \Swagger\Client\Model\InlineResponse2006 locationFlat($is_draft, $parent_id, $search, $is_default)

Location flat



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_draft = true; // bool | Filter by draft flag
$parent_id = 56; // int | Filter by parent id
$search = "search_example"; // string | Filter by search query
$is_default = true; // bool | Filter by default flag

try {
    $result = $apiInstance->locationFlat($is_draft, $parent_id, $search, $is_default);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationFlat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_draft** | **bool**| Filter by draft flag | [optional]
 **parent_id** | **int**| Filter by parent id | [optional]
 **search** | **string**| Filter by search query | [optional]
 **is_default** | **bool**| Filter by default flag | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationsChildren**
> \Swagger\Client\Model\LocationList locationsChildren($number)

Location children



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Location number

try {
    $result = $apiInstance->locationsChildren($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Location number |

### Return type

[**\Swagger\Client\Model\LocationList**](../Model/LocationList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationsGetLineableStock**
> \Swagger\Client\Model\InlineResponse2007 locationsGetLineableStock($number, $lineable_number)

Location get lineable stock



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Location number
$lineable_number = "lineable_number_example"; // string | Lineable number

try {
    $result = $apiInstance->locationsGetLineableStock($number, $lineable_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsGetLineableStock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Location number |
 **lineable_number** | **string**| Lineable number |

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showLocation**
> \Swagger\Client\Model\Location showLocation($number)

Show single location



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Location number

try {
    $result = $apiInstance->showLocation($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->showLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Location number |

### Return type

[**\Swagger\Client\Model\Location**](../Model/Location.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeLocation**
> \Swagger\Client\Model\Location storeLocation($body)

Create new location



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LocationForm(); // \Swagger\Client\Model\LocationForm | Location object that should be created.

try {
    $result = $apiInstance->storeLocation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->storeLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LocationForm**](../Model/LocationForm.md)| Location object that should be created. |

### Return type

[**\Swagger\Client\Model\Location**](../Model/Location.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLocation**
> \Swagger\Client\Model\Location updateLocation($number, $body)

Update existing location



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Location number
$body = new \Swagger\Client\Model\LocationForm(); // \Swagger\Client\Model\LocationForm | Location object that should be created.

try {
    $result = $apiInstance->updateLocation($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->updateLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Location number |
 **body** | [**\Swagger\Client\Model\LocationForm**](../Model/LocationForm.md)| Location object that should be created. |

### Return type

[**\Swagger\Client\Model\Location**](../Model/Location.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

