<?php
/**
 * Class file for XiRatesTypeGetAverageRatesResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetAverageRatesResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetAverageRatesResponse extends XiRatesWsdlClass
{
	/**
	 * The GetAverageRatesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeHistoricalInterestRates
	 */
	public $GetAverageRatesResult;
	/**
	 * Constructor
	 * @param XiRatesTypeHistoricalInterestRates GetAverageRatesResult
	 * @return XiRatesTypeGetAverageRatesResponse
	 */
	public function __construct($_GetAverageRatesResult = null)
	{
		parent::__construct(array('GetAverageRatesResult'=>$_GetAverageRatesResult));
	}
	/**
	 * Set GetAverageRatesResult
	 * @param HistoricalInterestRates GetAverageRatesResult
	 * @return HistoricalInterestRates
	 */
	public function setGetAverageRatesResult($_GetAverageRatesResult)
	{
		return ($this->GetAverageRatesResult = $_GetAverageRatesResult);
	}
	/**
	 * Get GetAverageRatesResult
	 * @return XiRatesTypeHistoricalInterestRates
	 */
	public function getGetAverageRatesResult()
	{
		return $this->GetAverageRatesResult;
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