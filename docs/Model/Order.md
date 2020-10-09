# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | The order id. | [optional] 
**pick_up_point** | **bool** | Indicates whether this order is shipped to a Pick Up Point. | [optional] 
**order_placed_date_time** | [**\DateTime**](\DateTime.md) | The date and time in ISO 8601 format when the order was placed. | [optional] 
**shipment_details** | [**\Swagger\BolClient\Model\ShipmentDetails**](ShipmentDetails.md) |  | 
**billing_details** | [**\Swagger\BolClient\Model\BillingDetails**](BillingDetails.md) |  | [optional] 
**order_items** | [**\Swagger\BolClient\Model\OrderOrderItem[]**](OrderOrderItem.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


