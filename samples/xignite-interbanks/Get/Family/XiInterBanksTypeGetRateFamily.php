<?php
/**
 * Class file for XiInterBanksTypeGetRateFamily
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetRateFamily
 * @date 08/07/2012
 */
class XiInterBanksTypeGetRateFamily extends XiInterBanksWsdlClass
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
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRateFamilyTypes RateFamilyType
	 * @param string AsOfDate
	 * @return XiInterBanksTypeGetRateFamily
	 */
	public function __construct($_RateFamilyType,$_AsOfDate = null)
	{
		parent::__construct(array('RateFamilyType'=>$_RateFamilyType,'AsOfDate'=>$_AsOfDate));
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
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
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