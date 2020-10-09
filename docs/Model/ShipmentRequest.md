# ShipmentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_items** | [**\Swagger\BolClient\Model\OrderItem[]**](OrderItem.md) | List of order items to ship. Order item id&#39;s must belong to the same order. | 
**shipment_reference** | **string** | A user-defined reference that you can provide to add to the shipment. Can be used for own administration purposes. | [optional] 
**shipping_label_id** | **string** | The identifier of the purchased shipping label. | [optional] 
**transport** | [**\Swagger\BolClient\Model\TransportInstruction**](TransportInstruction.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


