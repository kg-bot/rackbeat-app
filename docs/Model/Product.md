# Product

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | Can be either a string or an integer. May also contain dashes. | 
**group** | **int** | Must relate to an existing ProductGroup. | 
**name** | **string** |  | 
**barcode** | **string** |  | [optional] 
**sales_price** | **float** | Allows up to 6 decimals. Must not use comma (,) but instead a period (.) for decimals. | 
**recommended_cost_price** | **float** | Allows up to 6 decimals. Must not use comma (,) but instead a period (.) for decimals. | [optional] 
**min_order** | **int** | Minimum quantity to order. | [optional] 
**min_stock** | **int** | Minimum quantity in stock. | [optional] 
**product_category** | **int** | Must relate to an existing Product Category. | [optional] 
**default_location_id** | **int** | Must relate to an existing Location. | [optional] 
**unit** | **int** | Must relate to an existing Unit. | [optional] 
**physical** | [**\Swagger\Client\Model\ProductsPhysical**](ProductsPhysical.md) |  | [optional] 
**stock_quantity** | **int** | Quantity in stock | [optional] 
**in_order_quantity** | **int** | Quantity in order (outgoing) | [optional] 
**purchased_quantity** | **int** | Quantity purchased (incoming) | [optional] 
**available_quantity** | **int** | Quantity in available (in stock - in order) | [optional] 
**is_draft** | **bool** | Is it a draft product? | [optional] 
**created_at** | **string** |  | [optional] 
**updated_at** | **string** |  | [optional] 
**self** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


