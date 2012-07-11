<?php
/**
 * Class file for EbayTradingServiceVe
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceVe
 * @date 04/07/2012
 */
class EbayTradingServiceVe extends EbayTradingWsdlClass
{
	/**
	 * Method to call VeROReportItems
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeVeROReportItemsRequestType::getRightsOwnerID()
	 * @uses EbayTradingTypeVeROReportItemsRequestType::getReportItems()
	 * @param EbayTradingTypeVeROReportItemsRequestType VeROReportItemsRequestType
	 * @return EbayTradingTypeVeROReportItemsResponseType
	 */
	public function VeROReportItems(EbayTradingTypeVeROReportItemsRequestType $_EbayTradingTypeVeROReportItemsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->VeROReportItems(array('RightsOwnerID'=>$_EbayTradingTypeVeROReportItemsRequestType->getRightsOwnerID(),'ReportItems'=>$_EbayTradingTypeVeROReportItemsRequestType->getReportItems())));
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
	 * @return EbayTradingTypeVeROReportItemsResponseType
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