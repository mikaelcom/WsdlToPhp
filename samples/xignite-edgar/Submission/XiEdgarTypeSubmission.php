<?php
/**
 * Class file for XiEdgarTypeSubmission
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeSubmission
 * @date 08/07/2012
 */
class XiEdgarTypeSubmission extends XiEdgarTypeCommon
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The FilingType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FilingType;
	/**
	 * Constructor
	 * @param string Name
	 * @param string Description
	 * @param string FilingType
	 * @return XiEdgarTypeSubmission
	 */
	public function __construct($_Name = null,$_Description = null,$_FilingType = null)
	{
		XiEdgarWsdlClass::__construct(array('Name'=>$_Name,'Description'=>$_Description,'FilingType'=>$_FilingType));
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
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set FilingType
	 * @param string FilingType
	 * @return string
	 */
	public function setFilingType($_FilingType)
	{
		return ($this->FilingType = $_FilingType);
	}
	/**
	 * Get FilingType
	 * @return string
	 */
	public function getFilingType()
	{
		return $this->FilingType;
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