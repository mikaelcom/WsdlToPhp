<?php
/**
 * Class file for XiRatesTypeGetDailyAverageResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetDailyAverageResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetDailyAverageResponse extends XiRatesWsdlClass
{
	/**
	 * The GetDailyAverageResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeHistoricalInterestRates
	 */
	public $GetDailyAverageResult;
	/**
	 * Constructor
	 * @param XiRatesTypeHistoricalInterestRates GetDailyAverageResult
	 * @return XiRatesTypeGetDailyAverageResponse
	 */
	public function __construct($_GetDailyAverageResult = null)
	{
		parent::__construct(array('GetDailyAverageResult'=>$_GetDailyAverageResult));
	}
	/**
	 * Set GetDailyAverageResult
	 * @param HistoricalInterestRates GetDailyAverageResult
	 * @return HistoricalInterestRates
	 */
	public function setGetDailyAverageResult($_GetDailyAverageResult)
	{
		return ($this->GetDailyAverageResult = $_GetDailyAverageResult);
	}
	/**
	 * Get GetDailyAverageResult
	 * @return XiRatesTypeHistoricalInterestRates
	 */
	public function getGetDailyAverageResult()
	{
		return $this->GetDailyAverageResult;
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