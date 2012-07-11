<?php
/**
 * Class file for XiRatesTypeGetRateAsOfTimeResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetRateAsOfTimeResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetRateAsOfTimeResponse extends XiRatesWsdlClass
{
	/**
	 * The GetRateAsOfTimeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeInterestRate
	 */
	public $GetRateAsOfTimeResult;
	/**
	 * Constructor
	 * @param XiRatesTypeInterestRate GetRateAsOfTimeResult
	 * @return XiRatesTypeGetRateAsOfTimeResponse
	 */
	public function __construct($_GetRateAsOfTimeResult = null)
	{
		parent::__construct(array('GetRateAsOfTimeResult'=>$_GetRateAsOfTimeResult));
	}
	/**
	 * Set GetRateAsOfTimeResult
	 * @param InterestRate GetRateAsOfTimeResult
	 * @return InterestRate
	 */
	public function setGetRateAsOfTimeResult($_GetRateAsOfTimeResult)
	{
		return ($this->GetRateAsOfTimeResult = $_GetRateAsOfTimeResult);
	}
	/**
	 * Get GetRateAsOfTimeResult
	 * @return XiRatesTypeInterestRate
	 */
	public function getGetRateAsOfTimeResult()
	{
		return $this->GetRateAsOfTimeResult;
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