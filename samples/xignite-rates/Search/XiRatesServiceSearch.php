<?php
/**
 * Class file for XiRatesServiceSearch
 * @date 08/07/2012
 */
/**
 * Class XiRatesServiceSearch
 * @date 08/07/2012
 */
class XiRatesServiceSearch extends XiRatesWsdlClass
{
	/**
	 * Method to call SearchRates
	 * Meta informations :
	 * 	- documentation : Search rate names and description
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeSearchRates::getPattern()
	 * @param XiRatesTypeSearchRates SearchRates
	 * @return XiRatesTypeSearchRatesResponse
	 */
	public function SearchRates(XiRatesTypeSearchRates $_XiRatesTypeSearchRates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchRates(array('Pattern'=>$_XiRatesTypeSearchRates->getPattern())));
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
	 * @return XiRatesTypeSearchRatesResponse
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