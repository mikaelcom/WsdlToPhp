<?php
/**
 * Class file for XiRatesTypeGetRateMovingAverageResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetRateMovingAverageResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetRateMovingAverageResponse extends XiRatesWsdlClass
{
	/**
	 * The GetRateMovingAverageResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeHistoricalInterestRates
	 */
	public $GetRateMovingAverageResult;
	/**
	 * Constructor
	 * @param XiRatesTypeHistoricalInterestRates GetRateMovingAverageResult
	 * @return XiRatesTypeGetRateMovingAverageResponse
	 */
	public function __construct($_GetRateMovingAverageResult = null)
	{
		parent::__construct(array('GetRateMovingAverageResult'=>$_GetRateMovingAverageResult));
	}
	/**
	 * Set GetRateMovingAverageResult
	 * @param HistoricalInterestRates GetRateMovingAverageResult
	 * @return HistoricalInterestRates
	 */
	public function setGetRateMovingAverageResult($_GetRateMovingAverageResult)
	{
		return ($this->GetRateMovingAverageResult = $_GetRateMovingAverageResult);
	}
	/**
	 * Get GetRateMovingAverageResult
	 * @return XiRatesTypeHistoricalInterestRates
	 */
	public function getGetRateMovingAverageResult()
	{
		return $this->GetRateMovingAverageResult;
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