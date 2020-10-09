# InboundRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference** | **string** | A user defined reference to identify the inbound shipment. | [optional] 
**time_slot** | [**\Swagger\BolClient\Model\TimeSlot**](TimeSlot.md) | The timeslot within which your shipment is expected to arrive at the warehouse. | 
**inbound_transporter** | [**\Swagger\BolClient\Model\Transporter**](Transporter.md) | Transporter for the inbound shipment. | 
**labelling_service** | **bool** | Indicates whether the inbound will be labeled by bol.com or not. | 
**products** | [**\Swagger\BolClient\Model\InboundProductRequest[]**](InboundProductRequest.md) | List of products. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


