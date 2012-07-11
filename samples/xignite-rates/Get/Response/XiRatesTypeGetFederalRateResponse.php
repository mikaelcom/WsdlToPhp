<?php
/**
 * Class file for XiRatesTypeGetFederalRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetFederalRateResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetFederalRateResponse extends XiRatesWsdlClass
{
	/**
	 * The GetFederalRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeInterestRate
	 */
	public $GetFederalRateResult;
	/**
	 * Constructor
	 * @param XiRatesTypeInterestRate GetFederalRateResult
	 * @return XiRatesTypeGetFederalRateResponse
	 */
	public function __construct($_GetFederalRateResult = null)
	{
		parent::__construct(array('GetFederalRateResult'=>$_GetFederalRateResult));
	}
	/**
	 * Set GetFederalRateResult
	 * @param InterestRate GetFederalRateResult
	 * @return InterestRate
	 */
	public function setGetFederalRateResult($_GetFederalRateResult)
	{
		return ($this->GetFederalRateResult = $_GetFederalRateResult);
	}
	/**
	 * Get GetFederalRateResult
	 * @return XiRatesTypeInterestRate
	 */
	public function getGetFederalRateResult()
	{
		return $this->GetFederalRateResult;
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