# SupplierInvoiceLine

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**child_id** | **string** | Should reference a product or lot number. | [optional] 
**child_type** | **string** | lot if is Lot and product if is Product | [optional] 
**location_id** | **int** | Should reference a location number. | [optional] 
**location** | [**\RackbeatApp\Client\Model\SupplierInvoiceLineLocation**](SupplierInvoiceLineLocation.md) |  | [optional] 
**name** | **string** |  | [optional] 
**quantity** | **int** |  | [optional] 
**line_price** | **float** | Allows up to 6 decimals. Must not use comma (,) but instead a period (.) for decimals. | [optional] 
**variations** | **object** |  | [optional] 
**variations_formatted** | **object** |  | [optional] 
**product_variation** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


