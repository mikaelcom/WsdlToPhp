<?php
/**
 * Class file for XiInterBanksTypeGetRateFamilyTableResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetRateFamilyTableResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetRateFamilyTableResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetRateFamilyTableResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeRateTable
	 */
	public $GetRateFamilyTableResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRateTable GetRateFamilyTableResult
	 * @return XiInterBanksTypeGetRateFamilyTableResponse
	 */
	public function __construct($_GetRateFamilyTableResult = null)
	{
		parent::__construct(array('GetRateFamilyTableResult'=>$_GetRateFamilyTableResult));
	}
	/**
	 * Set GetRateFamilyTableResult
	 * @param RateTable GetRateFamilyTableResult
	 * @return RateTable
	 */
	public function setGetRateFamilyTableResult($_GetRateFamilyTableResult)
	{
		return ($this->GetRateFamilyTableResult = $_GetRateFamilyTableResult);
	}
	/**
	 * Get GetRateFamilyTableResult
	 * @return XiInterBanksTypeRateTable
	 */
	public function getGetRateFamilyTableResult()
	{
		return $this->GetRateFamilyTableResult;
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