<?php
/**
 * Class file for EbayTradingServiceSend
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceSend
 * @date 04/07/2012
 */
class EbayTradingServiceSend extends EbayTradingWsdlClass
{
	/**
	 * Method to call SendInvoice
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeSendInvoiceRequestType::getItemID()
	 * @uses EbayTradingTypeSendInvoiceRequestType::getTransactionID()
	 * @uses EbayTradingTypeSendInvoiceRequestType::getOrderID()
	 * @uses EbayTradingTypeSendInvoiceRequestType::getInternationalShippingServiceOptions()
	 * @uses EbayTradingTypeSendInvoiceRequestType::getShippingServiceOptions()
	 * @uses EbayTradingTypeSendInvoiceRequestType::getSalesTax()
	 * @uses EbayTradingTypeSendInvoiceRequestType::getInsuranceOption()
	 * @uses EbayTradingTypeSendInvoiceRequestType::getInsuranceFee()
	 * @uses EbayTradingTypeSendInvoiceRequestType::getPaymentMethods()
	 * @uses EbayTradingTypeSendInvoiceRequestType::getPayPalEmailAddress()
	 * @uses EbayTradingTypeSendInvoiceRequestType::getCheckoutInstructions()
	 * @uses EbayTradingTypeSendInvoiceRequestType::getEmailCopyToSeller()
	 * @uses EbayTradingTypeSendInvoiceRequestType::getCODCost()
	 * @uses EbayTradingTypeSendInvoiceRequestType::getSKU()
	 * @uses EbayTradingTypeSendInvoiceRequestType::getOrderLineItemID()
	 * @param EbayTradingTypeSendInvoiceRequestType SendInvoiceRequestType
	 * @return EbayTradingTypeSendInvoiceResponseType
	 */
	public function SendInvoice(EbayTradingTypeSendInvoiceRequestType $_EbayTradingTypeSendInvoiceRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SendInvoice(array('ItemID'=>$_EbayTradingTypeSendInvoiceRequestType->getItemID(),'TransactionID'=>$_EbayTradingTypeSendInvoiceRequestType->getTransactionID(),'OrderID'=>$_EbayTradingTypeSendInvoiceRequestType->getOrderID(),'InternationalShippingServiceOptions'=>$_EbayTradingTypeSendInvoiceRequestType->getInternationalShippingServiceOptions(),'ShippingServiceOptions'=>$_EbayTradingTypeSendInvoiceRequestType->getShippingServiceOptions(),'SalesTax'=>$_EbayTradingTypeSendInvoiceRequestType->getSalesTax(),'InsuranceOption'=>$_EbayTradingTypeSendInvoiceRequestType->getInsuranceOption(),'InsuranceFee'=>$_EbayTradingTypeSendInvoiceRequestType->getInsuranceFee(),'PaymentMethods'=>$_EbayTradingTypeSendInvoiceRequestType->getPaymentMethods(),'PayPalEmailAddress'=>$_EbayTradingTypeSendInvoiceRequestType->getPayPalEmailAddress(),'CheckoutInstructions'=>$_EbayTradingTypeSendInvoiceRequestType->getCheckoutInstructions(),'EmailCopyToSeller'=>$_EbayTradingTypeSendInvoiceRequestType->getEmailCopyToSeller(),'CODCost'=>$_EbayTradingTypeSendInvoiceRequestType->getCODCost(),'SKU'=>$_EbayTradingTypeSendInvoiceRequestType->getSKU(),'OrderLineItemID'=>$_EbayTradingTypeSendInvoiceRequestType->getOrderLineItemID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return EbayTradingTypeSendInvoiceResponseType
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>