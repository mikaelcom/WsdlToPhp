<?php
/**
 * Class file for XiRatesTypeListRatesByRateFamily
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeListRatesByRateFamily
 * @date 08/07/2012
 */
class XiRatesTypeListRatesByRateFamily extends XiRatesWsdlClass
{
	/**
	 * The RateFamilyType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RateFamilyType;
	/**
	 * Constructor
	 * @param string RateFamilyType
	 * @return XiRatesTypeListRatesByRateFamily
	 */
	public function __construct($_RateFamilyType = null)
	{
		parent::__construct(array('RateFamilyType'=>$_RateFamilyType));
	}
	/**
	 * Set RateFamilyType
	 * @param string RateFamilyType
	 * @return string
	 */
	public function setRateFamilyType($_RateFamilyType)
	{
		return ($this->RateFamilyType = $_RateFamilyType);
	}
	/**
	 * Get RateFamilyType
	 * @return string
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