# StockCreate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | The amount of stock available for the specified product present in the retailers warehouse. Note: this should not be the FBB stock! Defaults to 0. | 
**managed_by_retailer** | **bool** | Configures whether the retailer manages the stock levels or that bol.com should calculate the corrected stock based on actual open orders. In case the configuration is set to &#39;false&#39;, all open orders are used to calculate the corrected stock. In case the configuration is set to &#39;true&#39;, only orders that are placed after the last offer update are taken into account. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


