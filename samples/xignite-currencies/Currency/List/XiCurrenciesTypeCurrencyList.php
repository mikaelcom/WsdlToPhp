<?php
/**
 * Class file for XiCurrenciesTypeCurrencyList
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeCurrencyList
 * @date 08/07/2012
 */
class XiCurrenciesTypeCurrencyList extends XiCurrenciesTypeCommon
{
	/**
	 * The Currencies
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeArrayOfCurrencyItem
	 */
	public $Currencies;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeArrayOfCurrencyItem Currencies
	 * @return XiCurrenciesTypeCurrencyList
	 */
	public function __construct($_Currencies = null)
	{
		XiCurrenciesWsdlClass::__construct(array('Currencies'=>new XiCurrenciesTypeArrayOfCurrencyItem($_Currencies)));
	}
	/**
	 * Set Currencies
	 * @param ArrayOfCurrencyItem Currencies
	 * @return ArrayOfCurrencyItem
	 */
	public function setCurrencies($_Currencies)
	{
		return ($this->Currencies = $_Currencies);
	}
	/**
	 * Get Currencies
	 * @return XiCurrenciesTypeArrayOfCurrencyItem
	 */
	public function getCurrencies()
	{
		return $this->Currencies;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>