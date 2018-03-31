# RackbeatApp\Client\OrderShipmentsApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOrderShipment**](OrderShipmentsApi.md#deleteOrderShipment) | **DELETE** /orders/{number}/shipments/{shipmentId} | Delete existing order shipment
[**downloadDeliveryNotePDF**](OrderShipmentsApi.md#downloadDeliveryNotePDF) | **POST** /orders/{number}/shipments/{shipmentId}/download-delivery-note | Download delivery note pdf file
[**downloadOrderShipmentPDF**](OrderShipmentsApi.md#downloadOrderShipmentPDF) | **POST** /orders/{number}/shipments/{shipmentId}/download | Download order shipment pdf file
[**downloadSingleOrderShipment**](OrderShipmentsApi.md#downloadSingleOrderShipment) | **POST** /order-shipments/{shipmentId}/download | Download single order shipment
[**getDownloadDeliveryNotePDF**](OrderShipmentsApi.md#getDownloadDeliveryNotePDF) | **GET** /orders/{number}/shipments/{shipmentId}/download-delivery-note | Download delivery note pdf file
[**getDownloadOrderShipmentPDF**](OrderShipmentsApi.md#getDownloadOrderShipmentPDF) | **GET** /orders/{number}/shipments/{shipmentId}/download | Download order shipment pdf file
[**getDownloadSingleOrderShipment**](OrderShipmentsApi.md#getDownloadSingleOrderShipment) | **GET** /order-shipments/{shipmentId}/download | Download single order shipment
[**getRequestDownloadOrderShipment**](OrderShipmentsApi.md#getRequestDownloadOrderShipment) | **GET** /orders/{number}/shipments/{shipmentId}/request-download | Request to download order shipment
[**indexOrderShipments**](OrderShipmentsApi.md#indexOrderShipments) | **GET** /orders/{number}/shipments | Index order shipments
[**indexOrderShipmentsGeneral**](OrderShipmentsApi.md#indexOrderShipmentsGeneral) | **GET** /order-shipments | Index order shipments
[**indexShipmentLines**](OrderShipmentsApi.md#indexShipmentLines) | **GET** /orders/{number}/shipments/{shipmentId}/lines | Index shipment lines
[**markPickedOrderShipment**](OrderShipmentsApi.md#markPickedOrderShipment) | **POST** /orders/{number}/shipments/{shipmentId}/mark-picked | Mark order shipment as picked
[**markShipmentLinePicked**](OrderShipmentsApi.md#markShipmentLinePicked) | **POST** /orders/{number}/shipments/{shipmentId}/lines/{shipmentLineId}/mark-picked | Mark shipment line as picked
[**markShipmentLineUnpicked**](OrderShipmentsApi.md#markShipmentLineUnpicked) | **POST** /orders/{number}/shipments/{shipmentId}/lines/{shipmentLineId}/mark-unpicked | Mark shipment line as unpicked
[**markShippedOrderShipment**](OrderShipmentsApi.md#markShippedOrderShipment) | **POST** /orders/{number}/shipments/{shipmentId}/mark-shipped | Mark order shipment as shipped
[**multiplyDownloadOrderShipment**](OrderShipmentsApi.md#multiplyDownloadOrderShipment) | **POST** /order-shipments/download-multiple | Multiply download order shipments
[**orderShipmentPdfStream**](OrderShipmentsApi.md#orderShipmentPdfStream) | **GET** /orders/{number}/shipments/{shipmentId}/stream | Download order shipment pdf file in a stream
[**requestDownloadOrderShipment**](OrderShipmentsApi.md#requestDownloadOrderShipment) | **POST** /orders/{number}/shipments/{shipmentId}/request-download | Request to download order shipment
[**showOrderShipment**](OrderShipmentsApi.md#showOrderShipment) | **GET** /orders/{number}/shipments/{shipmentId} | Show single order shipment
[**showShipmentLine**](OrderShipmentsApi.md#showShipmentLine) | **GET** /orders/{number}/shipments/{shipmentId}/lines/{shipmentLineId} | Show single shipment line
[**storeOrderShipment**](OrderShipmentsApi.md#storeOrderShipment) | **POST** /orders/{number}/shipments | Create new order shipment
[**streamDownloadSingleOrderShipment**](OrderShipmentsApi.md#streamDownloadSingleOrderShipment) | **GET** /order-shipments/{shipmentId}/stream | Download single order shipment


# **deleteOrderShipment**
> deleteOrderShipment($number, $shipment_id)

Delete existing order shipment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number
$shipment_id = "shipment_id_example"; // string | Order shipment id

try {
    $apiInstance->deleteOrderShipment($number, $shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->deleteOrderShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |
 **shipment_id** | **string**| Order shipment id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadDeliveryNotePDF**
> downloadDeliveryNotePDF($number, $shipment_id)

Download delivery note pdf file



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number
$shipment_id = "shipment_id_example"; // string | Order shipment id

try {
    $apiInstance->downloadDeliveryNotePDF($number, $shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->downloadDeliveryNotePDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |
 **shipment_id** | **string**| Order shipment id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadOrderShipmentPDF**
> downloadOrderShipmentPDF($number, $shipment_id)

Download order shipment pdf file



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number
$shipment_id = "shipment_id_example"; // string | Order shipment id

try {
    $apiInstance->downloadOrderShipmentPDF($number, $shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->downloadOrderShipmentPDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |
 **shipment_id** | **string**| Order shipment id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadSingleOrderShipment**
> downloadSingleOrderShipment($shipment_id)

Download single order shipment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = "shipment_id_example"; // string | Order shipment id

try {
    $apiInstance->downloadSingleOrderShipment($shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->downloadSingleOrderShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| Order shipment id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDownloadDeliveryNotePDF**
> getDownloadDeliveryNotePDF($number, $shipment_id)

Download delivery note pdf file



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number
$shipment_id = "shipment_id_example"; // string | Order shipment id

try {
    $apiInstance->getDownloadDeliveryNotePDF($number, $shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->getDownloadDeliveryNotePDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |
 **shipment_id** | **string**| Order shipment id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDownloadOrderShipmentPDF**
> getDownloadOrderShipmentPDF($number, $shipment_id)

Download order shipment pdf file



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number
$shipment_id = "shipment_id_example"; // string | Order shipment id

try {
    $apiInstance->getDownloadOrderShipmentPDF($number, $shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->getDownloadOrderShipmentPDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |
 **shipment_id** | **string**| Order shipment id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDownloadSingleOrderShipment**
> getDownloadSingleOrderShipment($shipment_id)

Download single order shipment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = "shipment_id_example"; // string | Order shipment id

try {
    $apiInstance->getDownloadSingleOrderShipment($shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->getDownloadSingleOrderShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| Order shipment id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRequestDownloadOrderShipment**
> string getRequestDownloadOrderShipment($number, $shipment_id)

Request to download order shipment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number
$shipment_id = "shipment_id_example"; // string | Order shipment id

try {
    $result = $apiInstance->getRequestDownloadOrderShipment($number, $shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->getRequestDownloadOrderShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |
 **shipment_id** | **string**| Order shipment id |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexOrderShipments**
> \RackbeatApp\Client\Model\OrderShipmentList indexOrderShipments($number, $employee, $is_shipped, $is_picked, $location, $search, $customer_number, $employee_number, $order_number)

Index order shipments



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number
$employee = "employee_example"; // string | Filter by employee number
$is_shipped = "is_shipped_example"; // string | Filter by shipped status
$is_picked = "is_picked_example"; // string | Filter by piked status
$location = "location_example"; // string | Filter by location number
$search = "search_example"; // string | Search by number
$customer_number = "customer_number_example"; // string | Filter by customer number
$employee_number = "employee_number_example"; // string | Filter by employee number
$order_number = "order_number_example"; // string | Filter by order number

try {
    $result = $apiInstance->indexOrderShipments($number, $employee, $is_shipped, $is_picked, $location, $search, $customer_number, $employee_number, $order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->indexOrderShipments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |
 **employee** | **string**| Filter by employee number | [optional]
 **is_shipped** | **string**| Filter by shipped status | [optional]
 **is_picked** | **string**| Filter by piked status | [optional]
 **location** | **string**| Filter by location number | [optional]
 **search** | **string**| Search by number | [optional]
 **customer_number** | **string**| Filter by customer number | [optional]
 **employee_number** | **string**| Filter by employee number | [optional]
 **order_number** | **string**| Filter by order number | [optional]

### Return type

[**\RackbeatApp\Client\Model\OrderShipmentList**](../Model/OrderShipmentList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexOrderShipmentsGeneral**
> \RackbeatApp\Client\Model\OrderShipmentList indexOrderShipmentsGeneral($employee, $is_shipped, $is_picked, $location, $search, $customer_number, $employee_number, $order_number)

Index order shipments



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$employee = "employee_example"; // string | Filter by employee number
$is_shipped = "is_shipped_example"; // string | Filter by shipped status
$is_picked = "is_picked_example"; // string | Filter by piked status
$location = "location_example"; // string | Filter by location number
$search = "search_example"; // string | Search by number
$customer_number = "customer_number_example"; // string | Filter by customer number
$employee_number = "employee_number_example"; // string | Filter by employee number
$order_number = "order_number_example"; // string | Filter by order number

try {
    $result = $apiInstance->indexOrderShipmentsGeneral($employee, $is_shipped, $is_picked, $location, $search, $customer_number, $employee_number, $order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->indexOrderShipmentsGeneral: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee** | **string**| Filter by employee number | [optional]
 **is_shipped** | **string**| Filter by shipped status | [optional]
 **is_picked** | **string**| Filter by piked status | [optional]
 **location** | **string**| Filter by location number | [optional]
 **search** | **string**| Search by number | [optional]
 **customer_number** | **string**| Filter by customer number | [optional]
 **employee_number** | **string**| Filter by employee number | [optional]
 **order_number** | **string**| Filter by order number | [optional]

### Return type

[**\RackbeatApp\Client\Model\OrderShipmentList**](../Model/OrderShipmentList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexShipmentLines**
> \RackbeatApp\Client\Model\OrderShipmentLineList indexShipmentLines($number, $shipment_id)

Index shipment lines



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number
$shipment_id = "shipment_id_example"; // string | Order shipment id

try {
    $result = $apiInstance->indexShipmentLines($number, $shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->indexShipmentLines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |
 **shipment_id** | **string**| Order shipment id |

### Return type

[**\RackbeatApp\Client\Model\OrderShipmentLineList**](../Model/OrderShipmentLineList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markPickedOrderShipment**
> \RackbeatApp\Client\Model\OrderShipment markPickedOrderShipment($number, $shipment_id)

Mark order shipment as picked



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number
$shipment_id = "shipment_id_example"; // string | Order shipment id

try {
    $result = $apiInstance->markPickedOrderShipment($number, $shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->markPickedOrderShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |
 **shipment_id** | **string**| Order shipment id |

### Return type

[**\RackbeatApp\Client\Model\OrderShipment**](../Model/OrderShipment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markShipmentLinePicked**
> markShipmentLinePicked($number, $shipment_id, $shipment_line_id)

Mark shipment line as picked



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number
$shipment_id = "shipment_id_example"; // string | Order shipment id
$shipment_line_id = "shipment_line_id_example"; // string | Order shipment line id

try {
    $apiInstance->markShipmentLinePicked($number, $shipment_id, $shipment_line_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->markShipmentLinePicked: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |
 **shipment_id** | **string**| Order shipment id |
 **shipment_line_id** | **string**| Order shipment line id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markShipmentLineUnpicked**
> markShipmentLineUnpicked($number, $shipment_id, $shipment_line_id)

Mark shipment line as unpicked



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number
$shipment_id = "shipment_id_example"; // string | Order shipment id
$shipment_line_id = "shipment_line_id_example"; // string | Order shipment line id

try {
    $apiInstance->markShipmentLineUnpicked($number, $shipment_id, $shipment_line_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->markShipmentLineUnpicked: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |
 **shipment_id** | **string**| Order shipment id |
 **shipment_line_id** | **string**| Order shipment line id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markShippedOrderShipment**
> \RackbeatApp\Client\Model\OrderShipment markShippedOrderShipment($number, $shipment_id)

Mark order shipment as shipped



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number
$shipment_id = "shipment_id_example"; // string | Order shipment id

try {
    $result = $apiInstance->markShippedOrderShipment($number, $shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->markShippedOrderShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |
 **shipment_id** | **string**| Order shipment id |

### Return type

[**\RackbeatApp\Client\Model\OrderShipment**](../Model/OrderShipment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **multiplyDownloadOrderShipment**
> multiplyDownloadOrderShipment($body)

Multiply download order shipments



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = "body_example"; // string | Order note object that should be updated.

try {
    $apiInstance->multiplyDownloadOrderShipment($body);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->multiplyDownloadOrderShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| Order note object that should be updated. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderShipmentPdfStream**
> orderShipmentPdfStream($number, $shipment_id)

Download order shipment pdf file in a stream



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number
$shipment_id = "shipment_id_example"; // string | Order shipment id

try {
    $apiInstance->orderShipmentPdfStream($number, $shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->orderShipmentPdfStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |
 **shipment_id** | **string**| Order shipment id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestDownloadOrderShipment**
> string requestDownloadOrderShipment($number, $shipment_id)

Request to download order shipment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number
$shipment_id = "shipment_id_example"; // string | Order shipment id

try {
    $result = $apiInstance->requestDownloadOrderShipment($number, $shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->requestDownloadOrderShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |
 **shipment_id** | **string**| Order shipment id |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showOrderShipment**
> \RackbeatApp\Client\Model\OrderShipment showOrderShipment($number, $shipment_id)

Show single order shipment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number
$shipment_id = "shipment_id_example"; // string | Order shipment id

try {
    $result = $apiInstance->showOrderShipment($number, $shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->showOrderShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |
 **shipment_id** | **string**| Order shipment id |

### Return type

[**\RackbeatApp\Client\Model\OrderShipment**](../Model/OrderShipment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showShipmentLine**
> \RackbeatApp\Client\Model\OrderShipmentLine showShipmentLine($number, $shipment_id, $shipment_line_id)

Show single shipment line



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number
$shipment_id = "shipment_id_example"; // string | Order shipment id
$shipment_line_id = "shipment_line_id_example"; // string | Order shipment line id

try {
    $result = $apiInstance->showShipmentLine($number, $shipment_id, $shipment_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->showShipmentLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |
 **shipment_id** | **string**| Order shipment id |
 **shipment_line_id** | **string**| Order shipment line id |

### Return type

[**\RackbeatApp\Client\Model\OrderShipmentLine**](../Model/OrderShipmentLine.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeOrderShipment**
> \RackbeatApp\Client\Model\OrderShipment storeOrderShipment($number)

Create new order shipment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number

try {
    $result = $apiInstance->storeOrderShipment($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->storeOrderShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |

### Return type

[**\RackbeatApp\Client\Model\OrderShipment**](../Model/OrderShipment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamDownloadSingleOrderShipment**
> streamDownloadSingleOrderShipment($shipment_id)

Download single order shipment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = "shipment_id_example"; // string | Order shipment id

try {
    $apiInstance->streamDownloadSingleOrderShipment($shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->streamDownloadSingleOrderShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| Order shipment id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

