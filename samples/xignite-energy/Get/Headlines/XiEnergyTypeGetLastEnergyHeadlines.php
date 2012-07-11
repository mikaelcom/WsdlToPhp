<?php
/**
 * Class file for XiEnergyTypeGetLastEnergyHeadlines
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetLastEnergyHeadlines
 * @date 08/07/2012
 */
class XiEnergyTypeGetLastEnergyHeadlines extends XiEnergyWsdlClass
{
	/**
	 * The SinceDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SinceDate;
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
	 * @param string SinceDate
	 * @param XiEnergyTypeIndustryTypes Industry
	 * @return XiEnergyTypeGetLastEnergyHeadlines
	 */
	public function __construct($_SinceDate = null,$_Industry)
	{
		parent::__construct(array('SinceDate'=>$_SinceDate,'Industry'=>$_Industry));
	}
	/**
	 * Set SinceDate
	 * @param string SinceDate
	 * @return string
	 */
	public function setSinceDate($_SinceDate)
	{
		return ($this->SinceDate = $_SinceDate);
	}
	/**
	 * Get SinceDate
	 * @return string
	 */
	public function getSinceDate()
	{
		return $this->SinceDate;
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