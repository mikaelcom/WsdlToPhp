<?php
/**
 * Class file for XiCurrenciesTypeMultipleHistoricalCrossRates
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeMultipleHistoricalCrossRates
 * @date 08/07/2012
 */
class XiCurrenciesTypeMultipleHistoricalCrossRates extends XiCurrenciesTypeCommon
{
	/**
	 * The HistoricalCrossRates
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeArrayOfFullHistoricalCrossRate
	 */
	public $HistoricalCrossRates;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeArrayOfFullHistoricalCrossRate HistoricalCrossRates
	 * @return XiCurrenciesTypeMultipleHistoricalCrossRates
	 */
	public function __construct($_HistoricalCrossRates = null)
	{
		XiCurrenciesWsdlClass::__construct(array('HistoricalCrossRates'=>new XiCurrenciesTypeArrayOfFullHistoricalCrossRate($_HistoricalCrossRates)));
	}
	/**
	 * Set HistoricalCrossRates
	 * @param ArrayOfFullHistoricalCrossRate HistoricalCrossRates
	 * @return ArrayOfFullHistoricalCrossRate
	 */
	public function setHistoricalCrossRates($_HistoricalCrossRates)
	{
		return ($this->HistoricalCrossRates = $_HistoricalCrossRates);
	}
	/**
	 * Get HistoricalCrossRates
	 * @return XiCurrenciesTypeArrayOfFullHistoricalCrossRate
	 */
	public function getHistoricalCrossRates()
	{
		return $this->HistoricalCrossRates;
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