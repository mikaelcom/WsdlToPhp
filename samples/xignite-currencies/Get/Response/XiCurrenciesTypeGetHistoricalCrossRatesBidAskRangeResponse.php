<?php
/**
 * Class file for XiCurrenciesTypeGetHistoricalCrossRatesBidAskRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetHistoricalCrossRatesBidAskRangeResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetHistoricalCrossRatesBidAskRangeResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetHistoricalCrossRatesBidAskRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeFullHistoricalCrossRates
	 */
	public $GetHistoricalCrossRatesBidAskRangeResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeFullHistoricalCrossRates GetHistoricalCrossRatesBidAskRangeResult
	 * @return XiCurrenciesTypeGetHistoricalCrossRatesBidAskRangeResponse
	 */
	public function __construct($_GetHistoricalCrossRatesBidAskRangeResult = null)
	{
		parent::__construct(array('GetHistoricalCrossRatesBidAskRangeResult'=>$_GetHistoricalCrossRatesBidAskRangeResult));
	}
	/**
	 * Set GetHistoricalCrossRatesBidAskRangeResult
	 * @param FullHistoricalCrossRates GetHistoricalCrossRatesBidAskRangeResult
	 * @return FullHistoricalCrossRates
	 */
	public function setGetHistoricalCrossRatesBidAskRangeResult($_GetHistoricalCrossRatesBidAskRangeResult)
	{
		return ($this->GetHistoricalCrossRatesBidAskRangeResult = $_GetHistoricalCrossRatesBidAskRangeResult);
	}
	/**
	 * Get GetHistoricalCrossRatesBidAskRangeResult
	 * @return XiCurrenciesTypeFullHistoricalCrossRates
	 */
	public function getGetHistoricalCrossRatesBidAskRangeResult()
	{
		return $this->GetHistoricalCrossRatesBidAskRangeResult;
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