# RackbeatApp\Client\SupplierInvoicesApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bookSupplierInvoice**](SupplierInvoicesApi.md#bookSupplierInvoice) | **POST** /supplier-invoices/{number}/book | Book supplier invoice
[**deleteSupplierInvoice**](SupplierInvoicesApi.md#deleteSupplierInvoice) | **DELETE** /supplier-invoices/{number} | Delete existing supplier invoice
[**deleteSupplierInvoiceNote**](SupplierInvoicesApi.md#deleteSupplierInvoiceNote) | **DELETE** /supplier-invoices/{number}/notes/{noteId} | Delete existing supplier invoice note
[**deleteSupplierInvoicePayment**](SupplierInvoicesApi.md#deleteSupplierInvoicePayment) | **DELETE** /supplier-invoices/{number}/payments/{paymentNumber} | Delete existing supplier invoice payment
[**draftSupplierInvoice**](SupplierInvoicesApi.md#draftSupplierInvoice) | **POST** /supplier-invoices/drafts | Create supplier invoice draft
[**indexSupplierInvoicePayments**](SupplierInvoicesApi.md#indexSupplierInvoicePayments) | **GET** /supplier-invoices/{number}/payments | Index supplier invoice payments
[**indexSupplierInvoices**](SupplierInvoicesApi.md#indexSupplierInvoices) | **GET** /supplier-invoices | Index supplier invoices
[**indexSupplierInvoicesNotes**](SupplierInvoicesApi.md#indexSupplierInvoicesNotes) | **GET** /supplier-invoices/{number}/notes | Index supplier invoices notes
[**showSupplierInvoice**](SupplierInvoicesApi.md#showSupplierInvoice) | **GET** /supplier-invoices/{number} | Show single supplier invoice
[**showSupplierInvoiceNote**](SupplierInvoicesApi.md#showSupplierInvoiceNote) | **GET** /supplier-invoices/{number}/notes/{noteId} | Show single supplier invoice note
[**showSupplierInvoicePayment**](SupplierInvoicesApi.md#showSupplierInvoicePayment) | **GET** /supplier-invoices/{number}/payments/{paymentNumber} | Show single supplier invoice payment
[**storeSupplierInvoice**](SupplierInvoicesApi.md#storeSupplierInvoice) | **POST** /supplier-invoices | Create new supplier invoice
[**storeSupplierInvoiceNote**](SupplierInvoicesApi.md#storeSupplierInvoiceNote) | **POST** /supplier-invoices/{number}/notes | Create new supplier invoice note
[**storeSupplierInvoicePayment**](SupplierInvoicesApi.md#storeSupplierInvoicePayment) | **POST** /supplier-invoices/{number}/payments | Create new supplier invoice payment
[**unbookSupplierInvoice**](SupplierInvoicesApi.md#unbookSupplierInvoice) | **POST** /supplier-invoices/{number}/unbook | Unbook supplier invoice
[**updateSupplierInvoice**](SupplierInvoicesApi.md#updateSupplierInvoice) | **PUT** /supplier-invoices/{number} | Update existing supplier invoice
[**updateSupplierInvoiceNote**](SupplierInvoicesApi.md#updateSupplierInvoiceNote) | **PUT** /supplier-invoices/{number}/notes/{noteId} | Update existing supplier invoice note
[**updateSupplierInvoicePayment**](SupplierInvoicesApi.md#updateSupplierInvoicePayment) | **PUT** /supplier-invoices/{number}/payments/{paymentNumber} | Update existing supplier invoice payment


# **bookSupplierInvoice**
> \RackbeatApp\Client\Model\InlineResponse2001 bookSupplierInvoice($number)

Book supplier invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier invoice number

try {
    $result = $apiInstance->bookSupplierInvoice($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesApi->bookSupplierInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier invoice number |

### Return type

[**\RackbeatApp\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSupplierInvoice**
> deleteSupplierInvoice($number)

Delete existing supplier invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier invoice number

try {
    $apiInstance->deleteSupplierInvoice($number);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesApi->deleteSupplierInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier invoice number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSupplierInvoiceNote**
> deleteSupplierInvoiceNote($number, $note_id)

Delete existing supplier invoice note



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier invoice number
$note_id = "note_id_example"; // string | Supplier invoice id

try {
    $apiInstance->deleteSupplierInvoiceNote($number, $note_id);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesApi->deleteSupplierInvoiceNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier invoice number |
 **note_id** | **string**| Supplier invoice id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSupplierInvoicePayment**
> deleteSupplierInvoicePayment($number, $payment_number)

Delete existing supplier invoice payment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier invoice number
$payment_number = "payment_number_example"; // string | Supplier invoice payment number

try {
    $apiInstance->deleteSupplierInvoicePayment($number, $payment_number);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesApi->deleteSupplierInvoicePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier invoice number |
 **payment_number** | **string**| Supplier invoice payment number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **draftSupplierInvoice**
> \RackbeatApp\Client\Model\InlineResponse2001 draftSupplierInvoice($body)

Create supplier invoice draft



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \RackbeatApp\Client\Model\Body2(); // \RackbeatApp\Client\Model\Body2 | Supplier invoice object that should be drafted.

try {
    $result = $apiInstance->draftSupplierInvoice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesApi->draftSupplierInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RackbeatApp\Client\Model\Body2**](../Model/Body2.md)| Supplier invoice object that should be drafted. |

### Return type

[**\RackbeatApp\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexSupplierInvoicePayments**
> \RackbeatApp\Client\Model\SupplierInvoicePaymentList indexSupplierInvoicePayments($number)

Index supplier invoice payments



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier invoice number

try {
    $result = $apiInstance->indexSupplierInvoicePayments($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesApi->indexSupplierInvoicePayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier invoice number |

### Return type

[**\RackbeatApp\Client\Model\SupplierInvoicePaymentList**](../Model/SupplierInvoicePaymentList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexSupplierInvoices**
> \RackbeatApp\Client\Model\InlineResponse2061 indexSupplierInvoices($is_paid, $is_booked, $search, $supplier_number, $purchase_order_number)

Index supplier invoices



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_paid = "is_paid_example"; // string | Filter by paid status
$is_booked = "is_booked_example"; // string | Filter by booked status
$search = "search_example"; // string | Search in numbers
$supplier_number = "supplier_number_example"; // string | Filter by supplier number
$purchase_order_number = "purchase_order_number_example"; // string | Filter by purchase order number

try {
    $result = $apiInstance->indexSupplierInvoices($is_paid, $is_booked, $search, $supplier_number, $purchase_order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesApi->indexSupplierInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_paid** | **string**| Filter by paid status | [optional]
 **is_booked** | **string**| Filter by booked status | [optional]
 **search** | **string**| Search in numbers | [optional]
 **supplier_number** | **string**| Filter by supplier number | [optional]
 **purchase_order_number** | **string**| Filter by purchase order number | [optional]

### Return type

[**\RackbeatApp\Client\Model\InlineResponse2061**](../Model/InlineResponse2061.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexSupplierInvoicesNotes**
> \RackbeatApp\Client\Model\NoteList indexSupplierInvoicesNotes($number)

Index supplier invoices notes



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier invoice number

try {
    $result = $apiInstance->indexSupplierInvoicesNotes($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesApi->indexSupplierInvoicesNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier invoice number |

### Return type

[**\RackbeatApp\Client\Model\NoteList**](../Model/NoteList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showSupplierInvoice**
> \RackbeatApp\Client\Model\InlineResponse2001 showSupplierInvoice($number)

Show single supplier invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier invoice number

try {
    $result = $apiInstance->showSupplierInvoice($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesApi->showSupplierInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier invoice number |

### Return type

[**\RackbeatApp\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showSupplierInvoiceNote**
> \RackbeatApp\Client\Model\Note showSupplierInvoiceNote($number, $note_id)

Show single supplier invoice note



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier invoice number
$note_id = "note_id_example"; // string | Supplier invoice id

try {
    $result = $apiInstance->showSupplierInvoiceNote($number, $note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesApi->showSupplierInvoiceNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier invoice number |
 **note_id** | **string**| Supplier invoice id |

### Return type

[**\RackbeatApp\Client\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showSupplierInvoicePayment**
> \RackbeatApp\Client\Model\SupplierInvoicePayment showSupplierInvoicePayment($number, $payment_number)

Show single supplier invoice payment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier invoice number
$payment_number = "payment_number_example"; // string | Supplier invoice payment number

try {
    $result = $apiInstance->showSupplierInvoicePayment($number, $payment_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesApi->showSupplierInvoicePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier invoice number |
 **payment_number** | **string**| Supplier invoice payment number |

### Return type

[**\RackbeatApp\Client\Model\SupplierInvoicePayment**](../Model/SupplierInvoicePayment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeSupplierInvoice**
> \RackbeatApp\Client\Model\InlineResponse2001 storeSupplierInvoice($body)

Create new supplier invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \RackbeatApp\Client\Model\Body2(); // \RackbeatApp\Client\Model\Body2 | Supplier invoice object that should be created.

try {
    $result = $apiInstance->storeSupplierInvoice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesApi->storeSupplierInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RackbeatApp\Client\Model\Body2**](../Model/Body2.md)| Supplier invoice object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeSupplierInvoiceNote**
> \RackbeatApp\Client\Model\Note storeSupplierInvoiceNote($number, $body)

Create new supplier invoice note



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier invoice number
$body = new \RackbeatApp\Client\Model\NoteForm(); // \RackbeatApp\Client\Model\NoteForm | Supplier invoice object that should be created.

try {
    $result = $apiInstance->storeSupplierInvoiceNote($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesApi->storeSupplierInvoiceNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier invoice number |
 **body** | [**\RackbeatApp\Client\Model\NoteForm**](../Model/NoteForm.md)| Supplier invoice object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeSupplierInvoicePayment**
> \RackbeatApp\Client\Model\SupplierInvoicePayment storeSupplierInvoicePayment($number, $body)

Create new supplier invoice payment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier invoice number
$body = new \RackbeatApp\Client\Model\SupplierInvoicePaymentForm(); // \RackbeatApp\Client\Model\SupplierInvoicePaymentForm | Supplier invoice payment object that should be created.

try {
    $result = $apiInstance->storeSupplierInvoicePayment($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesApi->storeSupplierInvoicePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier invoice number |
 **body** | [**\RackbeatApp\Client\Model\SupplierInvoicePaymentForm**](../Model/SupplierInvoicePaymentForm.md)| Supplier invoice payment object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\SupplierInvoicePayment**](../Model/SupplierInvoicePayment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unbookSupplierInvoice**
> \RackbeatApp\Client\Model\InlineResponse2001 unbookSupplierInvoice($number)

Unbook supplier invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier invoice number

try {
    $result = $apiInstance->unbookSupplierInvoice($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesApi->unbookSupplierInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier invoice number |

### Return type

[**\RackbeatApp\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSupplierInvoice**
> \RackbeatApp\Client\Model\InlineResponse2001 updateSupplierInvoice($number, $body)

Update existing supplier invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier invoice number
$body = new \RackbeatApp\Client\Model\Body2(); // \RackbeatApp\Client\Model\Body2 | Supplier invoice object that should be updated.

try {
    $result = $apiInstance->updateSupplierInvoice($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesApi->updateSupplierInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier invoice number |
 **body** | [**\RackbeatApp\Client\Model\Body2**](../Model/Body2.md)| Supplier invoice object that should be updated. |

### Return type

[**\RackbeatApp\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSupplierInvoiceNote**
> \RackbeatApp\Client\Model\Note updateSupplierInvoiceNote($number, $note_id, $body)

Update existing supplier invoice note



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier invoice number
$note_id = "note_id_example"; // string | Supplier invoice id
$body = new \RackbeatApp\Client\Model\NoteForm(); // \RackbeatApp\Client\Model\NoteForm | Supplier invoice object that should be updated.

try {
    $result = $apiInstance->updateSupplierInvoiceNote($number, $note_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesApi->updateSupplierInvoiceNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier invoice number |
 **note_id** | **string**| Supplier invoice id |
 **body** | [**\RackbeatApp\Client\Model\NoteForm**](../Model/NoteForm.md)| Supplier invoice object that should be updated. |

### Return type

[**\RackbeatApp\Client\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSupplierInvoicePayment**
> \RackbeatApp\Client\Model\SupplierInvoicePayment updateSupplierInvoicePayment($number, $payment_number, $body)

Update existing supplier invoice payment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\SupplierInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Supplier invoice number
$payment_number = "payment_number_example"; // string | Supplier invoice payment number
$body = new \RackbeatApp\Client\Model\SupplierInvoicePaymentForm(); // \RackbeatApp\Client\Model\SupplierInvoicePaymentForm | Supplier invoice payment object that should be updated.

try {
    $result = $apiInstance->updateSupplierInvoicePayment($number, $payment_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierInvoicesApi->updateSupplierInvoicePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Supplier invoice number |
 **payment_number** | **string**| Supplier invoice payment number |
 **body** | [**\RackbeatApp\Client\Model\SupplierInvoicePaymentForm**](../Model/SupplierInvoicePaymentForm.md)| Supplier invoice payment object that should be updated. |

### Return type

[**\RackbeatApp\Client\Model\SupplierInvoicePayment**](../Model/SupplierInvoicePayment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

