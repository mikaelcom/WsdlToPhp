<?php
/**
 * Class file for XiMoneyMarketsTypeGetTreasuryRateFamilyResponse
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeGetTreasuryRateFamilyResponse
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeGetTreasuryRateFamilyResponse extends XiMoneyMarketsWsdlClass
{
	/**
	 * The GetTreasuryRateFamilyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeArrayOfInterestRate
	 */
	public $GetTreasuryRateFamilyResult;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeArrayOfInterestRate GetTreasuryRateFamilyResult
	 * @return XiMoneyMarketsTypeGetTreasuryRateFamilyResponse
	 */
	public function __construct($_GetTreasuryRateFamilyResult = null)
	{
		parent::__construct(array('GetTreasuryRateFamilyResult'=>new XiMoneyMarketsTypeArrayOfInterestRate($_GetTreasuryRateFamilyResult)));
	}
	/**
	 * Set GetTreasuryRateFamilyResult
	 * @param ArrayOfInterestRate GetTreasuryRateFamilyResult
	 * @return ArrayOfInterestRate
	 */
	public function setGetTreasuryRateFamilyResult($_GetTreasuryRateFamilyResult)
	{
		return ($this->GetTreasuryRateFamilyResult = $_GetTreasuryRateFamilyResult);
	}
	/**
	 * Get GetTreasuryRateFamilyResult
	 * @return XiMoneyMarketsTypeArrayOfInterestRate
	 */
	public function getGetTreasuryRateFamilyResult()
	{
		return $this->GetTreasuryRateFamilyResult;
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