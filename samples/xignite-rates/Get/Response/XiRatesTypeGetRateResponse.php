<?php
/**
 * Class file for XiRatesTypeGetRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetRateResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetRateResponse extends XiRatesWsdlClass
{
	/**
	 * The GetRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeInterestRate
	 */
	public $GetRateResult;
	/**
	 * Constructor
	 * @param XiRatesTypeInterestRate GetRateResult
	 * @return XiRatesTypeGetRateResponse
	 */
	public function __construct($_GetRateResult = null)
	{
		parent::__construct(array('GetRateResult'=>$_GetRateResult));
	}
	/**
	 * Set GetRateResult
	 * @param InterestRate GetRateResult
	 * @return InterestRate
	 */
	public function setGetRateResult($_GetRateResult)
	{
		return ($this->GetRateResult = $_GetRateResult);
	}
	/**
	 * Get GetRateResult
	 * @return XiRatesTypeInterestRate
	 */
	public function getGetRateResult()
	{
		return $this->GetRateResult;
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