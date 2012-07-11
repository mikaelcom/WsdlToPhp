<?php
/**
 * Class file for XiInterBanksTypeGetRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetRateResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetRateResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeInterestRate
	 */
	public $GetRateResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeInterestRate GetRateResult
	 * @return XiInterBanksTypeGetRateResponse
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
	 * @return XiInterBanksTypeInterestRate
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