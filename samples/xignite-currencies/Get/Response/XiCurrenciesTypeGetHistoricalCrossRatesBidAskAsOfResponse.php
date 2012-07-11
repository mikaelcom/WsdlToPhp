<?php
/**
 * Class file for XiCurrenciesTypeGetHistoricalCrossRatesBidAskAsOfResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetHistoricalCrossRatesBidAskAsOfResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetHistoricalCrossRatesBidAskAsOfResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetHistoricalCrossRatesBidAskAsOfResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeFullHistoricalCrossRates
	 */
	public $GetHistoricalCrossRatesBidAskAsOfResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeFullHistoricalCrossRates GetHistoricalCrossRatesBidAskAsOfResult
	 * @return XiCurrenciesTypeGetHistoricalCrossRatesBidAskAsOfResponse
	 */
	public function __construct($_GetHistoricalCrossRatesBidAskAsOfResult = null)
	{
		parent::__construct(array('GetHistoricalCrossRatesBidAskAsOfResult'=>$_GetHistoricalCrossRatesBidAskAsOfResult));
	}
	/**
	 * Set GetHistoricalCrossRatesBidAskAsOfResult
	 * @param FullHistoricalCrossRates GetHistoricalCrossRatesBidAskAsOfResult
	 * @return FullHistoricalCrossRates
	 */
	public function setGetHistoricalCrossRatesBidAskAsOfResult($_GetHistoricalCrossRatesBidAskAsOfResult)
	{
		return ($this->GetHistoricalCrossRatesBidAskAsOfResult = $_GetHistoricalCrossRatesBidAskAsOfResult);
	}
	/**
	 * Get GetHistoricalCrossRatesBidAskAsOfResult
	 * @return XiCurrenciesTypeFullHistoricalCrossRates
	 */
	public function getGetHistoricalCrossRatesBidAskAsOfResult()
	{
		return $this->GetHistoricalCrossRatesBidAskAsOfResult;
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