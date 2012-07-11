<?php
/**
 * Class file for XiRatesTypeGetAverageRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetAverageRateResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetAverageRateResponse extends XiRatesWsdlClass
{
	/**
	 * The GetAverageRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeInterestRate
	 */
	public $GetAverageRateResult;
	/**
	 * Constructor
	 * @param XiRatesTypeInterestRate GetAverageRateResult
	 * @return XiRatesTypeGetAverageRateResponse
	 */
	public function __construct($_GetAverageRateResult = null)
	{
		parent::__construct(array('GetAverageRateResult'=>$_GetAverageRateResult));
	}
	/**
	 * Set GetAverageRateResult
	 * @param InterestRate GetAverageRateResult
	 * @return InterestRate
	 */
	public function setGetAverageRateResult($_GetAverageRateResult)
	{
		return ($this->GetAverageRateResult = $_GetAverageRateResult);
	}
	/**
	 * Get GetAverageRateResult
	 * @return XiRatesTypeInterestRate
	 */
	public function getGetAverageRateResult()
	{
		return $this->GetAverageRateResult;
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