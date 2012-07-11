<?php
/**
 * Class file for XiInterBanksTypeGetLatestRateFamilyResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetLatestRateFamilyResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetLatestRateFamilyResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetLatestRateFamilyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeArrayOfInterestRate
	 */
	public $GetLatestRateFamilyResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeArrayOfInterestRate GetLatestRateFamilyResult
	 * @return XiInterBanksTypeGetLatestRateFamilyResponse
	 */
	public function __construct($_GetLatestRateFamilyResult = null)
	{
		parent::__construct(array('GetLatestRateFamilyResult'=>new XiInterBanksTypeArrayOfInterestRate($_GetLatestRateFamilyResult)));
	}
	/**
	 * Set GetLatestRateFamilyResult
	 * @param ArrayOfInterestRate GetLatestRateFamilyResult
	 * @return ArrayOfInterestRate
	 */
	public function setGetLatestRateFamilyResult($_GetLatestRateFamilyResult)
	{
		return ($this->GetLatestRateFamilyResult = $_GetLatestRateFamilyResult);
	}
	/**
	 * Get GetLatestRateFamilyResult
	 * @return XiInterBanksTypeArrayOfInterestRate
	 */
	public function getGetLatestRateFamilyResult()
	{
		return $this->GetLatestRateFamilyResult;
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