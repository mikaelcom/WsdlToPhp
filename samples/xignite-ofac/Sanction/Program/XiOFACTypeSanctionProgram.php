<?php
/**
 * Class file for XiOFACTypeSanctionProgram
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeSanctionProgram
 * @date 08/07/2012
 */
class XiOFACTypeSanctionProgram extends XiOFACTypeCommon
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
	 * The Sanction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Sanction;
	/**
	 * Constructor
	 * @param string Code
	 * @param string Name
	 * @param string Sanction
	 * @return XiOFACTypeSanctionProgram
	 */
	public function __construct($_Code = null,$_Name = null,$_Sanction = null)
	{
		XiOFACWsdlClass::__construct(array('Code'=>$_Code,'Name'=>$_Name,'Sanction'=>$_Sanction));
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
	 * Set Sanction
	 * @param string Sanction
	 * @return string
	 */
	public function setSanction($_Sanction)
	{
		return ($this->Sanction = $_Sanction);
	}
	/**
	 * Get Sanction
	 * @return string
	 */
	public function getSanction()
	{
		return $this->Sanction;
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