<?php
/**
 * Class file for XiCurrenciesTypeGetHistoricalCrossRatesRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetHistoricalCrossRatesRangeResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetHistoricalCrossRatesRangeResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetHistoricalCrossRatesRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeHistoricalCrossRates
	 */
	public $GetHistoricalCrossRatesRangeResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeHistoricalCrossRates GetHistoricalCrossRatesRangeResult
	 * @return XiCurrenciesTypeGetHistoricalCrossRatesRangeResponse
	 */
	public function __construct($_GetHistoricalCrossRatesRangeResult = null)
	{
		parent::__construct(array('GetHistoricalCrossRatesRangeResult'=>$_GetHistoricalCrossRatesRangeResult));
	}
	/**
	 * Set GetHistoricalCrossRatesRangeResult
	 * @param HistoricalCrossRates GetHistoricalCrossRatesRangeResult
	 * @return HistoricalCrossRates
	 */
	public function setGetHistoricalCrossRatesRangeResult($_GetHistoricalCrossRatesRangeResult)
	{
		return ($this->GetHistoricalCrossRatesRangeResult = $_GetHistoricalCrossRatesRangeResult);
	}
	/**
	 * Get GetHistoricalCrossRatesRangeResult
	 * @return XiCurrenciesTypeHistoricalCrossRates
	 */
	public function getGetHistoricalCrossRatesRangeResult()
	{
		return $this->GetHistoricalCrossRatesRangeResult;
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