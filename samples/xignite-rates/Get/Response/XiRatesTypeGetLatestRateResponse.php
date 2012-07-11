<?php
/**
 * Class file for XiRatesTypeGetLatestRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetLatestRateResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetLatestRateResponse extends XiRatesWsdlClass
{
	/**
	 * The GetLatestRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeInterestRate
	 */
	public $GetLatestRateResult;
	/**
	 * Constructor
	 * @param XiRatesTypeInterestRate GetLatestRateResult
	 * @return XiRatesTypeGetLatestRateResponse
	 */
	public function __construct($_GetLatestRateResult = null)
	{
		parent::__construct(array('GetLatestRateResult'=>$_GetLatestRateResult));
	}
	/**
	 * Set GetLatestRateResult
	 * @param InterestRate GetLatestRateResult
	 * @return InterestRate
	 */
	public function setGetLatestRateResult($_GetLatestRateResult)
	{
		return ($this->GetLatestRateResult = $_GetLatestRateResult);
	}
	/**
	 * Get GetLatestRateResult
	 * @return XiRatesTypeInterestRate
	 */
	public function getGetLatestRateResult()
	{
		return $this->GetLatestRateResult;
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