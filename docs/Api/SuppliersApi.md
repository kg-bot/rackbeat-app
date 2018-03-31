# RackbeatApp\Client\SuppliersApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSupplier**](SuppliersApi.md#deleteSupplier) | **DELETE** /suppliers/{number} | Delete existing supplier
[**deleteSupplierContact**](SuppliersApi.md#deleteSupplierContact) | **DELETE** /suppliers/{number}/contacts/{contactId} | Delete existing supplier contact
[**indexSupplierContacts**](SuppliersApi.md#indexSupplierContacts) | **GET** /suppliers/{number}/contacts | Index supplier contacts
[**indexSupplierProducts**](SuppliersApi.md#indexSupplierProducts) | **GET** /suppliers/{number}/products | Index supplier products
[**indexSuppliers**](SuppliersApi.md#indexSuppliers) | **GET** /suppliers | Index Suppliers
[**resetNumberSupplierProduct**](SuppliersApi.md#resetNumberSupplierProduct) | **GET** /suppliers/{number}/products/{productNumber}/reset-number | Reset number supplier product
[**resetPriceSupplierProduct**](SuppliersApi.md#resetPriceSupplierProduct) | **GET** /suppliers/{number}/products/{productNumber}/reset-price | Reset number supplier product
[**showSupplier**](SuppliersApi.md#showSupplier) | **GET** /suppliers/{number} | Show single supplier
[**showSupplierAvgDeliveryTime**](SuppliersApi.md#showSupplierAvgDeliveryTime) | **GET** /suppliers/{number}/avg-delivery-time | Show supplier avg delivery time
[**showSupplierContact**](SuppliersApi.md#showSupplierContact) | **GET** /suppliers/{number}/contacts/{contactId} | Show single supplier contact
[**showSupplierProduct**](SuppliersApi.md#showSupplierProduct) | **GET** /suppliers/{number}/products/{productNumber} | Show single supplier product
[**storeSupplierContact**](SuppliersApi.md#storeSupplierContact) | **POST** /suppliers/{number}/contacts | Create new supplier contact
[**storeSuppliers**](SuppliersApi.md#storeSuppliers) | **POST** /suppliers | Create new supplier
[**updateSupplier**](SuppliersApi.md#updateSupplier) | **PUT** /suppliers/{number} | Update existing supplier
[**updateSupplierContact**](SuppliersApi.md#updateSupplierContact) | **PUT** /suppliers/{number}/contacts/{contactId} | Update existing supplier contact
[**updateSupplierProduct**](SuppliersApi.md#updateSupplierProduct) | **PUT** /suppliers/{number}/products/{productNumber} | Update existing supplier product


# **deleteSupplier**
> deleteSupplier($number)

Delete existing supplier



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier number

try {
    $apiInstance->deleteSupplier($number);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->deleteSupplier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSupplierContact**
> deleteSupplierContact($number, $contact_id)

Delete existing supplier contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier number
$contact_id = "contact_id_example"; // string | Supplier contact id

try {
    $apiInstance->deleteSupplierContact($number, $contact_id);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->deleteSupplierContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier number |
 **contact_id** | **string**| Supplier contact id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexSupplierContacts**
> \RackbeatApp\Client\Model\SupplierContactList indexSupplierContacts($number, $name)

Index supplier contacts



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier number
$name = "name_example"; // string | Filter by contact name

try {
    $result = $apiInstance->indexSupplierContacts($number, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->indexSupplierContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier number |
 **name** | **string**| Filter by contact name | [optional]

### Return type

[**\RackbeatApp\Client\Model\SupplierContactList**](../Model/SupplierContactList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexSupplierProducts**
> \RackbeatApp\Client\Model\SupplierProductList indexSupplierProducts($number)

Index supplier products



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier number

try {
    $result = $apiInstance->indexSupplierProducts($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->indexSupplierProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier number |

### Return type

[**\RackbeatApp\Client\Model\SupplierProductList**](../Model/SupplierProductList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexSuppliers**
> \RackbeatApp\Client\Model\SuppliersList indexSuppliers($company_name, $search)

Index Suppliers



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_name = "company_name_example"; // string | Filter by company name
$search = "search_example"; // string | Search in company name or number

try {
    $result = $apiInstance->indexSuppliers($company_name, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->indexSuppliers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_name** | **string**| Filter by company name | [optional]
 **search** | **string**| Search in company name or number | [optional]

### Return type

[**\RackbeatApp\Client\Model\SuppliersList**](../Model/SuppliersList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetNumberSupplierProduct**
> \RackbeatApp\Client\Model\SupplierProduct resetNumberSupplierProduct($number, $product_number)

Reset number supplier product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier number
$product_number = "product_number_example"; // string | Product number

try {
    $result = $apiInstance->resetNumberSupplierProduct($number, $product_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->resetNumberSupplierProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier number |
 **product_number** | **string**| Product number |

### Return type

[**\RackbeatApp\Client\Model\SupplierProduct**](../Model/SupplierProduct.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetPriceSupplierProduct**
> \RackbeatApp\Client\Model\SupplierProduct resetPriceSupplierProduct($number, $product_number)

Reset number supplier product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier number
$product_number = "product_number_example"; // string | Product number

try {
    $result = $apiInstance->resetPriceSupplierProduct($number, $product_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->resetPriceSupplierProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier number |
 **product_number** | **string**| Product number |

### Return type

[**\RackbeatApp\Client\Model\SupplierProduct**](../Model/SupplierProduct.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showSupplier**
> \RackbeatApp\Client\Model\Supplier showSupplier($number)

Show single supplier



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier number

try {
    $result = $apiInstance->showSupplier($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->showSupplier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier number |

### Return type

[**\RackbeatApp\Client\Model\Supplier**](../Model/Supplier.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showSupplierAvgDeliveryTime**
> string showSupplierAvgDeliveryTime($number)

Show supplier avg delivery time



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier number

try {
    $result = $apiInstance->showSupplierAvgDeliveryTime($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->showSupplierAvgDeliveryTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier number |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showSupplierContact**
> \RackbeatApp\Client\Model\SupplierContact showSupplierContact($number, $contact_id)

Show single supplier contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier number
$contact_id = "contact_id_example"; // string | Supplier contact id

try {
    $result = $apiInstance->showSupplierContact($number, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->showSupplierContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier number |
 **contact_id** | **string**| Supplier contact id |

### Return type

[**\RackbeatApp\Client\Model\SupplierContact**](../Model/SupplierContact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showSupplierProduct**
> \RackbeatApp\Client\Model\SupplierProduct showSupplierProduct($number, $product_number)

Show single supplier product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier number
$product_number = "product_number_example"; // string | Product number

try {
    $result = $apiInstance->showSupplierProduct($number, $product_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->showSupplierProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier number |
 **product_number** | **string**| Product number |

### Return type

[**\RackbeatApp\Client\Model\SupplierProduct**](../Model/SupplierProduct.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeSupplierContact**
> \RackbeatApp\Client\Model\SupplierContact storeSupplierContact($number, $body)

Create new supplier contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier number
$body = new \RackbeatApp\Client\Model\SupplierContactForm(); // \RackbeatApp\Client\Model\SupplierContactForm | Supplier contact object that should be created.

try {
    $result = $apiInstance->storeSupplierContact($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->storeSupplierContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier number |
 **body** | [**\RackbeatApp\Client\Model\SupplierContactForm**](../Model/SupplierContactForm.md)| Supplier contact object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\SupplierContact**](../Model/SupplierContact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeSuppliers**
> \RackbeatApp\Client\Model\Supplier storeSuppliers($body)

Create new supplier



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \RackbeatApp\Client\Model\SupplierForm(); // \RackbeatApp\Client\Model\SupplierForm | Supplier object that should be created.

try {
    $result = $apiInstance->storeSuppliers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->storeSuppliers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RackbeatApp\Client\Model\SupplierForm**](../Model/SupplierForm.md)| Supplier object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\Supplier**](../Model/Supplier.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSupplier**
> \RackbeatApp\Client\Model\Supplier updateSupplier($number, $body)

Update existing supplier



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier number
$body = new \RackbeatApp\Client\Model\SupplierForm(); // \RackbeatApp\Client\Model\SupplierForm | Supplier object that should be updated.

try {
    $result = $apiInstance->updateSupplier($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->updateSupplier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier number |
 **body** | [**\RackbeatApp\Client\Model\SupplierForm**](../Model/SupplierForm.md)| Supplier object that should be updated. |

### Return type

[**\RackbeatApp\Client\Model\Supplier**](../Model/Supplier.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSupplierContact**
> \RackbeatApp\Client\Model\SupplierContact updateSupplierContact($number, $contact_id, $body)

Update existing supplier contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier number
$contact_id = "contact_id_example"; // string | Supplier contact id
$body = new \RackbeatApp\Client\Model\SupplierContactForm(); // \RackbeatApp\Client\Model\SupplierContactForm | Supplier contact object that should be updated.

try {
    $result = $apiInstance->updateSupplierContact($number, $contact_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->updateSupplierContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier number |
 **contact_id** | **string**| Supplier contact id |
 **body** | [**\RackbeatApp\Client\Model\SupplierContactForm**](../Model/SupplierContactForm.md)| Supplier contact object that should be updated. |

### Return type

[**\RackbeatApp\Client\Model\SupplierContact**](../Model/SupplierContact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSupplierProduct**
> \RackbeatApp\Client\Model\SupplierProduct updateSupplierProduct($number, $product_number, $body)

Update existing supplier product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier number
$product_number = "product_number_example"; // string | Product number
$body = new \RackbeatApp\Client\Model\SupplierProductForm(); // \RackbeatApp\Client\Model\SupplierProductForm | Supplier products object that should be updated.

try {
    $result = $apiInstance->updateSupplierProduct($number, $product_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->updateSupplierProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier number |
 **product_number** | **string**| Product number |
 **body** | [**\RackbeatApp\Client\Model\SupplierProductForm**](../Model/SupplierProductForm.md)| Supplier products object that should be updated. |

### Return type

[**\RackbeatApp\Client\Model\SupplierProduct**](../Model/SupplierProduct.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

