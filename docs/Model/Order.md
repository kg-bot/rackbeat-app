# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **int** | Unique integer | [optional] 
**total_subtotal** | **float** | Allows up to 6 decimals. Must not use comma (,) but instead a period (.) for decimals. | [optional] 
**total_total** | **float** | Allows up to 6 decimals. Must not use comma (,) but instead a period (.) for decimals. | [optional] 
**currency** | **string** |  | [optional] 
**currency_rate** | **float** | Allows up to 6 decimals. Must not use comma (,) but instead a period (.) for decimals. | [optional] 
**is_booked** | **bool** |  | [optional] 
**is_shipped** | **bool** |  | [optional] 
**is_partly_shipped** | **bool** |  | [optional] 
**is_invoiced** | **bool** |  | [optional] 
**is_partly_invoiced** | **bool** |  | [optional] 
**is_paid** | **bool** |  | [optional] 
**is_partly_paid** | **bool** |  | [optional] 
**lines** | [**\Swagger\Client\Model\OrderLine[]**](OrderLine.md) |  | [optional] 
**customer_id** | **int** |  | [optional] 
**customer** | [**\Swagger\Client\Model\Customer**](Customer.md) |  | [optional] 
**employee_id** | **int** |  | [optional] 
**employee** | [**\Swagger\Client\Model\Employee**](Employee.md) |  | [optional] 
**note** | **string** |  | [optional] 
**address_street** | **string** |  | [optional] 
**address_street2** | **string** |  | [optional] 
**address_city** | **string** |  | [optional] 
**address_zipcode** | **string** |  | [optional] 
**address_country** | **string** |  | [optional] 
**deliver_at** | **string** |  | [optional] 
**created_at** | **string** |  | [optional] 
**updated_at** | **string** |  | [optional] 
**self** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


