# Shipment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **int** | A unique identifier for this shipment. | [optional] 
**shipment_date_time** | [**\DateTime**](\DateTime.md) | The date and time in ISO 8601 format when the order item was shipped. | [optional] 
**shipment_reference** | **string** | Reference supplied by the user when this item was shipped. | [optional] 
**pick_up_point** | **bool** | Indicates whether this order is shipped to a Pick Up Point. | [optional] 
**order** | [**\Swagger\BolClient\Model\ShipmentOrder**](ShipmentOrder.md) |  | 
**shipment_details** | [**\Swagger\BolClient\Model\ShipmentDetails**](ShipmentDetails.md) |  | [optional] 
**billing_details** | [**\Swagger\BolClient\Model\BillingDetails**](BillingDetails.md) |  | [optional] 
**shipping_label_id** | **string** | The shipping label id. | [optional] 
**shipment_items** | [**\Swagger\BolClient\Model\ShipmentItem[]**](ShipmentItem.md) |  | 
**transport** | [**\Swagger\BolClient\Model\ShipmentTransport**](ShipmentTransport.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


