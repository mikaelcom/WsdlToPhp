<?php
/**
 * Class file for XiEdgarTypeSICCode
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeSICCode
 * @date 08/07/2012
 */
class XiEdgarTypeSICCode extends XiEdgarTypeCommon
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
	 * The Office
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Office;
	/**
	 * Constructor
	 * @param string Code
	 * @param string Name
	 * @param string Office
	 * @return XiEdgarTypeSICCode
	 */
	public function __construct($_Code = null,$_Name = null,$_Office = null)
	{
		XiEdgarWsdlClass::__construct(array('Code'=>$_Code,'Name'=>$_Name,'Office'=>$_Office));
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
	 * Set Office
	 * @param string Office
	 * @return string
	 */
	public function setOffice($_Office)
	{
		return ($this->Office = $_Office);
	}
	/**
	 * Get Office
	 * @return string
	 */
	public function getOffice()
	{
		return $this->Office;
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