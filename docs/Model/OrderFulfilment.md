# OrderFulfilment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | **string** | Specifies whether this shipment has been fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). Defaults to FBR. | [optional] 
**distribution_party** | **string** | The party that manages the distribution, either bol.com or the retailer itself. | [optional] 
**latest_delivery_date** | [**\DateTime**](\DateTime.md) | The ultimate delivery date at which this order must be delivered at the customer&#39;s shipping address. This field is empty in case the exactDeliveryDate is filled. | [optional] 
**exact_delivery_date** | [**\DateTime**](\DateTime.md) | The exact delivery date at which this order must be delivered at the customer&#39;s shipping address. This field is only filled when the customer chose an exact date for delivery. This field is empty in case the latestDeliveryDate is filled. | [optional] 
**expiry_date** | [**\DateTime**](\DateTime.md) | The date this order item will automatically expire and thereby cancelling this order item from the order. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


