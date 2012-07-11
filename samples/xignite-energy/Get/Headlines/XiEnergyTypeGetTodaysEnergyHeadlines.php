<?php
/**
 * Class file for XiEnergyTypeGetTodaysEnergyHeadlines
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetTodaysEnergyHeadlines
 * @date 08/07/2012
 */
class XiEnergyTypeGetTodaysEnergyHeadlines extends XiEnergyWsdlClass
{
	/**
	 * The Industry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeIndustryTypes
	 */
	public $Industry;
	/**
	 * Constructor
	 * @param XiEnergyTypeIndustryTypes Industry
	 * @return XiEnergyTypeGetTodaysEnergyHeadlines
	 */
	public function __construct($_Industry)
	{
		parent::__construct(array('Industry'=>$_Industry));
	}
	/**
	 * Set Industry
	 * @param IndustryTypes Industry
	 * @return IndustryTypes
	 */
	public function setIndustry($_Industry)
	{
		return ($this->Industry = XiEnergyTypeIndustryTypes::valueIsValid($_Industry)?$_Industry:null);
	}
	/**
	 * Get Industry
	 * @return XiEnergyTypeIndustryTypes
	 */
	public function getIndustry()
	{
		return $this->Industry;
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