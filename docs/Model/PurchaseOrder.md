# PurchaseOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **int** | Unique integer | [optional] 
**total_subtotal** | **float** | Allows up to 6 decimals. Must not use comma (,) but instead a period (.) for decimals. | [optional] 
**total_total** | **float** | Allows up to 6 decimals. Must not use comma (,) but instead a period (.) for decimals. | [optional] 
**currency** | **string** |  | [optional] 
**currency_rate** | **float** | Allows up to 6 decimals. Must not use comma (,) but instead a period (.) for decimals. | [optional] 
**is_booked** | **bool** |  | [optional] 
**is_received** | **bool** |  | [optional] 
**is_partly_received** | **bool** |  | [optional] 
**is_invoiced** | **bool** |  | [optional] 
**is_partly_invoiced** | **bool** |  | [optional] 
**is_sent** | **bool** |  | [optional] 
**delivery_time_in_days** | **int** |  | [optional] 
**lines** | [**\Swagger\Client\Model\PurchaseOrderLine[]**](PurchaseOrderLine.md) |  | [optional] 
**supplier_id** | **int** |  | [optional] 
**supplier** | [**\Swagger\Client\Model\Supplier**](Supplier.md) |  | [optional] 
**employee_id** | **int** |  | [optional] 
**employee** | [**\Swagger\Client\Model\Employee**](Employee.md) |  | [optional] 
**note** | **string** |  | [optional] 
**address_street** | **string** |  | [optional] 
**address_street2** | **string** |  | [optional] 
**address_city** | **string** |  | [optional] 
**address_zipcode** | **string** |  | [optional] 
**address_country** | **string** |  | [optional] 
**created_at** | **string** |  | [optional] 
**updated_at** | **string** |  | [optional] 
**self** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


