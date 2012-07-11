<?php
/**
 * Class file for XiRatesTypeGetRealTimeRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetRealTimeRateResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetRealTimeRateResponse extends XiRatesWsdlClass
{
	/**
	 * The GetRealTimeRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeInterestRate
	 */
	public $GetRealTimeRateResult;
	/**
	 * Constructor
	 * @param XiRatesTypeInterestRate GetRealTimeRateResult
	 * @return XiRatesTypeGetRealTimeRateResponse
	 */
	public function __construct($_GetRealTimeRateResult = null)
	{
		parent::__construct(array('GetRealTimeRateResult'=>$_GetRealTimeRateResult));
	}
	/**
	 * Set GetRealTimeRateResult
	 * @param InterestRate GetRealTimeRateResult
	 * @return InterestRate
	 */
	public function setGetRealTimeRateResult($_GetRealTimeRateResult)
	{
		return ($this->GetRealTimeRateResult = $_GetRealTimeRateResult);
	}
	/**
	 * Get GetRealTimeRateResult
	 * @return XiRatesTypeInterestRate
	 */
	public function getGetRealTimeRateResult()
	{
		return $this->GetRealTimeRateResult;
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