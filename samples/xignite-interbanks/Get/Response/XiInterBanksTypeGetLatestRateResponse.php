<?php
/**
 * Class file for XiInterBanksTypeGetLatestRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetLatestRateResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetLatestRateResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetLatestRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeInterestRate
	 */
	public $GetLatestRateResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeInterestRate GetLatestRateResult
	 * @return XiInterBanksTypeGetLatestRateResponse
	 */
	public function __construct($_GetLatestRateResult = null)
	{
		parent::__construct(array('GetLatestRateResult'=>$_GetLatestRateResult));
	}
	/**
	 * Set GetLatestRateResult
	 * @param InterestRate GetLatestRateResult
	 * @return InterestRate
	 */
	public function setGetLatestRateResult($_GetLatestRateResult)
	{
		return ($this->GetLatestRateResult = $_GetLatestRateResult);
	}
	/**
	 * Get GetLatestRateResult
	 * @return XiInterBanksTypeInterestRate
	 */
	public function getGetLatestRateResult()
	{
		return $this->GetLatestRateResult;
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