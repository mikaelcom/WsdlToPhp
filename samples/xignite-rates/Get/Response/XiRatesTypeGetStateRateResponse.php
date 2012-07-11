<?php
/**
 * Class file for XiRatesTypeGetStateRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetStateRateResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetStateRateResponse extends XiRatesWsdlClass
{
	/**
	 * The GetStateRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeInterestRate
	 */
	public $GetStateRateResult;
	/**
	 * Constructor
	 * @param XiRatesTypeInterestRate GetStateRateResult
	 * @return XiRatesTypeGetStateRateResponse
	 */
	public function __construct($_GetStateRateResult = null)
	{
		parent::__construct(array('GetStateRateResult'=>$_GetStateRateResult));
	}
	/**
	 * Set GetStateRateResult
	 * @param InterestRate GetStateRateResult
	 * @return InterestRate
	 */
	public function setGetStateRateResult($_GetStateRateResult)
	{
		return ($this->GetStateRateResult = $_GetStateRateResult);
	}
	/**
	 * Get GetStateRateResult
	 * @return XiRatesTypeInterestRate
	 */
	public function getGetStateRateResult()
	{
		return $this->GetStateRateResult;
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