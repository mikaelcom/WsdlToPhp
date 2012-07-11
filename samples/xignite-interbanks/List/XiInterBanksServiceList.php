<?php
/**
 * Class file for XiInterBanksServiceList
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksServiceList
 * @date 08/07/2012
 */
class XiInterBanksServiceList extends XiInterBanksWsdlClass
{
	/**
	 * Method to call ListRates
	 * Meta informations :
	 * 	- documentation : List supported interest rates.
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @param XiInterBanksTypeListRates ListRates
	 * @return XiInterBanksTypeListRatesResponse
	 */
	public function ListRates(XiInterBanksTypeListRates $_XiInterBanksTypeListRates)
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
	 * Method returning the result content
	 *
	 * @return XiInterBanksTypeListRatesResponse
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