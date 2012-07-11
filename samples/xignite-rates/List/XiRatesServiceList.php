<?php
/**
 * Class file for XiRatesServiceList
 * @date 08/07/2012
 */
/**
 * Class XiRatesServiceList
 * @date 08/07/2012
 */
class XiRatesServiceList extends XiRatesWsdlClass
{
	/**
	 * Method to call ListRates
	 * Meta informations :
	 * 	- documentation : List supported interest rates.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @param XiRatesTypeListRates ListRates
	 * @return XiRatesTypeListRatesResponse
	 */
	public function ListRates(XiRatesTypeListRates $_XiRatesTypeListRates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListRates(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListRatesByRateFamily
	 * Meta informations :
	 * 	- documentation : List supported interest rates from a RateFamilyType.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeListRatesByRateFamily::getRateFamilyType()
	 * @param XiRatesTypeListRatesByRateFamily ListRatesByRateFamily
	 * @return XiRatesTypeListRatesByRateFamilyResponse
	 */
	public function ListRatesByRateFamily(XiRatesTypeListRatesByRateFamily $_XiRatesTypeListRatesByRateFamily)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListRatesByRateFamily(array('RateFamilyType'=>$_XiRatesTypeListRatesByRateFamily->getRateFamilyType())));
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
	 * @return XiRatesTypeListRatesByRateFamilyResponse
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