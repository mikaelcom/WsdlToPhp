<?php
/**
 * Class file for XiCurrenciesServiceList
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesServiceList
 * @date 08/07/2012
 */
class XiCurrenciesServiceList extends XiCurrenciesWsdlClass
{
	/**
	 * Method to call ListCurrencies
	 * Meta informations :
	 * 	- documentation : List supported currencies.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @param XiCurrenciesTypeListCurrencies ListCurrencies
	 * @return XiCurrenciesTypeListCurrenciesResponse
	 */
	public function ListCurrencies(XiCurrenciesTypeListCurrencies $_XiCurrenciesTypeListCurrencies)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListCurrencies(array()));
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
	 * @return XiCurrenciesTypeListCurrenciesResponse
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