<?php
/**
 * Class file for XiInterBanksTypeGetRateFamilyResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetRateFamilyResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetRateFamilyResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetRateFamilyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeArrayOfInterestRate
	 */
	public $GetRateFamilyResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeArrayOfInterestRate GetRateFamilyResult
	 * @return XiInterBanksTypeGetRateFamilyResponse
	 */
	public function __construct($_GetRateFamilyResult = null)
	{
		parent::__construct(array('GetRateFamilyResult'=>new XiInterBanksTypeArrayOfInterestRate($_GetRateFamilyResult)));
	}
	/**
	 * Set GetRateFamilyResult
	 * @param ArrayOfInterestRate GetRateFamilyResult
	 * @return ArrayOfInterestRate
	 */
	public function setGetRateFamilyResult($_GetRateFamilyResult)
	{
		return ($this->GetRateFamilyResult = $_GetRateFamilyResult);
	}
	/**
	 * Get GetRateFamilyResult
	 * @return XiInterBanksTypeArrayOfInterestRate
	 */
	public function getGetRateFamilyResult()
	{
		return $this->GetRateFamilyResult;
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