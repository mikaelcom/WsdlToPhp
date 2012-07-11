<?php
/**
 * Class file for EbayTradingServiceGete
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceGete
 * @date 04/07/2012
 */
class EbayTradingServiceGete extends EbayTradingWsdlClass
{
	/**
	 * Method to call GeteBayDetails
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGeteBayDetailsRequestType::getDetailName()
	 * @param EbayTradingTypeGeteBayDetailsRequestType GeteBayDetailsRequestType
	 * @return EbayTradingTypeGeteBayDetailsResponseType
	 */
	public function GeteBayDetails(EbayTradingTypeGeteBayDetailsRequestType $_EbayTradingTypeGeteBayDetailsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GeteBayDetails(array('DetailName'=>$_EbayTradingTypeGeteBayDetailsRequestType->getDetailName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GeteBayOfficialTime
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @param EbayTradingTypeGeteBayOfficialTimeRequestType GeteBayOfficialTimeRequestType
	 * @return EbayTradingTypeGeteBayOfficialTimeResponseType
	 */
	public function GeteBayOfficialTime(EbayTradingTypeGeteBayOfficialTimeRequestType $_EbayTradingTypeGeteBayOfficialTimeRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GeteBayOfficialTime(array()));
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
	 * @return EbayTradingTypeGeteBayOfficialTimeResponseType
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