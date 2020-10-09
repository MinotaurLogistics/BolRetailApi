# Commission

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ean** | **string** | The EAN number associated with this product. | [optional] 
**condition** | **string** | The condition of the offer. | [optional] 
**unit_price** | **float** | The intended selling price per single unit up to 2 decimals precision, including VAT. | 
**fixed_amount** | **float** | A fixed commission fee, including VAT. | [optional] 
**percentage** | **float** | A percentage of commission, based on the intended selling price per unit, including VAT. | [optional] 
**total_cost** | **float** | The total commission for selling this product at bol.com. The price includes VAT for Dutch sellers, and excludes VAT for Belgium sellers. | [optional] 
**total_cost_without_reduction** | **float** | The total commission for selling this product at bol.com without reductions including VAT. | [optional] 
**reductions** | [**\Swagger\BolClient\Model\Reduction[]**](Reduction.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


