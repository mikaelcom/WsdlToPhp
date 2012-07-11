<?php
/**
 * Class file for XiCurrenciesTypeCrossRateTableLine
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeCrossRateTableLine
 * @date 08/07/2012
 */
class XiCurrenciesTypeCrossRateTableLine extends XiCurrenciesTypeCommon
{
	/**
	 * The From
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCurrency
	 */
	public $From;
	/**
	 * The ExchangeRates
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeArrayOfExchangeRate
	 */
	public $ExchangeRates;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCurrency From
	 * @param XiCurrenciesTypeArrayOfExchangeRate ExchangeRates
	 * @return XiCurrenciesTypeCrossRateTableLine
	 */
	public function __construct($_From = null,$_ExchangeRates = null)
	{
		XiCurrenciesWsdlClass::__construct(array('From'=>$_From,'ExchangeRates'=>new XiCurrenciesTypeArrayOfExchangeRate($_ExchangeRates)));
	}
	/**
	 * Set From
	 * @param Currency From
	 * @return Currency
	 */
	public function setFrom($_From)
	{
		return ($this->From = $_From);
	}
	/**
	 * Get From
	 * @return XiCurrenciesTypeCurrency
	 */
	public function getFrom()
	{
		return $this->From;
	}
	/**
	 * Set ExchangeRates
	 * @param ArrayOfExchangeRate ExchangeRates
	 * @return ArrayOfExchangeRate
	 */
	public function setExchangeRates($_ExchangeRates)
	{
		return ($this->ExchangeRates = $_ExchangeRates);
	}
	/**
	 * Get ExchangeRates
	 * @return XiCurrenciesTypeArrayOfExchangeRate
	 */
	public function getExchangeRates()
	{
		return $this->ExchangeRates;
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