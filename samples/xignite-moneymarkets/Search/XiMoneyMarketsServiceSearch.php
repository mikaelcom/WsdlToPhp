<?php
/**
 * Class file for XiMoneyMarketsServiceSearch
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsServiceSearch
 * @date 08/07/2012
 */
class XiMoneyMarketsServiceSearch extends XiMoneyMarketsWsdlClass
{
	/**
	 * Method to call SearchRates
	 * Meta informations :
	 * 	- documentation : Search rate names and description
	 * @uses XiMoneyMarketsWsdlClass::getSoapClient()
	 * @uses XiMoneyMarketsWsdlClass::setResult()
	 * @uses XiMoneyMarketsWsdlClass::getResult()
	 * @uses XiMoneyMarketsWsdlClass::saveLastError()
	 * @uses XiMoneyMarketsTypeSearchRates::getPattern()
	 * @param XiMoneyMarketsTypeSearchRates SearchRates
	 * @return XiMoneyMarketsTypeSearchRatesResponse
	 */
	public function SearchRates(XiMoneyMarketsTypeSearchRates $_XiMoneyMarketsTypeSearchRates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchRates(array('Pattern'=>$_XiMoneyMarketsTypeSearchRates->getPattern())));
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
	 * @return XiMoneyMarketsTypeSearchRatesResponse
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