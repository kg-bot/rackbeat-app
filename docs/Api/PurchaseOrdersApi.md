# Swagger\Client\PurchaseOrdersApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPurchaseOrdersInvoice**](PurchaseOrdersApi.md#createPurchaseOrdersInvoice) | **POST** /purchase-orders/{number}/create-invoice | Create purchase order invoice
[**deletePurchaseOrder**](PurchaseOrdersApi.md#deletePurchaseOrder) | **DELETE** /purchase-orders/{number} | Delete existing purchase order
[**deletePurchaseOrderNote**](PurchaseOrdersApi.md#deletePurchaseOrderNote) | **DELETE** /purchase-orders/{number}/notes/{noteNumber} | Delete existing purchase order note
[**deletePurchaseOrderReceipt**](PurchaseOrdersApi.md#deletePurchaseOrderReceipt) | **DELETE** /purchase-orders/{number}/receipts/{receiptNumber} | Delete existing purchase order receipt
[**deletePurchaseOrderReceiptLine**](PurchaseOrdersApi.md#deletePurchaseOrderReceiptLine) | **DELETE** /purchase-orders/{number}/receipts/{receiptNumber}/lines/{lineNumber} | Delete existing purchase order receipt line
[**downloadPurchaseOrdersPdfFile**](PurchaseOrdersApi.md#downloadPurchaseOrdersPdfFile) | **GET** /purchase-orders/{number}.pdf | Download  purchase orders pdf file
[**indexPurchaseOrderNote**](PurchaseOrdersApi.md#indexPurchaseOrderNote) | **GET** /purchase-orders/{number}/notes | Index purchase order note
[**indexPurchaseOrders**](PurchaseOrdersApi.md#indexPurchaseOrders) | **GET** /purchase-orders | Index purchase orders
[**indexPurchaseOrdersReceiptLines**](PurchaseOrdersApi.md#indexPurchaseOrdersReceiptLines) | **GET** /purchase-orders/{number}/receipts/{receiptNumber}/lines | Index purchase orders receipt lines
[**indexPurchaseOrdersReceipts**](PurchaseOrdersApi.md#indexPurchaseOrdersReceipts) | **GET** /purchase-orders/{number}/receipts | Index purchase orders receipts
[**purchaseOrderReceiptsFiltered**](PurchaseOrdersApi.md#purchaseOrderReceiptsFiltered) | **GET** /purchase-order-receipts | Filtered index purchase orders receipts
[**purchaseOrderReceiptsNumberGet**](PurchaseOrdersApi.md#purchaseOrderReceiptsNumberGet) | **GET** /purchase-order-receipts/{number} | Get receipt by number
[**purchaseOrdersBook**](PurchaseOrdersApi.md#purchaseOrdersBook) | **POST** /purchase-orders/{number}/book | Mark order as booked
[**purchaseOrdersConvertToInvoice**](PurchaseOrdersApi.md#purchaseOrdersConvertToInvoice) | **POST** /purchase-orders/{number}/convert-to-invoice | Convert purchase order to invoice
[**purchaseOrdersCreateReceipt**](PurchaseOrdersApi.md#purchaseOrdersCreateReceipt) | **POST** /purchase-orders/{number}/create-receipt | Receipt creation
[**purchaseOrdersNumberReceiptsReceiptNumberMarkReceivedPost**](PurchaseOrdersApi.md#purchaseOrdersNumberReceiptsReceiptNumberMarkReceivedPost) | **POST** /purchase-orders/{number}/receipts/{receiptNumber}/mark-received | Mark receipt as received
[**purchaseOrdersSemdMail**](PurchaseOrdersApi.md#purchaseOrdersSemdMail) | **POST** /purchase-orders/{number}/send-mail | Send mail to supplier
[**purchaseOrdersUnbook**](PurchaseOrdersApi.md#purchaseOrdersUnbook) | **POST** /purchase-orders/{number}/unbook | Mark order as unbooked
[**purchaseOrdersUninvoicedLines**](PurchaseOrdersApi.md#purchaseOrdersUninvoicedLines) | **GET** /purchase-orders/{number}/uninvoiced-lines | Get uninvoiced lines
[**reatePurchaseOrderDraft**](PurchaseOrdersApi.md#reatePurchaseOrderDraft) | **POST** /purchase-orders/drafts | Create purchase order draft
[**showPurchaseOrder**](PurchaseOrdersApi.md#showPurchaseOrder) | **GET** /purchase-orders/{number} | Show single purchase order
[**showPurchaseOrderNote**](PurchaseOrdersApi.md#showPurchaseOrderNote) | **GET** /purchase-orders/{number}/notes/{noteNumber} | Show single purchase order note
[**showPurchaseOrderReceipt**](PurchaseOrdersApi.md#showPurchaseOrderReceipt) | **GET** /purchase-orders/{number}/receipts/{receiptNumber} | Show single purchase order receipt
[**showPurchaseordersreceiptlines**](PurchaseOrdersApi.md#showPurchaseordersreceiptlines) | **GET** /purchase-orders/{number}/receipts/{receiptNumber}/lines/{lineNumber} | Show single purchase order receipt line
[**storePurchaseOrder**](PurchaseOrdersApi.md#storePurchaseOrder) | **POST** /purchase-orders | Create new purchase order
[**storePurchaseOrderNote**](PurchaseOrdersApi.md#storePurchaseOrderNote) | **POST** /purchase-orders/{number}/notes | Create new purchase order note
[**storePurchaseOrderReceiptLines**](PurchaseOrdersApi.md#storePurchaseOrderReceiptLines) | **POST** /purchase-orders/{number}/receipts/{receiptNumber}/lines | Create new purchase order receipt line
[**updatePurchaseOrder**](PurchaseOrdersApi.md#updatePurchaseOrder) | **PUT** /purchase-orders/{number} | Update existing purchase order
[**updatePurchaseOrderNote**](PurchaseOrdersApi.md#updatePurchaseOrderNote) | **PUT** /purchase-orders/{number}/notes/{noteNumber} | Update existing purchase order note
[**updatePurchaseordersreceiptlines**](PurchaseOrdersApi.md#updatePurchaseordersreceiptlines) | **PUT** /purchase-orders/{number}/receipts/{receiptNumber}/lines/{lineNumber} | Update existing purchaseordersreceiptlines


# **createPurchaseOrdersInvoice**
> \Swagger\Client\Model\SupplierInvoice createPurchaseOrdersInvoice($number, $body)

Create purchase order invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number
$body = new \Swagger\Client\Model\InvoiceForm(); // \Swagger\Client\Model\InvoiceForm | Invoice object that should be created.

try {
    $result = $apiInstance->createPurchaseOrdersInvoice($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->createPurchaseOrdersInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |
 **body** | [**\Swagger\Client\Model\InvoiceForm**](../Model/InvoiceForm.md)| Invoice object that should be created. |

### Return type

[**\Swagger\Client\Model\SupplierInvoice**](../Model/SupplierInvoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePurchaseOrder**
> deletePurchaseOrder($number)

Delete existing purchase order



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number

try {
    $apiInstance->deletePurchaseOrder($number);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->deletePurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePurchaseOrderNote**
> deletePurchaseOrderNote($number, $note_number)

Delete existing purchase order note



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number
$note_number = "note_number_example"; // string | Purchase Order Note number

try {
    $apiInstance->deletePurchaseOrderNote($number, $note_number);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->deletePurchaseOrderNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |
 **note_number** | **string**| Purchase Order Note number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePurchaseOrderReceipt**
> deletePurchaseOrderReceipt($number, $receipt_number)

Delete existing purchase order receipt



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number
$receipt_number = "receipt_number_example"; // string | Purchase order receipt number

try {
    $apiInstance->deletePurchaseOrderReceipt($number, $receipt_number);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->deletePurchaseOrderReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |
 **receipt_number** | **string**| Purchase order receipt number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePurchaseOrderReceiptLine**
> deletePurchaseOrderReceiptLine($number, $receipt_number, $line_number)

Delete existing purchase order receipt line



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number
$receipt_number = "receipt_number_example"; // string | Purchase order receipt number
$line_number = "line_number_example"; // string | Purchase order receipt line number

try {
    $apiInstance->deletePurchaseOrderReceiptLine($number, $receipt_number, $line_number);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->deletePurchaseOrderReceiptLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |
 **receipt_number** | **string**| Purchase order receipt number |
 **line_number** | **string**| Purchase order receipt line number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadPurchaseOrdersPdfFile**
> downloadPurchaseOrdersPdfFile($number)

Download  purchase orders pdf file



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number

try {
    $apiInstance->downloadPurchaseOrdersPdfFile($number);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->downloadPurchaseOrdersPdfFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexPurchaseOrderNote**
> \Swagger\Client\Model\PurchaseOrderNoteList indexPurchaseOrderNote($number)

Index purchase order note



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number

try {
    $result = $apiInstance->indexPurchaseOrderNote($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->indexPurchaseOrderNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |

### Return type

[**\Swagger\Client\Model\PurchaseOrderNoteList**](../Model/PurchaseOrderNoteList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexPurchaseOrders**
> \Swagger\Client\Model\PurchaseOrdersList indexPurchaseOrders($is_booked, $is_delivered)

Index purchase orders



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_booked = "is_booked_example"; // string | Filter by booking status
$is_delivered = "is_delivered_example"; // string | Filter by delivery status

try {
    $result = $apiInstance->indexPurchaseOrders($is_booked, $is_delivered);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->indexPurchaseOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_booked** | **string**| Filter by booking status | [optional]
 **is_delivered** | **string**| Filter by delivery status | [optional]

### Return type

[**\Swagger\Client\Model\PurchaseOrdersList**](../Model/PurchaseOrdersList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexPurchaseOrdersReceiptLines**
> \Swagger\Client\Model\PurchaseOrderReceiptLinesList indexPurchaseOrdersReceiptLines($number, $receipt_number)

Index purchase orders receipt lines



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number
$receipt_number = "receipt_number_example"; // string | Purchase order receipt number

try {
    $result = $apiInstance->indexPurchaseOrdersReceiptLines($number, $receipt_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->indexPurchaseOrdersReceiptLines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |
 **receipt_number** | **string**| Purchase order receipt number |

### Return type

[**\Swagger\Client\Model\PurchaseOrderReceiptLinesList**](../Model/PurchaseOrderReceiptLinesList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexPurchaseOrdersReceipts**
> \Swagger\Client\Model\PurchaseOrderReceiptsList indexPurchaseOrdersReceipts($number)

Index purchase orders receipts



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number

try {
    $result = $apiInstance->indexPurchaseOrdersReceipts($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->indexPurchaseOrdersReceipts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |

### Return type

[**\Swagger\Client\Model\PurchaseOrderReceiptsList**](../Model/PurchaseOrderReceiptsList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderReceiptsFiltered**
> \Swagger\Client\Model\PurchaseOrderReceiptsList purchaseOrderReceiptsFiltered($is_received, $location, $search, $supplier_number, $purchase_order_number)

Filtered index purchase orders receipts



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_received = true; // bool | Filter by received receipts
$location = "location_example"; // string | Filter by location
$search = "search_example"; // string | Filter by serach query
$supplier_number = "supplier_number_example"; // string | Filter by supplier number
$purchase_order_number = "purchase_order_number_example"; // string | Filter by purchase order number

try {
    $result = $apiInstance->purchaseOrderReceiptsFiltered($is_received, $location, $search, $supplier_number, $purchase_order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrderReceiptsFiltered: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_received** | **bool**| Filter by received receipts | [optional]
 **location** | **string**| Filter by location | [optional]
 **search** | **string**| Filter by serach query | [optional]
 **supplier_number** | **string**| Filter by supplier number | [optional]
 **purchase_order_number** | **string**| Filter by purchase order number | [optional]

### Return type

[**\Swagger\Client\Model\PurchaseOrderReceiptsList**](../Model/PurchaseOrderReceiptsList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderReceiptsNumberGet**
> \Swagger\Client\Model\PurchaseOrderReceipt purchaseOrderReceiptsNumberGet($number)

Get receipt by number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order receipt number

try {
    $result = $apiInstance->purchaseOrderReceiptsNumberGet($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrderReceiptsNumberGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order receipt number |

### Return type

[**\Swagger\Client\Model\PurchaseOrderReceipt**](../Model/PurchaseOrderReceipt.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrdersBook**
> \Swagger\Client\Model\PurchaseOrder purchaseOrdersBook($number)

Mark order as booked



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number

try {
    $result = $apiInstance->purchaseOrdersBook($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrdersBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |

### Return type

[**\Swagger\Client\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrdersConvertToInvoice**
> \Swagger\Client\Model\InlineResponse2008 purchaseOrdersConvertToInvoice($number)

Convert purchase order to invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number

try {
    $result = $apiInstance->purchaseOrdersConvertToInvoice($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrdersConvertToInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrdersCreateReceipt**
> \Swagger\Client\Model\PurchaseOrderReceipt purchaseOrdersCreateReceipt($number)

Receipt creation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number

try {
    $result = $apiInstance->purchaseOrdersCreateReceipt($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrdersCreateReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |

### Return type

[**\Swagger\Client\Model\PurchaseOrderReceipt**](../Model/PurchaseOrderReceipt.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrdersNumberReceiptsReceiptNumberMarkReceivedPost**
> \Swagger\Client\Model\PurchaseOrderReceipt purchaseOrdersNumberReceiptsReceiptNumberMarkReceivedPost($number, $receipt_number)

Mark receipt as received

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number
$receipt_number = "receipt_number_example"; // string | Purchase order receipt number

try {
    $result = $apiInstance->purchaseOrdersNumberReceiptsReceiptNumberMarkReceivedPost($number, $receipt_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrdersNumberReceiptsReceiptNumberMarkReceivedPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |
 **receipt_number** | **string**| Purchase order receipt number |

### Return type

[**\Swagger\Client\Model\PurchaseOrderReceipt**](../Model/PurchaseOrderReceipt.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrdersSemdMail**
> \Swagger\Client\Model\PurchaseOrder purchaseOrdersSemdMail($number)

Send mail to supplier



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number

try {
    $result = $apiInstance->purchaseOrdersSemdMail($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrdersSemdMail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |

### Return type

[**\Swagger\Client\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrdersUnbook**
> \Swagger\Client\Model\PurchaseOrder purchaseOrdersUnbook($number)

Mark order as unbooked



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number

try {
    $result = $apiInstance->purchaseOrdersUnbook($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrdersUnbook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |

### Return type

[**\Swagger\Client\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrdersUninvoicedLines**
> \Swagger\Client\Model\PurchaseOrderUninvoicedLines purchaseOrdersUninvoicedLines($number)

Get uninvoiced lines



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number

try {
    $result = $apiInstance->purchaseOrdersUninvoicedLines($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrdersUninvoicedLines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |

### Return type

[**\Swagger\Client\Model\PurchaseOrderUninvoicedLines**](../Model/PurchaseOrderUninvoicedLines.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reatePurchaseOrderDraft**
> \Swagger\Client\Model\PurchaseOrder reatePurchaseOrderDraft($body)

Create purchase order draft



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PurchaseOrderForm(); // \Swagger\Client\Model\PurchaseOrderForm | 

try {
    $result = $apiInstance->reatePurchaseOrderDraft($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->reatePurchaseOrderDraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PurchaseOrderForm**](../Model/PurchaseOrderForm.md)|  |

### Return type

[**\Swagger\Client\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showPurchaseOrder**
> \Swagger\Client\Model\PurchaseOrder showPurchaseOrder($number)

Show single purchase order



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number

try {
    $result = $apiInstance->showPurchaseOrder($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->showPurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |

### Return type

[**\Swagger\Client\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showPurchaseOrderNote**
> \Swagger\Client\Model\PurchaseOrderNote showPurchaseOrderNote($number, $note_number)

Show single purchase order note



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number
$note_number = "note_number_example"; // string | Purchase Order Note number

try {
    $result = $apiInstance->showPurchaseOrderNote($number, $note_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->showPurchaseOrderNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |
 **note_number** | **string**| Purchase Order Note number |

### Return type

[**\Swagger\Client\Model\PurchaseOrderNote**](../Model/PurchaseOrderNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showPurchaseOrderReceipt**
> \Swagger\Client\Model\PurchaseOrderReceipt showPurchaseOrderReceipt($number, $receipt_number)

Show single purchase order receipt



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number
$receipt_number = "receipt_number_example"; // string | Purchase order receipt number

try {
    $result = $apiInstance->showPurchaseOrderReceipt($number, $receipt_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->showPurchaseOrderReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |
 **receipt_number** | **string**| Purchase order receipt number |

### Return type

[**\Swagger\Client\Model\PurchaseOrderReceipt**](../Model/PurchaseOrderReceipt.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showPurchaseordersreceiptlines**
> \Swagger\Client\Model\PurchaseOrderReceiptLine showPurchaseordersreceiptlines($number, $receipt_number, $line_number)

Show single purchase order receipt line



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number
$receipt_number = "receipt_number_example"; // string | Purchase order receipt number
$line_number = "line_number_example"; // string | Purchase order receipt line number

try {
    $result = $apiInstance->showPurchaseordersreceiptlines($number, $receipt_number, $line_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->showPurchaseordersreceiptlines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |
 **receipt_number** | **string**| Purchase order receipt number |
 **line_number** | **string**| Purchase order receipt line number |

### Return type

[**\Swagger\Client\Model\PurchaseOrderReceiptLine**](../Model/PurchaseOrderReceiptLine.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storePurchaseOrder**
> \Swagger\Client\Model\PurchaseOrder storePurchaseOrder($body)

Create new purchase order



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PurchaseOrderForm(); // \Swagger\Client\Model\PurchaseOrderForm | Purchase order object that should be created.

try {
    $result = $apiInstance->storePurchaseOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->storePurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PurchaseOrderForm**](../Model/PurchaseOrderForm.md)| Purchase order object that should be created. |

### Return type

[**\Swagger\Client\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storePurchaseOrderNote**
> \Swagger\Client\Model\PurchaseOrderNote storePurchaseOrderNote($number, $body)

Create new purchase order note



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number
$body = new \Swagger\Client\Model\PurchaseOrderNoteForm(); // \Swagger\Client\Model\PurchaseOrderNoteForm | Purchase order note object that should be created.

try {
    $result = $apiInstance->storePurchaseOrderNote($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->storePurchaseOrderNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |
 **body** | [**\Swagger\Client\Model\PurchaseOrderNoteForm**](../Model/PurchaseOrderNoteForm.md)| Purchase order note object that should be created. |

### Return type

[**\Swagger\Client\Model\PurchaseOrderNote**](../Model/PurchaseOrderNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storePurchaseOrderReceiptLines**
> \Swagger\Client\Model\PurchaseOrderReceiptLine storePurchaseOrderReceiptLines($number, $receipt_number, $body)

Create new purchase order receipt line



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number
$receipt_number = "receipt_number_example"; // string | Purchase order receipt number
$body = new \Swagger\Client\Model\PurchaseOrdersReceiptLineForm(); // \Swagger\Client\Model\PurchaseOrdersReceiptLineForm | Purchase order receipt line object that should be created.

try {
    $result = $apiInstance->storePurchaseOrderReceiptLines($number, $receipt_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->storePurchaseOrderReceiptLines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |
 **receipt_number** | **string**| Purchase order receipt number |
 **body** | [**\Swagger\Client\Model\PurchaseOrdersReceiptLineForm**](../Model/PurchaseOrdersReceiptLineForm.md)| Purchase order receipt line object that should be created. |

### Return type

[**\Swagger\Client\Model\PurchaseOrderReceiptLine**](../Model/PurchaseOrderReceiptLine.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePurchaseOrder**
> \Swagger\Client\Model\PurchaseOrder updatePurchaseOrder($number, $body)

Update existing purchase order



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number
$body = new \Swagger\Client\Model\PurchaseOrderForm(); // \Swagger\Client\Model\PurchaseOrderForm | Purchase order object that should be updated.

try {
    $result = $apiInstance->updatePurchaseOrder($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->updatePurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |
 **body** | [**\Swagger\Client\Model\PurchaseOrderForm**](../Model/PurchaseOrderForm.md)| Purchase order object that should be updated. |

### Return type

[**\Swagger\Client\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePurchaseOrderNote**
> \Swagger\Client\Model\PurchaseOrderNote updatePurchaseOrderNote($number, $note_number, $body)

Update existing purchase order note



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number
$note_number = "note_number_example"; // string | Purchase Order Note number
$body = new \Swagger\Client\Model\PurchaseOrderNoteForm(); // \Swagger\Client\Model\PurchaseOrderNoteForm | Purchase order note object that should be created.

try {
    $result = $apiInstance->updatePurchaseOrderNote($number, $note_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->updatePurchaseOrderNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |
 **note_number** | **string**| Purchase Order Note number |
 **body** | [**\Swagger\Client\Model\PurchaseOrderNoteForm**](../Model/PurchaseOrderNoteForm.md)| Purchase order note object that should be created. |

### Return type

[**\Swagger\Client\Model\PurchaseOrderNote**](../Model/PurchaseOrderNote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePurchaseordersreceiptlines**
> \Swagger\Client\Model\PurchaseOrderReceiptLine updatePurchaseordersreceiptlines($number, $receipt_number, $line_number, $body)

Update existing purchaseordersreceiptlines



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Purchase order number
$receipt_number = "receipt_number_example"; // string | Purchase order receipt number
$line_number = "line_number_example"; // string | Purchase order receipt line number
$body = new \Swagger\Client\Model\PurchaseOrderReceiptLine(); // \Swagger\Client\Model\PurchaseOrderReceiptLine | Purchase order receipt line object that should be updated.

try {
    $result = $apiInstance->updatePurchaseordersreceiptlines($number, $receipt_number, $line_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->updatePurchaseordersreceiptlines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Purchase order number |
 **receipt_number** | **string**| Purchase order receipt number |
 **line_number** | **string**| Purchase order receipt line number |
 **body** | [**\Swagger\Client\Model\PurchaseOrderReceiptLine**](../Model/PurchaseOrderReceiptLine.md)| Purchase order receipt line object that should be updated. |

### Return type

[**\Swagger\Client\Model\PurchaseOrderReceiptLine**](../Model/PurchaseOrderReceiptLine.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

