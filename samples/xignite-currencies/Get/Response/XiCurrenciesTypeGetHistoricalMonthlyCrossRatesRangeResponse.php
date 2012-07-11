<?php
/**
 * Class file for XiCurrenciesTypeGetHistoricalMonthlyCrossRatesRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetHistoricalMonthlyCrossRatesRangeResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetHistoricalMonthlyCrossRatesRangeResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetHistoricalMonthlyCrossRatesRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeFullHistoricalCrossRates
	 */
	public $GetHistoricalMonthlyCrossRatesRangeResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeFullHistoricalCrossRates GetHistoricalMonthlyCrossRatesRangeResult
	 * @return XiCurrenciesTypeGetHistoricalMonthlyCrossRatesRangeResponse
	 */
	public function __construct($_GetHistoricalMonthlyCrossRatesRangeResult = null)
	{
		parent::__construct(array('GetHistoricalMonthlyCrossRatesRangeResult'=>$_GetHistoricalMonthlyCrossRatesRangeResult));
	}
	/**
	 * Set GetHistoricalMonthlyCrossRatesRangeResult
	 * @param FullHistoricalCrossRates GetHistoricalMonthlyCrossRatesRangeResult
	 * @return FullHistoricalCrossRates
	 */
	public function setGetHistoricalMonthlyCrossRatesRangeResult($_GetHistoricalMonthlyCrossRatesRangeResult)
	{
		return ($this->GetHistoricalMonthlyCrossRatesRangeResult = $_GetHistoricalMonthlyCrossRatesRangeResult);
	}
	/**
	 * Get GetHistoricalMonthlyCrossRatesRangeResult
	 * @return XiCurrenciesTypeFullHistoricalCrossRates
	 */
	public function getGetHistoricalMonthlyCrossRatesRangeResult()
	{
		return $this->GetHistoricalMonthlyCrossRatesRangeResult;
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