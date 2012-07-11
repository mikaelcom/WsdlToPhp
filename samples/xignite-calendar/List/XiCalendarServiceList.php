<?php
/**
 * Class file for XiCalendarServiceList
 * @date 08/07/2012
 */
/**
 * Class XiCalendarServiceList
 * @date 08/07/2012
 */
class XiCalendarServiceList extends XiCalendarWsdlClass
{
	/**
	 * Method to call ListCountryCodes
	 * Meta informations :
	 * 	- documentation : Get all of the country codes available to query on.
	 * @uses XiCalendarWsdlClass::getSoapClient()
	 * @uses XiCalendarWsdlClass::setResult()
	 * @uses XiCalendarWsdlClass::getResult()
	 * @uses XiCalendarWsdlClass::saveLastError()
	 * @param XiCalendarTypeListCountryCodes ListCountryCodes
	 * @return XiCalendarTypeListCountryCodesResponse
	 */
	public function ListCountryCodes(XiCalendarTypeListCountryCodes $_XiCalendarTypeListCountryCodes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListCountryCodes(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListEventCodes
	 * Meta informations :
	 * 	- documentation : Get all of the event codes available to query on.
	 * @uses XiCalendarWsdlClass::getSoapClient()
	 * @uses XiCalendarWsdlClass::setResult()
	 * @uses XiCalendarWsdlClass::getResult()
	 * @uses XiCalendarWsdlClass::saveLastError()
	 * @param XiCalendarTypeListEventCodes ListEventCodes
	 * @return XiCalendarTypeListEventCodesResponse
	 */
	public function ListEventCodes(XiCalendarTypeListEventCodes $_XiCalendarTypeListEventCodes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListEventCodes(array()));
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
	 * @return XiCalendarTypeListEventCodesResponse
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