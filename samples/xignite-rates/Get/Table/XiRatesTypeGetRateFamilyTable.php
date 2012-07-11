<?php
/**
 * Class file for XiRatesTypeGetRateFamilyTable
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetRateFamilyTable
 * @date 08/07/2012
 */
class XiRatesTypeGetRateFamilyTable extends XiRatesWsdlClass
{
	/**
	 * The RateFamilyType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeRateFamilyTypes
	 */
	public $RateFamilyType;
	/**
	 * Constructor
	 * @param XiRatesTypeRateFamilyTypes RateFamilyType
	 * @return XiRatesTypeGetRateFamilyTable
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
		return ($this->RateFamilyType = XiRatesTypeRateFamilyTypes::valueIsValid($_RateFamilyType)?$_RateFamilyType:null);
	}
	/**
	 * Get RateFamilyType
	 * @return XiRatesTypeRateFamilyTypes
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