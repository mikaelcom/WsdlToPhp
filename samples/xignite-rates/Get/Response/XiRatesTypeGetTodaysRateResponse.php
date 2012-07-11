<?php
/**
 * Class file for XiRatesTypeGetTodaysRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetTodaysRateResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetTodaysRateResponse extends XiRatesWsdlClass
{
	/**
	 * The GetTodaysRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeInterestRate
	 */
	public $GetTodaysRateResult;
	/**
	 * Constructor
	 * @param XiRatesTypeInterestRate GetTodaysRateResult
	 * @return XiRatesTypeGetTodaysRateResponse
	 */
	public function __construct($_GetTodaysRateResult = null)
	{
		parent::__construct(array('GetTodaysRateResult'=>$_GetTodaysRateResult));
	}
	/**
	 * Set GetTodaysRateResult
	 * @param InterestRate GetTodaysRateResult
	 * @return InterestRate
	 */
	public function setGetTodaysRateResult($_GetTodaysRateResult)
	{
		return ($this->GetTodaysRateResult = $_GetTodaysRateResult);
	}
	/**
	 * Get GetTodaysRateResult
	 * @return XiRatesTypeInterestRate
	 */
	public function getGetTodaysRateResult()
	{
		return $this->GetTodaysRateResult;
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