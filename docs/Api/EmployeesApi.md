# Swagger\Client\EmployeesApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEmployee**](EmployeesApi.md#deleteEmployee) | **DELETE** /employees/{number} | Delete existing employee
[**indexEmployees**](EmployeesApi.md#indexEmployees) | **GET** /employees | Index employees
[**showEmployee**](EmployeesApi.md#showEmployee) | **GET** /employees/{number} | Show single employee
[**storeEmployee**](EmployeesApi.md#storeEmployee) | **POST** /employees | Create new employee
[**updateEmployee**](EmployeesApi.md#updateEmployee) | **PUT** /employees/{number} | Update existing employee


# **deleteEmployee**
> deleteEmployee($number)

Delete existing employee



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Employee number

try {
    $apiInstance->deleteEmployee($number);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->deleteEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Employee number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexEmployees**
> \Swagger\Client\Model\EmployeeList indexEmployees($name)

Index employees



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Filter by employee name

try {
    $result = $apiInstance->indexEmployees($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->indexEmployees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filter by employee name | [optional]

### Return type

[**\Swagger\Client\Model\EmployeeList**](../Model/EmployeeList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showEmployee**
> \Swagger\Client\Model\Employee showEmployee($number)

Show single employee



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Employee number

try {
    $result = $apiInstance->showEmployee($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->showEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Employee number |

### Return type

[**\Swagger\Client\Model\Employee**](../Model/Employee.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeEmployee**
> \Swagger\Client\Model\Employee storeEmployee($body)

Create new employee



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EmployeeForm(); // \Swagger\Client\Model\EmployeeForm | Employee object that should be created.

try {
    $result = $apiInstance->storeEmployee($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->storeEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EmployeeForm**](../Model/EmployeeForm.md)| Employee object that should be created. |

### Return type

[**\Swagger\Client\Model\Employee**](../Model/Employee.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmployee**
> \Swagger\Client\Model\Employee updateEmployee($number, $body)

Update existing employee



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Employee number
$body = new \Swagger\Client\Model\EmployeeForm(); // \Swagger\Client\Model\EmployeeForm | Employee object that should be updated.

try {
    $result = $apiInstance->updateEmployee($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->updateEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Employee number |
 **body** | [**\Swagger\Client\Model\EmployeeForm**](../Model/EmployeeForm.md)| Employee object that should be updated. |

### Return type

[**\Swagger\Client\Model\Employee**](../Model/Employee.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

