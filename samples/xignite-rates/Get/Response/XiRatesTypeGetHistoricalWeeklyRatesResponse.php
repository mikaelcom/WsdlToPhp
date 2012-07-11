<?php
/**
 * Class file for XiRatesTypeGetHistoricalWeeklyRatesResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetHistoricalWeeklyRatesResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetHistoricalWeeklyRatesResponse extends XiRatesWsdlClass
{
	/**
	 * The GetHistoricalWeeklyRatesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeHistoricalInterestRates
	 */
	public $GetHistoricalWeeklyRatesResult;
	/**
	 * Constructor
	 * @param XiRatesTypeHistoricalInterestRates GetHistoricalWeeklyRatesResult
	 * @return XiRatesTypeGetHistoricalWeeklyRatesResponse
	 */
	public function __construct($_GetHistoricalWeeklyRatesResult = null)
	{
		parent::__construct(array('GetHistoricalWeeklyRatesResult'=>$_GetHistoricalWeeklyRatesResult));
	}
	/**
	 * Set GetHistoricalWeeklyRatesResult
	 * @param HistoricalInterestRates GetHistoricalWeeklyRatesResult
	 * @return HistoricalInterestRates
	 */
	public function setGetHistoricalWeeklyRatesResult($_GetHistoricalWeeklyRatesResult)
	{
		return ($this->GetHistoricalWeeklyRatesResult = $_GetHistoricalWeeklyRatesResult);
	}
	/**
	 * Get GetHistoricalWeeklyRatesResult
	 * @return XiRatesTypeHistoricalInterestRates
	 */
	public function getGetHistoricalWeeklyRatesResult()
	{
		return $this->GetHistoricalWeeklyRatesResult;
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