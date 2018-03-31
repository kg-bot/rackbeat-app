# Swagger\Client\SettingsApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**indexKeyValueSettings**](SettingsApi.md#indexKeyValueSettings) | **GET** /settings-keyvalue | Index of key-value settings
[**indexSettings**](SettingsApi.md#indexSettings) | **GET** /settings | Index settings
[**showSettings**](SettingsApi.md#showSettings) | **GET** /settings/{userAccountSetting} | Show existing setting
[**updateSetting**](SettingsApi.md#updateSetting) | **PUT** /settings/{userAccountSetting} | Update existing settings


# **indexKeyValueSettings**
> \Swagger\Client\Model\UserAccountSettings indexKeyValueSettings()

Index of key-value settings

Custom structured key-value response

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->indexKeyValueSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->indexKeyValueSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\UserAccountSettings**](../Model/UserAccountSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexSettings**
> \Swagger\Client\Model\SettingsList indexSettings()

Index settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->indexSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->indexSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SettingsList**](../Model/SettingsList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showSettings**
> \Swagger\Client\Model\Setting showSettings($user_account_setting)

Show existing setting



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_account_setting = "user_account_setting_example"; // string | Setting identity

try {
    $result = $apiInstance->showSettings($user_account_setting);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->showSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_account_setting** | **string**| Setting identity |

### Return type

[**\Swagger\Client\Model\Setting**](../Model/Setting.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSetting**
> \Swagger\Client\Model\Setting updateSetting($user_account_setting, $body)

Update existing settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_account_setting = "user_account_setting_example"; // string | Setting identity
$body = new \Swagger\Client\Model\Setting(); // \Swagger\Client\Model\Setting | Values to update.

try {
    $result = $apiInstance->updateSetting($user_account_setting, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_account_setting** | **string**| Setting identity |
 **body** | [**\Swagger\Client\Model\Setting**](../Model/Setting.md)| Values to update. |

### Return type

[**\Swagger\Client\Model\Setting**](../Model/Setting.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

