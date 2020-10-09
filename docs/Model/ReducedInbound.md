# ReducedInbound

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**inbound_id** | **int** | A unique identifier for an inbound shipment. | 
**reference** | **string** | A user defined reference to identify the inbound shipment. | 
**creation_date_time** | [**\DateTime**](\DateTime.md) | The date and time the inbound shipment was created, in ISO 8601 format. | [optional] 
**state** | **string** | The current state of the inbound shipment. | 
**labelling_service** | **bool** | Indicates whether the inbound will be labeled by bol.com or not. | 
**announced_bsk_us** | **int** | The number of announced BSKU‘s. | 
**announced_quantity** | **int** | The number of announced items. | 
**received_bsk_us** | **int** | Number of lines that were scanned in our warehouse. This value does not provide the unique number of received bsku&#39;s. | 
**received_quantity** | **int** | The number of received items. | 
**time_slot** | [**\Swagger\BolClient\Model\TimeSlot**](TimeSlot.md) | The timeslot within which your shipment is expected to arrive at the warehouse. | [optional] 
**inbound_transporter** | [**\Swagger\BolClient\Model\Transporter**](Transporter.md) | Transporter for the inbound shipment. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


