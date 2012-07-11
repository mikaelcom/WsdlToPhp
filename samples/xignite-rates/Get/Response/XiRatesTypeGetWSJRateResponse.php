<?php
/**
 * Class file for XiRatesTypeGetWSJRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetWSJRateResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetWSJRateResponse extends XiRatesWsdlClass
{
	/**
	 * The GetWSJRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeWSJInterestRate
	 */
	public $GetWSJRateResult;
	/**
	 * Constructor
	 * @param XiRatesTypeWSJInterestRate GetWSJRateResult
	 * @return XiRatesTypeGetWSJRateResponse
	 */
	public function __construct($_GetWSJRateResult = null)
	{
		parent::__construct(array('GetWSJRateResult'=>$_GetWSJRateResult));
	}
	/**
	 * Set GetWSJRateResult
	 * @param WSJInterestRate GetWSJRateResult
	 * @return WSJInterestRate
	 */
	public function setGetWSJRateResult($_GetWSJRateResult)
	{
		return ($this->GetWSJRateResult = $_GetWSJRateResult);
	}
	/**
	 * Get GetWSJRateResult
	 * @return XiRatesTypeWSJInterestRate
	 */
	public function getGetWSJRateResult()
	{
		return $this->GetWSJRateResult;
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