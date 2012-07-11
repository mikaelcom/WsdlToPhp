<?php
/**
 * Class file for XiCurrenciesTypeGetAverageHistoricalCrossRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetAverageHistoricalCrossRateResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetAverageHistoricalCrossRateResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetAverageHistoricalCrossRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeAverageHistoricalCrossRate
	 */
	public $GetAverageHistoricalCrossRateResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeAverageHistoricalCrossRate GetAverageHistoricalCrossRateResult
	 * @return XiCurrenciesTypeGetAverageHistoricalCrossRateResponse
	 */
	public function __construct($_GetAverageHistoricalCrossRateResult = null)
	{
		parent::__construct(array('GetAverageHistoricalCrossRateResult'=>$_GetAverageHistoricalCrossRateResult));
	}
	/**
	 * Set GetAverageHistoricalCrossRateResult
	 * @param AverageHistoricalCrossRate GetAverageHistoricalCrossRateResult
	 * @return AverageHistoricalCrossRate
	 */
	public function setGetAverageHistoricalCrossRateResult($_GetAverageHistoricalCrossRateResult)
	{
		return ($this->GetAverageHistoricalCrossRateResult = $_GetAverageHistoricalCrossRateResult);
	}
	/**
	 * Get GetAverageHistoricalCrossRateResult
	 * @return XiCurrenciesTypeAverageHistoricalCrossRate
	 */
	public function getGetAverageHistoricalCrossRateResult()
	{
		return $this->GetAverageHistoricalCrossRateResult;
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