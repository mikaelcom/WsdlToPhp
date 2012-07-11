<?php
/**
 * Class file for XiInterBanksTypeGetLatestRateFamily
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetLatestRateFamily
 * @date 08/07/2012
 */
class XiInterBanksTypeGetLatestRateFamily extends XiInterBanksWsdlClass
{
	/**
	 * The RateFamilyType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeRateFamilyTypes
	 */
	public $RateFamilyType;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRateFamilyTypes RateFamilyType
	 * @return XiInterBanksTypeGetLatestRateFamily
	 */
	public function __construct($_RateFamilyType)
	{
		parent::__construct(array('RateFamilyType'=>$_RateFamilyType));
	}
	/**
	 * Set RateFamilyType
	 * @param RateFamilyTypes RateFamilyType
	 * @return RateFamilyTypes
	 */
	public function setRateFamilyType($_RateFamilyType)
	{
		return ($this->RateFamilyType = XiInterBanksTypeRateFamilyTypes::valueIsValid($_RateFamilyType)?$_RateFamilyType:null);
	}
	/**
	 * Get RateFamilyType
	 * @return XiInterBanksTypeRateFamilyTypes
	 */
	public function getRateFamilyType()
	{
		return $this->RateFamilyType;
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