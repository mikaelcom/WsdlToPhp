<?php
/**
 * Class file for EbayTradingServiceComplete
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceComplete
 * @date 04/07/2012
 */
class EbayTradingServiceComplete extends EbayTradingWsdlClass
{
	/**
	 * Method to call CompleteSale
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeCompleteSaleRequestType::getItemID()
	 * @uses EbayTradingTypeCompleteSaleRequestType::getTransactionID()
	 * @uses EbayTradingTypeCompleteSaleRequestType::getFeedbackInfo()
	 * @uses EbayTradingTypeCompleteSaleRequestType::getShipped()
	 * @uses EbayTradingTypeCompleteSaleRequestType::getPaid()
	 * @uses EbayTradingTypeCompleteSaleRequestType::getListingType()
	 * @uses EbayTradingTypeCompleteSaleRequestType::getShipment()
	 * @uses EbayTradingTypeCompleteSaleRequestType::getOrderID()
	 * @uses EbayTradingTypeCompleteSaleRequestType::getOrderLineItemID()
	 * @param EbayTradingTypeCompleteSaleRequestType CompleteSaleRequestType
	 * @return EbayTradingTypeCompleteSaleResponseType
	 */
	public function CompleteSale(EbayTradingTypeCompleteSaleRequestType $_EbayTradingTypeCompleteSaleRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CompleteSale(array('ItemID'=>$_EbayTradingTypeCompleteSaleRequestType->getItemID(),'TransactionID'=>$_EbayTradingTypeCompleteSaleRequestType->getTransactionID(),'FeedbackInfo'=>$_EbayTradingTypeCompleteSaleRequestType->getFeedbackInfo(),'Shipped'=>$_EbayTradingTypeCompleteSaleRequestType->getShipped(),'Paid'=>$_EbayTradingTypeCompleteSaleRequestType->getPaid(),'ListingType'=>$_EbayTradingTypeCompleteSaleRequestType->getListingType(),'Shipment'=>$_EbayTradingTypeCompleteSaleRequestType->getShipment(),'OrderID'=>$_EbayTradingTypeCompleteSaleRequestType->getOrderID(),'OrderLineItemID'=>$_EbayTradingTypeCompleteSaleRequestType->getOrderLineItemID())));
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
	 * @return EbayTradingTypeCompleteSaleResponseType
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