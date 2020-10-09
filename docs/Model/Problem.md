# Problem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type URI for this problem. Fixed value: https://api.bol.com/problems. | [optional] 
**title** | **string** | Title describing the nature of the problem. | [optional] 
**status** | **int** | HTTP status returned from the endpoint causing the problem. | [optional] 
**detail** | **string** | Detailed error message describing in additional detail what caused the service to return this problem. | [optional] 
**host** | **string** | Host identifier describing the server instance that reported the problem. | [optional] 
**instance** | **string** | Full URI path of the resource that reported the problem. | [optional] 
**violations** | [**\Swagger\BolClient\Model\Violation[]**](Violation.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


