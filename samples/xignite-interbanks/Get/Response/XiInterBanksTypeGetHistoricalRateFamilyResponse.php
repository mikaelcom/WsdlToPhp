<?php
/**
 * Class file for XiInterBanksTypeGetHistoricalRateFamilyResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetHistoricalRateFamilyResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetHistoricalRateFamilyResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetHistoricalRateFamilyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeFamilyRates
	 */
	public $GetHistoricalRateFamilyResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeFamilyRates GetHistoricalRateFamilyResult
	 * @return XiInterBanksTypeGetHistoricalRateFamilyResponse
	 */
	public function __construct($_GetHistoricalRateFamilyResult = null)
	{
		parent::__construct(array('GetHistoricalRateFamilyResult'=>$_GetHistoricalRateFamilyResult));
	}
	/**
	 * Set GetHistoricalRateFamilyResult
	 * @param FamilyRates GetHistoricalRateFamilyResult
	 * @return FamilyRates
	 */
	public function setGetHistoricalRateFamilyResult($_GetHistoricalRateFamilyResult)
	{
		return ($this->GetHistoricalRateFamilyResult = $_GetHistoricalRateFamilyResult);
	}
	/**
	 * Get GetHistoricalRateFamilyResult
	 * @return XiInterBanksTypeFamilyRates
	 */
	public function getGetHistoricalRateFamilyResult()
	{
		return $this->GetHistoricalRateFamilyResult;
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