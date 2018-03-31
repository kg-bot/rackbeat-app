# Swagger\Client\VatInfoApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**indexVatInfo**](VatInfoApi.md#indexVatInfo) | **GET** /vat-info/{country}/collect/{vat} | Index vat-info


# **indexVatInfo**
> \Swagger\Client\Model\InlineResponse2009 indexVatInfo($country, $vat)

Index vat-info



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VatInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$country = "country_example"; // string | Country number
$vat = "vat_example"; // string | Vat number

try {
    $result = $apiInstance->indexVatInfo($country, $vat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VatInfoApi->indexVatInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**| Country number |
 **vat** | **string**| Vat number |

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

