# Swagger\Client\CustomerInvoicesApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bookCustomerInvoice**](CustomerInvoicesApi.md#bookCustomerInvoice) | **POST** /customer-invoices/{number}/book | Book customer invoice
[**deleteCustomerInvoice**](CustomerInvoicesApi.md#deleteCustomerInvoice) | **DELETE** /customer-invoices/{number} | Delete existing customer invoice
[**deleteCustomerInvoiceNote**](CustomerInvoicesApi.md#deleteCustomerInvoiceNote) | **DELETE** /customer-invoices/{number}/notes/{noteId} | Delete existing customer invoice note
[**deleteCustomerInvoicePayment**](CustomerInvoicesApi.md#deleteCustomerInvoicePayment) | **DELETE** /customer-invoices/{number}/payments/{paymentNumber} | Delete existing customer invoice payment
[**draftCustomerInvoice**](CustomerInvoicesApi.md#draftCustomerInvoice) | **POST** /customer-invoices/drafts | Create customer invoice draft
[**indexCustomerInvoicePayments**](CustomerInvoicesApi.md#indexCustomerInvoicePayments) | **GET** /customer-invoices/{number}/payments | Index customer invoice payments
[**indexCustomerInvoices**](CustomerInvoicesApi.md#indexCustomerInvoices) | **GET** /customer-invoices | Index customer invoices
[**indexCustomerInvoicesNotes**](CustomerInvoicesApi.md#indexCustomerInvoicesNotes) | **GET** /customer-invoices/{number}/notes | Index customer invoices notes
[**showCustomerInvoice**](CustomerInvoicesApi.md#showCustomerInvoice) | **GET** /customer-invoices/{number} | Show single customer invoice
[**showCustomerInvoiceNote**](CustomerInvoicesApi.md#showCustomerInvoiceNote) | **GET** /customer-invoices/{number}/notes/{noteId} | Show single customer invoice note
[**showCustomerInvoicePayment**](CustomerInvoicesApi.md#showCustomerInvoicePayment) | **GET** /customer-invoices/{number}/payments/{paymentNumber} | Show single customer invoice payment
[**storeCustomerInvoice**](CustomerInvoicesApi.md#storeCustomerInvoice) | **POST** /customer-invoices | Create new customer invoice
[**storeCustomerInvoiceNote**](CustomerInvoicesApi.md#storeCustomerInvoiceNote) | **POST** /customer-invoices/{number}/notes | Create new customer invoice note
[**storeCustomerInvoicePayment**](CustomerInvoicesApi.md#storeCustomerInvoicePayment) | **POST** /customer-invoices/{number}/payments | Create new customer invoice payment
[**unbookCustomerInvoice**](CustomerInvoicesApi.md#unbookCustomerInvoice) | **POST** /customer-invoices/{number}/unbook | Unbook customer invoice
[**updateCustomerInvoice**](CustomerInvoicesApi.md#updateCustomerInvoice) | **PUT** /customer-invoices/{number} | Update existing customer invoice
[**updateCustomerInvoiceNote**](CustomerInvoicesApi.md#updateCustomerInvoiceNote) | **PUT** /customer-invoices/{number}/notes/{noteId} | Update existing customer invoice note
[**updateCustomerInvoicePayment**](CustomerInvoicesApi.md#updateCustomerInvoicePayment) | **PUT** /customer-invoices/{number}/payments/{paymentNumber} | Update existing customer invoice payment


# **bookCustomerInvoice**
> bookCustomerInvoice($number)

Book customer invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer invoice number

try {
    $apiInstance->bookCustomerInvoice($number);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesApi->bookCustomerInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer invoice number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomerInvoice**
> deleteCustomerInvoice($number)

Delete existing customer invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer invoice number

try {
    $apiInstance->deleteCustomerInvoice($number);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesApi->deleteCustomerInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer invoice number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomerInvoiceNote**
> deleteCustomerInvoiceNote($number, $note_id)

Delete existing customer invoice note



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer invoice number
$note_id = "note_id_example"; // string | Customer invoice id

try {
    $apiInstance->deleteCustomerInvoiceNote($number, $note_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesApi->deleteCustomerInvoiceNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer invoice number |
 **note_id** | **string**| Customer invoice id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomerInvoicePayment**
> deleteCustomerInvoicePayment($number, $payment_number)

Delete existing customer invoice payment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer invoice number
$payment_number = "payment_number_example"; // string | Customer invoice payment number

try {
    $apiInstance->deleteCustomerInvoicePayment($number, $payment_number);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesApi->deleteCustomerInvoicePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer invoice number |
 **payment_number** | **string**| Customer invoice payment number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **draftCustomerInvoice**
> \Swagger\Client\Model\CustomerInvoice draftCustomerInvoice($body)

Create customer invoice draft



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CustomerInvoiceForm(); // \Swagger\Client\Model\CustomerInvoiceForm | Customer invoice object that should be drafted.

try {
    $result = $apiInstance->draftCustomerInvoice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesApi->draftCustomerInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerInvoiceForm**](../Model/CustomerInvoiceForm.md)| Customer invoice object that should be drafted. |

### Return type

[**\Swagger\Client\Model\CustomerInvoice**](../Model/CustomerInvoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexCustomerInvoicePayments**
> \Swagger\Client\Model\CustomerInvoicePaymentList indexCustomerInvoicePayments($number)

Index customer invoice payments



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer invoice number

try {
    $result = $apiInstance->indexCustomerInvoicePayments($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesApi->indexCustomerInvoicePayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer invoice number |

### Return type

[**\Swagger\Client\Model\CustomerInvoicePaymentList**](../Model/CustomerInvoicePaymentList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexCustomerInvoices**
> \Swagger\Client\Model\CustomerInvoiceList indexCustomerInvoices($is_paid, $is_booked, $order_number, $customer_number, $search)

Index customer invoices



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_paid = "is_paid_example"; // string | Filter by paid status
$is_booked = "is_booked_example"; // string | Filter by booked status
$order_number = "order_number_example"; // string | Filter by order number
$customer_number = "customer_number_example"; // string | Filter by customer number
$search = "search_example"; // string | Search in number

try {
    $result = $apiInstance->indexCustomerInvoices($is_paid, $is_booked, $order_number, $customer_number, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesApi->indexCustomerInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_paid** | **string**| Filter by paid status | [optional]
 **is_booked** | **string**| Filter by booked status | [optional]
 **order_number** | **string**| Filter by order number | [optional]
 **customer_number** | **string**| Filter by customer number | [optional]
 **search** | **string**| Search in number | [optional]

### Return type

[**\Swagger\Client\Model\CustomerInvoiceList**](../Model/CustomerInvoiceList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexCustomerInvoicesNotes**
> \Swagger\Client\Model\NoteList indexCustomerInvoicesNotes($number)

Index customer invoices notes



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer invoice number

try {
    $result = $apiInstance->indexCustomerInvoicesNotes($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesApi->indexCustomerInvoicesNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer invoice number |

### Return type

[**\Swagger\Client\Model\NoteList**](../Model/NoteList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showCustomerInvoice**
> \Swagger\Client\Model\CustomerInvoice showCustomerInvoice($number)

Show single customer invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer invoice number

try {
    $result = $apiInstance->showCustomerInvoice($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesApi->showCustomerInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer invoice number |

### Return type

[**\Swagger\Client\Model\CustomerInvoice**](../Model/CustomerInvoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showCustomerInvoiceNote**
> \Swagger\Client\Model\Note showCustomerInvoiceNote($number, $note_id)

Show single customer invoice note



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer invoice number
$note_id = "note_id_example"; // string | Customer invoice id

try {
    $result = $apiInstance->showCustomerInvoiceNote($number, $note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesApi->showCustomerInvoiceNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer invoice number |
 **note_id** | **string**| Customer invoice id |

### Return type

[**\Swagger\Client\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showCustomerInvoicePayment**
> \Swagger\Client\Model\CustomerInvoicePayment showCustomerInvoicePayment($number, $payment_number)

Show single customer invoice payment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer invoice number
$payment_number = "payment_number_example"; // string | Customer invoice payment number

try {
    $result = $apiInstance->showCustomerInvoicePayment($number, $payment_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesApi->showCustomerInvoicePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer invoice number |
 **payment_number** | **string**| Customer invoice payment number |

### Return type

[**\Swagger\Client\Model\CustomerInvoicePayment**](../Model/CustomerInvoicePayment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeCustomerInvoice**
> \Swagger\Client\Model\CustomerInvoice storeCustomerInvoice($body)

Create new customer invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CustomerInvoiceForm(); // \Swagger\Client\Model\CustomerInvoiceForm | Customer invoice object that should be created.

try {
    $result = $apiInstance->storeCustomerInvoice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesApi->storeCustomerInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerInvoiceForm**](../Model/CustomerInvoiceForm.md)| Customer invoice object that should be created. |

### Return type

[**\Swagger\Client\Model\CustomerInvoice**](../Model/CustomerInvoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeCustomerInvoiceNote**
> \Swagger\Client\Model\Note storeCustomerInvoiceNote($number, $body)

Create new customer invoice note



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer invoice number
$body = new \Swagger\Client\Model\NoteForm(); // \Swagger\Client\Model\NoteForm | Customer invoice object that should be created.

try {
    $result = $apiInstance->storeCustomerInvoiceNote($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesApi->storeCustomerInvoiceNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer invoice number |
 **body** | [**\Swagger\Client\Model\NoteForm**](../Model/NoteForm.md)| Customer invoice object that should be created. |

### Return type

[**\Swagger\Client\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeCustomerInvoicePayment**
> \Swagger\Client\Model\CustomerInvoicePayment storeCustomerInvoicePayment($number, $body)

Create new customer invoice payment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer invoice number
$body = new \Swagger\Client\Model\CustomerInvoicePaymentForm(); // \Swagger\Client\Model\CustomerInvoicePaymentForm | Customer invoice payment object that should be created.

try {
    $result = $apiInstance->storeCustomerInvoicePayment($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesApi->storeCustomerInvoicePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer invoice number |
 **body** | [**\Swagger\Client\Model\CustomerInvoicePaymentForm**](../Model/CustomerInvoicePaymentForm.md)| Customer invoice payment object that should be created. |

### Return type

[**\Swagger\Client\Model\CustomerInvoicePayment**](../Model/CustomerInvoicePayment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unbookCustomerInvoice**
> unbookCustomerInvoice($number)

Unbook customer invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer invoice number

try {
    $apiInstance->unbookCustomerInvoice($number);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesApi->unbookCustomerInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer invoice number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerInvoice**
> \Swagger\Client\Model\CustomerInvoice updateCustomerInvoice($number, $body)

Update existing customer invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer invoice number
$body = new \Swagger\Client\Model\CustomerInvoiceForm(); // \Swagger\Client\Model\CustomerInvoiceForm | Customer invoice object that should be updated.

try {
    $result = $apiInstance->updateCustomerInvoice($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesApi->updateCustomerInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer invoice number |
 **body** | [**\Swagger\Client\Model\CustomerInvoiceForm**](../Model/CustomerInvoiceForm.md)| Customer invoice object that should be updated. |

### Return type

[**\Swagger\Client\Model\CustomerInvoice**](../Model/CustomerInvoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerInvoiceNote**
> \Swagger\Client\Model\Note updateCustomerInvoiceNote($number, $note_id, $body)

Update existing customer invoice note



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer invoice number
$note_id = "note_id_example"; // string | Customer invoice id
$body = new \Swagger\Client\Model\NoteForm(); // \Swagger\Client\Model\NoteForm | Customer invoice object that should be updated.

try {
    $result = $apiInstance->updateCustomerInvoiceNote($number, $note_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesApi->updateCustomerInvoiceNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer invoice number |
 **note_id** | **string**| Customer invoice id |
 **body** | [**\Swagger\Client\Model\NoteForm**](../Model/NoteForm.md)| Customer invoice object that should be updated. |

### Return type

[**\Swagger\Client\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerInvoicePayment**
> \Swagger\Client\Model\CustomerInvoicePayment updateCustomerInvoicePayment($number, $payment_number, $body)

Update existing customer invoice payment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomerInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Customer invoice number
$payment_number = "payment_number_example"; // string | Customer invoice payment number
$body = new \Swagger\Client\Model\CustomerInvoicePaymentForm(); // \Swagger\Client\Model\CustomerInvoicePaymentForm | Customer invoice payment object that should be updated.

try {
    $result = $apiInstance->updateCustomerInvoicePayment($number, $payment_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoicesApi->updateCustomerInvoicePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Customer invoice number |
 **payment_number** | **string**| Customer invoice payment number |
 **body** | [**\Swagger\Client\Model\CustomerInvoicePaymentForm**](../Model/CustomerInvoicePaymentForm.md)| Customer invoice payment object that should be updated. |

### Return type

[**\Swagger\Client\Model\CustomerInvoicePayment**](../Model/CustomerInvoicePayment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

