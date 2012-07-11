<?php
/**
 * ClassMap 
 * @date 09/07/2012
 */
/**
 * ClassMap
 * @date 09/07/2012
 */
class XWebCheckOutClassMap
{
	final public static function classMap()
	{
		return array (
  'Order' => 'XWebCheckOutTypeOrder',
  'Comments' => 'XWebCheckOutTypeComments',
  'Basket' => 'XWebCheckOutTypeBasket',
  'Shipping' => 'XWebCheckOutTypeShipping',
  'Billing' => 'XWebCheckOutTypeBilling',
  'Credit_Card' => 'XWebCheckOutTypeCredit_Card',
  'Receipt' => 'XWebCheckOutTypeReceipt',
  'Comment' => 'XWebCheckOutTypeComment',
  'LoadOrderRequest' => 'XWebCheckOutTypeLoadOrderRequest',
  'LoadOrderResponse' => 'XWebCheckOutTypeLoadOrderResponse',
  'AddOrderRequest' => 'XWebCheckOutTypeAddOrderRequest',
  'UpdateOrderRequest' => 'XWebCheckOutTypeUpdateOrderRequest',
  'DeleteOrderRequest' => 'XWebCheckOutTypeDeleteOrderRequest',
  'ProcessOrderRequest' => 'XWebCheckOutTypeProcessOrderRequest',
  'ProcessPaymentLSPGRequest' => 'XWebCheckOutTypeProcessPaymentLSPGRequest',
  'ProcessPaymentLSPGResponse' => 'XWebCheckOutTypeProcessPaymentLSPGResponse',
  'ProcessPaymentCybersourceRequest' => 'XWebCheckOutTypeProcessPaymentCybersourceRequest',
  'ProcessPaymentCybersourceResponse' => 'XWebCheckOutTypeProcessPaymentCybersourceResponse',
  'LoadBasketsResponse' => 'XWebCheckOutTypeLoadBasketsResponse',
  'LoadBasketsPagedRequest' => 'XWebCheckOutTypeLoadBasketsPagedRequest',
  'LoadBasketsPagedResponse' => 'XWebCheckOutTypeLoadBasketsPagedResponse',
  'LoadReceiptsResponse' => 'XWebCheckOutTypeLoadReceiptsResponse',
  'LoadReceiptsPagedRequest' => 'XWebCheckOutTypeLoadReceiptsPagedRequest',
  'LoadReceiptsPagedResponse' => 'XWebCheckOutTypeLoadReceiptsPagedResponse',
  'LoadReceiptsByShopperRequest' => 'XWebCheckOutTypeLoadReceiptsByShopperRequest',
  'LoadReceiptsByShopperResponse' => 'XWebCheckOutTypeLoadReceiptsByShopperResponse',
  'LoadReceiptsByShopperPagedRequest' => 'XWebCheckOutTypeLoadReceiptsByShopperPagedRequest',
  'LoadReceiptsByShopperPagedResponse' => 'XWebCheckOutTypeLoadReceiptsByShopperPagedResponse',
);
	}
}
?>