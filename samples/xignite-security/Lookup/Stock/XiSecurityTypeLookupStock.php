<?php
/**
 * Class file for XiSecurityTypeLookupStock
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeLookupStock
 * @date 08/07/2012
 */
class XiSecurityTypeLookupStock extends XiSecurityWsdlClass
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
	 * Constructor
	 * @param string Name
	 * @return XiSecurityTypeLookupStock
	 */
	public function __construct($_Name = null)
	{
		parent::__construct(array('Name'=>$_Name));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>