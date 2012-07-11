<?php
/**
 * Class file for XiMoneyMarketsTypeGetTreasuryRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeGetTreasuryRateResponse
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeGetTreasuryRateResponse extends XiMoneyMarketsWsdlClass
{
	/**
	 * The GetTreasuryRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeInterestRate
	 */
	public $GetTreasuryRateResult;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeInterestRate GetTreasuryRateResult
	 * @return XiMoneyMarketsTypeGetTreasuryRateResponse
	 */
	public function __construct($_GetTreasuryRateResult = null)
	{
		parent::__construct(array('GetTreasuryRateResult'=>$_GetTreasuryRateResult));
	}
	/**
	 * Set GetTreasuryRateResult
	 * @param InterestRate GetTreasuryRateResult
	 * @return InterestRate
	 */
	public function setGetTreasuryRateResult($_GetTreasuryRateResult)
	{
		return ($this->GetTreasuryRateResult = $_GetTreasuryRateResult);
	}
	/**
	 * Get GetTreasuryRateResult
	 * @return XiMoneyMarketsTypeInterestRate
	 */
	public function getGetTreasuryRateResult()
	{
		return $this->GetTreasuryRateResult;
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