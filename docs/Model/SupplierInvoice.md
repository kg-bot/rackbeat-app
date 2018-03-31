# SupplierInvoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **int** |  | [optional] 
**currency** | **string** |  | [optional] 
**currency_rate** | **float** | Allows up to 6 decimals. Must not use comma (,) but instead a period (.) for decimals. | [optional] 
**total_subtotal** | **float** | Allows up to 6 decimals. Must not use comma (,) but instead a period (.) for decimals. | [optional] 
**total_total** | **float** | Allows up to 6 decimals. Must not use comma (,) but instead a period (.) for decimals. | [optional] 
**balance** | **float** | Allows up to 6 decimals. Must not use comma (,) but instead a period (.) for decimals. | [optional] 
**is_booked** | **bool** | Is it booked? | [optional] 
**is_paid** | **bool** | Is it paid? | [optional] 
**is_party_paid** | **bool** | Is it partly paid? | [optional] 
**is_overpaid** | **bool** | Is it over-paid? | [optional] 
**lines** | [**\RackbeatApp\Client\Model\SupplierInvoiceLine[]**](SupplierInvoiceLine.md) |  | [optional] 
**supplier_id** | **int** | Should reference a supplier number. | [optional] 
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


