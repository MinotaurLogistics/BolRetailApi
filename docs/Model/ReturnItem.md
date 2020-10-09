# ReturnItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rma_id** | **int** | The RMA (Return Merchandise Authorization) id that identifies this particular return. | [optional] 
**order_id** | **string** | The id of the customer order this return item is in. | [optional] 
**ean** | **string** | The EAN number associated with this product. | [optional] 
**title** | **string** | The product title. | [optional] 
**expected_quantity** | **int** | The quantity that is expected to be returned by the customer. Note: this can be greater than 1 in case the customer ordered a quantity greater than 1 of the same product in the same customer order. | [optional] 
**return_reason** | **string** | The reason why the customer returned this product. | [optional] 
**return_reason_comments** | **string** | Additional details from the customer as to why this item was returned. | [optional] 
**track_and_trace** | **string** | The track and trace code that is associated with this transport. | [optional] 
**transporter_name** | **string** | The name of the transporter. | [optional] 
**handled** | **bool** | Indicates if this return item has been handled (by the retailer). | [optional] 
**processing_results** | [**\Swagger\BolClient\Model\ReturnProcessingResult[]**](ReturnProcessingResult.md) |  | 
**customer_details** | [**\Swagger\BolClient\Model\CustomerDetails**](CustomerDetails.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


