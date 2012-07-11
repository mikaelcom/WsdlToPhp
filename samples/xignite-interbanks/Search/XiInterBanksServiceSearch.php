<?php
/**
 * Class file for XiInterBanksServiceSearch
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksServiceSearch
 * @date 08/07/2012
 */
class XiInterBanksServiceSearch extends XiInterBanksWsdlClass
{
	/**
	 * Method to call SearchRates
	 * Meta informations :
	 * 	- documentation : Search rate names and description
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeSearchRates::getPattern()
	 * @param XiInterBanksTypeSearchRates SearchRates
	 * @return XiInterBanksTypeSearchRatesResponse
	 */
	public function SearchRates(XiInterBanksTypeSearchRates $_XiInterBanksTypeSearchRates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchRates(array('Pattern'=>$_XiInterBanksTypeSearchRates->getPattern())));
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
	 * @return XiInterBanksTypeSearchRatesResponse
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