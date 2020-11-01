# ShippingService

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_service_name** | **string** | A plain text representation of a carrier&#x27;s shipping service. For example, \&quot;UPS Ground\&quot; or \&quot;FedEx Standard Overnight\&quot;. | 
**carrier_name** | **string** | The name of the carrier. | 
**shipping_service_id** | [**\amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\ShippingServiceIdentifier**](ShippingServiceIdentifier.md) |  | 
**shipping_service_offer_id** | **string** | An Amazon-defined shipping service offer identifier. | 
**ship_date** | [**\amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\Timestamp**](Timestamp.md) |  | 
**earliest_estimated_delivery_date** | [**\amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\Timestamp**](Timestamp.md) |  | [optional] 
**latest_estimated_delivery_date** | [**\amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\Timestamp**](Timestamp.md) |  | [optional] 
**rate** | [**\amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\CurrencyAmount**](CurrencyAmount.md) |  | 
**shipping_service_options** | [**\amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\ShippingServiceOptions**](ShippingServiceOptions.md) |  | 
**available_shipping_service_options** | [**\amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\AvailableShippingServiceOptions**](AvailableShippingServiceOptions.md) |  | [optional] 
**available_label_formats** | [**\amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\LabelFormatList**](LabelFormatList.md) |  | [optional] 
**available_format_options_for_label** | [**\amznSellingPartnerApiPhpSdk\MerchantFulfillmentV0\Model\AvailableFormatOptionsForLabelList**](AvailableFormatOptionsForLabelList.md) |  | [optional] 
**requires_additional_seller_inputs** | **bool** | When true, additional seller inputs are required. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

