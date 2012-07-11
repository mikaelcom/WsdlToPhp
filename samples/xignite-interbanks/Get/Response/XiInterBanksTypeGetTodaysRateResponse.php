<?php
/**
 * Class file for XiInterBanksTypeGetTodaysRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetTodaysRateResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetTodaysRateResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetTodaysRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeInterestRate
	 */
	public $GetTodaysRateResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeInterestRate GetTodaysRateResult
	 * @return XiInterBanksTypeGetTodaysRateResponse
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
	 * @return XiInterBanksTypeInterestRate
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