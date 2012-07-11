<?php
/**
 * Class file for XiInterBanksTypeGetRateDescription
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetRateDescription
 * @date 08/07/2012
 */
class XiInterBanksTypeGetRateDescription extends XiInterBanksWsdlClass
{
	/**
	 * The RateType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeRateTypes
	 */
	public $RateType;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRateTypes RateType
	 * @return XiInterBanksTypeGetRateDescription
	 */
	public function __construct($_RateType)
	{
		parent::__construct(array('RateType'=>$_RateType));
	}
	/**
	 * Set RateType
	 * @param RateTypes RateType
	 * @return RateTypes
	 */
	public function setRateType($_RateType)
	{
		return ($this->RateType = XiInterBanksTypeRateTypes::valueIsValid($_RateType)?$_RateType:null);
	}
	/**
	 * Get RateType
	 * @return XiInterBanksTypeRateTypes
	 */
	public function getRateType()
	{
		return $this->RateType;
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