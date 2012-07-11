<?php
/**
 * ClassMap 
 * @date 09/07/2012
 */
/**
 * ClassMap
 * @date 09/07/2012
 */
class XWebOrderClassMap
{
	final public static function classMap()
	{
		return array (
  'RequestOrderType' => 'XWebOrderTypeRequestOrderType',
  'RequestHeaderType' => 'XWebOrderTypeRequestHeaderType',
  'RequestRefNbrsType' => 'XWebOrderTypeRequestRefNbrsType',
  'RequestAddrInfoType' => 'XWebOrderTypeRequestAddrInfoType',
  'RequestEndUserInfoType' => 'XWebOrderTypeRequestEndUserInfoType',
  'RequestCreditCardInfoType' => 'XWebOrderTypeRequestCreditCardInfoType',
  'RequestMyOrderTrackerType' => 'XWebOrderTypeRequestMyOrderTrackerType',
  'RequestDetailType' => 'XWebOrderTypeRequestDetailType',
  'RequestLineInfoType' => 'XWebOrderTypeRequestLineInfoType',
  'RequestSummaryType' => 'XWebOrderTypeRequestSummaryType',
  'ResponseOrderType' => 'XWebOrderTypeResponseOrderType',
  'ResponseHeaderType' => 'XWebOrderTypeResponseHeaderType',
  'ResponseOrderConfirmationType' => 'XWebOrderTypeResponseOrderConfirmationType',
  'ResponseOrderDetailType' => 'XWebOrderTypeResponseOrderDetailType',
  'ResponseRefInfoType' => 'XWebOrderTypeResponseRefInfoType',
  'ResponseLineInfo2Type' => 'XWebOrderTypeResponseLineInfo2Type',
  'ResponseDetailType' => 'XWebOrderTypeResponseDetailType',
  'ResponseLineInfoType' => 'XWebOrderTypeResponseLineInfoType',
  'ResponseSummaryType' => 'XWebOrderTypeResponseSummaryType',
  'OrderRequest' => 'XWebOrderTypeOrderRequest',
  'OrderResponse' => 'XWebOrderTypeOrderResponse',
);
	}
}
?>