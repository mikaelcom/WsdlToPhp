<?php
/**
 * Class file for XiRatesTypeGetMonthlyTreasuryAverageResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetMonthlyTreasuryAverageResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetMonthlyTreasuryAverageResponse extends XiRatesWsdlClass
{
	/**
	 * The GetMonthlyTreasuryAverageResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeHistoricalInterestRates
	 */
	public $GetMonthlyTreasuryAverageResult;
	/**
	 * Constructor
	 * @param XiRatesTypeHistoricalInterestRates GetMonthlyTreasuryAverageResult
	 * @return XiRatesTypeGetMonthlyTreasuryAverageResponse
	 */
	public function __construct($_GetMonthlyTreasuryAverageResult = null)
	{
		parent::__construct(array('GetMonthlyTreasuryAverageResult'=>$_GetMonthlyTreasuryAverageResult));
	}
	/**
	 * Set GetMonthlyTreasuryAverageResult
	 * @param HistoricalInterestRates GetMonthlyTreasuryAverageResult
	 * @return HistoricalInterestRates
	 */
	public function setGetMonthlyTreasuryAverageResult($_GetMonthlyTreasuryAverageResult)
	{
		return ($this->GetMonthlyTreasuryAverageResult = $_GetMonthlyTreasuryAverageResult);
	}
	/**
	 * Get GetMonthlyTreasuryAverageResult
	 * @return XiRatesTypeHistoricalInterestRates
	 */
	public function getGetMonthlyTreasuryAverageResult()
	{
		return $this->GetMonthlyTreasuryAverageResult;
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