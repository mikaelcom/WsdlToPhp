<?php
/**
 * Class file for XiCurrenciesTypeGetHistoricalCrossRatesAsOfResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetHistoricalCrossRatesAsOfResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetHistoricalCrossRatesAsOfResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetHistoricalCrossRatesAsOfResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeHistoricalCrossRates
	 */
	public $GetHistoricalCrossRatesAsOfResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeHistoricalCrossRates GetHistoricalCrossRatesAsOfResult
	 * @return XiCurrenciesTypeGetHistoricalCrossRatesAsOfResponse
	 */
	public function __construct($_GetHistoricalCrossRatesAsOfResult = null)
	{
		parent::__construct(array('GetHistoricalCrossRatesAsOfResult'=>$_GetHistoricalCrossRatesAsOfResult));
	}
	/**
	 * Set GetHistoricalCrossRatesAsOfResult
	 * @param HistoricalCrossRates GetHistoricalCrossRatesAsOfResult
	 * @return HistoricalCrossRates
	 */
	public function setGetHistoricalCrossRatesAsOfResult($_GetHistoricalCrossRatesAsOfResult)
	{
		return ($this->GetHistoricalCrossRatesAsOfResult = $_GetHistoricalCrossRatesAsOfResult);
	}
	/**
	 * Get GetHistoricalCrossRatesAsOfResult
	 * @return XiCurrenciesTypeHistoricalCrossRates
	 */
	public function getGetHistoricalCrossRatesAsOfResult()
	{
		return $this->GetHistoricalCrossRatesAsOfResult;
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