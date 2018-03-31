# RackbeatApp\Client\OrdersApi

All URIs are relative to *https://api.rackbeat.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bookOrderForShipping**](OrdersApi.md#bookOrderForShipping) | **POST** /orders/{number}/book-for-shipping | Book order for shipping
[**deleteOrder**](OrdersApi.md#deleteOrder) | **DELETE** /orders/{number} | Delete existing order
[**deleteOrderNote**](OrdersApi.md#deleteOrderNote) | **DELETE** /orders/{number}/notes/{noteId} | Delete existing order note
[**indexOrderNotes**](OrdersApi.md#indexOrderNotes) | **GET** /orders/{number}/notes | Index order notes
[**indexOrders**](OrdersApi.md#indexOrders) | **GET** /orders | Index orders
[**orderCreateInvoice**](OrdersApi.md#orderCreateInvoice) | **POST** /orders/{number}/create-invoice | Order create invoice
[**orderCreateReceipt**](OrdersApi.md#orderCreateReceipt) | **POST** /orders/{number}/create-receipt | Order create receipt
[**orderDrafts**](OrdersApi.md#orderDrafts) | **POST** /orders/drafts | Order drafts
[**showOrder**](OrdersApi.md#showOrder) | **GET** /orders/{number} | Show single order
[**showOrderNote**](OrdersApi.md#showOrderNote) | **GET** /orders/{number}/notes/{noteId} | Show single order note
[**showUninvoicedLines**](OrdersApi.md#showUninvoicedLines) | **GET** /orders/{number}/uninvoiced-lines | Show uninvoiced lines
[**storeOrder**](OrdersApi.md#storeOrder) | **POST** /orders | Create new order
[**storeOrderNote**](OrdersApi.md#storeOrderNote) | **POST** /orders/{number}/notes | Create new order note
[**updateOrder**](OrdersApi.md#updateOrder) | **PUT** /orders/{number} | Update existing order
[**updateOrderNote**](OrdersApi.md#updateOrderNote) | **PUT** /orders/{number}/notes/{noteId} | Update existing order note


# **bookOrderForShipping**
> bookOrderForShipping($number)

Book order for shipping



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number

try {
    $apiInstance->bookOrderForShipping($number);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->bookOrderForShipping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrder**
> deleteOrder($number)

Delete existing order



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number

try {
    $apiInstance->deleteOrder($number);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->deleteOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderNote**
> deleteOrderNote($number, $note_id)

Delete existing order note



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number
$note_id = "note_id_example"; // string | Order note id

try {
    $apiInstance->deleteOrderNote($number, $note_id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->deleteOrderNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |
 **note_id** | **string**| Order note id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexOrderNotes**
> \RackbeatApp\Client\Model\NoteList indexOrderNotes($number)

Index order notes



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number

try {
    $result = $apiInstance->indexOrderNotes($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->indexOrderNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |

### Return type

[**\RackbeatApp\Client\Model\NoteList**](../Model/NoteList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexOrders**
> \RackbeatApp\Client\Model\OrdersList indexOrders($is_booked, $is_paid, $is_shipped)

Index orders



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_booked = "is_booked_example"; // string | Filter by booking status
$is_paid = "is_paid_example"; // string | Filter by payment status
$is_shipped = "is_shipped_example"; // string | Filter by ship status

try {
    $result = $apiInstance->indexOrders($is_booked, $is_paid, $is_shipped);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->indexOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_booked** | **string**| Filter by booking status | [optional]
 **is_paid** | **string**| Filter by payment status | [optional]
 **is_shipped** | **string**| Filter by ship status | [optional]

### Return type

[**\RackbeatApp\Client\Model\OrdersList**](../Model/OrdersList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderCreateInvoice**
> \RackbeatApp\Client\Model\CustomerInvoice orderCreateInvoice($number)

Order create invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number

try {
    $result = $apiInstance->orderCreateInvoice($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderCreateInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |

### Return type

[**\RackbeatApp\Client\Model\CustomerInvoice**](../Model/CustomerInvoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderCreateReceipt**
> \RackbeatApp\Client\Model\Order orderCreateReceipt($number)

Order create receipt



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number

try {
    $result = $apiInstance->orderCreateReceipt($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderCreateReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |

### Return type

[**\RackbeatApp\Client\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderDrafts**
> \RackbeatApp\Client\Model\Order orderDrafts($body)

Order drafts



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \RackbeatApp\Client\Model\OrderForm(); // \RackbeatApp\Client\Model\OrderForm | Order draft should be created

try {
    $result = $apiInstance->orderDrafts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderDrafts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RackbeatApp\Client\Model\OrderForm**](../Model/OrderForm.md)| Order draft should be created |

### Return type

[**\RackbeatApp\Client\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showOrder**
> \RackbeatApp\Client\Model\Order showOrder($number)

Show single order



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number

try {
    $result = $apiInstance->showOrder($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->showOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |

### Return type

[**\RackbeatApp\Client\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showOrderNote**
> \RackbeatApp\Client\Model\Note showOrderNote($number, $note_id)

Show single order note



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number
$note_id = "note_id_example"; // string | Order note id

try {
    $result = $apiInstance->showOrderNote($number, $note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->showOrderNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |
 **note_id** | **string**| Order note id |

### Return type

[**\RackbeatApp\Client\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showUninvoicedLines**
> \RackbeatApp\Client\Model\OrderLine showUninvoicedLines($number)

Show uninvoiced lines



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number

try {
    $result = $apiInstance->showUninvoicedLines($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->showUninvoicedLines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |

### Return type

[**\RackbeatApp\Client\Model\OrderLine**](../Model/OrderLine.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeOrder**
> \RackbeatApp\Client\Model\Order storeOrder($body)

Create new order



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \RackbeatApp\Client\Model\OrderForm(); // \RackbeatApp\Client\Model\OrderForm | Order object that should be created.

try {
    $result = $apiInstance->storeOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->storeOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RackbeatApp\Client\Model\OrderForm**](../Model/OrderForm.md)| Order object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeOrderNote**
> \RackbeatApp\Client\Model\Note storeOrderNote($number, $body)

Create new order note



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number
$body = new \RackbeatApp\Client\Model\NoteForm(); // \RackbeatApp\Client\Model\NoteForm | Order note object that should be created.

try {
    $result = $apiInstance->storeOrderNote($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->storeOrderNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |
 **body** | [**\RackbeatApp\Client\Model\NoteForm**](../Model/NoteForm.md)| Order note object that should be created. |

### Return type

[**\RackbeatApp\Client\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrder**
> \RackbeatApp\Client\Model\Order updateOrder($number, $body)

Update existing order



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number
$body = new \RackbeatApp\Client\Model\OrderForm(); // \RackbeatApp\Client\Model\OrderForm | Order object that should be updated.

try {
    $result = $apiInstance->updateOrder($number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |
 **body** | [**\RackbeatApp\Client\Model\OrderForm**](../Model/OrderForm.md)| Order object that should be updated. |

### Return type

[**\RackbeatApp\Client\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderNote**
> \RackbeatApp\Client\Model\Note updateOrderNote($number, $note_id, $body)

Update existing order note



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RackbeatApp\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number = "number_example"; // string | Order number
$note_id = "note_id_example"; // string | Order note id
$body = new \RackbeatApp\Client\Model\NoteForm(); // \RackbeatApp\Client\Model\NoteForm | Order note object that should be updated.

try {
    $result = $apiInstance->updateOrderNote($number, $note_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateOrderNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Order number |
 **note_id** | **string**| Order note id |
 **body** | [**\RackbeatApp\Client\Model\NoteForm**](../Model/NoteForm.md)| Order note object that should be updated. |

### Return type

[**\RackbeatApp\Client\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

