<?php
/**
 * Class file for XiRatesTypeGetLatestRateSpecialResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetLatestRateSpecialResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetLatestRateSpecialResponse extends XiRatesWsdlClass
{
	/**
	 * The GetLatestRateSpecialResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeInterestRate
	 */
	public $GetLatestRateSpecialResult;
	/**
	 * Constructor
	 * @param XiRatesTypeInterestRate GetLatestRateSpecialResult
	 * @return XiRatesTypeGetLatestRateSpecialResponse
	 */
	public function __construct($_GetLatestRateSpecialResult = null)
	{
		parent::__construct(array('GetLatestRateSpecialResult'=>$_GetLatestRateSpecialResult));
	}
	/**
	 * Set GetLatestRateSpecialResult
	 * @param InterestRate GetLatestRateSpecialResult
	 * @return InterestRate
	 */
	public function setGetLatestRateSpecialResult($_GetLatestRateSpecialResult)
	{
		return ($this->GetLatestRateSpecialResult = $_GetLatestRateSpecialResult);
	}
	/**
	 * Get GetLatestRateSpecialResult
	 * @return XiRatesTypeInterestRate
	 */
	public function getGetLatestRateSpecialResult()
	{
		return $this->GetLatestRateSpecialResult;
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