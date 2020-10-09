# ProcessStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The process status id. | [optional] 
**entity_id** | **string** | The id of the object being processed. E.g. in case of a shipment process id, you will receive the id of the order item being processed. | [optional] 
**event_type** | **string** | Name of the requested action that is being processed. | [optional] 
**description** | **string** | Describes the action that is being processed. | [optional] 
**status** | **string** | Status of the action being processed. | [optional] 
**error_message** | **string** | Shows error message if applicable. | [optional] 
**create_timestamp** | [**\DateTime**](\DateTime.md) | Time of creation of the response. | [optional] 
**links** | [**\Swagger\BolClient\Model\Link[]**](Link.md) | Lists available actions applicable to this endpoint. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


