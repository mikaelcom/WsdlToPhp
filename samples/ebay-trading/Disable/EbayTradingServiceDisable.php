<?php
/**
 * Class file for EbayTradingServiceDisable
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceDisable
 * @date 04/07/2012
 */
class EbayTradingServiceDisable extends EbayTradingWsdlClass
{
	/**
	 * Method to call DisableUnpaidItemAssistance
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeDisableUnpaidItemAssistanceRequestType::getItemID()
	 * @uses EbayTradingTypeDisableUnpaidItemAssistanceRequestType::getTransactionID()
	 * @uses EbayTradingTypeDisableUnpaidItemAssistanceRequestType::getDisputeID()
	 * @uses EbayTradingTypeDisableUnpaidItemAssistanceRequestType::getOrderLineItemID()
	 * @param EbayTradingTypeDisableUnpaidItemAssistanceRequestType DisableUnpaidItemAssistanceRequestType
	 * @return EbayTradingTypeDisableUnpaidItemAssistanceResponseType
	 */
	public function DisableUnpaidItemAssistance(EbayTradingTypeDisableUnpaidItemAssistanceRequestType $_EbayTradingTypeDisableUnpaidItemAssistanceRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DisableUnpaidItemAssistance(array('ItemID'=>$_EbayTradingTypeDisableUnpaidItemAssistanceRequestType->getItemID(),'TransactionID'=>$_EbayTradingTypeDisableUnpaidItemAssistanceRequestType->getTransactionID(),'DisputeID'=>$_EbayTradingTypeDisableUnpaidItemAssistanceRequestType->getDisputeID(),'OrderLineItemID'=>$_EbayTradingTypeDisableUnpaidItemAssistanceRequestType->getOrderLineItemID())));
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
	 * @return EbayTradingTypeDisableUnpaidItemAssistanceResponseType
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