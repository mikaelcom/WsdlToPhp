<?php
/**
 * Class file for XiFundamentalsTypeSector
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeSector
 * @date 08/07/2012
 */
class XiFundamentalsTypeSector extends XiFundamentalsTypeCommon
{
	/**
	 * The Code
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Code;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The IndustryGroups
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeArrayOfIndustryGroup
	 */
	public $IndustryGroups;
	/**
	 * Constructor
	 * @param string Code
	 * @param string Name
	 * @param XiFundamentalsTypeArrayOfIndustryGroup IndustryGroups
	 * @return XiFundamentalsTypeSector
	 */
	public function __construct($_Code = null,$_Name = null,$_IndustryGroups = null)
	{
		XiFundamentalsWsdlClass::__construct(array('Code'=>$_Code,'Name'=>$_Name,'IndustryGroups'=>new XiFundamentalsTypeArrayOfIndustryGroup($_IndustryGroups)));
	}
	/**
	 * Set Code
	 * @param string Code
	 * @return string
	 */
	public function setCode($_Code)
	{
		return ($this->Code = $_Code);
	}
	/**
	 * Get Code
	 * @return string
	 */
	public function getCode()
	{
		return $this->Code;
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set IndustryGroups
	 * @param ArrayOfIndustryGroup IndustryGroups
	 * @return ArrayOfIndustryGroup
	 */
	public function setIndustryGroups($_IndustryGroups)
	{
		return ($this->IndustryGroups = $_IndustryGroups);
	}
	/**
	 * Get IndustryGroups
	 * @return XiFundamentalsTypeArrayOfIndustryGroup
	 */
	public function getIndustryGroups()
	{
		return $this->IndustryGroups;
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