<?php
/**
 * Class file for XiCurrenciesTypeCrossRateTableLineWithBidAsk
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeCrossRateTableLineWithBidAsk
 * @date 08/07/2012
 */
class XiCurrenciesTypeCrossRateTableLineWithBidAsk extends XiCurrenciesTypeCommon
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
	 * @var XiCurrenciesTypeArrayOfCrossRate
	 */
	public $ExchangeRates;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCurrency From
	 * @param XiCurrenciesTypeArrayOfCrossRate ExchangeRates
	 * @return XiCurrenciesTypeCrossRateTableLineWithBidAsk
	 */
	public function __construct($_From = null,$_ExchangeRates = null)
	{
		XiCurrenciesWsdlClass::__construct(array('From'=>$_From,'ExchangeRates'=>new XiCurrenciesTypeArrayOfCrossRate($_ExchangeRates)));
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
	 * @param ArrayOfCrossRate ExchangeRates
	 * @return ArrayOfCrossRate
	 */
	public function setExchangeRates($_ExchangeRates)
	{
		return ($this->ExchangeRates = $_ExchangeRates);
	}
	/**
	 * Get ExchangeRates
	 * @return XiCurrenciesTypeArrayOfCrossRate
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