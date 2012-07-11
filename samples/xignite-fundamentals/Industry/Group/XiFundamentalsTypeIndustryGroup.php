<?php
/**
 * Class file for XiFundamentalsTypeIndustryGroup
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeIndustryGroup
 * @date 08/07/2012
 */
class XiFundamentalsTypeIndustryGroup extends XiFundamentalsWsdlClass
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
	 * The Industries
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeArrayOfIndustry
	 */
	public $Industries;
	/**
	 * Constructor
	 * @param string Code
	 * @param string Name
	 * @param XiFundamentalsTypeArrayOfIndustry Industries
	 * @return XiFundamentalsTypeIndustryGroup
	 */
	public function __construct($_Code = null,$_Name = null,$_Industries = null)
	{
		parent::__construct(array('Code'=>$_Code,'Name'=>$_Name,'Industries'=>new XiFundamentalsTypeArrayOfIndustry($_Industries)));
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
	 * Set Industries
	 * @param ArrayOfIndustry Industries
	 * @return ArrayOfIndustry
	 */
	public function setIndustries($_Industries)
	{
		return ($this->Industries = $_Industries);
	}
	/**
	 * Get Industries
	 * @return XiFundamentalsTypeArrayOfIndustry
	 */
	public function getIndustries()
	{
		return $this->Industries;
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