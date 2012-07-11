<?php
/**
 * Class file for XiSecurityTypeLookup
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeLookup
 * @date 08/07/2012
 */
class XiSecurityTypeLookup extends XiSecurityWsdlClass
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
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeLookupType
	 */
	public $Type;
	/**
	 * Constructor
	 * @param string Name
	 * @param XiSecurityTypeLookupType Type
	 * @return XiSecurityTypeLookup
	 */
	public function __construct($_Name = null,$_Type)
	{
		parent::__construct(array('Name'=>$_Name,'Type'=>$_Type));
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
	 * Set Type
	 * @param LookupType Type
	 * @return LookupType
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiSecurityTypeLookupType::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiSecurityTypeLookupType
	 */
	public function getType()
	{
		return $this->Type;
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