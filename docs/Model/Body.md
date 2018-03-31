# Body

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | Can be either a string or an integer. May also contain dashes. | [optional] 
**group** | **int** | Must relate to an existing ProductGroup. | [optional] 
**name** | **string** |  | [optional] 
**barcode** | **string** |  | [optional] 
**sales_price** | **float** | Allows up to 6 decimals. Must not use comma (,) but instead a period (.) for decimals. | [optional] 
**recommended_cost_price** | **float** | Allows up to 6 decimals. Must not use comma (,) but instead a period (.) for decimals. | [optional] 
**min_order** | **int** | Minimum quantity to order. | [optional] 
**min_stock** | **int** | Minimum quantity in stock. | [optional] 
**stock_quantity** | **int** | Initial stock amount. Currently not supported until Inventory Regulations are available. | [optional] 
**default_location_id** | **int** | Must relate to an existing Location. | [optional] 
**unit** | **int** | Must relate to an existing Unit. | [optional] 
**physical** | [**\RackbeatApp\Client\Model\ProductsPhysical**](ProductsPhysical.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


