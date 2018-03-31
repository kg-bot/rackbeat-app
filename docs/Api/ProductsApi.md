# RackbeatApp\Client\ProductsApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addProductImage**](ProductsApi.md#addProductImage) | **POST** /products/{number}/image | Add product image
[**deleteProduct**](ProductsApi.md#deleteProduct) | **DELETE** /products/{number} | Delete existing product
[**deleteProductImage**](ProductsApi.md#deleteProductImage) | **DELETE** /products/{number}/image | Delete product image
[**deleteProductVariationOption**](ProductsApi.md#deleteProductVariationOption) | **DELETE** /products/{number}/variation-types/{variationType}/options/{optionNumber} | Delete existing product variation option
[**deleteProductsVariation**](ProductsApi.md#deleteProductsVariation) | **DELETE** /products/{number}/variations/{variationNumber} | Delete existing products variation
[**deleteProductsVariationType**](ProductsApi.md#deleteProductsVariationType) | **DELETE** /products/{number}/variation-types/{variationTypeNumber} | Delete existing products variation type
[**getProductsTranslation**](ProductsApi.md#getProductsTranslation) | **GET** /products/{number}/translations/{locale} | Get product translation
[**getProductsTranslations**](ProductsApi.md#getProductsTranslations) | **GET** /products/{number}/translations | Get product translation
[**getProductsVariationMatrix**](ProductsApi.md#getProductsVariationMatrix) | **GET** /products/{number}/variation-matrix | Get product variation matrix
[**indexProduct**](ProductsApi.md#indexProduct) | **GET** /products | Index products.
[**indexProductVariationOption**](ProductsApi.md#indexProductVariationOption) | **GET** /products/{number}/variation-types/{variationType}/options | Index product variation option
[**indexProductsDraft**](ProductsApi.md#indexProductsDraft) | **GET** /products/drafts | Index products draft
[**indexProductsVariation**](ProductsApi.md#indexProductsVariation) | **GET** /products/{number}/variations | Index products variation
[**indexProductsVariationType**](ProductsApi.md#indexProductsVariationType) | **GET** /products/{number}/variation-types | Index products variation type
[**publishProduct**](ProductsApi.md#publishProduct) | **POST** /products/{number}/publish | Publish product
[**showProduct**](ProductsApi.md#showProduct) | **GET** /products/{number} | Show existing product
[**showProductVariationOption**](ProductsApi.md#showProductVariationOption) | **GET** /products/{number}/variation-types/{variationType}/options/{optionNumber} | Show single product variation option
[**showProductsVariation**](ProductsApi.md#showProductsVariation) | **GET** /products/{number}/variations/{variationNumber} | Show single products variation
[**showProductsVariationType**](ProductsApi.md#showProductsVariationType) | **GET** /products/{number}/variation-types/{variationTypeNumber} | Show single products variation type
[**storeProduct**](ProductsApi.md#storeProduct) | **POST** /products | Create a new product
[**storeProductVariationOption**](ProductsApi.md#storeProductVariationOption) | **POST** /products/{number}/variation-types/{variationType}/options | Create new product variation option
[**storeProductsDraft**](ProductsApi.md#storeProductsDraft) | **POST** /products/drafts | Create new products draft
[**storeProductsVariation**](ProductsApi.md#storeProductsVariation) | **POST** /products/{number}/variations | Create new products variation
[**storeProductsVariationType**](ProductsApi.md#storeProductsVariationType) | **POST** /products/{number}/variation-types | Create new products variation type
[**updateProduct**](ProductsApi.md#updateProduct) | **PUT** /products/{number} | Update existing product
[**updateProductVariationOption**](ProductsApi.md#updateProductVariationOption) | **PUT** /products/{number}/variation-types/{variationType}/options/{optionNumber} | Update existing product variation option
[**updateProductsTranslations**](ProductsApi.md#updateProductsTranslations) | **PUT** /products/{number}/translations/{locale} | Update product translation
[**updateProductsVariation**](ProductsApi.md#updateProductsVariation) | **PUT** /products/{number}/variations/{variationNumber} | Update existing products variation
[**updateProductsVariationType**](ProductsApi.md#updateProductsVariationType) | **PUT** /products/{number}/variation-types/{variationTypeNumber} | Update existing products variation type


# **addProductImage**
> \RackbeatApp\Client\Model\Product addProductImage($number, $media)

Add product image



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number
$media = "media_example"; // string | Image

try {
    $result = $apiInstance->addProductImage($number, $media);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->addProductImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |
 **media** | **string**| Image |

### Return type

[**\RackbeatApp\Client\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProduct**
> deleteProduct($number)

Delete existing product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number

try {
    $apiInstance->deleteProduct($number);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductImage**
> deleteProductImage($number)

Delete product image



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number

try {
    $apiInstance->deleteProductImage($number);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteProductImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductVariationOption**
> deleteProductVariationOption($number, $variation_type, $option_number)

Delete existing product variation option



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number
$variation_type = "variation_type_example"; // string | Variation type number
$option_number = "option_number_example"; // string | Product Variation Option number

try {
    $apiInstance->deleteProductVariationOption($number, $variation_type, $option_number);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteProductVariationOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |
 **variation_type** | **string**| Variation type number |
 **option_number** | **string**| Product Variation Option number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductsVariation**
> deleteProductsVariation($number, $variation_number)

Delete existing products variation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number
$variation_number = "variation_number_example"; // string | Products Variation number

try {
    $apiInstance->deleteProductsVariation($number, $variation_number);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteProductsVariation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |
 **variation_number** | **string**| Products Variation number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductsVariationType**
> deleteProductsVariationType($number, $variation_type_number)

Delete existing products variation type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number
$variation_type_number = "variation_type_number_example"; // string | Products Variation Type number

try {
    $apiInstance->deleteProductsVariationType($number, $variation_type_number);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteProductsVariationType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |
 **variation_type_number** | **string**| Products Variation Type number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductsTranslation**
> \RackbeatApp\Client\Model\Translation getProductsTranslation($number, $locale)

Get product translation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number
$locale = "locale_example"; // string | Locale number

try {
    $result = $apiInstance->getProductsTranslation($number, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductsTranslation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |
 **locale** | **string**| Locale number |

### Return type

[**\RackbeatApp\Client\Model\Translation**](../Model/Translation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductsTranslations**
> \RackbeatApp\Client\Model\Translation[] getProductsTranslations($number)

Get product translation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number

try {
    $result = $apiInstance->getProductsTranslations($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductsTranslations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |

### Return type

[**\RackbeatApp\Client\Model\Translation[]**](../Model/Translation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductsVariationMatrix**
> string getProductsVariationMatrix($number, $location_id)

Get product variation matrix



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number
$location_id = "location_id_example"; // string | Filter by location id

try {
    $result = $apiInstance->getProductsVariationMatrix($number, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductsVariationMatrix: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |
 **location_id** | **string**| Filter by location id | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexProduct**
> \RackbeatApp\Client\Model\InlineResponse206 indexProduct()

Index products.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->indexProduct();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->indexProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\RackbeatApp\Client\Model\InlineResponse206**](../Model/InlineResponse206.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexProductVariationOption**
> \RackbeatApp\Client\Model\ProductVariationOption[] indexProductVariationOption($number, $variation_type)

Index product variation option



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number
$variation_type = "variation_type_example"; // string | Variation type number

try {
    $result = $apiInstance->indexProductVariationOption($number, $variation_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->indexProductVariationOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |
 **variation_type** | **string**| Variation type number |

### Return type

[**\RackbeatApp\Client\Model\ProductVariationOption[]**](../Model/ProductVariationOption.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexProductsDraft**
> \RackbeatApp\Client\Model\ProductsDraftList indexProductsDraft($is_draft, $number, $search)

Index products draft



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_draft = true; // bool | Filter by draft flag
$number = "number_example"; // string | Filter by number
$search = "search_example"; // string | Filter by search query

try {
    $result = $apiInstance->indexProductsDraft($is_draft, $number, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->indexProductsDraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_draft** | **bool**| Filter by draft flag | [optional]
 **number** | **string**| Filter by number | [optional]
 **search** | **string**| Filter by search query | [optional]

### Return type

[**\RackbeatApp\Client\Model\ProductsDraftList**](../Model/ProductsDraftList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexProductsVariation**
> \RackbeatApp\Client\Model\Product[] indexProductsVariation($number)

Index products variation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number

try {
    $result = $apiInstance->indexProductsVariation($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->indexProductsVariation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |

### Return type

[**\RackbeatApp\Client\Model\Product[]**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexProductsVariationType**
> \RackbeatApp\Client\Model\ProductVariationType[] indexProductsVariationType($number)

Index products variation type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number

try {
    $result = $apiInstance->indexProductsVariationType($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->indexProductsVariationType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |

### Return type

[**\RackbeatApp\Client\Model\ProductVariationType[]**](../Model/ProductVariationType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publishProduct**
> \RackbeatApp\Client\Model\Product publishProduct($number)

Publish product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number

try {
    $result = $apiInstance->publishProduct($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->publishProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |

### Return type

[**\RackbeatApp\Client\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showProduct**
> \RackbeatApp\Client\Model\InlineResponse200 showProduct($number)

Show existing product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number

try {
    $result = $apiInstance->showProduct($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->showProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |

### Return type

[**\RackbeatApp\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showProductVariationOption**
> \RackbeatApp\Client\Model\ProductVariationOption showProductVariationOption($number, $variation_type, $option_number)

Show single product variation option



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number
$variation_type = "variation_type_example"; // string | Variation type number
$option_number = "option_number_example"; // string | Product Variation Option number

try {
    $result = $apiInstance->showProductVariationOption($number, $variation_type, $option_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->showProductVariationOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |
 **variation_type** | **string**| Variation type number |
 **option_number** | **string**| Product Variation Option number |

### Return type

[**\RackbeatApp\Client\Model\ProductVariationOption**](../Model/ProductVariationOption.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showProductsVariation**
> \RackbeatApp\Client\Model\ProductVariation showProductsVariation($number, $variation_number, $body)

Show single products variation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number
$variation_number = "variation_number_example"; // string | Products Variation number
$body = new \RackbeatApp\Client\Model\ProductVariationForm(); // \RackbeatApp\Client\Model\ProductVariationForm | Products variation object that should be created.

try {
    $result = $apiInstance->showProductsVariation($number, $variation_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->showProductsVariation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |
 **variation_number** | **string**| Products Variation number |
 **body** | [**\RackbeatApp\Client\Model\ProductVariationForm**](../Model/ProductVariationForm.md)| Products variation object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\ProductVariation**](../Model/ProductVariation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showProductsVariationType**
> \RackbeatApp\Client\Model\ProductVariationType showProductsVariationType($number, $variation_type_number)

Show single products variation type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number
$variation_type_number = "variation_type_number_example"; // string | Products Variation Type number

try {
    $result = $apiInstance->showProductsVariationType($number, $variation_type_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->showProductsVariationType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |
 **variation_type_number** | **string**| Products Variation Type number |

### Return type

[**\RackbeatApp\Client\Model\ProductVariationType**](../Model/ProductVariationType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeProduct**
> \RackbeatApp\Client\Model\InlineResponse200 storeProduct($body)

Create a new product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \RackbeatApp\Client\Model\Body(); // \RackbeatApp\Client\Model\Body | Product object that should be created.

try {
    $result = $apiInstance->storeProduct($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->storeProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RackbeatApp\Client\Model\Body**](../Model/Body.md)| Product object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeProductVariationOption**
> \RackbeatApp\Client\Model\ProductVariationOption storeProductVariationOption($number, $variation_type, $body)

Create new product variation option



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number
$variation_type = "variation_type_example"; // string | Variation type number
$body = new \RackbeatApp\Client\Model\ProductVariationOptionForm(); // \RackbeatApp\Client\Model\ProductVariationOptionForm | Product variation option object that should be created.

try {
    $result = $apiInstance->storeProductVariationOption($number, $variation_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->storeProductVariationOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |
 **variation_type** | **string**| Variation type number |
 **body** | [**\RackbeatApp\Client\Model\ProductVariationOptionForm**](../Model/ProductVariationOptionForm.md)| Product variation option object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\ProductVariationOption**](../Model/ProductVariationOption.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeProductsDraft**
> \RackbeatApp\Client\Model\Product storeProductsDraft($body)

Create new products draft



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \RackbeatApp\Client\Model\ProductForm(); // \RackbeatApp\Client\Model\ProductForm | Products draft object that should be created.

try {
    $result = $apiInstance->storeProductsDraft($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->storeProductsDraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RackbeatApp\Client\Model\ProductForm**](../Model/ProductForm.md)| Products draft object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeProductsVariation**
> \RackbeatApp\Client\Model\ProductVariation storeProductsVariation($number, $body)

Create new products variation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number
$body = new \RackbeatApp\Client\Model\ProductVariationForm(); // \RackbeatApp\Client\Model\ProductVariationForm | Products variation object that should be created.

try {
    $result = $apiInstance->storeProductsVariation($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->storeProductsVariation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |
 **body** | [**\RackbeatApp\Client\Model\ProductVariationForm**](../Model/ProductVariationForm.md)| Products variation object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\ProductVariation**](../Model/ProductVariation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeProductsVariationType**
> \RackbeatApp\Client\Model\ProductVariationType storeProductsVariationType($number, $body)

Create new products variation type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number
$body = new \RackbeatApp\Client\Model\ProductVariationTypeForm(); // \RackbeatApp\Client\Model\ProductVariationTypeForm | Products variation type object that should be created.

try {
    $result = $apiInstance->storeProductsVariationType($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->storeProductsVariationType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |
 **body** | [**\RackbeatApp\Client\Model\ProductVariationTypeForm**](../Model/ProductVariationTypeForm.md)| Products variation type object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\ProductVariationType**](../Model/ProductVariationType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProduct**
> \RackbeatApp\Client\Model\InlineResponse200 updateProduct($number, $body)

Update existing product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number
$body = new \RackbeatApp\Client\Model\Body1(); // \RackbeatApp\Client\Model\Body1 | Values to update.

try {
    $result = $apiInstance->updateProduct($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |
 **body** | [**\RackbeatApp\Client\Model\Body1**](../Model/Body1.md)| Values to update. |

### Return type

[**\RackbeatApp\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductVariationOption**
> \RackbeatApp\Client\Model\ProductVariationOption updateProductVariationOption($number, $variation_type, $option_number)

Update existing product variation option



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number
$variation_type = "variation_type_example"; // string | Variation type number
$option_number = "option_number_example"; // string | Product Variation Option number

try {
    $result = $apiInstance->updateProductVariationOption($number, $variation_type, $option_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProductVariationOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |
 **variation_type** | **string**| Variation type number |
 **option_number** | **string**| Product Variation Option number |

### Return type

[**\RackbeatApp\Client\Model\ProductVariationOption**](../Model/ProductVariationOption.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductsTranslations**
> \RackbeatApp\Client\Model\Translation updateProductsTranslations($number, $locale, $body)

Update product translation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number
$locale = "locale_example"; // string | Locale number
$body = new \RackbeatApp\Client\Model\Body6(); // \RackbeatApp\Client\Model\Body6 | Translation data to update

try {
    $result = $apiInstance->updateProductsTranslations($number, $locale, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProductsTranslations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |
 **locale** | **string**| Locale number |
 **body** | [**\RackbeatApp\Client\Model\Body6**](../Model/Body6.md)| Translation data to update | [optional]

### Return type

[**\RackbeatApp\Client\Model\Translation**](../Model/Translation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductsVariation**
> \RackbeatApp\Client\Model\ProductVariation updateProductsVariation($number, $variation_number)

Update existing products variation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number
$variation_number = "variation_number_example"; // string | Products Variation number

try {
    $result = $apiInstance->updateProductsVariation($number, $variation_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProductsVariation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |
 **variation_number** | **string**| Products Variation number |

### Return type

[**\RackbeatApp\Client\Model\ProductVariation**](../Model/ProductVariation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductsVariationType**
> \RackbeatApp\Client\Model\ProductVariationType updateProductsVariationType($number, $variation_type_number)

Update existing products variation type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Product number
$variation_type_number = "variation_type_number_example"; // string | Products Variation Type number

try {
    $result = $apiInstance->updateProductsVariationType($number, $variation_type_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProductsVariationType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Product number |
 **variation_type_number** | **string**| Products Variation Type number |

### Return type

[**\RackbeatApp\Client\Model\ProductVariationType**](../Model/ProductVariationType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

